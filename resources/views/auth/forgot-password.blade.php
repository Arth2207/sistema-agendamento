<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <link rel="stylesheet" href="{{ asset('css/forgot.css') }}">
</head>
<body>
  <div class="container">
    <div class="form-box">
      <h2>Reset Password</h2>
      <p class="description">Enter your email to reset your password.</p>

      @if (session('status'))
        <div class="alert">
          {{ session('status') }}
        </div>
      @endif

      <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit">Send</button>
      </form>
    </div>
  </div>
</body>
</html>
