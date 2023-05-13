<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orderlines', function (Blueprint $table) {
            $table->id();
            $table->float('qty');
            $table->double('price',11,3);
            $table->unsignedBigInteger('order_id');
            
            $table->foreign('order_id')->references('id')->on("orders");
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on("products");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderlines');
    }
};
