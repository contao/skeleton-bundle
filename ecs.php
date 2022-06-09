<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Comment\HeaderCommentFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->sets([__DIR__.'/tools/ecs/vendor/contao/easy-coding-standard/config/contao.php']);

    $ecsConfig->ruleWithConfiguration(HeaderCommentFixer::class, [
        'header' => "This file is part of [package name].\n\n(c) John Doe\n\n@license LGPL-3.0-or-later"
    ]);

    if (PHP_VERSION_ID < 80000) {
        $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\ControlStructure\TrailingCommaInMultilineFixer::class, ['elements' => ['arrays'], 'after_heredoc' => true]);
        $ecsConfig->skip([\PhpCsFixer\Fixer\PhpUnit\PhpUnitExpectationFixer::class]); // see https://github.com/symplify/symplify/issues/3130
    }

    // Adjust the configuration according to your needs.
};
