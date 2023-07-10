<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class BackOfficeController extends BaseController
{
    public function DisplayBDD()
    {
        // ce que fait le controller
        return view('DisplayModele'); // On indique la vue ici
    }

    public function i
}
