<?php namespace Arteriaweb\Foodbug\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateGroupsTable extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_foodbug_groups', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('group_title');
            $table->string('slug');
        });
    }

    public function down()
    {
        Schema::dropIfExists('arteriaweb_foodbug_groups');
    }
}
