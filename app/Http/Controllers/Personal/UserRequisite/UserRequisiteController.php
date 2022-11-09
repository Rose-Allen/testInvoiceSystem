<?php

namespace App\Http\Controllers\Personal\UserRequisite;

use App\Http\Controllers\Controller;
use App\Models\Userrequisite;
use Illuminate\Http\Request;

class UserRequisiteController extends Controller
{
    public function index()
    {
        $userRequisites = Userrequisite::all();
        return view('personal.userRequisite.index', compact('userRequisites'));
    }

    public function create()
    {
        $user = auth()->user()->id;
        return view('personal.userRequisite.create', compact('user'));
    }

    public function store(Request $request)
    {

        $data = $request->validate(
            [
                'title_bank' => 'required',
                'iik' => 'required',
                'bik' => 'required',
                'kbe' => 'required',
                'user_id' => 'required',
            ]
        );

        Userrequisite::create($data);
        return redirect()->route('personal.user.requisite.index');

    }

    public function edit(Userrequisite $userrequisite)
    {
        return view('personal.userRequisite.edit', compact('userrequisite'));

    }

    public function update(Userrequisite $userrequisite, Request $request)
    {
        $data = $request->validate(
            [
                'title_bank' => 'required',
                'iik' => 'required',
                'bik' => 'required',
                'kbe' => 'required',
            ]
        );

        $userrequisite->update($data);
        return redirect()->route('personal.user.requisite.index');
    }

    public function delete(Userrequisite $userrequisite)
    {
        $userrequisite->delete();
        return redirect()->back();
    }
}
