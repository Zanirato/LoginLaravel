<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar - Sgt. Pepper's Theme</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        :root {
            --pepper-red: #C41E3A;
            --pepper-gold: #FFD700;
            --pepper-green: #006B3C;
            --pepper-blue: #87CEEB;
            --pepper-purple: #8A2BE2;
            --pepper-pink: #FF69B4;
        }
        
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.703), rgba(0, 0, 0, 0.703)), 
                        url("https://i.pinimg.com/1200x/7a/00/d3/7a00d39060e871a8e9dc2158de0d4b41.jpg"); 
            background-position: center; 
            background-size: cover; 
            font-family: 'Arial', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }
        
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 30%, rgba(255, 215, 0, 0.2) 0%, transparent 20%),
                radial-gradient(circle at 80% 70%, rgba(255, 105, 180, 0.2) 0%, transparent 20%),
                radial-gradient(circle at 40% 80%, rgba(135, 206, 235, 0.2) 0%, transparent 20%);
            z-index: -1;
        }
        
        .beatles-container {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            max-width: 450px;
            width: 85%;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        h2 {
            font-size: 2.5rem;
            font-weight: bold;
            text-transform: uppercase;
            color: var(--pepper-gold);
            text-shadow: 
                3px 3px 0 var(--pepper-red),
                -3px -3px 0 var(--pepper-blue);
            margin-bottom: 1.2rem;
            letter-spacing: 2px;
            font-family: 'Impact', 'Arial Black', sans-serif;
        }
        
        .form-label {
            color: var(--pepper-gold);
            font-weight: bold;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
            font-size: 1rem;
            margin-bottom: 0.5rem;
            display: block;
            text-align: left;
        }
        
        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            color: white;
            padding: 10px 12px;
            margin-bottom: 1.2rem;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }
        
        .form-control:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: var(--pepper-gold);
            box-shadow: 0 0 0 0.25rem rgba(255, 215, 0, 0.25);
            color: white;
        }
        
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
        }
        
        .btn-beatles {
            background: linear-gradient(45deg, var(--pepper-red), var(--pepper-purple));
            color: white;
            border: none;
            padding: 10px 25px;
            font-size: 1.1rem;
            font-weight: bold;
            border-radius: 50px;
            margin: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
            width: 180px;
        }
        
        .btn-beatles::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, var(--pepper-blue), var(--pepper-pink));
            transition: all 0.4s ease;
            z-index: -1;
        }
        
        .btn-beatles:hover::before {
            left: 0;
        }
        
        .btn-beatles:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }
        
        .logo {
            width: 90px;
            height: 90px;
            background: var(--pepper-red);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.2rem;
            border: 4px solid var(--pepper-gold);
            box-shadow: 0 0 0 4px var(--pepper-green), 0 0 12px rgba(0, 0, 0, 0.3);
            position: relative;
            overflow: hidden;
        }
        
        .logo::before {
            content: "SGT";
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--pepper-gold);
            font-family: 'Times New Roman', serif;
        }
        
        .decoration {
            position: absolute;
            font-size: 2.5rem;
            opacity: 0.2;
            color: var(--pepper-gold);
            z-index: -1;
        }
        
        .decoration:nth-child(1) { top: 10%; left: 10%; }
        .decoration:nth-child(2) { top: 20%; right: 15%; }
        .decoration:nth-child(3) { bottom: 15%; left: 15%; }
        .decoration:nth-child(4) { bottom: 25%; right: 10%; }
        
        .alert-success, .alert-danger {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            color: white;
            border: none;
            border-radius: 8px;
            margin-bottom: 15px;
            text-align: left;
            padding: 12px;
            font-size: 0.9rem;
        }
        
        .alert-success {
            border-left: 4px solid var(--pepper-green);
        }
        
        .alert-danger {
            border-left: 4px solid var(--pepper-red);
        }
        
        .alert-danger ul {
            margin-bottom: 0;
            padding-left: 15px;
            font-size: 0.9rem;
        }
        
        .btn-container {
            display: flex;
            justify-content: center;
            margin-top: 15px;
        }
        
        @media (max-width: 576px) {
            h2 { font-size: 2rem; }
            .beatles-container { 
                padding: 1.5rem;
                max-width: 90%;
            }
            .btn-beatles { 
                padding: 8px 20px; 
                font-size: 1rem;
                width: 100%;
                margin: 5px 0;
            }
            .btn-container {
                flex-direction: column;
            }
            .logo {
                width: 80px;
                height: 80px;
            }
            .logo::before {
                font-size: 2.2rem;
            }
        }
    </style>
</head>
<body>
    <div class="decoration"><i class="bi bi-music-note-beamed"></i></div>
    <div class="decoration"><i class="bi bi-vinyl-fill"></i></div>
    <div class="decoration"><i class="bi bi-star-fill"></i></div>
    <div class="decoration"><i class="bi bi-heart-fill"></i></div>
    
    <div class="beatles-container">
        <div class="logo"></div>
        <h2>Cadastrar</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nome:</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Digite seu nome" required>
            </div>
            <div class="mb-3">
                <label class="form-label">E-mail:</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Digite seu email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Senha:</label>
                <input type="password" name="password" class="form-control" placeholder="Digite sua senha" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Confirme a Senha:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirme sua senha" required>
            </div>
            <div class="btn-container">
                <button type="submit" class="btn-beatles">
                    <i class="bi bi-person-plus-fill me-2"></i>Cadastrar
                </button>
                <a href="{{ route('user.login') }}" class="btn-beatles">
                    <i class="bi bi-box-arrow-in-right me-2"></i>Login
                </a>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>