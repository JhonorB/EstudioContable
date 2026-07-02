@extends('layouts.app')

@section('title', 'Iniciar Sesión - Estudio Contable Ponce')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center style-row" style="min-height: 80vh;">
        <div class="col-md-5">
            <div class="card p-4 shadow-lg border-0">
                <div class="card-body">
                    <!-- Brand / Title -->
                    <div class="text-center mb-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary bg-opacity-10 text-primary rounded-circle mb-3" style="width: 60px; height: 60px;">
                            <i class="bi bi-briefcase text-ponce-dark fs-2"></i>
                        </div>
                        <h3 class="fw-bold text-ponce-dark">Estudio Contable Ponce</h3>
                        <p class="text-muted small">CPC Diana Ponce Lezcano | RUC: 20601127823</p>
                    </div>

                    <!-- Validation Errors -->
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul class="mb-0 ps-3">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Form -->
                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Correo Electrónico</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0"><i class="bi bi-envelope text-muted"></i></span>
                                <input type="email" name="email" id="email" class="form-control bg-light border-start-0" placeholder="admin@ponce.com" value="{{ old('email') }}" required autofocus>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <label for="password" class="form-label fw-semibold">Contraseña</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0"><i class="bi bi-lock text-muted"></i></span>
                                <input type="password" name="password" id="password" class="form-control bg-light border-start-0" placeholder="••••••••" required>
                            </div>
                        </div>

                        <!-- Remember Me -->
                        <div class="mb-3 form-check d-flex justify-content-between">
                            <div>
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label text-muted small" for="remember">Recordarme</label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid mb-2">
                            <button type="submit" class="btn btn-primary btn-lg fw-semibold py-2">
                                <i class="bi bi-box-arrow-in-right me-2"></i> Acceder al Sistema
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="text-center mt-3 small text-muted">
                &copy; {{ date('Y') }} Estudio Contable Ponce. Todos los derechos reservados.
            </div>
        </div>
    </div>
</div>
@endsection
