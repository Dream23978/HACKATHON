<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('logins', function (Blueprint $table) {
            $table->id();
            $table->string("username");
            $table->string("password");
            $table->string('pilih_provinsi')-> nullable()-> default('prov_null');
            $table->string('pilih_rumah_sakit')-> nullable()-> default('rs_null');
            $table->string('pilih_poli')-> nullable()-> default('poli_null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logins');
    }
};
