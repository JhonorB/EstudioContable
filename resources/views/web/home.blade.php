@extends('layouts.web')

@section('meta_title', 'Estudio Contable Ponce - Asesoría Tributaria, Contable y Laboral en Lima')
@section('meta_description', 'Estudio Contable Ponce ofrece consultoría tributaria, declaraciones SUNAT, PLE, PLAME, constitución de empresas y asesoría laboral. ¡Solicita tu consulta gratuita hoy!')

@section('content')

<style>
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(25px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.animate-fade-in-up {
  animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) both;
}

.delay-1 { animation-delay: 0.1s; }
.delay-2 { animation-delay: 0.25s; }
.delay-3 { animation-delay: 0.4s; }
.delay-4 { animation-delay: 0.55s; }
.delay-5 { animation-delay: 0.7s; }
</style>

<!-- Section: Inicio (Hero) -->
<section id="inicio" class="py-5 d-flex align-items-center" style="min-height: 75vh; position: relative; overflow: hidden; background: linear-gradient(135deg, #0F2C59 0%, #071630 100%);">
    <div style="position: absolute; top: -10%; right: -10%; width: 50%; height: 50%; background: radial-gradient(circle, rgba(255,255,255,0.05) 0%, transparent 70%); pointer-events: none;"></div>
    
    <div class="container py-5" style="position: relative; z-index: 1;">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="animate-fade-in-up delay-1 mb-3">
                    <span class="badge border border-white border-opacity-25 bg-white bg-opacity-10 text-white px-3 py-2 fw-bold text-uppercase tracking-wider" style="font-size: 0.85rem; letter-spacing: 1px;">
                        <i class="bi bi-patch-check-fill me-1"></i> Asesoría Profesional desde 2016
                    </span>
                </div>
                <h1 class="display-4 fw-bold text-white mb-3 animate-fade-in-up delay-2" style="line-height: 1.15;">
                    Especialistas en Asesoría Tributaria, Contable y Empresarial
                </h1>
                <p class="lead text-white-50 mb-4 fs-5 animate-fade-in-up delay-3" style="font-weight: 300;">
                    Evita multas de SUNAT, optimiza tus impuestos y formaliza tu empresa de la mano de expertos contables liderados por la CPC Diana Ponce Lezcano.
                </p>
                <div class="d-flex flex-wrap gap-3 animate-fade-in-up delay-4">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#asesoriaModal" class="btn btn-white bg-white text-ponce-primary btn-lg fw-bold px-4 py-3 shadow-sm" style="transition: all 0.3s; border-radius: 6px;">
                        <i class="bi bi-calendar2-check me-2"></i> Asesoría Gratis
                    </a>
                    <a href="https://wa.me/51920369991?text=Hola,%20quisiera%20solicitar%20una%20asesor%C3%ADa%20gratuita" target="_blank" class="btn btn-outline-light btn-lg fw-semibold px-4 py-3" style="border-radius: 6px;">
                        <i class="bi bi-whatsapp me-2"></i> Escríbenos
                    </a>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block animate-fade-in-up delay-5">
                <div class="position-relative">
                    <img src="{{ asset('images/contadoraPonce..png') }}" class="img-fluid rounded-4 shadow-lg border border-white border-opacity-10" alt="CPC Diana Ponce Lezcano" style="max-height: 450px; object-fit: cover; width: 100%;">
                    <div class="position-absolute bottom-0 start-0 bg-white p-3 m-3 rounded-3 shadow-sm d-flex align-items-center gap-3 border">
                        <img src="{{ asset('images/logoestrella.png') }}" alt="Colegiatura" style="width: 35px; height: 35px; object-fit: contain;">
                        <div>
                            <p class="fw-bold mb-0 text-dark small" style="line-height: 1.1;">CPC Diana Ponce Lezcano</p>
                            <span class="text-muted extra-small" style="font-size: 0.75rem;">Colegiatura Activa | Asesora Principal</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: Quick Intro -->
