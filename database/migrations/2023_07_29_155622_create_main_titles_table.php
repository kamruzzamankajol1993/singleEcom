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
        Schema::create('main_titles', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('service_title')->nullable();
            $table->string('about_title')->nullable();
            $table->string('choose_title')->nullable();
            $table->string('tesi_title')->nullable();
            $table->string('product_title')->nullable();
            $table->string('billing_title')->nullable();
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
        Schema::dropIfExists('main_titles');
    }
};
