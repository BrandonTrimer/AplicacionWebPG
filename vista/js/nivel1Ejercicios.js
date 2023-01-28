var contCen = 0;
var contDec = 0;
var contUni = 0;

var btnCasillaU = document.getElementById("btn-casilla-u");
var contGroupNum = 0;
var contNum = 0;

var resArray = [];
var contCorrectos = 0;

var myModelB = new bootstrap.Modal("#modal-bien");
var myModelM = new bootstrap.Modal("#modal-mal");

/*--------------- Funciones agregar y quitar en CENTENA---------------*/
/*-------------------------------------------------------------------*/
function cambiarColorCentena() {
  if (contCen <= 9) {
    contCen++;
    for (var i = 1; i <= 9; i++) {
      if (contCen == i) {
        document
          .getElementById("btn-cen-ejer" + i)
          .classList.add("fondo-naranja");
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
    contDec++;
    for (var i = 1; i <= 9; i++) {
      if (contDec == i) {
        document
          .getElementById("btn-dec-ejer" + i)
          .classList.add("fondo-amarillo");
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
    contUni++;
    for (var i = 1; i <= 9; i++) {
      if (contUni == i) {
        document.getElementById("btn-uni-ejer" + i).classList.add("fondo-rojo");
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

/*--------------- Funciones VERIFICAR RESULTADOS EJERCICIO 1---------------*/
/*-------------------------------------------------------------------*/

function RevisarEjer($numRu, $numRd, $numRc) {
  if ($numRu == contUni && $numRd == contDec && $numRc == contCen) {
    document.getElementById("mensajeB").style.display = "block";
  } else {
    document.getElementById("mensajeM").style.display = "block";
  }
}
function cerrarAlertas() {
  document.getElementById("mensajeB").style.display = "none";
  document.getElementById("mensajeM").style.display = "none";
}

/*--------------- Funciones cambiar VALOR EJERCICIO 2---------------*/
/*-------------------------------------------------------------------*/

function mostrarGroupNum($num) {
  if (contGroupNum == 0) {
    document
      .getElementById("contenedor-num")
      .classList.remove("cont-select-num");
    contGroupNum = 1;
    contNum = $num;
  } else {
    document.getElementById("contenedor-num").classList.add("cont-select-num");
    contGroupNum = 0;
  }
}
function cambiarNum($num) {
  contGroupNum = 0;
  document.getElementById("contenedor-num").classList.add("cont-select-num");
  document.getElementById("txt-num" + contNum).textContent = $num;
  resArray[contNum - 1] = $num;
}

/*--------------- Funciones VERIFICAR RESULTADOS EJERCICIO 2---------------*/
/*-------------------------------------------------------------------*/

function RevisarEjer2($numRu, $numRd, $numRc, $numRuM, $numRdM, $numRcM) {
  var pregArray = [$numRcM, $numRdM, $numRuM, $numRc, $numRd, $numRu];
  for (var i = 0; i < 6; i++) {
    if (pregArray[i] == resArray[i]) {
      contCorrectos++;
    }
  }
  console.log(pregArray);
  console.log(resArray);
  console.log(contCorrectos);

  if (contCorrectos == 6) {
    myModelB.show();
    contCorrectos = 0;
  } else {
    myModelM.show();
    contCorrectos = 0;
  }
}
function cerrarAlertas2() {
  document.getElementById("mensajeB").style.display = "none";
  document.getElementById("mensajeM").style.display = "none";
}

/*--------------- MODAL ---------------*/
/*-------------------------------------------------------------------*/

function RevisarEjerModal($numRu, $numRd, $numRc) {
  if ($numRu == contUni && $numRd == contDec && $numRc == contCen) {
    myModelB.show();
  } else {
    myModelM.show();
  }
}
function cerrarAlertas() {
  document.getElementById("mensajeB").style.display = "none";
  document.getElementById("mensajeM").style.display = "none";
}
