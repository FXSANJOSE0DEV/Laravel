<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'adresse', 'zip_code', 'city'
    ];


}


