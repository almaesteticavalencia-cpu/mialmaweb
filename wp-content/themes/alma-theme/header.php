<?php
/**
 * Header template for ALMA
 *
 * @package ALMA_Theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Top Marketing Banner (High Conversion Bar) -->
<aside class="alma-topbar" aria-label="Aviso promocional">
    <div class="alma-container alma-topbar__inner">
        <div class="alma-topbar__msg">
            <span class="badge-gold">NOVEDAD</span>
            <span>Descubre la medicina integrativa y belleza consciente basada en la ciencia.</span>
        </div>
        <div class="alma-topbar__actions">
            <a href="tel:+584124322202" class="alma-topbar__link">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Atención Médica: 0412-4322202
            </a>
            <span class="divider">|</span>
            <a href="#contacto" class="alma-topbar__link">Lun - Sáb: 8:00 - 20:00</a>
        </div>
    </div>
</aside>

<!-- Sticky Navigation Header -->
<header class="alma-header" id="alma-header">
    <div class="alma-container alma-header__inner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="alma-logo" rel="home">
            <span class="alma-logo__title">ALMA</span>
            <span class="alma-logo__tagline">Salud · Belleza · Ciencia Holística</span>
        </a>

        <!-- Desktop Navigation -->
        <nav class="alma-nav" id="alma-nav" aria-label="Navegación Principal">
            <ul class="alma-nav__list">
                <li class="alma-nav__item"><a href="#inicio" class="alma-nav__link active">Inicio</a></li>
                <li class="alma-nav__item has-dropdown">
                    <a href="#especialidades" class="alma-nav__link">
                        Especialidades
                        <svg class="dropdown-chevron" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <ul class="alma-dropdown">
                        <li><a href="#salud-medica">🩺 Salud Médica & Odontología</a></li>
                        <li><a href="#estetica-medica">✨ Medicina & Cirugía Estética</a></li>
                        <li><a href="#belleza-lounge">💅 Salón de Belleza (Nails, Pelo, Mirada)</a></li>
                        <li><a href="#terapias-holisticas">🌿 Terapias Holísticas Científicas</a></li>
                    </ul>
                </li>
                <li class="alma-nav__item"><a href="#metodo" class="alma-nav__link">El Método ALMA</a></li>
                <li class="alma-nav__item"><a href="#espacios" class="alma-nav__link">Nuestros Espacios</a></li>
                <li class="alma-nav__item"><a href="#diagnostico-test" class="alma-nav__link">Diagnóstico Rápido</a></li>
                <li class="alma-nav__item"><a href="#testimonios" class="alma-nav__link">Resultados</a></li>
                <li class="alma-nav__item"><a href="#contacto" class="alma-nav__link">Ubicación</a></li>
            </ul>
        </nav>

        <!-- CTA Header Button -->
        <div class="alma-header__cta">
            <a href="#reserva" class="btn btn--gold">
                <span>Agendar Cita</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <!-- Mobile Toggle -->
            <button class="alma-burger" id="alma-burger" aria-label="Abrir Menú" aria-expanded="false">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Navigation Drawer -->
<div class="alma-mobile-menu" id="alma-mobile-menu">
    <div class="alma-mobile-menu__inner">
        <div class="alma-mobile-menu__header">
            <div class="alma-logo">
                <span class="alma-logo__title">ALMA</span>
                <span class="alma-logo__tagline">Salud · Belleza · Ciencia</span>
            </div>
            <button class="alma-close-menu" id="alma-close-menu" aria-label="Cerrar menú">&times;</button>
        </div>
        <ul class="alma-mobile-menu__list">
            <li><a href="#inicio" class="mobile-link">Inicio</a></li>
            <li><a href="#salud-medica" class="mobile-link">Salud Médica & Odontología</a></li>
            <li><a href="#estetica-medica" class="mobile-link">Medicina & Cirugía Estética</a></li>
            <li><a href="#belleza-lounge" class="mobile-link">Salón de Belleza & Nails</a></li>
            <li><a href="#terapias-holisticas" class="mobile-link">Terapias Holísticas Científicas</a></li>
            <li><a href="#metodo" class="mobile-link">El Método ALMA</a></li>
            <li><a href="#espacios" class="mobile-link">Conoce Nuestros Espacios (Video)</a></li>
            <li><a href="#diagnostico-test" class="mobile-link">Test de Diagnóstico Rápido</a></li>
            <li><a href="#testimonios" class="mobile-link">Opiniones de Pacientes</a></li>
            <li><a href="#contacto" class="mobile-link">Contacto y Horarios</a></li>
        </ul>
        <div class="alma-mobile-menu__cta">
            <a href="#reserva" class="btn btn--gold btn--full mobile-link">Solicitar Cita de Diagnóstico</a>
        </div>
    </div>
</div>

