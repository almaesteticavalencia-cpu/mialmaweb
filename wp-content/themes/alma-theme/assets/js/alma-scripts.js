/**
 * ALMA Medical, Beauty & Wellness Interactive Scripts
 */

document.addEventListener('DOMContentLoaded', function () {
    'use strict';

    // 1. Mobile Menu Drawer
    const burger = document.getElementById('alma-burger');
    const closeBtn = document.getElementById('alma-close-menu');
    const mobileMenu = document.getElementById('alma-mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-link');

    if (burger && mobileMenu) {
        burger.addEventListener('click', function () {
            mobileMenu.classList.add('open');
            document.body.style.overflow = 'hidden';
            burger.setAttribute('aria-expanded', 'true');
        });

        const closeMobileNav = function () {
            mobileMenu.classList.remove('open');
            document.body.style.overflow = '';
            if (burger) burger.setAttribute('aria-expanded', 'false');
        };

        if (closeBtn) closeBtn.addEventListener('click', closeMobileNav);

        mobileLinks.forEach(function (link) {
            link.addEventListener('click', closeMobileNav);
        });
    }

    // 2. Services Filter Tabs
    const filterPills = document.querySelectorAll('#services-filter .filter-pill');
    const serviceCards = document.querySelectorAll('.service-card');

    filterPills.forEach(function (pill) {
        pill.addEventListener('click', function () {
            filterPills.forEach(function (p) { p.classList.remove('active'); });
            this.classList.add('active');

            const category = this.getAttribute('data-category');

            serviceCards.forEach(function (card) {
                const cardCat = card.getAttribute('data-category');
                if (category === 'all' || cardCat === category) {
                    card.style.display = 'flex';
                    card.style.animation = 'fadeIn 0.4s ease forwards';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    // 3. Service Card Click -> Auto Preselect in Booking Form
    const serviceButtons = document.querySelectorAll('.service-card__btn');
    const serviceSelect = document.getElementById('alma-service');
    const messageInput = document.getElementById('alma-message');

    serviceButtons.forEach(function (btn) {
        btn.addEventListener('click', function () {
            const preselect = this.getAttribute('data-preselect');
            if (serviceSelect && preselect) {
                for (let i = 0; i < serviceSelect.options.length; i++) {
                    if (serviceSelect.options[i].value === preselect) {
                        serviceSelect.selectedIndex = i;
                        break;
                    }
                }
            }
        });
    });

    // 3.1 Treatment Pill Click -> Auto Preselect & Note Treatment in Booking Form
    const treatmentPills = document.querySelectorAll('.treatment-pill');
    treatmentPills.forEach(function (pill) {
        pill.style.cursor = 'pointer';
        pill.setAttribute('title', 'Clic para consultar por este tratamiento específico');
        pill.addEventListener('click', function () {
            const card = this.closest('.service-card');
            const preselectBtn = card ? card.querySelector('.service-card__btn') : null;
            const preselect = preselectBtn ? preselectBtn.getAttribute('data-preselect') : '';
            const treatmentName = this.textContent.trim();

            if (serviceSelect && preselect) {
                for (let i = 0; i < serviceSelect.options.length; i++) {
                    if (serviceSelect.options[i].value === preselect) {
                        serviceSelect.selectedIndex = i;
                        break;
                    }
                }
            }

            if (messageInput) {
                messageInput.value = 'Hola, deseo consultar disponibilidad y precio para el tratamiento: ' + treatmentName;
            }

            // Si es radiografía periapical, preseleccionar la opción específica
            if (treatmentName.indexOf('Radiografías Periapicales') !== -1 && serviceSelect) {
                for (let i = 0; i < serviceSelect.options.length; i++) {
                    if (serviceSelect.options[i].value === 'Radiografías Periapicales') {
                        serviceSelect.selectedIndex = i;
                        break;
                    }
                }
            }

            const bookingSection = document.getElementById('reserva');
            if (bookingSection) {
                bookingSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });

    // 3.1.1 Promo Links Click -> Auto Preselect & Note in Booking Form
    const promoLinks = document.querySelectorAll('.card-promo-link');
    promoLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            const preselect = this.getAttribute('data-preselect') || 'Radiografías Periapicales';
            if (serviceSelect) {
                for (let i = 0; i < serviceSelect.options.length; i++) {
                    if (serviceSelect.options[i].value === preselect || serviceSelect.options[i].value.indexOf(preselect) !== -1) {
                        serviceSelect.selectedIndex = i;
                        break;
                    }
                }
            }
            if (messageInput) {
                messageInput.value = 'Hola, deseo agendar cita para el servicio destacado de: Radiografías Periapicales Digitales';
            }
        });
    });

    // 3.2 Spaces Video Play Overlay Handling
    const spacesVideo = document.getElementById('alma-spaces-video');
    const playOverlay = document.getElementById('video-play-overlay');
    const playBtn = document.getElementById('video-play-btn');

    if (spacesVideo && playOverlay) {
        const startVideo = function () {
            spacesVideo.play().then(function () {
                playOverlay.classList.add('hidden');
            }).catch(function () {
                // Si aún no hay archivo local o el navegador restringe, ocultar overlay para permitir controles nativos
                playOverlay.classList.add('hidden');
            });
        };

        if (playBtn) {
            playBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                startVideo();
            });
        }

        playOverlay.addEventListener('click', startVideo);

        spacesVideo.addEventListener('ended', function () {
            playOverlay.classList.remove('hidden');
        });
    }

    // 4. Interactive Diagnostic Tool (Lead Magnet Quiz)
    const quizButtons = document.querySelectorAll('.quiz-opt');
    const quizStep1 = document.getElementById('quiz-step-1');
    const quizResult = document.getElementById('quiz-result');
    const resultTitle = document.getElementById('result-title');
    const resultDesc = document.getElementById('result-desc');
    const resultCta = document.getElementById('result-cta-btn');
    const resetBtn = document.getElementById('quiz-reset-btn');

    const recommendations = {
        piel: {
            title: 'Dermatología Clínica & Medicina Estética',
            desc: 'La salud de tu piel requiere un diagnóstico médico preciso para tratar la causa de raíz (acné, manchas o envejecimiento celular) antes de proceder con bioestimuladores o láser.',
            service: 'Dermatología'
        },
        mujer: {
            title: 'Ginecología Integral, Ecografía & Nutrición',
            desc: 'Tu bienestar hormonal y salud reproductiva se cuidan mejor con una revisión ginecológica completa, ecografía de alta resolución y nutrición antiinflamatoria.',
            service: 'Ginecología'
        },
        estetica: {
            title: 'Medicina & Cirugía Estética Armónica',
            desc: 'Tratamientos médicos no invasivos con neuromoduladores, ácido hialurónico y aparatología aprobada por la FDA para resaltar tu belleza natural sin cambios artificiales.',
            service: 'Medicina Estética'
        },
        belleza: {
            title: 'Salón de Belleza Consciente & Nails Spa',
            desc: 'Disfruta de una experiencia relajante en nuestro salón: cuidado capilar botánico, visagismo de cejas y pestañas, y manicura/pedicura con esterilización clínica.',
            service: 'Estilismo'
        },
        sonrisa: {
            title: 'Odontología Integral & Estética Dental · Dra. Wendy Arellano',
            desc: 'Atención personalizada con la Dra. Wendy Arellano: diseño de sonrisa digital, ortodoncia invisible, blanqueamiento láser e implantología guiada.',
            service: 'Odontología - Dra. Wendy Arellano'
        },
        relax: {
            title: 'Terapias Holísticas Basadas en Ciencia & Psicología',
            desc: 'Protocolos clínicos diseñados para reducir niveles de cortisol: drenaje linfático método Vodder, masajes neurosedantes y acompañamiento psicológico.',
            service: 'Terapias Holísticas'
        }
    };

    quizButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            const target = this.getAttribute('data-target');
            const data = recommendations[target];

            if (data && resultTitle && resultDesc && quizResult) {
                resultTitle.textContent = data.title;
                resultDesc.textContent = data.desc;
                quizStep1.style.display = 'none';
                quizResult.style.display = 'block';

                if (resultCta) {
                    resultCta.onclick = function () {
                        if (serviceSelect) {
                            serviceSelect.value = data.service;
                        }
                    };
                }
            }
        });
    });

    if (resetBtn) {
        resetBtn.addEventListener('click', function () {
            if (quizResult && quizStep1) {
                quizResult.style.display = 'none';
                quizStep1.style.display = 'block';
            }
        });
    }

    // 5. Booking Form Submission (AJAX + WhatsApp Bridge)
    const bookingForm = document.getElementById('alma-appointment-form');
    const responseBox = document.getElementById('alma-form-response');

    if (bookingForm) {
        bookingForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const submitBtn = bookingForm.querySelector('.btn--submit');
            const originalBtnText = submitBtn ? submitBtn.innerHTML : '';

            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span>Procesando solicitud...</span>';
            }

            const formData = new FormData(bookingForm);
            formData.append('action', 'alma_submit_appointment');
            if (typeof almaData !== 'undefined' && almaData.nonce) {
                formData.append('nonce', almaData.nonce);
            }

            const ajaxUrl = (typeof almaData !== 'undefined' && almaData.ajaxurl) ? almaData.ajaxurl : '';

            // Fallback directo a WhatsApp si no hay AJAX configurado o en caso de error
            const name = formData.get('name') || '';
            const phone = formData.get('phone') || '';
            const service = formData.get('service') || '';
            const msg = formData.get('message') || '';

            const waText = encodeURIComponent(
                '¡Hola ALMA! Deseo solicitar una cita con un especialista:\n\n' +
                '👤 Nombre: ' + name + '\n' +
                '📱 Teléfono: ' + phone + '\n' +
                '🩺 Servicio: ' + service + '\n' +
                (msg ? '📝 Detalle: ' + msg : '')
            );
            const directWaUrl = 'https://wa.me/584124322202?text=' + waText;

            if (ajaxUrl) {
                fetch(ajaxUrl, {
                    method: 'POST',
                    body: formData
                })
                .then(function (res) { return res.json(); })
                .then(function (data) {
                    if (data.success) {
                        showSuccess(data.data.message || '¡Solicitud registrada correctamente!', data.data.whatsapp_url || directWaUrl);
                    } else {
                        showError(data.data.message || 'Ocurrió un error al procesar los datos.');
                    }
                })
                .catch(function () {
                    // Si falla el servidor local, derivamos directamente a WhatsApp
                    showSuccess('¡Datos listos! Pulsa el botón abajo para confirmar directamente por WhatsApp.', directWaUrl);
                })
                .finally(function () {
                    if (submitBtn) {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalBtnText;
                    }
                });
            } else {
                showSuccess('¡Datos listos! Pulsa el botón abajo para confirmar directamente por WhatsApp.', directWaUrl);
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;
                }
            }
        });
    }

    function showSuccess(message, waUrl) {
        if (!responseBox) return;
        responseBox.className = 'form-response-msg success';
        responseBox.innerHTML = '<strong>' + message + '</strong><br>' +
            '<div style="margin-top:14px;">' +
            '<a href="' + waUrl + '" target="_blank" class="btn btn--gold" style="padding:10px 20px; font-size:0.88rem;">' +
            '📲 Abrir WhatsApp y Confirmar Turno Ahora' +
            '</a>' +
            '</div>';
        responseBox.style.display = 'block';
    }

    function showError(message) {
        if (!responseBox) return;
        responseBox.className = 'form-response-msg error';
        responseBox.innerHTML = message;
        responseBox.style.display = 'block';
    }
});

