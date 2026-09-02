<?php

use Contao\DataContainer;
use Contao\DC_Table;

$GLOBALS['TL_DCA']['tl_project'] = [
    'config' => [
        'dataContainer' => DC_Table::class,
        'enableVersioning' => true,
        'ctable' => ['tl_content'],
        'sql' => [
            'keys' => [
                'id' => 'primary',
                'title' => 'unique',
                'slug' => 'unique',
            ],
        ],
    ],
    'list' => [
        'sorting' => [
            'mode' => DataContainer::MODE_SORTED,
            'fields' => ['date DESC'],
            'flag' => DataContainer::SORT_DAY_DESC,
        ],
        'label' => [
            'fields' => ['title'],
            'format' => '%s',
        ],
        'operations' => [
            'edit',
            'children',
            'copy',
            'cut',
            'delete',
            'toggle' => [
                'href' => 'act=toggle&amp;field=published',
                'icon' => 'visible.svg',
                'primary' => true,
            ],
            'show',
            'versions',
        ],
    ],
    'palettes' => [
        'default' => '{title_legend},title,slug;'
            . '{description_legend},shortDescription;'
            . '{image_legend},mainImage;'
            . '{links_legend},projectUrl,githubUrl;'
            . '{date_legend},date;'
            . '{publish_legend},published',
    ],
    'fields' => [
        'id' => [
            'sql' => [
                'type' => 'integer',
                'unsigned' => true,
                'autoincrement' => true,
            ],
        ],
        'tstamp' => [
            'sql' => [
                'type' => 'integer',
                'unsigned' => true,
                'default' => 0,
            ],
        ],
        'title' => [
            'inputType' => 'text',
            'eval' => [
                'mandatory' => true,
                'maxlength' => 255,
                'unique' => true,
                'doNotCopy' => true,
            ],
            'sql' => [
                'type' => 'string',
                'length' => 255,
                'default' => '',
            ],
        ],
        'slug' => [
            'inputType' => 'text',
            'eval' => [
                'rgxp' => 'alias',
                'mandatory' => true,
                'maxlength' => 255,
                'unique' => true,
                'doNotCopy' => true,
            ],
            'sql' => [
                'type' => 'string',
                'length' => 255,
                'default' => '',
            ],
        ],
        'shortDescription' => [
            'inputType' => 'textarea',
            'eval' => [
                'mandatory' => true,
                'maxlength' => 500,
            ],
            'sql' => [
                'type' => 'string',
                'length' => 500,
                'default' => '',
            ],
        ],
        'mainImage' => [
            'inputType' => 'fileTree',
            'eval' => [
                'filesOnly' => true,
                'fieldType' => 'radio',
                'extensions' => '%contao.image.valid_extensions%',
                'mandatory' => true,
            ],
            'sql' => [
                'type' => 'binary',
                'length' => 16,
                'notnull' => false,
            ],
        ],
        'projectUrl' => [
            'inputType' => 'text',
            'eval' => [
                'rgxp' => 'url',
                'decodeEntities' => true,
                'maxlength' => 2048,
            ],
            'sql' => [
                'type' => 'text',
                'notnull' => false,
            ],
        ],
        'githubUrl' => [
            'inputType' => 'text',
            'eval' => [
                'rgxp' => 'url',
                'decodeEntities' => true,
                'maxlength' => 2048,
            ],
            'sql' => [
                'type' => 'text',
                'notnull' => false,
            ],
        ],
        'date' => [
            'inputType' => 'text',
            'eval' => [
                'mandatory' => true,
                'rgxp' => 'date',
                'datepicker' => true,
            ],
            'sql' => [
                'type' => 'integer',
                'unsigned' => true,
                'default' => 0,
            ],
        ],
        'published' => [
            'inputType' => 'checkbox',
            'eval' => [
                'doNotCopy' => true,
                'toggle' => true,
            ],
            'sql' => [
                'type' => 'boolean',
                'default' => false,
            ],
        ],
    ],
];
