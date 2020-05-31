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
            $table->bigIncrements('id');
            $table->string('name');
//            $table->string('status')->nullable();
//            $table->string('price');
//            $table->string('old_price')->nullable();
//            $table->string('sku');
            $table->longText('detail')->nullable();
//            $table->string('size')->nullable();
//            $table->text('short_detail')->nullable();
//            $table->longText('post')->nullable();
//            $table->integer('star')->default(0);
            $table->string('slug')->nullable();
//            $table->integer('view')->default(0);
//            $table->integer('is_trending')->default(0);
            $table->string('image');
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
