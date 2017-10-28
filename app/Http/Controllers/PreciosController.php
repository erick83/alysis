<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PreciosController extends Controller
{
    public function index() {
        return view('precios');
    }
}
