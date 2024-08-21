<?php namespace Satriasp\PaketBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateSatriaspPaketbuilderMain extends Migration
{
    public function up()
    {
        Schema::table('satriasp_paketbuilder_main', function($table)
        {
            $table->dropColumn('gambar');
        });
    }
    
    public function down()
    {
        Schema::table('satriasp_paketbuilder_main', function($table)
        {
            $table->string('gambar', 255);
        });
    }
}
