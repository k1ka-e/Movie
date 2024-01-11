@extends('admin.layout.main')
@section('title', 'Добавление карьеры')
@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('admin.career.index')}}">Карьера</a>
                            </li>
                            <li class="breadcrumb-item active">Добавление карьеры</li>
                        </ol>
                    </div><!-- /.col -->
                </div>

                <div class="row">

                    <div class="col-12">

                        <form action="{{ route('admin.career.store') }}" method="POST" class="pt-3 w-25">
                            @csrf
                            <div class="form-group">
                                <label>Название</label>
                                <input type="text" class="form-control" name="title" placeholder="Название карьеры">

                                @error('title')
                                <div class="text-danger">Это поле необходимо заполнить</div>
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
