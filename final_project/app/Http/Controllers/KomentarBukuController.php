<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Komentar_buku;
use App\Buku;
use App\Profil;

class KomentarBukuController extends Controller
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
        //
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
        $this->validate($request,[
            'komen' => 'required',
        ]);
        $user_id = Auth::id();
        $komentar = Komentar_buku::create([
            'komentar' => $request->komen,
            'buku_id' => $id,
            'user_id' => $user_id,
        ]);
        $buku = Buku::find($id);
        $komen = Komentar_buku::where('buku_id', $id)
        ->join('profils','komentar_bukus.user_id','=','profils.id')
        ->join('bukus', 'komentar_bukus.buku_id','=','bukus.id')
        ->orderBy('komentar_bukus.created_at')
        ->get();

        return redirect('/dashboard/'.$id.'/show');
        
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
