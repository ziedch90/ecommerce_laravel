<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.welcome');
    }

    public function products(int $category_id){
        $products=Product::where(["category_id"=>$category_id])->get();
        return view('front.products',compact("products"));
    }
    public function productsApi(){
        $products=Product::all();
        return  response()->json([
            "success" => true,
            "products" => $products
        ]);
    }
    public function categoriesApi(){
        $categories=Category::all();
        return  response()->json([
            "success" => true,
            "categories" => $categories
        ]);
    }
   public function store(Request $request){
    //session()->flush();
    //enregistrer un produit dans le panier dans la session
    if(!session()->has('panier'))
    session()->put('panier',[]);
    $panier=session()->get('panier');
    $trouve=0;
    foreach($panier as $indice=>$product){
        if($product['id']==$request->id){
            $trouve=1;
            $product["qty"] += $request->qty;
            $panier[$indice]=$product;
            session()->put('panier',$panier);
        }
    }
if($trouve==0)
    session()->push('panier',["id"=>$request->id,"name"=>$request->name,"price"=>$request->price,"qty"=>$request->qty,"photo"=>$request->photo]);
    $panier=session()->get('panier');
return response()->json($panier);
   }

   public function list(){
    $panier=session()->get("panier");
    return view('front.list',compact("panier"));
   }

   public function checkout(){
    $panier=session()->get('panier');
    return view('front.checkout',compact('panier'));
   }
}
