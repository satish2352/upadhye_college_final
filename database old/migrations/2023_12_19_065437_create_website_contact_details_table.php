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
        Schema::create('website_contact_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('contact_one');
            $table->string('contact_two');
            $table->string('mail_id');
            $table->string('facebook_link');
            $table->string('instagram_link');
            $table->text('address');
            $table->string('is_deleted')->default(false);
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
        Schema::dropIfExists('website_contact_details');
    }
};
