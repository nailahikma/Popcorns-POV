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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->longText('trailer')->nullable();
            $table->string('cover')->nullable();
            $table->string('bg')->nullable();
            $table->string('title');
            $table->string('title_img')->nullable();
            $table->string('year')->nullable();
            $table->string('duration')->nullable();
            $table->integer('id_platform')->nullable();
            $table->longText('desc')->nullable();
            $table->enum('rating', ['SU', '+7', '+13', '+17', '+21'])->nullable();
            $table->integer('id_genre')->nullable();
            $table->string('director')->nullable();
            $table->integer('id_cast')->nullable();
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
