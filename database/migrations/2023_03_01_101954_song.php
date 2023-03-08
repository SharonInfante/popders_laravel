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
            $table->integer('id_coder');
            $table->string('title');
            $table->string('artist');
            $table->string('genre');
            $table->string('url');
            $table->string('avatar');
            $table->boolean('status');
            $table->timestamps();
            $table->foreignId('id_user')->constrained('users');
            //$table->foreign('id_user')->references('id_email')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
