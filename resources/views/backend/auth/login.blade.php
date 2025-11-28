<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title ?? 'Login' }}</title>
    <link rel="stylesheet" href="{{ asset('public/assets/backend/css/style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            background: white;
            padding: 2rem 3rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-container h2 {
            margin-bottom: 1.5rem;
            font-weight: 700;
            text-align: center;
            color: #343a40;
        }
        .form-group label {
            font-weight: 500;
            color: #495057;
        }
        .error {
            color: #dc3545;
            font-size: 0.875rem;
        }
        .btn-primary {
            width: 100%;
            padding: 0.75rem;
            font-size: 1rem;
            font-weight: 600;
            background-color: #007bff;
            border: none;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        .remember-me input[type="checkbox"] {
            margin-right: 0.5rem;
        }
    </style>
</head>
    <body>
    <div class="login-wrapper">
        <div class="login-accent-circles">
            <div class="circle circle1"></div>
            <div class="circle circle2"></div>
            <div class="circle circle3"></div>
            <div class="circle circle4"></div>
        </div>
        <div class="login-container shadow rounded p-4">
            <div class="logo-container text-center mb-4">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="logo-img" />
            </div>
            <h2 class="text-center mb-4 text-primary">{{ $title ?? 'Login' }}</h2>

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('authentication') }}">
                @csrf

                <div class="form-group mb-3">
                    <label for="email" class="form-label text-secondary">Email</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus class="form-control" />
                    @error('email')
                        <div class="error text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="password" class="form-label text-secondary">Password</label>
                    <input type="password" name="password" id="password" required class="form-control" />
                    @error('password')
                        <div class="error text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group remember-me mb-3 d-flex align-items-center">
                    <input type="checkbox" name="remember" id="remember" class="form-check-input me-2" />
                    <label for="remember" class="mb-0 text-secondary">Remember Me</label>
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>
    <style>
        body {
            background-color: #f1f4f8;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-wrapper {
            position: relative;
            width: 400px;
            max-width: 90vw;
        }
        .login-container {
            background: white;
            border-radius: 12px;
            position: relative;
            z-index: 10;
        }
        .logo-img {
            max-width: 120px;
            height: auto;
        }
        .login-accent-circles .circle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.15;
        }
        .circle1 {
            width: 100px;
            height: 100px;
            background-color: #007bff;
            top: -40px;
            right: -30px;
        }
        .circle2 {
            width: 60px;
            height: 60px;
            background-color: #6c757d;
            top: 30%;
            right: -20px;
        }
        .circle3 {
            width: 80px;
            height: 80px;
            background-color: #6c757d;
            bottom: -40px;
            left: -40px;
        }
        .circle4 {
            width: 50px;
            height: 50px;
            background-color: #007bff;
            bottom: 10%;
            left: -25px;
        }
    </style>
</body>
</html>
