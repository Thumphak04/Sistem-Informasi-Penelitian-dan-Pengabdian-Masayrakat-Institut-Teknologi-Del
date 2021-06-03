@extends('Layout.lppm')
@section('title','Halaman Buat Keputusan')

@section('content')
@section('nama_halaman','Buat Keputusan Laporan')
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Buat Keputusan Penelitian</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="judul_penelitian" class="col-sm-2 col-form-label">Judul Penelitian</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="judul_penelitian" name="judul_penelitian" placeholder="Judul Penelitian">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis_luaran" class="col-sm-2 col-form-label">Jenis Luaran</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="jenis_luaran" name="jenis_luaran" placeholder="Judul Penelitian">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="#" class="col-sm-2 col-form-label">Ketua Penliti</label>
                    <div class="col-sm-10">  
                    </div>
                  </div>

                  <div class="form-group row" style="margin-left:5px;">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama  lengkap</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Nama Lengkap">
                    </div>
                  </div>
                  <div class="form-group row" style="margin-left:5px;">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis-kelamin</label>
                    <div class="col-sm-10">
                    <select class="custom-select rounded-0" name="jenis_kelamin" id="program_studi">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                    </select>
                    </div>
                  </div>
                  <div class="form-group row" style="margin-left:5px;">
                    <label for="NIDN" name="NIDN" class="col-sm-2 col-form-label">NIDN</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="NIDN" id="NIDN" placeholder="NIDN">
                    </div>
                  </div>
                  <div class="form-group row" style="margin-left:5px;">
                    <label for="program_studi" class="col-sm-2 col-form-label">Program Studi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="program_studi" name="program_studi" placeholder="Program Studi">
                    </div>
                  </div>
                  <div class="form-group row" style="margin-left:5px;">
                    <label for="jabaran_fungsional" class="col-sm-2 col-form-label">Jabaran Fungsional</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="jabaran_fungsional" name="jabaran_fungsional  " placeholder="Jabaran Fungsional">
                    </div>
                  </div>
                  <div class="form-group row" style="margin-left:5px;">
                    <label for="kontak" class="col-sm-2 col-form-label">HP/WA/Email</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="kontak" placeholder="Hp/WA/Email">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="#" class="col-sm-2 col-form-label">Jumlah Anggota:</label>
                    <div class="col-sm-10">  
                    </div>
                  </div>
                  
                  <div class="form-group row" style="margin-left:5px;">
                    <label for="dosen" class="col-sm-2 col-form-label">Dosen</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="dosen" placeholder="jumlah" style="max-width:200px;">
                    </div>
                    </div>

                  <div class="form-group row" style="margin-left:5px;">
                    <label for="Ta_staff" class="col-sm-2 col-form-label">TA/Staf</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="Ta_staff" name="Ta_staff" placeholder="jumlah" style="max-width:200px;">
                    </div>
                    </div>

                  <div class="form-group row" style="margin-left:5px;">
                    <label for="kontak" class="col-sm-2 col-form-label">Mahasiswa</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="kontak" name="mahsiswa" placeholder="jumlah" style="max-width:200px;">
                    </div>
                    </div>  
        
                    <div class="form-group row" style="margin-left:5px;">
                    <label for="jlh_biaya" class="col-sm-2 col-form-label">Jumlah Biaya Yang Disetujui</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="jlh_biaya" name="jabaran_fungsional  "  Value="Rp.">
                    </div>
                  </div>
</div>
                    <div class="form-group row" style="margin-left:5px;">
                    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                    <div class="col-sm-10">
                      <textarea name="keterangan" id="keterangan" cols="100" rows="10">Enter</textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="lampiran">File Lampiran</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="lampiran" style="-maxwidth:50px;">
                        <label class="custom-file-label" for="lampiran">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                    <div class="card-footer">
               <center>   <button type="submit" name="submit"class="btn btn-primary">Submit</button></center>
                </div>
              </form>
</div>
</div>
@endsection