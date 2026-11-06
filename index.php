<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#fffaf8">
    <meta name="description" content="Reboque, aluguer de autocarro e transporte de materiais. Encontre o serviço de transporte certo para si na Transporta.">
    <link rel="icon" href="./public/img/transporta-favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./public/css/index.css">
    <title>Transporta — o transporte certo para cada necessidade</title>
</head>

<body>
    <a class="atalho-conteudo" href="#conteudo">Saltar para o conteúdo</a>
    <header class="cabecalho">
        <nav class="navegacao" aria-label="Navegação principal">
            <a class="marca" href="./index.php" aria-label="Transporta — página inicial">
                <img src="./public/img/transporta-2.png" alt="">
                <span>transporta<span class="marca-ponto">.</span></span>
            </a>

            <div class="navegacao-acoes">
                <a class="link-entrar" href="./login.php">Login</a>
                <a class="botao botao-pequeno" href="./cadastrar-se.php">Criar conta <span aria-hidden="true">↗</span></a>
            </div>
        </nav>
    </header>

    <main id="conteudo">
        <section class="destaque" aria-labelledby="titulo-principal">
            <div class="destaque-conteudo">
                <p class="etiqueta"><span class="etiqueta-ponto" aria-hidden="true"></span> A caminho do que precisa</p>
                <h1 id="titulo-principal">O transporte certo, <span>sem complicações.</span></h1>
                <p class="destaque-descricao">
                    Do reboque a uma viagem de grupo, encontre uma solução de transporte adequada ao seu pedido.
                </p>
                <div class="destaque-acoes">
                    <a class="botao" href="./cadastrar-se.php">Começar agora <span aria-hidden="true">↗</span></a>
                    <a class="link-servicos" href="#servicos">Conhecer os serviços <span aria-hidden="true">↓</span></a>
                </div>
                <p class="nota-destaque">Crie a sua conta e escolha o serviço de que precisa.</p>
            </div>

            <div class="fundo-percurso" aria-hidden="true">
                <svg class="fundo-animado" viewBox="0 0 1440 760" preserveAspectRatio="xMidYMid slice">
                    <defs>
                        <linearGradient id="percurso-suave" x1="0" y1="0" x2="1" y2="1">
                            <stop offset="0" stop-color="#f8eeea" />
                            <stop offset="1" stop-color="#f1f5f0" />
                        </linearGradient>
                        <pattern id="grelha-mapa" width="44" height="44" patternUnits="userSpaceOnUse">
                            <path d="M44 0H0V44" fill="none" stroke="#e9e9e3" stroke-width="1" />
                        </pattern>
                    </defs>

                    <rect width="1440" height="760" fill="url(#grelha-mapa)" opacity=".34" />
                    <path class="rua-secundaria" d="M650 770C735 660 845 685 922 620s142-86 255-40 176 8 318-75" />
                    <path class="rua-secundaria" d="M938 770c48-101 146-132 180-225s7-166 105-249 158-61 217-103" />
                    <path class="estrada-borda" d="M710 680c70-105 29-165 132-225s189-40 292 18 183 45 240-55 33-170 132-222" />
                    <path class="estrada-base" d="M710 680c70-105 29-165 132-225s189-40 292 18 183 45 240-55 33-170 132-222" />
                    <path class="estrada-centro" d="M710 680c70-105 29-165 132-225s189-40 292 18 183 45 240-55 33-170 132-222" />
                    <path id="rota-reboque" class="rota-veiculo" d="M710 680c70-105 29-165 132-225s189-40 292 18 183 45 240-55 33-170 132-222" />
                    <path id="rota-autocarro" class="rota-veiculo" d="M650 670C735 570 845 600 922 540s142-78 255-35 176 8 318-68" />
                    <path id="rota-materiais" class="rota-veiculo" d="M938 680c48-90 146-120 180-205s7-150 105-225 158-55 217-92" />
                    <circle class="marco-mapa" cx="944" cy="473" r="10" />
                    <circle class="marco-mapa marco-mapa--destino" cx="1372" cy="495" r="10" />

                    <g class="veiculo-mapa veiculo-mapa--reboque">
                        <animateMotion dur="22s" begin="-9s" repeatCount="indefinite" rotate="auto">
                            <mpath href="#rota-reboque" />
                        </animateMotion>
                        <path d="M-25-10h27l9 8v15h-7a7 7 0 0 0-14 0h-5a7 7 0 0 0-14 0h-4V-5a5 5 0 0 1 5-5Z" fill="#d72e3f" />
                        <path d="M4-7h-8v7h15L4-7Z" fill="#fffaf8" opacity=".9" />
                        <circle cx="-12" cy="13" r="4" fill="#26353d" />
                        <circle cx="4" cy="13" r="4" fill="#26353d" />
                    </g>
                    <g class="veiculo-mapa veiculo-mapa--autocarro">
                        <animateMotion dur="30s" begin="-17s" repeatCount="indefinite" rotate="auto">
                            <mpath href="#rota-autocarro" />
                        </animateMotion>
                        <rect x="-35" y="-12" width="70" height="25" rx="6" fill="#557c64" />
                        <path d="M-27-8h12v8h-12zm16 0h12v8h-12zm16 0h12v8H5z" fill="#fffaf8" opacity=".9" />
                        <path d="M-28 7h6m43 0h6" stroke="#fffaf8" stroke-width="2" stroke-linecap="round" />
                        <circle cx="-22" cy="13" r="4" fill="#26353d" />
                        <circle cx="23" cy="13" r="4" fill="#26353d" />
                    </g>
                    <g class="veiculo-mapa veiculo-mapa--materiais">
                        <animateMotion dur="26s" begin="-12s" repeatCount="indefinite" rotate="auto">
                            <mpath href="#rota-materiais" />
                        </animateMotion>
                        <path d="M-28-12h34a5 5 0 0 1 5 5v7h13a5 5 0 0 1 5 5v8H20a7 7 0 0 0-14 0h-16a7 7 0 0 0-14 0h-5V-7a5 5 0 0 1 5-5Z" fill="#b88747" />
                        <path d="M12-7h-8v9h17l-3-7a3 3 0 0 0-3-2h-3Z" fill="#fffaf8" opacity=".9" />
                        <circle cx="-17" cy="13" r="4" fill="#26353d" />
                        <circle cx="13" cy="13" r="4" fill="#26353d" />
                    </g>
                </svg>
            </div>
        </section>

        <section class="servicos secao" id="servicos" aria-labelledby="titulo-servicos">
            <div class="cabecalho-secao">
                <div>
                    <p class="sobretitulo">Encontre a sua solução</p>
                    <h2 id="titulo-servicos">Um serviço para cada caminho.</h2>
                </div>
                <p class="descricao-secao">Escolha o que precisa. Nós ajudamos a encontrar o transporte adequado.</p>
            </div>

            <div class="grelha-servicos">
                <article class="cartao-servico">
                    <div class="icone-servico icone-reboque" aria-hidden="true">
                        <svg viewBox="0 0 48 48" fill="none">
                            <path d="M7 29h5l4-9h15l6 9h4a3 3 0 0 1 3 3v4H7v-7Z" stroke="currentColor" stroke-width="2.4" stroke-linejoin="round" />
                            <path d="M16 20h15m-9 0v9m-8 7a4 4 0 1 0 8 0m8 0a4 4 0 1 0 8 0" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" />
                            <path d="M7 25h5m21 0h4" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" />
                        </svg>
                    </div>
                    <span class="numero-servico">01</span>
                    <h3>Reboque</h3>
                    <p>O seu veículo avariou? Peça o transporte adequado e partilhe a localização e os detalhes do veículo.</p>
                    <a href="./login.php" class="link-cartao">Pedir um reboque <span aria-hidden="true">↗</span></a>
                </article>

                <article class="cartao-servico">
                    <div class="icone-servico icone-autocarro" aria-hidden="true">
                        <svg viewBox="0 0 48 48" fill="none">
                            <path d="M11 8h26a4 4 0 0 1 4 4v25H7V12a4 4 0 0 1 4-4Z" stroke="currentColor" stroke-width="2.4" stroke-linejoin="round" />
                            <path d="M11 13h26v12H11zM12 32h3m18 0h3m-21 5v3m22-3v3M7 28h34" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17 17h5m5 0h5" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" />
                        </svg>
                    </div>
                    <span class="numero-servico">02</span>
                    <h3>Aluguer de autocarro</h3>
                    <p>Organize excursões, viagens escolares e eventos com espaço para o seu grupo e o seu itinerário.</p>
                    <a href="./login.php" class="link-cartao">Planear uma viagem <span aria-hidden="true">↗</span></a>
                </article>

                <article class="cartao-servico">
                    <div class="icone-servico icone-materiais" aria-hidden="true">
                        <svg viewBox="0 0 48 48" fill="none">
                            <path d="M7 17 24 8l17 9v20H7V17Z" stroke="currentColor" stroke-width="2.4" stroke-linejoin="round" />
                            <path d="M7 17h34M24 8v29m-8-20v6m16-6v6M13 29h6v8h-6zm16-4h7v12h-7z" stroke="currentColor" stroke-width="2.4" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="numero-servico">03</span>
                    <h3>Transporte de materiais</h3>
                    <p>Leve compras, mobiliário ou materiais de construção. Descreva a carga para encontrar uma viatura adequada.</p>
                    <a href="./login.php" class="link-cartao">Transportar materiais <span aria-hidden="true">↗</span></a>
                </article>
            </div>
        </section>

        <section class="como-funciona" aria-labelledby="titulo-como-funciona">
            <div class="como-funciona-intro">
                <p class="sobretitulo">Simples desde o início</p>
                <h2 id="titulo-como-funciona">Do pedido ao destino, passo a passo.</h2>
                <p>Partilhe os detalhes do seu transporte e acompanhe o estado do pedido na plataforma.</p>
                <a class="link-como-funciona" href="./cadastrar-se.php">Criar a minha conta <span aria-hidden="true">↗</span></a>
            </div>
            <ol class="passos">
                <li>
                    <span class="passo-numero">01</span>
                    <div><h3>Escolha o serviço</h3><p>Selecione reboque, autocarro ou transporte de materiais.</p></div>
                </li>
                <li>
                    <span class="passo-numero">02</span>
                    <div><h3>Conte-nos os detalhes</h3><p>Indique o percurso, a data e as informações importantes para o seu pedido.</p></div>
                </li>
                <li>
                    <span class="passo-numero">03</span>
                    <div><h3>Acompanhe o pedido</h3><p>O serviço fica confirmado quando um motorista elegível o aceitar. A localização depende da disponibilidade.</p></div>
                </li>
            </ol>
        </section>

        <section class="chamada-final" aria-labelledby="titulo-chamada">
            <div>
                <p class="sobretitulo">O próximo passo é seu</p>
                <h2 id="titulo-chamada">Pronto para seguir caminho?</h2>
                <p>Crie a sua conta e escolha o transporte de que precisa.</p>
            </div>
            <a class="botao botao-claro" href="./cadastrar-se.php">Começar agora <span aria-hidden="true">↗</span></a>
        </section>
    </main>

    <footer class="rodape">
        <a class="marca marca-rodape" href="./index.php" aria-label="Transporta — página inicial">
            <img src="./public/img/transporta-2.png" alt="">
            <span>transporta<span class="marca-ponto">.</span></span>
        </a>
        <p>Encontramos o caminho certo para si.</p>
        <div class="rodape-links"><a href="./login.php">Login</a><a href="./cadastrar-se.php">Criar conta</a></div>
    </footer>
    <script src="./public/js/index.js"></script>
</body>

</html>
