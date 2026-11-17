<?php
/**
 * Plugin Name: ALMA Theme Auto-Activator
 * Description: Activa y asegura la carga del tema ALMA Centro de Salud y Belleza.
 * Version: 1.0.0
 * Author: ALMA
 */

if (!defined('ABSPATH')) {
    exit;
}

add_filter('template', function($template) {
    return 'alma-theme';
});

add_filter('stylesheet', function($stylesheet) {
    return 'alma-theme';
});

