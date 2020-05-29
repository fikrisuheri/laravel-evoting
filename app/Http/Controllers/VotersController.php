<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Voters;
use App\Pemilih;
use App\Exports\PemilihExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
 
class VotersController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	$pemilih = DB::table('pemilih')
    				->join('tbl_status','pemilih.status', '=' , 'tbl_status.id')
    				->select('pemilih.*','tbl_status.nama')
    				->get();
    	return view('dashboard/voter/voters',['pemilih' => $pemilih ]);
    }
    public function tambah()
    {
    	    	return view('dashboard/voter/tambah');
    }
	/** TAMPILKAN MENU HAPUS */
	public function hapus()
	{
		return view('dashboard/voter/hapus');
	}
    public function store(Request $data)
    {
    	$jumlah = $data->jumlah;
    	for ($i=0; $i < $jumlah ; $i++) { 
    		# code...
    		$karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    		$string   = '';

    		for ($x=0; $x < 6 ; $x++) { 
    			
    			$pos = rand(0, strlen($karakter)-1);
    			$string .= $karakter{$pos}; 

    		}$token = strtoupper($string);
    			/** CEK TOKEN SUDAH TERDAFTAR ATAU BELUM*/
    			$cek = Voters::find($token);

    			if(empty($cek)){
		    		Voters::create([
		    			'username' => $token,
		    			'periode'  => 1,
		    			'status'   => 2 ]);
		    }
		
    	}

    	 return redirect('/admin/voters');
	}
	//hapustoken
	public function delete(Request $data)
	{
		$jumlah = $data->input('jumlah');
		$kriteria = $data->input('kriteria');
		if($kriteria == 0){
			DB::table('kandidat')->update([
				'jumlahsuara' => 0
			]);
			DB::table('pemilih')->delete();
			return redirect('/admin/voters');
		}else if($kriteria == 1){
			DB::table('kandidat')->update([
				'jumlahsuara' => 0
			]);
			DB::table('pemilih')->where('status',1)->delete();
			return redirect('/admin/voters');
		}else if($kriteria == 2 ){
			DB::table('pemilih')->where('status',2)->delete();
			return redirect('/admin/voters');
		}
	}

	public function export_excel()
	{
		return Excel::download(new PemilihExport, 'token.xlsx');
	}
}
