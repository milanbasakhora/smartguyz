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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('about')->nullable();
            $table->string('team')->nullable();
            $table->string('blog')->nullable();
            $table->string('contact')->nullable();
            $table->string('gallery')->nullable();
            $table->string('notice')->nullable();
            $table->string('editorial')->nullable();
            $table->string('members')->nullable();
            $table->string('terms')->nullable();
            $table->string('privacy')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bg_images');
    }
};
