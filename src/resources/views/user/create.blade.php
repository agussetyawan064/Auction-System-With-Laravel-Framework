@extends('user.master')
@section('title', "Insert")
@section('side_bar')
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
      <a href="#"><img src="img/profil.svg" width="20px" height="20px"> <span>Profil</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><img src="img/user-setting.svg" width="20px" height="20px"> <span>Edit Akun</span></a></li>
        <li><a href="#"><img src="img/key.svg" width="20px" height="20px"> <span>Ganti Password dan E-mail</span></a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#"><img src="img/deal.svg" width="20px" height="20px"> <span>Syarat Lelang</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><img src="img/add-user-symbol-of-interface.svg" width="20px" height="20px"> <span>Rekening Bank</span></a></li>
        <li><a href="#"><img src="img/tax.svg" width="20px" height="20px"> <span>NPWP</span></a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#"><img src="img/clipboard.svg" width="20px" height="20px"> <span>Lelang Saya</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><img src="img/check-mark.svg" width="20px" height="20px"> <span>Status Lelang</span></a></li>
      </ul>
    </li>

    <li class="treeview">
      <a href="#"><img src="img/question-mark.svg" width="20px" height="20px"> <span>Bantuan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><img src="img/settings.svg" width="20px" height="20px"> <span>Prosedur Lelang</span></a></li>
        <li><a href="#"><img src="img/license.svg" width="20px" height="20px"> <span>Syarat & Ketentuan</span></a></li>
      </ul>
    </li>
    <li><a href="{{url('/show_user')}}"><img src="img/info.svg" width="20px" height="20px"> <span>Tentang</span></a></li>
  </ul>
@stop
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>CRUD Laravel 5.3</h3>
			<div class="panel panel-default">
				<div class="panel-body">
					<form  method="post">
					{{csrf_field()}}
						<div class="form-group{{ $errors->has('nama_perusahaan') ? ' has-error' : '' }}">
							<input type="text" name="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan">
							{!! $errors->first('nama_perusahaan', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('alamat_perusahaan') ? ' has-error' : '' }}">
							<input type="text" name="alamat_perusahaan" class="form-control" placeholder="Alamat">
							{!! $errors->first('alamat_perusahaan', '<p class="help-block">:message</p>') !!}
						</div>
            <div class="form-group{{ $errors->has('kota_perusahaan') ? ' has-error' : '' }}">
							<input type="text" name="kota_perusahaan" class="form-control" placeholder="Kota Perusahaan">
							{!! $errors->first('kota_perusahaan', '<p class="help-block">:message</p>') !!}
						</div>
            <div class="form-group{{ $errors->has('npwp') ? ' has-error' : '' }}">
              <input type="text" name="npwp" class="form-control" placeholder="Nomor Pokok Wajib Pajak">
              {!! $errors->first('npwp', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group{{ $errors->has('no_telepon') ? ' has-error' : '' }}">
              <input type="text" name="no_telepon" class="form-control" placeholder="No Telepon">
              {!! $errors->first('no_telepon', '<p class="help-block">:message</p>') !!}
            </div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Simpan">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
