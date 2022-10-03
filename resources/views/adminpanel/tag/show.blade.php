@extends("layouts.main")
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Категории:{{$tag->title}}</h1>
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
                        <a href="{{route('tag.edit',$tag->id)}}" class="btn btn-primary mr-4">Редактировать</a>
                    </div>
                    <form action="{{route('tag.delete',$tag->id)}}" method="post">
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
                            <th>Время создания</th>
                            <th>Время редактирования</th>

                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{$tag->id}}</td>
                                <td>{{$tag->title}}</td>
                                <td>{{$tag->created_at}}</td>
                                <td>{{$tag->updated_at}}</td>

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
