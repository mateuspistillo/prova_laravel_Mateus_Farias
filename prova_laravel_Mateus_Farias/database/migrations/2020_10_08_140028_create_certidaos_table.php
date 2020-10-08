<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertidaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certidaos', function (Blueprint $table) {
            $table->id();
            $table->string('tipoCertidao');
            $table->string('nmEnvolvido1');
            $table->string('nmEnvolvido2');
            $table->string('dtCertidao');
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
        Schema::dropIfExists('certidaos');
    }
}
