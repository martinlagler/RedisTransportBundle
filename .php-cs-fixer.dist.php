<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude(['Tests/var', 'vendor'])
    ->in(__DIR__);

$config = new PhpCsFixer\Config();
$config->setRiskyAllowed(true)
    ->setRules([
        '@Symfony' => true,
        'array_syntax' => ['syntax' => 'short'],
        'class_definition' => false,
        'concat_space' => ['spacing' => 'one'],
        'function_declaration' => ['closure_function_spacing' => 'none'],
        'native_constant_invocation' => true,
        'native_function_casing' => true,
        'native_function_invocation' => ['include' => ['@internal']],
        'global_namespace_import' => ['import_classes' => false, 'import_constants' => false, 'import_functions' => false],
        'no_superfluous_phpdoc_tags' => ['allow_mixed' => true, 'remove_inheritdoc' => true],
        'ordered_imports' => true,
        'phpdoc_align' => ['align' => 'left'],
        'phpdoc_types_order' => false,
        'single_line_throw' => false,
        'single_line_comment_spacing' => false,
        'phpdoc_to_comment' => [
            'ignored_tags' => ['todo', 'var'],
        ],
    ])
    ->setFinder($finder);

return $config;
