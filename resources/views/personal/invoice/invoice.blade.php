@extends('personal.layouts.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Счета</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Главная</a></li>
                            <li class="breadcrumb-item active">Счета</li>
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
                            <a href="{{route("personal.invoice.create")}}" class="btn btn-success">Добавить</a>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Дата создания</th>
                                        <th>Номер</th>
                                        <th>Организация</th>
                                        <th>Сумма</th>
                                        <th>Валюта</th>
                                        <th>Контрагент</th>
                                        <th>Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($checks as $check)
                                        <tr>
                                            <td>{{$check->id}}</td>
                                            <td>{{$check->data_check}}</td>
                                            <td>{{$check->invoice_number}}</td>
                                            <td>{{$check->user->company_name}}</td>
                                            <td>{{$check->user->bin}}</td>
                                            <td>{{$check->currency->currency}}</td>
                                            <td>{{$check->client->business_name}}</td>
                                            <td class="table-buttons">
{{--                                                <a class="btn btn-success"--}}
{{--                                                   href=""><i--}}
{{--                                                        class="fas fa-eye"></i></a>--}}
{{--                                                <a class="btn btn-primary"--}}
{{--                                                   href=""><i--}}
{{--                                                        class="fas fa-address-book"></i></a>--}}
{{--                                                <a class="btn btn-warning"--}}
{{--                                                   href=""><i--}}
{{--                                                        class="fas fa-money-check"></i></a>--}}
                                                <a class="btn btn-info"
                                                   href="{{route('pdf.preview', $check->id)}}"><i class="fas fa-file-contract"></i></a>

                                            {{--                                                {{route('personal.address.index', $client->id)}}--}}
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




{{--@extends('personal.layouts.livewire')--}}
{{--@section('content')--}}
{{--    @livewire('invoices');--}}
{{--@endsection--}}

