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
     
        Schema::create('_about_uss', function (Blueprint $table) {
    $table->id();
    $table->text('content');      // المحتوى النصي "من نحن"
    $table->string('image')->nullable(); // صورة اختيارية
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
        Schema::dropIfExists('_about_uss');
    }
};
