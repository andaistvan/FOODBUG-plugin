<?php namespace Arteriaweb\Foodbug\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateAnimalsTable extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_foodbug_animals', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('slug');
        });

        Schema::create('arteriaweb_foodbug_animals_details', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('animal_id')->unsigned();
            $table->integer('detail_id')->unsigned();
            $table->primary(['animal_id','detail_id'], 'animal_detail');
        });

        Schema::create('arteriaweb_foodbug_details_groups', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('animal_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->primary(['animal_id','group_id'], 'animal_group');
        });
    }

    public function down()
    {
        Schema::dropIfExists('arteriaweb_foodbug_animals');
    }
}
