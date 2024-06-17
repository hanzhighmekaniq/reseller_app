<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('no_wa')->nullable();
            $table->string('password');
            $table->enum('role', ['pemilik', 'bos', 'anggota'])->default('anggota');
            $table->unsignedBigInteger('bos_id')->nullable(); // Bos ID untuk anggota
            $table->foreign('bos_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('foto');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
