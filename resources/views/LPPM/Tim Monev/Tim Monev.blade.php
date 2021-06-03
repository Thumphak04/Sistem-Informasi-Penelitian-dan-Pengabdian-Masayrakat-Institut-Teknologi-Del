@extends('Layout.lppm')
@section('title','Tim Monev')



@section('content')
@section('nama_halaman','Tim Monev')
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar-Daftar  Anggota Tim Monev</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Nama Lengkap</th>
                      <th>Jenis Kelamin</th>
                      <th>Email</th>
                      <th>Jurusan</th>
                      <th>Divisi</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Thumphak Adhitio Aritonang</td>
                      <td>Laki-Laki</td>
                      <td>thumpakar04@gmail.com</td>
                      <td>D IV Teknologi rekayasa perangkat Lunak </td>
                      <td><span class="tag tag-success">Pengawas</span></td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-xs" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-xs" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-xs" href="#">
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
          </div>
        </div>
        </div>
       


@endsection