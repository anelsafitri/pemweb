<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penggunas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('password');
            $table->enum('role', ['admin', 'dokter']);
            $table->timestamps();  // <-- timestamps di sini
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penggunas');
    }
};
