<?php
/**
 * Front Page Template for ALMA
 *
 * @package ALMA_Theme
 */

get_header();
?>

<main id="primary" class="site-main">

    <!-- 1. HERO SECTION (High Impact & Value Proposition) -->
    <section class="alma-hero" id="inicio">
        <div class="alma-container alma-hero__grid">
            <div class="alma-hero__content">
                <div class="alma-hero__badge">
                    <span class="pulse-dot"></span>
                    <span>Centro Médico Integrativo & Wellness</span>
                </div>
                <h1 class="alma-hero__title">
                    Donde la <em>ciencia médica</em> se fusiona con la belleza y el bienestar holístico.
                </h1>
                <p class="alma-hero__subtitle">
                    En <strong>ALMA</strong> unimos 9 especialidades de salud y odontología integral, medicina estética avanzada, un exclusivo salón de belleza y terapias holísticas fundamentadas en evidencia científica para cuidar de ti de manera integral.
                </p>
                <div class="alma-hero__ctas">
                    <a href="#reserva" class="btn btn--gold btn--lg">
                        <span>Agendar Diagnóstico Personalizado</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <a href="#especialidades" class="btn btn--outline btn--lg">
                        <span>Ver Especialidades</span>
                    </a>
                </div>

                <!-- Trust Micro-Badges -->
                <div class="alma-hero__trust">
                    <div class="trust-item">
                        <strong>9</strong>
                        <span>Especialidades de Salud</span>
                    </div>
                    <div class="trust-divider"></div>
                    <div class="trust-item">
                        <strong>3</strong>
                        <span>Áreas de Belleza</span>
                    </div>
                    <div class="trust-divider"></div>
                    <div class="trust-item">
                        <strong>100%</strong>
                        <span>Base Científica</span>
                    </div>
                    <div class="trust-divider"></div>
                    <div class="trust-item">
                        <strong>★ 4.9</strong>
                        <span>Calificación de Pacientes</span>
                    </div>
                </div>
            </div>

            <div class="alma-hero__visual">
                <div class="alma-card-highlight">
                    <div class="visual-deco-circle"></div>
                    <div class="visual-card-content">
                        <span class="tag-gold">Filosofía ALMA</span>
                        <h3>Salud que se siente, belleza que se ve.</h3>
                        <p>No creemos en tratamientos aislados. Creemos en un diagnóstico clínico riguroso que armoniza tu equilibrio hormonal, dermatológico, nutricional y estético.</p>
                        
                        <div class="visual-features">
                            <div class="v-feat">
                                <span class="v-icon">🩺</span>
                                <div>
                                    <strong>Evaluación Médica Previa</strong>
                                    <small>Cada procedimiento tiene aval facultativo.</small>
                                </div>
                            </div>
                            <div class="v-feat">
                                <span class="v-icon">🌿</span>
                                <div>
                                    <strong>Terapias Holísticas Clínicas</strong>
                                    <small>Reducción de cortisol y bienestar celular medible.</small>
                                </div>
                            </div>
                            <div class="v-feat">
                                <span class="v-icon">✨</span>
                                <div>
                                    <strong>Belleza y Estilismo Seguro</strong>
                                    <small>Productos botánicos y aparatología de última generación.</small>
                                </div>
                            </div>
                        </div>

                        <a href="#diagnostico-test" class="quick-test-cta">
                            <span>¿No sabes qué tratamiento necesitas? Haz el test rápido &rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. VALUE PROPOSITION BAR (Pilares de Confianza) -->
    <section class="alma-pillars-bar">
        <div class="alma-container">
            <div class="alma-pillars-bar__grid">
                <div class="pillar-box">
                    <div class="pillar-box__icon">🔬</div>
                    <div class="pillar-box__text">
                        <h4>Rigor Científico</h4>
                        <p>Procedimientos protocolizados bajo los más altos estándares médicos y sanitarios.</p>
                    </div>
                </div>
                <div class="pillar-box">
                    <div class="pillar-box__icon">🌿</div>
                    <div class="pillar-box__text">
                        <h4>Enfoque Holístico Real</h4>
                        <p>Cuidado del cuerpo, mente y piel como un solo sistema interconectado.</p>
                    </div>
                </div>
                <div class="pillar-box">
                    <div class="pillar-box__icon">👩‍⚕️</div>
                    <div class="pillar-box__text">
                        <h4>Especialistas Colegiados</h4>
                        <p>Médicos especialistas, cirujanos certificados y profesionales de belleza de élite.</p>
                    </div>
                </div>
                <div class="pillar-box">
                    <div class="pillar-box__icon">✨</div>
                    <div class="pillar-box__text">
                        <h4>Resultados Armónicos</h4>
                        <p>Potenciamos tu belleza y salud natural sin cambios artificiales o agresivos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. SERVICES & SPECIALTIES SHOWCASE (Categorized Grid) -->
    <section class="alma-section alma-services-section" id="especialidades">
        <div class="alma-container">
            <div class="alma-section-header text-center">
                <span class="section-tag">CATÁLOGO INTEGRAL</span>
                <h2 class="section-title">Especialidades Médicas y Áreas de Belleza</h2>
                <p class="section-subtitle">
                    Descubre nuestro ecosistema de servicios diseñado para brindarte una atención 360° en un ambiente sereno y exclusivo.
                </p>

                <!-- Filter Navigation Pills -->
                <div class="services-filter-pills" id="services-filter">
                    <button class="filter-pill active" data-category="all">Todos los Servicios</button>
                    <button class="filter-pill" data-category="salud">🩺 Salud Médica & Odontología (9)</button>
                    <button class="filter-pill" data-category="estetica">✨ Estética & Cirugía</button>
                    <button class="filter-pill" data-category="belleza">💅 Salón de Belleza (3)</button>
                    <button class="filter-pill" data-category="holistico">🌿 Terapias Holísticas</button>
                </div>
            </div>

            <!-- Services Cards Grid -->
            <div class="services-grid" id="services-cards-container">

                <!-- 1. Dermatología -->
                <article class="service-card" data-category="salud" id="salud-medica">
                    <div class="service-card__img-wrap">
                        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=800&q=80" alt="Dermatología Clínica ALMA" loading="lazy" class="service-card__img">
                        <span class="service-card__badge">Salud Médica</span>
                    </div>
                    <div class="service-card__body">
                        <div class="service-card__header-inline">
                            <span class="service-card__icon">🔬</span>
                            <h3 class="service-card__title">Dermatología Clínica & Quirúrgica</h3>
                        </div>
                        <p class="service-card__desc">
                            Diagnóstico y tratamiento avanzado de patologías cutáneas, acné, rosácea, control de lunares y dermatocirugía con tecnología de última generación.
                        </p>
                        <div class="treatments-block">
                            <span class="treatments-heading">✨ Tratamientos que ofrecemos:</span>
                            <div class="treatment-pills">
                                <span class="treatment-pill">Dermatoscopia digital</span>
                                <span class="treatment-pill">Control clínico de acné</span>
                                <span class="treatment-pill">Manchas y Melasma</span>
                                <span class="treatment-pill">Rosácea y piel reactiva</span>
                                <span class="treatment-pill">Crioterapia & Biopsias</span>
                                <span class="treatment-pill">Alopecia y salud capilar</span>
                            </div>
                        </div>
                        <div class="service-card__footer">
                            <a href="#reserva" class="service-card__btn" data-preselect="Dermatología">
                                <span>Consultar Cita</span> &rarr;
                            </a>
                        </div>
                    </div>
                </article>

                <!-- 2. Ginecología -->
                <article class="service-card" data-category="salud">
                    <div class="service-card__img-wrap">
                        <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=800&q=80" alt="Ginecología Integral ALMA" loading="lazy" class="service-card__img">
                        <span class="service-card__badge">Salud Médica</span>
                    </div>
                    <div class="service-card__body">
                        <div class="service-card__header-inline">
                            <span class="service-card__icon">🌸</span>
                            <h3 class="service-card__title">Ginecología Integral & Femenina</h3>
                        </div>
                        <p class="service-card__desc">
                            Cuidado integral de la salud femenina en todas sus etapas: control preventivo, salud hormonal, fertilidad y ginecología regenerativa.
                        </p>
                        <div class="treatments-block">
                            <span class="treatments-heading">✨ Tratamientos que ofrecemos:</span>
                            <div class="treatment-pills">
                                <span class="treatment-pill">Citología y Papanicolaou</span>
                                <span class="treatment-pill">Salud hormonal y SOP</span>
                                <span class="treatment-pill">Climaterio y Menopausia</span>
                                <span class="treatment-pill">Ginecología regenerativa</span>
                                <span class="treatment-pill">Valoración suelo pélvico</span>
                                <span class="treatment-pill">Asesoría preconcepcional</span>
                            </div>
                        </div>
                        <div class="service-card__footer">
                            <a href="#reserva" class="service-card__btn" data-preselect="Ginecología">
                                <span>Consultar Cita</span> &rarr;
                            </a>
                        </div>
                    </div>
                </article>

                <!-- 3. Nutrición -->
                <article class="service-card" data-category="salud">
                    <div class="service-card__img-wrap">
                        <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?auto=format&fit=crop&w=800&q=80" alt="Nutrición Clínica ALMA" loading="lazy" class="service-card__img">
                        <span class="service-card__badge">Salud Médica</span>
                    </div>
                    <div class="service-card__body">
                        <div class="service-card__header-inline">
                            <span class="service-card__icon">🥗</span>
                            <h3 class="service-card__title">Nutrición Clínica & Antiinflamatoria</h3>
                        </div>
                        <p class="service-card__desc">
                            Terapia nutricional científica para optimizar tu metabolismo, reducir la inflamación celular y potenciar la salud de tu piel desde el interior.
                        </p>
                        <div class="treatments-block">
                            <span class="treatments-heading">✨ Tratamientos que ofrecemos:</span>
                            <div class="treatment-pills">
                                <span class="treatment-pill">Bioimpedancia médica</span>
                                <span class="treatment-pill">Dieta antiinflamatoria</span>
                                <span class="treatment-pill">Salud intestinal & microbiota</span>
                                <span class="treatment-pill">Nutricosmética para piel</span>
                                <span class="treatment-pill">Resistencia a la insulina</span>
                                <span class="treatment-pill">Reeducación de hábitos</span>
                            </div>
                        </div>
                        <div class="service-card__footer">
                            <a href="#reserva" class="service-card__btn" data-preselect="Nutrición">
                                <span>Consultar Cita</span> &rarr;
                            </a>
                        </div>
                    </div>
                </article>

                <!-- 4. Psicología -->
                <article class="service-card" data-category="salud">
                    <div class="service-card__img-wrap">
                        <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?auto=format&fit=crop&w=800&q=80" alt="Psicología y Bienestar ALMA" loading="lazy" class="service-card__img">
                        <span class="service-card__badge">Salud Médica</span>
                    </div>
                    <div class="service-card__body">
                        <div class="service-card__header-inline">
                            <span class="service-card__icon">🧠</span>
                            <h3 class="service-card__title">Psicología & Salud Emocional</h3>
                        </div>
                        <p class="service-card__desc">
                            Acompañamiento psicológico profesional para el manejo del estrés crónico, ansiedad, autoestima y el impacto de la conexión mente-cuerpo.
                        </p>
                        <div class="treatments-block">
                            <span class="treatments-heading">✨ Tratamientos que ofrecemos:</span>
                            <div class="treatment-pills">
                                <span class="treatment-pill">Terapia cognitivo-conductual</span>
                                <span class="treatment-pill">Protocolo anti-estrés y burnout</span>
                                <span class="treatment-pill">Psicodermatología (estrés y piel)</span>
                                <span class="treatment-pill">Autoestima y autoimagen</span>
                                <span class="treatment-pill">Mindfulness clínico</span>
                                <span class="treatment-pill">Regulación emocional</span>
                            </div>
                        </div>
                        <div class="service-card__footer">
                            <a href="#reserva" class="service-card__btn" data-preselect="Psicología">
                                <span>Consultar Cita</span> &rarr;
                            </a>
                        </div>
                    </div>
                </article>

                <!-- 5. Ecografía Integral -->
                <article class="service-card" data-category="salud">
                    <div class="service-card__img-wrap">
                        <img src="https://images.unsplash.com/photo-1516549655169-df83a0774514?auto=format&fit=crop&w=800&q=80" alt="Ecografía Integral ALMA" loading="lazy" class="service-card__img">
                        <span class="service-card__badge">Salud Médica</span>
                    </div>
                    <div class="service-card__body">
                        <div class="service-card__header-inline">
                            <span class="service-card__icon">📡</span>
                            <h3 class="service-card__title">Ecografía Integral de Alta Resolución</h3>
                        </div>
                        <p class="service-card__desc">
                            Diagnóstico por imagen no invasivo con ecógrafos Doppler de vanguardia para chequeos ginecológicos, mamarios, tiroideos y abdominales.
                        </p>
                        <div class="treatments-block">
                            <span class="treatments-heading">✨ Tratamientos que ofrecemos:</span>
                            <div class="treatment-pills">
                                <span class="treatment-pill">Ecografía ginecológica y TV</span>
                                <span class="treatment-pill">Ecografía mamaria bilateral</span>
                                <span class="treatment-pill">Ecografía tiroidea Doppler</span>
                                <span class="treatment-pill">Ecografía abdominal</span>
                                <span class="treatment-pill">Partes blandas y articular</span>
                                <span class="treatment-pill">Informe médico al instante</span>
                            </div>
                        </div>
                        <div class="service-card__footer">
                            <a href="#reserva" class="service-card__btn" data-preselect="Ecografía Integral">
                                <span>Consultar Cita</span> &rarr;
                            </a>
                        </div>
                    </div>
                </article>

                <!-- 6. Medicina Estética -->
                <article class="service-card" data-category="estetica" id="estetica-medica">
                    <div class="service-card__img-wrap">
                        <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=800&q=80" alt="Medicina Estética ALMA" loading="lazy" class="service-card__img">
                        <span class="service-card__badge badge--gold">Estética Médica</span>
                    </div>
                    <div class="service-card__body">
                        <div class="service-card__header-inline">
                            <span class="service-card__icon">✨</span>
                            <h3 class="service-card__title">Medicina Estética Avanzada</h3>
                        </div>
                        <p class="service-card__desc">
                            Tratamientos médicos mínimamente invasivos para la armonización y rejuvenecimiento natural: ácido hialurónico, bioestimuladores y aparatología.
                        </p>
                        <div class="treatments-block">
                            <span class="treatments-heading">✨ Tratamientos que ofrecemos:</span>
                            <div class="treatment-pills">
                                <span class="treatment-pill">Ácido Hialurónico facial y labios</span>
                                <span class="treatment-pill">Toxina botulínica</span>
                                <span class="treatment-pill">Bioestimuladores de colágeno</span>
                                <span class="treatment-pill">Rinomodelación sin cirugía</span>
                                <span class="treatment-pill">Mesoterapia con vitaminas</span>
                                <span class="treatment-pill">Peelings médicos</span>
                            </div>
                        </div>
                        <div class="service-card__footer">
                            <a href="#reserva" class="service-card__btn" data-preselect="Medicina Estética">
                                <span>Consultar Cita</span> &rarr;
                            </a>
                        </div>
                    </div>
                </article>

                <!-- 7. Cirugía Estética -->
                <article class="service-card" data-category="estetica">
                    <div class="service-card__img-wrap">
                        <img src="https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?auto=format&fit=crop&w=800&q=80" alt="Cirugía Estética ALMA" loading="lazy" class="service-card__img">
                        <span class="service-card__badge badge--gold">Estética Médica</span>
                    </div>
                    <div class="service-card__body">
                        <div class="service-card__header-inline">
                            <span class="service-card__icon">💎</span>
                            <h3 class="service-card__title">Cirugía Estética y Reparadora</h3>
                        </div>
                        <p class="service-card__desc">
                            Procedimientos quirúrgicos realizados por cirujanos plásticos acreditados, buscando proporciones armónicas y recuperación cuidada.
                        </p>
                        <div class="treatments-block">
                            <span class="treatments-heading">✨ Tratamientos que ofrecemos:</span>
                            <div class="treatment-pills">
                                <span class="treatment-pill">Blefaroplastia de párpados</span>
                                <span class="treatment-pill">Liposucción y marcación suave</span>
                                <span class="treatment-pill">Aumento y elevación mamaria</span>
                                <span class="treatment-pill">Minilifting cervicofacial</span>
                                <span class="treatment-pill">Otoplastia estética</span>
                                <span class="treatment-pill">Drenaje postquirúrgico</span>
                            </div>
                        </div>
                        <div class="service-card__footer">
                            <a href="#reserva" class="service-card__btn" data-preselect="Cirugía Estética">
                                <span>Consultar Cita</span> &rarr;
                            </a>
                        </div>
                    </div>
                </article>

                <!-- 8. Medicina Preventiva y Longevidad -->
                <article class="service-card" data-category="salud">
                    <div class="service-card__img-wrap">
                        <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?auto=format&fit=crop&w=800&q=80" alt="Medicina Preventiva y Longevidad ALMA" loading="lazy" class="service-card__img">
                        <span class="service-card__badge">Salud Médica</span>
                    </div>
                    <div class="service-card__body">
                        <div class="service-card__header-inline">
                            <span class="service-card__icon">🌱</span>
                            <h3 class="service-card__title">Medicina Preventiva & Longevidad</h3>
                        </div>
                        <p class="service-card__desc">
                            Evaluación integral de salud y biomarcadores celulares para prevenir el envejecimiento prematuro y optimizar tu vitalidad natural.
                        </p>
                        <div class="treatments-block">
                            <span class="treatments-heading">✨ Tratamientos que ofrecemos:</span>
                            <div class="treatment-pills">
                                <span class="treatment-pill">Check-up médico 360°</span>
                                <span class="treatment-pill">Sueroterapia IV (Vitaminas/Glutatión)</span>
                                <span class="treatment-pill">Perfil de biomarcadores</span>
                                <span class="treatment-pill">Optimización mitocondrial</span>
                                <span class="treatment-pill">Terapia antioxidante celular</span>
                                <span class="treatment-pill">Regulación circadiana</span>
                            </div>
                        </div>
                        <div class="service-card__footer">
                            <a href="#reserva" class="service-card__btn" data-preselect="Medicina Preventiva">
                                <span>Consultar Cita</span> &rarr;
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Odontología Integral & Estética Dental -->
                <article class="service-card" data-category="salud">
                    <div class="service-card__img-wrap">
                        <img src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?auto=format&fit=crop&w=800&q=80" alt="Odontología Integral y Estética Dental ALMA - Dra. Wendy Arellano" loading="lazy" class="service-card__img">
                        <span class="service-card__badge">Salud Médica</span>
                    </div>
                    <div class="service-card__body">
                        <div class="service-card__header-inline">
                            <span class="service-card__icon">🦷</span>
                            <h3 class="service-card__title">Odontología Integral & Estética Dental</h3>
                        </div>

                        <!-- Especialista Responsable -->
                        <div class="service-card__specialist">
                            <span class="specialist-badge-icon">👩‍⚕️</span>
                            <div>
                                <strong>Dra. Wendy Arellano</strong>
                                <span>Odontólogo · Estética & Salud Bucal Avanzada</span>
                            </div>
                        </div>

                        <p class="service-card__desc">
                            Bajo la dirección clínica de la <strong>Dra. Wendy Arellano</strong>, cuidamos de tu salud bucodental y armonizamos tu sonrisa con tecnología digital de vanguardia, ortodoncia invisible y rehabilitación estética.
                        </p>

                        <!-- Promo Destacada: Radiografías Periapicales -->
                        <div class="card-promo-callout">
                            <span class="card-promo-tag">✨ SERVICIO DESTACADO · DIAGNÓSTICO DIGITAL</span>
                            <strong>Radiografías Periapicales Digitales</strong>
                            <p>Diagnóstico dental inmediato de alta definición y mínima exposición radiológica. Resultados e informe al instante para ti o tu especialista remitente.</p>
                            <a href="#reserva" class="card-promo-link" data-preselect="Radiografías Periapicales">
                                <span>Solicitar Radiografía Inmediata</span> &rarr;
                            </a>
                        </div>

                        <div class="treatments-block">
                            <span class="treatments-heading">✨ Especialidades & Tratamientos:</span>
                            <div class="treatment-pills">
                                <span class="treatment-pill treatment-pill--promo">📸 Radiografías Periapicales</span>
                                <span class="treatment-pill">Diseño de Sonrisa & Carillas</span>
                                <span class="treatment-pill">Blanqueamiento Dental Láser</span>
                                <span class="treatment-pill">Ortodoncia Invisible</span>
                                <span class="treatment-pill">Implantología & Cirugía Oral</span>
                                <span class="treatment-pill">Periodoncia & Limpieza Ultrasónica</span>
                                <span class="treatment-pill">Endodoncia Microscópica</span>
                                <span class="treatment-pill">Tratamiento de Bruxismo</span>
                            </div>
                        </div>
                        <div class="service-card__footer">
                            <a href="#reserva" class="service-card__btn" data-preselect="Odontología - Dra. Wendy Arellano">
                                <span>Consultar Cita con Dra. Arellano</span> &rarr;
                            </a>
                        </div>
                    </div>
                </article>

                <!-- 9. Salón de Belleza: Estilismo -->
                <article class="service-card" data-category="belleza" id="belleza-lounge">
                    <div class="service-card__img-wrap">
                        <img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?auto=format&fit=crop&w=800&q=80" alt="Salón de Belleza y Estilismo ALMA" loading="lazy" class="service-card__img">
                        <span class="service-card__badge badge--rose">Salón de Belleza</span>
                    </div>
                    <div class="service-card__body">
                        <div class="service-card__header-inline">
                            <span class="service-card__icon">💇‍♀️</span>
                            <h3 class="service-card__title">Estilismo & Hair Spa Capilar</h3>
                        </div>
                        <p class="service-card__desc">
                            Tratamientos capilares de alta gama, coloración orgánica libre de amoniaco, corte visagista y terapias de hidratación botánica.
                        </p>
                        <div class="treatments-block">
                            <span class="treatments-heading">✨ Tratamientos que ofrecemos:</span>
                            <div class="treatment-pills">
                                <span class="treatment-pill">Corte visagista personalizado</span>
                                <span class="treatment-pill">Coloración orgánica tratante</span>
                                <span class="treatment-pill">Balayage & French Glossing</span>
                                <span class="treatment-pill">Queratina botánica reconstructora</span>
                                <span class="treatment-pill">Spa detox del cuero cabelludo</span>
                                <span class="treatment-pill">Peinados y brushing</span>
                            </div>
                        </div>
                        <div class="service-card__footer">
                            <a href="#reserva" class="service-card__btn" data-preselect="Estilismo">
                                <span>Reservar Sesión</span> &rarr;
                            </a>
                        </div>
                    </div>
                </article>

                <!-- 10. Salón de Belleza: Nails Spa -->
                <article class="service-card" data-category="belleza">
                    <div class="service-card__img-wrap">
                        <img src="https://images.unsplash.com/photo-1632345031435-8727f6897d53?auto=format&fit=crop&w=800&q=80" alt="Nails Spa ALMA" loading="lazy" class="service-card__img">
                        <span class="service-card__badge badge--rose">Salón de Belleza</span>
                    </div>
                    <div class="service-card__body">
                        <div class="service-card__header-inline">
                            <span class="service-card__icon">💅</span>
                            <h3 class="service-card__title">Nails Spa & Cuidado Podológico</h3>
                        </div>
                        <p class="service-card__desc">
                            Manicura y pedicura spa en un entorno con instrumental 100% esterilizado en autoclave, sales minerales y esmaltado de alta duración.
                        </p>
                        <div class="treatments-block">
                            <span class="treatments-heading">✨ Tratamientos que ofrecemos:</span>
                            <div class="treatment-pills">
                                <span class="treatment-pill">Manicura rusa y combinada</span>
                                <span class="treatment-pill">Esmaltado semipermanente</span>
                                <span class="treatment-pill">Pedicura spa terapéutica</span>
                                <span class="treatment-pill">Autoclave grado hospitalario</span>
                                <span class="treatment-pill">Parafina nutritiva tibia</span>
                                <span class="treatment-pill">Reconstructor IBX para uñas</span>
                            </div>
                        </div>
                        <div class="service-card__footer">
                            <a href="#reserva" class="service-card__btn" data-preselect="Nails Spa">
                                <span>Reservar Sesión</span> &rarr;
                            </a>
                        </div>
                    </div>
                </article>

                <!-- 11. Salón de Belleza: Cejas y Pestañas -->
                <article class="service-card" data-category="belleza">
                    <div class="service-card__img-wrap">
                        <img src="https://images.unsplash.com/photo-1583001809873-a128495da465?auto=format&fit=crop&w=800&q=80" alt="Diseño de Cejas y Pestañas ALMA" loading="lazy" class="service-card__img">
                        <span class="service-card__badge badge--rose">Salón de Belleza</span>
                    </div>
                    <div class="service-card__body">
                        <div class="service-card__header-inline">
                            <span class="service-card__icon">👁️</span>
                            <h3 class="service-card__title">Diseño de Cejas & Pestañas</h3>
                        </div>
                        <p class="service-card__desc">
                            Sublima tu mirada con técnicas de visagismo milimétrico: laminado con queratina, microblading pelo a pelo y lifting de pestañas.
                        </p>
                        <div class="treatments-block">
                            <span class="treatments-heading">✨ Tratamientos que ofrecemos:</span>
                            <div class="treatment-pills">
                                <span class="treatment-pill">Diseño y visagismo de cejas</span>
                                <span class="treatment-pill">Lifting de pestañas botánico</span>
                                <span class="treatment-pill">Laminado de cejas con queratina</span>
                                <span class="treatment-pill">Microblading y Powder Brows</span>
                                <span class="treatment-pill">Extensiones efecto natural</span>
                                <span class="treatment-pill">Suero reparador folicular</span>
                            </div>
                        </div>
                        <div class="service-card__footer">
                            <a href="#reserva" class="service-card__btn" data-preselect="Cejas y Pestañas">
                                <span>Reservar Sesión</span> &rarr;
                            </a>
                        </div>
                    </div>
                </article>

                <!-- 12. Terapias Holísticas Científicas -->
                <article class="service-card" data-category="holistico" id="terapias-holisticas">
                    <div class="service-card__img-wrap">
                        <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=800&q=80" alt="Terapias Holísticas Científicas ALMA" loading="lazy" class="service-card__img">
                        <span class="service-card__badge badge--green">Terapias Holísticas</span>
                    </div>
                    <div class="service-card__body">
                        <div class="service-card__header-inline">
                            <span class="service-card__icon">🌿</span>
                            <h3 class="service-card__title">Terapias Holísticas con Base Científica</h3>
                        </div>
                        <p class="service-card__desc">
                            Masajes terapéuticos, drenaje linfático médico, aromaterapia clínica y técnicas neurosedantes validadas para reducir el cortisol.
                        </p>
                        <div class="treatments-block">
                            <span class="treatments-heading">✨ Tratamientos que ofrecemos:</span>
                            <div class="treatment-pills">
                                <span class="treatment-pill">Drenaje Linfático (Vodder)</span>
                                <span class="treatment-pill">Masaje descontracturante</span>
                                <span class="treatment-pill">Masaje neurosedante anti-estrés</span>
                                <span class="treatment-pill">Craneofacial con digitopuntura</span>
                                <span class="treatment-pill">Cupping clínico (ventosas)</span>
                                <span class="treatment-pill">Aromaterapia quimiotipada</span>
                            </div>
                        </div>
                        <div class="service-card__footer">
                            <a href="#reserva" class="service-card__btn" data-preselect="Terapias Holísticas">
                                <span>Consultar Sesión</span> &rarr;
                            </a>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- 4. EL MÉTODO ALMA (The Scientific Holistic Journey) -->
    <section class="alma-section alma-method-section" id="metodo">
        <div class="alma-container">
            <div class="alma-section-header text-center">
                <span class="section-tag">NUESTRA METODOLOGÍA</span>
                <h2 class="section-title">El Método ALMA: Tu Bienestar en 4 Etapas</h2>
                <p class="section-subtitle">
                    Un camino coordinado entre doctores, terapeutas y esteticistas para garantizar resultados visibles, seguros y duraderos.
                </p>
            </div>

            <div class="method-steps-grid">
                <div class="step-card">
                    <div class="step-card__num">01</div>
                    <h4 class="step-card__title">Diagnóstico 360°</h4>
                    <p>Evaluamos tu estado clínico, necesidades dermatológicas, estilo de vida y objetivos estéticos para crear tu expediente integral.</p>
                </div>
                <div class="step-card">
                    <div class="step-card__num">02</div>
                    <h4 class="step-card__title">Plan Personalizado</h4>
                    <p>Diseñamos un protocolo a medida combinando las especialidades médicas requeridas con tratamientos de belleza y bienestar.</p>
                </div>
                <div class="step-card">
                    <div class="step-card__num">03</div>
                    <h4 class="step-card__title">Tratamientos en Sinergia</h4>
                    <p>Ejecutamos cada sesión con tecnología médica de punta, cosmética botánica certificada y técnicas relajantes basadas en ciencia.</p>
                </div>
                <div class="step-card">
                    <div class="step-card__num">04</div>
                    <h4 class="step-card__title">Evolución & Bienestar</h4>
                    <p>Realizamos seguimiento continuo para asegurar resultados duraderos, salud óptima y una vitalidad renovada cada día.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4.1 CONOCE NUESTROS ESPACIOS (Video Tour & Experiencia ALMA) -->
    <section class="alma-section alma-spaces-section" id="espacios">
        <div class="alma-container">
            <div class="alma-section-header text-center">
                <span class="section-tag">TOUR VIRTUAL & INSTALACIONES</span>
                <h2 class="section-title">Conoce Nuestros Espacios</h2>
                <p class="section-subtitle">
                    Un santuario diseñado para armonizar el rigor de la medicina con la serenidad del bienestar holístico y el confort de un exclusivo salón de belleza.
                </p>
            </div>

            <div class="spaces-video-wrapper">
                <div class="spaces-video-container">
                    <!-- Video Player (HTML5 / Embed) -->
                    <video id="alma-spaces-video" class="spaces-video-player" controls poster="https://images.unsplash.com/photo-1629909613654-28e377c37b09?auto=format&fit=crop&w=1600&q=85" preload="metadata">
                        <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/video/alma-tour.mp4'); ?>" type="video/mp4">
                        Tu navegador no soporta la reproducción de video HTML5.
                    </video>

                    <!-- Play Overlay (Luxury interactive cover) -->
                    <div class="video-play-overlay" id="video-play-overlay">
                        <button class="video-play-btn" id="video-play-btn" type="button" aria-label="Reproducir video de ALMA">
                            <svg width="34" height="34" viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                        </button>
                        <div class="video-play-text">
                            <strong>Recorre las Instalaciones de ALMA</strong>
                            <span>Haz clic para iniciar el video tour por nuestras salas clínicas y de bienestar</span>
                        </div>
                    </div>
                </div>

                <!-- Espacios Destacados -->
                <div class="spaces-features-grid">
                    <div class="space-feature-card">
                        <div class="space-feature-icon">🏥</div>
                        <h4>Consultorios Médicos Privados</h4>
                        <p>Espacios clínicos equipados con tecnología médica de alta resolución bajo estrictas normas de bioseguridad.</p>
                    </div>
                    <div class="space-feature-card">
                        <div class="space-feature-icon">🌿</div>
                        <h4>Cabinas Spa & Terapias Holísticas</h4>
                        <p>Aislamiento acústico, aromaterapia botánica y cromoterapia para propiciar la desconexión mental y reducir el cortisol.</p>
                    </div>
                    <div class="space-feature-card">
                        <div class="space-feature-icon">💅</div>
                        <h4>Beauty & Styling Lounge</h4>
                        <p>Área exclusiva para estilismo, nails spa y diseño de miradas, con instrumental 100% esterilizado en autoclave.</p>
                    </div>
                    <div class="space-feature-card">
                        <div class="space-feature-icon">✨</div>
                        <h4>Salas de Espera & Bienestar 360°</h4>
                        <p>Un ambiente cálido, privado y sereno diseñado para que tu experiencia sea reconfortante desde el primer minuto.</p>
                    </div>
                </div>

                <div class="spaces-cta-wrapper text-center">
                    <a href="#reserva" class="btn btn--gold btn--lg">
                        <span>Agendar Cita y Visitar ALMA</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. INTERACTIVE LEAD MAGNET (Test de Diagnóstico Rápido) -->
    <section class="alma-section alma-quiz-section" id="diagnostico-test">
        <div class="alma-container">
            <div class="quiz-card">
                <div class="quiz-card__header text-center">
                    <span class="badge-gold">HERRAMIENTA INTERACTIVA</span>
                    <h2>Encuentra tu Tratamiento Ideal en ALMA</h2>
                    <p>Responde 2 preguntas sencillas y nuestro sistema te recomendará el área y especialista perfecto para ti.</p>
                </div>

                <div class="quiz-step" id="quiz-step-1">
                    <h3 class="quiz-question">1. ¿Cuál es tu prioridad principal hoy?</h3>
                    <div class="quiz-options">
                        <button type="button" class="quiz-opt" data-target="piel">
                            <span class="quiz-opt__icon">✨</span>
                            <strong>Cuidado & Salud de la Piel</strong>
                            <small>Acné, manchas, rejuvenecimiento, lunares</small>
                        </button>
                        <button type="button" class="quiz-opt" data-target="mujer">
                            <span class="quiz-opt__icon">🌸</span>
                            <strong>Salud Femenina & Hormonal</strong>
                            <small>Chequeo ginecológico, ecografía, nutrición</small>
                        </button>
                        <button type="button" class="quiz-opt" data-target="estetica">
                            <span class="quiz-opt__icon">💎</span>
                            <strong>Armonización Estética</strong>
                            <small>Medicina estética, contorno facial o corporal</small>
                        </button>
                        <button type="button" class="quiz-opt" data-target="belleza">
                            <span class="quiz-opt__icon">💅</span>
                            <strong>Look, Cabello & Uñas</strong>
                            <small>Estilismo, manicura spa, cejas y pestañas</small>
                        </button>
                        <button type="button" class="quiz-opt" data-target="sonrisa">
                            <span class="quiz-opt__icon">🦷</span>
                            <strong>Salud Dental & Sonrisa</strong>
                            <small>Diseño de sonrisa, blanqueamiento, ortodoncia</small>
                        </button>
                        <button type="button" class="quiz-opt" data-target="relax">
                            <span class="quiz-opt__icon">🌿</span>
                            <strong>Estrés, Tensión & Bienestar</strong>
                            <small>Masajes terapéuticos, psicología, relajación</small>
                        </button>
                    </div>
                </div>

                <div class="quiz-result" id="quiz-result" style="display: none;">
                    <div class="quiz-result__box">
                        <div class="quiz-result__badge">RECOMENDACIÓN PERSONALIZADA</div>
                        <h3 id="result-title">Especialidad Recomendada</h3>
                        <p id="result-desc">Descripción del tratamiento ideal para tu necesidad.</p>
                        <div class="quiz-result__actions">
                            <a href="#reserva" class="btn btn--gold" id="result-cta-btn">Agendar esta Consulta con Prioridad</a>
                            <button type="button" class="btn btn--outline" id="quiz-reset-btn">Repetir Test</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. TESTIMONIALS & SOCIAL PROOF -->
    <section class="alma-section alma-testimonials-section" id="testimonios">
        <div class="alma-container">
            <div class="alma-section-header text-center">
                <span class="section-tag">TESTIMONIOS REALES</span>
                <h2 class="section-title">Lo que dicen quienes ya confían en ALMA</h2>
                <p class="section-subtitle">
                    Historias de pacientes que transformaron su salud y belleza con nuestro enfoque integrativo.
                </p>
            </div>

            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-card__stars">★★★★★</div>
                    <p class="testimonial-card__text">
                        "Había visitado varios dermatólogos sin solucionar mi rosácea. En ALMA me atendió el equipo médico de dermatología junto con la nutricionista. El cambio en mi piel y en mi autoestima ha sido radical. Un trato súper humano y profesional."
                    </p>
                    <div class="testimonial-card__author">
                        <div class="author-avatar">MC</div>
                        <div class="author-info">
                            <strong>Mariana C.</strong>
                            <small>Tratamiento de Dermatología & Nutrición</small>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-card__stars">★★★★★</div>
                    <p class="testimonial-card__text">
                        "Buscaba hacerme medicina estética pero me daba miedo quedar artificial. En ALMA la doctora me explicó con ciencia cada detalle del tratamiento. El resultado es tan natural que todos me dicen qué descansada me veo. Además aproveché para el Nails Spa y salí renovada."
                    </p>
                    <div class="testimonial-card__author">
                        <div class="author-avatar">LG</div>
                        <div class="author-info">
                            <strong>Lucía G.</strong>
                            <small>Medicina Estética & Nails Spa</small>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-card__stars">★★★★★</div>
                    <p class="testimonial-card__text">
                        "La combinación entre medicina preventiva y terapias holísticas es lo mejor que me ha pasado para el estrés. Me hicieron una ecografía integral, evaluación psicológica y sesiones de masaje terapéutico. Es el único centro donde siento que me cuidan de verdad."
                    </p>
                    <div class="testimonial-card__author">
                        <div class="author-avatar">VR</div>
                        <div class="author-info">
                            <strong>Valeria R.</strong>
                            <small>Salud Integral & Terapias Holísticas</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. APPOINTMENT RESERVATION SECTION (CRO Booking Engine) -->
    <section class="alma-section alma-booking-section" id="reserva">
        <div class="alma-container">
            <div class="booking-wrapper">
                <div class="booking-info">
                    <span class="badge-gold">ATENCIÓN PERSONALIZADA</span>
                    <h2 class="booking-title">Reserva tu Cita o Diagnóstico Inicial</h2>
                    <p class="booking-desc">
                        Selecciona el servicio de tu interés y déjanos tus datos. Nuestro equipo coordinará tu cita con el especialista médico o profesional correspondiente en menos de 2 horas.
                    </p>

                    <div class="booking-perks">
                        <div class="b-perk">
                            <span class="b-check">✓</span>
                            <span>Confirmación ágil por WhatsApp o llamada</span>
                        </div>
                        <div class="b-perk">
                            <span class="b-check">✓</span>
                            <span>Historia clínica confidencial y privada</span>
                        </div>
                        <div class="b-perk">
                            <span class="b-check">✓</span>
                            <span>Instalaciones sanitarias y de belleza de primer nivel</span>
                        </div>
                        <div class="b-perk">
                            <span class="b-check">✓</span>
                            <span>Atención interdisciplinar coordinada</span>
                        </div>
                    </div>

                    <div class="booking-contact-direct">
                        <small>¿Prefieres hablar directamente ahora?</small>
                        <a href="https://wa.me/584124322202?text=Hola%20ALMA,%20deseo%20agendar%20una%20cita%20inmediata" target="_blank" class="btn btn--wa-direct">
                            <span>Chatear por WhatsApp (0412-4322202)</span> &rarr;
                        </a>
                    </div>
                </div>

                <div class="booking-form-box">
                    <form id="alma-appointment-form" class="alma-form">
                        <div class="form-group">
                            <label for="alma-name">Nombre y Apellidos *</label>
                            <input type="text" id="alma-name" name="name" required placeholder="Ej: Brenda Álvarez">
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="alma-phone">Teléfono / WhatsApp *</label>
                                <input type="tel" id="alma-phone" name="phone" required placeholder="Ej: +54 9 11 2345-6789">
                            </div>
                            <div class="form-group">
                                <label for="alma-email">Correo Electrónico (opcional)</label>
                                <input type="email" id="alma-email" name="email" placeholder="tucorreo@ejemplo.com">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alma-service">Especialidad o Servicio de Interés *</label>
                            <select id="alma-service" name="service" required>
                                <option value="">-- Selecciona una Especialidad --</option>
                                <optgroup label="🩺 Especialidades de Salud & Odontología">
                                    <option value="Odontología - Dra. Wendy Arellano">Odontología Integral & Estética Dental (Dra. Wendy Arellano)</option>
                                    <option value="Radiografías Periapicales">Radiografías Periapicales Digitales (Diagnóstico Inmediato)</option>
                                    <option value="Dermatología">Dermatología Clínica & Quirúrgica</option>
                                    <option value="Ginecología">Ginecología Integral & Femenina</option>
                                    <option value="Nutrición">Nutrición Clínica & Antiinflamatoria</option>
                                    <option value="Psicología">Psicología & Bienestar Emocional</option>
                                    <option value="Ecografía Integral">Ecografía Integral de Alta Resolución</option>
                                    <option value="Medicina Preventiva">Medicina Preventiva & Longevidad</option>
                                </optgroup>
                                <optgroup label="✨ Medicina & Cirugía Estética">
                                    <option value="Medicina Estética">Medicina Estética Avanzada (Armonización, Toxina, Fillers)</option>
                                    <option value="Cirugía Estética">Cirugía Estética y Reparadora</option>
                                </optgroup>
                                <optgroup label="💅 Salón de Belleza & Spa">
                                    <option value="Estilismo">Estilismo & Hair Spa Capilar</option>
                                    <option value="Nails Spa">Nails Spa (Manicura & Pedicura Médica)</option>
                                    <option value="Cejas y Pestañas">Cejas, Pestañas & Visagismo</option>
                                </optgroup>
                                <optgroup label="🌿 Terapias Holísticas">
                                    <option value="Terapias Holísticas">Masajes Terapéuticos & Bienestar Científico</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="alma-message">Comentario o Consulta Específica</label>
                            <textarea id="alma-message" name="message" rows="3" placeholder="Cuéntanos brevemente tu motivo de consulta o preferencia de horario..."></textarea>
                        </div>

                        <button type="submit" class="btn btn--gold btn--full btn--submit">
                            <span>Solicitar Cita con Especialista</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </button>

                        <div id="alma-form-response" class="form-response-msg" style="display:none;"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. FREQUENTLY ASKED QUESTIONS (FAQ - Eliminando Objeciones) -->
    <section class="alma-section alma-faq-section">
        <div class="alma-container">
            <div class="alma-section-header text-center">
                <span class="section-tag">PREGUNTAS FRECUENTES</span>
                <h2 class="section-title">Resolvemos tus Dudas</h2>
                <p class="section-subtitle">Todo lo que necesitas saber antes de tu primera visita a ALMA.</p>
            </div>

            <div class="faq-accordion">
                <details class="faq-item" open>
                    <summary class="faq-question">
                        ¿Cómo fusionan la medicina con la belleza en ALMA?
                        <span class="faq-icon">+</span>
                    </summary>
                    <div class="faq-answer">
                        <p>En ALMA entendemos que la belleza auténtica es el reflejo de la salud interior. Antes de realizar cualquier tratamiento estético de impacto, valoramos factores clínicos como tu equilibrio hormonal, estado dermatológico, niveles de estrés y nutrición. De esta forma, los resultados son armónicos, seguros y perdurables en el tiempo.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-question">
                        ¿Quién realiza los procedimientos médicos y estéticos?
                        <span class="faq-icon">+</span>
                    </summary>
                    <div class="faq-answer">
                        <p>Todos los diagnósticos y tratamientos clínicos (dermatología, ginecología, ecografías, nutrición, psicología, medicina estética y cirugía) son realizados exclusivamente por médicos y especialistas titulados, registrados y colegiados en sus respectivas especialidades.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-question">
                        ¿Puedo agendar servicios de belleza (Nails, Estilismo, Cejas) sin tener consulta médica previa?
                        <span class="faq-icon">+</span>
                    </summary>
                    <div class="faq-answer">
                        <p>¡Sí, por supuesto! Nuestro Beauty & Nails Lounge funciona como un espacio independiente de cuidado personal y relajación. Puedes reservar libremente tus sesiones de peluquería, manicura o cejas y pestañas cuando lo desees.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-question">
                        ¿Qué significa que las terapias holísticas están fundamentadas en la ciencia?
                        <span class="faq-icon">+</span>
                    </summary>
                    <div class="faq-answer">
                        <p>Significa que aplicamos terapias de bienestar cuya eficacia ha sido validada por estudios clínicos: drenaje linfático con metodología médica, técnicas neurofisiológicas para la reducción medible de los niveles de cortisol (la hormona del estrés) y formulaciones botánicas con principios activos comprobados.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-question">
                        ¿Cómo funciona la confirmación de citas?
                        <span class="faq-icon">+</span>
                    </summary>
                    <div class="faq-answer">
                        <p>Una vez completado el formulario de reserva, nuestro equipo te contactará por WhatsApp o vía telefónica para coordinar el día y horario exacto que mejor se adapte a tu agenda, informándote de cualquier indicación previa.</p>
                    </div>
                </details>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();

