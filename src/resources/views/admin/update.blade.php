@extends('admin.master')
@section('side_bar')
  <div class="user-panel">
    <div class="pull-left image">
      <img src="../img/avatar5.png" class="../img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>LENDIS FABRI D.N</p>
      <!-- Status -->
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu">
    <!-- Optionally, you can add icons to the links -->
    <li><a href="{{url('/members')}}"><img src="../img/user.svg" width="20px" height="20px"> <span>Data Admin</span></a></li>
  </ul>
  <ul class="sidebar-menu">
    <!-- Optionally, you can add icons to the links -->
    <li><a href="{{url('/user_members')}}"><img src="../img/users.svg" width="20px" height="20px"> <span>Data User</span></a></li>
  </ul>
  <ul class="sidebar-menu">
    <!-- Optionally, you can add icons to the links -->
    <li><a href="{{url('/user_members')}}"><img src="../img/users.svg" width="20px" height="20px"> <span>Data User</span></a></li>
  </ul>
  <ul class="sidebar-menu">
    <!-- Optionally, you can add icons to the links -->
    <li><a href="{{url('/list_auction')}}"><img src="../img/users.svg" width="20px" height="20px"> <span>Daftar Lelang</span></a></li>
  </ul>
  <ul class="sidebar-menu">
    <!-- Optionally, you can add icons to the links -->
    <li><a href="{{url('/show_comment')}}"><img src="../img/chat.svg" width="20px" height="20px"> <span>Komentar User</span></a></li>
  </ul>
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>CRUD Laravel 5.3</h3>
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="" method="post">
					<input name="_method" type="hidden" value="PATCH">
					{{csrf_field()}}
						<div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
							<input type="text" name="nama" class="form-control" placeholder="Nama" value="">
							{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
							<input type="text" name="phone" class="form-control" placeholder="Nomor Handphone" value="">
							{!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
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
@endsection
