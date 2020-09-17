<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeCloumnToSlideTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('slider_translations', function (Blueprint $table) {
            $table->text('text1')->nullable()->change();
            $table->text('text2')->nullable()->change();
            $table->text('text3')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('slide_translations', function (Blueprint $table) {
            $table->text('text1')->nullable(false)->change();
            $table->text('text2')->nullable(false)->change();
            $table->text('text3')->nullable(false)->change();
        });
    }
}
