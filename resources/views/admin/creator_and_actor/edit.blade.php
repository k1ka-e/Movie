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
                            <li class="breadcrumb-item active"><a href="{{route('admin.creator_and_actor.index')}}">Создатели и актеры</a>
                            </li>
                            <li class="breadcrumb-item active">Редактирование создателя или актера</li>
                        </ol>
                    </div><!-- /.col -->
                </div>

                <div class="col-12">

                    <form action="{{ route('admin.creator_and_actor.update', $creator_and_actor->id) }}" method="POST" enctype="multipart/form-data" class="pt-3">
                        @csrf
                        @method('PATCH')
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Имя на русском</label>
                                <input type="text" class="form-control" name="full_name_ru"
                                       value="{{$creator_and_actor->full_name_ru}}">
                                @error('full_name_ru')
                                <div class="text-danger">Это поле необходимо заполнить</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Имя на английском</label>
                                <input type="text" class="form-control" name="full_name_en"
                                       value="{{$creator_and_actor->full_name_en}}">

                                @error('full_name_en')
                                <div class="text-danger">Это поле необходимо заполнить</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Дата рождения</label>
                                <input type="date" class="form-control" name="date_of_birth"
                                       value="{{$creator_and_actor->date_of_birth}}">

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
                                                {{$career->id == $creator_and_actor->career_id ? 'selected' : ' '}}
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
                                <textarea style="height: 200px" type="text" class="form-control" name="description">{{$creator_and_actor->description}}</textarea>

                                @error('description')
                                <div class="text-danger">Это поле необходимо заполнить</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="example-fileinput" class="form-label">Добавить фото создателя или актера</label>
                                <div class="w-50 mb-3">
                                    <img class="w-50" src="{{ asset('/storage/' .$creator_and_actor->image)  }}" alt="preview_image">
                                </div>
                                <input type="file" name="image" id="example-fileinput" class="form-control">
                            </div>

                            @error('image')
                            <div class="text-danger">Это поле необходимо выбрать</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-primary mt-2" value="Обновить">

                    </form>


                </div>

            </div> <!-- container -->

        </div> <!-- content -->

    </div>
@endsection
