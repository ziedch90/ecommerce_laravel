@extends('layouts.template')
@section("content")
@if (Session::has("success"))
<div class="alert alert-success">{{Session::get("success")}}</div>

@endif
<table class="table table-bordered table-dark table-stripped" border="1">
<thead>
    <tr>
        <th>Nom</th>

        <th>Action</th>
    </tr>
</thead>
<tbody>




    @forelse ($categories as $category )

<tr>
    <td>{{$category->name}}</td>

    <td>


       <a href="{{route('category.edit',$category->id)}}"> <button class="btn btn-success">modifier</button></a>
        <form method="post" action="{{route('category.destroy',$category->id)}}" class="d-inline-block">
            @csrf
            @method('delete')
            @if (count($category->products)==0)
            <button class="btn btn-danger" onclick="return confirm('etes vous sur de supprimer?')">supprimer</button>
            @else
            <button  class="btn btn-secondary" onclick="return confirm('vous ne pouvez pas supprimer dette categorie')">supprimer</button>
            @endif


        </form>
    </td>
</tr>

@empty
<tr>
    <th colspan="2">pas de categorie</th>
</tr>
    @endforelse
</tbody>


</table>
<a href="{{ route('category.create') }}"><button class="btn btn-primary" >ajouter</button></a>
@endsection
