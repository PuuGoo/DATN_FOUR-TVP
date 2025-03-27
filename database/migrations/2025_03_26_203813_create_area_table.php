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
        Schema::create('province', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
        });
        Schema::create('district', function (Blueprint $table) {
            $table->id();
            $table->foreignId('province_id')->constrained('province')->onDelete('restrict');
            $table->string('name',255);
        });
        Schema::create('wards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('district_id')->constrained('district')->onDelete('restrict');
            $table->string('name',255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::dropIfExists('province');
        Schema::dropIfExists('district');
        Schema::dropIfExists('wards');

        Schema::enableForeignKeyConstraints();
    }
};
