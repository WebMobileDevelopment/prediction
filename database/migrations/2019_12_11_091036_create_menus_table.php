<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('href')->nullable();
            $table->string('icon')->nullable();
            $table->string('slug');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreignId('menu_id')->constrained('menus')->onDelete('cascade');
            $table->integer('sequence'); 
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
        Schema::table("menus", function ($table) {
            $table->dropSoftDeletes();
        });
        Schema::dropIfExists('menus');
    }
}
