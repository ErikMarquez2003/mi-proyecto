@extends('layouts.app')

@section('titulo', 'Trámites y Servicios')

@section('contenido')

<div class="page-header">
    <div class="container">
        <div class="crumbs"><a href="{{ route('inicio') }}">Inicio</a> / Trámites y Servicios</div>
        <h1>Trámites y Servicios</h1>
        <p>Solicita un diagnóstico de seguridad, reporta un incidente o consulta el estado del
           monitoreo continuo de tu PyME.</p>
    </div>
</div>

<section class="bloque">
    <div class="container grid-2" style="align-items:flex-start;">

        <div class="form-box">
            <h3 style="margin-top:0; color:var(--azul-profundo);">Solicitar diagnóstico de seguridad</h3>
            <p style="font-size:13.5px; color:var(--texto-secundario); margin-top:-6px;">
                Trámite PRO-02 &mdash; Evaluación inicial gratuita para PyMEs.
            </p>

            @if(session('enviado'))
                <div class="alert-success">✓ Solicitud registrada correctamente. Te contactaremos en menos de 48 horas.</div>
            @endif

            <form method="POST" action="{{ route('tramites.enviar') }}">
                @csrf
                <div class="form-row">
                    <label>Nombre de la PyME</label>
                    <input type="text" name="empresa" placeholder="Ej: Comercial Andina S.R.L." required>
                </div>
                <div class="form-row">
                    <label>Nombre del responsable</label>
                    <input type="text" name="responsable" placeholder="Nombre y apellido" required>
                </div>
                <div class="form-row">
                    <label>Correo de contacto</label>
                    <input type="email" name="correo" placeholder="correo@empresa.com" required>
                </div>
                <div class="form-row">
                    <label>Tamaño de la red (número de equipos)</label>
                    <select name="tamano_red">
                        <option>1 - 10 equipos</option>
                        <option>11 - 30 equipos</option>
                        <option>31 - 50 equipos</option>
                        <option>Más de 50 equipos</option>
                    </select>
                </div>
                <div class="form-row">
                    <label>Describe brevemente tu inquietud</label>
                    <textarea name="descripcion" rows="3" placeholder="Ej: Hemos notado tráfico inusual en horarios nocturnos..."></textarea>
                </div>
                <button type="submit" class="btn btn-primario" style="width:100%; justify-content:center;">Enviar solicitud</button>
                <p class="form-hint">Al enviar este formulario inicia el procedimiento PRO-02 del MAPRO institucional.</p>
            </form>
        </div>

        <div>
            <div class="card" style="margin-bottom:18px;">
                <div class="icon-box"><svg viewBox="0 0 24 24" fill="none"><path d="M12 9v4m0 4h.01M10.3 3.86L1.82 18a1.5 1.5 0 001.3 2.25h17.76a1.5 1.5 0 001.3-2.25L13.7 3.86a1.5 1.5 0 00-2.6 0z" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                <h3>Reportar un incidente</h3>
                <p>¿Detectaste actividad sospechosa? Este servicio activa el procedimiento PRO-04: triage, análisis técnico y respuesta en menos de 48 horas.</p>
                <a href="{{ route('contacto') }}" class="btn btn-outline" style="margin-top:14px;">Reportar ahora</a>
            </div>
            <div class="card">
                <div class="icon-box"><svg viewBox="0 0 24 24" fill="none"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                <h3>Monitoreo continuo</h3>
                <p>Despliegue permanente del agente sobre tu infraestructura, con reentrenamiento periódico (PRO-03) y reportes mensuales de métricas.</p>
                <span class="badge badge-verde" style="margin-top:10px;">Disponible para PyMEs registradas</span>
            </div>
        </div>

    </div>
</section>

@endsection
