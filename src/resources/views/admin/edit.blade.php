@extends('admin.master')
@section('title', "Form Edit Data")
@section('side_bar')
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../img/avatar5.png" class="../img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>AGUS SETYAWAN</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <!-- Optionally, you can add icons to the links -->
      <li><a href="{{url('/admin/members')}}"><img src="../img/user.svg" width="20px" height="20px"> <span>Data Admin</span></a></li>
    </ul>
    <ul class="sidebar-menu">
      <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="{{url('/admin/user_members')}}"><img src="../img/users.svg" width="20px" height="20px"> <span>Data User</span></a></li>
    </ul>
    <ul class="sidebar-menu">
      <!-- Optionally, you can add icons to the links -->
      <li><a href="{{url('/admin/list_auction')}}"><img src="../img/users.svg" width="20px" height="20px"> <span>Daftar Lelang</span></a></li>
    </ul>
    <ul class="sidebar-menu">
      <!-- Optionally, you can add icons to the links -->
      <li><a href="{{url('/admin/show_comment')}}"><img src="../img/chat.svg" width="20px" height="20px"> <span>Komentar User</span></a></li>
    </ul>
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>CRUD Laravel 5.3</h3>
			<div class="panel panel-default">
				<div class="panel-body">
					<form action="{{route('crud.update', $cruds->idperusahaan)}}" method="post">
					<input name="_method" type="hidden" value="PATCH">
					{{csrf_field()}}
          <div class="form-group{{ $errors->has('namaperusahaan') ? ' has-error' : '' }}">
            <input type="text" name="namaperusahaan" class="form-control" placeholder="Nama Perusahaan">
            {!! $errors->first('namaperusahaan', '<p class="help-block">:message</p>') !!}
          </div>
          <div class="form-group{{ $errors->has('alamatperusahaan') ? ' has-error' : '' }}">
            <input type="text" name="alamatperusahaan" class="form-control" placeholder="Alamat Perusahaan">
            {!! $errors->first('alamatperusahaan', '<p class="help-block">:message</p>') !!}
          </div>
          <div class="form-group{{ $errors->has('kotaperusahaan') ? ' has-error' : '' }}">
            <input type="text" name="kotaperusahaan" class="form-control" placeholder="Kota Perusahaan">
            {!! $errors->first('kotaperusahaan', '<p class="help-block">:message</p>') !!}
          </div>
          <div class="form-group{{ $errors->has('npwp') ? ' has-error' : '' }}">
            <input type="text" name="npwp" class="form-control" placeholder="NPWP">
            {!! $errors->first('npwp', '<p class="help-block">:message</p>') !!}
          </div>
          <div class="form-group{{ $errors->has('notelepon') ? ' has-error' : '' }}">
            <input type="text" name="notelepon" class="form-control" placeholder="No Telepon">
            {!! $errors->first('notelepon', '<p class="help-block">:message</p>') !!}
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