<section class="py-5 bg-white">
    <div class="container py-5 text-center">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8">
                <span class="text-primary fw-bold text-uppercase tracking-wider" style="font-size: 0.9rem; letter-spacing: 1px;">Bienvenido</span>
                <h2 class="fw-bold text-ponce-dark mt-2 mb-4 display-6">Respaldo y Confianza para tu Negocio</h2>
                <p class="text-muted mb-4 lead">
                    En el <strong>Estudio Contable Ponce</strong>, ayudamos a emprendedores y empresas a formalizarse, planificar sus impuestos de manera eficiente y cumplir con todas las declaraciones de SUNAT sin dolores de cabeza.
                </p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="{{ route('nosotros') }}" class="btn btn-ponce-primary btn-md px-4 py-2">Conócenos más</a>
                    <a href="{{ route('servicios') }}" class="btn btn-ponce-outline btn-md px-4 py-2">Ver Servicios</a>
                </div>
            </div>
        </div>

        <div class="row g-4 text-start">
            <div class="col-md-4">
                <div class="card border-0 shadow hover-shadow transition h-100 bg-white" style="border-radius: 12px; overflow: hidden; border-top: 4px solid var(--ponce-primary) !important;">
                    <img src="{{ asset('images/home_card_tributaria.png') }}" alt="Seguridad Tributaria" class="card-img-top" style="height: 180px; object-fit: cover; filter: saturate(0.7) contrast(1.05) brightness(0.95);">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-ponce-dark">Seguridad Tributaria</h5>
                        <p class="text-muted small mb-0">Declaramos puntualmente tus obligaciones mensuales ante SUNAT, evitando multas y contingencias fiscales de forma segura.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow hover-shadow transition h-100 bg-white" style="border-radius: 12px; overflow: hidden; border-top: 4px solid var(--ponce-primary) !important;">
                    <img src="{{ asset('images/hero_accounting_banner.png') }}" alt="Asesoría Directa" class="card-img-top" style="height: 180px; object-fit: cover; filter: saturate(0.7) contrast(1.05) brightness(0.95);">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-ponce-dark">Asesoría Directa</h5>
                        <p class="text-muted small mb-0">Comunicación constante y directa para resolver tus consultas contables, laborales y tributarias hoy mismo.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow hover-shadow transition h-100 bg-white" style="border-radius: 12px; overflow: hidden; border-top: 4px solid var(--ponce-primary) !important;">
                    <img src="{{ asset('images/services_banner_bg.png') }}" alt="Crecimiento de Negocio" class="card-img-top" style="height: 180px; object-fit: cover; filter: saturate(0.7) contrast(1.05) brightness(0.95);">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-ponce-dark">Crecimiento de Negocio</h5>
                        <p class="text-muted small mb-0">Te ayudamos a formalizar tu marca y a planificar tus impuestos para maximizar tus ganancias de forma legal.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section: Clientes / Empresas Aliadas -->
<style>
.flip-card {
  background-color: transparent;
  width: 100%;
  height: 120px;
  perspective: 1000px;
}
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
}
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}
.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  border-radius: 12px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 12px;
}
.flip-card-front {
  background-color: #ffffff;
  color: #0F2C59;
  border-left: 4px solid var(--ponce-primary);
  box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05), 0 2px 4px -1px rgba(0,0,0,0.03);
}
.flip-card-back {
  background: linear-gradient(135deg, #0F2C59 0%, #071630 100%);
  color: white;
  transform: rotateY(180deg);
  box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05), 0 2px 4px -1px rgba(0,0,0,0.03);
}
</style>

