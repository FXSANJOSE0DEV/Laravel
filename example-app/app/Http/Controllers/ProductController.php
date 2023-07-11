<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends BaseController
{


    public function productid(string $id)
    {

        // ce que fait le controller
        return view('product-details',['id'=>$id]); // On indique la vue ici
    }

    public function product_list()
    {
        // ce que fait le controller
        $results = Product::all();

        foreach ($results as $row) {
            // Traitez chaque ligne de résultat ici
        }

        return view('homepage', ['results'=>$results]); // On indique la vue ici
    }
}
