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
                <div class="card shadow">
                    <div class="d-flex align-items-center justify-content-between card-header bg-primary text-white">
                        <div class="flex-grow-1 text-center">
                            <h2 class="mb-0"><i class="bi bi-envelope-check"></i> Verificação de Email</h2>
                        </div>
                        <div>
                            <a href="{{ route('user.login') }}"><i class="bi bi-box-arrow-left" style="color: #dc3545; font-size: 1.7rem;"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.verificar') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Insira seu email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu email" required value="{{ old('email') }}">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
