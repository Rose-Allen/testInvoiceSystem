<?php

namespace App\Http\Controllers\Personal\Address;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\AddressCity;
use App\Models\AddressCountry;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(Client $client)
    {
        $addresses = Address::where('client_id', $client->id)->get();
        return view('personal.address.index', compact('addresses', 'client'));
    }

    public function create(Client $client)
    {
        $cities = AddressCity::all();
        $countries = AddressCountry::all();
        return view('personal.address.create', compact('cities', 'countries', 'client'));
    }

    public function store(Request $request, Client $client)
    {
        $data = $request->validate([
            'address' => 'required|string',
            'home' => 'required|string',
            'flat' => 'required|string',
            'client_id' => 'required|integer',
            'country_id' => 'required|integer|exists:address_countries,id',
            'city_id' => 'required|integer|exists:address_cities,id',
        ]);
        Address::create($data);

        return redirect()->route('personal.client.index');
    }

    public function show(Address $address, Client $client)
    {

        return view('personal.address.show', compact('address', 'client'));
    }

    public function edit(Address $address, Client $client)
    {
        $cities = AddressCity::all();
        $countries = AddressCountry::all();
        return view('personal.address.edit', compact('address', 'countries', 'cities', 'client'));
    }

    public function update(Request $request, Address $address)
    {
        $data = $request->validate([
            'address' => 'required|string',
            'home' => 'required|string',
            'flat' => 'required|string',
//            'client_id'=>'required|integer',
            'country_id' => 'required|integer|exists:address_countries,id',
            'city_id' => 'required|integer|exists:address_cities,id',
        ]);
        $address->update($data);
        return redirect()->route('personal.address.show', $address->id);
    }

    public function delete(Address $address, Client $client)
    {
        $address->delete();
        return redirect()->route('personal.address.index', $client->id);
    }


}
