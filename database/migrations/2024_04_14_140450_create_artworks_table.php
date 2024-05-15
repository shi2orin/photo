<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artworks', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('name', 20);
            $table->string('title', 20);
            $table->string('image', 100)->default('noimage.jpg');
            $table->string('alt', 100)->nullable();
            $table->string('sns', 500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artworks');
    }
};
