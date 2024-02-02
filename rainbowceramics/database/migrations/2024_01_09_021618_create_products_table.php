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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->string('shape');
            $table->string('usage');
            $table->string('material');
            $table->string('color');
            $table->string('size');
            $table->string('pattern');
            $table->string('baseshape');
            $table->string('brand')->nullable;
            $table->string('description')->nullable;
            $table->integer('price');
            $table->integer('quantity');
            $table->integer('thickness');
            $table->integer('diameter');
            $table->tinyInteger('trending')->default('0')->comment('1=trending,0=not trending');
            $table->tinyInteger('featured')->default('0')->comment('1=featured,0=not featured');
            $table->tinyInteger('status')->default('0')->comment('1=hidden,0=visible');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
};
