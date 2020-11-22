<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements();
            $table->bigInteger('user_id')->unsigned();
            $table->string('birthday')->nullable();
            $table->string('gender')->nullable();
            $table->string('location');
            $table->enum('type', ['user', 'admin',]);
            $table->tinyInteger('active')
            ->comment('1 => show the user profile on the site, 0 => donot show the user profile on the site')->default('1');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('profiles');
    }
}
