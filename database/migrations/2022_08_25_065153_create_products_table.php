<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
              $table->unsignedBigInteger('category_id');
              $table->unsignedBigInteger('subcategory_id');
              $table->string('name');
              $table->string('slug');
              $table->longText('short_desc');
              $table->longText('desc');
              $table->integer('quantity')->default(1);
              $table->integer('price');
              $table->string('size');
              $table->tinyInteger('status')->default(0);
              $table->integer('offer_price')->nullable();
              $table->timestamps();
              $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
              $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
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
