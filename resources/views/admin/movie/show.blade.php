@extends('admin.layout.main')
@section('title', $movie->name)
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('admin.movie.index')}}">Создатели
                                    и актеры</a>
                            </li>
                            <li class="breadcrumb-item active">{{$movie->name}}</li>
                        </ol>
                    </div><!-- /.col -->
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-sm-6 d-flex align-items-center">
                                    <h4 style="margin-right: 10px">Действие</h4>
                                    <a href="{{ route('admin.movie.edit', $movie->id) }}"
                                       style="margin-right: 10px"
                                       class="btn btn-soft-success rounded-pill waves-effect waves-light">
                                        <i class="fe-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.movie.delete', $movie->id) }}"
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
                                            <td>{{$movie->id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Название</td>
                                            <td>{{$movie->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Возраст</td>
                                            <td>{{$movie->age}}</td>
                                        </tr>
                                        <tr>
                                            <td>Жанр</td>
                                            <td>{{ $genres->implode('title', ', ') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Год</td>
                                            @php
                                                $fullDate = $movie->year; // предположим, что $movie->year содержит дату в формате 'Y-m-d'
                                                $yearOnly = date('Y', strtotime($fullDate));
                                            @endphp
                                            <td>{{$yearOnly}}</td>
                                        </tr>
                                        <tr>
                                            <td>Страна</td>
                                            @foreach($countries as $country)
                                                @if($country->id == $movie->country_id)
                                                    <td>{{$country->title}}</td>
                                                @endif
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>Биография</td>
                                            <td>{{$movie->description}}</td>
                                        </tr>
                                        <tr>
                                            <td>Фото</td>
                                            <td><img src="{{ '/storage/' . $movie->image}}"></td>
                                        </tr>
                                        <tr>
                                            <td>Трейлер</td>
                                            <td>
                                                <iframe width="320" height="240" src="{{$movie->trailer}}"
                                                        title="Легенда — Русский трейлер #2 (2015)" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        allowfullscreen></iframe>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Фильм</td>
                                            <td>
                                                <iframe width="320" height="240" src="{{$movie->video}}"
                                                        title="Легенда — Русский трейлер #2 (2015)" frameborder="0"
                                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                        allowfullscreen></iframe>
                                            </td>
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
