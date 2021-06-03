@extends('Layout.peneliti')

@section('title','Dashboard')

@section('content')
@section('nama_halaman1','About')
@section('halaman1','/About')
@section('nama_halaman2','Kontak Kami')
@section('halaman2','/Kontak Kami')
    
@section('nama_halaman','Dashboard')

    

<div class="row"  >
                <div class="col-12 " >
                  <h2  class="callout callout-info"><b>Pengumuman Terkini</b></h2>
                    <div class="post ">
                      <div class="user-block">
                          <a href="#">Judul Pengumuman</a>
                          <span class="description"><small>Waktu:- 7:45 PM today</small></span>
                      </div>
                      <!-- /.user-block -->
                        <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Selengkapnya</a>
                     <!satu-->
                    </div>
                    <div class="post">
                      <div class="user-block">
                          <a href="#">Judul Pengumuman</a>
                          <span class="description"><small>Waktu:- 7:45 PM today</small></span>
                      </div>
                      <!-- /.user-block -->
                        <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Selengkapnya</a>
                        </div>
            <!-- Jadwal kegiatan -->
        <div class="row">
          <section class="content">
    <div class="container-fluid">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-secondary">
              <h3 class="card-title">Jadwal Kegiatan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">NO</th>
                    <th>Kegiatan</th>
                    <th>Jadwal</th>
                  </tr>
                </thead>
                <tbody>
                    
                </tbody>
                <tr>
                  <td>1.</td>
                  <td>Pengumuman Program Hibah Penelitian</td>
                  <td>18 Februari 2021 </td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Pengumuman Program Hibah Penelitian</td>
                    <td>18 Februari 2021 </td>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>Pengumuman Program Hibah Penelitian</td>
                    <td>18 Februari 2021 </td>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>Pengumuman Program Hibah Penelitian</td>
                    <td>18 Februari 2021 </td>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>Pengumuman Program Hibah Penelitian</td>
                    <td>18 Februari 2021 </td>
                  </tr>
                 
            
              </table>
            </div>
       
        </section>
            <!--  Menu Bagian Kanan-->
               <!--  Data Callender  di Hidden-->
              
        <div class="col-md-1" hidden>
            <div class="card-header border-0">
              <h3 class="card-title">
                <i class="fas fa-map-marker-alt mr-1"></i>
                Visitors
              </h3>
              <!-- card tools -->
              <div class="card-tools">
                <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                  <i class="far fa-calendar-alt"></i>
                </button>
                <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <div class="card-body">
              <div id="world-map" style="height: 250px; width: 100%;"></div>
            </div>
            <!-- /.card-body-->
            <div class="card-footer bg-transparent">
              <div class="row">
                <div class=" text-center">
                  <div id="sparkline-1"></div>
                  <div class="text-white">Visitors</div>
                </div>
                <!-- ./col -->
                <div class=" text-center">
                  <div id="sparkline-2"></div>
                  <div class="text-white">Online</div>
                </div>
                <!-- ./col -->
                <div class= text-center">
                  <div id="sparkline-3"></div>
                  <div class="text-white">Sales</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.card -->

          <!-- Calendar -->
          <div class="col-md-4">
          <div class="card bg-gradient-navy ">
             
            <div class="card-header border-0">

              <h3 class="card-title">
                <i class="far fa-calendar-alt"></i>
                Kalender
              </h3>
              <!-- tools card -->
              <div class="card-tools">
                <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pt-0">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
</div>
        


<!--Daftar Penelitian -->
<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Daftar Project Penelitian Anda</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">
                        NO
                    </th>
                    <th style="width: 20%">
                        Nama Project
                    </th>
                    <th style="width: 30%">
                        Team Members
                    </th>
                    <th>
                        Project Progress
                    </th>
                    <th style="width: 8%" class="text-center">
                        Status
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        <a>
                             Sistem Informasi Penelitian Dan Pengabdian Masyarakat Institut Teknologi Del. 
                        <br/>
                        <small>
                            Created: 01.01.2019
                        </small>
                    </td>
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{asset('../main/dist/img/avatar.png')}}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{asset('../main/dist/img/avatar2.png')}}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{asset('../main/dist/img/avatar3.png')}}">
                            </li>
                            <li class="list-inline-item">
                                <img alt="Avatar" class="table-avatar" src="{{asset('../main/dist/img/avatar4.png')}}">
                            </li>
                        </ul>
                    </td>
                    <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"  style="width:100%">
                            </div>
                        </div>
                        <small>
                            100% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Selesai</span>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
               
                </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
  
      </section>


      <!-- Daftar Pengabdian-->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Daftar Project Pengabdian  Anda</h3>
    
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            NO
                        </th>
                        <th style="width: 20%">
                            Nama Project
                        </th>
                        <th style="width: 30%">
                            Team Members
                        </th>
                        <th>
                            Project Progress
                        </th>
                        <th style="width: 8%" class="text-center">
                            Status
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            <a>
                                 Sistem Informasi Penelitian Dan Pengabdian Masyarakat Institut Teknologi Del. 
                            <br/>
                            <small>
                                Created: 01.01.2019
                            </small>
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="{{asset('../main/dist/img/avatar.png')}}">
                                </li>
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="{{asset('../main/dist/img/avatar2.png')}}">
                                </li>
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="{{asset('../main/dist/img/avatar3.png')}}">
                                </li>
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" src="{{asset('../main/dist/img/avatar4.png')}}">
                                </li>
                            </ul>
                        </td>
                        <td class="project_progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"  style="width:100%">
                                </div>
                            </div>
                            <small>
                                100% Complete
                            </small>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Selesai</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                   
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
      
          </section>

      <!-- /.content -->
    </div>
  </div>
@endsection