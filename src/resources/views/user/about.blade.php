@extends('user.master')
@section('title', "About")
@section('side_bar')
<<<<<<< HEAD
<div class="user-panel">
  <div class="pull-left image">
    <img src="img/avatar5.png" class="img-circle" alt="User Image">
  </div>
  <div class="pull-left info">
    <p>AGUS SETYAWAN</p>
    <!-- Status -->
    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
  </div>
</div>

<!-- Sidebar Menu -->
<ul class="sidebar-menu">
  <li class="active"><a href="{{url('/beranda_lelang')}}"><img src="img/auction.svg" width="20px" height="20px"> <span>Beranda Lelang</span></a></li>
  <li class="treeview">
    <a href="{{url('/profil_user')}}"><img src="img/profil.svg" width="20px" height="20px"> <span>Profil Perusahaan</span>
      <!-- <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span> -->
    </a>
   
   <!--  <ul class="treeview-menu">
      <li><a href="{{url('/change_protected')}}"><img src="img/key.svg" width="20px" height="20px"> <span>Ganti Password dan E-mail</span></a></li>
    </ul> -->
  </li>
  {{-- <li class="treeview">
  <a href="{{url('/syarat')}}"><img src="img/deal.svg" width="20px" height="20px"> <span>Syarat Lelang</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="#"><img src="img/add-user-symbol-of-interface.svg" width="20px" height="20px"> <span>Rekening Bank</span></a></li>
    <li><a href="#"><img src="img/tax.svg" width="20px" height="20px"> <span>NPWP</span></a></li>
  </ul>
</li> --}}
<li class="treeview">
  <a href="{{url('/list_auction')}}"><img src="img/clipboard.svg" width="20px" height="20px"> <span>Lelang Saya</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="{{url('/auction_stats')}}"><img src="img/check-mark.svg" width="20px" height="20px"> <span>Status Lelang</span></a></li>
  </ul>
</li>
<li class="treeview">
  <a href="{{url('/help')}}"><img src="img/question-mark.svg" width="20px" height="20px"> <span>Bantuan</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="{{url('/step_auction')}}"><img src="img/settings.svg" width="20px" height="20px"> <span>Prosedur Lelang</span></a></li>
    <li><a href="{{url('/requirement')}}"><img src="img/license.svg" width="20px" height="20px"> <span>Syarat & Ketentuan</span></a></li>
  </ul>
</li>
<li><a href="{{url('/about')}}"><img src="img/info.svg" width="20px" height="20px"> <span>Tentang</span></a></li>
</ul>
@stop

@section('content-wrapper')
   Tentang Perusaahan
@stop

@section('content')
<!-- Default box -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Profil</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body" style="text-align: justify; line-height: 20pt;">
       PT. Arion Indonesia sebuah perusahaan yang bergerak di bidang Teknologi Informasi. Arion Indonesia bertujuan untuk meningkatkan efisiensi dan efektifitas kinerja dunia pendidikan dengan menjadi mitra kerja yang handal dan memberikan solusi bidang Teknologi Informasi dan Komunikasi (TIK).
       Arion menyediakan berbagai produk unggul mulai dari pengembangan hardware hingga software, termasuk  LABORATORIUM BAHASA yang modern dan canggih.
       PT. ARION INDONESIA juga merupakan produsen laboratorium bahasa yang berpengalaman, memiliki dedikasi yang tinggi pada bidang teknologi pendidikan, berkeinginan untuk berperan serta dengan memberikan solusi bagi lembaga pendidikan dengan mendesain dan membangun serta menyediakan laboratorium bahasa baik laboratorium bahasa manual/ analog, lab bahasa digital maupun lab bahasa base software yang lebih representatif.
       Pelayanan kami juga meliputi : instalasi, inovasi, renovasi dan upgrade, maintenance & repair, riset software dan hardware untuk laboratorium bahasa.
       PT. ARION INDONESIA sebagai perusahaan yang terpercaya dalam memproduksi dan mendistribusikan laboratorium bahasa, berharap dengan adanya berbagai jenis produk lab bahasa yang kami produksi bisa membantu sekolah/instansi yang akan mengadakan peralatan lab bahasa yang tepat guna dan sesuai dengan budget/anggaran yang dimiliki sekolah.
       Info yang lebih lengkap tentang harga, spesifikasi teknis dan juga brosur untuk masing-masing produk tersebut, silahkan menghubungi kami
     </div>
     <!-- /.box-body -->
     
   </div>

   <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Visi Dan Misi</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body" style="text-align: justify; line-height: 20pt;">
         Misi :
         Menjadi perusahaan yang professional dibidang Teknolgi Informasi & teknologi elektronika terutama dalam hal menyediakan perangkat pembelajaran bahasa dan computer serta alat peraga pendidikan.

         Visi :
         Ikut serta dalam rangka membangun masa depan bangsa dengan peningkatan sumber daya manusia melalui pendidikan berbasis teknologi
         Meningkatkan penguasaan ilmu pengetahuan dan teknologi
         Mengingkatkan prestasi belajar dengan Laboratorium Bahasa dan computer serta media pelengkap pendidikan lainnya.
       </div>
       <!-- /.box-body -->

     </div>

     @endsection
=======
  <div class="user-panel">
    <div class="pull-left image">
      <img src="img/avatar5.png" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>LENDIS FABRI D.N</p>
      <!-- Status -->
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu">
    <li class="active"><a href="{{url('/show_admin')}}"><img src="img/auction.svg" width="20px" height="20px"> <span>Beranda Lelang</span></a></li>
    <li class="treeview">
      <a href="{{url('/profil_user')}}"><img src="img/profil.svg" width="20px" height="20px"> <span>Profil Perusahaan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{url('/change_protected')}}"><img src="img/key.svg" width="20px" height="20px"> <span>Ganti Password dan E-mail</span></a></li>
      </ul>
    </li>
    {{-- <li class="treeview">
      <a href="{{url('/syarat')}}"><img src="img/deal.svg" width="20px" height="20px"> <span>Syarat Lelang</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><img src="img/add-user-symbol-of-interface.svg" width="20px" height="20px"> <span>Rekening Bank</span></a></li>
        <li><a href="#"><img src="img/tax.svg" width="20px" height="20px"> <span>NPWP</span></a></li>
      </ul>
    </li> --}}
    <li class="treeview">
      <a href="{{url('/list_auction')}}"><img src="img/clipboard.svg" width="20px" height="20px"> <span>Lelang Saya</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{url('/auction_stats')}}"><img src="img/check-mark.svg" width="20px" height="20px"> <span>Status Lelang</span></a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="{{url('/help')}}"><img src="img/question-mark.svg" width="20px" height="20px"> <span>Bantuan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{url('/step_auction')}}"><img src="img/settings.svg" width="20px" height="20px"> <span>Prosedur Lelang</span></a></li>
        <li><a href="{{url('/requirement')}}"><img src="img/license.svg" width="20px" height="20px"> <span>Syarat & Ketentuan</span></a></li>
      </ul>
    </li>
    <li><a href="{{url('/about')}}"><img src="img/info.svg" width="20px" height="20px"> <span>Tentang</span></a></li>
  </ul>
@stop
>>>>>>> 9d472ff7e0b369163f558e1f9a5af7ad02d39613
