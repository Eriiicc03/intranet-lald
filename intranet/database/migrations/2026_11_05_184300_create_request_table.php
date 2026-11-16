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
        Schema::create('request', function (Blueprint $table) {
            $table->foreignId('user_id')
                ->constrained('family', 'user_id')
                ->cascadeOnDelete();
            $table->foreignId('id_service')
                ->constrained('service', 'id_service')
                ->cascadeOnDelete();
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
            $table->text('observations')->nullable();
            $table->timestamps();

            $table->primary(['user_id', 'id_service']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request');
    }
};
