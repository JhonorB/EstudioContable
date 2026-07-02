<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PublicWebTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_loads_correctly(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_nosotros_page_loads_correctly(): void
    {
        $response = $this->get('/nosotros');
        $response->assertStatus(200);
        $response->assertSee('Sobre Nosotros');
    }

    public function test_servicios_page_loads_correctly(): void
    {
        $response = $this->get('/servicios');
        $response->assertStatus(200);
        $response->assertSee('Nuestros Servicios');
    }

    public function test_contacto_page_loads_correctly(): void
    {
        $response = $this->get('/contacto');
        $response->assertStatus(200);
        $response->assertSee('Ponte en Contacto');
    }

    public function test_contact_form_submits_successfully_and_registers_audit_log(): void
    {
        $response = $this->post('/contacto', [
            'nombre' => 'Juan Pérez',
            'correo' => 'juan@perez.com',
            'telefono' => '920369991',
            'empresa' => 'Perez Corp',
            'servicio' => 'Asesoría Tributaria',
            'mensaje' => 'Hola, requiero asesoría para mi pequeña empresa.',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('audit_logs', [
            'action' => 'web_contact',
            'description' => 'Mensaje de contacto enviado por: Juan Pérez (juan@perez.com) para el servicio Asesoría Tributaria.',
        ]);
    }
}
