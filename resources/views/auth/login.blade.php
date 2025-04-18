<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Primus</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h2>Log In</h2>
            
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" class="btn">Log In</button>
            </form>
            <p class="register-link">
                Don't have an account?
                <a href="{{ route('register') }}">Sign up</a>
            </p>
            <p class="reset-link">
             <a href="{{ route('password.request') }}">Esqueceu sua senha?</a>
            </p>

        </div>
    </div>
</body>
</html>
