@extends('admin.master')
@section('title', "Daftar Lelang")
<<<<<<< HEAD
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
  <li><a href="{{url('/admin/user_members')}}"><img src="../img/users.svg" width="20px" height="20px"> <span>Data User</span></a></li>
</ul>
<ul class="sidebar-menu">
  <!-- Optionally, you can add icons to the links -->
  <li><a href="{{url('/admin/list_auction')}}"><img src="../img/auction.svg" width="20px" height="20px"> <span>Daftar Lelang</span></a></li>
</ul>
<ul class="sidebar-menu">
  <!-- Optionally, you can add icons to the links -->
  <li><a href="{{url('/admin/user_members')}}"><img src="../img/outbox.svg" width="20px" height="20px"> <span>File Upload</span></a></li>
</ul>
<ul class="sidebar-menu">
  <!-- Optionally, you can add icons to the links -->
  <li><a href="{{url('/admin/show_comment')}}"><img src="../img/chat.svg" width="20px" height="20px"> <span>Komentar User</span></a></li>
</ul>
@stop
=======
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

>>>>>>> 9d472ff7e0b369163f558e1f9a5af7ad02d39613
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Data Table With Full Features</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table style="text-align:center" id="example1" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nama Lengkap</th>
          <th>Alamat</th>
          <th>Tanggal Lahir</th>
          <th>Kota Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $index)
<<<<<<< HEAD
        <tr>
          <td>{{ $index->idadmin }}</td>
          <td>{{ $index->namaadmin }}</td>
          <td>{{ $index->alamatadmin }}</td>
          <td>{{ $index->tanggallahir }}</td>
          <td>{{ $index->kotalahir }}</td>
          <td>{{ $index->jeniskelamin }}</td>
          <td><a href="{{url('/update')}}"><img title="Edit Data" src="img/pencil.svg" width="40px" height="20px"></a>
          <a href="{{url('/delete')}}"><img title="Hapus Data" src="img/trash.svg" width="40px" height="20px"></a></td>
        </tr>
         @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->
=======
          <tr>
            <td>{{ $index->id_perusahaan }}</td>
            <td>{{ $index->nama_perusahaan }}</td>
            <td>{{ $index->alamat_admin }}</td>
            <td>{{ $index->tanggal_lahir }}</td>
            <td>{{ $index->kota_lahir }}</td>
            <td>{{ $index->jenis_kelamin }}</td>
            <td><a href="{{url('/update')}}"><img title="Edit Data" src="img/pencil.svg" width="40px" height="20px"></a>
              <a href="{{url('/delete')}}"><img title="Hapus Data" src="img/trash.svg" width="40px" height="20px"></a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
>>>>>>> 9d472ff7e0b369163f558e1f9a5af7ad02d39613
</div>
<!-- /.col -->
</div>
@stop
