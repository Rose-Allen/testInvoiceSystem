<div>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Создание Счета</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="">Главная</a></li>
                            <li class="breadcrumb-item active"><a href="">Клиенты</a></li>
                            <li class="breadcrumb-item active">Создание клиента</li>
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
                        <form wire:submit.prevent="store" method="post">

                            <div class="form-group w-50">
                                <label>Выбрать Клиента</label>
                                <select class="form-control" wire:model="selectedClient">
                                    <option>Клиент</option>
                                    @foreach( $clients as $client)
                                        <option value="{{$client->id}}">{{$client->name}}</option>
                                    @endforeach
                                </select>

                                @error('selectedClient')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group w-50">
                                <label>Выбрать Ваши Реквезиты</label>
                                <select class="form-control" wire:model="UserRequisite" name="UserRequisites">
                                    <option>Реквизиты Клиента</option>
                                    @foreach( $UserRequisites as $UserRequisite)
                                        <option value="{{$UserRequisite->id}}">{{$UserRequisite->title_bank}}</option>
                                    @endforeach
                                </select>

                                @error('UserRequisite')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group w-50">
                                <label>Сумма</label>
                                <input type="text" class="form-control" name="sum" wire:model="sum">
                                @error('sum')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            @if(!is_null($addresses))
                                <div class="form-group w-50">
                                    <label>Выбрать Адрес</label>
                                    <select class="form-control" wire:model="selectedAddress">
                                        <option>Адрес</option>
                                        @foreach( $addresses as $address)
                                            <option value="{{$address->id}}">{{$address->address}}</option>
                                        @endforeach
                                    </select>

                                    @error('selectedAddress')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            @endif

{{--                            @if(!is_null($addresses))--}}
{{--                                <div class="form-group w-50">--}}
{{--                                    <label>Выбрать Дом</label>--}}
{{--                                    <select class="form-control" wire:model="selectedAddress">--}}
{{--                                        <option>Адрес</option>--}}
{{--                                        @foreach( $addresses as $address)--}}
{{--                                            <option value="{{$address->id}}">{{$address->home}}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}

{{--                                    @error('selectedAddress')--}}
{{--                                    <div class="text-danger">{{$message}}</div>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            @endif--}}

{{--                            @if(!is_null($addresses))--}}
{{--                                <div class="form-group w-50">--}}
{{--                                    <label>Выбрать КВ</label>--}}
{{--                                    <select class="form-control" wire:model="selectedAddress">--}}
{{--                                        <option>Адрес</option>--}}
{{--                                        @foreach( $addresses as $address)--}}
{{--                                            <option value="{{$address->id}}">{{$address->flat}}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}

{{--                                    @error('selectedAddress')--}}
{{--                                    <div class="text-danger">{{$message}}</div>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            @endif--}}

                            @if(!is_null($cities))
                                <div class="form-group w-50">
                                    <label>Выбрать Город</label>
                                    <select class="form-control" wire:model="selectedCity">
                                        <option>Адрес</option>
                                        @foreach( $cities as $city)
                                            <option value="{{$city->id}}">{{$city->name}}</option>
                                        @endforeach
                                    </select>

                                    @error('selectedCity')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            @endif


                            <div class="form-group w-50">
                                <label>Выбрать статус</label>
                                <select name="statuses" class="form-control" wire:model="status">
                                    <option>Статус</option>
                                    @foreach( $statuses as $status)
                                        <option value="{{ $status->id}}">{{$status->status}}</option>
                                    @endforeach
                                </select>

                                @error('selectedClient')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group w-50">
                                <label>Выбрать валюту</label>
                                <select name="currencies" class="form-control" wire:model="currency">
                                    <option>Валюта</option>

                                    @foreach( $currencies as $currency)
                                        <option value="{{$currency->id}}">{{$currency->currency}}</option>
                                    @endforeach
                                </select>

                                @error('selectedClient')--}}
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>


                            <div class="form-group w-50">
                                <label>Выбрать банкк</label>
                                <select class="form-control" name="ClientRequisites" wire:model="ClientRequisite">
                                    <option>Банк</option>
                                    @foreach( $ClientRequisites as $ClientRequisite)
                                        <option
                                            value="{{$ClientRequisite->id}}">{{$ClientRequisite->title_bank}}</option>
                                    @endforeach
                                </select>

                                @error('ClientRequisite')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>



