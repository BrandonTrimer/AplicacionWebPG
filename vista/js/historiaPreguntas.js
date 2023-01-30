var select1H = document.getElementById("selec1H");
var select2H = document.getElementById("selec2H");
var select3H = document.getElementById("selec3H");
var select4H = document.getElementById("selec4H");
var select2AH = document.getElementById("selec2AH");
var select2BH = document.getElementById("selec2BH");
var select3AH = document.getElementById("selec3AH");
var select3BH = document.getElementById("selec3BH");
var select3CH = document.getElementById("selec3CH");
var select3DH = document.getElementById("selec3DH");
var cont1H = 0,
  cont2H = 0,
  cont3H = 0,
  cont4H = 0,
  cont2AH = 0,
  cont2BH = 0,
  cont3AH = 0,
  cont3BH = 0,
  cont3CH = 0,
  cont3DH = 0;

var myModelB = new bootstrap.Modal("#modal-bien");
var myModelM = new bootstrap.Modal("#modal-mal");
var myModelMbusca = new bootstrap.Modal("#modal-mal-busca");
var myModelBobs = new bootstrap.Modal("#modal-bien-obs");

var myModelBC2 = new bootstrap.Modal("#modal-bien-c2");
var myModelMC2 = new bootstrap.Modal("#modal-mal-c2");
var myModelMbuscaC2 = new bootstrap.Modal("#modal-mal-busca-c2");
var myModelBobsC2 = new bootstrap.Modal("#modal-bien-obs-c2");

var myModelBC3 = new bootstrap.Modal("#modal-bien-c3");
var myModelMC3 = new bootstrap.Modal("#modal-mal-c3");
var myModelMbuscaC3 = new bootstrap.Modal("#modal-mal-busca-c3");
var myModelBobsC3 = new bootstrap.Modal("#modal-bien-obs-c3");

var selectOp = "";
var suma = 0;
var sumId = 0;
var numCantidad = 0;
var numDigito = 0;

var contPuntos = 0;
var puntos1 = document.getElementById("puntos1");
var puntos2 = document.getElementById("puntos2");
var puntos3 = document.getElementById("puntos3");
var puntos4 = document.getElementById("puntos4");
var puntos5 = document.getElementById("puntos5");

function pintarSelect1H() {
  if (cont1H == 0) {
    select1H.classList.add("select-conten-color");
    select2H.classList.remove("select-conten-color");
    select3H.classList.remove("select-conten-color");
    select4H.classList.remove("select-conten-color");

    cont1H++;
    cont2H = 0;
    cont3H = 0;
    cont4H = 0;
  }
}
select1H.addEventListener("click", pintarSelect1H, true);
function pintarSelect2H() {
  if (cont2H == 0) {
    select2H.classList.add("select-conten-color");
    select1H.classList.remove("select-conten-color");
    select3H.classList.remove("select-conten-color");
    select4H.classList.remove("select-conten-color");

    cont2H++;
    cont1H = 0;
    cont3H = 0;
    cont4H = 0;
  }
}
select2H.addEventListener("click", pintarSelect2H, true);
function pintarSelect3H() {
  if (cont3H == 0) {
    select3H.classList.add("select-conten-color");
    select2H.classList.remove("select-conten-color");
    select1H.classList.remove("select-conten-color");
    select4H.classList.remove("select-conten-color");

    cont3H++;
    cont2H = 0;
    cont1H = 0;
    cont4H = 0;
  }
}
select3H.addEventListener("click", pintarSelect3H, true);
function pintarSelect4H() {
  if (cont4H == 0) {
    select4H.classList.add("select-conten-color");
    select2H.classList.remove("select-conten-color");
    select3H.classList.remove("select-conten-color");
    select1H.classList.remove("select-conten-color");

    cont4H++;
    cont2H = 0;
    cont3H = 0;
    cont1H = 0;
  }
}
select4H.addEventListener("click", pintarSelect4H, true);

/*--------------------------EJERCICIO 2----------------- */
function pintarSelect2AH() {
  if (cont2AH == 0) {
    select2AH.classList.add("select-conten-color");
    select2BH.classList.remove("select-conten-color");

    cont2AH++;
    cont2BH = 0;
  }
}
select2AH.addEventListener("click", pintarSelect2AH, true);
function pintarSelect2BH() {
  if (cont2BH == 0) {
    select2BH.classList.add("select-conten-color");
    select2AH.classList.remove("select-conten-color");

    cont2BH++;
    cont2AH = 0;
  }
}
select2BH.addEventListener("click", pintarSelect2BH, true);

/*--------------------------- EJERCICIO 3-----------------------*/
function pintarSelect3AH() {
  if (cont3AH == 0) {
    select3AH.classList.add("select-conten-color");
    select3BH.classList.remove("select-conten-color");
    select3CH.classList.remove("select-conten-color");
    select3DH.classList.remove("select-conten-color");

    cont3AH++;
    cont3BH = 0;
    cont3CH = 0;
    cont3DH = 0;
  }
}
select3AH.addEventListener("click", pintarSelect3AH, true);
function pintarSelect3BH() {
  if (cont3BH == 0) {
    select3BH.classList.add("select-conten-color");
    select3AH.classList.remove("select-conten-color");
    select3CH.classList.remove("select-conten-color");
    select3DH.classList.remove("select-conten-color");

    cont3BH++;
    cont3AH = 0;
    cont3CH = 0;
    cont3DH = 0;
  }
}
select3BH.addEventListener("click", pintarSelect3BH, true);
function pintarSelect3CH() {
  if (cont3CH == 0) {
    select3CH.classList.add("select-conten-color");
    select3AH.classList.remove("select-conten-color");
    select3BH.classList.remove("select-conten-color");
    select3DH.classList.remove("select-conten-color");

    cont3CH++;
    cont3AH = 0;
    cont3BH = 0;
    cont3DH = 0;
  }
}
select3CH.addEventListener("click", pintarSelect3CH, true);
function pintarSelect3DH() {
  if (cont3DH == 0) {
    select3DH.classList.add("select-conten-color");
    select3AH.classList.remove("select-conten-color");
    select3BH.classList.remove("select-conten-color");
    select3CH.classList.remove("select-conten-color");

    cont3DH++;
    cont3AH = 0;
    cont3BH = 0;
    cont3CH = 0;
  }
}
select3DH.addEventListener("click", pintarSelect3DH, true);

