<?php

namespace App\Model;

use Contao\Model;
use Contao\Model\Collection;

class ProjectModel extends Model
{
    protected static $strTable = 'tl_project';

    /** @return Collection<ProjectModel>|null */
    public static function findPublished(): ?Collection
    {
        return static::findBy('published', true, [
            'order' => 'date DESC',
        ]);
    }
}
