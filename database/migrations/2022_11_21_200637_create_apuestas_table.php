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
        Schema::create('apuestas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('is_active')->nullable()->default(1);
            $table->integer('apuesta1');
            $table->integer('apuesta2');
            $table->integer('apuesta3');
            $table->integer('apuesta4');
            $table->integer('apuesta5');
            $table->integer('apuesta6');
            $table->integer('apuesta7');
            $table->integer('apuesta8');
            $table->integer('total')->nullable()->default(0);

            $table->foreignId('id_resultado')->nullable()->constrained('resultados')->cascadeOnUpdate()->nullOnDelete();
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
        Schema::dropIfExists('apuestas');
    }
};
