<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('typeCompte');
            $table->integer('NumeroCompte');
            $table->integer('CleRib');
            $table->text('EtatCompte');
            $table->double('DepotInitial');
            $table->date('DateOuverture');
            $table->integer('client_entreprises_id')->unsigned();
            $table->foreign('client_entreprises_id')->references('id')->on('client_entreprises');

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
        Schema::dropIfExists('comptes');
    }
}
