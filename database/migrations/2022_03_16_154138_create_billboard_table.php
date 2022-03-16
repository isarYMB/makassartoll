<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillboardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billboard', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('location');
            $table->text('description');
            $table->text('specification');
            $table->integer('active');
            $table->timestamps('created_at');
            $table->integer('created_by');
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billboard');
    }
}
