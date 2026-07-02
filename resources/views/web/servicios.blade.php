@extends('layouts.web')

@section('meta_title', 'Servicios - Estudio Contable Ponce')
@section('meta_description', 'Conoce nuestra variedad de servicios en asesoría tributaria, contable, laboral, declaraciones SUNAT, SIRE, PLAME y constitución de empresas.')

@section('content')

<!-- Header Banner -->
<section class="py-5 text-center text-white" style="background: linear-gradient(rgba(15, 44, 89, 0.85), rgba(7, 22, 48, 0.95)), url('{{ asset('images/services_banner_bg.png') }}') no-repeat center center; background-size: cover; border-bottom: 3px solid #e2e8f0;">
    <div class="container py-3">
        <h1 class="fw-bold display-5">Nuestros Servicios</h1>
        <p class="lead text-white-50 mb-0">Soluciones integrales a la medida de tu negocio.</p>
    </div>
</section>

<!-- Section: Servicios Catalogo -->
<section class="py-5" style="background-color: #f8fafc;">
    <div class="container py-5">
        <div class="row g-4">
            <!-- Servicio 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 p-4 border-0 shadow-sm hover-shadow transition bg-white">
                    <div class="d-flex justify-content-center align-items-center mb-3" style="height: 90px;">
                        <img src="{{ asset('images/icon_tributaria.png') }}" alt="Asesoría Tributaria" style="height: 85px; width: auto; object-fit: contain;">
                    </div>
                    <h5 class="fw-bold text-ponce-dark">Asesoría Tributaria</h5>
                    <p class="text-muted small mb-3">Planeamiento tributario estratégico, cálculo y liquidación de impuestos IGV-Renta, y prevención de deudas o contingencias fiscales.</p>
                    <a href="#" class="text-primary fw-semibold small mt-auto text-decoration-none btn-detail-service text-center w-100"
                       data-title="Asesoría Tributaria"
                       data-icon="{{ asset('images/icon_tributaria.png') }}"
                       data-desc="Planeamiento tributario estratégico, cálculo y liquidación de impuestos IGV-Renta, y prevención de deudas o contingencias fiscales."
                       data-points="Planeamiento tributario anual estratégico;Cálculo y liquidación mensual de impuestos (IGV y Renta);Asistencia y respuesta oportuna ante notificaciones de SUNAT;Diagnóstico fiscal preventivo para evitar contingencias">
                       Solicitar información <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <!-- Servicio 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 p-4 border-0 shadow-sm hover-shadow transition bg-white">
                    <div class="d-flex justify-content-center align-items-center mb-3" style="height: 90px;">
                        <img src="{{ asset('images/icon_contable.png') }}" alt="Asesoría Contable" style="height: 85px; width: auto; object-fit: contain;">
                    </div>
                    <h5 class="fw-bold text-ponce-dark">Asesoría Contable</h5>
                    <p class="text-muted small mb-3">Registro de compras y ventas, elaboración de balances y estados financieros completos, y auditorías preventivas.</p>
                    <a href="#" class="text-primary fw-semibold small mt-auto text-decoration-none btn-detail-service text-center w-100"
                       data-title="Asesoría Contable"
                       data-icon="{{ asset('images/icon_contable.png') }}"
                       data-desc="Registro de compras y ventas, elaboración de balances y estados financieros completos, y auditorías preventivas."
                       data-points="Procesamiento y registro mensual de transacciones comerciales;Elaboración de Balances Generales y Estados de Resultados;Conciliaciones bancarias y control interno de cuentas;Reportes financieros mensuales listos para la toma de decisiones estratégicas">
                       Solicitar información <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <!-- Servicio 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 p-4 border-0 shadow-sm hover-shadow transition bg-white">
                    <div class="d-flex justify-content-center align-items-center mb-3" style="height: 90px;">
                        <img src="{{ asset('images/icon_laboral.png') }}" alt="Asesoría Laboral" style="height: 85px; width: auto; object-fit: contain;">
                    </div>
                    <h5 class="fw-bold text-ponce-dark">Asesoría Laboral</h5>
                    <p class="text-muted small mb-3">Elaboración de contratos de trabajo, cálculo de liquidaciones, CTS, gratificaciones y vacaciones de personal.</p>
                    <a href="#" class="text-primary fw-semibold small mt-auto text-decoration-none btn-detail-service text-center w-100"
                       data-title="Asesoría Laboral"
                       data-icon="{{ asset('images/icon_laboral.png') }}"
                       data-desc="Elaboración de contratos de trabajo, cálculo de liquidaciones, CTS, gratificaciones y vacaciones de personal."
                       data-points="Redacción y registro de contratos laborales según legislación;Cálculo de beneficios sociales (Gratificaciones, CTS, Vacaciones);Cálculo de indemnizaciones y liquidaciones por cese laboral;Orientación legal ante auditorías o requerimientos de SUNAFIL">
                       Solicitar información <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <!-- Servicio 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 p-4 border-0 shadow-sm hover-shadow transition bg-white">
                    <div class="d-flex justify-content-center align-items-center mb-3" style="height: 90px;">
                        <img src="{{ asset('images/icon_constitucion.png') }}" alt="Constitución de Empresas" style="height: 85px; width: auto; object-fit: contain;">
                    </div>
                    <h5 class="fw-bold text-ponce-dark">Constitución de Empresas</h5>
                    <p class="text-muted small mb-3">Formalización express: búsqueda de nombre en SUNARP, elaboración de minuta, registros públicos y activación de RUC.</p>
                    <a href="#" class="text-primary fw-semibold small mt-auto text-decoration-none btn-detail-service text-center w-100"
                       data-title="Constitución de Empresas"
                       data-icon="{{ asset('images/icon_constitucion.png') }}"
                       data-desc="Formalización express: búsqueda de nombre en SUNARP, elaboración de minuta, registros públicos y activación de RUC."
                       data-points="Búsqueda y reserva de nombre preferencial en SUNARP;Elaboración del Acto Constitutivo (Minuta) con asesoría legal;Firma en notaría y seguimiento hasta la inscripción registral;Activación de RUC, clave SOL y elección del régimen tributario idóneo">
                       Solicitar información <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <!-- Servicio 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 p-4 border-0 shadow-sm hover-shadow transition bg-white">
                    <div class="d-flex justify-content-center align-items-center mb-3" style="height: 90px;">
                        <img src="{{ asset('images/logosunat.png') }}" alt="Declaraciones SUNAT" style="height: 75px; width: auto; max-width: 100%; object-fit: contain;">
                    </div>
                    <h5 class="fw-bold text-ponce-dark">Declaraciones SUNAT</h5>
                    <p class="text-muted small mb-3">Declaraciones mensuales y anuales en los regímenes Mype Tributario, Especial y General.</p>
                    <a href="#" class="text-primary fw-semibold small mt-auto text-decoration-none btn-detail-service text-center w-100"
                       data-title="Declaraciones SUNAT"
                       data-icon="{{ asset('images/logosunat.png') }}"
                       data-desc="Declaraciones mensuales y anuales en los regímenes Mype Tributario, Especial y General."
                       data-points="Preparación y envío mensual de PDT / Declara Fácil;Elaboración y presentación de la Declaración Jurada Anual del Impuesto a la Renta;Acogimiento a fraccionamientos y refinanciación de deudas fiscales;Gestión de alertas para evitar infracciones o fiscalizaciones electrónicas">
                       Solicitar información <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <!-- Servicio 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 p-4 border-0 shadow-sm hover-shadow transition bg-white">
                    <div class="d-flex justify-content-center align-items-center mb-3" style="height: 90px;">
                        <img src="{{ asset('images/sire.png') }}" alt="Declaraciones SIRE" style="height: 85px; width: auto; max-width: 100%; object-fit: contain;">
                    </div>
                    <h5 class="fw-bold text-ponce-dark">Declaraciones SIRE</h5>
                    <p class="text-muted small mb-3">Gestión, validación y presentación mensual del Registro de Compras y Ventas Electrónicas en el nuevo sistema SIRE de SUNAT.</p>
                    <a href="#" class="text-primary fw-semibold small mt-auto text-decoration-none btn-detail-service text-center w-100"
                       data-title="Declaraciones SIRE"
                       data-icon="{{ asset('images/sire.png') }}"
                       data-desc="Gestión, validación y presentación mensual del Registro de Compras y Ventas Electrónicas en el nuevo sistema SIRE de SUNAT."
                       data-points="Consistencia, aceptación o comparación de la propuesta de SUNAT en la plataforma SIRE;Generación, validación y cierre de registros de compras y ventas electrónicas;Envío formal y obtención de constancias de recepción de SUNAT;Regularizaciones y conciliación de periodos pendientes o inconsistencias">
                       Solicitar información <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <!-- Servicio 7 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 p-4 border-0 shadow-sm hover-shadow transition bg-white">
                    <div class="d-flex justify-content-center align-items-center mb-3" style="height: 90px;">
                        <img src="{{ asset('images/icon_plame.png') }}" alt="Planilla Electrónica (PLAME)" style="height: 85px; width: auto; object-fit: contain;">
                    </div>
                    <h5 class="fw-bold text-ponce-dark">Planilla Electrónica (PLAME)</h5>
                    <p class="text-muted small mb-3">Declaración de planilla mensual (T-Registro / PLAME) para la correcta tributación laboral y cálculo de retenciones.</p>
                    <a href="#" class="text-primary fw-semibold small mt-auto text-decoration-none btn-detail-service text-center w-100"
                       data-title="Planilla Electrónica (PLAME)"
                       data-icon="{{ asset('images/icon_plame.png') }}"
                       data-desc="Declaración de planilla mensual (T-Registro / PLAME) para la correcta tributación laboral y cálculo de retenciones."
                       data-points="Alta y baja de trabajadores en el portal del T-Registro;Cálculo mensual de remuneraciones and retenciones;Generación y presentación formal del PDT PLAME;Cálculo de aportes a los fondos previsionales (AFP / ONP) y ESSALUD">
                       Solicitar información <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <!-- Servicio 8 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 p-4 border-0 shadow-sm hover-shadow transition bg-white">
                    <div class="d-flex justify-content-center align-items-center mb-3" style="height: 90px;">
                        <img src="{{ asset('images/icon_afp.png') }}" alt="AFP NET y ESSALUD" style="height: 85px; width: auto; object-fit: contain;">
                    </div>
                    <h5 class="fw-bold text-ponce-dark">AFP NET y ESSALUD</h5>
                    <p class="text-muted small mb-3">Gestión de aportes previsionales a las AFP y aportes de seguridad social ESSALUD de tus trabajadores en planilla.</p>
                    <a href="#" class="text-primary fw-semibold small mt-auto text-decoration-none btn-detail-service text-center w-100"
                       data-title="AFP NET y ESSALUD"
                       data-icon="{{ asset('images/icon_afp.png') }}"
                       data-desc="Gestión de aportes previsionales a las AFP y aportes de seguridad social ESSALUD de tus trabajadores en planilla."
                       data-points="Carga y procesamiento mensual de aportes previsionales en la plataforma AFPnet;Generación y envío del ticket de pago a las diversas Administradoras de Pensiones;Declaración y registro de derechohabientes en el portal EsSalud;Gestión y trámite de subsidios de salud por mantenernidad o lactancia">
                       Solicitar información <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <!-- Servicio 9 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 p-4 border-0 shadow-sm hover-shadow transition bg-white">
                    <div class="d-flex justify-content-center align-items-center mb-3" style="height: 90px;">
                        <img src="{{ asset('images/icon_fiscalizacion.png') }}" alt="Fiscalizaciones Tributarias" style="height: 85px; width: auto; object-fit: contain;">
                    </div>
                    <h5 class="fw-bold text-ponce-dark">Fiscalizaciones Tributarias</h5>
                    <p class="text-muted small mb-3">Defensa contable ante auditorías e inspecciones de SUNAT. Levantamiento de observaciones.</p>
                    <a href="#" class="text-primary fw-semibold small mt-auto text-decoration-none btn-detail-service text-center w-100"
                       data-title="Fiscalizaciones Tributarias"
                       data-icon="{{ asset('images/icon_fiscalizacion.png') }}"
                       data-desc="Defensa contable ante auditorías e inspecciones de SUNAT. Levantamiento de observaciones."
                       data-points="Defensa contable-tributaria activa y representation directa ante SUNAT;Preparación, foliado y control de la documentación sustentatoria requerida;Absolución de requerimientos de control virtual o presencial;Redacción de recursos de reclamación ante SUNAT y apelación en el Tribunal Fiscal">
                       Solicitar información <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal de Detalle de Servicio -->
