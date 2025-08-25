<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #e3f0ff 0%, #fafcff 100%);
        }
        .welcome-card {
            border-radius: 1.5rem;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            background: #fff;
            padding: 3rem 2rem;
        }
        .welcome-title {
            font-weight: 700;
            letter-spacing: 1px;
        }
        .btn-custom {
            min-width: 140px;
            font-size: 1.1rem;
            border-radius: 2rem;
            transition: 0.2s;
        }
        .btn-custom:hover {
            transform: translateY(-2px) scale(1.04);
            box-shadow: 0 4px 16px rgba(0,0,0,0.08);
        }
    </style>
</head>
<body>
    <div class="container min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <div class="welcome-card text-center">
            <i class="bi bi-person-circle text-primary" style="font-size: 4rem;"></i>
            <h1 class="mb-4 display-5 text-primary welcome-title">Bem-vindo</h1>
            <div class="d-flex justify-content-center gap-3">
                <a href="{{ route('user.login') }}">
                    <button class="btn btn-primary btn-custom"><i class="bi bi-box-arrow-in-right"></i> Login</button>
                </a>
                <a href="{{ route('user.cadastro') }}">
                    <button class="btn btn-outline-primary btn-custom"><i class="bi bi-person-plus"></i> Cadastrar-se</button>
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
