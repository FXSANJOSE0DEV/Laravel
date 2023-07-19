<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Validator;
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

    public function handleFormSubmission(Request $request)
    {


        // La validation a réussi, procède au traitement supplémentaire

        return redirect()->back()->with('success', 'Le formulaire a été soumis avec succès !');
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric|gte:0',
            'weight' => 'required',
            'image' => 'required',
            'quantity' => 'required',
            'available' => 'required',
            'categorie_id' => 'required',

        ]);

        if ($validator->fails()) {
            // La validation a échoué
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

//        dd($request->name);
        $data = $request->all();

        $product = Product::findOrFail($data['productId']);
        $product->update($data);

        return redirect()->route('backoffice');


    }

    public function destroy($id)
    {

        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->back();

    }

}
