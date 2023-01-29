var selectA = document.getElementById("ejerA");
var selectB = document.getElementById("ejerB");
var selectC = document.getElementById("ejerC");
var selectD = document.getElementById("ejerD");
var contA = 0,
  contB = 0,
  contC = 0,
  contD = 0;

var select2A = document.getElementById("ejer2A");
var select2B = document.getElementById("ejer2B");
var select2C = document.getElementById("ejer2C");
var select2D = document.getElementById("ejer2D");
var cont2A = 0,
  cont2B = 0,
  cont2C = 0,
  cont2D = 0;

var myModelB = new bootstrap.Modal("#modal-bien");
var myModelM = new bootstrap.Modal("#modal-mal");
var selectOp = "";
/* --------------------------------- FUNCIONES EJERCICIO 1*/
function pintarSelectA() {
  if (contA == 0) {
    selectA.classList.add("select-conten-color");
    selectB.classList.remove("select-conten-color");
    selectC.classList.remove("select-conten-color");
    selectD.classList.remove("select-conten-color");

    contA++;
    contB = 0;
    contC = 0;
    contD = 0;
  }
}
selectA.addEventListener("click", pintarSelectA, true);
function pintarSelectB() {
  if (contB == 0) {
    selectB.classList.add("select-conten-color");
    selectA.classList.remove("select-conten-color");
    selectC.classList.remove("select-conten-color");
    selectD.classList.remove("select-conten-color");

    contB++;
    contA = 0;
    contC = 0;
    contD = 0;
  }
}
selectB.addEventListener("click", pintarSelectB, true);
function pintarSelectC() {
  if (contC == 0) {
    selectC.classList.add("select-conten-color");
    selectB.classList.remove("select-conten-color");
    selectA.classList.remove("select-conten-color");
    selectD.classList.remove("select-conten-color");

    contC++;
    contB = 0;
    contA = 0;
    contD = 0;
  }
}
selectC.addEventListener("click", pintarSelectC, true);
function pintarSelectD() {
  if (contD == 0) {
    selectD.classList.add("select-conten-color");
    selectB.classList.remove("select-conten-color");
    selectC.classList.remove("select-conten-color");
    selectA.classList.remove("select-conten-color");

    contD++;
    contB = 0;
    contC = 0;
    contA = 0;
  }
}
selectD.addEventListener("click", pintarSelectD, true);

/* --------------------------------- FUNCIONES EJERCICIO 2*/
function pintarSelect2A() {
  if (cont2A == 0) {
    select2A.classList.add("select-conten-color");
    select2B.classList.remove("select-conten-color");
    select2C.classList.remove("select-conten-color");
    select2D.classList.remove("select-conten-color");

    cont2A++;
    cont2B = 0;
    cont2C = 0;
    cont2D = 0;
  }
}
select2A.addEventListener("click", pintarSelect2A, true);
function pintarSelect2B() {
  if (cont2B == 0) {
    select2B.classList.add("select-conten-color");
    select2A.classList.remove("select-conten-color");
    select2C.classList.remove("select-conten-color");
    select2D.classList.remove("select-conten-color");

    cont2B++;
    cont2A = 0;
    cont2C = 0;
    cont2D = 0;
  }
}
select2B.addEventListener("click", pintarSelect2B, true);
function pintarSelect2C() {
  if (cont2C == 0) {
    select2C.classList.add("select-conten-color");
    select2B.classList.remove("select-conten-color");
    select2A.classList.remove("select-conten-color");
    select2D.classList.remove("select-conten-color");

    cont2C++;
    cont2B = 0;
    cont2A = 0;
    cont2D = 0;
  }
}
select2C.addEventListener("click", pintarSelect2C, true);
function pintarSelect2D() {
  if (cont2D == 0) {
    select2D.classList.add("select-conten-color");
    select2B.classList.remove("select-conten-color");
    select2C.classList.remove("select-conten-color");
    select2A.classList.remove("select-conten-color");

    cont2D++;
    cont2B = 0;
    cont2C = 0;
    cont2A = 0;
  }
}
select2D.addEventListener("click", pintarSelect2D, true);

/* --------------------------------- RESULTADOS --------------*/

function almacenarOpcion($dato) {
  selectOp = $dato;
}
function compararRes($dato) {
  if (selectOp == $dato) {
    myModelB.show();
  } else {
    myModelM.show();
  }
  console.log(selectOp);
  console.log($dato);
}

function respuestaBuscarN4($dato) {
  for (let index = 1; index <= $dato.length; index++) {
    if (selectOp == $dato[index]) {
      myModelB.show();
    } else {
      myModelM.show();
    }
  }
}
