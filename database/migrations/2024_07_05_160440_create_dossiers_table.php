<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossiersTable extends Migration
{
    public function up()
    {
        Schema::create('dossiers', function (Blueprint $table) {
            $table->id();
            $table->string('code', 50)->unique();
            $table->foreignId('idconsultation')->constrained('consultations');
            $table->date('date_enregistrement');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dossiers');
    }
}