/* --------------------------------- RESULTADOS --------------*/
/* --------------- CUADRO 1 ---------------------- */
function almacenarOpcion($dato) {
  selectOp = $dato;
}
function compararRes($dato) {
  if (selectOp == $dato) {
    myModelB.show();
    contPuntos++;
    puntos1.textContent = contPuntos;
    puntos2.textContent = contPuntos;
    puntos3.textContent = contPuntos;
    puntos4.textContent = contPuntos;
    puntos5.textContent = contPuntos;
  } else {
    myModelM.show();
  }
}
function buscarRes($dato1, $dato2, $dato3, $dato4, $datoRes) {
  var opciones = [$dato1, $dato2, $dato3, $dato4];

  var cont = 0;
  for (let index = 0; index < opciones.length; index++) {
    if (opciones[index] == $datoRes) {
      myModelMbusca.show();
    } else {
      cont++;
    }
  }
  if (cont == 4) {
    myModelBobs.show();
    contPuntos++;
    puntos1.textContent = contPuntos;
    puntos2.textContent = contPuntos;
    puntos3.textContent = contPuntos;
    puntos4.textContent = contPuntos;
    puntos5.textContent = contPuntos;
  }
}

/* --------------- CUADRO 2 ---------------------- */
function almacenarSuma($dato1, $dato2, $datoId) {
  suma = $dato1 + $dato2;
  sumId = $datoId;
  console.log(suma);
  console.log($dato1, $dato2);
  console.log(sumId);
}
function compararSum($dato1, $dato2) {
  if (sumId == 1 && suma == $dato1) {
    myModelBC2.show();
    contPuntos++;
    puntos1.textContent = contPuntos;
    puntos2.textContent = contPuntos;
    puntos3.textContent = contPuntos;
    puntos4.textContent = contPuntos;
    puntos5.textContent = contPuntos;
  } else {
    if (sumId == 2 && suma == $dato2) {
      myModelBC2.show();
      contPuntos++;
      puntos1.textContent = contPuntos;
      puntos2.textContent = contPuntos;
      puntos3.textContent = contPuntos;
      puntos4.textContent = contPuntos;
      puntos5.textContent = contPuntos;
    } else {
      myModelMC2.show();
    }
  }
  console.log($dato1, $dato2);
}
function buscarSum($dato1, $dato2, $dato3, $dato4, $datoRes1, $datoRes2) {
  var suma1 = $dato1 + $dato2;
  var suma2 = $dato3 + $dato4;

  if (suma1 == $datoRes1 || suma2 == $datoRes2) {
    myModelMbuscaC2.show();
  } else {
    myModelBobsC2.show();
    contPuntos++;
    puntos1.textContent = contPuntos;
    puntos2.textContent = contPuntos;
    puntos3.textContent = contPuntos;
    puntos4.textContent = contPuntos;
    puntos5.textContent = contPuntos;
  }
  console.log("sum1-" + suma1 + " , sum2-" + suma2);
  console.log("res1-" + $datoRes1 + ", res2-" + $datoRes2);
}

/* --------------- CUADRO 3 ---------------------- */
function almacenarMult($datoD, $datoC) {
  numCantidad = $datoC;
  numDigito = $datoD;
}

function compararMult($datoD, $datoC) {
  if (numCantidad == $datoC && numDigito == $datoD) {
    myModelBC3.show();
    contPuntos++;
    puntos1.textContent = contPuntos;
    puntos2.textContent = contPuntos;
    puntos3.textContent = contPuntos;
    puntos4.textContent = contPuntos;
    puntos5.textContent = contPuntos;
  } else {
    myModelMC3.show();
  }
  console.log(numCantidad, numDigito);
  console.log($datoC, $datoD);
}

function buscarMult(
  $datod1,
  $datoc1,
  $datod2,
  $datoc2,
  $datod3,
  $datoc3,
  $datod4,
  $datoc4,
  $datoResD,
  $datoResC
) {
  if ($datoResD == $datod1 && $datoResC == $datoc1) {
    myModelMbuscaC3.show();
  } else {
    if ($datoResD == $datod2 && $datoResC == $datoc2) {
      myModelMbuscaC3.show();
    } else {
      if ($datoResD == $datod3 && $datoResC == $datoc3) {
        myModelMbuscaC3.show();
      } else {
        if ($datoResD == $datod4 && $datoResC == $datoc4) {
          myModelMbuscaC3.show();
        } else {
          myModelBobsC3.show();
          contPuntos++;
          puntos1.textContent = contPuntos;
          puntos2.textContent = contPuntos;
          puntos3.textContent = contPuntos;
          puntos4.textContent = contPuntos;
          puntos5.textContent = contPuntos;
        }
      }
    }
  }
}

function obtenerPuntos() {
  return contPuntos;
}

function mostrarContenidoRes() {
  if (contPuntos < 3) {
    document.getElementById("txt-perdida").style.display = "block";
    document.getElementById("contenido-perdida").style.display = "flex";
  } else {
    document.getElementById("txt-victoria").style.display = "block";
    document.getElementById("contenido-victoria").style.display = "flex";
  }
}
