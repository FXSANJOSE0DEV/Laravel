<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = ['name'];
    protected $table = 'categories';
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}



