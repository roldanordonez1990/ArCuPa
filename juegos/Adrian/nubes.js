//Creacion de las variables
var canvas, jugadorImg, nubesImg, rayosImg, solImg, ctx, playerX, playerY, izquierda = false, derecha = false, tiro = false, vidas = 5, puntuacion = 0, game;
var nubes = [];
var tirosNubes = [];
var tirosPlayer = [];
var velocidad = 5

//Funcion de creacion del juego
$(function () {
	jugadorImg = new Image();
	jugadorImg.id = 'jugadorImg';
	jugadorImg.src = 'img/pararayos.png';
	nubesImg = new Image();
	nubesImg.src = 'img/nube.png';
	rayosImg = new Image();
	rayosImg.src = 'img/rayo20x20.png';
	solImg = new Image();
	solImg.src = 'img/sol20x20.png';

	canvas = $('#game')[0];
	ctx = canvas.getContext('2d');

	jugadorImg.onload = function () {
		var left = ($('#game').width() / 2) - jugadorImg.width / 2;
		var top = $('#game').height() - jugadorImg.height;
		playerX = left;
		playerY = top;
		ctx.drawImage(jugadorImg, left, top);
	}

	$('#jugar').click(function () {
		vidas = 5;
		puntuacion = 0;
		nubes.length = 0;
		tirosNubes.length = 0;
		tirosPlayer.length = 0;
		if (game) clearInterval(game);
		game = setInterval(pintar, 33);
		$(this).blur();
	});
});

// derecha:39, izquierda:37, espacio:32
function onKeyDown(e) {
	if (e.keyCode == 39) {
		derecha = true;
	}
	if (e.keyCode == 37) {
		izquierda = true;
	}
	if (e.keyCode == 32) {
		tiro = true;
	}
}

function onKeyUp(e) {
	if (e.keyCode == 39) {
		derecha = false;
	}
	if (e.keyCode == 37) {
		izquierda = false;
	}
	if (e.keyCode == 32) {
		tiro = false;
	}
}
//Pintamos el canvas
function pintar() {
	limpiar();
	mover();
	colisiones();

	//Dibujo jugador
	ctx.drawImage(jugadorImg, playerX, playerY);

	if (makeNube()) {
		var startpos = getNubeStartPosition();
		nubes.push({ x: startpos.x, y: startpos.y, dir: 1 });
	}

	// Pintamos las nubes
	for (var i = 0; i < nubes.length; i++) {
		ctx.drawImage(nubesImg, nubes[i].x, nubes[i].y);
	}


	if (tiro == true) {
		tirosPlayer.push({ 'x': playerX + (jugadorImg.width / 4), 'y': playerY});
		tiro = false;
	}

	// Pintamos los soles del jugador
	for (var i = 0; i < tirosPlayer.length; i++) {
		ctx.fillStyle = tirosPlayer[i].color;
		ctx.drawImage(solImg, tirosPlayer[i].x, tirosPlayer[i].y);
		//ctx.fillRect(tirosPlayer[i].x, tirosPlayer[i].y, 2, 4);
	}

	// Pintamos los rayos de las nubes
	for (var i = 0; i < tirosNubes.length; i++) {
		tirosNubes[i].y += 3;
		ctx.fillStyle = tirosNubes[i].color;
		ctx.drawImage(rayosImg, tirosNubes[i].x, tirosNubes[i].y);
	}

	// Imprimir la puntacion y las vidas en el canvas
	ctx.font = "bold 12px sans-serif";
	ctx.fillStyle = "white";
	ctx.fillText("Puntuación: " + puntuacion, 10, 15);
	ctx.fillText("Vidas: " + vidas, canvas.width - 60, 15);

	// Control del final de las vidas
	if (vidas <= 0) {
		clearTimeout(game);
		ctx.font = "20px fantasy";
		ctx.fillStyle = "black";
		ctx.fillText("Has conseguido "+ puntuacion +" puntos.", 400, 20);
	}


}
// Limpieza del canvas
function limpiar() {
	canvas.width = canvas.width;
}

