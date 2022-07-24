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
        Schema::create('body_masters', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('sort_no')->unique();
            $table->tinyInteger('display_sort_no')->unique();
            $table->string('body_name');
            $table->string('description');
            $table->text('feature_contents');
            $table->text('cause_contents');
            $table->text('improvement_contents');
            $table->string('mark_path');
            $table->string('image_path');
            $table->string('food');
            $table->string('drink');
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
        Schema::dropIfExists('body_masters');
    }
};
