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
            $table->integer('ptsg')->nullable();
            $table->integer('ptsi1')->nullable();
            $table->integer('ptsi2')->nullable();
            $table->integer('ptsab')->nullable();
            $table->integer('totalj1')->nullable();



            $table->integer('apuesta3');
            $table->integer('apuesta4');
            $table->integer('ptsg2')->nullable();
            $table->integer('ptsi3')->nullable();
            $table->integer('ptsi4')->nullable();
            $table->integer('ptsab2')->nullable();
            $table->integer('totalj2')->nullable();

            $table->integer('apuesta5');
            $table->integer('apuesta6');
            $table->integer('ptsg3')->nullable();
            $table->integer('ptsi5')->nullable();
            $table->integer('ptsi6')->nullable();
            $table->integer('ptsab3')->nullable();
            $table->integer('totalj3')->nullable();

            $table->integer('apuesta7');
            $table->integer('apuesta8');
            $table->integer('ptsg4')->nullable();
            $table->integer('ptsi7')->nullable();
            $table->integer('ptsi8')->nullable();
            $table->integer('ptsab4')->nullable();
            $table->integer('totalj4')->nullable();


            $table->integer('apuesta9');
            $table->integer('apuesta10');
            $table->integer('ptsg5')->nullable();
            $table->integer('ptsi9')->nullable();
            $table->integer('ptsi10')->nullable();
            $table->integer('ptsab5')->nullable();
            $table->integer('totalj5')->nullable();


            $table->integer('apuesta11');
            $table->integer('apuesta12');
            $table->integer('ptsg6')->nullable();
            $table->integer('ptsi11')->nullable();
            $table->integer('ptsi12')->nullable();
            $table->integer('ptsab6')->nullable();
            $table->integer('totalj6')->nullable();

            $table->integer('apuesta13');
            $table->integer('apuesta14');
            $table->integer('ptsg7')->nullable();
            $table->integer('ptsi13')->nullable();
            $table->integer('ptsi14')->nullable();
            $table->integer('ptsab7')->nullable();
            $table->integer('totalj7')->nullable();

            $table->integer('apuesta15');
            $table->integer('apuesta16');
            $table->integer('ptsg8')->nullable();
            $table->integer('ptsi15')->nullable();
            $table->integer('ptsi16')->nullable();
            $table->integer('ptsab8')->nullable();
            $table->integer('totalj8')->nullable();


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
