<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlatillosopcionesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('platillosopciones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('opcion');
            $table->decimal('precio', 8, 2);
            $table->bigInteger('platillo_id')->unsigned();
            $table->foreign('platillo_id')->references('id')->on('platillos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('platillosopciones');
    }

}
