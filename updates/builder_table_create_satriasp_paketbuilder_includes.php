<?php namespace Satriasp\PaketBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatriaspPaketbuilderIncludes extends Migration
{
    public function up()
    {
        Schema::create('satriasp_paketbuilder_includes', function($table)
        {
            $table->increments('id');
            $table->string('includes');
            $table->string('excludes');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satriasp_paketbuilder_includes');
    }
}
