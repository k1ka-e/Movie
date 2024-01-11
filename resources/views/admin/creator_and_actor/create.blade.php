@extends('admin.layout.main')
@section('title', 'Добавление создателя или актера')
@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('admin.creator_and_actor.index')}}">Страны</a>
                            </li>
                            <li class="breadcrumb-item active">Добавление создателя или актера</li>
                        </ol>
                    </div><!-- /.col -->
                </div>

                <div class="row">

                    <div class="col-12">
                        <form action="{{ route('admin.creator_and_actor.store') }}"  method="POST" enctype="multipart/form-data" class="pt-3">
                            @csrf
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Имя на русском</label>
                                    <input type="text" class="form-control" name="full_name_ru"
                                           placeholder="Имя создателя или актера">
                                    @error('full_name_ru')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Имя на английском</label>
                                    <input type="text" class="form-control" name="full_name_en"
                                           placeholder="Имя создателя или актера">

                                    @error('full_name_en')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Дата рождения</label>
                                    <input type="date" class="form-control" name="date_of_birth"
                                           placeholder="Дата рождения создателя или актера">

                                    @error('date_of_birth')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="example-select" class="form-label">Выберите карьеру</label>
                                    <select class="form-select select2" name="career_id" id="example-select">
                                        @foreach($careers as $career)
                                            <option value="{{$career->id}}"
                                                {{$career->id == old('career_id') ? 'selected' : ' '}}
                                            >{{$career->title}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                @error('career_id')
                                <div class="text-danger">Это поле необходимо выбрать</div>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Биография</label>
                                    <textarea type="text" class="form-control" name="description"
                                              placeholder="Короткая биография создателя или актера"></textarea>

                                    @error('description')
                                    <div class="text-danger">Это поле необходимо заполнить</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="example-fileinput" class="form-label">Добавить фото создателя или актера</label>
                                    <input type="file" name="image" id="example-fileinput" class="form-control">
                                </div>

                                @error('image')
                                <div class="text-danger">Это поле необходимо выбрать</div>
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
