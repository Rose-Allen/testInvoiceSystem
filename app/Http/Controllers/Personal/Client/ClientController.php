<?php

namespace App\Http\Controllers\Personal\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function index()
    {


        $clients = Client::all();
//        $client = Client::find(6);
//        dd($client->user);

        return view('personal.counterparty.index', compact('clients'));
    }

    public function create(User $user)
    {

        return view('personal.counterparty.create');
    }

    public function store(Request $request, User $user)
    {

        $data = $request->validate(
            [
                'bin' => 'required',
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',

            ]
        );

        $bin = $request->bin;
        $company_name = $request->company_name;
        $business_name = $request->business_name;


        $response = Http::get('https://stat.gov.kz/api/juridical/counter/api/?bin=' . $bin . '&lang=ru');
        if ($response->successful()) {
            $data = json_decode($response->body())->obj->name;
            $data_business_name = json_decode($response->body())->obj->krpName;
            $company_name = $data;
            $business_name = $data_business_name;

        }




        $request->user()->clients()->create([
            'bin' => $request->bin,
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'company_name' => $company_name,
            'business_name' => $business_name,

        ]);

        return redirect()->route('personal.client.index');

    }

    public function show(Client $client)
    {

        return view('personal.counterparty.show', compact('client'));
    }

    public function edit(Client $client)
    {
        return view('personal.counterparty.edit', compact('client'));
    }

    public function update(Request $request, Client $client)
    {
        $data = $request->validate(
            [
                'bin' => 'required',
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',

            ]
        );

        $client->update($data);

        return redirect()->route('personal.client.show', $client->id);
    }

    public function delete(Client $client)
    {
        $client->delete();
        return redirect()->route('personal.client.index');
    }


}
