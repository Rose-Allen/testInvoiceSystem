<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usercontract extends Model
{
    use HasFactory;
    use SoftDeletes;

   protected $fillable = [
       'title',
       'file',
       'date_contract',
       'user_id',
   ];
}
