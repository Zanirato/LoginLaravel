<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Logada - Sgt. Pepper's Theme</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
            background-attachment: fixed;
            font-family: 'Arial', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow-x: hidden;
            padding: 20px;
            color: white;
        }
        
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 30%, rgba(255, 215, 0, 0.2) 0%, transparent 20%),
                radial-gradient(circle at 80% 70%, rgba(255, 105, 180, 0.2) 0%, transparent 20%),
                radial-gradient(circle at 40% 80%, rgba(135, 206, 235, 极客时间) 0%, transparent 20%);
            z-index: -1;
        }
        
        .beatles-container {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.3);
            max-width: 800px;
            width: 90%;
            text-align: center;
            position: relative;
            overflow: hidden;
            margin-bottom: 2rem;
        }
        
        h1 {
            font-size: 2.8rem;
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
        
        .user-welcome {
            color: var(--pepper-gold);
            font-size: 1.5rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }
        
        .tiana-image {
            max-width: 250px;
            border-radius: 50%;
            border: 5px solid var(--pepper-gold);
            box-shadow: 0 0 0 5px var(--pepper-green), 0 0 20px rgba(0, 0, 0, 0.5);
            margin: 1.5rem auto;
        }
        
        .content-text {
            color: white;
            font-size: 1.1rem;
            line-height: 1.6;
            text-align: justify;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
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
            width: 100px;
            height: 100px;
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
            font-size: 3rem;
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
        
        @media (max-width: 768px) {
            h1 { font-size: 2.2rem; }
            .beatles-container { 
                padding: 1.5rem;
                max-width: 95%;
            }
            .btn-beatles { 
                padding: 10px 20px; 
                font-size: 1rem;
            }
            .tiana-image {
                max-width: 200px;
            }
            .user-welcome {
                font-size: 1.3rem;
            }
        }
        
        @media (max-width: 576px) {
            h1 { font-size: 1.8rem; }
            .user-welcome { font-size: 1.1rem; }
            .content-text { font-size: 1rem; text-align: left; }
            .tiana-image {
                max-width: 180px;
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
        <h1>Área Logada</h1>
        <div class="user-welcome">Parabéns! Você está logado, {{ auth()->user()->name }}!</div>
        
        <img src="https://upload.wikimedia.org/wikipedia/pt/6/68/Sgt_Peppers.jpg" alt="Sgt Peppers" class="beatles-image mb-4">
        
        <div class="content-text">
            🎶 Sgt. Pepper’s Lonely Hearts Club Band foi lançado em 26 de maio de 1967 e é considerado um dos álbuns mais inovadores e influentes da história da música.

        <p>Na época, os Beatles estavam cansados da rotina de shows e da pressão de sempre se apresentarem como “os Beatles”. A ideia foi criar uma banda fictícia – a Sgt. Pepper’s Lonely Hearts Club Band – que lhes permitiria experimentar novos sons e estilos sem a obrigação de manter a imagem tradicional do grupo.</p>

        <p>O álbum trouxe inovações como: </p>

        <p>Uso criativo do estúdio (muitas camadas de instrumentos, efeitos sonoros e técnicas de gravação inéditas). </p>

        <p>Mistura de gêneros musicais (rock, música indiana, psicodelia, música clássica).</p>

        <p> famosa capa icônica com dezenas de figuras históricas e culturais. </p>

        <p>Canções marcantes como Lucy in the Sky with Diamonds, With a Little Help from My Friends e A Day in the Life.</p>

        <p>💡 O disco foi aclamado pela crítica, ganhou o Grammy de Álbum do Ano em 1968 e marcou a cultura da contracultura dos anos 1960. Até hoje, é visto como um divisor de águas, mostrando que um álbum podia ser mais do que apenas uma coleção de músicas: podia ser uma obra conceitual completa. </p>
        </div>
        
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn-beatles">
                <i class="bi bi-box-arrow-right me-2"></i>Sair
            </button>
        </form>
    </div>

    <script>
        const logoutForm = document.querySelector('form');
        if (logoutForm) {
            logoutForm.addEventListener('submit', function() {
                const button = logoutForm.querySelector('button');
                button.disabled = true;
                button.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Saindo...';
            });
        }
    </script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>