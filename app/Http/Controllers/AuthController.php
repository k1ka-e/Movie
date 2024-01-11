<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForgotRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Mail\User\ForgotPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $data = $request->validated();

        if (auth('web')->attempt($data)) {
            return redirect(route('home'));
        };

//        if (User::ROLE_ADMIN) {
//            return redirect('admin.main.index');
//        } else {
//            return redirect(route('home'));
//        }

        return redirect(route('login'))
            ->withErrors(['email' => 'Пользователь не найден, либо данные введены не правильно']);

    }

    public function logout()
    {
        auth('web')->logout();

        return redirect(route('home'));
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function showForgotForm()
    {
        return view('auth.forgot');
    }

    public function forgot(ForgotRequest $request)
    {
        $data = $request->validated();
        $user = User::where(['email' => $data['email']])->first();

        $password = uniqid();

        $user->password = $password;
        $user->save();

        Mail::to($user)->send(new ForgotPassword($password));

        return redirect(route('home'));
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password']
        ]);

        if ($user) {
            auth('web')->login($user);
        }

        return redirect(route('home'));
    }


}
