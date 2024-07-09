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
        Schema::create('table_pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255);
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->date('birth_date');
            $table->text('address');
            $table->string('telepon', 20);
            $table->string('email', 255)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_pasien');
    }
};
