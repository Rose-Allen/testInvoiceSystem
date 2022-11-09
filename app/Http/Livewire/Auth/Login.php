<?php

namespace App\Http\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $bin;
    public $password;
    public $remember;
    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.app')->section('content');
    }

    public function rules(){
        return [
            'bin' => ['required'],
            'password' => ['required',],
        ];
    }

    protected $message = [
        'bin.required'    => 'Не правильный Бин',
        'password.required' => 'не верный пароль',
    ];

    public function login(){

        $this->validate();
        if (!Auth::attempt($this->only(['bin','password']), $this->remember )){
           $this->addError('bin',__('Не верный БИН'));
           $this->addError('password',__('Не верный пароль'));
            return null;

        }
        return redirect()->to(RouteServiceProvider::HOME);
    }



}
