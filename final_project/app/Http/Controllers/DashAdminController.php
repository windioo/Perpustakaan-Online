<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penerbit;
use App\Kategori;
use App\Buku;
use App\User;
use App\UserBuku;
use DB;

class DashAdminController extends Controller
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
         $count_penerbit = Penerbit::get()->count();
         $count_kategori = Kategori::get()->count();
         $count_buku = Buku::get()->count();
         $count_user = User::get()->where('role','member')->count();
         $count_pembaca = UserBuku::get()->count();
         return view('dashadmin',compact('count_penerbit','count_kategori','count_buku','count_user','count_pembaca'));
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
