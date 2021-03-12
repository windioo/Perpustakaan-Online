<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UserBuku;
use App\Buku;

class KoleksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');   // jika ingin beberapa yg di auth menggunakan only([])
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $koleksi = UserBuku::where('user_id', Auth::id())->where('is_read','1')->get();
        return view('member.koleksi.index',compact('koleksi'));
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
        $koleksi = UserBuku::firstOrcreate([
            'user_id' => Auth::id(),
            'buku_id' => $request->id
        ]);

        // return redirect('/dashboard')->with('success','Buku Berhasil Disimpan!');
        
        $filename = Buku::find($request->id);
        $file = public_path().'/book/'.$filename->file;
        return response()->file($file);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku_id = UserBuku::find($id);
        $filename = Buku::where('id', $buku_id->buku_id)->first();
        $file = $filename->file;
        $path = $file = public_path().'/book/'.$file;
        return response()->file($path);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $koleksi = UserBuku::where('id', $id)->update([
            'rating' => $request->star,
            'ulasan' => $request->ulasan,
            'is_read' => '0'
        ]);
        
        return redirect(route('koleksi.index'))->with('success','Ulasan Berhasil Disimpan!');
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
