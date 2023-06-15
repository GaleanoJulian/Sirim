/* Carrusel */
const myslide = document.querySelectorAll('.myslide'),
	  dot = document.querySelectorAll('.dot');
let counter = 1;
slidefun(counter);

let timer = setInterval(autoSlide, 3000);
function autoSlide() {
	counter += 1;
	slidefun(counter);
}
function plusSlides(n) {
	counter += n;
	slidefun(counter);
	resetTimer();
}
function currentSlide(n) {
	counter = n;
	slidefun(counter);
	resetTimer();
}
function resetTimer() {
	clearInterval(timer);
	timer = setInterval(autoSlide, 8000);
}

function slidefun(n) {
	
	let i;
	for(i = 0;i<myslide.length;i++){
		myslide[i].style.display = "none";
	}
	for(i = 0;i<dot.length;i++) {
		dot[i].className = dot[i].className.replace(' active', '');
	}
	if(n > myslide.length){
	   counter = 1;
	   }
	if(n < 1){
	   counter = myslide.length;
	   }
	myslide[counter - 1].style.display = "block";
	dot[counter - 1].className += " active";
}/* fin  Carrusel */



/* Solo ingresar letras */
function soloLetras(e) {
	var key = e.keyCode || e.which,
	  tecla = String.fromCharCode(key).toLowerCase(),
	  letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
	  especiales = [8, 37, 39, 46],
	  tecla_especial = false;

	for (var i in especiales) {
	  if (key == especiales[i]) {
		tecla_especial = true;
		break;
	  }
	}

	if (letras.indexOf(tecla) == -1 && !tecla_especial) {
	  return false;
	}
  }/* Solo ingresar letras */


  
    
