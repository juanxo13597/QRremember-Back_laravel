<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fallecido;

class FallecidoController extends Controller
{
    public function ultimos_fallecidos(){
        $res = Fallecido::take(10)->orderBy('fecha_fallecimiento', 'desc')->get();

        return response()->json($res, 200);
    }

    public function fallecido_info($id){
        $res = Fallecido::where('id', '=', $id)->first();

        return response()->json($res, 200);
    }

}
