<?php namespace Satriasp\PaketBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatriaspPaketbuilderMainIncludesRelation extends Migration
{
    public function up()
    {
        Schema::create('satriasp_paketbuilder_main_includes_relation', function($table)
        {
            $table->integer('include_id');
            $table->integer('main_id');
            $table->primary(['include_id','main_id'], 'pk_include_id_main_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satriasp_paketbuilder_main_includes_relation');
    }
}
