@extends('Layout.lppm')
@section('title','Laporan Penelitian')
@section('nama_halaman1','Laporan Penelitian') @section('halaman1','/Laporan')
@section('nama_halaman2','Laporan Pengabdian') @section('halaman2','/LaporanPengabdian')


@section('content')
<div class="card">
@section('nama_halaman','Laporan Akhir Penelitian')
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="margin-left:-40; px">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/Laporan')}}" class="nav-link">Laporan Reviewe</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/Laporan Pengawasan Penelitian')}}" class="nav-link">Laporan Pengawasan</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/Laporan Kemajuan Penelitian')}}" class="nav-link">Laporan Kemajuan</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/Laporan Akhir Penelitian')}}" class="nav-link">Laporan Akhir</a>
      </li>
      </ul>
      </nav>
              <div class="card-header">
                <h3 class="card-title">Data Daftar Laporan  Akhir Penelitian</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" >
                  <thead>
                  <tr>
                  <th>NO</th>
                    <th>Ketua</th>
                    <th>Program Studi</th>
                    <th>Judul</th>
                    <th>Proposal Penelitian</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <td>1</td>
                    <td>Thumphak Adhitio Aritonanf=g</td>
                    
                    <td>S-1  Teknnik Bioproses</td>
                    <td>Studi komparatif Aktivitas SenyawaAntibakteri Dan Antioksidan Daun Kemenyan Tanpa Fermentasi dan Dari
                      Hasil Permentasi oleh Aspergillus Niger</td>
                    <td><a href="" >Proposal_Penelitian_S-1 Teknik bioproses-Thumphak Aritonang.pdf</a></td>
                    <td class="project-actions text-right">
                          <a class="btn btn-primary btn-xs" href="{{url('/Detail Laporan Akhir')}}">
                              <i class="fas fa-folder">
                              </i>
                             Detail
                          </a>
                          <a class="btn btn-danger btn-xs" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

