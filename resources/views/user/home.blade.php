<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">
    <div class="container vh-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-6">
                <div class="card shadow text-center">
                    <div class="card-body">
                        <i class="bi bi-emoji-smile text-success" style="font-size: 4rem;"></i>
                        <h1 class="mt-3 mb-2">Você está logado <span class="fs-2">😁</span></h1>
                        <p class="text-muted">Bem-vindo à sua área restrita!</p>
                        <a href="{{ route('welcome') }}" class="btn btn-outline-primary mt-3">
                            <i class="bi bi-box-arrow-left"></i> Sair
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
