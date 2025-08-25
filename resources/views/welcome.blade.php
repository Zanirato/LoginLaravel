<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sgt. Pepper's Theme - Beatles</title>
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
            padding: 2.5rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            max-width: 500px;
            width: 90%;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        h1 {
            font-size: 3.5rem;
            font-weight: bold;
            text-transform: uppercase;
            color: var(--pepper-gold);
            text-shadow: 
                3px 3px 0 var(--pepper-red),
                -3px -3px 0 var(--pepper-blue);
            margin-bottom: 1.5rem;
            letter-spacing: 2px;
            font-family: 'Impact', 'Arial Black', sans-serif;
        }
        
        .subtitle {
            color: white;
            font-size: 1.2rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }
        
        .btn-beatles {
            background: linear-gradient(45deg, var(--pepper-red), var(--pepper-purple));
            color: white;
            border: none;
            padding: 12px 30px;
            font-size: 1.2rem;
            font-weight: bold;
            border-radius: 50px;
            margin: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 1;
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
            width: 120px;
            height: 120px;
            background: var(--pepper-red);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            border: 5px solid var(--pepper-gold);
            box-shadow: 0 0 0 5px var(--pepper-green), 0 0 15px rgba(0, 0, 0, 0.3);
            position: relative;
            overflow: hidden;
        }
        
        .logo::before {
            content: "SGT";
            font-size: 4rem;
            font-weight: bold;
            color: var(--pepper-gold);
            font-family: 'Times New Roman', serif;
        }
        
        .decoration {
            position: absolute;
            font-size: 3rem;
            opacity: 0.2;
            color: var(--pepper-gold);
            z-index: -1;
        }
        
        .decoration:nth-child(1) { top: 10%; left: 10%; }
        .decoration:nth-child(2) { top: 20%; right: 15%; }
        .decoration:nth-child(3) { bottom: 15%; left: 15%; }
        .decoration:nth-child(4) { bottom: 25%; right: 10%; }
        
        @media (max-width: 576px) {
            h1 { font-size: 2.5rem; }
            .beatles-container { padding: 1.5rem; }
            .btn-beatles { padding: 10px 20px; font-size: 1rem; }
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
        <h1>Conheça os Sgt. Pepper's</h1>
        <p class="subtitle">Entre para o nosso Lonely Hearts Club</p>
        
        <div class="d-flex flex-column flex-md-row justify-content-center">
            <a href="{{ route('user.create') }}" class="btn btn-beatles">
                <i class="bi bi-person-plus-fill me-2"></i>Cadastrar
            </a>
            <a href="{{ route('user.login') }}" class="btn btn-beatles">
                <i class="bi bi-box-arrow-in-right me-2"></i>Entrar
            </a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>