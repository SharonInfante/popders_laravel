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
        Schema::create('songs', function(Blueprint $table){
            $table->id_song();
            $table->id_users();
            $table->string('title');
            $table->string('artist');
            $table->string('genre');
            $table->string('url');
            $table->boolean('status');
            $table->longblob('img');
            $table->timestamps();
            $table->foreign('user_id')->references('id_song')->on('users');

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
