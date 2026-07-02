@extends('layouts.web')

@section('meta_title', 'Nosotros - Estudio Contable Ponce')
@section('meta_description', 'Conoce la historia, misión, visión y valores de Estudio Contable Ponce, liderado por CPC Diana Ponce Lezcano desde 2016.')

@section('content')

<!-- Header Banner -->
<section class="py-5 text-center text-white" style="background: linear-gradient(rgba(15, 44, 89, 0.85), rgba(7, 22, 48, 0.95)), url('{{ asset('images/services_banner_bg.png') }}') no-repeat center center; background-size: cover; border-bottom: 3px solid #e2e8f0;">
    <div class="container py-3">
        <h1 class="fw-bold display-5">Sobre Nosotros</h1>
        <p class="lead text-white-50 mb-0">Trayectoria, profesionalismo y confianza a tu servicio.</p>
    </div>
</section>

<!-- Section: Nosotros Detalle -->
<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="p-5 text-white rounded-4 shadow-lg text-center py-5" style="background: linear-gradient(135deg, #0F2C59 0%, #071630 100%);">
                    <h2 class="display-3 fw-bold text-white">+20</h2>
                    <h5 class="fw-semibold text-uppercase tracking-widest text-white-50">Años de Experiencia</h5>
                    <p class="mt-3 mb-0 text-light opacity-75">Liderado por la CPC Diana Ponce Lezcano, sumando una amplia trayectoria y experiencia profesional en el sector contable y tributario.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <span class="text-primary fw-bold text-uppercase tracking-wider" style="font-size: 0.9rem; letter-spacing: 1px;">Sobre la Firma</span>
                <h2 class="fw-bold text-ponce-dark mt-2 mb-4 display-6">
                    Respaldo y Confianza para tu Empresa
                </h2>
                <p class="text-muted mb-4">
                    En el **Estudio Contable Ponce** nos caracterizamos por ofrecer una asesoría contable personalizada y estratégica. Comprendemos que cada negocio es único, por lo que adaptamos nuestros servicios para mitigar riesgos tributarios y maximizar el rendimiento contable de tu organización.
                </p>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <div class="p-2 bg-light text-primary rounded me-3"><i class="bi bi-eye fs-4"></i></div>
                            <div>
                                <h5 class="fw-bold text-ponce-dark">Misión</h5>
                                <p class="text-muted small mb-0">Brindar soluciones de contabilidad y consultoría tributaria oportunas y eficientes para garantizar la tranquilidad de nuestros clientes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start">
                            <div class="p-2 bg-light text-primary rounded me-3"><i class="bi bi-compass fs-4"></i></div>
                            <div>
                                <h5 class="fw-bold text-ponce-dark">Visión</h5>
                                <p class="text-muted small mb-0">Ser reconocidos como el estudio contable líder en Lima Este, destacándonos por la excelencia y la ética profesional.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: Nuestro Equipo -->
<section class="py-5 bg-white border-top">
    <div class="container py-4">
        <div class="text-center mb-5">
            <span class="text-primary fw-bold text-uppercase tracking-wider" style="font-size: 0.9rem; letter-spacing: 1px;">Profesionales al Frente</span>
            <h2 class="fw-bold text-ponce-dark mt-2 display-6">Nuestro Equipo Especializado</h2>
            <p class="text-muted">Conoce a los contadores líderes que garantizan el éxito y la seguridad de tu negocio.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <!-- CPC Diana Ponce -->
            <div class="col-md-5 col-lg-4">
                <div class="card border-0 shadow-sm text-center h-100 bg-light p-4" style="border-radius: 12px;">
                    <div class="mx-auto mb-3" style="width: 180px; height: 180px; overflow: hidden; border-radius: 50%; border: 4px solid var(--ponce-primary);">
                        <img src="{{ asset('images/contadoraPonce..png') }}" alt="CPC Diana Ponce Lezcano" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h5 class="fw-bold text-ponce-dark mb-1">CPC Diana Ponce Lezcano</h5>
                    <p class="text-primary small fw-semibold mb-3">Directora & Fundadora</p>
                    <p class="text-muted small mb-0">Contadora Pública Colegiada con amplia trayectoria en asesoría contable integral, planificación tributaria y auditoría para medianas y pequeñas empresas.</p>
                </div>
            </div>
            <!-- Dubal -->
            <div class="col-md-5 col-lg-4">
                <div class="card border-0 shadow-sm text-center h-100 bg-light p-4" style="border-radius: 12px;">
                    <div class="mx-auto mb-3" style="width: 180px; height: 180px; overflow: hidden; border-radius: 50%; border: 4px solid var(--ponce-primary);">
                        <img src="{{ asset('images/dubal.png') }}" alt="Contador Dubal" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h5 class="fw-bold text-ponce-dark mb-1">Dubal</h5>
                    <p class="text-primary small fw-semibold mb-3">Contador Asociado</p>
                    <p class="text-muted small mb-0">Especialista en liquidación de impuestos de SUNAT, administración de planillas electrónicas (PLAME) y fiscalizaciones laborales.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: Valores -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-ponce-dark display-6" style="font-family: 'Montserrat', sans-serif;">Nuestros Valores</h2>
            <p class="text-muted">Los pilares fundamentales que guían cada uno de nuestros procesos.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card p-4 border-0 shadow-sm text-center h-100 bg-white">
                    <img src="{{ asset('images/val_honestidad.png') }}" alt="Honestidad" class="mx-auto mb-3" style="width: 70px; height: 70px; object-fit: contain;">
                    <h5 class="fw-bold text-ponce-dark">Honestidad</h5>
                    <p class="text-muted small mb-0">Transparencia absoluta en el manejo de tu información contable y tributaria frente a SUNAT.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 border-0 shadow-sm text-center h-100 bg-white">
                    <img src="{{ asset('images/val_compromiso.png') }}" alt="Compromiso" class="mx-auto mb-3" style="width: 70px; height: 70px; object-fit: contain;">
                    <h5 class="fw-bold text-ponce-dark">Compromiso</h5>
                    <p class="text-muted small mb-0">Asumimos la contabilidad de tu negocio con máxima responsabilidad, respetando siempre los plazos.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 border-0 shadow-sm text-center h-100 bg-white">
                    <img src="{{ asset('images/val_puntualidad.png') }}" alt="Puntualidad" class="mx-auto mb-3" style="width: 70px; height: 70px; object-fit: contain;">
                    <h5 class="fw-bold text-ponce-dark">Puntualidad</h5>
                    <p class="text-muted small mb-0">Evitamos multas realizando todas tus declaraciones y liquidaciones de manera oportuna.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
