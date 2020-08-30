<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_entreprises', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nomEntreprise');
            $table->string('adresse');
            $table->string('email');
            $table->string('telephone');
            $table->string('ninea');
            $table->string('registreCom');
            $table->string('raisonSociale');
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
        Schema::dropIfExists('client_entreprises');
    }
}
