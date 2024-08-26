<?php namespace Satriasp\PaketBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatriaspPaketbuilderMainIncludesRelation extends Migration
{
    public function up()
    {
        Schema::create('satriasp_paketbuilder_main_includes_relation', function($table)
        {
            $table->integer('includes_id');
            $table->integer('main_id');
            $table->primary(['includes_id','main_id'], 'pk_includes_id_main_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satriasp_paketbuilder_main_includes_relation');
    }
}
