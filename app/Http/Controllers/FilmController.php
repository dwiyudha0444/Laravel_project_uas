<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use DB;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan seluruh data film
        //$film = Film::all();
        $film = Film::orderBy('id','DESC')->get();
        return view('film.index',compact('film'));
    }

    public function index1()
    {
        //menampilkan seluruh data film
        //$film = Film::all();
        $film = Film::orderBy('id','DESC')->get();
        return view('landingpage.index',compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //arahkan ke form input data
        return view('film.form');
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
            'genre' => 'required|max:100',
            'judul' => 'required|max:45',
            'tgl_rilis' => 'required',
            'sinopsis' => 'required',
            'cover' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg'
            ]);
            //Film::create($request->all());
            //---aoakah user ingin upload cover
            if(!empty($request->cover)){
                $fileName=$request->judul.'.'.$request->cover->extension();
                //$fileName=$request->cover->getClientOriginalName();
                $request->cover->move(public_path('assets_admin/img'),$fileName);
            }
            else{
                $fileName = '';
            }
            //insert data dari request form
            DB::table('film')->insert(
                [
                    'genre' => $request->genre,
                    'judul' => $request->judul,
                    'tgl_rilis' => $request->tgl_rilis,
                    'sinopsis' => $request->sinopsis,
                    'cover' => $fileName,
                    'created_at' => now(),
              ]);
                

            
            return redirect()->route('film.index')
            ->with('success','Data Berhasil Disimpan');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fil = Film::find($id);
        return view('film.detail',compact('fil'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fil = Film::find($id);
        return view('film.form_edit',compact('fil'));
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
            'genre' => 'required|max:100',
            'judul' => 'required|max:100',
            'tgl_rilis' => 'required',
            'sinopsis' => 'required',
            'cover' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg'
            ]);
            //Film::create($request->all());
            //---ambil cover lama
            $cover = DB::table('film')->select('cover')->where('id',$id)->get();
            foreach($cover as $co){
                $namaFileFotoLama = $co->cover;
            }
            //---aoakah user ingin ganti cover lama
            if(!empty($request->cover)){
                //jika ada foto lama , hapus terlebih dahulu
                if(!empty($fil->cover)) unlink('assets_admin/img'.$fil->cover);
                //foto lama ganti foto baru
                $fileName=$request->judul.'.'.$request->cover->extension();
                //$fileName=$request->cover->getClientOriginalName();
                $request->cover->move(public_path('assets_admin/img'),$fileName);
            }
            //---user tidak ganti foto lama
            else{
                $fileName = $namaFileFotoLama;
            }
            DB::table('film')->where('id',$id)->update(
                [
                    'genre' => $request->genre,
                    'judul' => $request->judul,
                    'tgl_rilis' => $request->tgl_rilis,
                    'sinopsis' => $request->sinopsis,
                    'cover' => $fileName,
                    'updated_at' => now(),
              ]);
            
            return redirect('/film'.'/'.$id)
            ->with('success','Data Berhasil Diubah');
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fil = Film::find($id);
        Film::where('id',$id)->delete();
        return redirect()->route('film.index')
            ->with('success','Data Berhasil Dihapus');
    }
}