{{--                            <div class="form-group w-50">--}}
{{--                                <label>Выбрать ИИК</label>--}}
{{--                                <select class="form-control" name="ClientRequisites" wire:model="ClientRequisite">--}}
{{--                                    <option>ИИК</option>--}}
{{--                                    @foreach( $ClientRequisites as $ClientRequisite)--}}
{{--                                        <option--}}
{{--                                            value="{{$ClientRequisite->id}}">{{$ClientRequisite->iik}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}

{{--                                @error('selectedClient')--}}
{{--                                <div class="text-danger">{{$message}}</div>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

{{--                            <div class="form-group w-50">--}}
{{--                                <label>Выбрать БИК</label>--}}
{{--                                <select class="form-control" name="ClientRequisites" wire:model="ClientRequisite">--}}
{{--                                    <option>БИК</option>--}}
{{--                                    @foreach( $ClientRequisites as $ClientRequisite)--}}
{{--                                        <option--}}
{{--                                            value="{{$ClientRequisite->id}}">{{$ClientRequisite->bik}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}

{{--                                @error('selectedClient')--}}
{{--                                <div class="text-danger">{{$message}}</div>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

{{--                            <div class="form-group w-50">--}}
{{--                                <label>Выбрать KBE</label>--}}
{{--                                <select class="form-control" name="ClientRequisites" wire:model="ClientRequisite">--}}
{{--                                    <option>KBE</option>--}}
{{--                                    @foreach( $ClientRequisites as $ClientRequisite)--}}
{{--                                        <option--}}
{{--                                            value="{{$ClientRequisite->id}}">{{$ClientRequisite->kbe}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}

{{--                                @error('selectedClient')--}}
{{--                                <div class="text-danger">{{$message}}</div>--}}
{{--                                @enderror--}}
{{--                            </div>--}}


                            <div class="form-group w-50">
                                <label>Выбрать Договор</label>
                                <select class="form-control" name="ClientRequisites" wire:model="ClientContract">
                                    <option>Договор</option>
                                    @foreach( $ClientContracts as $ClientContract)
                                        <option
                                            value="{{$ClientContract->id}}">{{$ClientContract->title}}</option>
                                    @endforeach
                                </select>

                                @error('selectedClient')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>


                            <div class="form-group w-50">
                                <label>Выбрать Договор</label>
                                <input type="date" wire:model="date">
                                @error('date')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>


{{--                            <div class="form-group w-50">--}}
{{--                                <label>Выбрать продукт</label>--}}
{{--                                <select class="form-control" wire:model="product" multiple="multiple" >--}}
{{--                                    <option>Продукты</option>--}}
{{--                                    @foreach( $products as $product)--}}
{{--                                        <option value="{{$product->id}}">{{$product->name}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}

{{--                                @error('selectedClient')--}}
{{--                                <div class="text-danger">{{$message}}</div>--}}
{{--                                @enderror--}}
{{--                            </div>--}}

                            {{-- test modal --}}

                            <div class="form-group w-50">
                                <!-- Button trigger product-modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".product-modal-modal-xl">
                                    Add product
                                </button>

                            </div>


{{--




{{--                            <input type="hidden" wire:model="invoice_number">--}}


                            {{--                            {{$selectedAddress}}--}}


                            {{--                                        @if(!is_null($selectedAddress))--}}
                            {{--                                            <div class="form-group w-50">--}}
                            {{--                                                <label>Выбрать Адрес</label>--}}
                            {{--                                                <select class="form-control"  wire:model="selectedAddress">--}}
                            {{--                                                    <option selected disabled>Клиент</option>--}}
                            {{--                                                    @foreach( $addresses as $address)--}}
                            {{--                                                        <option value={{$address->id}}>{{$address->address}}</option>--}}
                            {{--                                                    @endforeach--}}
                            {{--                                                </select>--}}
                            {{--                                                @error('selectedClient')--}}
                            {{--                                                <div class="text-danger">{{$message}}</div>--}}
                            {{--                                                @enderror--}}

                            {{--                                            </div>--}}



                            {{--                                        @endif--}}


{{--                            <input type="text" name="user_id" wire:model="user_id" value="{{$user}}">--}}
{{--                            <input type="text" name="user_id" value="{{$user->id}}">--}}
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

</div>


<!-- Modal-product -->
<div class="modal fade product-modal-modal-xl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@yield('modal-title')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-sm-10">
                            One of three columns
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <!-- Button trigger create-product-modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createProductModal">
                    Create product
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal-create-product -->
<div class="modal fade" id="createProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@yield('modal-title')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Save changes</button>
            </div>
        </div>
    </div>
</div>
