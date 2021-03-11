<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Buku;
class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = DB::table('bukus')->get();
         return view('buku/index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
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
                'judul' => 'required|unique:bukus',
                'deskripsi' => 'required',
                'penulis' => 'required',
                'tahun' => 'required',
                'sampul' => 'image',
                'file' => 'required'
            ]);
            $imgName = $request->sampul->getClientOriginalName() . '-' . time() . '.' . $request->sampul->extension(); 
            $request->sampul->move(public_path('image'), $imgName);

            $bukuName = $request->file->getClientOriginalName() . '-' . time() . '.' . $request->file->extension(); 
            $request->file->move(public_path('book'), $bukuName);

             $buku = Buku::create([
                        "judul" => $request['judul'],
                        'deskripsi' => $request['deskripsi'],
                        'penulis' => $request['penulis'],
                        'tahun' => $request['tahun'],
                        'sampul' => $imgName,
                        'file' => $bukuName
                    ]);
            return redirect('/buku')->with('success','Data Buku Berhasil Disimpan!');
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
        
        return view('buku/show',compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::find($id);
        return view('buku/edit', compact('buku'));
    }

    public function editbk($id)
    {
        $buku = Buku::find($id);
        return view('buku/editbk', compact('buku'));
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

        $buku = Buku::find($id);
        $request->validate([
                'judul' => 'required',
                'deskripsi' => 'required',
                'penulis' => 'required',
                'tahun' => 'required',
                // 'sampul' => 'image',
                // 'file' => 'required'
                ]);

                    if($request->sampul != ''){        
                    $path = public_path('image/');

                    //code for remove old file
                    if($buku->sampul != ''  && $buku->sampul != null){
                        $file_old = $path.$buku->sampul;
                        unlink($file_old);
                    }

                    //upload new file
                    $file = $request->sampul;
                    $filename = $file->getClientOriginalName();
                    $file->move($path, $filename);


           $buku->update([
                   "judul" => $request['judul'],
                        'deskripsi' => $request['deskripsi'],
                        'penulis' => $request['penulis'],
                        'tahun' => $request['tahun'],
                        'sampul' => $filename
                        
            ]);

            
    }elseif($request->file != ''){

              $path = public_path('book/');

                    //code for remove old file
                    if($buku->file != ''  && $buku->file != null){
                        $file_old = $path.$buku->file;
                        unlink($file_old);
                    }

                    //upload new file
                    $files = $request->file;
                    $filename = $files->getClientOriginalName();
                    $files->move($path, $filename);


           $buku->update([
                   "judul" => $request['judul'],
                        'deskripsi' => $request['deskripsi'],
                        'penulis' => $request['penulis'],
                        'tahun' => $request['tahun'],
                        'file' => $filename
                        
            ]);
    }else{
        $buku->update([
                   "judul" => $request['judul'],
                        'deskripsi' => $request['deskripsi'],
                        'penulis' => $request['penulis'],
                        'tahun' => $request['tahun'],
                        
                        
            ]);

            
    }
    return redirect('/buku')->with('success','Berhasil Di Ubah!');
}

   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $buku = Buku::destroy($id);
        return redirect('/buku')->with('success','Berhasil Di Dihapus!');
    }
}