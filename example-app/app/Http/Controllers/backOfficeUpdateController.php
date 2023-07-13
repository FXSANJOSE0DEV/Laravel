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

    public function zzccmxtp(Product $product)
    {
        return \view('BackOfficeUpdateProduct')->with('product', $product);
    }

    public function loadlist()
    {
        // ce que fait le controller
        $results = DB::select('SELECT * FROM products');


        return view('BackOfficeUpdate', ['results' => $results]); // On indique la vue ici
    }


    public function update(Request $request)
    {

//        dd($request->name);
        $data = $request->all();

        $product = Product::findOrFail($data['productId']);
        $product->update($data);

        return redirect()->route('backoffice');


    }

    public function destroy(Product $id)
    {

        $product = Product::findOrFail($id);
        $product->destroy();

        return redirect()->route('backofficeUpdate');

    }

}
