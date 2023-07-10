<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class BackOfficeController extends BaseController
{
    public function BackOffice()
    {
        // ce que fait le controller
        return view('BackOffice'); // On indique la vue ici
    }
    public function store(Request $request): RedirectResponse
    {
        // Validate the request...
        $product = Product::create([
            'name' => '$name',
            'description' => 'description',
            'price' => '$price',
            'weight' => '$weight',
            'image' => '$image',
            'quantity' => '$quantity',
            'available' => '$available',
            'categorie_id' => '$categorie_id',
        ]);
    }
}
