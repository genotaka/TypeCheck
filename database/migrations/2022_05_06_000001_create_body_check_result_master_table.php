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
        Schema::create('body_check_result_masters', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->tinyInteger('pear');
            $table->tinyInteger('apple');
            $table->tinyInteger('peanuts');
            $table->tinyInteger('pineapple');
            $table->string('body_result');
            $table->softDeletesTz($column = 'deleted_at', $precision = 0);
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
        Schema::dropIfExists('body_check_result_masters');
    }
};
