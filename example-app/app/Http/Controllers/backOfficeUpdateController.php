<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class backOfficeUpdateController extends BaseController
{

    public function backOfficeUpdate()
    {
        // ce que fait le controller
        return view('BackOfficeUpdate'); // On indique la vue ici
    }


    public function loadlist()
    {
        // ce que fait le controller
        $results = DB::select('SELECT * FROM products');


        return view('BackOfficeUpdate', ['results' => $results]); // On indique la vue ici
    }


    public
    function update(Request $request)
    {

//        dd($request->name);

        Product::update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'weight' => $request->weight,
            'image' => $request->image,
            'quantity' => $request->quantity,
            'available' => $request->available,
            'categorie_id' => $request->categorie_id,
        ]);
        return redirect()->route('backoffice');


    }


}
