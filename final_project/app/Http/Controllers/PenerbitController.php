<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penerbit;
use DB;
class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $penerbit = DB::table('penerbits')->get();
         return view('penerbit/index', compact('penerbit'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penerbit.create');
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
                'nama' => 'required|unique:penerbits',
                'no_telp' =>'required',
                'alamat' =>'required'
            ]);
             $penerbit = Penerbit::create([
                        "nama" => $request['nama'],
                        "no_telp" => $request['no_telp'],
                        "alamat" => $request['alamat']
                    ]);
            return redirect('/penerbit')->with('success','Penerbit Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $penerbit = Penerbit::find($id);
        
        return view('penerbit/show',compact('penerbit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $penerbit = Penerbit::find($id);
         return view('penerbit/edit', compact('penerbit'));
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
                'nama' => 'required|unique:penerbits',
                'no_telp' =>'required',
                'alamat' =>'required'
                ]);
           $penerbit = Penerbit::where('id',$id)->update([
                        "nama" => $request['nama'],
                        "no_telp" => $request['no_telp'],
                        "alamat" => $request['alamat']
            ]);

            return redirect('/penerbit')->with('success','Berhasil Di Ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penerbit = Penerbit::destroy($id);
        return redirect('/penerbit')->with('success','Berhasil Di Dihapus!');
    }
}
