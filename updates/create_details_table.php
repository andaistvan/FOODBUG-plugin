<?php namespace Arteriaweb\Foodbug\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_foodbug_details', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->boolean('instore');
            $table->integer('price')->nullable();
        });

        //Relations ----
        Schema::create('arteriaweb_foodbug_details_packagings', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('detail_id')->unsigned();
            $table->integer('packaging_id')->unsigned();
            $table->primary(['detail_id','packaging_id'], 'detail_packaging');
        });

        Schema::create('arteriaweb_foodbug_details_sizes', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('detail_id')->unsigned();
            $table->integer('size_id')->unsigned();
            $table->primary(['detail_id','size_id'], 'detail_size');
        });

        Schema::create('arteriaweb_foodbug_details_units', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('detail_id')->unsigned();
            $table->integer('unit_id')->unsigned();
            $table->primary(['detail_id','unit_id'], 'detail_unit');
        });
    }

    public function down()
    {
        Schema::dropIfExists('arteriaweb_foodbug_details');
    }
}
