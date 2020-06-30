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
            $table->bigIncrements('id');
            $table->string('thumbnail')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->string('name');
            $table->decimal('price', 30, 2);
            $table->float('quality');
            $table->text('description')->nullable();
            $table->longText('content')->nullable();
            $table->string('code')->nullable();
            $table->decimal('promotion_price', 30, 2)->nullable();
            $table->text('promotion_description')->nullable();
            $table->string('alias')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
