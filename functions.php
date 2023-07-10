<?php
// SVG Icons class.
require get_template_directory() . '/classes/class-twenty-twenty-one-svg-icons.php';

// prepending xd to function names to avoid function name conflicts with wordpress functions

function xd_theme_support()
{
    add_theme_support('post-thumbnails'); // Add thumbnail feature to posts
    add_theme_support('title-tag'); // Add dynamic title tag
    add_theme_support('custom-logo');
}


function xd_register_scripts()
{
    $version = wp_get_theme()->get('Version');
    // styles
    wp_enqueue_style('xd-style-css', get_template_directory_uri() . '/styles.css', array(), $version, 'all');

    // scripts
    wp_enqueue_script('xd-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true);
}

add_action('after_setup_theme', 'xd_theme_support');
add_action('wp_enqueue_scripts', 'xd_register_scripts');


function numberToWords($number)
{
    $words = array(
        0 => 'Zero',
        1 => 'One',
        2 => 'Two',
        3 => 'Three',
        4 => 'Four',
        5 => 'Five',
        6 => 'Six',
        7 => 'Seven',
        8 => 'Eight',
        9 => 'Nine',
        10 => 'Ten',
        11 => 'Eleven',
        12 => 'Twelve',
        13 => 'Thirteen',
        14 => 'Fourteen',
        15 => 'Fifteen',
        16 => 'Sixteen',
        17 => 'Seventeen',
        18 => 'Eighteen',
        19 => 'Nineteen',
        20 => 'Twenty',
        30 => 'Thirty',
        40 => 'Forty',
        50 => 'Fifty',
        60 => 'Sixty',
        70 => 'Seventy',
        80 => 'Eighty',
        90 => 'Ninety'
    );

    if ($number < 0) {
        return 'Minus ' . numberToWords(abs($number));
    }

    if ($number < 21) {
        return $words[$number];
    }

    if ($number < 100) {
        $tens = (int)($number / 10) * 10;
        $units = $number % 10;
        return $words[$tens] . ' ' . $words[$units];
    }

    if ($number < 1000) {
        $hundreds = (int)($number / 100);
        $remainder = $number % 100;
        return $words[$hundreds] . ' Hundred ' . numberToWords($remainder);
    }

    if ($number < 1000000) {
        $thousands = (int)($number / 1000);
        $remainder = $number % 1000;
        return numberToWords($thousands) . ' Thousand ' . numberToWords($remainder);
    }

    if ($number < 1000000000) {
        $millions = (int)($number / 1000000);
        $remainder = $number % 1000000;
        return numberToWords($millions) . ' Million ' . numberToWords($remainder);
    }

    $billions = (int)($number / 1000000000);
    $remainder = $number % 1000000000;
    return numberToWords($billions) . ' Billion ' . numberToWords($remainder);
}

function twenty_twenty_one_get_icon_svg($group, $icon, $size = 24)
{
    return Twenty_Twenty_One_SVG_Icons::get_svg($group, $icon, $size);
}
