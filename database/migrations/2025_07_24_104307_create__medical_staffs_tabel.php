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
      
        Schema::create('_medical_staffs_tabel', function (Blueprint $table) {
    $table->id();
    $table->string('name');       // اسم الطبيب
    $table->string('specialty');  // التخصص
    $table->text('bio');          // نبذة تعريفية
    $table->string('image')->nullable();      // صورة الطبيب
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
        Schema::dropIfExists('_medical_staffs_tabel');
    }
};
