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
            $table->string('translation_lang');
            $table->integer('translation_of')->unsigned();
            $table->integer('category_id')->unsigned()->nullable();
            $table->integer('vendor_id')->unsigned()->nullable();
            $table->integer('brand_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('photo')->nullable();
            $table->string('description')->nullable();
            $table->string('price')->nullable();
            $table->string('viewed')->nullable();
            $table->tinyInteger('active')
            ->comment('1 => show the product on the site, 0 => donot show the product on the site')->default('1');
            $table->tinyInteger('sales_status')
            ->comment('1 => it is not sold , 0 => it is sold')->default('1');
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
