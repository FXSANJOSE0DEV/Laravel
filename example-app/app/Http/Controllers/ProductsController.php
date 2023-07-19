<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\category;

class ProductsController extends Controller
{
    public function index()
    {
        $categories = category::find('3');
        $products = $categories->products;

        return view('index', compact('categories'));
    }
}
