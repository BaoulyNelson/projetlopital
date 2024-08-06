<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id(); // Ajoute une colonne 'id' auto-incrémentée
            $table->string('type'); // Colonne pour le type de contenu
            $table->string('title'); // Colonne pour le titre du contenu
            $table->string('subtitle')->nullable(); // Colonne pour le sous-titre, nullable
            $table->text('description')->nullable(); // Colonne pour la description, nullable
            $table->string('button_text')->nullable(); // Colonne pour le texte du bouton, nullable
            $table->text('content')->nullable(); // Colonne pour le contenu, nullable
            $table->timestamps(); // Colonne pour les timestamps 'created_at' et 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
