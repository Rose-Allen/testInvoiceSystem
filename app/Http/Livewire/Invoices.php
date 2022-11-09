<?php

namespace App\Http\Livewire;

use App\Models\Address;
use App\Models\AddressCity;
use App\Models\Clentcontract;
use App\Models\Client;
use App\Models\Check;
use App\Models\Clientrequisite;
use App\Models\Currency;
use App\Models\Product;
use App\Models\Status;

use App\Models\Userrequisite;
use Database\Seeders\CityCountry;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Invoices extends Component
{
    use WithPagination;


    public $selectedClient = NULL;
    public $selectedAddress = NULL;
    public $selectedCity = NULL;
    public $addresses = NULL;
    public $cities = NULL;
    public $clients;
    public $user;
    public $statuses;
    public $products;
    public $ClientRequisites;
    public $clientId;
    public $ClientContracts;
    public $currencies;
    public $date;
    public $sum;
    public $UserRequisites;


    public $status;
    public $currency;
    public $product;
    public $ClientRequisite;
    public $ClientContract;
    public $user_id;
    public $UserRequisite;


    protected $rules = [
        'status' => ['required'],
        'currency' => ['required'],
        'product' => ['required'],
        'ClientRequisite' => ['required'],
        'ClientContract' => ['required'],
        'selectedCity' => ['required'],
        'selectedAddress' => ['required'],
        'selectedClient' => ['required'],
        'sum' => ['required'],
        'invoice_number' => ['required'],
        'UserRequisite' => ['required'],
        'user_id' => ['required'],


    ];


    public function mount()
    {
       $this->product = ['Продукты'];
    }


    public function render()
    {

        $this->user = Auth::user()->id;
        $this->statuses = Status::all();
        $this->clients = \App\Models\Client::where('user_id', $this->user)->get();
        $this->clientIds = \App\Models\Client::all();
//       foreach ($this->clientIds as $clientId){
        $this->currencies = Currency::all();

        $this->products = Product::where('user_id', $this->user)->get();
        $this->ClientRequisites = Clientrequisite::where('client_id', $this->selectedClient)->get();
        $this->ClientContracts = Clentcontract::where('client_id', $this->selectedClient)->get();
        $this->UserRequisites = Userrequisite::where('user_id', $this->user)->get();

        return view('livewire.invoices');
    }


    public function updatedSelectedClient($client)
    {
        if (!is_null($client)) {
            $this->addresses = Address::where('client_id', $client)->get();
        }

    }

    public function updatedSelectedAddress($city)
    {
        if (!is_null($city)) {
            $this->cities = AddressCity::where('id', $city)->get();
        }

    }

    public function store()
    {
        dd($this->product);
        //            'invoice_number'=>  Auth::user()->id,

        Check::create([
            'user_id' => $this->user,
            'client_id' => $this->selectedClient,
            'address_id' => $this->selectedAddress,
            'contract_client_id' => $this->ClientContract,
            'requisites_client_id' => $this->ClientRequisite,
            'status' => $this->status,
            'product_id' => $this->product,
            'sum' => $this->sum,
            'requisites_user_id' => $this->UserRequisite,
            'data_check' => $this->date,
            'currency_id' => $this->currency,

        ]);;
//        dd( Check::create([
//            'user_id' =>  $this->user,
//            'client_id' => $this->selectedClient,
//            'address_id' => $this->selectedAddress,
//            'contract_client_id' => $this->ClientContract,
//            'requisites_client_id' => $this->ClientRequisite,
//            'status' => $this->status,
//            'product_id' => $this->product,
//            'sum'=> $this->sum,
//            'requisites_user_id' => $this->UserRequisite,
//            'data_check' => $this->date,
//            'currency_id' => $this->currency,
//
//        ]));


    }


}
