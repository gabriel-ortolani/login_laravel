<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #e3f0ff 0%, #fafcff 100%);
        }
        .card {
            border-radius: 1.5rem;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
        }
        .btn-custom {
            border-radius: 2rem;
            font-size: 1.1rem;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card shadow text-center p-4">
                <div class="card-body">
                    <i class="bi bi-emoji-smile text-success" style="font-size: 4rem;"></i>
                    <h1 class="mt-3 mb-2">Você está logado <span class="fs-2">😁</span></h1>
                    <p class="text-muted">Bem-vindo à sua área restrita!</p>
                    <a href="{{ route('welcome') }}" class="btn btn-outline-primary btn-custom mt-3">
                        <i class="bi bi-box-arrow-left"></i> Sair
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
