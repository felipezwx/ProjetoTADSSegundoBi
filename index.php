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
    <header>
        <div class="topo-header">

            <div class="logo">
                    <a href="index.php" title="Home" alt="Home">
                        <img src="img/logobefitclara.jpeg" title="Logo" alt="Logo">
                    </a>
            </div>

            <div class="busca">
                <input type="text" placeholder="Buscar">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>      
            
            <div class="icones">
                <div class="icon-user">
                    <i class="fa-regular fa-user"></i>
                </div>

                <div class="icon-carrinho">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
            </div>
        </div>

        <nav>
            <ul>
                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Produtos</a>
                </li>
                <li>
                    <a href="#">Novidades</a>
                </li>
                <li>
                    <a href="#">Contato</a>
                </li>
                <li>
                    <a href="#">Quem Somos</a>
                </li>
            </ul>
        </nav>

    </header>

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
        <div class="raquetes-grid">

            <div class="raquetes-blocos">
                <div class="raquetes-imagens">
                    <img src="img/raquetemormaivt.webp" alt="Raquete de Beach Tennis Mormaii Vitoria">
                </div>
                <h3 class="raquete-nome">Raquete de Beach Tennis Mormaii Vitoria Marquezini</h3>

                <div class="raquetes-preco">
                    <strong>R$ 2.499,90</strong>
                </div>

                <button class="botao-comprar">Comprar</button>
            </div>

            <div class="raquetes-blocos">
                <div class="raquetes-imagens">
                    <img src="img/raqueteheroesstarlight.webp" alt="Raquete de Beach Tennis Starlight">
                </div>
                <h3 class="raquete-nome">Raquete de Beach Tennis Heroes Starlight Ruby 2026</h3>

                <div class="raquetes-preco">
                    <strong>R$ 3.499,00</strong>
                </div>

                <button class="botao-comprar">Comprar</button>
            </div>

            <div class="raquetes-blocos">
                <div class="raquetes-imagens">
                    <img src="img/raquetekonagladiator.png" alt="Raquete de Beach Tennis Kona Gladiator">
                </div>
                <h3 class="raquete-nome">Raquete de Beach Tennis Kona Gladiator Steel 2026</h3>

                <div class="raquetes-preco">
                    <strong>R$ 2.499,00</strong>
                </div>

                <button class="botao-comprar">Comprar</button>
            </div>

            <div class="raquetes-blocos">
                <div class="raquetes-imagens">
                    <img src="img/raquetefobelhusky.png" alt="Raquete de Beach Tennis Fobel Husky">
                </div>
                <h3 class="raquete-nome">Raquete de Beach Tennis Fobel Husky 25/26</h3>

                <div class="raquetes-preco">
                    <strong>R$ 2.159,90</strong>
                </div>

                <button class="botao-comprar">Comprar</button>
            </div>
        </div>

    </section>

    <script>

        let slide = 0;

        const totalSlides = document.querySelectorAll('.slide').length;

        function mostrarSlide(){

            const slides = document.getElementById("slides");

            slides.style.transform = `translateX(-${slide * 100}%)`;
        }

        function avancar(){

            slide++;

            if(slide > totalSlides){
                slide = 0;
            }

            mostrarSlide();
        }

        function voltar(){

            slide--;

            if(slide < 0){
                slide = totalSlides - 1;
            }

            mostrarSlide();
        }

        setInterval(avancar, 12000);

    </script>
</body>
</html>