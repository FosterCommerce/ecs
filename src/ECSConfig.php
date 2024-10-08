<?php

declare(strict_types=1);

namespace fostercommerce\ecs;

use PHP_CodeSniffer\Standards\Generic\Sniffs\CodeAnalysis\AssignmentInConditionSniff;
use PhpCsFixer\Fixer\Strict\DeclareStrictTypesFixer;
use PhpCsFixer\Fixer\Whitespace\IndentationTypeFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig as BaseECSConfig;
use Symplify\EasyCodingStandard\Configuration\ECSConfigBuilder;
use Symplify\EasyCodingStandard\ValueObject\Option;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

class ECSConfig
{
	public static function configure(): ECSConfigBuilder
	{
		return BaseECSConfig::configure()
			->withParallel()
			->withSets([
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
			])
			->withRules([IndentationTypeFixer::class])
			->withSpacing(indentation: Option::INDENTATION_TAB)
			->withSkip([
				DeclareStrictTypesFixer::class,
				AssignmentInConditionSniff::class,
			]);
	}
}
