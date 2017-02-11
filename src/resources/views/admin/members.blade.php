@extends('admin.master')
@section('title', "Members")
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
  <li class="active"><a href="{{url('/admin/members')}}"><img src="../img/user.svg" width="20px" height="20px"> <span>Data Admin</span></a></li>
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
  
  <li><a href="{{url('/admin/show_comment')}}"><img src="../img/chat.svg" width="20px" height="20px"> <span>Komentar User</span></a></li>
</ul>
@stop

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3>DATA ADMIN</h3>
      <div class="panel panel-default">
        <div class="panel-body">
          @if(Session::has('alert-success'))
          <div class="alert alert-success">
            {{ Session::get('alert-success') }}
          </div>
          @endif
          
          <button type="button" class="btn btn-info pull-right btn-sm" data-toggle="modal" data-target=".bs-example-modal-sm1">Tambah Data</button><br><br>
          <div class="modal fade bs-example-modal-sm1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Tambah Data</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    {{ csrf_field() }}
                    <input type="text" name="namaadmin" id="namaadmin" class="form-control" placeholder="Nama Admin">
                  </div>
                  <div class="form-group">
                    <input type="text" name="alamatadmin" id="alamatadmin" class="form-control" placeholder="Alamat Admin">
                  </div>
                  <div class="form-group">
                    <input type="text" name="tanggallahir" id="tanggallahir" class="form-control" placeholder="Tanggal Lahir">
                  </div>
                  <div class="form-group">
                    <input type="text" name="kotalahir" id="kotalahir" class="form-control" placeholder="Kota Lahir">
                  </div>
                  <div class="form-group">
                    <input type="text" name="jeniskelamin" id="jeniskelamin" class="form-control" placeholder="jeniskelamin">
                  </div>
                  <div class="form-group" align="right">
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="button" id="add" class="btn btn-primary" data-dismiss="modal">Simpan</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <table class="table table-striped" id="table">
            <tr>
              <th>Id</th>
              <th>Nama Lengkap</th>
              <th>Alamat</th>
              <th>Tanggal Lahir</th>
              <th>Kota Lahir</th>
              <th>Jenis Kelamin</th>
              <th>Aksi</th>
            </tr>
            @foreach($cruds as $crud)
            <tr class="item{{$crud->idperusahaan}}">
              <td>{{ $crud->idadmin }}</td>
              <td>{{ $crud->namaadmin }}</td>
              <td>{{ $crud->alamatadmin }}</td>
              <td>{{ $crud->tanggallahir }}</td>
              <td>{{ $crud->kotalahir }}</td>
              <td>{{ $crud->jeniskelamin }}</td>
              <td>
                <button class="edit-modal btn btn-info btn-sm" data-idadmin="{{$crud->idadmin}}" data-namaadmin="{{$crud->namaadmin}}" data-alamatadmin="{{$crud->alamatadmin}}" data-tanggallahir="{{$crud->tanggallahir}}" data-kotalahir="{{$crud->kotalahir}}" data-jeniskelamin="{{$crud->jeniskelamin}}">Edit</button>
                <button class="delete-modal btn btn-danger btn-sm" data-idadmin="{{$crud->idadmin}}" data-namaadmin="{{$crud->namaadmin}}" >Delete</button>
              </td>
            </tr>
            @endforeach
          </table>
  
          <div class="modal fade bs-example-modal-sm2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Ubah Data</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" id="id-edit">
                    <input type="text" name="nama-edit" id="nama-edit" class="form-control" placeholder="Nama Admin">
                  </div>
                  <div class="form-group">
                    <input type="text" name="alamat-edit" id="alamat-edit" class="form-control" placeholder="Alamat Admin">
                  </div>
                  <div class="form-group">
                    <input type="text" name="lahir-edit" id="lahir-edit" class="form-control" placeholder="Tanggal Lahir">
                  </div>
                  <div class="form-group">
                    <input type="text" name="kota-edit" id="kota-edit" class="form-control" placeholder="Kota Admin">
                  </div>
                  <div class="form-group">
                    <input type="text" name="jeniskelamin-edit" id="jeniskelamin-edit" class="form-control" placeholder="Jenis Kelamin">
                  </div>
                  <div class="form-group" align="right">
                    <button type="button" id="edit" class="btn btn-primary" data-dismiss="modal">Ubah</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Delete modal -->
          <div class="modal fade bs-example-modal-sm3" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Delete Data</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    {{ csrf_field() }}
                    <input type="text" name="id-delete" id="id-delete">
                    <!-- <input type="text" name="nama-delete" id="nama-delete"> -->
                    <p>Yakin Ingin Menghapus Data? </p>
                  </div>
                  <div class="form-group" align="right">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" id="delete" class="btn btn-danger" data-dismiss="modal">Delete</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
