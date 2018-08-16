<?php

return [

    /*
    |--------------------------------------------------------------------------
    | PHP Markdown Options
    |--------------------------------------------------------------------------
    */

    'options' => [
        'empty_element_suffix' => ' />',
        'tab_width' => 4,
        'no_markup' => false,
        'no_entities' => false,
        'predef_urls' => [],
        'predef_titles' => [],

        // Use PHP Markdown with extra.
        'use_extra' => true,

        'fn_id_prefix' => '',
        'fn_link_title' => '',
        'fn_backlink_title' => '',
        'fn_link_class' => 'footnote-ref',
        'fn_backlink_class' => 'footnote-backref',
        'code_class_prefix' => '',
        'code_attr_on_pre' => false,
        'predef_abbr' => [],
    ],

];
