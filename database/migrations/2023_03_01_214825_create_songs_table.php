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
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->string('title');
            $table->string('artist');
            $table->string('genre');
            $table->string('url');
            $table->string('image');
            $table->boolean('status');
            $table->timestamps();
<<<<<<<< HEAD:database/migrations/2023_03_01_101954_song.php
            $table->foreignId('id_user')->constrained('users');
            //$table->foreign('id_user')->references('id_email')->on('users');
========
>>>>>>>> 320000b8a4333f5990bd4b236930c687c9283583:database/migrations/2023_03_01_214825_create_songs_table.php
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