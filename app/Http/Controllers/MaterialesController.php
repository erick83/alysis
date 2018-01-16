<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Materiales;
use App\Http\Requests;

class MaterialesController extends Controller
{
    public function getMaterial($id) {
        $materiales = Materiales::find($id);
        $inventario = $materiales->inventario;
        return response()->json($inventario);
    }
}
