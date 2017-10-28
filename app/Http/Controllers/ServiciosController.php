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
}
