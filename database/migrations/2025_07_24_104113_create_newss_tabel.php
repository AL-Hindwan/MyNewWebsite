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
    
        Schema::create('newss_tabel', function (Blueprint $table) {
    $table->id();
    $table->string('title');       // عنوان الخبر
    $table->text('content');       // محتوى الخبر
    $table->text('summary');
    $table->string('image')->nullable(); // صورة للخبر
    $table->timestamp('published_at');   // وقت النشر
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
        Schema::dropIfExists('newss_tabel');
    }
};
