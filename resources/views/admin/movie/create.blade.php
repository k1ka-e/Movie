@extends('admin.layout.main')
@section('title', 'Добавление фильма')
@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('admin.movie.index')}}">Фильмы</a>
                            </li>
                            <li class="breadcrumb-item active">Добавление фильма</li>
                        </ol>
                    </div><!-- /.col -->
                </div>

                <div class="row">

                    <div class="col-12">
                        <form action="{{ route('admin.movie.store') }}" method="POST" enctype="multipart/form-data"
                              class="pt-3">
                            @csrf
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Название</label>
                                    <input type="text" class="form-control" name="name"
                                           placeholder="Название фильма">
                                    @error('name')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Год</label>
                                    <input type="date" class="form-control" name="year"
                                           placeholder="Год выпуска">

                                    @error('year')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="example-multiselect" class="form-label">Выберите жанр</label>
                                    <select name="genre_ids[]" id="example-multiselect" multiple class="select2 form-select">
                                        @foreach($genres as $genre)
                                            <option value="{{$genre->id}}">{{$genre->title}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                @error('genre_ids')
                                <div class="text-danger">Это поле необходимо выбрать</div>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Выберите страну</label>
                                    <select class="form-select select2" name="country_id" id="example-select">
                                        @foreach($countries as $country)
                                            <option
                                                value="{{ $country->id }}" {{ $country->id == old('country_id') ? 'selected' : '' }}>
                                                {{ $country->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                @error('country_id')
                                <div class="text-danger">Это поле необходимо выбрать</div>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Возраст</label>
                                    <input type="text" class="form-control" name="age"
                                           placeholder="Возраст для просмотра">

                                    @error('age')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Описание</label>
                                    <textarea type="text" class="form-control" name="description"
                                              placeholder="Описание фильма"></textarea>

                                    @error('description')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="example-fileinput" class="form-label">Добавить фото</label>
                                    <input type="file" name="image" id="example-fileinput" class="form-control">
                                </div>

                                @error('image')
                                <div class="text-danger">Это поле необходимо заполнить</div>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Ссылка на трейлер</label>
                                    <input type="text" class="form-control" name="trailer"
                                           placeholder="Ссылка на трейлер">

                                    @error('trailer')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Ссылка на видео</label>
                                    <input type="text" class="form-control" name="video"
                                           placeholder="Ссылка на видео">

                                    @error('video')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>

                            <input type="submit" class="btn btn-primary mt-2" value="Добавить">

                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
    </div>
@endsection
