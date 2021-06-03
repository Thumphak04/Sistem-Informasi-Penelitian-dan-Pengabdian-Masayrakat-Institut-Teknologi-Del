@extends('Layout.lppm')

@section('title','Pengumuman')

@section('content')
@section('nama_halaman','Pengumuman')

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar Pengumuman</h3>
            
                <div class="card-tools" style="width:150px;">
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
              <div class="card-body table-responsive p-0" >
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Judul Pengumuman</th>
                      <th >Isi Pengumuman</th>
                      <th>Jenis Pengumuman</th>
                      <th>DateTime</th>
                      <th>Author</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Pengumuman Nama-Nama Proposal Pengabdian Yang di Setujui oleh kepala LPMM Isnstitut teknologi Del</td>
                      <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad ipsum, repellat dolorem nemo corporis similique
                       excepturi enim cupiditate eveniet nihil culpa autem pariatur impedit quidem molestias laudantium illo rerum at!</td>
                      <td>public</td>
                      <td>04/15/2021</td>
                      <td><span class="tag tag-success">@LPPM_Oriza</span></td>
                      <td>
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
                      </td>
                    </tr>
                    
                    
                  </tbody>
                </table>
           
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <button type="button" class="btn btn-md btn-primary" style="margin-left:500px;">Tambah Pengumuman Baru</button>
        </div>
        </div>
       

@endsection