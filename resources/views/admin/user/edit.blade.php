@extends('admin.layout.main')
@section('title', 'Редактирование пользователя')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('admin.user.index')}}">Страны</a>
                            </li>
                            <li class="breadcrumb-item active">Редактирование пользователя</li>
                        </ol>
                    </div><!-- /.col -->
                </div>

                <div class="col-12">

                    <form action="{{ route('admin.user.update', $user->id) }}" method="POST" class="pt-3
                        w-25">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Имя</label>
                            <input type="text" class="form-control" name="name" placeholder="Имя пользователя"
                                   value=" {{$user->name}}">

                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Электронная почта</label>
                            <input type="email" class="form-control" name="email" placeholder="Email"
                                   value=" {{$user->email}}">

                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="form-group w-50">
                            <label>Выберите роль</label>
                            <select name="role" class="form-control">
                                @foreach($roles as $id => $role)
                                    <option value="{{$id}}"
                                        {{$id == $user->role ? 'selected' : ' '}}
                                    >{{$role}}</option>
                                @endforeach
                            </select>

                            @error('role')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group w-50">
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                        </div>

                        <input type="submit" class="btn btn-primary mt-2" value="Обновить">

                    </form>


                </div>

            </div> <!-- container -->

        </div> <!-- content -->

    </div>
@endsection
