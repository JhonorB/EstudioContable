<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    
    <!-- SEO Optimization -->
    <title>@yield('meta_title', 'Estudio Contable Ponce - Asesoría Tributaria, Contable y Laboral')</title>
    <meta name="description" content="@yield('meta_description', 'Estudio Contable Ponce ofrece servicios de asesoría contable, tributaria, laboral y constitución de empresas desde 2016 en Lima, Perú. Liderado por CPC Diana Ponce Lezcano.')">
    <meta name="keywords" content="estudio contable, asesoría tributaria, contabilidad lima, diana ponce, declaracion sunat, ple, plame, constitucion de empresas, estudio contable ponce">
    <meta name="author" content="Estudio Contable Ponce">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('meta_title', 'Estudio Contable Ponce - Asesoría Contable')">
    <meta property="og:description" content="Especialistas en asesoría tributaria, contable y empresarial. Más de 10 años de experiencia ayudando a empresas a crecer.">
    <meta property="og:image" content="{{ asset('images/logo_og.jpg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('meta_title', 'Estudio Contable Ponce')">
    <meta property="twitter:description" content="Especialistas en asesoría tributaria, contable y empresarial.">

    <!-- Google Fonts: Inter and Merriweather -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    
    <style>
        :root {
            --ponce-primary: #0F2C59;
            --ponce-primary-dark: #0a1e3d;
            --ponce-secondary: #ffffff;
            --ponce-gold: #0F2C59;
            --ponce-light: #ffffff;
            --ponce-dark: #0f172a;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--ponce-light);
            color: var(--ponce-dark);
            scroll-behavior: smooth;
        }

        h1, h2, h3, h4, h5, h6, .navbar-brand {
            font-family: 'Merriweather', Georgia, serif;
        }

        /* Sticky Navbar */
        .navbar {
            background-color: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
            border-bottom: 1px solid #e2e8f0;
        }

        .navbar-brand {
            font-weight: 800;
            color: var(--ponce-primary) !important;
            letter-spacing: 0.5px;
        }

        .navbar-brand span {
            color: var(--ponce-primary);
        }

        .nav-link {
            font-weight: 600;
            color: var(--ponce-dark) !important;
            margin: 0 8px;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--ponce-primary);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        .nav-link:hover {
            color: var(--ponce-primary) !important;
        }

        /* Hero and buttons */
        .btn-ponce-primary {
            background-color: var(--ponce-primary);
            color: #ffffff;
            font-weight: 600;
            padding: 10px 24px;
            border-radius: 6px;
            border: 2px solid var(--ponce-primary);
            transition: all 0.3s ease;
        }

        .btn-ponce-primary:hover {
            background-color: var(--ponce-primary-dark);
            border-color: var(--ponce-primary-dark);
            color: #ffffff;
            transform: translateY(-2px);
        }

        .btn-ponce-outline {
            background-color: transparent;
            color: var(--ponce-primary);
            font-weight: 600;
            padding: 10px 24px;
            border-radius: 6px;
            border: 2px solid var(--ponce-primary);
            transition: all 0.3s ease;
        }

        .btn-ponce-outline:hover {
            background-color: var(--ponce-primary);
            color: #ffffff;
            transform: translateY(-2px);
        }

        /* Floating WhatsApp Button */
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #fff;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .whatsapp-float:hover {
            background-color: #20ba5a;
            color: #fff;
            transform: scale(1.1);
        }

        /* Footer */
        footer {
            background-color: #0f1d33;
            color: #a5b4fc;
        }

        footer .footer-title {
            color: #ffffff;
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
        }

        footer .footer-title::after {
            content: '';
            position: absolute;
            width: 30px;
            height: 2px;
            bottom: -8px;
            left: 0;
            background-color: var(--ponce-gold);
        }

        footer a {
            color: #a5b4fc;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: var(--ponce-gold);
        }

        .bg-ponce-gradient {
            background: linear-gradient(135deg, var(--ponce-primary) 0%, var(--ponce-primary-dark) 100%);
            color: white;
        }
    </style>
    @yield('styles')
