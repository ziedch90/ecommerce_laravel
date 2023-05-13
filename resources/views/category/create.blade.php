@extends('layouts.template')
@section("content")


    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">ajouter categorie</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @if ($errors->any())
<ul class="alert alert-danger mt-3">
@foreach ($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
@endif
        <form action="{{ route('category.store') }}" method="post">
            @csrf
          <div class="card-body">
<div class="form-group">
    <label for="name">nom</label>
    <input type="text" name="name" id="name" class="form-control">
</div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">ajouter</button>
          </div>
        </form>





@endsection
