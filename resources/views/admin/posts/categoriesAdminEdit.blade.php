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
      <form action={{route('posts.store.index')}} method="POST" class="w-80 h-40" enctype="multipart/form-data">
        @csrf
        <div class="card-footer">
            <div class="form-group">
                <label>Пост</label>
                <input class="form-control" value ={{$post->title}} name="title" placeholder="Введите название поста">
                <textarea id="summernote" name="content">{{$post->content}}</textarea>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="m-25">
                        <img src="{{asset('storage/'.$post->file_preview)}}" alt="file_preview">
                    </div>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" value ={{$post->file_preview}} name="file_preview" class="custom-file-input">
                        <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Загрузить</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="file_main" class="custom-file-input">
                        <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Загрузить</span>
                      </div>
                    </div>
                  </div>
              </div>
              {{-- <select name="category_id" class="form-select form-select-lg mb-3 block" aria-label=".form-select-lg example">
                <option selected>Выберите категорю</option>
                @foreach ($categories as $item)
                <option value={{$item->id}}>{{$item->title}}</option>
                @endforeach
              </select> --}}
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
