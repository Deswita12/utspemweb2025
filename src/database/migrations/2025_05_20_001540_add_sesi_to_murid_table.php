<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
{
    Schema::table('murid', function (Blueprint $table) {
        $table->string('sesi')->nullable(); // atau tanpa nullable jika wajib diisi
    });
}

public function down(): void
{
    Schema::table('murid', function (Blueprint $table) {
        $table->dropColumn('sesi');
    });
}

};
