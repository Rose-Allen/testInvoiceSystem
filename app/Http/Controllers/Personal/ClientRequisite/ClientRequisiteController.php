<?php

namespace App\Http\Controllers\Personal\ClientRequisite;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequisite\ClientRequisiteStoreRequest;
use App\Http\Requests\ClientRequisite\ClientRequisiteUpdateRequest;
use App\Models\Address;
use App\Models\Client;
use App\Models\Clientrequisite;
use App\Models\Userrequisite;
use Illuminate\Http\Request;

class ClientRequisiteController extends Controller
{
    public function index(Client $client)
    {
        $clientRequisites = Clientrequisite::where('client_id', $client->id)->get();
        return view('personal.clientRequisite.index', compact('clientRequisites', 'client'));
    }

    public function create(Client $client)
    {
        return view('personal.clientRequisite.create', compact('client'));
    }

    public function store(ClientRequisiteStoreRequest $request)
    {

//        $data = $request->validate(
//            [
//                'title_bank' => 'required',
//                'iik' => 'required',
//                'bik' => 'required',
//                'kbe' => 'required',
//                'client_id' => 'required|integer',
//            ]
//        );

        $data = $request->validated();
        Clientrequisite::create($data);
        return redirect()->back();

    }

    public function edit(Clientrequisite $clientrequisite)
    {
        return view('personal.clientRequisite.edit', compact('clientrequisite'));

    }

    public function update(Clientrequisite $clientrequisite, ClientRequisiteUpdateRequest $request)
    {
//        $data = $request->validate(
//            [
//                'title_bank' => 'required',
//                'iik' => 'required',
//                'bik' => 'required',
//                'kbe' => 'required',
//            ]
//        );
        $data = $request->validated();
        $clientrequisite->update($data);
        return redirect()->back();
    }

    public function delete(Clientrequisite $clientrequisite)
    {
        $clientrequisite->delete();
        return redirect()->back();
    }
}
