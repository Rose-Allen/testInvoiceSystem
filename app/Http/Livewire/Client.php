<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Manny\Manny;

class Client extends Component
{
//    protected $listeners = ['getData' => 'getData'];
//    public $bin, $company_name, $name, $phone, $email;
    public function render()
    {
        return view('livewire.client');
    }

    protected $listeners = ['getData' => 'getData'];
    public $bin;
    public $company_name;
    public $name;
    public $email;
    public $phone;

    public function updated($field)
    {
        if ($field == 'phone') {
//            $this->phone = Manny::mask($this->phone, "+9(999)-999-9999");
            $this->phone = Manny::mask($this->phone, "+1(111)-111-1111");
        }
    }

    public function rules()
    {
        return [
            'bin' => ['required', 'string', 'min:12', 'max:12'],
            'company_name' => ['required', 'string',],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }

    protected $message = [
        'bin.required' => 'Не правильный Бин',
        'email.required' => 'Не верный email',
        'company_name.required' => 'не верное имя компании ',
        'password.required' => 'не верный пароль',
        'phone.required' => 'не верный телефон',
    ];

    public function getData($data)
    {
        $this->bin = $data;
        $response = Http::get('https://stat.gov.kz/api/juridical/counter/api/?bin=' . $data . '&lang=ru');

        if ($response->successful()) {
            $data = json_decode($response->body())->obj->name;
            $this->company_name = $data;
        }
    }


}
