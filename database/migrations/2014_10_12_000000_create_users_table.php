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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('u_email')->unique();
            // $table->string('u_uname');
            $table->string('u_password');
            $table->unsignedBigInteger('role_id');
            $table->string('f_name');
            $table->string('m_name');
            $table->string('l_name');
            $table->string('number');
            $table->string('designation');
            $table->string('address');
            $table->string('state');
            $table->string('city');
            $table->string('pincode');
            $table->string('ip_address');
            $table->rememberToken();
            $table->boolean('is_active')->default(true);
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
};
