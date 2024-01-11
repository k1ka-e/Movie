@extends('admin.layout.main')
@section('title', $creator_and_actor->full_name_ru)
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('admin.creator_and_actor.index')}}">Создатели
                                    и актеры</a>
                            </li>
                            <li class="breadcrumb-item active">{{$creator_and_actor->full_name_ru}}</li>
                        </ol>
                    </div><!-- /.col -->
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-sm-6 d-flex align-items-center">
                                    <h4 style="margin-right: 10px">Действие</h4>
                                    <a href="{{ route('admin.creator_and_actor.edit', $creator_and_actor->id) }}"
                                       style="margin-right: 10px"
                                       class="btn btn-soft-success rounded-pill waves-effect waves-light">
                                        <i class="fe-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.creator_and_actor.delete', $creator_and_actor->id) }}"
                                          method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="btn btn-soft-danger rounded-pill waves-effect waves-light">
                                            <i class="fe-trash"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-centered mb-0" id="inline-editable">
                                        <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{$creator_and_actor->id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Имя на русском</td>
                                            <td>{{$creator_and_actor->full_name_ru}}</td>
                                        </tr>
                                        <tr>
                                            <td>Имя на английском</td>
                                            <td>{{$creator_and_actor->full_name_en}}</td>
                                        </tr>
                                        <tr>
                                            <td>Дата рождения</td>
                                            @php
                                                use Carbon\Carbon;

                                                // Исходная дата
                                                $originalDate = "1983-08-12";

                                                // Преобразование строки в объект Carbon
                                                $carbonDate = Carbon::parse($originalDate);

                                                // Форматирование даты в нужный формат на русском
                                                $formattedDate = $carbonDate->format('d F Y') . ' года';
                                            @endphp
                                            <td>{{$formattedDate}}</td>
                                        </tr>
                                        <tr>
                                            <td>Выберите карьеру</td>
                                            @foreach($careers as $career)
                                                @if($career->id == $creator_and_actor->career_id)
                                                    <td>{{$career->title}}</td>
                                                @endif
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>Биография</td>
                                            <td>{{$creator_and_actor->description}}</td>
                                        </tr>
                                        <tr>
                                            <td>Фото создателя или актера</td>
                                            <td><img src="{{ '/storage/' . $creator_and_actor->image }}"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div> <!-- end .table-responsive-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

    </div>
@endsection
