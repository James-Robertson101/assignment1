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
        Schema::create('openings', function (Blueprint $table) {
            $table->id(); // Primary key (auto-increment)
            $table->string('name'); // Opening name
            $table->string('eco_code')->nullable(); // ECO code like "C60"
            $table->text('pgn'); // PGN move sequence
            $table->text('description')->nullable(); // Optional notes
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('openings');
    }
};
