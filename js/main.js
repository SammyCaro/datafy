/*MENU*/
let icon = document.getElementById("icon");
let icon1 = document.getElementById("a");
let icon2 = document.getElementById("b");
let icon3 = document.getElementById("c");
let nav = document.getElementById("nav");
let blue = document.getElementById("blue");

icon.addEventListener("click", function () {
  icon1.classList.toggle("a");
  icon2.classList.toggle("c");
  icon3.classList.toggle("b");
  nav.classList.toggle("show");
  blue.classList.toggle("slide");
});

/*Aparición imagen de flechas en contenedor de metodología*/
let scroll =
  window.requestAnimationFrame ||
  function (callback) {
    window.setTimeout(callback, 1000 / 30);
  };
let elementsToShow = document.querySelectorAll(".show-on-scroll");

function loop() {
  Array.prototype.forEach.call(elementsToShow, function (element) {
    if (isElementInViewport(element)) {
      element.classList.add("is-visible");
    } else {
      element.classList.remove("is-visible");
    }
  });

  scroll(loop);
}
loop();

function isElementInViewport(el) {
  if (typeof jQuery === "function" && el instanceof jQuery) {
    el = el[0];
  }
  let rect = el.getBoundingClientRect();
  return (
    (rect.top <= 0 && rect.bottom >= 0) ||
    (rect.bottom >=
      (window.innerHeight || document.documentElement.clientHeight) &&
      rect.top <=
        (window.innerHeight || document.documentElement.clientHeight)) ||
    (rect.top >= 0 &&
      rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight))
  );
}

/*  */

/* Validación solo letras input formulario */
function validarTextoEntrada(input, patron) {
  let texto = input.value;
  let letras = texto.split("");
  for (let x in letras) {
    let letra = letras[x];
    if (!new RegExp(patron, "i").test(letra)) {
      letras[x] = "";
    }
  }
  input.value = letras.join("");
}

let inputForm = document.getElementById("inputForm");
inputForm.addEventListener("input", function (event) {
  validarTextoEntrada(this, "[a-z ]");
});

/*Mantiene clase active cuando se selecciona opción en menú*/
function clickSingleA(a) {
  items = document.querySelectorAll(".nav-item.active");
  if (items.length) {
    items[0].className = "nav-item";
  }
  a.className = "nav-item active";
}
