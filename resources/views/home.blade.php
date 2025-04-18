<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PRIMUS - Página Inicial</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <svg viewBox="0 0 24 24"><path d="M12 2L2 22h20L12 2z" fill="#fff"/></svg>
            <span class="logo-text">PRIMUS</span>
        </div>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
        </div>
    </nav>

    <section class="hero">
        <h1>Agenda Seus<br>Serviços com<br>Facilidade</h1>
        <div class="buttons">
      @auth
        <a href="{{ route('agendar') }}" class="btn primary">Agendar Agora</a>
        <a href="{{ route('agenda') }}" class="btn secondary">Ver Agenda</a>
      @else
        <a href="{{ route('login') }}" class="btn primary">Agendar Agora</a>
        <a href="{{ route('login') }}" class="btn secondary">Ver Agenda</a>
      @endauth
</div>

    </section>
</body>
</html>
