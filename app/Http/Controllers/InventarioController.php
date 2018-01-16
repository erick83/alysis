<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Materiales;
use App\Http\Requests;

class InventarioController extends Controller
{
    public function getAll() {
		$materiales = Materiales::all();
    	$response = [];
    	foreach ($materiales as $item) {
    		if (isset($item->inventario[0])) {
    			$invent = $item->inventario[0];
    			
    			$temp = [
	    			'id' => $item['id'],
	    			'material' => $item['material'],
	    			'precio' => $invent['precio'],
	    			'cantidad' => $invent['cantidad'],
	    			'existencia' => $invent['existencia']
	    		];

	    		array_push($response, $temp);
    		}
    	}
		return view('inventario_lista', ['materiales' => $response]);
	}

    public function add() {
        $materiales = Materiales::all();
        return view('inventario', ['materiales' => $materiales]);
    }
}
