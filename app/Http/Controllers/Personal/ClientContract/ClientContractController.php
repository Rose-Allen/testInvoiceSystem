<?php

namespace App\Http\Controllers\Personal\ClientContract;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientContract\ClientContractStoreRequest;
use App\Http\Requests\ClientContract\ClientContractUpdateRequest;
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

    public function store(ClientContractStoreRequest $request, Client $client)
    {
        if ($request->hasFile('file')) {
            $data = $request->validated();
            Clentcontract::create($data)->addMedia($request->file('file'))->toMediaCollection('contract');

        }
    }


    public function edit(Clentcontract $clentcontract)
    {
        return view('personal.clientContract.edit', compact('clentcontract'));
    }

    public function update(ClientContractUpdateRequest $request, Client $client, Clentcontract $clentcontract)
    {
//        $data = $request->validate(
//            [
//                'title' => 'required|string',
//                'date' => 'required',
//                'file' => 'nullable',
//
//            ]
//        );
        $data = $request->validated();
        $clentcontract->update($data);

//        $clentcontract->update([
//            'title' => $request->title,
//            'date_contract' => $request->date,
//            'file' => $request->file,
//        ]);
        $clentcontract->update($data);
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
