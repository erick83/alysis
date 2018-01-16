<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Servicio;
use App\Http\Requests;

class ServiciosController extends Controller
{
  public function index() {
    $servicios = Servicio::all();
    return view('servicios', ['servicios' => $servicios]);
  }

  public function getServicio($id) {
    $servicio = Servicio::find($id);
    return response()->json($servicio);
  }

  public function add() {
  	return view('agregar_servicio');
  }
}
