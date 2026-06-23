@extends('layouts.app')

@section('titulo', 'Manual de Procedimientos')

@section('contenido')

<div class="page-header">
    <div class="container">
        <div class="crumbs"><a href="{{ route('inicio') }}">Inicio</a> / MAPRO</div>
        <h1>Manual de Procedimientos (MAPRO)</h1>
        <p>Describe paso a paso los procedimientos operativos del agente de IA Agéntica y de la
           atención a PyMEs clientes.</p>
    </div>
</div>

<section class="bloque">
    <div class="container">

        <div class="procedimiento">
            <div class="procedimiento-head">
                <span class="procedimiento-codigo">PRO-01</span>
                <h3>Detección y neutralización de una amenaza en tiempo real</h3>
            </div>
            <ol class="paso-lista">
                <li><strong>Captura:</strong> el módulo de percepción recibe el tráfico de red en tiempo real desde la infraestructura monitoreada.</li>
                <li><strong>Preprocesamiento:</strong> se normalizan los paquetes y se extraen las características relevantes para el modelo.</li>
                <li><strong>Detección de anomalías:</strong> Isolation Forest y Autoencoder evalúan si el tráfico se aparta del comportamiento normal.</li>
                <li><strong>Clasificación de severidad:</strong> se calcula un puntaje de anomalía y se compara contra el umbral definido.</li>
                <li><strong>Decisión autónoma:</strong> el agente DQN selecciona la acción defensiva (alertar, aislar, bloquear) según el contexto.</li>
                <li><strong>Ejecución de la respuesta:</strong> la acción se aplica automáticamente sobre la red de la PyME afectada.</li>
                <li><strong>Registro:</strong> el incidente, la decisión y el resultado se almacenan para auditoría y reentrenamiento del modelo.</li>
            </ol>
        </div>

        <div class="procedimiento">
            <div class="procedimiento-head">
                <span class="procedimiento-codigo">PRO-02</span>
                <h3>Solicitud de diagnóstico de seguridad por una PyME</h3>
            </div>
            <ol class="paso-lista">
                <li><strong>Solicitud:</strong> la PyME completa el formulario de diagnóstico en la sección de Trámites.</li>
                <li><strong>Validación:</strong> el Especialista en Soporte Técnico revisa los datos de la red proporcionados.</li>
                <li><strong>Despliegue del agente:</strong> se configura una instancia del agente sobre el entorno de la PyME (o un entorno simulado equivalente).</li>
                <li><strong>Periodo de observación:</strong> el agente monitorea el tráfico durante un periodo definido (sesión de referencia: 60 minutos).</li>
                <li><strong>Generación de informe:</strong> se entregan las métricas obtenidas: tasa de detección, falsos positivos y tiempo de respuesta.</li>
                <li><strong>Recomendaciones:</strong> se presentan acciones sugeridas según los hallazgos del diagnóstico.</li>
            </ol>
        </div>

        <div class="procedimiento">
            <div class="procedimiento-head">
                <span class="procedimiento-codigo">PRO-03</span>
                <h3>Reentrenamiento periódico del modelo</h3>
            </div>
            <ol class="paso-lista">
                <li><strong>Recolección:</strong> se reúnen los nuevos incidentes registrados desde el último ciclo de entrenamiento.</li>
                <li><strong>Curado de datos:</strong> el equipo de Machine Learning etiqueta y limpia los nuevos casos.</li>
                <li><strong>Reentrenamiento:</strong> se actualizan Isolation Forest, Autoencoder y la política del agente DQN.</li>
                <li><strong>Validación comparativa:</strong> se comparan las métricas del nuevo modelo contra la versión anterior y contra Snort/Suricata.</li>
                <li><strong>Despliegue:</strong> si el nuevo modelo mejora el desempeño, se publica en producción.</li>
            </ol>
        </div>

        <div class="procedimiento">
            <div class="procedimiento-head">
                <span class="procedimiento-codigo">PRO-04</span>
                <h3>Atención de un reporte de incidente manual</h3>
            </div>
            <ol class="paso-lista">
                <li><strong>Recepción:</strong> el cliente reporta un incidente sospechoso mediante el formulario correspondiente.</li>
                <li><strong>Triage inicial:</strong> el Especialista en Soporte Técnico clasifica la urgencia del reporte.</li>
                <li><strong>Análisis técnico:</strong> se revisa el registro del agente para confirmar si el evento ya fue detectado.</li>
                <li><strong>Respuesta al cliente:</strong> se comunica el estado y las acciones tomadas o recomendadas.</li>
                <li><strong>Cierre y aprendizaje:</strong> el caso se documenta como insumo para el siguiente reentrenamiento.</li>
            </ol>
        </div>

    </div>
</section>

@endsection
