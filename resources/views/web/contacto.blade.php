@extends('layouts.web')

@section('meta_title', 'Contacto - Estudio Contable Ponce')
@section('meta_description', 'Ponte en contacto con Estudio Contable Ponce en Plaza Vitarte. Escríbenos para solicitar información de tarifas, regularizaciones o trámites.')

@section('content')

<!-- Header Banner -->
<section class="py-5 text-center text-white" style="background: linear-gradient(rgba(15, 44, 89, 0.85), rgba(7, 22, 48, 0.95)), url('{{ asset('images/services_banner_bg.png') }}') no-repeat center center; background-size: cover; border-bottom: 3px solid #e2e8f0;">
    <div class="container py-3">
        <h1 class="fw-bold display-5">Contacto</h1>
        <p class="lead text-white-50 mb-0">Escríbenos o visítanos en nuestra oficina principal.</p>
    </div>
</section>

<!-- Section: Contacto Detalle -->
<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Contact Info -->
            <div class="col-lg-5">
                <span class="text-primary fw-bold text-uppercase tracking-wider" style="font-size: 0.9rem; letter-spacing: 1px;">Hablemos</span>
                <h2 class="fw-bold text-ponce-dark mt-2 mb-4 display-6">Ponte en Contacto</h2>
                
                <div class="mb-4">
                    <p class="text-muted">Si tienes dudas sobre tus impuestos o deseas formalizar tu emprendimiento, no dudes en escribirnos.</p>
                </div>
                
                <div class="d-flex align-items-center mb-3">
                    <div class="p-3 bg-light text-primary rounded-circle me-3"><i class="bi bi-person-fill fs-4"></i></div>
                    <div>
                        <h6 class="mb-0 fw-bold text-ponce-dark">Representante Legal</h6>
                        <span class="text-muted small">CPC Diana Ponce Lezcano | RUC: 20601127823</span>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <div class="p-3 bg-light text-primary rounded-circle me-3"><i class="bi bi-telephone-fill fs-4"></i></div>
                    <div>
                        <h6 class="mb-0 fw-bold text-ponce-dark">Teléfono / Celular</h6>
                        <span class="text-muted small">920 369 991</span>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <div class="p-3 bg-light text-primary rounded-circle me-3"><i class="bi bi-envelope-fill fs-4"></i></div>
                    <div>
                        <h6 class="mb-0 fw-bold text-ponce-dark">Correo Electrónico</h6>
                        <span class="text-muted small">contabilidadesponce@hotmail.com</span>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <div class="p-3 bg-light text-primary rounded-circle me-3"><i class="bi bi-geo-alt-fill fs-4"></i></div>
                    <div>
                        <h6 class="mb-0 fw-bold text-ponce-dark">Sede Principal</h6>
                        <span class="text-muted small">C.C. Plaza Vitarte Block D Oficina 2D-107, Lima</span>
                    </div>
                </div>

                <div class="d-flex align-items-center mb-4">
                    <div class="p-3 bg-light text-primary rounded-circle me-3"><i class="bi bi-building fs-4"></i></div>
                    <div>
                        <h6 class="mb-0 fw-bold text-ponce-dark">Sucursal</h6>
                        <span class="text-muted small">Mayorazgo, Lima</span>
                    </div>
                </div>
                
                <!-- Embedded Google Map -->
                <div class="ratio ratio-16x9 rounded-3 shadow-sm overflow-hidden border">
                    <iframe src="https://www.google.com/maps/embed?pb=!4v1782685693092!6m8!1m7!1sCAoSF0NJSE0wb2dLRUlDQWdJQ1R4dDJjMlFF!2m2!1d-12.02609667375509!2d-76.92172496083245!3f33.5024735256833!4f2.96529894203546!5f0.7820865974627469" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin" title="Ubicación Estudio Contable Ponce"></iframe>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="card p-4 p-md-5 border-0 shadow-sm bg-light">
                    <h4 class="fw-bold text-ponce-dark mb-4">Envíanos un mensaje</h4>
                    
                    @if (session('success'))
                        <div class="alert alert-success border-0 shadow-sm mb-4">
                            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ url('/contacto') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="nombre" class="form-label small fw-semibold">Nombre Completo *</label>
                                <input type="text" name="nombre" id="nombre" class="form-control bg-white" placeholder="Ej. Juan Pérez" required>
                            </div>
                            <div class="col-md-6">
                                <label for="correo" class="form-label small fw-semibold">Correo Electrónico *</label>
                                <input type="email" name="correo" id="correo" class="form-control bg-white" placeholder="Ej. juan@correo.com" required>
                            </div>
                            <div class="col-md-6">
                                <label for="telefono" class="form-label small fw-semibold">Teléfono / Celular *</label>
                                <input type="tel" name="telefono" id="telefono" class="form-control bg-white" placeholder="Ej. 920369991" required>
                            </div>
                            <div class="col-md-6">
                                <label for="empresa" class="form-label small fw-semibold">Nombre de la Empresa (Opcional)</label>
                                <input type="text" name="empresa" id="empresa" class="form-control bg-white" placeholder="Ej. Mi Negocio SAC">
                            </div>
                            <div class="col-12">
                                <label for="servicio" class="form-label small fw-semibold">Servicio Requerido *</label>
                                <select name="servicio" id="servicio" class="form-select bg-white" required>
                                    <option value="" disabled selected>Selecciona un servicio</option>
                                    <option value="Asesoría Tributaria">Asesoría Tributaria</option>
                                    <option value="Asesoría Contable">Asesoría Contable</option>
                                    <option value="Asesoría Laboral">Asesoría Laboral</option>
                                    <option value="Constitución de Empresas">Constitución de Empresas</option>
                                    <option value="Declaraciones SUNAT / PLE">Declaraciones SUNAT / PLE</option>
                                    <option value="Otros">Otros</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="mensaje" class="form-label small fw-semibold">Mensaje *</label>
                                <textarea name="mensaje" id="mensaje" rows="4" class="form-control bg-white" placeholder="Describe brevemente tus dudas o requerimientos..." required></textarea>
                            </div>
                            <div class="col-12 mt-4 d-grid">
                                <button type="submit" class="btn btn-ponce-primary btn-lg py-2">
                                    <i class="bi bi-send-fill me-2"></i> Enviar Mensaje de Contacto
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
