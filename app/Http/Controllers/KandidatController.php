<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kandidat;
class KandidatController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	$kandidat = DB::table('kandidat')->get();
    	return view('dashboard/kandidat/kandidat',[
    		'kandidat' => $kandidat
    	]);
    }
    public function tambah()
    {
    	return view('dashboard/kandidat/tambahkandidat');
    }
    public function store(Request $data)
    {
    	$file = $data->file('gambar');
    	$oriname = $data->file('gambar')->getClientOriginalName();
    	$nama_file = time()."_".$oriname;

    	$tujuan = 'foto_kandidat/';
    	$file->move($tujuan,$nama_file);

    	//INSERT KE DATABASE
    	DB::table('kandidat')->insert([
    		'nama'    => $data->nama,
    		'visi'    => $data->visi,
    		'misi'    => $data->misi,
    		'periode' => 1,
			'foto'    => $nama_file,
			'jumlahsuara' => 0
    	]);
    	return redirect('/admin/kandidat');
    }

    public function detail($id)
    {
        $detailkandidat = Kandidat::find($id);
    	return view('dashboard/kandidat/kandidatdetail',[
            'detailkandidat' => $detailkandidat
        ]);
	}
	public function edit($id)
	{
		$edit = Kandidat::find($id);
		return view('dashboard/kandidat/editkandidat',[
			'edit' => $edit
		]);
	}
	public function update($id,Request $data)
	{
		// user mengubah gambar
// 		$file = $data->file('gambar');
// 		if($file){
// 			$file = $data->file('gambar');
//     		$oriname = $data->file('gambar')->getClientOriginalName();
//     		$nama_file = time()."_".$oriname;
//     		$tujuan = 'foto_kandidat/';
// 			$file->move($tujuan,$nama_file);
// 			//Insert Ke Database
// 			$edit = Kandidat::find($id);
// 			$edit->foto = $nama_file;
// 			$edit->nama = $data->nama;
// 			$edit->visi = $data->visi;
// 			$edit->misi = $data->misi;
// 			$edit->save();
// 			return redirect('/admin/kandidat/detail/'.$id);
// 		}else{
			$edit = Kandidat::find($id);
			$edit->nama = $data->nama;
			$edit->visi = $data->visi;
			$edit->misi = $data->misi;
			$edit->save();
			return redirect('/admin/kandidat/detail/'.$id);
// 		}
		
	}

	public function hapus($id)
	{
		$kandidat = Kandidat::find($id);
		$kandidat->delete();
		return redirect('/admin/kandidat');
	}
}
