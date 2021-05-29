<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('razao_social', 50)->nullable(true);
            $table->string('nome_fantasia', 80)->nullable(true);
            $table->string('email', 50)->unique(true)->nullable(true);
            $table->string('cpf', 11)->unique(true)->nullable(true);
            $table->string('cnpj', 14)->unique(true)->nullable(true);
            $table->string('phone', 15);
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
