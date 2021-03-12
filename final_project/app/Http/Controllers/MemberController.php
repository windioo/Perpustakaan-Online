<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profil;

class MemberController extends Controller
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
        $profil = Profil::get();
        $member = User::where('role','member')->get();
        return view('members.index',compact('member','profil'));
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
        $member = User::find($id);
        $profil = Profil::find($id);
        return view('members.show',compact('member','profil'));
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
       if($request->approve === "approve"){
        $member = Profil::where('user_id',$id)->update([
            'is_active' => '1'
        ]);
       }
       elseif($request->approve === "reject"){
        $member = Profil::where('user_id',$id)->update([
            'is_active' => '0'
        ]);
       }
        
        return redirect()->route('member.index')->with('success','Berhasil Di Ubah!');
        
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
