<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuditLog;
use Illuminate\Support\Facades\Log;

class ContactoController extends Controller
{
    public function index()
    {
        return view('web.contacto');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'correo' => 'required|email|max:100',
            'telefono' => 'required|string|max:20',
            'empresa' => 'nullable|string|max:150',
            'servicio' => 'required|string|max:100',
            'mensaje' => 'required|string|max:1000',
        ]);

        Log::info('Contacto General recibido:', $validated);

        AuditLog::create([
            'user_id' => null,
            'action' => 'web_contact',
            'description' => "Mensaje de contacto enviado por: {$validated['nombre']} ({$validated['correo']}) para el servicio {$validated['servicio']}.",
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
        ]);

        return back()->with('success', '¡Muchas gracias! Tu mensaje ha sido enviado con éxito. Nos pondremos en contacto contigo a la brevedad.');
    }
}
