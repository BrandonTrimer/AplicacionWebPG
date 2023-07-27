/* ------------ VARIABLES NIVEL 2 ---------- */
var btnAum1Ejer1 = document.getElementById("btn-ejer1-aum1");
var btnDis1Ejer1 = document.getElementById("btn-ejer1-dis1");
var btnAum2Ejer1 = document.getElementById("btn-ejer1-aum2");
var btnDis2Ejer1 = document.getElementById("btn-ejer1-dis2");
var numRes1Ejer1 = document.getElementById("num-ejer1-res1");
var numRes2Ejer1 = document.getElementById("num-ejer1-res2");
var cont1Ejer1 = 0,
  cont2Ejer1 = 0;
numRes1Ejer1.textContent = 0;
numRes2Ejer1.textContent = 0;

/*-------------------------------------------------- NIVEL 2 ---------------------------------------*/
/* --------------------------- EJERCICIO 1 -------------------------------- */
/*-------------------- AUMENTAR Y DISMINUIR NUMERO DE LA COLUMNA 1*/
function aumentarNumCol1Ejer1() {
  if (cont1Ejer1 < 9) {
    cont1Ejer1++;
    numRes1Ejer1.textContent = cont1Ejer1;
  }
}
btnAum1Ejer1.addEventListener("click", aumentarNumCol1Ejer1, true);

function disminuirNumCol1Ejer1() {
  if (cont1Ejer1 > 0) {
    cont1Ejer1--;
    numRes1Ejer1.textContent = cont1Ejer1;
  }
}
btnDis1Ejer1.addEventListener("click", disminuirNumCol1Ejer1, true);

/*-------------------- AUMENTAR Y DISMINUIR NUMERO DE LA COLUMNA 2*/
function aumentarNumCol2Ejer1() {
  if (cont2Ejer1 < 9) {
    cont2Ejer1++;
    numRes2Ejer1.textContent = cont2Ejer1;
  }
}
btnAum2Ejer1.addEventListener("click", aumentarNumCol2Ejer1, true);

function disminuirNumCol2Ejer1() {
  if (cont2Ejer1 > 0) {
    cont2Ejer1--;
    numRes2Ejer1.textContent = cont2Ejer1;
  }
}
btnDis2Ejer1.addEventListener("click", disminuirNumCol2Ejer1, true);

/* --------------------------- EJERCICIO 2 -------------------------------- */
/*-------------------- AUMENTAR Y DISMINUIR NUMERO DE LA COLUMNA 1*/
/*-------------------- RESULTADO EJERCICIO 1--------------------*/
function resultadoEjer1($num1, $num2, $num3, $num4) {
  var res1 = $num1 + $num2;
  var res2 = $num3 + $num4;

  if (cont1Ejer1 == res1 && cont2Ejer1 == res2) {
    myModelB.show();
  } else {
    myModelM.show();
  }
}
