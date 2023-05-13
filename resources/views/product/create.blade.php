@extends('layouts.template')
@section('content')
    @csrf
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">ajouter produit</h3>
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
        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="name">nom</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price">prix</label>
                    <input type="text" name="price" id="price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">description</label>
                    <textarea name="description" id="description" class="form-control">Lorem ipsum dolor sit amet consectetur, Ut laboriosam alias non, possimus quis nihil saepe dicta! </textarea>
                </div>

                <div class="form-group">
                    <label for="photo">photo</label>
                    <input type="file" name="photo" id="photo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="categories">categories</label>
                    <select name="category_id" id="category_id" class="form-control" required>
                        <option>---choisir une categorie---</option>
                        @foreach ($categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                        @endforeach

                    </select>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">ajouter</button>
            </div>
        </form>
    @endsection

