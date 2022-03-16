<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserKartuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_kartu', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('kartu')->nullable();
<<<<<<< HEAD
            $table->integer('bank')->nullable();
=======
>>>>>>> 231bb27cab0335fdd07d0e8e70b4d783f967b461
            $table->timestamps();
            $table->integer('bank')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_kartu');
    }
}
