@extends('personal.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование Адреса клиента</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="">Клиенты</a></li>
                            <li class="breadcrumb-item active">Редактирование  клиента</li>
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
                        <form action="{{route('personal.address.update', $address->id)}}" method="post">
                            @csrf
                            @method('patch')
                            <div class="form-group w-50">
                                <label>Выбрать страну</label>
                                <select class="form-control" name="country_id">
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}"
                                            {{$country->id == old('country_id') ? 'selected' : '' }}
                                        >{{$country->name}}</option>
                                    @endforeach
                                </select>
                                @error('country_id')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>



                            <div class="form-group w-50">
                                <label>Выбрать город</label>
                                <select class="form-control" name="city_id">
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}"
                                            {{$city->id == old('city_id') ? 'selected' : '' }}
                                        >{{$city->name}}</option>
                                    @endforeach
                                </select>
                                @error('city_id')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            {{--                            <div class="form-group w-25">--}}
                            {{--                                <input type="text" name="country" class="form-control" placeholder="country"--}}
                            {{--                                       value="{{old('country')}}"--}}
                            {{--                                >--}}
                            {{--                                @error('country')--}}
                            {{--                                <div class="text-danger">{{$message}}</div>--}}
                            {{--                                @enderror--}}
                            {{--                            </div>--}}

                            <div class="form-group w-25">
                                <input type="text" name="address" class="form-control" placeholder="address"
                                       value="{{$address->address}}"
                                >
                                @error('address')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group w-25">
                                <input type="text" name="home" class="form-control" placeholder="home"
                                       value="{{$address->home}}"
                                >
                                @error('home')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>


                            <div class="form-group w-25">
                                <input type="text" name="flat" class="form-control" placeholder="flat"
                                       value="{{$address->flat}}"
                                >
                                @error('flat')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            {{--                            <input type="hidden" name="user_id" value="{{$user->id}}">--}}
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
    <!-- /.content-wrapper -->
@endsection