<section class="py-5" style="background-color: #f8fafc; border-top: 1px solid #e2e8f0;">
    <div class="container py-4 text-center position-relative">
        <span class="text-primary fw-bold text-uppercase tracking-wider" style="font-size: 0.85rem; letter-spacing: 1px;">Casos de Éxito</span>
        <h3 class="fw-bold text-ponce-dark mt-2 mb-3">Empresas que Confían en Nosotros</h3>
        <p class="text-muted small mb-5 mx-auto" style="max-width: 600px;">Garantizamos la seguridad fiscal de diversas firmas líderes en los sectores comercial, servicios e industrial. ¡Pasa el cursor para ver!</p>
        
        <?php
        $clients = [
            ['name' => 'ACADEMIA DE COSTURA EL REY EIRL', 'ruc' => '20600710398'],
            ['name' => 'ALIAGA', 'ruc' => '20611167661'],
            ['name' => 'ARTESANIA Y DISEÑO', 'ruc' => '20552990308'],
            ['name' => 'ASOC. PROPIETARIOS MERCADO MODELO Nº1 VITARTE', 'ruc' => '20426488257'],
            ['name' => 'ATACHAGUA SALAZAR ELEUTERIO', 'ruc' => '10093614106'],
            ['name' => 'ATAIPOMA TAIPE JOSE LUIS', 'ruc' => '10463247272'],
            ['name' => 'AVIZAL HURTADO EIRL', 'ruc' => '20612058645'],
            ['name' => 'AYM GRAF', 'ruc' => '20604043086'],
            ['name' => 'BLANCO VILCAPOMA LUIS', 'ruc' => '10483875105'],
            ['name' => 'CABELLO ROSAS MANUEL', 'ruc' => '20614111128'],
            ['name' => 'CHACON ANGULO CESAR', 'ruc' => '10401902461'],
            ['name' => 'CHRISTEL', 'ruc' => '20601535271'],
            ['name' => 'CLINICA TU SALUD DEL PERU SA', 'ruc' => '20602627617'],
            ['name' => 'CLINICA TU SALUD VES', 'ruc' => '20606626470'],
            ['name' => 'COMPANY PALOMINO VIAL S.A.C', 'ruc' => '20610990623'],
            ['name' => 'CONSORCIO SOLUCIONES', 'ruc' => '20451634748'],
            ['name' => 'CV PERFECTA EIRL', 'ruc' => '20210007272'],
            ['name' => 'DISTRIBUIDORA AVI ELENA', 'ruc' => '20543448568'],
            ['name' => 'DISTRIBUIDORA GABYGOL EIRL', 'ruc' => '20614645963'],
            ['name' => 'ECOAMB PERU S.A.C', 'ruc' => '20522023290'],
            ['name' => 'EDIVIAS CONSTRUCCIONES S.A.C', 'ruc' => '20614834880'],
            ['name' => 'FERNANDEZ SANTANA JHON JHAIR', 'ruc' => '10766151936'],
            ['name' => 'GINO WILFREDO CHAVEZ MEDRANO', 'ruc' => '10428503495'],
            ['name' => 'GRUPO DARMED S.A.C', 'ruc' => '20612693596'],
            ['name' => 'GRUPO PRODA HERMANOS S.A.C', 'ruc' => '20611838621'],
            ['name' => 'GRUPO SANTA CRUZ S & J S.A.C', 'ruc' => '20613387481'],
            ['name' => 'HERMELINDA ZORAIDA PONCE MIJA', 'ruc' => '10105042456'],
            ['name' => 'HURTADO FLORES EDWIN', 'ruc' => '10403021666'],
            ['name' => 'IMAGINEON PERU S.A.C', 'ruc' => '20557074300'],
            ['name' => 'INDUSTRIAS JOM S.A.C', 'ruc' => '20605582673'],
            ['name' => 'INMOBILIARIA EDEN PERU SAC', 'ruc' => '20610864741'],
            ['name' => 'INMOBILIARIA TU-KSA SAC', 'ruc' => '20607696595'],
            ['name' => 'INST. INV. CONSERVACION Y DESARROLLO DE LOS ANDES', 'ruc' => '20604805946'],
            ['name' => 'INSTITUTO IDEM', 'ruc' => '20602344216'],
            ['name' => 'INSTITUTO MODA & BELLEZA ESTILO S.A.C', 'ruc' => '20608262246'],
        ];
        $clientChunks = array_chunk($clients, 10);
        ?>

        <div id="clientsCarousel" class="carousel slide" data-bs-ride="carousel" style="padding: 0 40px;">
            <div class="carousel-inner pb-4">
                @foreach($clientChunks as $index => $chunk)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="row g-3 justify-content-center">
                            @foreach($chunk as $client)
                                <div class="col-6 col-md-4 col-lg-3 col-xl-2" style="width: 20%; min-width: 150px;">
                                    <div class="flip-card">
                                        <div class="flip-card-inner">
                                            <div class="flip-card-front">
                                                <h6 class="fw-bold text-ponce-dark mb-1" style="font-size: 0.70rem; line-height: 1.2;">{{ $client['name'] }}</h6>
                                                <span class="badge bg-light text-primary border border-primary border-opacity-10 mt-2" style="font-size: 0.65rem; letter-spacing: 0.5px;">RUC: {{ $client['ruc'] }}</span>
                                            </div>
                                            <div class="flip-card-back">
                                                <i class="bi bi-patch-check-fill text-white fs-4 mb-1"></i>
                                                <h6 class="fw-bold text-white mb-0" style="font-size: 0.75rem;">Cliente Activo</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#clientsCarousel" data-bs-slide="prev" style="width: 40px; justify-content: flex-start; margin-left: -20px;">
                <span class="carousel-control-prev-icon bg-primary rounded-circle p-2 shadow" aria-hidden="true" style="width: 35px; height: 35px;"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#clientsCarousel" data-bs-slide="next" style="width: 40px; justify-content: flex-end; margin-right: -20px;">
                <span class="carousel-control-next-icon bg-primary rounded-circle p-2 shadow" aria-hidden="true" style="width: 35px; height: 35px;"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
            
            <div class="carousel-indicators mb-0" style="bottom: -15px;">
                @foreach($clientChunks as $index => $chunk)
                    <button type="button" data-bs-target="#clientsCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }} bg-primary" aria-current="{{ $index == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>
        </div>

    </div>
