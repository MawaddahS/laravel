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
        Schema::create('jadwalmatakuliahh', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('maahasiswaa_id');
            $table->foreign('maahasiswaa_id')->references(columns:'id')->on(table: 'maahasiswaa');
            $table->unsignedBigInteger('prodi_id');
            $table->foreign('prodi_id')->references(columns:'id')->on(table:'prodi');
            $table->unsignedBigInteger('matakuliah_id');
            $table->foreign('matakuliah_id')->references(columns: 'id')->on(table: 'matakuliah');

            $table->string('ruangan');
            $table->time('jam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwalmatakuliahh');
    }
};
