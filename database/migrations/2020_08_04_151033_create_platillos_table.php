<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatillosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('platillos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('alergenos')->default(false);
            $table->bigInteger('categoria_id')->unsigned();
            $table->string('descripcion')->nullable();
            $table->string('nombre');
            $table->decimal('precio', 8, 2);
            $table->bigInteger('restaurante_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('restaurante_id')->references('id')->on('restaurantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('platillos');
    }

}
