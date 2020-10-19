<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateConstraints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('questions', function ($table) {
            $table->softDeletes();
            // $table->foreignId('match_id')->constrained('matchs')->onDelete('cascade');
        });
        Schema::table('league_teams', function ($table) {
            $table->softDeletes();
            // $table->foreignId('league_id')->constrained('leagues')->onDelete('cascade');
        });
        Schema::table('matchs', function ($table) {
            $table->softDeletes();
            // $table->foreignId('league_id')->constrained('leagues')->onDelete('cascade');
        });
        Schema::table('players', function ($table) {
            $table->softDeletes();
            // $table->foreignId('team_id')->constrained('teams')->onDelete('cascade');
        });
        Schema::table('teams', function ($table) {
            $table->softDeletes();
            // $table->foreignId('game_id')->constrained('games')->onDelete('cascade');
        });
        Schema::table('leagues', function ($table) {
            $table->softDeletes();
            // $table->foreignId('game_id')->constrained('games')->onDelete('cascade');
        });
        Schema::table('menus', function ($table) {
            $table->softDeletes();
            // $table->foreignId('menu_id')->constrained('menus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('constraints');
    }
}
