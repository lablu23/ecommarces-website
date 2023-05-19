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
            $table->bigIncrements('id');
            $table->string('product_name');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->on('categories')->references('id')->onDelete('Cascade');
            $table->string('subcategory_id')->nullable();
            $table->string('brand_id')->nullable(); 
            $table->string('views')->nullable();
            $table->string('num_of_sale')->nullable();
            $table->text('shart_des')->nullable();
            $table->text('long_des')->nullable();

            $table->string('tags')->nullable();
            $table->double('price',10,2)->nullable();
            $table->string('discount_type')->default('flag');
            $table->string('discount')->nullable();
            $table->string('stock')->nullable();
            $table->string('photo')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_photo')->nullable();
            $table->string('meta_des')->nullable();
           
            $table->string('status')->nullable();
            $table->string('slug')->nullable();
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
