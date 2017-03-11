<?php namespace Arteriaweb\Foodbug\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateAnimalgrouppivotsTable extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_foodbug_animalgrouppivots', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('arteriaweb_foodbug_animalgrouppivots');
    }
}
