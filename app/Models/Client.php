<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Client extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use SoftDeletes;

    protected $fillable = [
        'bin',
        'company_name',
        'business_name',
        'name',
        'phone',
        'email',
        'user_id',

    ];


    public function user(){
       return $this->belongsTo(User::class);
    }



    public function addresses(){
        return $this->hasMany(Address::class, 'client_id', 'id');
    }


    //    public function addresses(){
//        return $this->belongsTo(Address::class);
//    }


}
