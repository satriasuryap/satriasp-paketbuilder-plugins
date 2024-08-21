<?php namespace Satriasp\PaketBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatriaspPaketbuilderExcludes extends Migration
{
    public function up()
    {
        Schema::create('satriasp_paketbuilder_excludes', function($table)
        {
            $table->increments('id');
            $table->string('excludes');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satriasp_paketbuilder_excludes');
    }
}
