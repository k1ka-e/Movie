@extends('admin.layout.main')
@section('title', 'Фильмы')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Фильмы</li>
                        </ol>
                    </div><!-- /.col -->
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                        <a href="{{ route('admin.movie.create') }}"
                                           class="btn btn-primary waves-effect waves-light">Добавить</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-centered mb-0" id="inline-editable">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Название</th>
                                            <th>Год</th>
                                            <th colspan="3" class="text-center">Действие</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($movies as $movie)
                                            <tr>
                                                <td>{{$movie->id}}</td>
                                                <td>{{$movie->name}}</td>
                                                <td>{{$movie->age}}</td>

                                                <td class="text-center">

                                                    <a href="{{ route('admin.movie.show', $movie->id) }}"
                                                       class="btn btn-soft-primary rounded-pill waves-effect waves-light">
                                                        Подробнее
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('admin.movie.edit', $movie->id) }}"
                                                       class="btn btn-soft-success rounded-pill waves-effect waves-light">
                                                        Изменить
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <form
                                                        action="{{ route('admin.movie.delete', $movie->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                                class="btn btn-soft-danger rounded-pill waves-effect waves-light">
                                                            Удалить
                                                        </button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                    <div class="row m-0 mt-2">
                                        <div class="col-12 d-flex justify-content-end mt-auto">
                                            {{ $movies->links() }}
                                        </div>
                                    </div>
                                </div> <!-- end .table-responsive-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div> <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

    </div>
@endsection
