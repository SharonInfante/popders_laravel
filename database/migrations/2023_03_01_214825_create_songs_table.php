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
        Schema::create('songs', function (Blueprint $table) {
            $table->id('id_song');
            $table->unsignedBigInteger('id_user')->nullable()->default(null);
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->string('title');
            $table->string('artist');
            $table->string('genre');
            $table->string('url');
            $table->string('image');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
?>