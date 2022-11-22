<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultados', function (Blueprint $table) {
            $table->id();
            $table->string('resultado1')->nullable();
            $table->string('resultado2')->nullable();
            $table->string('resultado3')->nullable();
            $table->string('resultado4')->nullable();
            $table->string('resultado5')->nullable();
            $table->string('resultado6')->nullable();
            $table->string('resultado7')->nullable();
            $table->string('resultado8')->nullable();
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
        Schema::dropIfExists('resultados');
    }
};
