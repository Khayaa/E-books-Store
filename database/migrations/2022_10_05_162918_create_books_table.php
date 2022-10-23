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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->longText('slug');
            $table->string('name');
            $table->string('author');
            $table->longText('description');
            $table->unsignedBigInteger('seller_id');
            $table->enum('book_type',['Hardcopy','softcopy']);
            $table->longText('condition');
            $table->double('price');
            $table->enum('status',['instock' ,'outofstock']);
            $table->boolean('availability')->default(1);
            $table->boolean('is_approved')->default(0);
            $table->foreign('seller_id')->references('id')->on('sellers');




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
        Schema::dropIfExists('books');
    }
};
