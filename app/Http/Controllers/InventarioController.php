<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Materiales;
use App\Http\Requests;

class InventarioController extends Controller
{
    public function index() {
        $materiales = Materiales::all();
        return view('inventario', ['materiales' => $materiales]);
    }
}
