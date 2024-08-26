<?php namespace Satriasp\PaketBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateSatriaspPaketbuilderMainExcludesRelation extends Migration
{
    public function up()
    {
        Schema::create('satriasp_paketbuilder_main_excludes_relation', function($table)
        {
            $table->integer('excludes_id');
            $table->integer('package_id');
            $table->primary(['excludes_id','package_id'], 'pk_excludes_id_package_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('satriasp_paketbuilder_main_excludes_relation');
    }
}
