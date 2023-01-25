var select1 = document.getElementById("selec1");
var select2 = document.getElementById("selec2");
var select3 = document.getElementById("selec3");
var select4 = document.getElementById("selec4");
var select2A = document.getElementById("selec2A");
var select2B = document.getElementById("selec2B");
var select3A = document.getElementById("selec3A");
var select3B = document.getElementById("selec3B");
var select3C = document.getElementById("selec3C");
var select3D = document.getElementById("selec3D");
var cont1 = 0,
  cont2 = 0,
  cont3 = 0,
  cont4 = 0,
  cont2A = 0,
  cont2B = 0,
  cont3A = 0,
  cont3B = 0,
  cont3C = 0,
  cont3D = 0;

function pintarSelect1() {
  if (cont1 == 0) {
    select1.classList.add("select-conten-color");
    select2.classList.remove("select-conten-color");
    select3.classList.remove("select-conten-color");
    select4.classList.remove("select-conten-color");

    cont1++;
    cont2 = 0;
    cont3 = 0;
    cont4 = 0;
  }
}
select1.addEventListener("click", pintarSelect1, true);
function pintarSelect2() {
  if (cont2 == 0) {
    select2.classList.add("select-conten-color");
    select1.classList.remove("select-conten-color");
    select3.classList.remove("select-conten-color");
    select4.classList.remove("select-conten-color");

    cont2++;
    cont1 = 0;
    cont3 = 0;
    cont4 = 0;
  }
}
select2.addEventListener("click", pintarSelect2, true);
function pintarSelect3() {
  if (cont3 == 0) {
    select3.classList.add("select-conten-color");
    select2.classList.remove("select-conten-color");
    select1.classList.remove("select-conten-color");
    select4.classList.remove("select-conten-color");

    cont3++;
    cont2 = 0;
    cont1 = 0;
    cont4 = 0;
  }
}
select3.addEventListener("click", pintarSelect3, true);
function pintarSelect4() {
  if (cont4 == 0) {
    select4.classList.add("select-conten-color");
    select2.classList.remove("select-conten-color");
    select3.classList.remove("select-conten-color");
    select1.classList.remove("select-conten-color");

    cont4++;
    cont2 = 0;
    cont3 = 0;
    cont1 = 0;
  }
}
select4.addEventListener("click", pintarSelect4, true);

/*--------------------------EJERCICIO 2----------------- */
function pintarSelect2A() {
  if (cont2A == 0) {
    select2A.classList.add("select-conten-color");
    select2B.classList.remove("select-conten-color");

    cont2A++;
    cont2B = 0;
  }
}
select2A.addEventListener("click", pintarSelect2A, true);
function pintarSelect2B() {
  if (cont2B == 0) {
    select2B.classList.add("select-conten-color");
    select2A.classList.remove("select-conten-color");

    cont2B++;
    cont2A = 0;
  }
}
select2B.addEventListener("click", pintarSelect2B, true);

/*--------------------------- EJERCICIO 3-----------------------*/
function pintarSelect3A() {
  if (cont3A == 0) {
    select3A.classList.add("select-conten-color");
    select3B.classList.remove("select-conten-color");
    select3C.classList.remove("select-conten-color");
    select3D.classList.remove("select-conten-color");

    cont3A++;
    cont3B = 0;
    cont3C = 0;
    cont3D = 0;
  }
}
select3A.addEventListener("click", pintarSelect3A, true);
function pintarSelect3B() {
  if (cont3B == 0) {
    select3B.classList.add("select-conten-color");
    select3A.classList.remove("select-conten-color");
    select3C.classList.remove("select-conten-color");
    select3D.classList.remove("select-conten-color");

    cont3B++;
    cont3A = 0;
    cont3C = 0;
    cont3D = 0;
  }
}
select3B.addEventListener("click", pintarSelect3B, true);
function pintarSelect3C() {
  if (cont3C == 0) {
    select3C.classList.add("select-conten-color");
    select3A.classList.remove("select-conten-color");
    select3B.classList.remove("select-conten-color");
    select3D.classList.remove("select-conten-color");

    cont3C++;
    cont3A = 0;
    cont3B = 0;
    cont3D = 0;
  }
}
select3C.addEventListener("click", pintarSelect3C, true);
function pintarSelect3D() {
  if (cont3D == 0) {
    select3D.classList.add("select-conten-color");
    select3A.classList.remove("select-conten-color");
    select3B.classList.remove("select-conten-color");
    select3C.classList.remove("select-conten-color");

    cont3D++;
    cont3A = 0;
    cont3B = 0;
    cont3C = 0;
  }
}
select3D.addEventListener("click", pintarSelect3D, true);
