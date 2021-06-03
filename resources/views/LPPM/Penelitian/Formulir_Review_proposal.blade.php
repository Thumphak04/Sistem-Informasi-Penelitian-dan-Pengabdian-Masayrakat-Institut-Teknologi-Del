@extends('layout.lppm')
@section('title','Formulir Review Proposal Penelitian')


@section('content')
@section('nama_halaman','Formulir review Proposal Penelitian')
<div class="card">
<div class="card-header">

    <h3 class="card-title">
      Sebelum Anda me review Proposal in pastikan Anda Sudah membaca 
      File Proposal Dari Penelitian yang hendak anda Review 
    </h3>

  </div>
<!--form-->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Silahkan Mengisi Form Berikut</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" action="" method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label for="ketua_peneliti">Ketua Penelit</label>
                  <input type="text" name="ketua_peneliti" class="form-control" id="ketua_peeliti" placeholder="Ketua Peneliti">
                </div>
                <div class="form-group">
                  <label for="prodi">Program Studi</label>
                  <select class="custom-select form-control-border" id="prodi">
                    <option value="S-1(Sarjana) Teknik Informatika(FITE) ">S-1(Sarjana) Teknik Informatika(FITE) </option>
                    <option value="S-1(Sarjana) Sistem Informasi(FITE)">S-1(Sarjana) Sistem Informasi(FITE)</option>
                    <option value="S-1(Sarjana) Teknik Elektro(FITE)">S-1(Sarjana) Teknik Elektro(FITE)</option>
                    <option value="S-1 (sarjana)manajemen Rekaysa(FTI)">S-1 (sarjana)manajemen Rekaysa(FTI)</option>
                    <option value="S-1(Sarjana)Tenkik BioProses(FB)">S-1(Sarjana)Tenkik BioProses(FB)</option>
                    <option value="D-IV(Diploma) Teknologi Rekayasa Perangkat Lunak(FITE)">D-IV(Diploma) Teknologi Rekayasa Perangkat Lunak(FITE)</option>
                    <option value="D-III(Diploma) Teknologi Infromasi(FITE)">D-III(Diploma) Teknologi Infromasi(FITE)</option>
                    <option value="D-III(Diploma) Teknik Komputer(FITE)">D-III(Diploma) Teknik Komputer(FITE)</option>  
                  </select>
                </div>
                    <div class="form-group">
                      <label for="judul_penelitian">Judul Penelitian</label>
                      <input type="text" name="judul_penelitian" class="form-control" id="judul_penelitian" placeholder="Judul Penelitian">
                    </div>

                    <div class="form-group">
                      <label for="jenis_luaran">Jenis Luaran</label>
                      <input type="text" name="jenis_luaran" class="form-control" id="jenis_luaran" placeholder="Jenis Luaran">
                    </div>
    
                    <div class="form-group">
                      <label for="anggota_tim_peneliti">Anggota Tim Peneliti</label>
                      <input type="text" name="anggota_tim_peneliti" class="form-control" id="anggota_tim_peneliti" placeholder="Jumlah" style="width:90px;">
                      <span style="position: absolute;margin-top:-30px;margin-left:100px;">Orang</span>
                    </div>
                    <div class="form-group">
                      <label for="waktu_penelitian">Waktu Penelitian</label>
                      <input type="text" name="waktu_penelitian" class="form-control" id="waktu Penelitian" placeholder="Jumlah" style="width:90px;">
                      <span style="position: absolute;margin-top:-30px;margin-left:100px;">Orang</span>
                    </div>
                    <div class="form-group">
                    <label class="bg-info">Berikan Feed-Back/Masukan</label>
                    <textarea class="form-control" rows="4" placeholder="Enter ..."></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>

                    <div class="form-group">
                        <label for="status_proposal">Status Proposal</label>
                        <select class="custom-select form-control-border" id="status proposal" name="status_proposal">
                          <option value="NEW ">NEW</option>
                          <option value="REVIEWING">REVIEWING</option>
                          <option value="REVISION">REVISION</option>
                          <option value="WAITING">WAITING</option>
                          <option value="APPROVED">APPROVED</option>
 
                        </select>
                      </div>
                  </div>
                <div class="form-group mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="terms" class="custom-control-input" id="chekc-1" required>
                    <label class="custom-control-label" for="check-1">Pastikan Semua Data Yang Anda Masukkan Sudah Benar</label>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="margin-left:500px;">Review</button>
              </div>
            </form>
          </div>
        </section>
</div>
</div>
@endsection
