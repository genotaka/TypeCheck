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
        Schema::create('type_check_result_masters', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->tinyInteger('soul_plus');
            $table->tinyInteger('soul_minus');
            $table->tinyInteger('blood_plus');
            $table->tinyInteger('blood_minus');
            $table->tinyInteger('water_plus');
            $table->tinyInteger('water_minus');
            $table->tinyInteger('heat_plus');
            $table->tinyInteger('heat_minus');
            $table->string('type_result');
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
        Schema::dropIfExists('type_check_result_masters');
    }
};
