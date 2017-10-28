<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Constantes;
use App\Http\Requests;

class ConstantesController extends Controller
{
    public function index() {
        $constantes = Constantes::all();
        return view('constantes', ['data' => $constantes]);
    }
}
