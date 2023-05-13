<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //selectionner tout les produits a partir de lala base de donnee
        $products = Product::with("category")->get();
        // return view("product.index",["products"=>$products]);
        return view("product.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view("product.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        //Product::create($request->all());
        //traitement photo
        $inputs=$request->all();
if($photo=$request->file("photo")){
$newfile=time().".".$photo->getClientOriginalExtension();
$photo->move('images/produits/',$newfile);

        $product = new Product();
        $product->photo=$newfile;

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->category_id = $request->category_id;

        $product->save();

        return redirect()->route("product.index")->with("success","un nouveau produit est ajouté avec succee");
}
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view("product.edit", compact("product", "categories"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate(['name'=>"required|max:80",
        'price'=>"numeric|required",
        'description'=>"required",
        'photo'=>"image|required|mimes:png,jpg,webp,jpeg|max:2048"]);
        $inputs=$request->all();
        if($photo=$request->file("photo")){
        $newfile=time().".".$photo->getClientOriginalExtension();
// supprimer l'ancienne photo si existe

        if(file_exists("images/produits/".$product->photo))
        unlink("images/produits/".$product->photo);
        $photo->move('images/produits/',$newfile);
        $inputs['photo']=$newfile;
        }else{
            $inputs['photo']=$product->photo;
        }


       $product->update($inputs);
      /* $product = Product::find($product->id);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->photo = $request->photo ;

        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->save();*/


        return redirect()->route("product.index");


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if(file_exists("images/produits/".$product->photo))
        unlink("images/produits/".$product->photo);
        $product->delete();


        return redirect()->route("product.index")->with("success","un produit est supprimé avec succee");
    }
}
