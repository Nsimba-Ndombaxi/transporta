<?php 

?>


<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f6f7f8">
    <meta name="description" content="Inicie sessão na plataforma Transporta.">
    <link rel="icon" href="./public/img/transporta-favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="">
    <title>Iniciar sessão | Transporta</title>
</head>

<body>
    <main>
        <section class="formulario">
            <form action="" method="post">
                <div class="info">
                    <img src="./public/img/transporta.png" alt="">
                    <h1>Bem-vindo a <span>transporta</span> </h1>
                </div>
               <div class="input">
                    <label for="numero">E-mail</label>
                    <input type="email" name="email" id="numero" placeholder="exemplo@gmail.com" required>
                </div>
                <div class="input" style="display:none;">
                    <label for="senha">Código de Verificação</label>
                    <input type="number" name="codigo" id="codigo" placeholder="0000" required>
                </div>
                <div class="esqueci-senha">
                    <p></p>
                    <p><a href="./login.php">Entrar na conta</a></p>
                </div>
                <div class="entrar">
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </section>
        <section class="animacao">
            <div class="mapa-cabecalho">
                <div class="mapa-introducao">
                    <h2>Explore a região</h2>
                    <p id="estado-localizacao" role="status" aria-live="polite">
                        Localize-se no mapa para começar.
                    </p>
                </div>
                <button id="localizar-me" type="button">Localizar-me</button>
            </div>
            <div id="mapa" role="region" aria-label="Mapa da sua localização"></div>
        </section>
    </main>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="./public/js/esqueci-senha.js"></script>
</body>

</html>