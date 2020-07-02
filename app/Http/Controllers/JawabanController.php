<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pertanyaan;
use \App\Jawaban;

class JawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $pertanyaan = Pertanyaan::find($id);
        $jawaban = Pertanyaan::find($id)->jawaban()->orderBy('id')->get();
        return view('jawaban',compact('jawaban','pertanyaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $pertanyaan = Pertanyaan::find($id);
        return view('buatJawaban',compact('pertanyaan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //
        $pertanyaan = Pertanyaan::find($id);

        $jawaban = new Jawaban();
        $jawaban->isi = $request->jawaban;
        $jawaban->pertanyaan_id = $id;
        $jawaban->save();

        $text = "Menjawab '".$pertanyaan->isi."'";
        return redirect('/pertanyaan')->with('jawab',$text);
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
