@extends('admin.layout.main')
@section('title', 'Добавление пользователя')
@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('admin.user.index')}}">Пользователи</a>
                            </li>
                            <li class="breadcrumb-item active">Добавление пользователя</li>
                        </ol>
                    </div><!-- /.col -->
                </div>

                <div class="row">

                    <div class="col-12">

                        <form action="{{ route('admin.user.store') }}" method="POST" class="pt-3 w-25">
                            @csrf
                            <div class="form-group">
                                <label>Имя</label>
                                <input type="text" class="form-control" name="name" placeholder="Имя пользователя"
                                       value="{{ old('name') }}">

                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Электронная почта</label>
                                <input type="email" class="form-control" name="email" placeholder="Email"
                                       value="{{ old('email') }}">

                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group w-50">
                                <label>Выберите роль</label>
                                <select name="role" class="form-control">
                                    @foreach($roles as $id => $role)
                                        <option value="{{$id}}"
                                            {{$id == old('role') ? 'selected' : ' '}}
                                        >{{$role}}</option>
                                    @endforeach
                                </select>

                                @error('role')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <input type="submit" class="btn btn-primary mt-2" value="Добавить">

                        </form>


                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
    </div>
@endsection
