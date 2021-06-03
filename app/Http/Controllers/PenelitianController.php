<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PenelitianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // Route Halaman LPPM
    public function index()
    {
        return view('LPPM.Penelitian.Proposal_PenelitianNEW');
    }
    public function In_Review(){

        return view('LPPM.Penelitian.Proposal_PenelitianINREVIEW');
    }
    public function Revision(){

        return view('LPPM.Penelitian.Proposal_PenelitianREVISION');
    }
    public function Waiting(){

        return view('LPPM.Penelitian.Proposal_PenelitianWAITING');
    }
    public function Approved(){

        return view('LPPM.Penelitian.Proposal_PenelitianAPPROVED');
    }
    public function Review(){
        return view('LPPM.Penelitian.Formulir_Review_proposal');

    }

    
    
    
    //Route Halaman Peneliti

    //Penelitian
    public function Penelitian_peneliti(){
        return view('Peneliti.Penelitian.Penelitian');
    }
    public function View_penelitian(){
        return view('Peneliti.Penelitian.Progres_penelitian   ');
    }
    public function CatatanKegiatan_penelitian(){
        return view('Peneliti.Penelitian.Catatan_Kegiatan');
    }
    public function LaporanKemajuan_penelitian(){
        return view('Peneliti.Penelitian.Laporan_Kemajuan');
    }
    public function LaporanAkhir_penelitian(){
        return view('Peneliti.Penelitian.Laporan_Akhir');
    }
    public function AnggaranBiaya_penelitian(){
        return view('Peneliti.Penelitian.Anggaran_Biaya');
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
