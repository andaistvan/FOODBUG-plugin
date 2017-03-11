<?php namespace Arteriaweb\Foodbug\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateUnitsTable extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_foodbug_units', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('unit_title');
            $table->string('slug');
        });
    }

    public function down()
    {
        Schema::dropIfExists('arteriaweb_foodbug_units');
    }
}
