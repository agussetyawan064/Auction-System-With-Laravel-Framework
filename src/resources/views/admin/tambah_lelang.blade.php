@extends('admin.master')
@section('title', "Tambah Lelang")
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
      <li class="active"><a href="{{url('/members')}}"><img src="../img/user.svg" width="20px" height="20px"> <span>Data Admin</span></a></li>
    </ul>
    <ul class="sidebar-menu">
      <!-- Optionally, you can add icons to the links -->
      <li><a href="{{url('/user_members')}}"><img src="../img/users.svg" width="20px" height="20px"> <span>Data User</span></a></li>
      <ul class="sidebar-menu">
      </ul>
      <!-- Optionally, you can add icons to the links -->
      <li><a href="{{url('/list_auction')}}"><img src="../img/users.svg" width="20px" height="20px"> <span>Daftar Lelang</span></a></li>
    </ul>
    <ul class="sidebar-menu">
      <!-- Optionally, you can add icons to the links -->
      <li><a href="{{url('/show_comment')}}"><img src="../img/chat.svg" width="20px" height="20px"> <span>Komentar User</span></a></li>
    </ul>
  @stop
  @section('content-header')
    <section class="content-header">
      <h1>
        Form Tambah Lelang
      </h1>
    </section>
  @stop
  @section('content')

    <!-- /.box-header -->

    <div class="box-body pad">
      <div class="box box-primary">
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" enctype="multipart/form-data" action="{{route('crud_lelang.store')}}">
          {{ csrf_field() }}
          <div class="box-body">
            <label>Nama Lelang</label>
            <div class="form-group{{ $errors->has('namalelang') ? ' has-error' : '' }}">
              <input type="text" name="namalelang" class="form-control" placeholder="Nama Lelang">
              {!! $errors->first('namalelang', '<p class="help-block">:message</p>') !!}
            </div>
            <div class="form-group">
              <label>Jenis Penawaran</label>
              <select class="form-control" name="jenistawar">
                <option name="terbuka" value="terbuka" class="form-control">Terbuka</option>
                <option name="tertutup" value="tertutup" class="form-control">Tertutup</option>
              </select>
            </div>

            <label>Batas Harga Maksimal</label>
            <div class="form-group{{ $errors->has('hargamaksimal') ? ' has-error' : '' }}">
              <input type="text" name="hargamaksimal" class="form-control" placeholder="Input Harga Maksimal">
              {!! $errors->first('hargamaksimal', '<p class="help-block">:message</p>') !!}
            </div>

            <label>Daftar Lelang</label>
            <div class="form-group{{ $errors->has('daftarlelang') ? ' has-error' : '' }}">
              <textarea name="daftarlelang" class="form-control" placeholder="Input daftar barang yang akan dilelang " style="width: 100%; height: 200px; resize:none; font-size: 14px; line-height: 18px; padding: 10px;"></textarea>
              {!! $errors->first('daftarlelang', '<p class="help-block">:message</p>') !!}
            </div>
            {{-- <textarea name="daftarlelang" placeholder="Input Daftar Lelang...." style="width: 100%; height: 200px; resize:none; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea> --}}

            <label>Penawaran Dibuka</label>
            <div class="form-group{{ $errors->has('tanggalbuka') ? ' has-error' : '' }}">
              <input type="date" name="tanggalbuka" class="form-control">
              {!! $errors->first('tanggalbuka', '<p class="help-block">:message</p>') !!}
            </div>

            <label>Penawaran Ditutup</label>
            <div class="form-group{{ $errors->has('tanggaltutup') ? ' has-error' : '' }}">
              <input type="date" name="tanggaltutup" class="form-control">
              {!! $errors->first('tanggaltutup', '<p class="help-block">:message</p>') !!}
            </div>

            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <input type="file" name="uploadfile" id="exampleInputFile">
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </div>

      <!-- CK Editor -->
      <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
      <!-- Bootstrap WYSIHTML5 -->
      <script src="../js/bootstrap3-wysihtml5.all.min.js"></script>
      <script>
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
      });
      </script>

    @stop
