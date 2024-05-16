<?php

declare(strict_types=1);

use craft\ecs\SetList as CraftSetList;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function(ECSConfig $ecsConfig): void {
    $ecsConfig->sets([
        CraftSetList::CRAFT_CMS_4,
    ]);
};