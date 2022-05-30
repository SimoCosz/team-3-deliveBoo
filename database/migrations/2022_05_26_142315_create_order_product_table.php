<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table -> unsignedBigInteger('order_id');
            $table -> unsignedBigInteger('product_id');

            $table->foreign('order_id')
            ->references('id')
            ->on('orders')
            ->onDelete('no action');
            
            $table->foreign('product_id')
            ->references('id')
            ->on('products')
            ->onDelete('no action');

            $table->primary(['order_id', 'product_id']);

            $table->integer('quantity');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product');
    }
}
