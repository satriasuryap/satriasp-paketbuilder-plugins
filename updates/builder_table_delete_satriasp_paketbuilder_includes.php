<?php namespace Satriasp\PaketBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteSatriaspPaketbuilderIncludes extends Migration
{
    public function up()
    {
        Schema::dropIfExists('satriasp_paketbuilder_includes');
    }
    
    public function down()
    {
        Schema::create('satriasp_paketbuilder_includes', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('includes', 255);
            $table->string('excludes', 255);
        });
    }
}
