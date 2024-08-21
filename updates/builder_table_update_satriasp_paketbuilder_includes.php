<?php namespace Satriasp\PaketBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSatriaspPaketbuilderIncludes extends Migration
{
    public function up()
    {
        Schema::table('satriasp_paketbuilder_includes', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('satriasp_paketbuilder_includes', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
