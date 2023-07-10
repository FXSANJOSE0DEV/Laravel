<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'weight', 'image', 'quantity', 'available', 'categorie_id',
    ];

    public function leformulaire(Request $request)
    {
        $nom = $request->input('nom');

        // Faire quelque chose avec les données récupérées

        // Rediriger ou afficher une vue
    }


}


