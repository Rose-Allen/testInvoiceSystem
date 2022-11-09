<?php

namespace App\Http\Controllers\Personal\Invoice;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Check;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class InvoiceController extends Controller
{
    public function index()
    {
        $checks = Check::where('user_id', Auth::user()->id)->get();
        return view('personal.invoice.invoice', compact('checks'));
    }

    public function create(User $user, Client $client, Address $address)
    {
        $user = Auth::user()->id;
        $clients = Client::where('user_id', $user)->get();
        $addresses = $clients->find()->addresses;
        return view('personal.invoice.create', compact('user', 'clients', 'client'));
    }

    public function store(Request $request, User $user)
    {


    }

    public function show(Client $client)
    {


    }

    public function edit(Client $client)
    {

    }

    public function update(Request $request, Client $client)
    {

    }

    public function delete(Client $client)
    {

    }


}
