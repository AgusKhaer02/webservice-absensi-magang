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
        Schema::create('progress', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pekerjaan')->nullable();
            $table->text('catatan');
            $table->string('foto_dokumentasi');
            $table->string('trainer');
            $table->enum('status',['0','1'])->default('0');
            $table->timestamps();

            $table->foreign('id_pekerjaan')->references('id')->on('pekerjaan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progress');
    }
};
