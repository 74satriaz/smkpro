<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita =DB::table('dt_berita')->select()->orderBy('id','desc')->get();
        return view('berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if(Input::hasFile('gmb')) {
            $file = Input::file('gmb');
            $file->move('picture', $file->getClientOriginalName());
            $pic = new Berita();
            $pic->judul= $request->judul;
            $pic->penulis= $request->penulis;
            $pic->gambar= $file->getClientOriginalName();
            $pic->isi= $request->isi;
            $pic->save();
            return redirect()->route('berita.index');
        }else{
            $berita = new Berita();
            $berita->judul= $request->judul;
            $berita->penulis= $request->penulis;
            $berita->gambar= null;
            $berita->isi= $request->isi;
            $berita->save();
            return redirect()->route('berita.index');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.show',compact('berita'));       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.edit',compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);
        $berita->judul= $request->judul;
        $berita->penulis= $request->penulis;
        $berita->gambar= $request->gambar;
        $berita->isi= $request->isi;
        $berita->save();
        return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return redirect()->route('berita.index');
    }
}
