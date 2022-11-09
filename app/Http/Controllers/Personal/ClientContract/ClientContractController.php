<?php

namespace App\Http\Controllers\Personal\ClientContract;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use App\Models\Clentcontract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientContractController extends Controller
{
    public function index(Client $client)
    {
        $clientContracts = Clentcontract::where('client_id', $client->id)->get();
        return view('personal.clientContract.index', compact('clientContracts', 'client'));
    }

    public function create(Client $client)
    {
        return view('personal.clientContract.create', compact('client'));

    }

    public function store(Request $request, Client $client)
    {
        if ($request->hasFile('file')) {

            $request->validate([
                'title' => 'required|string',
                'date' => 'required|',
                'client_id' => 'required',
                'file' => 'required',
            ]);


            Clentcontract::create([
                'title' => $request->title,
                'date_contract' => $request->date,
                'file' => $request->file,
                'client_id' => $request->client_id,
            ])->addMedia($request->file('file'))->toMediaCollection('contract');
//            $clients = Clentcontract::where('client_id', $client->id);
//            $clients->addMedia($request->file('file'))->toMediaCollection('contract');
        }
    }


    public function edit(Clentcontract $clentcontract)
    {
        return view('personal.clientContract.edit', compact('clentcontract'));
    }

    public function update(Request $request, Client $client, Clentcontract $clentcontract)
    {
        $request->validate(
            [
                'title' => 'required|string',
                'date' => 'required|',
                'file' => 'required',

            ]
        );


        $clentcontract->update([
            'title' => $request->title,
            'date_contract' => $request->date,
            'file' => $request->file,
        ]);
        if ($request->hasFile('file')) {
            $clentcontract->clearMediaCollection('contract');
            $clentcontract->addMedia($request->file('file'))->toMediaCollection('contract');
        }


    }

    public function delete(Clentcontract $clentcontract)
    {
        $clentcontract->delete();
        return redirect()->back();
    }


}
