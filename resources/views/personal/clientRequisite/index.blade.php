@extends('personal.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Реквезиты Клиента</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Главная</a></li>
                            <li class="breadcrumb-item active">Реквезиты</li>
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
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <a href="{{route('personal.client.requisite.create', $client->id)}}" class="btn btn-success">Добавить</a>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Название</th>
                                        <th>Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($clientRequisites as $clientRequisite)
                                        <tr>
                                            <td>{{$clientRequisite->id}}</td>
                                            <td>{{$clientRequisite->title_bank}}</td>
                                            <td class="table-buttons">
                                                <a class="btn btn-primary" href="{{route('personal.client.requisite.edit', $clientRequisite->id)}}"><i class="fas fa-pen"></i></a>
                                                <form action="{{route('personal.client.requisite.delete', $clientRequisite->id)}}" method="post" style="display: inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            {{--                                                <a class="btn btn-primary"--}}
                                            {{--                                                   href="{{route('personal.address.create', $client->id)}}"><i class="fas fa-address-book"></i></a>--}}
                                            {{--                                                <form action="" method="post">--}}
                                            {{--                                                    @csrf--}}
                                            {{--                                                    @method('DELETE')--}}
                                            {{--                                                    <button type="submit" class="btn btn-danger">--}}
                                            {{--                                                        <i class="fas fa-trash"></i>--}}
                                            {{--                                                    </button>--}}
                                            {{--                                                </form>--}}
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>


            </div>
        </section>

    </div>

@endsection
