<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Be fit</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <section class="area-carrossel">

        <div class="carrossel">

            <div class="slides" id="slides">

                <div class="slide">
                    <img src="img/bannerfobel.webp">
                </div>

                <div class="slide">
                    <img src="img/konabanner.webp">
                </div>

            </div>

            <button class="btn anterior" onclick="voltar()">❮</button>
            <button class="btn proximo" onclick="avancar()">❯</button>
        </div>

    </section>

    <section class="raquetes">
        <h3>Raquetes Beach Tennis</h3>

        <div class="raquetes-carrossel">

            <button class="btn-raquete" onclick="voltarRaquete()">❮</button>

            <div class="raquetes-janela">

                <div class="raquetes-grid" id="raquetes-grid">

                    <div class="raquetes-blocos">
                        <div class="raquetes-imagens">
                            <img src="img/raquetemormaivt.webp" alt="Raquete de Beach Tennis Mormaii Vitoria">
                        </div>
                        <h3 class="raquete-nome">Raquete de Beach Tennis Mormaii Vitoria Marquezini</h3>

                        <div class="raquetes-preco">
                        <strong>R$ 2.499,90</strong>
                        </div>

                        <a href="infoprodutos/raquetevitoriamormaii.php">
                            <button class="botao-comprar" >Comprar</button>
                        </a>
                    </div>

                    <div class="raquetes-blocos">
                        <div class="raquetes-imagens">
                            <img src="img/raqueteheroesstarlight.webp" alt="Raquete de Beach Tennis Starlight">
                        </div>
                        <h3 class="raquete-nome">Raquete de Beach Tennis Heroes Starlight Ruby 2026</h3>

                        <div class="raquetes-preco">
                            <strong>R$ 3.499,00</strong>
                        </div>

                        <a href="infoprodutos/raqueteheroesstarlight.php">
                            <button class="botao-comprar">Comprar</button>
                        </a>
                    </div>

                    <div class="raquetes-blocos">
                        <div class="raquetes-imagens">
                            <img src="img/raquetekonagladiator.png" alt="Raquete de Beach Tennis Kona Gladiator">
                        </div>
                        <h3 class="raquete-nome">Raquete de Beach Tennis Kona Gladiator Steel 2026</h3>

                        <div class="raquetes-preco">
                            <strong>R$ 2.499,00</strong>
                        </div>

                        <a href="infoprodutos/raquetekonagladiator.php">
                            <button class="botao-comprar">Comprar</button>
                        </a>
                    </div>

                    <div class="raquetes-blocos">
                        <div class="raquetes-imagens">
                            <img src="img/raquetefobelhusky.png" alt="Raquete de Beach Tennis Fobel Husky">
                        </div>
                        <h3 class="raquete-nome">Raquete de Beach Tennis Fobel Husky 25/26</h3>

                        <div class="raquetes-preco">
                        <strong>R$ 2.159,90</strong>
                        </div>

                        <a href="infoprodutos/raquetefobelhusky.php">
                            <button class="botao-comprar">Comprar</button>
                        </a>
                    </div>

                    <div class="raquetes-blocos">
                        <div class="raquetes-imagens">
                            <img src="img/raquetefobelfox.png" alt="Raquete de Beach Tennis Fobel Fox">
                        </div>
                        <h3 class="raquete-nome">Raquete de Beach Tennis Fobel Fox 2025</h3>

                        <div class="raquetes-preco">
                        <strong>R$ 2.019,90</strong>
                        </div>

                        <a href="infoprodutos/raquetefobelfox.php">
                            <button class="botao-comprar">Comprar</button>
                        </a>
                    </div>

                    <div class="raquetes-blocos">
                        <div class="raquetes-imagens">
                            <img src="img/raquetezandbruxo2026.jpeg" alt="Raquete de Beach Tennis Bruxo Antomi Ramos 2026">
                        </div>
                        <h3 class="raquete-nome">Raquete de Beach Tennis Zand Bruxo 2026</h3>

                        <div class="raquetes-preco">
                        <strong>R$ 2.789,10</strong>
                        </div>

                        <a href="infoprodutos/raquetezandbruxo2026.php">
                            <button class="botao-comprar">Comprar</button>
                        </a>
                    </div>

                    <div class="raquetes-blocos">
                        <div class="raquetes-imagens">
                            <img src="img/raquetefobelmacawonyx.png.png" alt="Raquete de Beach Tennis Fobel Macaw Onyx - Limited Edition">
                        </div>
                        <h3 class="raquete-nome">Raquete de Beach Tennis Fobel Macaw Onyx - Limited Edition</h3>

                        <div class="raquetes-preco">
                        <strong>R$ 3.259,70</strong>
                        </div>

                        <a href="infoprodutos/raquetefobelmacawonyx.php">
                            <button class="botao-comprar">Comprar</button>
                        </a>
                    </div>

                    <div class="raquetes-blocos">
                        <div class="raquetes-imagens">
                            <img src="img/raquetezandzjump.jpeg" alt="Raquete de Beach Tennis Zand Z Jump 2026">
                        </div>
                        <h3 class="raquete-nome">Raquete de Beach Tennis Zand Z Jump 2026</h3>

                        <div class="raquetes-preco">
                        <strong>R$ 2.200,90</strong>
                        </div>

                        <a href="infoprodutos/raquetezandzjump.php">
                            <button class="botao-comprar">Comprar</button>
                        </a>
                    </div>

                    <div class="raquetes-blocos">
                        <div class="raquetes-imagens">
                            <img src="img/raquetevisionprecision.jpeg" alt="Raquete de Beach Tennis Vision Precision 2026">
                        </div>
                        <h3 class="raquete-nome">Raquete de Beach Tennis Vision Precision 2026</h3>

                        <div class="raquetes-preco">
                        <strong>R$ 1.789,90</strong>
                        </div>

                        <a href="infoprodutos/raquetevisionprecision.php">
                            <button class="botao-comprar">Comprar</button>
                        </a>
                    </div>

                    <div class="raquetes-blocos">
                        <div class="raquetes-imagens">
                            <img src="img/raquetedropshotnikita.jpeg" alt="Raquete de Beach Tennis Drop Shot CANYON PRO 3.0 2026 Nikita">
                        </div>
                        <h3 class="raquete-nome">Raquete de Beach Tennis Drop Shot CANYON PRO 3.0 2026 Nikita</h3>

                        <div class="raquetes-preco">
                        <strong>R$ 2.229,30</strong>
                        </div>

                        <a href="infoprodutos/raquetedropshotnikita.php">
                            <button class="botao-comprar">Comprar</button>
                        </a>
                    </div>

                </div>

            </div>

            <button class="btn-raquete" onclick="avancarRaquete()">❯</button>

        </div>

    </section>

    <section class="roupas-masculino">
        <h3>Roupas Masculinas</h3>

        <div class="roupas-masculinas-carrossel">

            <button class="btn-raquete" onclick="voltarMasculino()">❮</button>

            <div class="roupas-masculinas-janela">

                <div class="roupas-masculinas-grid" id="roupas-masculinas-grid">

                    <div class="roupas-masculinas-blocos" id ="roupas-masculinas-blocos">
                        <div class="roupas-masculinas-imagens">
                                <img src="img/camisa-zand-extreme.png" alt="Camiseta Zand Z Extreme">
                            </div>
                            <h3 class="roupa-masculina-nome">Camiseta Zand Z Extreme</h3>

                            <div class="roupa-masculina-preco">
                                <strong>R$ 139,00</strong>
                            </div>

                            <a href="infoprodutos/camisetazandzextreme.php">
                                <button class="botao-comprar">Comprar</button>
                            </a>
                    </div>

                    <div class="roupas-masculinas-blocos" id ="roupas-masculinas-blocos">
                        <div class="roupas-masculinas-imagens">
                                <img src="img/camisetakonapretaedourado.png" alt="Camiseta Kona Preta e Dourado">
                            </div>
                            <h3 class="roupa-masculina-nome">Camiseta Kona Preta e Dourado</h3>

                            <div class="roupa-masculina-preco">
                                <strong>R$ 159,00</strong>
                            </div>

                            <a href="infoprodutos/camiseta-kona-preta-e-dourado.php">
                                <button class="botao-comprar">Comprar</button>
                            </a>
                    </div>

                    <div class="roupas-masculinas-blocos" id ="roupas-masculinas-blocos">
                        <div class="roupas-masculinas-imagens">
                                <img src="img/shortsmasculinodropshotpreto.webp" alt="Short Preto Drop Shot">
                            </div>
                            <h3 class="roupa-masculina-nome">Short Drop Shot Preto Team Pro W25</h3>

                            <div class="roupa-masculina-preco">
                                <strong>R$ 134,90</strong>
                            </div>

                            <a href="infoprodutos/short-preto-drop-shot.php">
                                <button class="botao-comprar">Comprar</button>
                            </a>
                    </div>

                    <div class="roupas-masculinas-blocos" id ="roupas-masculinas-blocos">
                        <div class="roupas-masculinas-imagens">
                                <img src="img/camisetapolonox.png" alt="Camiseta Polo Nox Masculina Esportiva">
                            </div>
                            <h3 class="roupa-masculina-nome">Camiseta Polo Nox Masculina Esportiva</h3>

                            <div class="roupa-masculina-preco">
                                <strong>R$ 339,80</strong>
                            </div>

                            <a href="infoprodutos/camiseta-polo-nox.php">
                                <button class="botao-comprar">Comprar</button>
                            </a>
                    </div>

                    <div class="roupas-masculinas-blocos" id ="roupas-masculinas-blocos">
                        <div class="roupas-masculinas-imagens">
                                <img src="img/camiseta-fobel-preta.png" alt="Camiseta Fobel Preta">
                            </div>
                            <h3 class="roupa-masculina-nome">Camiseta Fobel Preta</h3>

                            <div class="roupa-masculina-preco">
                                <strong>R$ 149,00</strong>
                            </div>

                            <a href="infoprodutos/camiseta-preta-fobel.php">
                                <button class="botao-comprar">Comprar</button>
                            </a>
                    </div>

                    <div class="roupas-masculinas-blocos" id ="roupas-masculinas-blocos">
                        <div class="roupas-masculinas-imagens">
                                <img src="img/camisetazandzjumppreta.png" alt="Camiseta Zand Z Jump Preta">
                            </div>
                            <h3 class="roupa-masculina-nome">Camiseta Zand Z Jump Preta</h3>

                            <div class="roupa-masculina-preco">
                                <strong>R$ 129,00</strong>
                            </div>

                            <a href="infoprodutos/camiseta-zand-z-jump.php">
                                <button class="botao-comprar">Comprar</button>
                            </a>
                    </div>

                    <div class="roupas-masculinas-blocos" id ="roupas-masculinas-blocos">
                        <div class="roupas-masculinas-imagens">
                                <img src="img/camiseta-fobel-gustavorusso.png" alt="Camiseta Fobel Gustavo Russo">
                            </div>
                            <h3 class="roupa-masculina-nome">Camiseta Fobel Gustavo Russo</h3>

                            <div class="roupa-masculina-preco">
                                <strong>R$ 149,90</strong>
                            </div>

                            <a href="infoprodutos/camiseta-fobel-gustavo-russo.php">
                                <button class="botao-comprar">Comprar</button>
                            </a>
                    </div>

                    <div class="roupas-masculinas-blocos" id ="roupas-masculinas-blocos">
                        <div class="roupas-masculinas-imagens">
                                <img src="img/camisetazeiqpreta.webp" alt="Camiseta Zeiq Preta">
                            </div>
                            <h3 class="roupa-masculina-nome">Camiseta Zeiq Preta</h3>

                            <div class="roupa-masculina-preco">
                                <strong>R$ 139,00</strong>
                            </div>

                            <a href="infoprodutos/camiseta-zeiq-preta.php">
                                <button class="botao-comprar">Comprar</button>
                            </a>
                    </div>

                    <div class="roupas-masculinas-blocos" id ="roupas-masculinas-blocos">
                        <div class="roupas-masculinas-imagens">
                                <img src="img/shortskonapretobasic.png" alt="Short Kona Basic Preto">
                            </div>
                            <h3 class="roupa-masculina-nome">Short Kona Basic Preto</h3>

                            <div class="roupa-masculina-preco">
                                <strong>R$ 149,90</strong>
                            </div>

                            <a href="infoprodutos/short-kona-basic.php">
                                <button class="botao-comprar">Comprar</button>
                            </a>
                    </div>

                    <div class="roupas-masculinas-blocos" id ="roupas-masculinas-blocos">
                        <div class="roupas-masculinas-imagens">
                                <img src="img/camisetamormaiivinifont.jpeg" alt="Camiseta Mormaii Vini Font 2025">
                            </div>
                            <h3 class="roupa-masculina-nome">Camiseta Mormaii Vini Font 2025</h3>

                            <div class="roupa-masculina-preco">
                                <strong>R$ 255,00</strong>
                            </div>

                            <a href="infoprodutos/camiseta-mormaii-vini-font.php">
                                <button class="botao-comprar">Comprar</button>
                            </a>
                    </div>

                </div>

            </div>

            <button class="btn-raquete" onclick="avancarMasculino()">❯</button>
        </div>
    </section>

    <section class="roupas-femininas">
        <h3>Roupas Femininas</h3>

        <div class="roupas-femininas-carrossel">

            <button class="btn-raquete" onclick="voltarFeminino()">❮</button>

            <div class="roupas-femininas-janela">

                <div class="roupas-femininas-grid" id="roupas-femininas-grid">

                    <div class="roupas-femininas-blocos" id ="roupas-femininas-blocos">
                        <div class="roupas-femininas-imagens">
                                <img src="img/vestido-mormaii-vitoriamarchezini.png" alt="Vestido Mormarii Vitoria Marchezini">
                            </div>
                            <h3 class="roupas-femininas-nome">Vestido Macaquinho Mormaii Beach Tennis Vitória Marchezini</h3>

                            <div class="roupas-femininas-preco">
                                <strong>R$ 359,00</strong>
                            </div>

                            <a href="infoprodutos/vestido-mormaii-vitoria-marchezini.php">
                                <button class="botao-comprar">Comprar</button>
                            </a>
                    </div>

                    <div class="roupas-femininas-blocos" id ="roupas-femininas-blocos">
                        <div class="roupas-femininas-imagens">
                                <img src="img/vestido-mormaii-vitoriamarchezini.png" alt="Vestido Macaquinho Mormarii Vitoria Marchezini">
                            </div>
                            <h3 class="roupas-femininas-nome">Vestido Macaquinho Mormaii Vitória Marchezini</h3>

                            <div class="roupas-femininas-preco">
                                <strong>R$ 239,00</strong>
                            </div>

                            <button class="botao-comprar">Comprar</button>
                    </div>

                    <div class="roupas-femininas-blocos" id ="roupas-femininas-blocos">
                        <div class="roupas-femininas-imagens">
                                <img src="img/saiakonabasic.png" alt="Saia Feminina Kona Basic">
                            </div>
                            <h3 class="roupas-femininas-nome">Saia Feminina Kona Basic</h3>

                            <div class="roupas-femininas-preco">
                                <strong>R$ 149,00</strong>
                            </div>

                            <a href="infoprodutos/saia-kona-basic.php">
                                <button class="botao-comprar">Comprar</button>
                            </a>
                    </div>

                    <div class="roupas-femininas-blocos" id ="roupas-femininas-blocos">
                        <div class="roupas-femininas-imagens">
                                <img src="img/vestido-mormaii-vitoriamarchezini.png" alt="Vestido Mormarii Vitoria Marchezini">
                            </div>
                            <h3 class="roupas-femininas-nome">Vestido Macaquinho Mormaii Beach Tennis Vitória Marchezini</h3>

                            <div class="roupas-femininas-preco">
                                <strong>R$ 359,00</strong>
                            </div>

                            <button class="botao-comprar">Comprar</button>
                    </div>

                    <div class="roupas-femininas-blocos" id ="roupas-femininas-blocos">
                        <div class="roupas-femininas-imagens">
                                <img src="img/vestido-mormaii-vitoriamarchezini.png" alt="Vestido Mormarii Vitoria Marchezini">
                            </div>
                            <h3 class="roupas-femininas-nome">Vestido Macaquinho Mormaii Beach Tennis Vitória Marchezini</h3>

                            <div class="roupas-femininas-preco">
                                <strong>R$ 359,00</strong>
                            </div>

                            <button class="botao-comprar">Comprar</button>
                    </div>

                    <div class="roupas-femininas-blocos" id ="roupas-femininas-blocos">
                        <div class="roupas-femininas-imagens">
                                <img src="img/vestido-mormaii-vitoriamarchezini.png" alt="Vestido Mormarii Vitoria Marchezini">
                            </div>
                            <h3 class="roupas-femininas-nome">Vestido Macaquinho Mormaii Beach Tennis Vitória Marchezini</h3>

                            <div class="roupas-femininas-preco">
                                <strong>R$ 359,00</strong>
                            </div>

                            <button class="botao-comprar">Comprar</button>
                    </div>

                    <div class="roupas-femininas-blocos" id ="roupas-femininas-blocos">
                        <div class="roupas-femininas-imagens">
                                <img src="img/vestido-mormaii-vitoriamarchezini.png" alt="Vestido Mormarii Vitoria Marchezini">
                            </div>
                            <h3 class="roupas-femininas-nome">Vestido Macaquinho Mormaii Beach Tennis Vitória Marchezini</h3>

                            <div class="roupas-femininas-preco">
                                <strong>R$ 359,00</strong>
                            </div>

                            <button class="botao-comprar">Comprar</button>
                    </div>

                    <div class="roupas-femininas-blocos" id ="roupas-femininas-blocos">
                        <div class="roupas-femininas-imagens">
                                <img src="img/vestido-mormaii-vitoriamarchezini.png" alt="Vestido Mormarii Vitoria Marchezini">
                            </div>
                            <h3 class="roupas-femininas-nome">Vestido Macaquinho Mormaii Beach Tennis Vitória Marchezini</h3>

                            <div class="roupas-femininas-preco">
                                <strong>R$ 359,00</strong>
                            </div>

                            <button class="botao-comprar">Comprar</button>
                    </div>

                    <div class="roupas-femininas-blocos" id ="roupas-femininas-blocos">
                        <div class="roupas-femininas-imagens">
                                <img src="img/vestido-mormaii-vitoriamarchezini.png" alt="Vestido Mormarii Vitoria Marchezini">
                            </div>
                            <h3 class="roupas-femininas-nome">Vestido Macaquinho Mormaii Beach Tennis Vitória Marchezini</h3>

                            <div class="roupas-femininas-preco">
                                <strong>R$ 359,00</strong>
                            </div>

                            <button class="botao-comprar">Comprar</button>
                    </div>

                    <div class="roupas-femininas-blocos" id ="roupas-femininas-blocos">
                        <div class="roupas-femininas-imagens">
                                <img src="img/vestido-mormaii-vitoriamarchezini.png" alt="Vestido Mormarii Vitoria Marchezini">
                            </div>
                            <h3 class="roupas-femininas-nome">Vestido Macaquinho Mormaii Beach Tennis Vitória Marchezini</h3>

                            <div class="roupas-femininas-preco">
                                <strong>R$ 359,00</strong>
                            </div>

                            <button class="botao-comprar">Comprar</button>
                    </div>
                </div>

            </div>

            <button class="btn-raquete" onclick="avancarFeminino()">❯</button>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="carrossel.js"></script>
</body>
</html>