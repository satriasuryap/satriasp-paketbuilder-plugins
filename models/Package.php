<?php namespace Satriasp\PaketBuilder\Models;

use Model;

/**
 * Model
 */
class Package extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'satriasp_paketbuilder_main';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];


    public $belongsToMany = [
        'includes' => [
            'Satriasp\Paketbuilder\Models\Includes',
            'table' => 'satriasp_paketbuilder_main_includes_relation',
            'order' => 'includes'
        ],
        'tujuan' => [
            'Satriasp\Paketbuilder\Models\Tujuan',
            'table' => 'satriasp_paketbuilder_main_tujuan_relation',
            'order' => 'tujuan'
        ],
        'excludes' => [
            'Satriasp\Paketbuilder\Models\Excludes',
            'table' => 'satriasp_paketbuilder_main_excludes_relation',
            'order' => 'excludes'
        ]
    ];
    
    public $attachOne = [
        'gambar' => 'System\Models\File'
    ];

}
