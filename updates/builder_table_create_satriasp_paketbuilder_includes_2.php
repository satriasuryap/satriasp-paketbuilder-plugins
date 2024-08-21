<?php namespace Satriasp\PaketBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatriaspPaketbuilderIncludes2 extends Migration
{
    public function up()
    {
        Schema::create('satriasp_paketbuilder_includes', function($table)
        {
            $table->increments('id');
            $table->string('includes');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satriasp_paketbuilder_includes');
    }
}
