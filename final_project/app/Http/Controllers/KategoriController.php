<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use Auth;
use DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = DB::table('kategoris')->get();
         return view('kategori/index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
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
                'nama' => 'required|unique:kategoris'
            ]);
             $kategori = Kategori::create([
                        "nama" => $request['nama']
                    ]);
            return redirect('/kategori')->with('success','Kategori Berhasil Disimpan!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $kategori = Kategori::find($id);
        
        return view('kategori/show',compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $kategori = Kategori::find($id);
        return view('kategori/edit', compact('kategori'));
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
         $request->validate([
                    'nama' => 'required'
                ]);
           $kategori = Kategori::where('id',$id)->update([
                    "nama"=>$request['nama']
            ]);

            return redirect('/kategori')->with('success','Berhasil Di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::destroy($id);
        return redirect('/kategori')->with('success','Berhasil Di Dihapus!');
    }
}
