<?php

use App\Model\TechnologyModel;

$GLOBALS['BE_MOD']['content']['technologies'] = [
    'tables' => ['tl_technology'],
];

$GLOBALS['BE_MOD']['content']['projects'] = [
    'tables' => ['tl_project', 'tl_content'],
];

$GLOBALS['TL_MODELS']['tl_technology'] = TechnologyModel::class;
