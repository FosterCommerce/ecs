<?php

declare(strict_types=1);

use fostercommerce\ecs\Configure;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    Configure::configure($ecsConfig);
    $ecsConfig->paths([
        __DIR__ . '/sets',
        __DIR__ . '/src',
        __FILE__,
    ]);
};
