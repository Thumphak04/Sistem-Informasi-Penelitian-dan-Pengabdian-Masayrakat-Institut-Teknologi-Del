@extends('Layout.lppm')
@section('title','Detail Laporan kemajuan')
@section('nama_halaman1','Laporan Penelitian') @section('halaman1','/Laporan')
@section('nama_halaman2','Laporan Pengabdian') @section('halaman2','/LaporanPengabdian')
@section('content')
@section('nama_halaman','Detail Laporan Kemajuan')
<style type="text/css">
.label{
    font-weight:bolder;

}
#t-1{
position:absolute;
margin-left:230px;
margin-top:-418px;
}
#t-2{
position:absolute;
margin-left:230px;
margin-top:-377px;
}
#t-3{
position:absolute;
margin-left:230px;
margin-top:-339px;
}
#t-4{
position:absolute;
margin-left:230px;
margin-top:-156px;
}
#t-5{
position:absolute;
margin-left:230px;
margin-top:-41px;
}
.data_diri{
position:absolute;
margin-left:190px;
margin-top:220px;
}
.anggota{
position:absolute;
margin-left:190px;
margin-top:404px;
}
</style>
<div class="card">
              <div class="card-header">
                <h1 class="card-title"><b>Laporan  Kemajuan</b></h1><br><br>
                <h4 class="card-title"><b>Judul Penelitian:</b>Penggunaan Teknologi berbasis Ai untuk meningkatkan Hasil Panen</h4><br>
                <h4 class="card-title"><b>Ketua Pelaksana:</b>Thumphak Adhitio Aritonang<br></h4>
              </div>
              <div class="label">
              <ul><li style="list-style:none;">1.Judul Penelitian</li>
              </ul>
              <ul><li style="list-style:none;">2.Jenis Luaran Penelitian</li>
              </ul>
              <ul><li style="list-style:none;">3.Ketua Peneliti</li>
              <ol>a.Nama Lengkap</ol>
              <ol>b.Jenis Kelamin</ol>
              <ol>c.NIDN</ol>
              <ol>d.Program Studi</ol>
              <ol>e.jabaran Fungsional</ol>
              <ol>f.HP/WA/Email</ol>
              </ul>
              
              <ul><li style="list-style:none;">4.Jumlah Anggota</li>
              <ol>a.Dosen</ol>
              <ol>b.TA/Staff</ol>
              <ol>c.Mahasiswa</ol>
              </ul>
              <ul><li style="list-style:none;">5.Jumlah Biaya yang Disetujui</li></ul>
              </div>
              <div class="titik">
            <ul id="t-1"><li style="list-style:none;">:Thumphak Adhitio Aritonang</li></ul>
            <ul id="t-2"><li style="list-style:none;">:Thumphak Adhitio Aritonang</li></ul>
            <ul id="t-3"><li style="list-style:none;">:Thumphak Adhitio Aritonang</li></ul>
            <ul id="t-4"><li style="list-style:none;">:Thumphak Adhitio Aritonang</li></ul>
            <ul id="t-5"><li style="list-style:none;">:Thumphak Adhitio Aritonang</li></ul>
            </div>
            
            <div class="data_diri">
            <ul>
            <ol>:</ol>
            <ol>:</ol>
            <ol>:</ol>
            <ol>:</ol>
            <ol>:</ol>
            <ol>:</ol>
            </ul>
            </div>
            <div class="anggota">
            <ul>
            <ol>:</ol>
            <ol>:</ol>
            <ol>:</ol>
            </ul>
            </div>
            </div>

            <!-- /.card -->
<h5 class="mt-5 text-muted">Project files</h5>
              <ul class="list-unstyled">
                <li>
                File Proposal:  <a href="" class="btn-link text-primarry"><i class="far fa-fw fa-file-pdf"></i>Proposal Penelitian_Thumphak Adhitio Aritonanag  D IV Teknologi rekayasa Perangkat Lunak</a>
                </li>
                <li>
                 Laporan reviewe: <a href="" class="btn-link text-primarry"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                </li>
                <li>
                 Laporan Pengawasan: <a href="" class="btn-link text-primarry"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                </li>
                <li>
                 Laporan Kemajuan: <a href="" class="btn-link text-primarry"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                </li>
                <li>
                 Laporan Akhir: <a href="" class="btn-link text-primarry"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                </li>
               
                <li>
                 Surat Kontrak: <a href="" class="btn-link text-primarry"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                </li>
               
              </ul>
       
           
              <div class="form-group">
            </div>
            </div>
            <p style="font-style:italic" ><b>Reviewer:</b>Thumphak Adhitio Aritoang</p>
              
              <div class="text-center mt-2 ">
                <a href="{{url('/Buat KeputusanLaporan')}}" class="btn btn-md btn-primary">Buat Keputusan</a>
              </div>
            </div>
</div>
@endsection