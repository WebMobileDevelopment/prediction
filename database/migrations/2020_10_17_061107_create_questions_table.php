<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->foreignId('match_id')->constrained('matchs')->onDelete('cascade');
            $table->bigInteger('player1_id')->nullable();
            $table->bigInteger('player2_id')->nullable();
            $table->integer('prize')->default(100);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("questions", function ($table) {
            $table->dropForeign(['player2_id']);
            $table->dropForeign(['player1_id']);
            $table->dropForeign(['match_id']);
            $table->dropSoftDeletes();
        });
        Schema::dropIfExists('questions');
    }
}
