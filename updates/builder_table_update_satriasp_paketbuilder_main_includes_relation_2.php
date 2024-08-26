<?php namespace Satriasp\PaketBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSatriaspPaketbuilderMainIncludesRelation2 extends Migration
{
    public function up()
    {
        Schema::table('satriasp_paketbuilder_main_includes_relation', function($table)
        {
            $table->dropPrimary(['includes_id','main_id']);
            $table->renameColumn('main_id', 'package_id');
            $table->primary(['includes_id','package_id'], 'pk_includes_id_package_id');
        });
    }
    
    public function down()
    {
        Schema::table('satriasp_paketbuilder_main_includes_relation', function($table)
        {
            $table->dropPrimary(['includes_id','package_id']);
            $table->renameColumn('package_id', 'main_id');
            $table->primary(['includes_id','main_id'], 'pk_includes_id_package_id');
        });
    }
}
