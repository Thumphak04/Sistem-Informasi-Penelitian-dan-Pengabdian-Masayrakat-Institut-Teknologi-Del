@extends('Layout.lppm')
@section('title','Dashboard')

@section('content')

@section('nama_halaman','Dashboard')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid responsive">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
             
                <h3>Penelitian</h3>
                <p>Daftar Penelitian</p>
              </div>
              <div class="icon">
              <i class="nav-icon fas fa-th"></i>
              </div>
              <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Pengabdian</h3>

                <p>Daftar Pengabdian</p>
              </div>
              <div class="icon">
              <i class="nav-icon fas fa-copy"></i>
              </div>
              <a href="#" class="small-box-footer">Selengkapnya<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Laporan</h3>

                <p> Daftar Laporan</p>
              </div>
              <div class="icon">
              <i class="fas fa-file"></i>
              </div>
              <a href="#" class="small-box-footer">Selengkapnya<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>Tim Monev</h3>

                <p>Kelola Tim Monev</p>
              </div>
              <div class="icon">
              <i class="fas fa-user-shield"></i>
              </div>
              <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>




          <div class="row"  >
                <div class="col-12 " >
                  <h2  class="callout callout-info"><b><u>Pengumuman Terkini</u></b></h2>
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
                        
                 
               







   

   
          <!--   daftar penelitian-->
          <div class="row"style=">
          <div class="col-9">
            <div class="card">
              <div class="card-header bg-primary" >
                <h3 class="card-title">Daftar Penelitian</h3>

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
              <div class="card-body table-responsive p-0" style="height: 300px;width:900px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Ketua</th>
                      <th>Program Studi</th>
                      <th>Status</th>
                      <th>Judul</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody style="width:900px;">
                    <tr>
                      <td>1</td>
                      <td>John Doe</td>
                      <td>D4-Teknologi Rekayasa Perangkat Lunak</td>
                      <td><span class="tag tag-success">New</span></td>
                      <td>Pemanfaatan Teknologi berbasisi web untuk meningkatkan proses pembelajaran secara online di Kab.Toba</td>
                      <td>
                      <button type="button" class="btn btn-block btn-success">Detail</button>
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
        <!--end Daftar Penelitian -->



                  <!--   daftar Pengabdian-->
    <div class="row" style="margin-left:-14px;>
          <div class="col-9">
            <div class="card">
              <div class="card-header bg-success" >
                <h3 class="card-title">Daftar Pengabdian</h3>

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
              <div class="card-body table-responsive p-0" style="height: 300px;width:900px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Ketua</th>
                      <th>Program Studi</th>
                      <th>Status</th>
                      <th>Judul</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody style="width:900px;">
                    <tr>
                      <td>1</td>
                      <td>John Doe</td>
                      <td>D4-Teknologi Rekayasa Perangkat Lunak</td>
                      <td><span class="tag tag-success">New</span></td>
                      <td>Pemanfaatan Teknologi berbasisi web untuk meningkatkan proses pembelajaran secara online di Kab.Toba</td>
                      <td>
                      <button type="button" class="btn btn-block btn-success">Detail</button>
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
        <!--end Daftar Penelitian -->
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header bg-secondary">
                <h3 class="card-title">Tim Monev</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">NO</th>
                      <th>Nama Lengkap</th>
                      <th>Divisi</th>
                      <th style="width: 40px">Detail</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Thumphak Adhitio Aritonang</td>
                      <td> Reviwer</td>
                      <td "><button type="button" class="btn btn-block btn-success" >Detail</button></td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->



            

            




            <!-- TO DO List -->
            <div class="card"
            style="margin-left:920px;width:330px;margin-top:-630px">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                 Catatan Pengingat
                </h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                  <li>
                    <!-- drag handle -->
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <!-- checkbox -->
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo1" id="todoCheck1">
                      <label for="todoCheck1"></label>
                    </div>
                    <!-- todo text -->
                    <span class="text">Design a nice theme</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                      <label for="todoCheck2"></label>
                    </div>
                    <span class="text">Make the theme responsive</span>
                    <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo3" id="todoCheck3">
                      <label for="todoCheck3"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo4" id="todoCheck4">
                      <label for="todoCheck4"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo5" id="todoCheck5">
                      <label for="todoCheck5"></label>
                    </div>
                    <span class="text">Check your messages and notifications</span>
                    <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo6" id="todoCheck6">
                      <label for="todoCheck6"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>
              </div>
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

          
            
            
             <!--  Menu Bagian Kanan-->
               <!--  Data Callender  di Hidden-->
            <div class="card bg-gradient-primary" hidden>
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
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Visitors</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
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
            <div class="card bg-gradient-navy" 
                style="position:absolute;
                margin-left:920px;
                width:330px;
                margin-top:-990px;">
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
    <!-- /.content -->
  </div>
@endsection