@section('javascript')
<script>
  $(document).on('click', '.edit-modal', function() {
    $('#id-edit').val($(this).data('idadmin'));
    $('#nama-edit').val($(this).data('namaadmin'));
    $('#alamat-edit').val($(this).data('alamatadmin'));
    $('#lahir-edit').val($(this).data('tanggallahir'));
    $('#kota-edit').val($(this).data('kotalahir'));
    $('#jeniskelamin-edit').val($(this).data('jeniskelamin'));
    $('.bs-example-modal-sm2').modal('show');
  });
  $(document).on('click', '.delete-modal', function() {
    $('#id-delete').val($(this).data('idadmin'));
    //$('#nama-delete').val($(this).data('namaperusahaan'));
    $('.bs-example-modal-sm3').modal('show');
  });
  $("#add").click(function() {
    $.ajax({
      type: 'post',
      url: '/admin/crud/store',
      data: {
        '_token': $('input[name=_token]').val(),
        //'idperusahaan': $('input[name=idperusahaan]').val(),
        'namaadmin': $('input[name=namaadmin]').val(),
        'alamatadmin': $('input[name=alamatadmin]').val(),
        'tanggallahir': $('input[name=tanggallahir]').val(),
        'kotalahir': $('input[name=kota]').val(),
        'jeniskelamin': $('input[name=jeniskelamin]').val()
      },
      success: function(data) {
        if ((data.errors)){
          $('.error').removeClass('hidden');
          $('.error').text(data.errors.name);
        }
        else {
          $('.error').remove();
          $('#table').append("<tr class='item" + data.idadmin + "'><td>" + data.idadmin + "</td><td>"
            + data.namaadmin + "</td><td>" + data.alamatadmin + "</td><td>" + data.tanggallahir + "</td><td>" +
            data.kotalahir + "</td><td>" + data.jeniskelamin + "</td><td><button class='edit-modal btn btn-info btn-sm' data-idadmin='" + data.idadmin + "' data-namaadmin='"
            + data.namaadmin + "' data-alamatadmin='" + data.alamatadmin + "' data-tanggallahir='" + data.tanggallahir
            + "' data-kotalahiro='" + data.kotalahir + "' data-jeniskelamin='" + data.jeniskelamin + "'>Edit</button> <button class='delete-modal btn btn-danger btn-sm' data-idadmin='"
            + data.idadmin + "' data-namaadmin='" + data.namaadmin + "'>Delete</button></td></tr>");
          toastr.success("Data Berhasil Disimpan.");
        }
      },
    });
    //$('#idperusahaan').val('');
    $('#namaadmin').val('');
    $('#alamatadmin').val('');
    $('#tanggallahir').val('');
    $('#kotalahir').val('');
    $('#jeniskelamin').val('');
  });

  $("#edit").click(function() {
    $.ajax({
      type: 'post',
      url: '/admin/crud/update',
      data: {
        '_token': $('input[name=_token]').val(),
        'idadmin': $('input[name=id]').val(),
        'namaadmin': $('input[name=nama-edit]').val(),
        'alamatadmin': $('input[name=alamat-edit]').val(),
        'tanggallahir': $('input[name=lahir-edit]').val(),
        'kotalahir': $('input[name=kota-edit]').val(),
        'jeniskelamin': $('input[name=jeniskelamin-edit]').val()
      },
      success: function(data) {
        $('.item' + data.idadmin).replaceWith("<tr class='item" + data.idadmin + "'><td>" + data.idadmin
          + "</td><td>" + data.namaadmin + "</td><td>" + data.alamatadmin + "</td><td>" + data.tanggallahir + "</td><td>" + data.kotalahir
          + "</td><td>" + data.jeniskelamin + "</td><td><button class='edit-modal btn btn-info btn-sm' data-idadmin='" + data.idadmin + "' data-namaadmin='" + data.namaadmin
          + "' data-alamatadmin='" + data.alamatadmin + "' data-tanggallahir='" + data.tanggallahir + "' data-kotalahir'" + data.kotalahir
          + "' data-jeniskelamin='" + data.jeniskelamin + "'>Edit</button> <button class='delete-modal btn btn-danger btn-sm' data-idadmin='" + data.idadmin + "' data-namaadmin='" + data.namaadmin
          + "' data-alamatadmin='" + data.alamatadmin + "' data-tanggallahir='" + data.tanggallahir + "' data-kotalahir='" + data.kotalahir + "'data-jeniskelamin='" + data.jeniskelamin + "'>Delete</button></td></tr>");
        toastr.success("Data Berhasil Diubah.");
      },
    });
  });

  $("#delete").click(function() {
    $.ajax({
      type: 'post',
      url: '/admin/crud/destroy',
      data: {
        '_token': $('input[name=_token]').val(),
        'idadmin' : $('input[name=id-delete]').val()
      },
      success: function(data) {
        $('.item' + data.idadmin).remove();
        toastr.success("Data Berhasil Dihapus.");
      }
    });
  });
</script>
@endsection

