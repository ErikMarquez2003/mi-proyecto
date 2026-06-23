@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')

<section class="hero">
    <div class="container hero-grid">
        <div>
            <span class="eyebrow"><span class="dot"></span> Sistema en operación &mdash; tiempo de respuesta &lt; 5s</span>
            <h1>Defensa digital <span>autónoma</span> para PyMEs bolivianas</h1>
            <p class="lead">
                La Dirección de Defensa Digital Proactiva opera un agente de Inteligencia Artificial
                Agéntica que detecta y neutraliza amenazas cibernéticas en tiempo real, sin depender
                de la intervención permanente de especialistas.
            </p>
            <div class="hero-cta">
                <a href="{{ route('institucional') }}" class="btn btn-primario">Conocer la dirección</a>
                <a href="{{ route('mof') }}" class="btn btn-outline" style="color:#fff; border-color:rgba(255,255,255,.4);">Ver MOF y MAPRO</a>
            </div>
            <div class="hero-metrics">
                <div class="hero-metric"><div class="num">&gt;90%</div><div class="lbl">Tasa de detección</div></div>
                <div class="hero-metric"><div class="num">&lt;5s</div><div class="lbl">Tiempo de respuesta</div></div>
                <div class="hero-metric"><div class="num">70%</div><div class="lbl">Tejido empresarial PyME</div></div>
            </div>
        </div>

        <div class="flow-card">
            <h3>Ciclo del agente autónomo</h3>
            <div class="flow-steps">
                <div class="flow-step">
                    <div class="flow-num">1</div>
                    <div class="flow-text">
                        <div class="t1">Percepción</div>
                        <div class="t2">Captura y normaliza tráfico de red en tiempo real</div>
                    </div>
                </div>
                <div class="flow-step">
                    <div class="flow-num">2</div>
                    <div class="flow-text">
                        <div class="t1">Detección de anomalías</div>
                        <div class="t2">Isolation Forest y Autoencoder identifican patrones atípicos</div>
                    </div>
                </div>
                <div class="flow-step">
                    <div class="flow-num">3</div>
                    <div class="flow-text">
                        <div class="t1">Decisión (Reinforcement Learning)</div>
                        <div class="t2">DQN selecciona la acción defensiva óptima según el contexto</div>
                    </div>
                </div>
                <div class="flow-step">
                    <div class="flow-num">4</div>
                    <div class="flow-text">
                        <div class="t1">Respuesta autónoma</div>
                        <div class="t2">Neutralización de la amenaza sin intervención humana directa</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bloque alt">
    <div class="container">
        <div class="section-head">
            <span class="tag">Por qué existimos</span>
            <h2>El problema que atendemos</h2>
            <p>Las PyMEs bolivianas representan más del 70% del tejido empresarial, pero carecen de
               sistemas de ciberseguridad accesibles. Esta dirección nace para cerrar esa brecha.</p>
        </div>
        <div class="grid-3">
            <div class="card">
                <div class="icon-box">
                    <svg viewBox="0 0 24 24" fill="none"><path d="M12 9v4m0 4h.01M10.3 3.86L1.82 18a1.5 1.5 0 001.3 2.25h17.76a1.5 1.5 0 001.3-2.25L13.7 3.86a1.5 1.5 0 00-2.6 0z" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <h3>Exposición creciente</h3>
                <p>Más del 60% de los ataques de ransomware en la región tienen como objetivo a pequeñas y medianas empresas.</p>
            </div>
            <div class="card">
                <div class="icon-box">
                    <svg viewBox="0 0 24 24" fill="none"><path d="M12 1l8 4v6c0 5-3.5 8.5-8 9.5C7.5 19.5 4 16 4 11V5l8-4z" stroke-width="1.6" stroke-linejoin="round"/></svg>
                </div>
                <h3>Modelo reactivo</h3>
                <p>Los sistemas tradicionales (Snort, Suricata) responden después del ataque, basados en firmas conocidas.</p>
            </div>
            <div class="card">
                <div class="icon-box">
                    <svg viewBox="0 0 24 24" fill="none"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </div>
                <h3>Costo de especialistas</h3>
                <p>Contratar un equipo de ciberseguridad permanente es inviable para la mayoría de las PyMEs bolivianas.</p>
            </div>
        </div>
    </div>
</section>

<section class="bloque">
    <div class="container">
        <div class="section-head">
            <span class="tag">Nuestra solución</span>
            <h2>Inteligencia Artificial Agéntica aplicada</h2>
            <p>Un agente autónomo, entrenado con datasets reales de ciberataques, que aprende y mejora con la experiencia.</p>
        </div>
        <div class="grid-4">
            <div class="card">
                <h3 style="font-size:14.5px;">Isolation Forest</h3>
                <p>Detección no supervisada de anomalías en tráfico de red.</p>
            </div>
            <div class="card">
                <h3 style="font-size:14.5px;">Autoencoder</h3>
                <p>Reconstrucción de tráfico normal para aislar comportamientos atípicos.</p>
            </div>
            <div class="card">
                <h3 style="font-size:14.5px;">DQN (Reinforcement Learning)</h3>
                <p>Aprendizaje de la mejor acción defensiva en cada escenario.</p>
            </div>
            <div class="card">
                <h3 style="font-size:14.5px;">CICIDS2017 / NSL-KDD</h3>
                <p>Entrenamiento y validación sobre datasets internacionales de referencia.</p>
            </div>
        </div>
    </div>
</section>

@endsection
