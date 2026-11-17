<?php
/**
 * ALMA Theme Functions & Definitions
 *
 * @package ALMA_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

function alma_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('responsive-embeds');

    register_nav_menus(array(
        'primary' => __('Menú Principal', 'alma-theme'),
        'footer'  => __('Menú Footer', 'alma-theme'),
    ));
}
add_action('after_setup_theme', 'alma_theme_setup');

function alma_theme_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'alma-google-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap',
        array(),
        null
    );

    // Main Stylesheet
    wp_enqueue_style(
        'alma-main-style',
        get_template_directory_uri() . '/assets/css/alma-styles.css',
        array(),
        '1.0.0'
    );

    // Main Scripts
    wp_enqueue_script(
        'alma-main-script',
        get_template_directory_uri() . '/assets/js/alma-scripts.js',
        array('jquery'),
        '1.0.0',
        true
    );

    wp_localize_script('alma-main-script', 'almaData', array(
        'ajaxurl'       => admin_url('admin-ajax.php'),
        'nonce'         => wp_create_nonce('alma_booking_nonce'),
        'whatsappPhone' => '584124322202', // Número de WhatsApp oficial ALMA
    ));
}
add_action('wp_enqueue_scripts', 'alma_theme_scripts');

/**
 * Handle AJAX Appointment / Lead Request
 */
function alma_handle_booking() {
    check_ajax_referer('alma_booking_nonce', 'nonce');

    $name     = sanitize_text_field($_POST['name'] ?? '');
    $phone    = sanitize_text_field($_POST['phone'] ?? '');
    $email    = sanitize_email($_POST['email'] ?? '');
    $service  = sanitize_text_field($_POST['service'] ?? '');
    $message  = sanitize_textarea_field($_POST['message'] ?? '');

    if (empty($name) || empty($phone) || empty($service)) {
        wp_send_json_error(array('message' => 'Por favor completa tu nombre, teléfono y especialidad de interés.'));
    }

    // Preparar mensaje para WhatsApp
    $wa_text = "¡Hola ALMA! Deseo solicitar una cita:\n"
             . "👤 Nombre: " . $name . "\n"
             . "📱 Teléfono: " . $phone . "\n"
             . "🩺 Especialidad / Servicio: " . $service . "\n";
    if (!empty($message)) {
        $wa_text .= "📝 Nota: " . $message . "\n";
    }

    $wa_url = "https://wa.me/584124322202?text=" . rawurlencode($wa_text);

    wp_send_json_success(array(
        'message'      => '¡Solicitud recibida con éxito! Nuestro equipo médico se pondrá en contacto a la brevedad.',
        'whatsapp_url' => $wa_url
    ));
}
add_action('wp_ajax_alma_submit_appointment', 'alma_handle_booking');
add_action('wp_ajax_nopriv_alma_submit_appointment', 'alma_handle_booking');

