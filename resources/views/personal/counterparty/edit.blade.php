@extends('personal.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование клиента</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('personal.client.index')}}">Клиенты</a></li>
                            <li class="breadcrumb-item active">Редактирование клиента</li>
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
                        <form action="{{route('personal.client.update', $client->id)}}" method="post">
                            @csrf
                            @method('patch')
                            <div class="form-group w-25">
                                <input type="text" name="bin" class="form-control" placeholder="bin"
                                       value="{{$client->bin}}"
                                >
                                @error('bin')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25">
                                <input type="text" name="name" class="form-control" placeholder="name"
                                       value="{{$client->name}}"
                                >
                                @error('name')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25">
                                <input type="text" name="phone" class="form-control" placeholder="phone"
                                       value="{{$client->phone}}"
                                >
                                @error('phone')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25">
                                <input type="email" name="email" class="form-control" placeholder="email"
                                       value="{{$client->email}}"
                                >
                                @error('email')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            {{--                            <input type="hidden" name="user_id" value="{{$user->id}}">--}}



                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Редактировать">
                            </div>

                        </form>
                    </div>
                </div>
                <a class="mt-3 btn btn-danger" href="{{route('personal.client.index')}}">Назад</a>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
