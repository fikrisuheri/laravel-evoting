<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kandidat;
use App\Voting;
use Illuminate\Support\Facades\DB;
class VotingController extends Controller
{
    //
    public function index(Request $data)
    {
        if($data->session()->get('token')){
            //Jika Ada Session           
                $kandidat = Kandidat::all();
                return view('voting.index',[
                    'kandidat' =>$kandidat
                ]);
        }else{
            // jika tidak ada session
            return redirect('/votinglogin');
        }
 
    }
    public function simpansuara($idkandidat,Request $data)
    {
        $jumlah = DB::table('kandidat')->where('id',$idkandidat)->get();
        foreach ($jumlah as $key) {
             $jumlahsuara = $key->jumlahsuara;
        }
        DB::table('kandidat')->where('id',$idkandidat)->update([
            'jumlahsuara' => $jumlahsuara+1
        ]);
        DB::table('pemilih')->where('username',$data->session()->get('token'))->update([
            'status' => 1
        ]);
        return redirect ('/logoutvoting');
    }
    public function apisimpansuara(Request $data)
    {
        $idkandidat = $data->idkandidat;
        $token      = $data->token;
        $jumlah = DB::table('kandidat')->where('id',$idkandidat)->get();
        $voter = DB::table('pemilih')->where('username',$token)->get();
        foreach($voter as $v) {
            $statusvoter = $v->status;
        }
        if($statusvoter == 2){
        foreach ($jumlah as $key) {
             $jumlahsuara = $key->jumlahsuara;
        }
        DB::table('kandidat')->where('id',$idkandidat)->update([
            'jumlahsuara' => $jumlahsuara+1
        ]);
        DB::table('pemilih')->where('username',$token)->update([
            'status' => 1
        ]);
        $success = '1';
        $msg = 'Berhasil';
        }else{
            $success = '0';
            $msg = 'Gagal';
        }
        return response()->json([
                    'success' => $success,
                    'message' => $msg
                ]);
    }
    
    public function logoutvoting(Request $data){
        $data->session()->forget('token');
        return view ('voting.logout');
    }
    
    public function daftartoken()
    {
        $token = DB::table('pemilih')->where('status','2')->get();
        foreach($token as $tkn) {
            echo $tkn->username;
            echo '<br>';
            echo '<br>';
        } 
    }
    
}
