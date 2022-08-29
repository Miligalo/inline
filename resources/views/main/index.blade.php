@extends('layouts.main')
@section('content')
    <script scr="{{asset('js/app.js')}}" defer></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Комментарии</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>
        </div>
      </div>
    </div>


    <section class="content">
      <div class="container-fluid">

        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
                    <div id="app">
                        <form method="get" action="{{route('main.search')}}">
                        <div class="container-fluid">
                            <!-- Small boxes (Stat box) -->
                            <div class="form-group" style="width: 300px">
                                <label>Текст комментария</label>
                                <input type="text" required minlength="3" class="form-control" name="body" placeholder="Текст">
                            </div>
                            <div class="row">
                                <div class="col-1 mb-3">
                                    <button class="btn btn-block btn-primary"  type="submit" >Поиск</button>

                                </div>
                        </form>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Body</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $comment)
                                <th>{{$comment->id}}</th>
                                <th>{{$comment->name}}</th>
                                <td>{{$comment->body}}</td>
                                </tbody>
                                @endforeach

                                <p></p>
                            </table>
                            <p></p>
                        </div>
              </div>

            </div>
          </div>
        </div>


  </div>
  @endsection
