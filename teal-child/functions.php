<?php
/**
 * TEAL Child Theme – functions.php
 *
 * Nalaga: starš temo (Twenty Twenty-Four), lastni CSS in JS.
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* ── 1. Enqueue starš + otrok stile + JS ────────────────── */
add_action( 'wp_enqueue_scripts', 'teal_child_enqueue', 20 );
function teal_child_enqueue() {

    // Google Fonts
    wp_enqueue_style(
        'teal-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Oswald:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // Starš tema
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // Otrok/child CSS (naša polna oblikovna koda)
    wp_enqueue_style(
        'teal-child-style',
        get_stylesheet_directory_uri() . '/teal-main.css',
        array( 'parent-style', 'teal-google-fonts' ),
        '1.0.0'
    );

    // Naš JS
    wp_enqueue_script(
        'teal-main-js',
        get_stylesheet_directory_uri() . '/js/main.js',
        array(),
        '1.0.0',
        true   // v footer
    );
}

/* ── 2. Tema podpira ─────────────────────────────────────── */
add_action( 'after_setup_theme', 'teal_child_setup' );
function teal_child_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'style', 'script' ) );

    // Navigacijski meni
    register_nav_menus( array(
        'teal-primary' => __( 'TEAL – Glavna navigacija', 'teal-child' ),
        'teal-footer'  => __( 'TEAL – Noga',              'teal-child' ),
    ) );
}

/* ── 3. SEO: skrij WP generator tag ─────────────────────── */
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );

/* ── 4. Preconnect za hitrejše Google Fonts ─────────────── */
add_filter( 'wp_resource_hints', 'teal_resource_hints', 10, 2 );
function teal_resource_hints( $urls, $type ) {
    if ( 'preconnect' === $type ) {
        $urls[] = array( 'href' => 'https://fonts.googleapis.com' );
        $urls[] = array( 'href' => 'https://fonts.gstatic.com', 'crossorigin' => '' );
    }
    return $urls;
}