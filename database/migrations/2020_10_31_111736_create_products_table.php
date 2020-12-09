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
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('translation_lang')->nullable();
            $table->bigInteger('translation_of')->unsigned()->nullable();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('sub_category_id')->unsigned()->nullable()->default('0');
            $table->bigInteger('vendor_id')->unsigned()->nullable()->default('0');
            $table->bigInteger('brand_id')->unsigned()->nullable()->default('0');
            $table->tinyInteger('active')
            ->comment('1 => show the price on the site, 0 => donot show the price on the site')->default('1');
            //foreignkey
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
