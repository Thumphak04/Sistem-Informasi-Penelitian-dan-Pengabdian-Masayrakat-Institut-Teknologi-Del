@extends('Layout.lppm')

@section('title','Buat keputusan Proposal Penelitian')
@section('content')
@section('nama_halaman','Buat Keputusan Proposal Penelitian')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Identitas Penelitian</h3>
                
              </div>
              <p>Silahkan Isi Form dibawah ini sesuai Dengan Identitas Laporan Yang Hendak Anda Putuskan *</p>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="ketua_pelaksana">Ketua Pelaksana</label>
                    <input type="text" class="form-control" id="ketua_pelaksana"  name="ketua_pelaksana" placeholder="Ketua pelaksana">
                  </div>
                  <div class="form-group">
                  <label for="program_studi">Program Studi</label>
                  <select class="custom-select rounded-0" name="program_studi" id="program_studi">
                    <option value="S-1 Teknik Informatika">S-1 Teknik Informatika</option>
                    <option value="S-1 Sistem Informasi">S-1 Sistem Informasi</option>
                    <option value="S-1 Teknik Elektro">S-1 Teknik Elektro</option>
                    <option value="">S-1 Manajemen Rekayasa</option>
                    <option value="">S-1 Teknik Bioproses</option>
                    <option value="">D-IV teknologi Rekayasa Perangkat Lunak </option>
                    <option value="Diploma III Teknologi Informasi">Diploma III Teknologi Informasi</option>
                    <option value="Diploma III Teknologi Komputer">Diploma III Teknologi Komputer</option>
                  </select>
                  <div class="form-group">
                    <label for="judul_proposal">Judul Proposal</label>
                    <input type="text" class="form-control" id="judul proposal" name="judul_proposal" placeholder="Judul Proposal">
                  </div>
                  <div class="form-group">
                    <label for="jenis_luaran">Jenis Luaran</label>
                    <input type="text" class="form-control" id="jenis_luaran" name="jenis_luaran" placeholder="Jenis Luaran">
                  </div>
                  <div class="form-group" >
                    <label for="anggota_tim">Anggota Tim</label>
                    <input type="text" class="form-control" id="anggota_tim" name="anggota_tim" placeholder="Jumlah" style="max-width:100px;" >
                    <div class="input-group-append">
                    <span class="input-group-text">Orang</span>
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="waktu_penelitian">Waktu Penelitian</label>
                    <input type="text" class="form-control" name="waktu_penelitian" id="waktu_penelitian" placeholder="Durasi(bulan)" style="max-width:200px;">
                    <div class="input-group-append">
                    <span class="input-group-text">bulan</span>
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="masukan">Saran(Jika Diterima)/Alasan(Jika Ditolak)</label>
                    <textarea class="form-control" rows="3" name="masukan"placeholder="Enter ..."></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File Lampiran</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                      </div>

                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="check">
                    <label class="form-check-label" for="check" required>Pastikan Data yang Anda Masukkan Sudah Valid</label>
                  </div>
                </div>
                <div class="card-footer">
               <center>   <button type="submit" name="submit"class="btn btn-primary">Submit</button></center>
                </div>
              </form>
</div>
</div>
</div>
</div>
@endsection
