<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlineOrderManipulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_order_manipulations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('online_order_id')->unsigned();
            $table->integer('item_id')->unsigned();
            $table->string('item_name');
            $table->integer('quantity');
            $table->double('net_total',7,3);
            $table->timestamps();

            $table->foreign('online_order_id')
                ->references('id')
                ->on('online_orders')->onDelete('cascade');

            $table->foreign('item_id')
                ->references('id')
                ->on('items')->onDelete('cascade');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('online_order_manipulations');
    }
}

