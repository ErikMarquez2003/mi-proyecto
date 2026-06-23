<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Marquez CyberVanguard') | Dirección de Defensa Digital Proactiva</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div class="top-strip">
        <div class="container">
            <span class="bandera"><span class="b-rojo"></span><span class="b-amar"></span><span class="b-verde"></span></span>
            <span>Estado Plurinacional de Bolivia &mdash; Plataforma institucional de demostración académica (UPEA)</span>
        </div>
    </div>

    <header class="site-header">
        <div class="container header-row">
            <a href="{{ route('inicio') }}" class="brand">
                <span class="brand-mark">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L4 5v6c0 5 3.5 8.5 8 9.5 4.5-1 8-4.5 8-9.5V5l-8-3z" stroke="white" stroke-width="1.6" stroke-linejoin="round"/>
                        <path d="M9 12l2 2 4-4" stroke="#D9A82E" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
                <span class="brand-text">
                    <span class="brand-name">Marquez CyberVanguard</span>
                    <span class="brand-sub">Dirección de Defensa Digital Proactiva</span>
                </span>
            </a>

            <nav class="main-nav">
                <a href="{{ route('inicio') }}" class="{{ request()->routeIs('inicio') ? 'activo' : '' }}">Inicio</a>
                <a href="{{ route('institucional') }}" class="{{ request()->routeIs('institucional') ? 'activo' : '' }}">Institucional</a>
                <a href="{{ route('organigrama') }}" class="{{ request()->routeIs('organigrama') ? 'activo' : '' }}">Organigrama</a>
                <a href="{{ route('mof') }}" class="{{ request()->routeIs('mof') ? 'activo' : '' }}">MOF</a>
                <a href="{{ route('mapro') }}" class="{{ request()->routeIs('mapro') ? 'activo' : '' }}">MAPRO</a>
                <a href="{{ route('tramites') }}" class="{{ request()->routeIs('tramites') ? 'activo' : '' }}">Trámites</a>
                <a href="{{ route('contacto') }}" class="{{ request()->routeIs('contacto') ? 'activo' : '' }}">Contacto</a>
            </nav>

            <div style="display:flex; gap:10px;">
                <a href="{{ route('login') }}" class="btn btn-ghost">Iniciar sesión</a>
            </div>
        </div>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h4>Marquez CyberVanguard</h4>
                    <p style="font-size:13.5px; max-width: 280px; color:#9FB3CC;">
                        Dirección de Defensa Digital Proactiva. Agente de Inteligencia Artificial Agéntica
                        para la detección y neutralización de amenazas cibernéticas en tiempo real,
                        diseñado para la realidad de las PyMEs bolivianas.
                    </p>
                </div>
                <div>
                    <h4>Navegación</h4>
                    <ul>
                        <li><a href="{{ route('institucional') }}">Institucional</a></li>
                        <li><a href="{{ route('organigrama') }}">Organigrama</a></li>
                        <li><a href="{{ route('mof') }}">MOF</a></li>
                        <li><a href="{{ route('mapro') }}">MAPRO</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Servicios</h4>
                    <ul>
                        <li><a href="{{ route('tramites') }}">Diagnóstico de seguridad</a></li>
                        <li><a href="{{ route('tramites') }}">Reporte de incidente</a></li>
                        <li><a href="{{ route('tramites') }}">Monitoreo continuo</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Contacto</h4>
                    <ul>
                        <li>La Paz, Bolivia</li>
                        <li>contacto@cybervanguard.bo</li>
                        <li>Universidad Pública de El Alto</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <span>&copy; {{ date('Y') }} Marquez CyberVanguard &mdash; Proyecto académico, UPEA.</span>
                <span>Ing. de Sistemas &mdash; Jhon Erik Chino Marquez</span>
            </div>
        </div>
    </footer>

</body>
</html>
