var contCen = 1;
var contDec = 1;
var contUni = 1;

/*--------------- Funciones agregar y quitar en CENTENA---------------*/
/*-------------------------------------------------------------------*/
function cambiarColorCentena() {
  if (contCen <= 9) {
    for (var i = 1; i <= 9; i++) {
      if (contCen == i) {
        document
          .getElementById("btn-cen-ejer" + i)
          .classList.add("fondo-naranja");
        contCen = contCen + 1;
        break;
      }
    }
  } else {
    contCen = 9;
  }
}
document
  .getElementById("btn-centena-mas")
  .addEventListener("click", cambiarColorCentena, true);

function quitarColorCentena() {
  if (contCen >= 1) {
    for (var i = 1; i <= 9; i++) {
      if (contCen == i) {
        document
          .getElementById("btn-cen-ejer" + i)
          .classList.remove("fondo-naranja");
        contCen = contCen - 1;
        break;
      }
    }
  } else {
    contCen = 1;
  }
}
document
  .getElementById("btn-centena-menos")
  .addEventListener("click", quitarColorCentena, true);

/*--------------- Funciones agregar y quitar en DECENA---------------*/
/*-------------------------------------------------------------------*/
function cambiarColorDecena() {
  if (contDec <= 9) {
    for (var i = 1; i <= 9; i++) {
      if (contDec == i) {
        document
          .getElementById("btn-dec-ejer" + i)
          .classList.add("fondo-amarillo");
        contDec = contDec + 1;
        break;
      }
    }
  } else {
    contDec = 9;
  }
}
document
  .getElementById("btn-decena-mas")
  .addEventListener("click", cambiarColorDecena, true);

function quitarColorDecena() {
  if (contDec >= 1) {
    for (var i = 1; i <= 9; i++) {
      if (contDec == i) {
        document
          .getElementById("btn-dec-ejer" + i)
          .classList.remove("fondo-amarillo");
        contDec = contDec - 1;
        break;
      }
    }
  } else {
    contDec = 1;
  }
}
document
  .getElementById("btn-decena-menos")
  .addEventListener("click", quitarColorDecena, true);

/*--------------- Funciones agregar y quitar en UNIDAD---------------*/
/*-------------------------------------------------------------------*/
function cambiarColorUnidad() {
  if (contUni <= 9) {
    for (var i = 1; i <= 9; i++) {
      if (contUni == i) {
        document.getElementById("btn-uni-ejer" + i).classList.add("fondo-rojo");
        contUni = contUni + 1;
        break;
      }
    }
  } else {
    contUni = 9;
  }
}
document
  .getElementById("btn-unidad-mas")
  .addEventListener("click", cambiarColorUnidad, true);

function quitarColorUnidad() {
  if (contUni >= 1) {
    for (var i = 1; i <= 9; i++) {
      if (contUni == i) {
        document
          .getElementById("btn-uni-ejer" + i)
          .classList.remove("fondo-rojo");
        contUni = contUni - 1;
        break;
      }
    }
  } else {
    contUni = 1;
  }
}
document
  .getElementById("btn-unidad-menos")
  .addEventListener("click", quitarColorUnidad, true);

/*function cambiarColor1() {
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
  .addEventListener("click", cambiarColor9, true);*/

/*document.getElementById("btn-ejer4").innerHTML = contColCen9;*/
