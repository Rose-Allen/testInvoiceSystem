<?php

namespace App\Http\Livewire\Personal;

use App\Models\Address;
use App\Models\Client;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Check extends Component
{
////    public function index(Client $client)
////    {
////
////        return  view('personal.invoice.invoice', compact('client'));
////
////
//////        $client = Client::find(6);
//////        dd($client->user);
////
////    }
//
//    public function create(User $user, Client $client, Address $address)
//    {
//        $user = Auth::user()->id;
//
//        $clients = Client::where('user_id', $user)->get();
//        $addresses = $clients->find()->addresses;
////        dd($addresses);
//
//
//
//
//
//
////        $addresses =  Address::where('client_id', $client->id )->get();
//
//
////        $client = Client::find(16);
////        dd($client->addresses);
////        $addresses = Address::where('client_id', )->get();
////        dd($addresses);
//
//        return view('personal.invoice.create', compact('user', 'clients', 'client'));
//    }

//    public $selectedClient = '';
//    public $selectedAddress = NULL;
//
//    public $clients;
//    public $user;
//    public $text;
//    public $addresses;


    public function mount()
    {
//       $this->user = Auth::user()->id;
//       $this->clients = Client::all();
    }


    public function render()
    {
//        $user = Auth::user()->id;

//        $clients = Client::where('user_id', $user)->get();

//        $addresses = $clients->find()->addresses;

        return view('livewire.personal.check')->extends('personal.layouts.livewire')->section('content');

    }

//    public function updateSelectedAddress($client){
//        $this->addresses = Address::where('client_id', $client)->get();
//    }
}
