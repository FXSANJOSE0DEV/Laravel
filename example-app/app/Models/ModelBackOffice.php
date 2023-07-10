<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelBackOffice extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'weight', 'image', 'quantity', 'available', 'categorie_id',
    ];
}
