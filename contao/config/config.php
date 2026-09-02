<?php

use App\Model\TechnologyModel;

$GLOBALS['BE_MOD']['content']['technologies'] = [
    'tables' => ['tl_technology'],
];

$GLOBALS['TL_MODELS']['tl_technology'] = TechnologyModel::class;