function mover() {

	// Control del jugador no se salga del canvas
	if (derecha && (playerX + jugadorImg.width < canvas.width)) {
		playerX += velocidad;
	}

	else if (izquierda && (playerX > 0)) {
		playerX -= velocidad;
	}

	for (var i = 0; i < nubes.length; i++) {

		// Cuando la nube choca con el canvas inferior
		if (nubes[i].y + nubesImg.height > canvas.height) {
			nubes.splice(i, 1);
			continue;
		}

		// Movimiento normal de las nubes
		nubes[i].x += 2 * nubes[i].dir;
		nubes[i].y += 1;

		// Cuando la nube choca con los laterales del canvas
		if (nubes[i].x + (1 * nubes[i].dir) + nubesImg.width > canvas.width) {
			nubes[i].dir = -1;
		}
		if (nubes[i].x + (1 * nubes[i].dir) < 0) {
			nubes[i].dir = 1;
		}

		// Creacion de los rayos
		if (nubesTiros()) {
			tirosNubes.push({ 'x': nubes[i].x + (nubesImg.width / 2), 'y': nubes[i].y + nubesImg.height, 'color': 'white' });
		}
	}

	// Movimiento de los disparos del jugador
	for (var i = 0; i < tirosPlayer.length; i++) {

		tirosPlayer[i].y -= 3;
		// Control del disparo del jugador sale del canvas superior							
		if (tirosPlayer[i].y <= 0) {
			tirosPlayer.splice(i, 1);
			continue;
		}

	}

	// Control de los rayos cuando salen del canvas inferior
	for (var i = 0; i < tirosNubes.length; i++) {
		if (tirosNubes[i].y + 4 >= canvas.height) {
			tirosNubes.splice(i, 1);
		}
	}
}

function colisiones() {
	// colision disparos nube	
	// Comprobacion de la colision de los disparos de la nube contra el jugador
	for (var i = 0; i < tirosNubes.length; i++) {
		if (tirosNubes[i].y + 4 >= playerY) {
			if ((tirosNubes[i].x >= playerX &&
				tirosNubes[i].x <= playerX + jugadorImg.width) ||
				(tirosNubes[i].x + 2 >= playerX &&
					tirosNubes[i] + 2 <= playerX + jugadorImg.width)) {
				vidas--;
				tirosNubes.splice(i, 1);
			}
		}
	}

	// Comprobacion de la colision con una nube
	for (var i = 0; i < nubes.length; i++) {
		if (nubes[i].y + nubesImg.height >= playerY) {
			if ((nubes[i].x >= playerX &&
				nubes[i].x <= playerX + jugadorImg.width) ||
				(nubes[i].x + nubesImg.width >= playerX &&
					nubes[i].x + nubesImg.width <= playerX + jugadorImg.width)) {
				nubes.splice(i, 1);
				vidas--;
			}
		}
	}

	// Comprobacion de la colision de los disparos del jugador contra las nubes
	for (var i = 0; i < nubes.length; i++) {
		for (var j = 0; j < tirosPlayer.length; j++) {

			if (!nubes[i]) continue;

			if (tirosPlayer[j].y <= nubes[i].y + nubesImg.height && tirosPlayer[j].y >= nubes[i].y) {
				if ((tirosPlayer[j].x >= nubes[i].x &&
					tirosPlayer[j].x <= nubes[i].x + nubesImg.width) ||
					(tirosPlayer[j].x + 2 >= nubes[i].x &&
						tirosPlayer[j] + 2 <= nubes[i].x + nubesImg.width)) {
					puntuacion++;
					nubes.splice(i, 1);

					tirosPlayer.splice(j, 1);
				}
			}
		}
	}
}
// Función para crear las nubes, si el valor optenido es correcto crea una nube y si no es correcto no la crea
function makeNube() {
	if (Math.ceil(Math.random() * 100) < 6) return true;
	return false;
}
// Función para la creacion de las nubes con una posicion en el eje X aletoria
function getNubeStartPosition() {
	var rango_superior = canvas.width - nubesImg.width;
	var rango_inferior = 0;
	var x = Math.floor(Math.random() * (rango_superior - (rango_inferior - 1))) + rango_inferior;
	return { 'y': 0, 'x': x }
}

// Función para crear los rayos con un valor aleatorio, si el valor optenido es correcto crea un rayo y si no es correcto no lo crea
function nubesTiros() {
	if (Math.ceil(Math.random() * 100) < 3) return true;
	return false;
}
$(document).keydown(onKeyDown);
$(document).keyup(onKeyUp);