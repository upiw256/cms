import MaterialIcon from "material-icons";

Window.MaterialIcon = MaterialIcon;

document.getElementById("menu").addEventListener("click", Menu);

var name = document.getElementById("menu");
function Menu() {
    let list = document.querySelector("ul");
    name === "menu"
        ? ((name = "close"),
          list.classList.add("top-[80px]"),
          list.classList.add("opacity-100"),
          list.classList.add("h-screen"),
          (document.getElementById("menu").innerHTML = "menu_open"))
        : ((name = "menu"),
          list.classList.remove("top-[80px]"),
          list.classList.remove("h-screen"),
          console.log(name.textContent),
          (document.getElementById("menu").innerHTML = "menu"));
}

const carousel = document.querySelector(".carousel");
const carouselItems = document.querySelectorAll(".carousel-item");
let currentIndex = 0;

document.getElementById("next").addEventListener("click", () => {
    carouselItems[currentIndex].classList.add("hidden");
    currentIndex = (currentIndex + 1) % carouselItems.length;
    carouselItems[currentIndex].classList.remove("hidden");
    // moveCarousel();
});

document.getElementById("prev").addEventListener("click", () => {
    carouselItems[currentIndex].classList.add("hidden");
    currentIndex =
        (currentIndex - 1 + carouselItems.length) % carouselItems.length;
    carouselItems[currentIndex].classList.remove("hidden");
    // moveCarousel();
});

function moveCarousel() {
    // carousel.style.transform = `translateX(-${currentIndex * 500}px)`;
    setInterval(() => {
        carouselItems[currentIndex].classList.add("hidden");
        currentIndex = (currentIndex + 1) % carouselItems.length;
        carouselItems[currentIndex].classList.remove("hidden");
        moveCarousel();
    }, 2000);
}
