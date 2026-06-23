<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión | Marquez CyberVanguard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

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
        <a href="{{ route('inicio') }}" class="btn btn-ghost">Volver al sitio</a>
    </div>
</header>

<div class="login-wrap">
    <div class="login-card">
        <div class="brand">
            <span class="brand-mark">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2L4 5v6c0 5 3.5 8.5 8 9.5 4.5-1 8-4.5 8-9.5V5l-8-3z" stroke="white" stroke-width="1.6" stroke-linejoin="round"/>
                    <path d="M9 12l2 2 4-4" stroke="#D9A82E" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
        </div>
        <h2>Acceso al panel interno</h2>
        <p class="sub">Personal técnico de la Dirección de Defensa Digital Proactiva</p>

        <form method="POST" action="{{ route('login.intentar') }}">
            @csrf
            <div class="form-row">
                <label>Correo institucional</label>
                <input type="email" name="correo" placeholder="usuario@cybervanguard.bo" required>
            </div>
            <div class="form-row">
                <label>Contraseña</label>
                <input type="password" name="password" placeholder="••••••••" required>
            </div>
            <button type="submit" class="btn btn-primario">Iniciar sesión</button>
        </form>
        <p class="form-hint" style="text-align:center; margin-top:16px;">
            Acceso restringido a personal autorizado de la dirección.
        </p>
    </div>
</div>

</body>
</html>
