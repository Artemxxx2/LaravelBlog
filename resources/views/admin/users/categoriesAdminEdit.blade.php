@extends('admin.layouts.main')
@section('contentAdmin')
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
       <div class="card">
        <div class="card-header">
          <h3 class="card-title">Редактирование пользователя</h3>


        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
            <form action={{route('users.update',$user->id)}} method="post">
                @csrf
                @method('PATCH')
                <input value={{$user->name}} type="text" name="name">
                <input value={{$user->email}} type="text" name="email">
                <button type="submit">Отправить</button>
            </form>
        </div>
        <!-- /.card-body -->
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection
