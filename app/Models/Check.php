<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'client_id',
        'address_id',
        'contract_client_id',
        'requisites_client_id',
        'status',
        'product_id',
        'data_check',
        'currency_id',
        'sum',
        'requisites_user_id',
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id', 'id');
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class, 'currency_id', 'id');
    }

    public function userrequisite()
    {
        return $this->belongsTo(Userrequisite::class, "requisites_user_id", 'id');
    }


}
