<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedecinsTable extends Migration
{
    public function up()
    {
        Schema::create('medecins', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 50);
            $table->string('prenom', 50);
            $table->string('sexe', 8);
            $table->string('tel', 20);
            $table->string('adresse', 100);
            $table->string('email', 50)->unique();
            $table->string('specialite', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('medecins');
    }
}
