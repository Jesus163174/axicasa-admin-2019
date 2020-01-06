<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInmueblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',150)->nullable(false);
            $table->text('descripcion')->nullable(false);
            $table->string('portada',150)->nullable();
            $table->enum('estatus',['inactivo','activo','vendido'])->default('registro');

            $table->integer('tipo_inmueble')->unsigned()->nullable();
            $table->integer('numero_habitaciones')->nullable();
            $table->double('numero_baños')->nullable();
            $table->integer('numero_pisos')->nullable();
            $table->integer('nivel_departamento')->nullable();
            $table->enum('tipo_venta',['renta','compra'])->nullable();
            $table->double('costo')->nullable();
            $table->double('area')->nullable();
            $table->integer('anio_construccion')->nullable();
            $table->integer('colonia_id')->unsigned()->nullable();

            $table->foreign('colonia_id')->references('id')->on('colonias');
            $table->foreign('tipo_inmueble')->references('id')->on('tipo_inmuebles');

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
        Schema::dropIfExists('inmuebles');
    }
}
