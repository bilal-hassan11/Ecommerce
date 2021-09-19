<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Coupon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon',function (Blueprint $table){ 
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('coupon_code')->nullable();
            $table->enum('discount_type',['fixed','percent'])->default('fixed');
            $table->timestamp('start_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('end_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->bigInteger('discount_quantity')->nullable();
            $table->string('parent_category')->nullable();
            $table->string('sub_category')->nullable();
            $table->bigInteger('coupon_limit_per_quantity')->nullable();
            $table->bigInteger('coupon_limit_per_customer')->nullable();
            $table->bigInteger('max_order')->nullable();
            $table->bigInteger('min_order')->nullable();
            $table->string('created_by')->nullable();
            $table->enum('product_type',['physical','digital'])->default('physical');
            $table->enum('status',['enable','disable'])->default('enable');
            $table->enum('coupon_status',['expired','used','not_used'])->default('not_used');
            $table->enum('shipping_status',['allow','not_allow'])->default('allow');
            $table->timestamp('activation_time')->default(DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExist('coupon');
    }
}
