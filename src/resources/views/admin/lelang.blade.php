@extends('admin.master')
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
	<li><a href="{{url('/members')}}"><img src="../img/user.svg" width="20px" height="20px"> <span>Data Admin</span></a></li>
</ul>
<ul class="sidebar-menu">
	<!-- Optionally, you can add icons to the links -->
	<li><a href="{{url('/user_members')}}"><img src="../img/users.svg" width="20px" height="20px"> <span>Data User</span></a></li>
</ul>
<ul class="sidebar-menu">
	<!-- Optionally, you can add icons to the links -->
	<li><a href="{{url('/list_auction')}}"><img src="../img/auction.svg" width="20px" height="20px"> <span>Daftar Lelang</span></a></li>
</ul>
<ul class="sidebar-menu">
	<!-- Optionally, you can add icons to the links -->
	<li><a href="{{url('/user_members')}}"><img src="../img/outbox.svg" width="20px" height="20px"> <span>File Upload</span></a></li>
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
					@if(Session::has('alert-success'))
					    <div class="alert alert-success">
				            {{ Session::get('alert-success') }}
				        </div>
					@endif
					<a href="{{route('crud_lelang.create')}}" class="btn btn-info pull-right">Tambah Data</a><br><br>
					<table class="table table-striped">
            <tr>
							<th>Id</th>
							<th>Nama Lelang</th>
							<th>Jenis Penawaran</th>
							<th>Daftar Lelang</th>
							<th>Penawaran Dibuka</th>
							<th>Penawaran Ditutup</th>
              <th>Upload File</th>
							<th>Aksi</th>
						</tr>
						@foreach($cruds as $crud)
						<tr class="item{{$crud->idlelang}}">
							<td>{{$crud->idlelang}}</td>
							<td>{{$crud->namalelang}}</td>
							<td>{{$crud->jenistawar}}</td>
							<td>{{$crud->daftarlelang}}</td>
							<td>{{$crud->tanggalbuka}}</td>
              <td>{{$crud->tanggaltutup}}</td>
							<td>{{$crud->uploadfile}}</td>
							<td>
								<form method="POST" action="{{ route('crud_lelang.destroy', $crud->idlelang) }}" accept-charset="UTF-8">
		                            <input name="_method" type="hidden" value="DELETE">
		                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
		                            <a href="{{route('crud_lelang.edit', $crud->idlelang)}}" class="btn btn-primary">Edit</a>
		                        	<input type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ?');" value="Delete">
		                        </form>
							</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
