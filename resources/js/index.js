import MaterialIcon from "material-icons";

Window.MaterialIcon = MaterialIcon;

document.getElementById("menu").addEventListener("click", Menu);

let name = document.getElementById("menu");
function Menu() {
    let list = document.querySelector("ul");
    name === "menu"
        ? ((name = "close"),
          list.classList.add("top-[80px]"),
          list.classList.add("opacity-100"))
        : ((name = "menu"), list.classList.remove("top-[80px]"));
}

document.getElementById("next").addEventListener("click", next);
document.getElementById("prev").addEventListener("click", prev);
var currendSlideID = 1;
var slideElement = document.getElementById("slider");
var totalSlides = slideElement.childElementCount;
function next() {
    console.log("next halaman " + currendSlideID);
    console.log("next total " + totalSlides);
    if (currendSlideID < totalSlides) {
        currendSlideID++;
        showSlide();
    }
}

function prev() {
    console.log("prev " + currendSlideID);
    if (currendSlideID > 2) {
        currendSlideID--;
        showSlide();
    }
}

function showSlide() {
    var slides = document.getElementById("slider").getElementsByTagName("li");
    // console.log(slides);
    for (let index = 0; index < totalSlides; index++) {
        const element = slides[index];
        if (currendSlideID === index + 1) {
            element.classList.remove("hidden");
        } else {
            element.classList.add("hidden");
        }
    }
}
