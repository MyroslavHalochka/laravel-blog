@extends('admin.layouts.main')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 d-flex align-items-center">
            <h1 class="m-0 mr-2">{{ $post->title }}</h1>
            <a href="{{ route('admin.post.edit', $post->id) }}" class="text-warning mr-2"><i class="fas fa-pencil-alt"></i></a>
            <form action="{{ route('admin.post.delete', $post->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="border-0 bg-transparent">
                <i class="fas fa-trash text-danger"></i>
              </button>
            </form>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
              <li class="breadcrumb-item"><a href="{{ route('admin.post.index') }}">Cтатьи</a></li>
              <li class="breadcrumb-item active">{{ $post->title }}</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-6">
            <div class="card">
              <div class="card-header">
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <tbody>
                      <tr>
                        <td>{{ $post->id }}</td>
                      </tr>
                      <tr>
                        <td>{{ $post->title }}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  @endsection