<div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 16px;">
            <div class="modal-header border-0 bg-light p-4" style="border-radius: 16px 16px 0 0;">
                <div class="d-flex align-items-center gap-3">
                    <img id="modalIcon" src="" alt="Icono de servicio" style="max-width: 100px; max-height: 55px; width: auto; height: auto; object-fit: contain;">
                    <h4 class="modal-title fw-bold text-ponce-dark mb-0" id="serviceModalLabel">Detalle del Servicio</h4>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <p class="text-muted lead mb-4" id="modalShortDesc" style="font-size: 1rem;"></p>
                <div class="bg-light p-3 rounded-3 mb-4">
                    <h6 class="fw-bold text-ponce-dark mb-3"><i class="bi bi-patch-check-fill text-primary me-2"></i>¿Qué incluye nuestro servicio?</h6>
                    <ul class="list-unstyled mb-0 small text-muted d-flex flex-column gap-2" id="modalDetailedPoints">
                        <!-- Puntos cargados dinámicamente -->
                    </ul>
                </div>
                <div class="d-flex gap-2">
                    <a href="" id="modalWhatsappBtn" target="_blank" class="btn btn-success w-50 py-2 fw-semibold d-flex align-items-center justify-content-center gap-2" style="border-radius: 8px;">
                        <i class="bi bi-whatsapp"></i> WhatsApp
                    </a>
                    <a href="{{ route('contacto') }}" class="btn btn-ponce-primary w-50 py-2 fw-semibold" style="border-radius: 8px;">
                        Solicitar Cotización
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const serviceButtons = document.querySelectorAll('.btn-detail-service');
    const modalEl = document.getElementById('serviceModal');
    if (!modalEl) return;
    
    const modal = new bootstrap.Modal(modalEl);
    
    serviceButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            
            const title = this.getAttribute('data-title');
            const icon = this.getAttribute('data-icon');
            const desc = this.getAttribute('data-desc');
            const pointsStr = this.getAttribute('data-points');
            
            document.getElementById('serviceModalLabel').textContent = title;
            document.getElementById('modalIcon').src = icon;
            document.getElementById('modalShortDesc').textContent = desc;
            
            const pointsList = document.getElementById('modalDetailedPoints');
            pointsList.innerHTML = '';
            if (pointsStr) {
                const points = pointsStr.split(';');
                points.forEach(pt => {
                    const li = document.createElement('li');
                    li.className = 'd-flex align-items-start gap-2';
                    li.innerHTML = '<i class="bi bi-check-circle-fill text-success mt-1" style="font-size: 0.85rem;"></i> <span style="font-family: \'Inter\', sans-serif;">' + pt + '</span>';
                    pointsList.appendChild(li);
                });
            }
            
            const whatsappUrl = 'https://wa.me/51920369991?text=' + encodeURIComponent('Hola Estudio Contable Ponce, quisiera solicitar información detallada sobre el servicio de: ' + title);
            document.getElementById('modalWhatsappBtn').href = whatsappUrl;
            
            modal.show();
        });
    });
});
</script>

@endsection
