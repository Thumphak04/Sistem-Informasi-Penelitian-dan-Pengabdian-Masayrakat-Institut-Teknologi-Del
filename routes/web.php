<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PenelitianController;
use App\Http\Controllers\PengabdianController;
use App\Http\Controllers\TimMonevController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProposalController;

/*
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('LPPM.Dashboard');
});
Route::get('/coba', function () {
    return view('Layout.lppm');
});
Route::get('log',[PenelitianController::class,'index']);
Route::get('/Dashboard',[PagesController::class,'Dashboard']);
Route::get('/Pengabdian',[PengabdianController::class,'index']);
Route::get('/Tim Monev',[TimMonevController::class,'index']);
Route::get('/Pengumuman',[PengumumanController::class,'index']);

//Route halaman Proposal Penelitian
Route::get('/Proposal Penelitian NEW',[PenelitianController::class,'index']);//route proposal_NEW
Route::get('/Proposal Penelitian In Review',[PenelitianController::class,'In_Review']);//route proposal_IN REVIEW
Route::get('/Proposal Penelitian Revision',[PenelitianController::class,'Revision']);//route proposal_REVISION
Route::get('/Proposal Penelitian Waiting',[PenelitianController::class,'Waiting']);//route proposal_Waiting
Route::get('/Proposal Penelitian Approved',[PenelitianController::class,'Approved']);//route proposal_Approved
Route::get('/Formuir Review Proposal Penelitian',[PenelitianController::class,'Review']);


//Halaman bagian laporan
Route::get('/Laporan ',[LaporanController::class,'index']);
Route::get('/LaporanPengabdian',[LaporanController::class,'pengabdian']);
Route::get('/Laporan Pengawasan Pengabdian',[PagesController::class,'Pengabdian_pengawasan']);
Route::get('/Laporan Kemajuan Pengabdian',[PagesController::class,'Pengabdian_kemajuan']);
Route::get('/Laporan Akhir Pengabdian',[PagesController::class,'Pengabdian_LaporanAkhir']);

Route::get('/Laporan Pengawasan Penelitian',[PagesController::class,'Penelitian_pengawasan']);
Route::get('/Laporan Kemajuan Penelitian',[PagesController::class,'Penelitian_kemajuan']);
Route::get('/Laporan Akhir Penelitian',[PagesController::class,'Penelitian_LaporanAkhir']);
//detail laporan
Route::get('/Detail Laporan Reviewe',[LaporanController::class,'Detail_Reviewe']);
Route::get('/Detail Laporan Pengawasan',[LaporanController::class,'Detail_pengawasan']);
Route::get('/Detail Laporan Kemajuan',[LaporanController::class,'Detail_kemajuan']);
Route::get('/Detail Laporan Akhir',[LaporanController::class,'Detail_laporanAkhir']);
Route::get('/Buat Keputusan Proposal Penelitian',[PagesController::class,'Buat_keputusanProposal_Penelitian']);
Route::get('/Buat KeputusanLaporan',[PagesController::class,'BuatKeputusan_Laporan']);


//Route Halaman Peneliti
//Route halaman registrasi dan login
Route::get('/Registrasi Peneliti',[PagesController::class,'Registrasi']);
Route::get('/Login peneliti',[PagesController::class,'login']);

Route::get('/Dashboard_Peneliti',[PagesController::class,'Dashboard_Peneliti']);
Route::get('Penelitian_Peneliti',[PenelitianController::class,'Penelitian_peneliti']);
Route::get('Pengabdian_Peneliti',[PengabdianController::class,'Pengabdian_peneliti']);
Route::get('/Team_Peneliti',[PagesController::class,'Team_peneliti']);
Route::get('/Pengumuman_Peneliti',[PagesController::class,'Pengumuman_peneliti']);
Route::get('/View_Penelitian',[PenelitianController::class,'View_penelitian']);

Route::get('/Proposal Penelitian',[ProposalController::class,'Proposal_penelitian']);
    route::get('/Lampiran Proposal  Penelitian',[ProposalController::class,'Lampiran_penelitian']);
    route::get('/Panduan Penulisan Proposal Penelitian',[ProposalController::class,'PanduanPenulisanProposal_penelitian']);


Route::get('/Catatan Kegiatan Penelitian',[PenelitianController::class,'CatatanKegiatan_penelitian']);
Route::get('/Laporan Kemajuan Penelitian',[PenelitianController::class,'LaporanKemajuan_penelitian']);
Route::get('/Laporan Akhir Penelitian',[PenelitianController::class,'LaporanAkhir_penelitian']);
Route::get('/Anggaran Biaya Penelitian',[PenelitianController::class,'AnggaranBiaya_penelitian']);
