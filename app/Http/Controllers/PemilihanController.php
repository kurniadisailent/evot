<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calon;
use App\Pemilih;
use DB;

class PemilihanController extends Controller
{
    public function index()
    {
        $data = Calon::All();
        return view('guest.pemilihan',['data'=>$data]);
    }

    public function vote(Request $Request, Calon $vote, Pemilih $pemilih)
    {
        //querypemilih
        $id_pemilih = $pemilih->id_pemilih;
        DB::update('update tbl_pemilih set status = ? where id_pemilih = ?', ["MEMILIH", $id_pemilih]);

        // //queryvote
        // $id_calon = $vote->id_calon;
        // $jumlah_vote_awal = Calon::select('jumlah_suara')->where('id_calon','=',$vote)->pluck('jumlah_suara')->first();
        // $jumlah_vote_akhir = $jumlah_vote_awal + 1;
        
        // DB::update('update tbl_calon set jumlah_suara = ? where id_calon = ?', [$jumlah_vote_akhir, $id_calon]);
        DB::table('tbl_calon')->select('jumlah_suara')->where('id_calon','=',$vote->id_calon)->increment('jumlah_suara');

        return dd($vote->id_calon);
    }
}
