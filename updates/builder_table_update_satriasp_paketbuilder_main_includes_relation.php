<?php namespace Satriasp\PaketBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSatriaspPaketbuilderMainIncludesRelation extends Migration
{
    public function up()
    {
        Schema::table('satriasp_paketbuilder_main_includes_relation', function($table)
        {
            $table->dropPrimary(['include_id','main_id']);
            $table->renameColumn('include_id', 'includes_id');
            $table->primary(['includes_id','main_id'], , 'pk_include_id_main_id');
        });
    }
    
    public function down()
    {
        Schema::table('satriasp_paketbuilder_main_includes_relation', function($table)
        {
            $table->dropPrimary(['includes_id','main_id']);
            $table->renameColumn('includes_id', 'include_id');
            $table->primary(['include_id','main_id'], , 'pk_include_id_main_id');
        });
    }
}
