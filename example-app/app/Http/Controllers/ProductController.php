<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function ProductId($id)
    {

        // ce que fait le controller
        return view('product-details'); // On indique la vue ici
    }

    public function Product_list()
    {
        // ce que fait le controller
        return view('product-details'); // On indique la vue ici
    }


}
