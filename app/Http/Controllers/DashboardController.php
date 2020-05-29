<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $jumlahsuara   = DB::select('select * FROM kandidat');
        $belumvoting   = DB::select('SELECT COUNT(status) as jumlahbelumvoting from pemilih where status = 2 GROUP by status');
    	$kandidat       = DB::select('SELECT COUNT(nama) as jumlah FROM kandidat');	
        $jumlahhaksuara = DB::select('SELECT COUNT(username) as jumlah FROM pemilih');
        $suaramasuk     = DB::select('SELECT COUNT(username) as suaramasuk FROM pemilih WHERE status = 1');
        //dd(json_encode($daftarkandidat));
    	return view('dashboard/index',[
    		'jumlahhaksuara' => $jumlahhaksuara,
            'jumlahkandidat' => $kandidat,
            'jumlahsuara'    => $jumlahsuara,
            'belumvoting'    => $belumvoting,
            'suaramasuk'     => $suaramasuk
    	]);
    }
}
