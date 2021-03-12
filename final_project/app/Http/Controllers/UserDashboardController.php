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
            $buku = Buku::select('bukus.*', DB::raw('SUM(rating)/COUNT(rating) as total_rating'))
            ->leftJoin('user_bukus', 'user_bukus.buku_id', '=', 'bukus.id')
            ->groupBy('bukus.id')->where('judul', 'like', "%{$cari}%")->paginate(12);
        }
        else{
            $buku = Buku::select('bukus.*', DB::raw('SUM(rating)/COUNT(rating) as total_rating'))
            ->leftJoin('user_bukus', 'user_bukus.buku_id', '=', 'bukus.id')
            ->groupBy('bukus.id')
            ->paginate(12);;
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
        $comment = Komentar_buku::where('buku_id', $id)
        // ->join('profils','komentar_bukus.user_id','=','profils.id')
        // ->join('bukus', 'komentar_bukus.buku_id','=','bukus.id')
        // ->orderBy('komentar_bukus.created_at')
        ->get();
        
        return view('member.dash.show', compact('buku','comment'));
       
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
