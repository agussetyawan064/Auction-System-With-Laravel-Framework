@extends('user.master')
@section('title', "Profil")
@section('side_bar')
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
    <li><a href="{{url('/beranda_lelang')}}"><img src="img/auction.svg" width="20px" height="20px"> <span>Beranda Lelang</span></a></li>
    <li class="active">
      <a href="{{url('/profil_user')}}"><img src="img/profil.svg" width="20px" height="20px"> <span>Profil Perusahaan</span>
        <!-- <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
 -->      </a>
      <!-- <ul class="treeview-menu">
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
      <a href="{{url('/my_auction')}}"><img src="img/clipboard.svg" width="20px" height="20px"> <span>Lelang Saya</span>
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

@section('content')
<div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="img/avatar5.png" alt="User profile picture">

              <h3 class="profile-username text-center">Agus Setyawan</h3>

              <p class="text-muted text-center">Software Engineer</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Alamat Perusahaan</b> <a class="pull-right">jl. Jalan</a>
                </li>
                <li class="list-group-item">
                  <b>Kota</b> <a class="pull-right">Malang</a>
                </li>
                <li class="list-group-item">
                  <b>NPWP</b> <a class="pull-right">837376387</a>
                </li>
                <li class="list-group-item">
                  <b>No. Telepon</b> <a class="pull-right">085230928726</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary"><b>Edit Profil</b></a>
            </div>
            <!-- /.box-body -->
          </div>
@endsection