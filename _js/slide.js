var slideIndex = 1;
exibirSlide(slideIndex);

function mudarSlide(n) {
    exibirSlide(slideIndex += n);
}

function slideAtual(n) {
    exibirSlide(slideIndex = n);
}

function exibirSlide(n) {
    var i;
    var slides = document.getElementsByClassName("slide");
    var circulo = document.getElementsByClassName("circulo");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < circulo.length; i++) {
        circulo[i].className = circulo[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    circulo[slideIndex - 1].className += " active";
}