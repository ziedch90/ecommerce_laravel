@extends('layouts.template')
@section("content")
@if (Session::has("success"))
<div class="alert alert-success">{{Session::get("success")}}</div>

@endif
<table class="table table-bordered table-dark table-stripped" border="1">
<thead>
    <tr>
        <th>photo</th>
        <th>Nom</th>
        <th>prix</th>
        <th>description</th>
        <th>categorie</th>

        <th>Action</th>
    </tr>
</thead>
<tbody>




    @forelse ($products as $product )
<tr>
    <td><img src="{{asset('images/produits/'.$product->photo)}} "width='100px'></td>

    <td>{{$product->name}}</td>
    <td>{{$product->price}}</td>
    <td>{{$product->description}}</td>
    <td>{{$product->category->name}}</td>

    <td>

       <a href="{{route('product.edit',$product->id)}}"> <button class="btn btn-success">modifier</button></a>
        <form method="post" action="{{route('product.destroy',$product->id)}}" class="d-inline-block">
            @csrf
            @method('delete')
            <button class="btn btn-danger" onclick="return confirm('etes vous sur de supprimer')">supprimer</button>
        </form>
    </td>
</tr>
@empty
<tr>
    <th colspan="2">pas de produits</th>
</tr>
    @endforelse
</tbody>


</table>
<a href="{{ route('product.create') }}"><button class="btn btn-primary" >ajouter</button></a>
@endsection
