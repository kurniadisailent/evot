<?php

namespace App\Http\Controllers;
use App\Pemilih;
use App\Calon;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Pemilih::All();
        $Pemilih = Pemilih::count();
        $S_Memilih = Pemilih::select('status')->where('status','=','MEMILIH')->count();
        $B_Memilih = Pemilih::select('status')->where('status','=','BELUM MEMILIH')->count();
        $data_tabel = Calon::All();
        if($B_Memilih == NULL and $S_Memilih == NULL){
            $PS_Memilih = 0;
            $PB_Memilih = 0;
            return view('admin.dashboard.index',
            ([
                'data'=>$data,
                'S_Memilih'=>$S_Memilih,
                'B_Memilih'=>$B_Memilih,
                'PS_Memilih'=>$PS_Memilih,
                'PB_Memilih'=>$PB_Memilih,
                'data_tabel'=>$data_tabel,
            ]));
        }
        $PS_Memilih = $S_Memilih / $Pemilih * 100;
        $PB_Memilih = $B_Memilih / $Pemilih * 100;
        return view('admin.dashboard.index',
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
