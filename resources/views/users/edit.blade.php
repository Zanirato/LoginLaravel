<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Redefinir Senha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://wallpaper.forfun.com/fetch/34/343e8efa96951c134cd49c5b124a17fa.jpeg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
        }

        h2 {
            font-size: 35px;
            font-weight: bold;
            text-transform: uppercase;
            color: #fff;
            text-shadow: 
                0 0 5px #fff,
                0 0 10px #00643cff,
                0 0 20px #00ff99,
                0 0 40px #00ff99;
        }

        label {
            font-size: 15px;
            font-weight: bold;
            text-transform: uppercase;
            color: #fff;
            text-shadow: 
                0 0 5px #fff,
                0 0 30px #00643cff,
                0 0 20px #00ff99,
                0 0 40px #00ff99;
        }

        .custom-button {
            background-color: #00ff99;
            text-shadow: 
                0 0 5px #fff,
                0 0 10px #00643cff,
                0 0 20px #00ff99,
                0 0 40px #00ff99;
            border: none;
            padding: 10px 20px;
            font-size: 1.2rem;
            transition: 0.3s;
        }
        .custom-button:hover {
            background-color: #145c16ff;
        }

        .container {
            display: flex;
            flex-direction: column; 
            align-items: center;    
            justify-content: center;
            min-height: 100vh;      
        }
        .btn-success {
            background-color:#025e00ff;
            border: none;
            font-weight: bold;
            transition: 0.3s;
        }
    </style>
</head>
<body class="container py-5">

    <h2>Redefinir Senha</h2>

    <form action="{{ route('users.updatePassword') }}" method="POST" class="w-50">
 @csrf
    @method('PUT')

        <div class="mb-3">
            <label for="email">Seu Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Digite seu email" required>
        </div>

        <div class="mb-3">
            <label for="password">Nova Senha:</label>
            <input type="password" name="password" class="form-control" placeholder="Digite a nova senha" required>
        </div>

        <div class="mb-3">
            <label for="password_confirmation">Confirme a Senha:</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirme a senha" required>
        </div>

        <button type="submit" class="btn btn-success custom-button mt-3">Salvar Nova Senha</button>
    </form>

    <!-- Exibir erros -->
    @if ($errors->any())
        <div class="alert alert-danger mt-3 w-50 mx-auto">
            {{ $errors->first() }}
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success mt-3 w-50 mx-auto">
            {{ session('status') }}
        </div>
    @endif

</body>
</html>
