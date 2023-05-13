<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {

$num=0;
$firstorder=Order::orderby("id","desc")->first();
if(!empty($firstorder))
$num=$firstorder->number;

        $order["user_id"]=Auth::user()->id;
        $order["date_order"]=date('Y-m-d');
        $order["number"]= $num+1;

       $order=Order::create($order);
        //insertion des lignes de commande
         foreach(session()->get('panier') as $product ){

            $orderline=new  Orderline();
            $orderline->order_id=$order->id;
            $orderline->product_id=$product['id'];
            $orderline->qty=$product['qty'];
            $orderline->price=$product['price'];
            $orderline->save();


         }
         session()->forget('panier');
         return redirect()->route("front.index");


    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
