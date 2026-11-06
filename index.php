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

            <div class="ilustracao" aria-hidden="true">
                <div class="ilustracao-fundo"></div>
                <div class="cartao-percurso">
                    <div class="cartao-cabecalho">
                        <span class="cartao-sinal"><span></span> O seu próximo percurso</span>
                        <span class="cartao-mais">•••</span>
                    </div>
                    <div class="percurso">
                        <div class="percurso-pontos">
                            <span class="ponto-origem"></span>
                            <span class="percurso-linha"></span>
                            <span class="ponto-destino"></span>
                        </div>
                        <div class="percurso-locais">
                            <div><span>ORIGEM</span><strong>Onde começa</strong></div>
                            <div><span>DESTINO</span><strong>Onde precisa de chegar</strong></div>
                        </div>
                    </div>
                    <div class="ilustracao-estrada">
                        <svg viewBox="0 0 360 128" role="presentation">
                            <path class="estrada-sombra" d="M-25 111C39 111 46 37 124 48s92 74 157 45 45-51 108-52" />
                            <path class="estrada-traco" d="M-25 111C39 111 46 37 124 48s92 74 157 45 45-51 108-52" />
                        </svg>
                        <span class="pin pin-inicio"><span></span></span>
                        <span class="pin pin-fim"><span></span></span>
                        <div class="veiculo">
                            <svg viewBox="0 0 64 42" role="presentation">
                                <path d="M8 11a5 5 0 0 1 5-5h26a5 5 0 0 1 4.7 3.3L48 20h5a5 5 0 0 1 5 5v8a3 3 0 0 1-3 3h-3a8 8 0 0 0-16 0H27a8 8 0 0 0-16 0H8a4 4 0 0 1-4-4V15a4 4 0 0 1 4-4Z" fill="currentColor" />
                                <path d="m43 13 3 8H34v-9h7a2 2 0 0 1 2 1Z" fill="#fffaf8" opacity=".8" />
                                <circle cx="19" cy="36" r="5" fill="#24323a" />
                                <circle cx="44" cy="36" r="5" fill="#24323a" />
                            </svg>
                        </div>
                        <span class="brilho brilho-um"></span>
                        <span class="brilho brilho-dois"></span>
                    </div>
                    <div class="cartao-rodape">
                        <span class="rodape-icone">✳</span>
                        <span>O seu pedido, ao seu ritmo.</span>
                        <span class="rodape-seta">↗</span>
                    </div>
                </div>
                <div class="selo-ilustracao"><span>3</span><span>formas de<br>seguir caminho</span></div>
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
        <div class="rodape-links"><a href="./login.php">Entrar</a><a href="./cadastrar-se.php">Criar conta</a></div>
    </footer>
    <script src="./public/js/index.js"></script>
</body>

</html>
