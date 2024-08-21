<?php namespace Satriasp\PaketBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSatriaspPaketbuilderTujuan extends Migration
{
    public function up()
    {
        Schema::table('satriasp_paketbuilder_tujuan', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('satriasp_paketbuilder_tujuan', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
