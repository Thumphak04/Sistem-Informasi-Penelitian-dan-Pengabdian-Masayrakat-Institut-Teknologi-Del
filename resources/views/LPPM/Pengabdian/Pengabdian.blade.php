@extends('Layout.lppm')
@section('title','Halaman Pengabdian')
@section('nama_halaman',' Pengabdian')

@section('nama_halaman1','NEW')  @section('halaman1','/')
@section('nama_halaman2','PROCED')
@section('nama_halaman3','SELESAI')
@section('url3','/Dashboard')
@section('content')

<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Daftar Proposal  Pengabdian Dengan Status "NEW"</h3>
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
                    <th>Proposal Pengabdian</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <td>1</td>
                    <td>Thumphak Adhitio Aritonang</td>
                    
                    <td>S-1  Teknnik Bioproses</td>
                    <td>Studi komparatif Aktivitas SenyawaAntibakteri Dan Antioksidan Daun Kemenyan Tanpa Fermentasi dan Dari
                      Hasil Permentasi oleh Aspergillus Niger</td>
                    <td><a href="" >Proposal_Pengabdian_S-1 Teknik bioproses-Thumphak Aritonang.pdf</a></td>
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
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  

@endsection