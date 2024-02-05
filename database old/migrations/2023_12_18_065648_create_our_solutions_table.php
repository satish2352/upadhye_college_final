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
        Schema::create('our_solutions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('solution_id');
            $table->text('title');
            $table->text('short_description');
            $table->text('long_description');
            $table->string('image')->default(false);
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
        Schema::dropIfExists('our_solutions');
    }
};
