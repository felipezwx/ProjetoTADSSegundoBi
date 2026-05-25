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

    <?php include 'footer.php'; ?>

    <script>

        let slide = 0;

        const totalSlides = document.querySelectorAll('.slide').length;

        function mostrarSlide(){

            const slides = document.getElementById("slides");

            slides.style.transform = `translateX(-${slide * 100}vw)`;
        }

        function avancar(){

            slide++;

            if(slide >= totalSlides){
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