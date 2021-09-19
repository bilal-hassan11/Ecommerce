<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users',function (Blueprint $table){ 
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('nic')->nullable();
            $table->bigInteger('postal_code')->nullable();
            $table->string('address')->nullable();
            $table->string('created_by')->nullable();
            $table->enum('skills',['salesman','accountant','supplier','designer','marketing','others'])->default('others');
            $table->enum('experience',['beginner','lessthan_one_year','one_year','two_year','three_year','morethan_three_year'])->default('beginner');
            $table->string('email_verified_at')->nullable();
            $table->string('activation_time')->nullable();
            $table->enum('status',['user','normal_user','vendor','employee'])->default('user');
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
        Schema::dropIfExists('users');
    }
}
