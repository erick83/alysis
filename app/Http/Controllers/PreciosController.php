<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Materiales;
use App\Producto;
use App\Servicio;
use App\Http\Requests;

class PreciosController extends Controller
{
    public function index() {
        $productos = Producto::all();
        $servicios = Servicio::all();
        $materiales = Materiales::all();

        return view('precios', [
            'productos' => $productos,
            'servicios' => $servicios,
            'materiales' => $materiales
        ]);
    }
}
