@extends('admin.layout.main')
@section('title', 'Редактирование жанра')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <div class="row mb-2">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('admin.genre.index')}}">Жанры</a>
                            </li>
                            <li class="breadcrumb-item active">Редактирование жанра</li>
                        </ol>
                    </div><!-- /.col -->
                </div>

                <div class="col-12">

                    <form action="{{ route('admin.genre.update', $genre->id) }}" method="POST" class="pt-3
                        w-25">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>Название</label>
                            <input type="text" class="form-control" name="title" placeholder="Название категории"
                                   value=" {{$genre->title}}">

                            @error('title')
                            <div class="text-danger">Это поле необходимо заполнить</div>
                            @enderror
                        </div>

                        <input type="submit" class="btn btn-primary mt-2" value="Обновить">

                    </form>


                </div>

            </div> <!-- container -->

        </div> <!-- content -->

    </div>
@endsection
