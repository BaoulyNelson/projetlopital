<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameArticlesTables extends Migration
{
    public function up()
    {
        Schema::rename('a_la_une_articles', 'a_la_une');
        Schema::rename('a_la_minute_articles', 'a_la_minute');
        Schema::rename('annonce_articles', 'annonces');
        Schema::rename('culture_articles', 'culture');
        Schema::rename('economie_articles', 'economie');
        Schema::rename('sport_articles', 'sport');
        Schema::rename('editorial_articles', 'editorial');
        Schema::rename('national_articles', 'national');
        Schema::rename('opinions_articles', 'opinions');
        Schema::rename('societe_articles', 'societe');
    }

    public function down()
    {
        Schema::rename('a_la_une', 'a_la_une_articles');
        Schema::rename('a_la_minute', 'a_la_minute_articles');
        Schema::rename('annonces', 'annonce_articles');
        Schema::rename('culture', 'culture_articles');
        Schema::rename('economie', 'economie_articles');
        Schema::rename('sport', 'sport_articles');
        Schema::rename('editorial', 'editorial_articles');
        Schema::rename('national', 'national_articles');
        Schema::rename('opinions', 'opinions_articles');
        Schema::rename('societe', 'societe_articles');
    }
}

