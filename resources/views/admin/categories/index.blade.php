@extends('admin.layouts.main')
@section('contentAdmin')
<script src={{asset('/scripts/flashMessageDissapear.js')}} defer></script>
@if (session('flash_message'))
    <div class="alert alert-success text-center">{{session('flash_message')}}</div>
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
       <a href={{route('create.index')}}><button type="button" class="btn btn-block btn-info btn-lg">Добавить Категорию</button></a>
       <div class="card">
        <div class="card-header">
          <h3 class="card-title">Список Категорий</h3>


        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>title</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>show</th>
                <th>edit</th>
                <th>delete</th>
              </tr>
            </thead>
            @foreach ($categories as $item)
            <tbody>
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->updated_at}}</td>
                <td><a href={{route('category.show',$item->id)}}><i class="fa fa-eye" aria-hidden="true"></a></i></td>
                <td><a href={{route('category.edit',$item->id)}}><i class="fas fa-pencil-alt"></i></a></td>
                <td>
                    <form action={{route('category.destroy',$item->id)}} method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                    </form>
                </td>
              </tr>
            </tbody>
            @endforeach
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection
