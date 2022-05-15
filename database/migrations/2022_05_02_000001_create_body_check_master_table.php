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
        Schema::create('body_check_masters', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->tinyInteger('sort_no')->unique();
            $table->tinyInteger('pear');
            $table->tinyInteger('apple');
            $table->tinyInteger('peanuts');
            $table->tinyInteger('pineapple');
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
        Schema::dropIfExists('body_check_masters');
    }
};
