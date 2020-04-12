<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('product_code')->unique();
            $table->string('name');
            $table->string('description');
            $table->string('image');
            $table->double('price', 8, 2)->default(0);
            $table->string('slug');
            $table->integer('quantity');
            $table->integer('promotion');
            
            $table->bigInteger('brand_id')->unsigned();
            $table->foreign('brand_id')
            ->references('id')
            ->on('brands')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->bigInteger('category_id')->unsigned();
            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('created_by');
            $table->string('updated_by');
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
