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
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('nip', 20)->unique();
            $table->string('email', 100)->unique();
            $table->string('tanggal_lahir');
            $table->string('jenis_kelamin', 1)->comment('L=Laki-laki, P=Perempuan');
            $table->text('alamat')->nullable();
            $table->text('no_hp', 20);
             $table->string('gambar', 255)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};
