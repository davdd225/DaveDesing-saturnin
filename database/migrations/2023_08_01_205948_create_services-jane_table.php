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
        Schema::create('services-jane', function (Blueprint $table) {
            $table->id('id_projet_jane');
            $table->string('projet-jane-design');
            $table->string('descritpon-jane-design');
            $table->string('images-jane-desine');
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
        Schema::dropIfExists('services-jane');
    }
};


