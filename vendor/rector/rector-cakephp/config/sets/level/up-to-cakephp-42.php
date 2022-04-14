<?php

declare (strict_types=1);
namespace RectorPrefix20220414;

use Rector\CakePHP\Set\CakePHPLevelSetList;
use Rector\CakePHP\Set\CakePHPSetList;
use Rector\Config\RectorConfig;
return static function (\Rector\Config\RectorConfig $rectorConfig) : void {
    $rectorConfig->import(\Rector\CakePHP\Set\CakePHPSetList::CAKEPHP_42);
    $rectorConfig->import(\Rector\CakePHP\Set\CakePHPLevelSetList::UP_TO_CAKEPHP_41);
};
