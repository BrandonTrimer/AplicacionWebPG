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
