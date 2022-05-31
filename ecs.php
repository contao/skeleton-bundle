<?php

declare(strict_types=1);

use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
    $ecsConfig->sets([__DIR__.'/vendor/contao/easy-coding-standard/config/contao.php']);
    $ecsConfig->ruleWithConfiguration(\PhpCsFixer\Fixer\Comment\HeaderCommentFixer::class, [
        'header' => "This file is part of [package name].\n\n(c) John Doe\n\n@license LGPL-3.0-or-later"
    ]);

    // Adjust the configuration according to your needs.
};
