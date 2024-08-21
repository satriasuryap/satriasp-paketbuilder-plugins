<?php namespace Satriasp\PaketBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSatriaspPaketbuilderMain2 extends Migration
{
    public function up()
    {
        Schema::table('satriasp_paketbuilder_main', function($table)
        {
            $table->string('slug');
            $table->string('status');
        });
    }
    
    public function down()
    {
        Schema::table('satriasp_paketbuilder_main', function($table)
        {
            $table->dropColumn('slug');
            $table->dropColumn('status');
        });
    }
}
