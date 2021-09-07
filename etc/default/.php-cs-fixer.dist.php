<?php

$finder = PhpCsFixer\Finder::create()
    ->in('src')
    ->in('spec')
    ->in('tests')
;

$config=new PhpCsFixer\Config();

return $config
    ->setRules([
        '@Symfony' => true,
        'array_syntax' => ['syntax' => 'short'],
        'blank_line_after_opening_tag' => false,
        'ordered_imports' => true,
        'binary_operator_spaces' => [
            'default' => 'single_space',
            'operators' => [
                '=>' => 'align_single_space_minimal',
            ]
        ],
        'class_attributes_separation' => ['elements' => ['const' => 'one', 'method' => 'one', 'property' => 'one']],
        'general_phpdoc_annotation_remove' => ['author'],
        'phpdoc_order' => true,
        'php_unit_mock_short_will_return' => true,
        'declare_strict_types' => true,
        'binary_operator_spaces' => [
            'align_double_arrow' => true,
            'align_equals' => true,
        ],
    ])
    ->setLineEnding("\n")
    ->setCacheFile(__DIR__.'/vendor/.php_cs.cache')
    ->setFinder($finder)
    ->setRiskyAllowed(true)
;
