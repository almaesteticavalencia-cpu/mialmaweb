<?php
/**
 * Footer template for ALMA
 *
 * @package ALMA_Theme
 */
?>
<footer class="alma-footer" id="contacto">
    <div class="alma-container">
        <!-- Main Footer Columns -->
        <div class="alma-footer__grid">
            <!-- Brand Column -->
            <div class="alma-footer__col alma-footer__col--brand">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="alma-logo alma-logo--footer">
                    <span class="alma-logo__title">ALMA</span>
                    <span class="alma-logo__tagline">Salud · Belleza · Ciencia Holística</span>
                </a>
                <p class="alma-footer__desc">
                    El primer centro integral que fusiona el rigor de la medicina avanzada con tratamientos estéticos de vanguardia y terapias holísticas basadas en evidencia científica.
                </p>
                <div class="alma-footer__badges">
                    <span class="cert-pill">✓ Médicos Colegiados</span>
                    <span class="cert-pill">✓ Tecnología FDA / CE</span>
                    <span class="cert-pill">✓ Atención Personalizada</span>
                </div>
            </div>

            <!-- Health Specialties -->
            <div class="alma-footer__col">
                <h4 class="alma-footer__title">Salud Médica</h4>
                <ul class="alma-footer__links">
                    <li><a href="#salud-medica">Odontología (Dra. Wendy Arellano)</a></li>
                    <li><a href="#salud-medica">Dermatología Clínica</a></li>
                    <li><a href="#salud-medica">Ginecología Integral</a></li>
                    <li><a href="#salud-medica">Nutrición Antiinflamatoria</a></li>
                    <li><a href="#salud-medica">Psicología & Bienestar</a></li>
                    <li><a href="#salud-medica">Ecografía Diagnóstica</a></li>
                    <li><a href="#salud-medica">Medicina Preventiva</a></li>
                </ul>
            </div>

            <!-- Estética & Belleza -->
            <div class="alma-footer__col">
                <h4 class="alma-footer__title">Estética & Belleza</h4>
                <ul class="alma-footer__links">
                    <li><a href="#estetica-medica">Medicina Estética</a></li>
                    <li><a href="#estetica-medica">Cirugía Estética</a></li>
                    <li><a href="#belleza-lounge">Estilismo & Hair Spa</a></li>
                    <li><a href="#belleza-lounge">Nails Spa Exclusivo</a></li>
                    <li><a href="#belleza-lounge">Diseño Cejas & Pestañas</a></li>
                    <li><a href="#terapias-holisticas">Terapias Holísticas Científicas</a></li>
                </ul>
            </div>

            <!-- Horarios & Contacto -->
            <div class="alma-footer__col">
                <h4 class="alma-footer__title">Visítanos</h4>
                <ul class="alma-footer__contact">
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        <span>Av. Principal de la Salud #450, Centro Médico ALMA</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        <span>Lunes a Viernes: 8:00 a 20:00<br>Sábados: 9:00 a 16:00</span>
                    </li>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <a href="tel:+584124322202">0412-4322202 / +58 412 4322202</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Medical Disclaimer & Legal -->
        <div class="alma-footer__bottom">
            <p class="alma-disclaimer">
                <strong>Aviso Médico & Ética Profesional:</strong> Todos los procedimientos de salud, ginecología, dermatología, cirugía y medicina estética son realizados por profesionales de la salud debidamente acreditados y colegiados. La información en esta web tiene fines informativos y de divulgación sobre el bienestar integral y no sustituye la valoración médica individualizada.
            </p>
            <div class="alma-copyright">
                <p>&copy; <?php echo date('Y'); ?> ALMA - Centro de Salud, Belleza y Terapias Holísticas. Todos los derechos reservados.</p>
                <div class="alma-legal-links">
                    <a href="#">Aviso de Privacidad</a>
                    <span>•</span>
                    <a href="#">Términos del Servicio</a>
                    <span>•</span>
                    <a href="#">Protocolos Sanitarios</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Floating WhatsApp Button (Neuromarketing Lead Driver) -->
<div class="alma-float-wa" id="alma-float-wa">
    <div class="alma-float-wa__bubble">
        <span class="badge-online"></span>
        <div class="alma-float-wa__text">
            <strong>¿Tienes dudas o buscas cita?</strong>
            <span>Escríbenos directamente por WhatsApp</span>
        </div>
    </div>
    <a href="https://wa.me/584124322202?text=Hola%20ALMA,%20me%20gustar%C3%ADa%20solicitar%20informaci%C3%B3n%20sobre%20sus%20servicios" target="_blank" rel="noopener noreferrer" class="alma-float-wa__btn" aria-label="Abrir chat de WhatsApp">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2zm.01 1.67c2.2 0 4.26.86 5.82 2.42a8.17 8.17 0 0 1 2.41 5.82c0 4.54-3.7 8.24-8.24 8.24-1.48 0-2.93-.4-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.31a8.18 8.18 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24zm4.52 11.66c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.07-.39-2.03-1.25-.75-.67-1.26-1.5-1.41-1.75-.15-.25-.02-.39.11-.51.11-.11.25-.29.38-.44.13-.14.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.87.85-.87 2.08 0 1.23.89 2.42 1.02 2.59.13.17 1.77 2.7 4.28 3.78.6.26 1.07.41 1.43.53.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.06-.11-.23-.17-.48-.29z"/>
        </svg>
    </a>
</div>

<!-- Mobile Sticky Bar (High Mobile Conversion) -->
<div class="alma-mobile-bar">
    <a href="tel:+584124322202" class="alma-mobile-bar__item">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
        <span>Llamar</span>
    </a>
    <a href="#reserva" class="alma-mobile-bar__item alma-mobile-bar__item--primary">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
        <span>Agendar Cita</span>
    </a>
    <a href="https://wa.me/584124322202?text=Hola%20ALMA,%20quiero%20consultar%20por%20citas" target="_blank" rel="noopener noreferrer" class="alma-mobile-bar__item alma-mobile-bar__item--wa">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2zm.01 1.67c2.2 0 4.26.86 5.82 2.42a8.17 8.17 0 0 1 2.41 5.82c0 4.54-3.7 8.24-8.24 8.24-1.48 0-2.93-.4-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.31a8.18 8.18 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24zm4.52 11.66c-.25-.13-1.47-.72-1.7-.81-.23-.08-.39-.13-.56.13-.17.25-.64.81-.79.97-.14.17-.29.19-.54.06-.25-.13-1.07-.39-2.03-1.25-.75-.67-1.26-1.5-1.41-1.75-.15-.25-.02-.39.11-.51.11-.11.25-.29.38-.44.13-.14.17-.25.25-.42.08-.17.04-.31-.02-.44-.06-.13-.56-1.35-.77-1.85-.2-.49-.41-.42-.56-.43h-.48c-.17 0-.44.06-.67.31-.23.25-.87.85-.87 2.08 0 1.23.89 2.42 1.02 2.59.13.17 1.77 2.7 4.28 3.78.6.26 1.07.41 1.43.53.6.19 1.15.16 1.58.1.48-.07 1.47-.6 1.68-1.18.21-.58.21-1.07.15-1.18-.06-.11-.23-.17-.48-.29z"/></svg>
        <span>WhatsApp</span>
    </a>
</div>

<?php wp_footer(); ?>
</body>
</html>

