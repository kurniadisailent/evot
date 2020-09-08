<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemilih;
use App\Calon;

class LaporanController extends Controller
{
    public function index(){
        $data = Pemilih::All();
        $Pemilih = Pemilih::count();
        $S_Memilih = Pemilih::select('status')->where('status','=','MEMILIH')->count();
        $B_Memilih = Pemilih::select('status')->where('status','=','BELUM')->count();
        $PS_Memilih = $S_Memilih / $Pemilih * 100;
        $PB_Memilih = $B_Memilih / $Pemilih * 100;
        $data_tabel = Calon::All();
        return view('admin.laporan.index',
        ([
            'data'=>$data,
            'S_Memilih'=>$S_Memilih,
            'B_Memilih'=>$B_Memilih,
            'PS_Memilih'=>$PS_Memilih,
            'PB_Memilih'=>$PB_Memilih,
            'data_tabel'=>$data_tabel,
        ]));
    }
}