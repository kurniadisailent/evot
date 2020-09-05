<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemilih;

class PemilihController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Pemilih::where('tbl_pemilih.nama_pemilih','like',"%{$request->keyword}%")->paginate(10);

        return view('admin.pemilih.index',(['data'=>$data]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pemilih.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemilih'=>'required|min:3|max:100',
            'username'=>'required|string|max:100|unique:tbl_admin',
            'password'=>'required|string|min:8|max:100',
        ]);

        Pemilih::create([
            'nama_pemilih'=>$request->nama_pemilih,
            'username'=>$request->username,
            'password'=>bcrypt($request->password),
            'jenis_kelamin'=>$request->jenis_kelamin,
            'kelas_pemilih'=>$request->kelas_pemilih,
            'status'=>$request->status,
        ]);

        return redirect()->route('pemilih.index')->with('store','Berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemilih $pemilih)
    {
        return view('admin.pemilih.edit',['data'=>$pemilih]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemilih $pemilih)
    {
        if($request->username === $pemilih->username)
        {
            $request->validate([
                'nama_pemilih'=>'required|min:3|max:100',
            ]);
        }else
        {
            $request->validate([
                'nama_pemilih'=>'required|min:3|max:100',
                'username'=>'required|string|max:100|unique:tbl_admin',
            ]);
        }


        if(!empty($request->password)){
        $query = [
            'nama_pemilih'=>$request->nama_pemilih,
            'username'=>$request->username,
            'password'=>bcrypt($request->password),
            'jenis_kelamin'=>$request->jenis_kelamin,
            'kelas_pemilih'=>$request->kelas_pemilih,
            'status'=>$request->status,
            ];
        }else {
        $query = [
            'nama_pemilih'=>$request->nama_pemilih,
            'username'=>$request->username,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'kelas_pemilih'=>$request->kelas_pemilih,
            'status'=>$request->status,
            ];
        }
        $pemilih->update($query);
        return redirect()->route('pemilih.index')->with('update','Berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemilih $pemilih)
    {
        $pemilih->delete();
        return redirect()->route('pemilih.index')->with('destroy','Berhasil dihapus!');
    }
}
