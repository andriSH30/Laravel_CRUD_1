<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pertanyaan;
use Carbon\Carbon;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pertanyaan = Pertanyaan::get();
        return view('pertanyaan',compact('pertanyaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('buatPertanyaan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Carbon::setLocale('id');
        $tgl = Carbon::now()->format('l, d F Y H:i');

        $pertanyaan = new Pertanyaan;
        $pertanyaan->judul = $request->judul;
        $pertanyaan->isi = $request->isi;
        $pertanyaan->created_at = $tgl;
        $pertanyaan->updated_at = $tgl;
        $pertanyaan->Save();

        return redirect('/pertanyaan')->with('pesan','Pertanyaan Baru telah ditambahkan');
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
        $pertanyaan = Pertanyaan::find($id);
        return view('editPertanyaan',compact('pertanyaan'));
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
        Carbon::setLocale('id');
        $tgl = Carbon::now()->format('l, d F Y H:i');
        //
        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan->judul = $request->judul;
        $pertanyaan->isi = $request->isi;
        $pertanyaan->created_at = $pertanyaan->created_at;
        $pertanyaan->updated_at = $tgl;
        $pertanyaan->Save();

        return redirect('/pertanyaan')->with('pesanUpdate','Berhasil memperbarui Pertanyaan '.$pertanyaan->isi);
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
        $pertanyaan = Pertanyaan::find($id);
        $pertanyaan->delete();

        return redirect('/pertanyaan')->with('pesanHapus','Berhasil menghapus sebuah pertanyaan');
    }
}
