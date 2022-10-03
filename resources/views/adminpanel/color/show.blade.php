@extends("layouts.main")
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Цвет:{{$color->title}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">

                        <li class="breadcrumb-item active"></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="card-header d-flex p-4">
                    <div>
                        <a href="{{route('color.edit',$color->id)}}" class="btn btn-primary mr-4">Редактировать</a>
                    </div>
                    <form action="{{route('color.delete',$color->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-primary" value="Удалить">
                    </form>
                </div>
                <div class="card-body table-responsive p-0" style="min-height: 300px;">

                    <table class="table table-head-fixed table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Наименование</th>
                            <th>Цвет</th>
                            <th>Время создания</th>
                            <th>Время редактирования</th>

                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{$color->id}}</td>
                                <td>{{$color->title}}</td>
                                <td>{{$color->color}}</td>
                                <td>{{$color->created_at}}</td>
                                <td>{{$color->updated_at}}</td>

                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
