<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaTemporalController extends Controller
{
    public function index()
    {
        return view('pagina-temporal');
    }
}
