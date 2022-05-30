<?php

namespace App\Http\Controllers\v1;

use Illuminate\Routing\Controller;
use App\Models\v1\Producto;

class ProductosController extends Controller
{
    function getAll()  
    {
        $response= new \stdClass();
        $productos = Producto::all();

        $response->succes=true;
        $response->data = $productos;

        return response()->json($response,200);
    }   
}
