<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('alias');
            $table->string('intro');
            $table->text('content');
            $table->string('image');
            $table->decimal('unit_price');
            $table->decimal('price');
            $table->decimal('discount');
            $table->integer('sku');
            $table->integer('units_on_order');
            $table->string('meta_keyword');
            $table->string('meta_description');
            $table->string('tags');
            $table->integer('viewed');
            $table->boolean('actived');

            //foreign key

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')
            ->on('users')->onDelete('cascade');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')
            ->on('categories')->onDelete('cascade');

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
        Schema::dropIfExists('products');
    }
}
