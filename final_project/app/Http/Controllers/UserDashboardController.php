<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Buku;
use App\Komentar_buku;
use App\Profil;
use PDF;
use Response;
use DB;

class UserDashboardController extends Controller
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
        $buku =  Buku::select('bukus.*', DB::raw('SUM(rating)/COUNT(rating) as total_rating'))
        ->leftJoin('user_bukus', 'user_bukus.buku_id', '=', 'bukus.id')
        ->groupBy('bukus.id')
        ->paginate(12);
        
        return view('member.dashboard', compact('buku'));
    }

    public function cari(Request $request){
        if(!empty($request->input('keyword'))){
            $cari = $request->keyword;
            $buku = Buku::where('judul', 'like', "%{$cari}%")->paginate(12);
        }
        else{
            $buku = Buku::paginate(12);
        }

        return view('member.dashboard', compact('buku'));
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
        $buku = Buku::find($id);
        $komen = Komentar_buku::where('buku_id', $id)
        ->join('profils','komentar_bukus.user_id','=','profils.id')
        ->join('bukus', 'komentar_bukus.buku_id','=','bukus.id')
        ->orderBy('komentar_bukus.created_at')
        ->get();

        return view('member.dash.show', compact('buku','komen'));
        /**$buku = Buku::find($id);
        $komentara = Komentar_buku::where('buku_id', $id)->orderBy('created_at','DESC')->get();
        $idendity =[];
        $comment =[];
        foreach($komentara as $komen){
            array_push($idendity, $komen->user_id);
            array_push($comment, $komen->komentar);
        }
        $nama = [];
        $foto = [];
        foreach($idendity as $value){
            array_push($nama, Profil::where('id', $value)->value('nama'));
            array_push($foto, Profil::where('id', $value)->value('foto'));
        }
        return view('member.dash.show', compact('buku'))
        ->with('comment', $comment)
        ->with('nama', $nama)
        ->with('foto', $foto);**/
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
        //
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
