<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('restaurantes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('activo')->default(true);
            $table->string('descripcion')->nullable();
            $table->string('imagen_ruta')->nullable();
            $table->string('nombre');
            $table->bigInteger('paquete_id')->unsigned();
            $table->string('ruta')->index();
            $table->bigInteger('usuario_id')->unsigned();
            $table->foreign('paquete_id')->references('id')->on('paquetes');
            $table->foreign('usuario_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('restaurantes');
    }

}
