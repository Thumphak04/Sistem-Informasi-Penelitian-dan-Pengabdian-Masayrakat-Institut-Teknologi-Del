<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Dashboard(){
        return view('LPPM.Dashboard');
    }

    public function Penelitian_pengawasan(){
        return view('LPPM.Penelitian_pengawasan');
    }
    public function Penelitian_kemajuan(){
        return view('LPPM.Penelitian_kemajuan');
    }
    public function Penelitian_LaporanAkhir(){
        return view('LPPM.Penelitian_LaporanAkhir');
    }


    //Pengabdian
    public function Pengabdian_pengawasan(){
        return view('LPPM.Pengabdian_pengawasan');
    }
    public function Pengabdian_kemajuan(){
        return view('LPPM.Pengabdian_kemajuan');
    }
    public function Pengabdian_LaporanAkhir(){
        return view('LPPM.Pengabdian_LaporanAkhir');
    }
     public function BuatKeputusan_Laporan(){
        return view('LPPM.BuatKeputusan_Laporan');

     }
    
     public function Buat_keputusanProposal_Penelitian(){
        return view('LPPM.Buat_KeputusanProposalPenelitian');
     }


    //Route halaman registrasi dan login peneliti
    public function Registrasi(){
        return view('Peneliti.Registrasi');
    }
    public function login(){
        return view ('Peneliti.login');
    }


     //Pages Halaman Peneliti
     public function Dashboard_peneliti()
     {
         return view('Peneliti.Dashboard');
     }
     public function Team_peneliti(){
        return view('Peneliti.Team.Team');
    }
    public function Artikel_peneliti(){
        return view('Peneliti.Artikel');
    }       

}
