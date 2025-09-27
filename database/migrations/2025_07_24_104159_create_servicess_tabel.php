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
    
        Schema::create('servicess_tabel', function (Blueprint $table) {
    $table->id();
    $table->string('title');       // اسم التخصص
    $table->text('description');  // الوصف
     $table->text('details'); 
    $table->string('icon')->nullable();  // أيقونة أو صورة
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
        Schema::dropIfExists('servicess_tabel');
    }
};
