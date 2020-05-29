<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class KandidatApi extends Controller
{
    //
    public function index()
    {
        $kandidat = DB::table('kandidat')->get();
        return response()->json([
            'message' => 'success',
            'kandidat'=> $kandidat 
        ],200);
    }
}
