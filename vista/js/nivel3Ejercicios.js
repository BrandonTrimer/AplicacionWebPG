/* ------------ VARIABLES NIVEL 3 ---------- */
var btnAum1Ejer1N3 = document.getElementById("btn-ejer1-aum1N3");
var btnDis1Ejer1N3 = document.getElementById("btn-ejer1-dis1N3");
var btnAum2Ejer1N3 = document.getElementById("btn-ejer1-aum2N3");
var btnDis2Ejer1N3 = document.getElementById("btn-ejer1-dis2N3");
var numRes1Ejer1N3 = document.getElementById("num-ejer1-res1N3");
var numRes2Ejer1N3 = document.getElementById("num-ejer1-res2N3");
var cont1Ejer1N3 = 0,
  cont2Ejer1N3 = 0;
numRes1Ejer1N3.textContent = 0;
numRes2Ejer1N3.textContent = 0;

var btnAum1Ejer2N3 = document.getElementById("btn-ejer2-aum1N3");
var btnDis1Ejer2N3 = document.getElementById("btn-ejer2-dis1N3");
var btnAum2Ejer2N3 = document.getElementById("btn-ejer2-aum2N3");
var btnDis2Ejer2N3 = document.getElementById("btn-ejer2-dis2N3");
var numRes1Ejer2N3 = document.getElementById("num-ejer2-res1N3");
var numRes2Ejer2N3 = document.getElementById("num-ejer2-res2N3");
var cont1Ejer2N3 = 0,
  cont2Ejer2N3 = 0;
numRes1Ejer2N3.textContent = 0;
numRes2Ejer2N3.textContent = 0;

var myModelB = new bootstrap.Modal("#modal-bien");
var myModelM = new bootstrap.Modal("#modal-mal");

/*------------------------------------------------ NIVEL 3 ------------------------------------------*/
/* --------------------------- EJERCICIO 1 -------------------------------- */
/*-------------------- AUMENTAR Y DISMINUIR NUMERO DE LA COLUMNA 1*/
function aumentarNumCol1Ejer1N3() {
  if (cont1Ejer1N3 < 9) {
    cont1Ejer1N3++;
    numRes1Ejer1N3.textContent = cont1Ejer1N3;
  }
}
btnAum1Ejer1N3.addEventListener("click", aumentarNumCol1Ejer1N3, true);

function disminuirNumCol1Ejer1N3() {
  if (cont1Ejer1N3 > 0) {
    cont1Ejer1N3--;
    numRes1Ejer1N3.textContent = cont1Ejer1N3;
  }
}
btnDis1Ejer1N3.addEventListener("click", disminuirNumCol1Ejer1N3, true);

/*-------------------- AUMENTAR Y DISMINUIR NUMERO DE LA COLUMNA 2*/
function aumentarNumCol2Ejer1N3() {
  if (cont2Ejer1N3 < 9) {
    cont2Ejer1N3++;
    numRes2Ejer1N3.textContent = cont2Ejer1N3;
  }
}
btnAum2Ejer1N3.addEventListener("click", aumentarNumCol2Ejer1N3, true);

function disminuirNumCol2Ejer1N3() {
  if (cont2Ejer1N3 > 0) {
    cont2Ejer1N3--;
    numRes2Ejer1N3.textContent = cont2Ejer1N3;
  }
}
btnDis2Ejer1N3.addEventListener("click", disminuirNumCol2Ejer1N3, true);

/* --------------------------- EJERCICIO 2 -------------------------------- */
/*-------------------- AUMENTAR Y DISMINUIR NUMERO DE LA COLUMNA 1*/
function aumentarNumCol1Ejer2N3() {
  if (cont1Ejer2N3 < 9) {
    cont1Ejer2N3++;
    numRes1Ejer2N3.textContent = cont1Ejer2N3;
  }
}
btnAum1Ejer2N3.addEventListener("click", aumentarNumCol1Ejer2N3, true);

function disminuirNumCol1Ejer2N3() {
  if (cont1Ejer2N3 > 0) {
    cont1Ejer2N3--;
    numRes1Ejer2N3.textContent = cont1Ejer2N3;
  }
}
btnDis1Ejer2N3.addEventListener("click", disminuirNumCol1Ejer2N3, true);

/*-------------------- AUMENTAR Y DISMINUIR NUMERO DE LA COLUMNA 2*/
function aumentarNumCol2Ejer2N3() {
  if (cont2Ejer2N3 < 9) {
    cont2Ejer2N3++;
    numRes2Ejer2N3.textContent = cont2Ejer2N3;
  }
}
btnAum2Ejer2N3.addEventListener("click", aumentarNumCol2Ejer2N3, true);

function disminuirNumCol2Ejer2N3() {
  if (cont2Ejer2N3 > 0) {
    cont2Ejer2N3--;
    numRes2Ejer2N3.textContent = cont2Ejer2N3;
  }
}
btnDis2Ejer2N3.addEventListener("click", disminuirNumCol2Ejer2N3, true);
/*-------------------- RESULTADO EJERCICIO 1--------------------*/
function resultadoEjer1Res($num1, $num2, $num3, $num4) {
  var res1 = $num1 - $num2;
  var res2 = $num3 - $num4;

  if (cont1Ejer1N3 == res1 && cont2Ejer1N3 == res2) {
    myModelB.show();
  } else {
    myModelM.show();
  }
}

/*-------------------- RESULTADO EJERCICIO 2--------------------*/
function resultadoEjer2Res($num1, $num2, $num3, $num4) {
  var res1 = $num1 - $num2;
  var res2 = $num3 - $num4;

  if (cont1Ejer2N3 == res1 && cont2Ejer2N3 == res2) {
    myModelB.show();
  } else {
    myModelM.show();
  }
}
