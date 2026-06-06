let posicao = 0;

function avancarRaquete() {

    posicao++;

    document.getElementById("raquetes-grid").style.transform = `translateX(-${posicao * 240}px)`;
}

function voltarRaquete() {

    if (posicao > 0) {

        posicao--;

        document.getElementById("raquetesGrid").style.transform = `translateX(-${posicao * 240}px)`;
    }
}

let slide = 0;

const totalSlides = document.querySelectorAll('.slide').length;

function mostrarSlide(){

    const slides = document.getElementById("slides");

        slides.style.transform = `translateX(-${slide * 100}vw)`;
}

function avancar(){

    slide++;

     if(slide >= totalSlides){
        lide = 0;
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