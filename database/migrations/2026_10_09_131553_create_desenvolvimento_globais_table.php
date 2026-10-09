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
        Schema::create('desenvolvimento_globais', function (Blueprint $table) {
            $table->id();
            $table->boolean('demorou_sentar')->nullable();
            $table->boolean('demorou_andar')->nullable();
            $table->text('obs')->nullable();
            $table->text('desen_linguagem')->nullable();
            $table->text('desen_cognitivo')->nullable();
            $table->text('cognitivo_problemas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desenvolvimento_globais');
    }
};
