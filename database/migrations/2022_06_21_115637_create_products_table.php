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
            $table->id();
            $table->foreignId('admin_id');
            $table->foreignId('category_id');
            $table->string('name');
            $table->string('slug')->nullable();
            $table->unsignedBigInteger('unit_price')->nullable();
            $table->unsignedBigInteger('discount_price')->nullable();
            $table->integer('stock')->default(0);
            $table->text('description')->nullable();
            $table->integer('views')->nullable();
            $table->string('image')->nullable();
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
