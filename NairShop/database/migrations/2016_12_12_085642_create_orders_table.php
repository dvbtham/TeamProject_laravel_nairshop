<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('payment_status');
            $table->boolean('actived');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')
            ->on('users')->onDelete('cascade');

            $table->integer('payment_id')->unsigned();
            $table->foreign('payment_id')->references('id')
            ->on('payments')->onDelete('cascade');

            $table->integer('shipper_id')->unsigned();
            $table->foreign('shipper_id')->references('id')
            ->on('shippers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
