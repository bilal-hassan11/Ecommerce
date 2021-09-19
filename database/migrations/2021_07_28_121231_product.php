<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
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
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->bigInteger('price')->nullable();
            $table->bigInteger('quantity')->nullable();
            $table->string('size')->nullable();
            $table->string('product_company')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->string('type')->nullable();
            $table->string('weight')->nullable();
            $table->string('product_code')->nullable();
            $table->string('status')->nullable();
            $table->string('parent_category')->nullable();
            $table->string('sub_category')->nullable();
            $table->string('description')->nullable();
            $table->softDeletes('deleted_at')->nullable();
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

    }
}
