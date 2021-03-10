<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Profil;

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profil = Profil::where('user_id', Auth::id())->first();
        return view('member.profil', compact('profil'));
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
        //
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
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required',
            'nik' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'telp' => 'required|numeric'
        ]);
        $profil = Profil::find($id);
        $profil->nama = $request->nama;
        $profil->nik = $request->nik;
        $profil->alamat = $request->alamat;
        $profil->jenis_kelamin = $request->jenis_kelamin;
        $profil->telp = $request->telp;
        $profil->update();
        
        return redirect('/profil')->with('success', 'Profil Berhasil Di Update!');
    }

    public function updatefoto(Request $request, $id){
        $this->validate($request,[
            'file'=>'required|mimes: jpeg,jpg,png| max:2048'
        ]);
        $nama = Auth::user()->name;
        $filename = time()."_".$nama."_".$id.'.'.$request->file->extension();
        $request->file->move(public_path('assets/images/Foto Profile/'), $filename);
        $profil = Profil::find($id);
        $profil->foto = $filename;
        $profil->update();

        return redirect('/profil')->with('success', 'Foto Profil Berhasil Di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
