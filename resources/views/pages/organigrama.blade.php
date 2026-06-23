@extends('layouts.app')

@section('titulo', 'Organigrama')

@section('contenido')

<div class="page-header">
    <div class="container">
        <div class="crumbs"><a href="{{ route('inicio') }}">Inicio</a> / Organigrama</div>
        <h1>Organigrama institucional</h1>
        <p>Estructura orgánica de la Dirección de Defensa Digital Proactiva, área tecnológica
           de Marquez CyberVanguard.</p>
    </div>
</div>

<section class="bloque">
    <div class="container">

        <div class="card" style="overflow-x:auto;">
            <div class="org-chart">

                <div class="org-node nivel-1">
                    DIRECCIÓN DE DEFENSA DIGITAL PROACTIVA
                    <span class="sub">Máxima autoridad técnica</span>
                </div>
                <div class="org-connector-v"></div>

                <div class="org-node">
                    UNIDAD DE INTELIGENCIA ARTIFICIAL Y AGENTES AUTÓNOMOS
                    <span class="sub">Staff técnico-asesor</span>
                </div>
                <div class="org-connector-v"></div>

                <div class="org-row">

                    <div class="org-branch">
                        <div class="org-node">
                            JEFATURA DE PERCEPCIÓN Y MONITOREO
                            <span class="sub">Captura de tráfico</span>
                        </div>
                        <div class="org-connector-v"></div>
                        <div class="org-node" style="font-weight:500; font-size:12px;">
                            Analista de Tráfico de Red
                        </div>
                    </div>

                    <div class="org-branch">
                        <div class="org-node">
                            JEFATURA DE DETECCIÓN DE ANOMALÍAS
                            <span class="sub">Isolation Forest / Autoencoder</span>
                        </div>
                        <div class="org-connector-v"></div>
                        <div class="org-node" style="font-weight:500; font-size:12px;">
                            Ingeniero de Machine Learning
                        </div>
                    </div>

                    <div class="org-branch">
                        <div class="org-node">
                            JEFATURA DE DECISIÓN Y RESPUESTA AUTÓNOMA
                            <span class="sub">Reinforcement Learning (DQN)</span>
                        </div>
                        <div class="org-connector-v"></div>
                        <div class="org-node" style="font-weight:500; font-size:12px;">
                            Ingeniero de Reinforcement Learning
                        </div>
                    </div>

                    <div class="org-branch">
                        <div class="org-node">
                            JEFATURA DE EVALUACIÓN Y SOPORTE A PYMES
                            <span class="sub">Métricas y atención técnica</span>
                        </div>
                        <div class="org-connector-v"></div>
                        <div class="org-node" style="font-weight:500; font-size:12px;">
                            Especialista en Soporte Técnico
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="section-head" style="margin-top:48px;">
            <span class="tag">Lectura del organigrama</span>
            <h2>Niveles jerárquicos</h2>
        </div>
        <table class="tabla-doc">
            <thead>
                <tr><th>Nivel</th><th>Unidad</th><th>Dependencia</th><th>Responsabilidad principal</th></tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>Dirección de Defensa Digital Proactiva</td><td>—</td><td>Dirección estratégica y representación institucional</td></tr>
                <tr><td>2</td><td>Unidad de IA y Agentes Autónomos</td><td>Dirección</td><td>Coordinación técnica del agente IA Agéntica</td></tr>
                <tr><td>3</td><td>Jefatura de Percepción y Monitoreo</td><td>Unidad de IA</td><td>Captura y normalización de tráfico de red</td></tr>
                <tr><td>3</td><td>Jefatura de Detección de Anomalías</td><td>Unidad de IA</td><td>Identificación de comportamientos atípicos</td></tr>
                <tr><td>3</td><td>Jefatura de Decisión y Respuesta Autónoma</td><td>Unidad de IA</td><td>Selección y ejecución de la acción defensiva</td></tr>
                <tr><td>3</td><td>Jefatura de Evaluación y Soporte a PyMEs</td><td>Unidad de IA</td><td>Métricas de desempeño y atención a clientes PyME</td></tr>
            </tbody>
        </table>

    </div>
</section>

@endsection
