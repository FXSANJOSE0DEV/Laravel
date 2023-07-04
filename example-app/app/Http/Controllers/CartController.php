<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CartController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function Cart()
    {
        // ce que fait le controller
        return view('cart'); // On indique la vue ici
    }
}

