<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idmedecin')->constrained('medecins');
            $table->foreignId('idpatient')->constrained('patients');
            $table->double('poids');
            $table->double('hauteur');
            $table->text('diagnostique');
            $table->date('date_consultation');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('consultations');
    }
}
