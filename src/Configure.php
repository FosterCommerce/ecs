<?php

declare(strict_types=1);

namespace fostercommerce\ecs;

use PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\AssignmentInConditionSniff;
use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

class Configure
{
    public static function configure(ECSConfig $ecsConfig): void
    {
        $ecsConfig->parallel();

        $ecsConfig->sets([
            SetList::ARRAY,
            SetList::COMMENTS,
            SetList::CONTROL_STRUCTURES,
            SetList::DOCBLOCK,
            SetList::NAMESPACES,
            SetList::PHPUNIT,
            SetList::SPACES,
            SetList::STRICT,
            SetList::CLEAN_CODE,
            SetList::PSR_12,
        ]);

        $ecsServices = $ecsConfig->services();
        $ecsServices->remove(DeclareStrictTypesFixer::class);
        $ecsServices->remove(AssignmentInConditionSniff::class);
    }
}
