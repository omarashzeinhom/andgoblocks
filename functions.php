<?php
$args = array(
    'label' => __('Custom Style', 'andgo-blocks'), // Replace 'Custom Style' with the label for your style.
    'style_handle' => 'custom-style', // Replace 'custom-style' with a unique handle for your style.
    'inline_style' => '.wp-block-custom-block-class { color: red; }', // Replace '.wp-block-custom-block-class { color: red; }' with your custom CSS.
);

//TODO 
//register_block_style('block_name', 'style_name', $args);

//TODO  Notice: Function WP_Block_Patterns_Registry::register was called incorrectly. 
//register_block_pattern('pattern_name', $args);


;?>