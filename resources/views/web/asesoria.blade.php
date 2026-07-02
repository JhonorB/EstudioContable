@extends('layouts.web')

@section('meta_title', 'Solicita una Asesoría Gratis - Estudio Contable Ponce')
@section('meta_description', 'Registra tus datos para solicitar una asesoría contable o tributaria gratuita de diagnóstico con el equipo de Estudio Contable Ponce.')

@section('content')

<!-- Header Banner -->
<section class="py-5 text-center text-white" style="background: linear-gradient(rgba(15, 44, 89, 0.85), rgba(7, 22, 48, 0.95)), url('{{ asset('images/services_banner_bg.png') }}') no-repeat center center; background-size: cover; border-bottom: 3px solid #e2e8f0;">
    <div class="container py-3">
        <h1 class="fw-bold display-5">Asesoría Gratis</h1>
        <p class="lead text-white-50 mb-0">Solicita tu diagnóstico contable y tributario sin costo alguno.</p>
    </div>
</section>

<!-- Section: Formulario Asesoría -->
<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card p-4 p-md-5 border-0 shadow-sm bg-light">
                    <div class="text-center mb-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mb-3 border border-2 border-primary border-opacity-15" style="width: 110px; height: 110px; transition: transform 0.3s ease;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" style="width: 85px; height: 85px; object-fit: contain;">
                                <!-- Back Hair -->
                                <path d="M24 45 C 18 25, 82 25, 76 45 C 80 55, 20 55, 24 45" fill="#4a3728" />
                                <!-- Ears -->
                                <circle cx="26" cy="48" r="5" fill="#ffdfb4" />
                                <circle cx="74" cy="48" r="5" fill="#ffdfb4" />
                                <!-- Face -->
                                <circle cx="50" cy="48" r="23" fill="#ffdfb4" />
                                <!-- Modern Hair front -->
                                <path d="M25 36 C 30 20, 70 20, 75 36 C 70 26, 60 26, 50 32 C 40 26, 30 26, 25 36 Z" fill="#4a3728" />
                                <path d="M25 36 C 26 28, 35 28, 38 35 Z" fill="#4a3728" />
                                <path d="M75 36 C 74 28, 65 28, 62 35 Z" fill="#4a3728" />
                                <!-- Eyebrows -->
                                <path d="M37 40 Q 42 38 46 41" fill="none" stroke="#4a3728" stroke-width="2" stroke-linecap="round" />
                                <path d="M63 40 Q 58 38 54 41" fill="none" stroke="#4a3728" stroke-width="2" stroke-linecap="round" />
                                <!-- Eyes -->
                                <circle cx="41" cy="46" r="2.5" fill="#2d3748" />
                                <circle cx="59" cy="46" r="2.5" fill="#2d3748" />
                                <circle cx="42" cy="45" r="0.8" fill="#ffffff" />
                                <circle cx="60" cy="45" r="0.8" fill="#ffffff" />
                                <!-- Happy Smile -->
                                <path d="M43 56 Q 50 62 57 56" fill="none" stroke="#2d3748" stroke-width="2.5" stroke-linecap="round" />
                                <!-- Blush -->
                                <circle cx="36" cy="52" r="3" fill="#f56565" opacity="0.4" />
                                <circle cx="64" cy="52" r="3" fill="#f56565" opacity="0.4" />
                                <!-- Suit / Collar -->
                                <path d="M28 75 L 72 75 L 67 66 L 50 70 L 33 66 Z" fill="#0F2C59" />
                                <!-- White shirt inner -->
                                <path d="M45 66 L 55 66 L 50 70 Z" fill="#FFFFFF" />
                                <!-- Tie -->
                                <path d="M49 70 L 51 70 L 52 75 L 48 75 Z" fill="#3B82F6" />
                            </svg>
                        </div>
                        <h4 class="fw-bold text-ponce-dark">Formulario de Registro</h4>
                        <p class="text-muted small">Completa el formulario y nos contactaremos en menos de 24 horas hábiles.</p>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success border-0 shadow-sm mb-4">
                            <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ url('/asesoria-gratis') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="nombre" class="form-label small fw-semibold">Nombre Completo *</label>
                                <input type="text" name="nombre" id="nombre" class="form-control bg-white" placeholder="Ej. Carlos Mendoza" required>
                            </div>
                            <div class="col-md-6">
                                <label for="correo" class="form-label small fw-semibold">Correo Electrónico *</label>
                                <input type="email" name="correo" id="correo" class="form-control bg-white" placeholder="Ej. carlos@empresa.com" required>
                            </div>
                            <div class="col-md-6">
                                <label for="telefono" class="form-label small fw-semibold">Teléfono / Celular *</label>
                                <input type="tel" name="telefono" id="telefono" class="form-control bg-white" placeholder="Ej. 920369991" required>
                            </div>
                            <div class="col-md-6">
                                <label for="empresa" class="form-label small fw-semibold">Nombre de la Empresa (Opcional)</label>
                                <input type="text" name="empresa" id="empresa" class="form-control bg-white" placeholder="Ej. Mendoza Group SAC">
                            </div>
                            <div class="col-12">
                                <label for="tipo_negocio" class="form-label small fw-semibold">Giro o Tipo de Negocio *</label>
                                <select name="tipo_negocio" id="tipo_negocio" class="form-select bg-white" required>
                                    <option value="" disabled selected>Selecciona una opción</option>
                                    <option value="Servicios profesionales / Consultoría">Servicios profesionales / Consultoría</option>
                                    <option value="Comercial / Venta de productos">Comercial / Venta de productos</option>
                                    <option value="E-commerce / Tienda Virtual">E-commerce / Tienda Virtual</option>
                                    <option value="Restaurante / Cafetería">Restaurante / Cafetería</option>
                                    <option value="Construcción / Inmobiliaria">Construcción / Inmobiliaria</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="mensaje" class="form-label small fw-semibold">Cuéntanos sobre tu negocio o dudas principales *</label>
                                <textarea name="mensaje" id="mensaje" rows="4" class="form-control bg-white" placeholder="Ej. Quisiera saber en qué régimen me conviene tributar para mi nuevo negocio..." required></textarea>
                            </div>
                            <div class="col-12 mt-4 d-grid">
                                <button type="submit" class="btn btn-ponce-primary btn-lg fw-bold py-2 shadow-sm text-white">
                                    <i class="bi bi-envelope-check me-2"></i> Solicitar Asesoría Gratuita
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
