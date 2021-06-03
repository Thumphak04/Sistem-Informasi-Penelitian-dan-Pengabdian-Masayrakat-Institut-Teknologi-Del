@extends('Layout.peneliti')

@section('title'.'Penelitian')
@section('content')

@section('halaman1','/Penelitian_Peneliti')
@section('nama_halaman1','Penelitian Anda')
@section('halaman2','/Buat Penelitian Baru')
@section('nama_halaman2','Buat Penelitian Baru')
@section('halaman3','/Panduan Penelitian')
@section('nama_halaman3','Panduan Penelitian')
@section('nama_halaman','Penelitian')

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
                       
                        <a class="btn btn-info btn-sm" href="{{url('/View_Penelitian')}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Update Progres
                        </a><br>
                        <a class="btn btn-primary btn-sm " href="{{url('/Hasil Re-View_Penelitian')}}">
                            <i class="fas fa-folder">
                            </i>
                           Hasil  Re-View
                        </a><br>
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

</div>
@endsection