<div>
@extends('personal.layouts.main')
@section('content')


    hi
    <!-- Content Wrapper. Contains page content -->
{{--        <div class="content-wrapper">--}}
{{--            <!-- Content Header (Page header) -->--}}
{{--            <div class="content-header">--}}
{{--                <div class="container-fluid">--}}
{{--                    <div class="row mb-2">--}}
{{--                        <div class="col-sm-6">--}}
{{--                            <h1 class="m-0">Добавление Адреса клиента</h1>--}}
{{--                        </div><!-- /.col -->--}}
{{--                        <div class="col-sm-6">--}}
{{--                            <ol class="breadcrumb float-sm-right">--}}
{{--                                <li class="breadcrumb-item"><a href="">Главная</a></li>--}}
{{--                                <li class="breadcrumb-item active"><a href="">Клиенты</a></li>--}}
{{--                                <li class="breadcrumb-item active">Создание клиента</li>--}}
{{--                            </ol>--}}
{{--                        </div><!-- /.col -->--}}
{{--                    </div><!-- /.row -->--}}
{{--                </div><!-- /.container-fluid -->--}}
{{--            </div>--}}
{{--            <!-- /.content-header -->--}}

{{--            <!-- Main content -->--}}
{{--            <section class="content">--}}
{{--                <div class="container-fluid">--}}
{{--                    <!-- Small boxes (Stat box) -->--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <form action="{{route('personal.address.store')}}" method="post">--}}
{{--                                @csrf--}}

{{--                                <div class="form-group w-50">--}}
{{--                                    <label>Выбрать страну</label>--}}
{{--                                    <select class="form-control" name="country_id">--}}
{{--                                        @foreach( $clients as $client)--}}
{{--                                            <option value="{{$client->id}}"--}}
{{--                                                {{$client->id == old('country_id') ? 'selected' : '' }}--}}
{{--                                            >{{$client->name}}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                    @error('client_id')--}}
{{--                                    <div class="text-danger">{{$message}}</div>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}


{{--                                <div class="form-group w-50">--}}
{{--                                    <label>Выбрать Клиента</label>--}}
{{--                                    <select class="form-control"  wire:model="selectedClient">--}}
{{--                                        <option>Клиент</option>--}}
{{--                                        @foreach( $clients as $client)--}}
{{--                                            <option value="{{$client->id}}">{{$client->name}}</option>--}}
{{--                                        @endforeach--}}

{{--                                    </select>--}}
{{--                                             {{$selectedClient}}--}}
{{--                                    @error('selectedClient')--}}
{{--                                    <div class="text-danger">{{$message}}</div>--}}
{{--                                    @enderror--}}

{{--                                </div>--}}

{{--                                <input type="text" wire:model="text">--}}
{{--                                {{$text}}--}}

{{--                                @if(!is_null($selectedAddress))--}}
{{--                                    <div class="form-group w-50">--}}
{{--                                        <label>Выбрать Адрес</label>--}}
{{--                                        <select class="form-control"  wire:model="selectedAddress">--}}
{{--                                            <option selected disabled>Клиент</option>--}}
{{--                                            @foreach( $addresses as $address)--}}
{{--                                                <option value={{$address->id}}>{{$address->address}}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                        @error('selectedClient')--}}
{{--                                        <div class="text-danger">{{$message}}</div>--}}
{{--                                        @enderror--}}

{{--                                    </div>--}}



{{--                                @endif--}}







                                {{--                            <div class="form-group w-25">--}}
                                {{--                                <input type="text" name="country" class="form-control" placeholder="country"--}}
                                {{--                                       value="{{old('country')}}"--}}
                                {{--                                >--}}
                                {{--                                @error('country')--}}
                                {{--                                <div class="text-danger">{{$message}}</div>--}}
                                {{--                                @enderror--}}
                                {{--                            </div>--}}

{{--                                <div class="form-group w-25">--}}
{{--                                    <input type="text" name="address" class="form-control" placeholder="address"--}}
{{--                                           value="{{old('address')}}"--}}
{{--                                    >--}}
{{--                                    @error('address')--}}
{{--                                    <div class="text-danger">{{$message}}</div>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}

{{--                                <div class="form-group w-25">--}}
{{--                                    <input type="text" name="home" class="form-control" placeholder="home"--}}
{{--                                           value="{{old('home')}}"--}}
{{--                                    >--}}
{{--                                    @error('home')--}}
{{--                                    <div class="text-danger">{{$message}}</div>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}


{{--                                <div class="form-group w-25">--}}
{{--                                    <input type="text" name="flat" class="form-control" placeholder="flat"--}}
{{--                                           value="{{old('flat')}}"--}}
{{--                                    >--}}
{{--                                    @error('flat')--}}
{{--                                    <div class="text-danger">{{$message}}</div>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
                                <input type="hidden" name="user_id" value="{{$user}}">
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

</div>
