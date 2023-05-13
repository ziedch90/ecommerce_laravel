@extends('layouts.template')
@section("content")






    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">modifier categorie</h3>
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
        <form action="{{ route('category.update',$category->id) }}" method="post">
            @csrf
            @method("put")

          <div class="card-body">
            <div class="form-group">
                <label for="name">nom</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$category->name}}">
            </div>
          </div>



          <div class="card-footer">
            <button type="submit" class="btn btn-primary">modifier</button>
            </div>

        </form>







@endsection
