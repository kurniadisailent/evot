<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calon;
use Image;

class CalonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Calon::All();
        return view('admin.calon.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $this->validate($request, [
            'foto_ketua'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'foto_wakil'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //lokasi file foto di simpan
        $lokasi_file = public_path('/images');

        //Resize Foto ketua
        $foto_ketua = $request->file('foto_ketua');
        $nama_foto_ketua = 'foto_ketua_'. time() . '.' . $foto_ketua->getClientOriginalExtension();
        $resize_foto_ketua = Image::make($foto_ketua->getRealPath());
        $resize_foto_ketua->resize(150, 150)->save($lokasi_file . '/' . $nama_foto_ketua);
        //End resize foto ketua

        //Resize Foto wakil
        $foto_wakil = $request->file('foto_wakil');
        $nama_foto_wakil = 'foto_wakil_' . time() . '.' . $foto_wakil->getClientOriginalExtension();
        $resize_foto_wakil = Image::make($foto_wakil->getRealPath());
        $resize_foto_wakil->resize(150, 150)->save($lokasi_file . '/' . $nama_foto_wakil);
        //End resize foto wakil

        Calon::create([
            'nama_ketua'=>$request->nama_ketua,
            'nama_wakil'=>$request->nama_wakil,
            'kelas_ketua'=>$request->kelas_ketua,
            'kelas_wakil'=>$request->kelas_wakil,
            'foto_ketua'=>$nama_foto_ketua,
            'foto_wakil'=>$nama_foto_wakil,
            'visi'=>$request->visi,
            'misi'=>$request->misi,
        ]);

        return redirect()->route('calon.index')->with('store','Berhasil disimpan!');



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
    public function edit(Calon $calon)
    {
        return view('admin.calon.edit',['data'=>$calon]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calon $calon)
    {
        //lokasi file foto di simpan
        $lokasi_file = public_path('/images');

        if(!empty($request->foto_ketua) and empty($request->foto_wakil))
        {
            //Resize Foto ketua
            $foto_ketua = $request->file('foto_ketua');
            $nama_foto_ketua = 'foto_ketua_'. time() . '.' . $foto_ketua->getClientOriginalExtension();
            $resize_foto_ketua = Image::make($foto_ketua->getRealPath());
            $resize_foto_ketua->resize(150, 150)->save($lokasi_file . '/' . $nama_foto_ketua);
            //End resize foto ketua

            $query = [
                'foto_ketua'=>$nama_foto_ketua,
                'nama_ketua'=>$request->nama_ketua,
                'nama_wakil'=>$request->nama_wakil,
                'kelas_ketua'=>$request->kelas_ketua,
                'kelas_wakil'=>$request->kelas_wakil,
                'visi'=>$request->visi,
                'misi'=>$request->misi,
            ];

            $calon->update($query);
            return redirect()->route('calon.index')->with('update','Berhasil diupdate!');
        }
        elseif(!empty($request->foto_wakil) and empty($request->foto_ketua))
        {
            //Resize Foto wakil
            $foto_wakil = $request->file('foto_wakil');
            $nama_foto_wakil = 'foto_wakil_' . time() . '.' . $foto_wakil->getClientOriginalExtension();
            $resize_foto_wakil = Image::make($foto_wakil->getRealPath());
            $resize_foto_wakil->resize(150, 150)->save($lokasi_file . '/' . $nama_foto_wakil);
            //End resize foto wakil
            
            $query = [
                'foto_wakil'=>$nama_foto_wakil,
                'nama_ketua'=>$request->nama_ketua,
                'nama_wakil'=>$request->nama_wakil,
                'kelas_ketua'=>$request->kelas_ketua,
                'kelas_wakil'=>$request->kelas_wakil,
                'visi'=>$request->visi,
                'misi'=>$request->misi,
            ];

            $calon->update($query);
            return redirect()->route('calon.index')->with('update','Berhasil diupdate!');
        }
        elseif (!empty($request->foto_wakil) and !empty($request->foto_ketua))
        {
            //Resize Foto ketua
            $foto_ketua = $request->file('foto_ketua');
            $nama_foto_ketua = 'foto_ketua_'. time() . '.' . $foto_ketua->getClientOriginalExtension();
            $resize_foto_ketua = Image::make($foto_ketua->getRealPath());
            $resize_foto_ketua->resize(150, 150)->save($lokasi_file . '/' . $nama_foto_ketua);
            //End resize foto ketua

            //Resize Foto wakil
            $foto_wakil = $request->file('foto_wakil');
            $nama_foto_wakil = 'foto_wakil_' . time() . '.' . $foto_wakil->getClientOriginalExtension();
            $resize_foto_wakil = Image::make($foto_wakil->getRealPath());
            $resize_foto_wakil->resize(150, 150)->save($lokasi_file . '/' . $nama_foto_wakil);
            //End resize foto wakil

            
            $query = [
                'foto_ketua'=>$nama_foto_ketua,
                'foto_wakil'=>$nama_foto_wakil,
                'nama_ketua'=>$request->nama_ketua,
                'nama_wakil'=>$request->nama_wakil,
                'kelas_ketua'=>$request->kelas_ketua,
                'kelas_wakil'=>$request->kelas_wakil,
                'visi'=>$request->visi,
                'misi'=>$request->misi,
            ];

            $calon->update($query);
            return redirect()->route('calon.index')->with('update','Berhasil diupdate!');
        }
        elseif (empty($request->foto_wakil) and empty($request->foto_ketua))
        {
            $query = [
                'nama_ketua'=>$request->nama_ketua,
                'nama_wakil'=>$request->nama_wakil,
                'kelas_ketua'=>$request->kelas_ketua,
                'kelas_wakil'=>$request->kelas_wakil,
                'visi'=>$request->visi,
                'misi'=>$request->misi,
            ];

            $calon->update($query);
            return redirect()->route('calon.index')->with('update','Berhasil diupdate!');
        }    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calon $calon)
    {
        $calon->delete();
        return redirect()->route('calon.index')->with('destroy','Berhasil dihapus!');
    }
}
