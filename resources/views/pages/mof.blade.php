@extends('layouts.app')

@section('titulo', 'Manual de Organización y Funciones')

@section('contenido')

<div class="page-header">
    <div class="container">
        <div class="crumbs"><a href="{{ route('inicio') }}">Inicio</a> / MOF</div>
        <h1>Manual de Organización y Funciones (MOF)</h1>
        <p>Define la estructura, dependencia jerárquica y funciones de cada puesto de la
           Dirección de Defensa Digital Proactiva.</p>
    </div>
</div>

<section class="bloque">
    <div class="container">

        <div class="ficha-puesto">
            <div class="ficha-head">
                <div>
                    <div class="cargo">Director / a de Defensa Digital Proactiva</div>
                    <span class="badge badge-azul">Nivel jerárquico 1</span>
                </div>
                <span class="nivel-badge">Dirección</span>
            </div>
            <h4>Dependencia</h4>
            <p style="margin:0; font-size:14px;">Reporta a la Gerencia General de Marquez CyberVanguard.</p>
            <h4>Funciones principales</h4>
            <ul>
                <li>Dirigir el desarrollo y operación del agente de IA Agéntica para defensa cibernética.</li>
                <li>Aprobar la arquitectura general del sistema (percepción, detección, decisión, respuesta).</li>
                <li>Representar a la dirección ante PyMEs clientes e instituciones reguladoras.</li>
                <li>Evaluar indicadores globales: tasa de detección, falsos positivos y tiempo de respuesta.</li>
            </ul>
            <h4>Requisitos del puesto</h4>
            <ul>
                <li>Ingeniería de Sistemas, Informática o afín.</li>
                <li>Experiencia en gestión de proyectos de ciberseguridad o IA.</li>
            </ul>
        </div>

        <div class="ficha-puesto">
            <div class="ficha-head">
                <div>
                    <div class="cargo">Jefe/a de la Unidad de IA y Agentes Autónomos</div>
                    <span class="badge badge-azul">Nivel jerárquico 2</span>
                </div>
                <span class="nivel-badge">Staff técnico</span>
            </div>
            <h4>Dependencia</h4>
            <p style="margin:0; font-size:14px;">Reporta a la Dirección de Defensa Digital Proactiva.</p>
            <h4>Funciones principales</h4>
            <ul>
                <li>Coordinar a las cuatro jefaturas técnicas del agente (percepción, detección, decisión, soporte).</li>
                <li>Supervisar el entrenamiento de los modelos de Machine Learning y Reinforcement Learning.</li>
                <li>Validar el desempeño del agente frente a IDS tradicionales (Snort, Suricata).</li>
                <li>Gestionar el versionamiento de modelos y la mejora continua del sistema.</li>
            </ul>
            <h4>Requisitos del puesto</h4>
            <ul>
                <li>Especialización en Inteligencia Artificial o Machine Learning.</li>
                <li>Manejo de Python, Scikit-learn, TensorFlow/Keras, Stable-Baselines3.</li>
            </ul>
        </div>

        <div class="ficha-puesto">
            <div class="ficha-head">
                <div>
                    <div class="cargo">Analista de Tráfico de Red</div>
                    <span class="badge badge-azul">Nivel jerárquico 3</span>
                </div>
                <span class="nivel-badge">Jefatura de Percepción</span>
            </div>
            <h4>Dependencia</h4>
            <p style="margin:0; font-size:14px;">Reporta a la Jefatura de Percepción y Monitoreo.</p>
            <h4>Funciones principales</h4>
            <ul>
                <li>Capturar y normalizar el tráfico de red en tiempo real (módulo de percepción del agente).</li>
                <li>Mantener la integración con herramientas de captura como Wireshark.</li>
                <li>Preparar los datos de entrada para los módulos de detección de anomalías.</li>
            </ul>
        </div>

        <div class="ficha-puesto">
            <div class="ficha-head">
                <div>
                    <div class="cargo">Ingeniero/a de Machine Learning</div>
                    <span class="badge badge-azul">Nivel jerárquico 3</span>
                </div>
                <span class="nivel-badge">Jefatura de Detección</span>
            </div>
            <h4>Dependencia</h4>
            <p style="margin:0; font-size:14px;">Reporta a la Jefatura de Detección de Anomalías.</p>
            <h4>Funciones principales</h4>
            <ul>
                <li>Entrenar y mantener los modelos Isolation Forest y Autoencoder.</li>
                <li>Evaluar métricas de clasificación: Precision, Recall, F1-Score, AUC-ROC.</li>
                <li>Actualizar los modelos con nuevos patrones de ataque (DDoS, PortScan, ransomware, brute force).</li>
            </ul>
        </div>

        <div class="ficha-puesto">
            <div class="ficha-head">
                <div>
                    <div class="cargo">Ingeniero/a de Reinforcement Learning</div>
                    <span class="badge badge-azul">Nivel jerárquico 3</span>
                </div>
                <span class="nivel-badge">Jefatura de Decisión</span>
            </div>
            <h4>Dependencia</h4>
            <p style="margin:0; font-size:14px;">Reporta a la Jefatura de Decisión y Respuesta Autónoma.</p>
            <h4>Funciones principales</h4>
            <ul>
                <li>Diseñar y entrenar el agente DQN responsable de la toma de decisiones defensivas.</li>
                <li>Definir la función de recompensa según el impacto de cada acción defensiva.</li>
                <li>Supervisar la ejecución autónoma de respuestas ante amenazas confirmadas.</li>
            </ul>
        </div>

        <div class="ficha-puesto">
            <div class="ficha-head">
                <div>
                    <div class="cargo">Especialista en Soporte Técnico a PyMEs</div>
                    <span class="badge badge-azul">Nivel jerárquico 3</span>
                </div>
                <span class="nivel-badge">Jefatura de Evaluación y Soporte</span>
            </div>
            <h4>Dependencia</h4>
            <p style="margin:0; font-size:14px;">Reporta a la Jefatura de Evaluación y Soporte a PyMEs.</p>
            <h4>Funciones principales</h4>
            <ul>
                <li>Atender solicitudes de diagnóstico y reportes de incidentes de PyMEs clientes.</li>
                <li>Comunicar resultados de detección en lenguaje accesible para personal no técnico.</li>
                <li>Recoger retroalimentación para mejorar la experiencia del servicio.</li>
            </ul>
        </div>

    </div>
</section>

@endsection