</section>

<!-- Section: Metrics / Cifras de Confianza -->
<section class="py-5 text-white" style="background: linear-gradient(135deg, #0F2C59 0%, #071630 100%);">
    <div class="container py-4 text-center">
        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="py-3">
                    <h2 class="display-3 fw-bold text-white mb-1">+60</h2>
                    <p class="text-white-50 mb-0 fw-semibold text-uppercase tracking-wider small" style="letter-spacing: 1px;">Empresas Asesoradas</p>
                    <span class="text-white-50 extra-small" style="font-size: 0.8rem;">Que confían su contabilidad mensual y tributaria con nosotros</span>
                </div>
            </div>
            <div class="col-md-4 border-start border-end border-white border-opacity-10">
                <div class="py-3">
                    <h2 class="display-3 fw-bold text-white mb-1">+20 Años</h2>
                    <p class="text-white-50 mb-0 fw-semibold text-uppercase tracking-wider small" style="letter-spacing: 1px;">De Experiencia</p>
                    <span class="text-white-50 extra-small" style="font-size: 0.8rem;">Respaldando negocios con amplia trayectoria profesional</span>
                </div>
            </div>
            <div class="col-md-4">
                <div class="py-3">
                    <h2 class="display-3 fw-bold text-white mb-1">100%</h2>
                    <p class="text-white-50 mb-0 fw-semibold text-uppercase tracking-wider small" style="letter-spacing: 1px;">Puntualidad y Cumplimiento</p>
                    <span class="text-white-50 extra-small" style="font-size: 0.8rem;">Cero multas ante SUNAT gracias a procesos rigurosos</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
