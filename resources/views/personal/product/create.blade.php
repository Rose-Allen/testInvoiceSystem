@extends('personal.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление Продукта</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="">Продукты</a></li>
                            <li class="breadcrumb-item active">Создание Продукта</li>
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
                        <form action="{{route('personal.product.store')}}" method="post">
                            @csrf
                            <div class="form-group w-25">
                                <input type="text" name="name" class="form-control" placeholder="name"
                                value="{{old('name')}}"
                                >
                                @error('name')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>


                            <div class="form-group w-25">
                                <input type="text" name="description" class="form-control" placeholder="description"
                                value="{{old('description')}}"
                                >
                                @error('description')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>


                            <input type="hidden" name="user_id" value="{{$user}}">
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
