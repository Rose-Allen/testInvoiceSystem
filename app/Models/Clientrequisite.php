<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clientrequisite extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title_bank',
        'iik',
        'bik',
        'kbe',
        'client_id'
    ];
}
