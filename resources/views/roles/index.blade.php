{{-- \resources\views\roles\index.blade.php --}}
@extends('layouts.master')

@section('title', '| Должности')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Список должностей</h1>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ URL::to('roles/create') }}"  type = "button" class = "btn btn-block btn-outline-primary">Добавить должность</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <th>Доступ</th>
                                    {{--<th>Доступы</th>--}}
                                    <th>Опиасание</th>
                                    <th>Операция</th>
                                </tr>
                                @foreach ($roles as $role)
                                    <tr>

                                        <td>{{ $role->name }}</td>
                                        {{--<td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>--}}
                                        <td>Не задано</td>
                                        <td>
                                            <a href="{{ URL::to('roles/'.$role->id.'/edit') }}"><i class="fa fa-edit"></i></a>
                                            /
                                            <a href="{{ URL::to('roles/'.$role->id.'/edit') }}"><i class="fa fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">

                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>


@endsection