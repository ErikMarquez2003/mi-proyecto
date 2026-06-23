@extends('layouts.app')

@section('titulo', 'Contacto')

@section('contenido')

<div class="page-header">
    <div class="container">
        <div class="crumbs"><a href="{{ route('inicio') }}">Inicio</a> / Contacto</div>
        <h1>Contacto</h1>
        <p>Comunícate con la Dirección de Defensa Digital Proactiva de Marquez CyberVanguard.</p>
    </div>
</div>

<section class="bloque">
    <div class="container grid-2" style="align-items:flex-start;">

        <div class="form-box">
            <h3 style="margin-top:0; color:var(--azul-profundo);">Envíanos un mensaje</h3>

            @if(session('enviado'))
                <div class="alert-success">✓ Mensaje enviado correctamente. Te responderemos a la brevedad.</div>
            @endif

            <form method="POST" action="{{ route('contacto.enviar') }}">
                @csrf
                <div class="form-row">
                    <label>Nombre completo</label>
                    <input type="text" name="nombre" required>
                </div>
                <div class="form-row">
                    <label>Correo electrónico</label>
                    <input type="email" name="correo" required>
                </div>
                <div class="form-row">
                    <label>Asunto</label>
                    <select name="asunto">
                        <option>Consulta general</option>
                        <option>Reporte de incidente</option>
                        <option>Solicitud de información técnica</option>
                        <option>Otro</option>
                    </select>
                </div>
                <div class="form-row">
                    <label>Mensaje</label>
                    <textarea name="mensaje" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primario" style="width:100%; justify-content:center;">Enviar mensaje</button>
            </form>
        </div>

        <div class="card">
            <h3>Información institucional</h3>
            <p><strong>Dirección:</strong> Dirección de Defensa Digital Proactiva<br>
               <strong>Institución:</strong> Marquez CyberVanguard<br>
               <strong>Ubicación:</strong> La Paz, Bolivia<br>
               <strong>Correo:</strong> contacto@cybervanguard.bo<br>
               <strong>Proyecto académico:</strong> Universidad Pública de El Alto (UPEA), Carrera de Ingeniería de Sistemas
            </p>
            <h4 style="text-transform:uppercase; font-size:12.5px; color:var(--texto-secundario); margin-top:20px;">Horario de atención</h4>
            <p style="font-size:14px;">Lunes a viernes, 08:30 a 18:00 (hora de Bolivia)</p>
        </div>

    </div>
</section>

@endsection
