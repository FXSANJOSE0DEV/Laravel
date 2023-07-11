<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home()
    {
        // ce que fait le controller
        $results = DB::select('SELECT * FROM products');

        foreach ($results as $row) {
            // Traitez chaque ligne de résultat ici
        }

        return view('homepage', ['results'=>$results]); // On indique la vue ici
    }
}
