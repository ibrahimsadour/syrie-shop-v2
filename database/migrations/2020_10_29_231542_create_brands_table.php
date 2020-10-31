<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('parent_id')->default('0');
            $table->integer('category_id')->unsigned()->nullable();
            $table->string('translation_lang');
            $table->integer('translation_of')->unsigned();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('photo')->nullable();
            $table->tinyInteger('active')
            ->comment('1 => show the product on the site, 0 => donot show the product on the site')->default('1');
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
        Schema::dropIfExists('brands');
    }
}
