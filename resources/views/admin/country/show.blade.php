@extends('admin.layout.main')
@section('title', $country->title)
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('admin.country.index')}}">Страны</a>
                            </li>
                            <li class="breadcrumb-item active">{{$country->title}}</li>
                        </ol>
                    </div><!-- /.col -->
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-sm-6 d-flex align-items-center">
                                    <h4 style="margin-right: 10px">Действие</h4>
                                    <a href="{{ route('admin.country.edit', $country->id) }}" style="margin-right: 10px"
                                       class="btn btn-soft-success rounded-pill waves-effect waves-light">
                                        <i class="fe-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.country.delete', $country->id) }}"
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
                                            <td>{{$country->id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Название</td>
                                            <td>{{$country->title}}</td>
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
