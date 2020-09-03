<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Admin::where('tbl_admin.nama_admin','like',"%{$request->keyword}%")->paginate(10);

        return view('admin.admin.index',(['data'=>$data]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin.create');
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
            'nama_admin'=>'required|min:3|max:100',
            'username'=>'required|string|max:100|unique:tbl_admin',
            'password'=>'required|string|min:8|max:100',
        ]);

        Admin::create([
            'nama_admin'=>$request->nama_admin,
            'username'=>$request->username,
            'password'=>bcrypt($request->password)
        ]);

        return redirect()->route('admin.index')->with('store','Berhasil disimpan!');
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
    public function edit(Admin $admin)
    {
        return view('admin.admin.edit',['data'=>$admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        if($request->username === $admin->username)
        {
            $request->validate([
                'nama_admin'=>'required|min:3|max:100',
                'password'=>'nullable|string|max:100',
            ]);
        }else
        {
            $request->validate([
                'nama_admin'=>'required|min:3|max:100',
                'username'=>'required|string|max:100|unique:tbl_admin',
                'password'=>'nullable|string|max:100',
            ]);
        }


        if(!empty($request->password)){
        $query = [
            'nama_admin'=>$request->nama_admin,
            'username'=>$request->username,
            'password'=>bcrypt($request->password),
            ];
        }else {
        $query = [
            'nama_admin'=>$request->nama_admin,
            'username'=>$request->username,
            ];
        }
        $admin->update($query);
        return redirect()->route('admin.index')->with('update','Berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('admin.index')->with('destroy','Berhasil dihapus!');
    }

    public function dashboard(){
    	return view('admin/dashboard.index');
    }

    public function login(){
    	return view('admin.login');
    }

    // Calon
    public function calon(){
    	return view('admin/calon.index');
    }

    public function editcalon(){
    	return view('admin/calon.edit');
    }

    public function createcalon(){
        return view('admin/calon.create');
    }

    // pemilih
    public function pemilih(){
        return view('admin/pemilih.index');
    }

    public function editpemilih(){
        return view('admin/pemilih.edit');
    }

    public function createpemilih(){
        return view('admin/pemilih.create');
    }

    // admin
    public function admin(){
        return view('admin/admin.index');
    }

    public function editadmin(){
        return view('admin/admin.edit');
    }

    public function createadmin(){
        return view('admin/admin.create');
    }

    // laporan
    public function laporan(){
        return view('admin/laporan.index');
    }
}