</head>
<body style="overflow: hidden;">

    <!-- Preloader -->
    <div id="preloader" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; background-color: #ffffff; z-index: 99999; display: flex; flex-direction: column; align-items: center; justify-content: center; transition: opacity 0.5s ease, visibility 0.5s ease;">
        <div class="text-center">
            <!-- Logo Completo de Estudio Contable Ponce -->
            <img src="{{ asset('images/Logocompleto.png') }}" alt="Estudio Contable Ponce" style="max-width: 280px; height: auto; margin-bottom: 25px;">
            <!-- Loading Bar Container -->
            <div style="width: 200px; height: 4px; background-color: #e2e8f0; border-radius: 10px; overflow: hidden; margin: 0 auto;">
                <div id="preloader-bar" style="width: 0%; height: 100%; background-color: #0F2C59; border-radius: 10px; transition: width 0.9s cubic-bezier(0.1, 0.8, 0.25, 1);"></div>
            </div>
        </div>
    </div>

    <!-- Header Navigation -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center me-4" href="{{ route('home') }}">
                <img src="{{ asset('images/Logocompleto.png') }}" alt="Estudio Contable Ponce" height="75">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav align-items-center ms-auto">
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('nosotros') ? 'active' : '' }}" href="{{ route('nosotros') }}">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('servicios') ? 'active' : '' }}" href="{{ route('servicios') }}">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('contacto') ? 'active' : '' }}" href="{{ route('contacto') }}">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Modal Asesoría Gratis -->
    <div class="modal fade" id="asesoriaModal" tabindex="-1" aria-labelledby="asesoriaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 12px; overflow: hidden;">
                <div class="modal-header text-white" style="background: linear-gradient(135deg, var(--ponce-primary) 0%, #071630 100%); border-bottom: none;">
                    <h5 class="modal-title fw-bold d-flex align-items-center" id="asesoriaModalLabel">
                        <i class="bi bi-gift-fill me-2 text-warning"></i> Asesoría Gratuita
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 text-center">
                    <img src="{{ asset('images/contadoraPonce..png') }}" alt="Diana Ponce" class="rounded-circle mb-3 shadow-sm" style="width: 90px; height: 90px; object-fit: cover; border: 3px solid #f8fafc;">
                    <h4 class="fw-bold mb-2 text-ponce-dark">¡Optimiza tus impuestos hoy!</h4>
                    <p class="text-muted mb-4">Aprovecha nuestra <strong>consultoría gratuita de 15 minutos</strong>. Resuelve tus dudas sobre SUNAT, planillas o constitución de empresas sin compromiso.</p>
                    <a href="{{ route('contacto') }}" class="btn btn-warning fw-bold btn-lg w-100 rounded-pill mb-2 shadow-sm text-dark transition" style="letter-spacing: 0.5px;">
                        Solicitar Asesoría Ahora
                    </a>
                    <p class="small text-muted mt-3 mb-0">Cupos limitados por semana.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/51920369991?text=Hola,%20quisiera%20solicitar%20una%20asesor%C3%ADa%20con%20el%20Estudio%20Contable%20Ponce" class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Contacto por WhatsApp">
        <i class="bi bi-whatsapp"></i>
    </a>

    <!-- Footer -->
    <footer class="pt-5 pb-3">
        <div class="container">
            <div class="row g-4 mb-4">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ asset('images/Logocompleto.png') }}" alt="Estudio Contable Ponce" height="80" class="bg-white p-2 rounded">
                    </div>
                    <p class="text-white-50">Respaldamos el crecimiento de tu negocio con soluciones tributarias, contables y laborales eficientes desde el año 2016.</p>
                    <p class="text-white-50 small mb-0">CPC Diana Ponce Lezcano | RUC: 20601127823</p>
                </div>
                <div class="col-md-4 col-lg-2">
                    <h5 class="footer-title">Enlaces rápidos</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}" class="d-block py-1">Inicio</a></li>
                        <li><a href="{{ route('nosotros') }}" class="d-block py-1">Nosotros</a></li>
                        <li><a href="{{ route('servicios') }}" class="d-block py-1">Servicios</a></li>
                        <li><a href="{{ route('contacto') }}" class="d-block py-1">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-lg-3">
                    <h5 class="footer-title">Servicios principales</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('servicios') }}" class="d-block py-1">Asesoría Tributaria</a></li>
                        <li><a href="{{ route('servicios') }}" class="d-block py-1">Asesoría Contable</a></li>
                        <li><a href="{{ route('servicios') }}" class="d-block py-1">Asesoría Laboral</a></li>
                        <li><a href="{{ route('servicios') }}" class="d-block py-1">Constitución de Empresas</a></li>
                    </ul>
                </div>
                <div class="col-md-4 col-lg-3">
                    <h5 class="footer-title">Contacto</h5>
                    <ul class="list-unstyled text-white-50">
                        <li class="mb-2" title="Sede Principal"><i class="bi bi-geo-alt-fill text-warning me-2"></i> C.C. Plaza Vitarte Block D Of. 2D-107, Lima</li>
                        <li class="mb-2" title="Sucursal"><i class="bi bi-building text-warning me-2"></i> Sucursal: Mayorazgo, Lima</li>
                        <li class="mb-2"><i class="bi bi-telephone-fill text-warning me-2"></i> 920 369 991</li>
                        <li class="mb-2"><i class="bi bi-envelope-fill text-warning me-2"></i> contabilidadesponce@hotmail.com</li>
                    </ul>
                    <div class="d-flex gap-2 mt-3">
                        <a href="https://facebook.com" target="_blank" class="btn btn-outline-light btn-sm rounded-circle" style="width: 32px; height: 32px; display:flex; align-items:center; justify-content:center;"><i class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com" target="_blank" class="btn btn-outline-light btn-sm rounded-circle" style="width: 32px; height: 32px; display:flex; align-items:center; justify-content:center;"><i class="bi bi-instagram"></i></a>
                        <a href="https://linkedin.com" target="_blank" class="btn btn-outline-light btn-sm rounded-circle" style="width: 32px; height: 32px; display:flex; align-items:center; justify-content:center;"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <hr class="border-secondary">
            <div class="text-center text-white-50 small">
                &copy; {{ date('Y') }} Estudio Contable Ponce. Todos los derechos reservados.
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')

    <!-- Preloader script (Fades out after exactly 1 second) -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const bar = document.getElementById('preloader-bar');
            const preloader = document.getElementById('preloader');
            
            // Animate loading bar to 100%
            setTimeout(() => {
                if (bar) bar.style.width = '100%';
            }, 50);
            
            // Fade out preloader at 1000ms (1 second)
            setTimeout(() => {
                if (preloader) {
                    preloader.style.opacity = '0';
                    preloader.style.visibility = 'hidden';
                }
                document.body.style.overflow = 'auto';
            }, 1000);

            // Trigger Asesoria Modal after 3.5 seconds if not seen in this session
            setTimeout(() => {
                if (!sessionStorage.getItem('asesoriaModalSeen')) {
                    const asesoriaModalEl = document.getElementById('asesoriaModal');
                    if (asesoriaModalEl) {
                        const asesoriaModal = new bootstrap.Modal(asesoriaModalEl);
                        asesoriaModal.show();
                        sessionStorage.setItem('asesoriaModalSeen', 'true');
                    }
                }
            }, 3500);
        });
    </script>
</body>
</html>
