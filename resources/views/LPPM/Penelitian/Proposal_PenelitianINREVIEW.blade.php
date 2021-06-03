@extends('Layout.lppm')
@section('title','Halaman Penelitian')


@section('nama_halaman1','NEW')  @section('halaman1','/Proposal Penelitian NEW')
@section('nama_halaman2','REVIEWING') @section('halaman2','/Proposal Penelitian In Review')
@section('nama_halaman3','REVISION') @section('halaman3','/Proposal Penelitian Revision')
@section('nama_halaman4','WAITING') @section('halaman4','/Proposal Penelitian Waiting')
@section('nama_halaman5','APPROVED') @section('halaman5','/Proposal Penelitian Approved')
@section('url3','/Dashboard') 
@section('content')

<div class="card">
@section('nama_halaman','Penelitian')
              <div class="card-header">
                <h3 class="card-title">Data Daftar Proposal  Penelitian Dengan Status "SEDANG DI REVIEW"</h3>
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
                      <a class="btn btn-primary btn-xs" href="{{url('/Formuir Review Proposal Penelitian')}}">
                        <i class="fas fa-eye-dropper"></i>
                          </i>
                          Review
                      </a>
                      <a class="btn btn-info btn-xs" href="#">
                        <i class="fas fa-arrow-circle-right">
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