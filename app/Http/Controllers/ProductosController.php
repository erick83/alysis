<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;
use App\Http\Requests;

class ProductosController extends Controller
{
    public function getAll() {
    	$productos = Producto::all();
    	return view('productos', ['productos' => $productos]);
    }

    public function add() {
    	return view('agregar_producto');
    }
}
