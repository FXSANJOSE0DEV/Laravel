<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'weight', 'image', 'quantity', 'available', 'categorie_id',
    ];
    public function category()
    {
        return $this->belongsTo(category::class);
    }


}


