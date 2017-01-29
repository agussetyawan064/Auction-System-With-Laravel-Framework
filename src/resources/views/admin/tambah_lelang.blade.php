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
        <form role="form">
          <div class="box-body">
            <div class="form-group">
              <label>Nama Lelang</label>
              <input type="text" class="form-control" placeholder="Input Nama....">
            </div>
            <div class="form-group">
              <label>Jenis Penawaran</label>
              <input type="text" class="form-control" placeholder="Input Nama....">
            </div>
            <div class="form-group">
              <label>Penawaran Awal</label>
              <input type="text" class="form-control" placeholder="Input Penawaran....">
            </div>
            <div class="form-group">
              <label>Batas Penyetoran Uang Jaminan</label>
              <input type="text" class="form-control" placeholder="Input Nama....">
            </div>
            <div class="form-group">
              <label>Daftar Lelang</label>
              <textarea class="textarea" placeholder="Input Daftar Lelang...." rezise="none" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </div>
            <div class="form-group">
              <label>Penawaran Dibuka</label>
              <input type="datetime-local" class="form-control">
            </div>
            <div class="form-group">
              <label>Penawaran Ditutup</label>
              <input type="datetime-local" class="form-control">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <input type="file" id="exampleInputFile">
              {{-- <p class="help-block">Example block-level help text here.</p> --}}
            </div>
            {{-- <div class="checkbox">
              <label>
                <input type="checkbox"> Check me out
              </label>
            </div> --}}
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
