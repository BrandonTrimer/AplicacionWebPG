var contCen = 0;
var contDec = 0;
var contUni = 0;
var contColCen1 = 0,
  contColCen2 = 0,
  contColCen3 = 0,
  contColCen4 = 0,
  contColCen5 = 0,
  contColCen6 = 0,
  contColCen7 = 0,
  contColCen8 = 0,
  contColCen9 = 0;
var contColDec = 0;
var contColUni = 0;
var btncolor1 = document.getElementById("btn-ejer1");
var btncolor2 = document.getElementById("btn-ejer2");
var btncolor3 = document.getElementById("btn-ejer3");
var btncolor4 = document.getElementById("btn-ejer4");
var btncolor5 = document.getElementById("btn-ejer5");
var btncolor6 = document.getElementById("btn-ejer6");
var btncolor7 = document.getElementById("btn-ejer7");
var btncolor8 = document.getElementById("btn-ejer8");
var btncolor9 = document.getElementById("btn-ejer9");

function cambiarColor1() {
  if (contColCen1 == 0) {
    btncolor1.classList.add("fondo-rojo");
    contColCen1 = 1;
    contCen = contCen + 1;
  } else {
    btncolor1.classList.remove("fondo-rojo");
    contColCen1 = 0;
    contCen = contCen - 1;
  }
}
document
  .getElementById("btn-ejer1")
  .addEventListener("click", cambiarColor1, true);
function cambiarColor2() {
  if (contColCen2 == 0) {
    btncolor2.classList.add("fondo-rojo");
    contColCen2 = 1;
    contCen = contCen + 1;
  } else {
    btncolor2.classList.remove("fondo-rojo");
    contColCen2 = 0;
    contCen = contCen - 1;
  }
}
document
  .getElementById("btn-ejer2")
  .addEventListener("click", cambiarColor2, true);
function cambiarColor3() {
  if (contColCen3 == 0) {
    btncolor3.classList.add("fondo-rojo");
    contColCen3 = 1;
    contCen = contCen + 1;
  } else {
    btncolor3.classList.remove("fondo-rojo");
    contColCen3 = 0;
    contCen = contCen - 1;
  }
}
document
  .getElementById("btn-ejer3")
  .addEventListener("click", cambiarColor3, true);
function cambiarColor4() {
  if (contColCen4 == 0) {
    btncolor4.classList.add("fondo-rojo");
    contColCen4 = 1;
    contCen = contCen + 1;
  } else {
    btncolor4.classList.remove("fondo-rojo");
    contColCen4 = 0;
    contCen = contCen - 1;
  }
}
document
  .getElementById("btn-ejer4")
  .addEventListener("click", cambiarColor4, true);
function cambiarColor5() {
  if (contColCen5 == 0) {
    btncolor5.classList.add("fondo-rojo");
    contColCen5 = 1;
    contCen = contCen + 1;
  } else {
    btncolor5.classList.remove("fondo-rojo");
    contColCen5 = 0;
    contCen = contCen - 1;
  }
}
document
  .getElementById("btn-ejer5")
  .addEventListener("click", cambiarColor5, true);
function cambiarColor6() {
  if (contColCen6 == 0) {
    btncolor6.classList.add("fondo-rojo");
    contColCen6 = 1;
    contCen = contCen + 1;
  } else {
    btncolor6.classList.remove("fondo-rojo");
    contColCen6 = 0;
    contCen = contCen - 1;
  }
}
document
  .getElementById("btn-ejer6")
  .addEventListener("click", cambiarColor6, true);
function cambiarColor7() {
  if (contColCen7 == 0) {
    btncolor7.classList.add("fondo-rojo");
    contColCen7 = 1;
    contCen = contCen + 1;
  } else {
    btncolor7.classList.remove("fondo-rojo");
    contColCen7 = 0;
    contCen = contCen - 1;
  }
}
document
  .getElementById("btn-ejer7")
  .addEventListener("click", cambiarColor7, true);
function cambiarColor8() {
  if (contColCen8 == 0) {
    btncolor8.classList.add("fondo-rojo");
    contColCen8 = 1;
    contCen = contCen + 1;
  } else {
    btncolor8.classList.remove("fondo-rojo");
    contColCen8 = 0;
    contCen = contCen - 1;
  }
}
document
  .getElementById("btn-ejer8")
  .addEventListener("click", cambiarColor8, true);
function cambiarColor9() {
  if (contColCen9 == 0) {
    btncolor9.classList.add("fondo-rojo");
    contColCen9 = 1;
    contCen = contCen + 1;
  } else {
    btncolor9.classList.remove("fondo-rojo");
    contColCen9 = 0;
    contCen = contCen - 1;
  }
}
document
  .getElementById("btn-ejer9")
  .addEventListener("click", cambiarColor9, true);

document.getElementById("btn-ejer4").innerHTML = contCen;
