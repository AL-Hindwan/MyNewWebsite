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
        // Modify news table image column
        Schema::table('newss_tabel', function (Blueprint $table) {
            $table->longText('image')->nullable()->change();
        });

        // Modify services table icon column
        Schema::table('servicess_tabel', function (Blueprint $table) {
            $table->longText('icon')->nullable()->change();
        });

        // Modify medical staff table image column
        Schema::table('_medical_staffs_tabel', function (Blueprint $table) {
            $table->longText('image')->nullable()->change();
        });

        // Modify about us table image column
        Schema::table('_about_uss', function (Blueprint $table) {
            $table->longText('image')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Revert news table image column
        Schema::table('newss_tabel', function (Blueprint $table) {
            $table->string('image')->nullable()->change();
        });

        // Revert services table icon column
        Schema::table('servicess_tabel', function (Blueprint $table) {
            $table->string('icon')->nullable()->change();
        });

        // Revert medical staff table image column
        Schema::table('_medical_staffs_tabel', function (Blueprint $table) {
            $table->string('image')->nullable()->change();
        });

        // Revert about us table image column
        Schema::table('_about_uss', function (Blueprint $table) {
            $table->string('image')->nullable()->change();
        });
    }
};
