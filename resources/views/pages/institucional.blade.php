@extends('layouts.app')

@section('titulo', 'Institucional')

@section('contenido')

<div class="page-header">
    <div class="container">
        <div class="crumbs"><a href="{{ route('inicio') }}">Inicio</a> / Institucional</div>
        <h1>Quiénes somos</h1>
        <p>La Dirección de Defensa Digital Proactiva es la unidad técnica responsable del desarrollo,
           operación y mejora continua del agente de IA Agéntica de Marquez CyberVanguard.</p>
    </div>
</div>

<section class="bloque">
    <div class="container grid-2">
        <div class="card">
            <h3>Misión</h3>
            <p>Proteger la infraestructura digital de las PyMEs bolivianas mediante un agente de
               Inteligencia Artificial autónomo, accesible y de bajo costo, capaz de detectar y
               neutralizar amenazas cibernéticas en tiempo real, reduciendo la dependencia de
               especialistas permanentes.</p>
        </div>
        <div class="card">
            <h3>Visión</h3>
            <p>Ser la referencia boliviana en defensa digital proactiva basada en IA Agéntica,
               extendiendo el acceso a ciberseguridad de calidad a todo el tejido empresarial
               del país hacia 2030.</p>
        </div>
    </div>
</section>

<section class="bloque alt">
    <div class="container">
        <div class="section-head">
            <span class="tag">Idea a defender</span>
            <h2>Ciberseguridad proactiva, accesible y autónoma</h2>
            <p>La IA Agéntica para respuesta autónoma permite construir un sistema de ciberseguridad
               proactivo que protege efectivamente las redes de PyMEs bolivianas, sin requerir
               intervención permanente de especialistas.</p>
        </div>
        <div class="grid-3">
            <div class="card">
                <div class="icon-box"><svg viewBox="0 0 24 24" fill="none"><path d="M9 12l2 2 4-4m5 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></div>
                <h3>+90% de detección</h3>
                <p>Isolation Forest y Autoencoder alcanzan tasas de detección superiores al 90% sobre CICIDS2017 y NSL-KDD.</p>
            </div>
            <div class="card">
                <div class="icon-box"><svg viewBox="0 0 24 24" fill="none"><path d="M13 2L3 14h7l-1 8 10-12h-7l1-8z" stroke-width="1.6" stroke-linejoin="round"/></svg></div>
                <h3>Aprendizaje continuo</h3>
                <p>El módulo de Reinforcement Learning mejora sus decisiones con la experiencia, adaptándose a amenazas nuevas.</p>
            </div>
            <div class="card">
                <div class="icon-box"><svg viewBox="0 0 24 24" fill="none"><path d="M12 1L4 5v6c0 5 3.5 8.5 8 9.5 4.5-1 8-4.5 8-9.5V5l-8-4z" stroke-width="1.6" stroke-linejoin="round"/></svg></div>
                <h3>Open source</h3>
                <p>Uso exclusivo de herramientas de código abierto, garantizando viabilidad económica para Bolivia.</p>
            </div>
        </div>
    </div>
</section>

<section class="bloque">
    <div class="container">
        <div class="section-head">
            <span class="tag">Marco de referencia</span>
            <h2>Bases técnicas del proyecto</h2>
        </div>
        <table class="tabla-doc">
            <thead>
                <tr><th>Componente</th><th>Tecnología / Marco</th><th>Función</th></tr>
            </thead>
            <tbody>
                <tr><td>Detección de anomalías</td><td>Isolation Forest, Autoencoder</td><td>Identificación no supervisada de tráfico atípico</td></tr>
                <tr><td>Toma de decisiones</td><td>Q-Learning, DQN</td><td>Selección de la acción defensiva óptima</td></tr>
                <tr><td>Marco de seguridad</td><td>NIST Cybersecurity Framework, Zero Trust</td><td>Defensa en profundidad</td></tr>
                <tr><td>Línea base comparativa</td><td>Snort 3.x, Suricata</td><td>IDS tradicionales basados en firmas</td></tr>
                <tr><td>Datasets</td><td>CICIDS2017, NSL-KDD</td><td>Entrenamiento y validación del modelo</td></tr>
                <tr><td>Entorno de prueba</td><td>GNS3 / Mininet, Wireshark</td><td>Simulación de red de una PyME boliviana</td></tr>
            </tbody>
        </table>
    </div>
</section>

@endsection
