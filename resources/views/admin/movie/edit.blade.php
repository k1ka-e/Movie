@extends('admin.layout.main')
@section('title', 'Редактирование создателя или актера')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('admin.movie.index')}}">Создатели и
                                    актеры</a>
                            </li>
                            <li class="breadcrumb-item active">Редактирование создателя или актера</li>
                        </ol>
                    </div><!-- /.col -->
                </div>

                <div class="col-12">

                    <form action="{{ route('admin.movie.update', $movie->id) }}" method="POST"
                          enctype="multipart/form-data" class="pt-3">
                        @csrf
                        @method('PATCH')
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Название</label>
                                <input type="text" class="form-control" name="name"
                                       value="{{$movie->name}}">
                                @error('name')
                                <div class="text-danger">Это поле необходимо заполнить</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Год</label>
                                <input type="date" class="form-control" name="year"
                                       value="{{$movie->year}}">

                                @error('year')
                                <div class="text-danger">Это поле необходимо заполнить</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="example-multiselect" class="form-label">Жанр</label>
                                <select name="genre_ids[]" id="example-multiselect" multiple
                                        class="select2 form-select">
                                    @foreach($genres as $genre)
                                        <option
                                            {{is_array($movie->genre->pluck('id')->toArray()) && in_array($genre->id, $movie->genre->pluck('id')->toArray()) ? 'selected' : '' }}
                                            value="{{$genre->id}}">{{$genre->title}}</option>
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
                                        <option value="{{$country->id}}"
                                            {{$country->id == $movie->country_id ? 'selected' : ' '}}
                                        >{{$country->title}}</option>
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
                                       value="{{$movie->age}}">

                                @error('age')
                                <div class="text-danger">Это поле необходимо заполнить</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Биография</label>
                                <textarea style="height: 200px" type="text" class="form-control"
                                          name="description">{{$movie->description}}</textarea>

                                @error('description')
                                <div class="text-danger">Это поле необходимо заполнить</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="example-fileinput" class="form-label">Добавить фото создателя или
                                    актера</label>
                                <div class="w-50 mb-3">
                                    <img class="w-50" src="{{ asset('/storage/' .$movie->image)  }}"
                                         alt="preview_image">
                                </div>
                                <input type="file" name="image" id="example-fileinput" class="form-control">
                            </div>

                            @error('image')
                            <div class="text-danger">Это поле необходимо выбрать</div>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Ссылка на трейлер</label>
                                <div class="w-50 mb-3">
                                <iframe width="320" height="240" src="{{$movie->trailer}}"
                                        title="Легенда — Русский трейлер #2 (2015)" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                                <input type="text" class="form-control" name="trailer"
                                       placeholder="Ссылка на трейлер">
                            </div>

                            @error('trailer')
                            <div class="text-danger">Это поле необходимо заполнить</div>
                            @enderror
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Ссылка на видео</label>
                                <div class="w-50 mb-3">
                                    <iframe width="320" height="240" src="{{$movie->video}}"
                                            title="Легенда — Русский трейлер #2 (2015)" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                </div>
                                <input type="text" class="form-control" name="video"
                                       placeholder="Ссылка на трейлер">
                            </div>

                            @error('video')
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
