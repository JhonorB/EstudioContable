@extends('layouts.app')

@section('title', 'Dashboard - Estudio Contable Ponce')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card p-4 shadow-sm border-0 bg-white">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <h2 class="fw-bold text-ponce-dark">Bienvenido, {{ Auth::user()->name }}</h2>
                        <p class="text-muted mb-0">Has iniciado sesión como <strong class="text-primary">{{ strtoupper(Auth::user()->role) }}</strong>.</p>
                    </div>
                    <div class="text-md-end mt-2 mt-md-0">
                        <span class="badge bg-success p-2 fs-6"><i class="bi bi-shield-check me-1"></i> Sesión Segura</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick stats grid mockup (Dashboard visual styling test) -->
    <div class="row g-4 mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3 bg-white">
                <div class="d-flex align-items-center">
                    <div class="p-3 bg-primary bg-opacity-10 text-primary rounded-3 me-3">
                        <i class="bi bi-people-fill fs-3"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Clientes</h6>
                        <h4 class="fw-bold mb-0">0</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3 bg-white">
                <div class="d-flex align-items-center">
                    <div class="p-3 bg-info bg-opacity-10 text-info rounded-3 me-3">
                        <i class="bi bi-building fs-3"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Empresas</h6>
                        <h4 class="fw-bold mb-0">0</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3 bg-white">
                <div class="d-flex align-items-center">
                    <div class="p-3 bg-warning bg-opacity-10 text-warning rounded-3 me-3">
                        <i class="bi bi-file-earmark-text fs-3"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Asesorías</h6>
                        <h4 class="fw-bold mb-0">0</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm p-3 bg-white">
                <div class="d-flex align-items-center">
                    <div class="p-3 bg-danger bg-opacity-10 text-danger rounded-3 me-3">
                        <i class="bi bi-calendar-event fs-3"></i>
                    </div>
                    <div>
                        <h6 class="text-muted mb-1">Declaraciones</h6>
                        <h4 class="fw-bold mb-0">0</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
