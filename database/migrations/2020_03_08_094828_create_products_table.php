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
            $table->string('status');
            $table->integer('price');
            $table->integer('old_price');
            $table->integer('star')->default(0);
            $table->string('slug')->nullable();
            $table->text('detail');
            $table->longText('post')->nullable();
            $table->string('color');
            $table->integer('view')->default(0);
            $table->integer('is_trending')->default(0);
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
