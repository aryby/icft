<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - DESDI 2026 Admin</title>
    <link href="{{ asset('inspire.css') }}" rel="stylesheet">
    <link href="{{ asset('desdi-custom.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #363636ff 0%, #ffffffff 100%);
            min-height: 100vh;
        }
        .login-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 2rem;
            max-width: 400px;
            width: 100%;
        }
        .login-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        .login-logo {
            width: 80px;
            height: 60px;
            background: #005f98;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center min-vh-100">
    <div class="login-card">
        <div class="login-header">
            <div class="login-logo">DESDI 2026</div>
            <h2 class="h4 mb-2">Sign in to your Account</h2>
        </div>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                       placeholder="Enter your email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                       placeholder="Enter your password" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 form-check">
                <input id="remember" name="remember" type="checkbox" class="form-check-input">
                <label for="remember" class="form-check-label">Remember me</label>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary" style="background-color: #005f98; border-color: #005f98;">
                    <i class="fas fa-sign-in-alt me-2"></i>Sign in
                </button>
            </div>
        </form>
    </div>
</body>
</html>