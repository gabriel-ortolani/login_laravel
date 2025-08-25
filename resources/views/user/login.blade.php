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
        .form-control {
            border-radius: 1rem;
        }
        .btn-custom {
            border-radius: 2rem;
            font-size: 1.1rem;
        }
        .card-header {
            border-radius: 1.5rem 1.5rem 0 0 !important;
        }
        .badge.bg-secondary {
            border-radius: 1rem;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white d-flex align-items-center justify-content-between">
                    <div class="flex-grow-1 text-center">
                        <h2 class="mb-0"><i class="bi bi-box-arrow-in-right"></i> Login de Usuário</h2>
                    </div>
                    <div>
                        <a href="{{ route('welcome') }}"><i class="bi bi-box-arrow-left" style="color: #fff; font-size: 1.7rem;"></i></a>
                    </div>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('user.logar') }}" method="POST">
                        @csrf
                        <div class="mb-3 input-group">
                            <span class="input-group-text bg-light"><i class="bi bi-envelope"></i></span>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu email" required>
                        </div>
                        <div class="mb-3 input-group">
                            <span class="input-group-text bg-light"><i class="bi bi-lock"></i></span>
                            <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua senha" required>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-custom"><i class="bi bi-box-arrow-in-right"></i> Login</button>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <a href="{{ route('user.verificacao')}}" class="text-decoration-none">
                            <span class="badge bg-secondary p-2" style="font-size: 1rem;">
                                <i class="bi bi-key"></i> Esqueci minha senha
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
