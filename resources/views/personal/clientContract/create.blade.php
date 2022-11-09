@extends('personal.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление Реквезитов Клиента</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="">Реквезиты</a></li>
                            <li class="breadcrumb-item active">Создание Реквезитов</li>
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
                        <form action="{{route('personal.client.contract.store')}}" enctype="multipart/form-data" method="post">
                            @csrf

                            <div class="form-group w-25">
                                <input type="text" name="title" class="form-control" placeholder="title"
                                       value="{{old('title')}}"
                                >
                                @error('title')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25">
                                <input type="file" name="file" class="form-control" placeholder="file"
                                       value="{{old('file')}}"
                                >
                                @error('file')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25">
                                <input type="date" name="date" class="form-control" placeholder="date"
                                       value="{{old('date')}}"
                                >
                                @error('title')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>





                            <input type="text" name="client_id" value="{{$client->id}}">
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Добавить">
                            </div>

                        </form>
                    </div>
                </div>
                <a class="mt-3 btn btn-danger" href="">Назад</a>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>


    {{--    @livewire('client');--}}
@endsection
