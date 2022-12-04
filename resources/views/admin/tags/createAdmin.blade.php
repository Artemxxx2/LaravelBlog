@extends('admin.layouts.main')
@section('contentAdmin')
@if (session()->has('message'))
<div class="">
      {{ session('message') }}
  </div>
@endif
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <form action={{route('tags.store.index')}} method="POST" class="w-25">
        @csrf
        <div class="card-footer">
            <div class="form-group">
                <label>Тэг</label>
                <input class="form-control" name="title" placeholder="Введите название тэга">
              </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
          </div>
          @error('title')
            <div class="text-danger">{{$message}}</div>
          @enderror
      </form>
    </section>
    <!-- /.content -->
  </div>
@endsection
