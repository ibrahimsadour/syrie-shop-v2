<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductPrice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_price', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('product_id')->unsigned();
            $table->tinyInteger('type_price')->comment('1 => USA (دولار امريكي) , 0 = TR (ليرة تركية)')->default('1');
            $table->string('price');
            $table->string('sale_price')->nullable();
            $table->tinyInteger('active')
            ->comment('1 => show the price on the site, 0 => donot show the price on the site')->default('1');
            $table->foreign('product_id')->references('id')->on('products');
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
        Schema::dropIfExists('product_price');
    }
}
