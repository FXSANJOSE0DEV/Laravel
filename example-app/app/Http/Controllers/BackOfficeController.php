<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\View\View;


class BackOfficeController extends BaseController
{
    public function backOffice()
    {
        // ce que fait le controller
        return view('BackOffice'); // On indique la vue ici
    }

    public function store(Request $request): RedirectResponse
    {

//        dd($request->name);

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'weight' => $request->weight,
            'image' => $request->image,
            'quantity' => $request->quantity,
            'available' => $request->available,
            'categorie_id' => $request->categorie_id,
        ]);
        return view('BackOffice');
    }


}
