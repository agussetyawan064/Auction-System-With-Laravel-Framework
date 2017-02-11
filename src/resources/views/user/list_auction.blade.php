@extends('user.master')
@section('title', "Beranda Lelang")
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
      <li class="active"><a href="{{url('/beranda_lelang')}}"><img src="img/auction.svg" width="20px" height="20px"> <span>Beranda Lelang</span></a></li>
      <li class="treeview">
        <a href="{{url('/profil_user')}}"><img src="img/profil.svg" width="20px" height="20px"> <span>Profil Perusahaan</span>
         <!--  <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span> -->
        </a>
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

@section('content-wrapper')
   Daftar Lelang
@stop
@section('content')
    <div class="row">
      @foreach($cruds as $crud)
    <div class="col-md-6">
      <!-- Box Comment -->
      <div class="box box-widget">
        <div class="box-header with-border">
          <div class="user-block">
            <img class="img-circle" src="/img/avatar5.png" alt="User Image">
            <span class="username"><a href="{{url('user/detail_lelang')}}">{{$crud->namalelang}}</a></span>
            <span class="description">Shared publicly - 7:30 PM Today</span>
          </div>

          <!-- /.user-block -->
          <div class="box-tools">
            {{-- <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
              <i class="fa fa-circle-o"></i></button> --}}
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            {{-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> --}}
          </div>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table class="table">
            <tr>
              <th>Jenis Penawaran</th>
                <td>{{$crud->jenistawar}}</td>
            </tr>
            <tr>
              <th>Harga Maksimal</th>
                <td>{{$crud->hargamaksimal}}</td>
            </tr>
            <tr>
              <th>Daftar Lelang</th>
                <td><textarea style="resize:none; width:400px; height:200px;" readonly="readonly">{{$crud->daftarlelang}}</textarea></td>
            </tr>
            <tr>
              <th>Penawaran Ditutup</th>
                <td>{{$crud->tanggaltutup}}</td>
            </tr>
            <tr>
              <th>Kode Lelang</th>
              <td>Link</td>
            </tr>
            <tr>
              <th>Document Lelang Offline</th>
              <td>Link</td>
            </tr>

          </table>
          <button class="btn btn-primary " style=" text-align: right;" >Ikuti Lelang</button>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      </div>

    @endforeach

  </div>
@endsection

