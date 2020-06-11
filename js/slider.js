let slideIndex, slides, points;
const leftArrow = document.querySelector(".leftArrow");
const rightArrow = document.querySelector(".rightArrow");

const initGallery = function () {
    slideIndex = 0;
    slides = document.querySelectorAll(".image");
    slides[slideIndex].style.opacity = 1;

    //enlever les boutons pour passer de diapo si le nombre de diapositive est de 1
    if (slides.length < 2) {
        leftArrow.style.display = "none";
        rightArrow.style.display = "none";
    }

    //add points
    points = [];
    const pointsContainer = document.querySelector("#pointsContainer");

    slides.forEach((elem, index) => {
        const point = document.createElement("span");
        point.classList.add("points");
        point.addEventListener("click", e => {
            moveSlide(index);
        })

        points.push(point);
        pointsContainer.append(point);
    });
    points[slideIndex].classList.add("active");
}

// fonction permettant de lancer l'animation lors que l'on change d'image soit par le timer ou que l'on clique sur le bouton suivant ou prÃ©cÃ©dent
const plusSlides = function (n) {
    moveSlide(slideIndex + n);
}

const moveSlide = function (n) {
    const moveSlideAnimClass = {
        forCurrent: "",
        forNext: ""
    };
    if(n > slideIndex) {
        if(n >= slides.length){
            n = 0;
        }
        moveSlideAnimClass.forCurrent = "moveLeftCurrentSlide";
        moveSlideAnimClass.forNext = "moveLeftNextSlide";
    } else if (n < slideIndex) {
        if ( n < 0) {
            n = slides.length - 1;
        }
        moveSlideAnimClass.forCurrent = "moveRightCurrentSlide";
        moveSlideAnimClass.forNext = "moveRightPrevSlide";
    }

    if (n != slideIndex) {
        const next = slides[n];
        const current = slides[slideIndex];
        for (let i = 0; i < slides.length; i++) {
            slides[i].className = "image";
            slides[i].style.opacity = 0;
            points[i].classList.remove("active");
        }
        current.classList.add(moveSlideAnimClass.forCurrent);
        next.classList.add(moveSlideAnimClass.forNext);        
        points[n].classList.add("active");
        slideIndex = n;
    }

    setTimer();
}


// timer et la la fonction pour lancer le timer ou pour le reset et qui modifie l'image en fonction si le timer est Ã  l'arrete ou en marche
let timer = null;
const setTimer = function () {
    if (timer) {
        clearInterval(timer);
    }
    timer = setInterval(() => {
        plusSlides(1) ;
    }, 6500);
}

initGallery();
setTimer();

// onclick="plusSlides(-1)" 
leftArrow.addEventListener("click", e => {
    plusSlides(-1);
});
rightArrow.addEventListener("click", e => {
    plusSlides(1);
});
