@extends('Layout.lppm')
@section('title','Detail Laporan Pengawasan')
@section('nama_halaman1','Laporan Penelitian') @section('halaman1','/Laporan')
@section('nama_halaman2','Laporan Pengabdian') @section('halaman2','/LaporanPengabdian')
@section('content')
@section('nama_halaman','Detail Laporan Kemajuan')
<div class="card">
              <div class="card-header">
                <h1 class="card-title"><b>Laporan  Reviewe</b></h1><br>
                <h4 class="card-title"><b>Judul Penelitian:</b>Penggunaan Teknologi berbasis Ai untuk meningkatkan Hasil Panen</h4><br>
                <h4 class="card-title"><b>Ketua Pelaksana:</b>Thumphak Adhitio Aritonang<br></h4>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th >Komponen Penilaian</th>
                      <th colspan='4'>Keterangan</th>
                      <th >Bobot<br>
                      %
                      </th>
                      <th>Skor</th>
                      <th>Nilai</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Capaian Kegiatan</td>
                      <td> <25% </td>
                      <td>25-50%</td>
                      <td>51-75%</td>
                      <td>>75%</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Publikasi Ilmiah</td>
                      <td>Draft</td>
                      <td>submitted</td>
                      <td>Accepted</td>
                      <td>Published</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Produk/Mode/Protoype/Desain/karya Seni/rekayasa Sosial</td>
                      <td>Draft  </td>
                      <td>Produk</td>
                      <td>Penerapan</td>
                      <td>Published</td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Permasalahan dan Pemecahan</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>5.</td>
                      <td>Keterlibatan Mahasiswa</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>6.</td>
                      <td>Keberhasilan Kegiatan Jika Dilanjutkan</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <td></td>
                    <td></td>
                    <td>Jumlah</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td >100</td>
                    <td></td>
                    <td></td>
                  </tbody>
                </table>
              </div>

              <!-- /.card-body -->
            </div>

            <!-- /.card -->
<h5 class="mt-5 text-muted">Project files</h5>
              <ul class="list-unstyled">
                <li>
                File Proposal:  <a href="" class="btn-link text-primarry"><i class="far fa-fw fa-file-pdf"></i>Proposal Penelitian_Thumphak Adhitio Aritonanag  D IV Teknologi rekayasa Perangkat Lunak</a>
                </li>
                <li>
                 Laporan reviewe: <a href="" class="btn-link text-primarry"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                </li>
                <li>
                 Laporan Pengawasan: <a href="" class="btn-link text-primarry"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                </li>
                <li>
                 Laporan Kemajuan: <a href="" class="btn-link text-primarry"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                </li>
                <li>
                 Laporan Akhir: <a href="" class="btn-link text-primarry"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                </li>
               
                <li>
                 Surat Kontrak: <a href="" class="btn-link text-primarry"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                </li>
               
              </ul>
       
            <div class="callout callout-info">
            <label for="inputDescription">Rekomendasi Keputusan:</label>
            <input type="text" disabled placeholder="Diterima" style="height:40px;">
              <div class="form-group">
                <label for="inputDescription">Saran/Alasan:</label>
                <textarea id="inputDescription" class="form-control" rows="4" disabled >Raw denim you probably haven't heard of them jean 
                shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi,
                 qui irure terr. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur porro quod odio labore expedita non rem! Rem dignissimos, 
                 voluptatem quasi repellendus facilis voluptates. Similique reiciendis nemo cum id voluptatem explicabo? Lorem ipsum, dolor
                  sit amet consectetur adipisicing elit. Nulla maiores delectus quibusdam distinctio laboriosam rerum iste,
                  error saepe molestiae odit reiciendis, ullam blanditiis totam inventore sint dolorum. Nisi, nemo libero! </textarea>
              </div>
              <div class="form-group">
            </div>
            </div>
            <p style="font-style:italic" ><b>Reviewer:</b>Thumphak Adhitio Aritoang</p>
              
              <div class="text-center mt-2 ">
                <a href="{{url('/Buat KeputusanPenelitian')}}" class="btn btn-md btn-primary">Buat Keputusan</a>
              </div>
            </div>
@endsection