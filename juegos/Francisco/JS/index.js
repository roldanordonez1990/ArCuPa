
//Declaramos las variables globales
var canvas,
ctx,
imgFondo,
imgCabeza,
imgBomba,
imgZapatilla,
imgGameOver,
finDeJuego = false,
imgVida,
imgCargadas = 0;

//Coordenadas y dimensiones para la cabeza
var CoorX = 250;
var CoorY = 220;
var WIDTH = 70;
var HEIGHT = 60;
var px = 70;
var py = 70;

//Coordenadas y dimensiones para la nieve
var CoorBombaX = 0;
var CoorBombaY = 250;
var BombaWidth = 70;
var BombaHeight = 70;
var bx = 6;
var by = -6;

//Coordenadas y dimensiones para el rayo
var CoorZapaX = 700;
var CoorZapaY = 100;
var ZapaWidth = 90;
var ZapaHeight = 60;
var zx = 6;
var zy = -6;

//Coordenadas y dimensiones de la vida
var contadorVidas = 3;
var CoorVidaX = 0;
var CoorVidaY = 460;
var VidaWidth = 90;
var VidaHeight = 90;

function init() {
    //Cargamos los sonidos al iniciar el juego
    var sonidoPerder = new Audio();
    sonidoPerder.src='music/romper.mp3';
    preloadImages();
    
    // Obtención del elemento html con id = "canvas". Puedes mirar el código html para entender mejor esto
    canvas = document.getElementById('canvas');
    // Necesitamos el contexto del canvas, para poderlo utilizar como "brocha", gracias a este elemento podremos
    // asignar colores y pintar primitivas, imágenes, textos, etc.
    ctx = canvas.getContext("2d");

    // Start the first frame request
    window.requestAnimationFrame(gameLoop);

  }

  function gameLoop(){
    paintEscena();
  
    // Keep requesting new frames
    //El método requestAnimationFrame solicita que el navegador llame a una función específica 
    //tan pronto como sea posible antes de que ocurra el siguiente repintado. 
    //Es una API específicamente para renderizar animaciones
    window.requestAnimationFrame(gameLoop);
  }
  

      //En esta función vamos a cargar todas las imágenes
      function preloadImages() {
    
        //Carga de la imagen del fondo del juego
        imgFondo = new Image();
        imgFondo.src = 'images/cielo.png';
        imgFondo.addEventListener('load', function() {
        // Este trozo de código se ejecutará de manera asíncrona cuando la imagen se haya realmente cargado.
        imgCargadas++;
        paintEscena();
      }, false);

      // Carga de la imagen de la zapatilla del juego
        imgVida = new Image();
        imgVida.src = 'images/vida.png';
        imgFondo.addEventListener('load', function() {
        // Este trozo de código se ejecutará de manera asíncrona cuando la imagen se haya realmente cargado.
        imgCargadas++;
        paintEscena();
      }, false);

       // Carga de la imagen de la zapatilla del juego
       imgZapatilla = new Image();
       imgZapatilla.src = 'images/rayo.png';
       imgFondo.addEventListener('load', function() {
       // Este trozo de código se ejecutará de manera asíncrona cuando la imagen se haya realmente cargado.
       imgCargadas++;
       paintEscena();
     }, false);

       // Carga de la imagen de la bomba del juego
        imgBomba = new Image();
        imgBomba.src = 'images/copo.png';
        imgBomba.addEventListener('load', function() {
        // Este trozo de código se ejecutará de manera asíncrona cuando la imagen se haya realmente cargado.
        imgCargadas++;
        paintEscena();
      }, false);

      // Carga de la imagen de la cabeza del juego
      imgCabeza = new Image();
      imgCabeza.src = 'images/cabeza.png';
      imgCabeza.addEventListener('load', function() {
      // Este trozo de código se ejecutará de manera asíncrona cuando la imagen se haya realmente cargado.
      imgCargadas++;
      paintEscena();
      }, false);

      // Carga de la imagen de la pelota del juego
      imgGameOver = new Image();
      imgGameOver.src = 'images/gameover.png';
      imgGameOver.addEventListener('load', function() {
      // Este trozo de código se ejecutará de manera asíncrona cuando la imagen se haya realmente cargado.
      }, false);
      
      
        //Con este evento damos la funcionalidad a las teclas para mover la pelota
        document.addEventListener("keydown", function(event){
        var keyPress = event.key;
        if(keyPress == "ArrowRight"){
        console.log("Has pulsado la derecha");
        moverDerecha();
        //Pintaremos la escena cada vez que la imagen se mueva y se repinte en la nueva posición
        paintEscena();
        }
        if(keyPress == "ArrowLeft"){
        console.log("Has pulsado la izquierda");
        moverIzquierda();
        //Pintaremos la escena cada vez que la imagen se mueva y se repinte en la nueva posición
        paintEscena();
        }
        if(keyPress == "ArrowUp"){
        console.log("Has pulsado arriba");
        moverArriba();
        //Pintaremos la escena cada vez que la imagen se mueva y se repinte en la nueva posición
        paintEscena();
        }
        if(keyPress == "ArrowDown"){
        console.log("Has pulsado abajo");
        moverAbajo();
        //Pintaremos la escena cada vez que la imagen se mueva y se repinte en la nueva posición
        paintEscena();
        }   
     });
     
        
}
function paintEscena () {
  //Las imágenes aparecerán en escena si el total de imágenes es el indicado
  if (imgCargadas = 6) {
        //pintamos las nuevas posiciones de los objetos y se irán pintando en cada iteración del frame que es llamado en gameLoop
        moverRayo();
        moverCopo();
        colision();
        paintFondo();

  //Le damos la condición de que si es finDeJuego, pinte en escena el game over
  if (contadorVidas == 0){
      gameOver();
    }
  }
}

function paintFondo () {
// Pintamos lo que va a aparecer en escena al empezar el juego
  ctx.drawImage(imgFondo, 0, 0);
  ctx.drawImage(imgCabeza, CoorX, CoorY, WIDTH, HEIGHT);
  ctx.drawImage(imgBomba, CoorBombaX, CoorBombaY, BombaWidth, BombaHeight);
  ctx.drawImage(imgZapatilla, CoorZapaX, CoorZapaY, ZapaWidth, ZapaHeight);
  for(var i = 0; i < contadorVidas; i++){
    ctx.drawImage(imgVida, CoorVidaX + 65*i, CoorVidaY, VidaWidth, VidaHeight);
    }
  }
  
//Movemos hacia la derecha la cabeza sumando coordenadas
function moverDerecha (){
  CoorX += px;
  //Le indicamos que no se pueda salir del canvas
  if(CoorX > (canvas.width - this.WIDTH )){
  CoorX = canvas.width - this.WIDTH
  }
}
//Movemos hacia la izquierda la pelota restando coordenadas
function moverIzquierda(){
  //Le indicamos que no se salga del canvas
  CoorX -= px;
  if(CoorX < 0){
  CoorX = 0;
  }
}

//Movemos hacia arriba la pelota restando coordenadas
function moverArriba(){
  CoorY -= py;
  //Le indicamos que no se salga del canvas
  if(CoorY < 0){
  CoorY = 0;
  }
}

//Movemos hacia abajo la pelota sumando coordenadas
function moverAbajo(){
  //imgPelota = this.CoorX + 5;
  CoorY += py;
  //Le indicamos que no se salga del canvas
  if(CoorY > (canvas.height - this.HEIGHT )){
  CoorY = canvas.height - this.HEIGHT
  }
}

function moverRayo() {
  //Le damos una velocidad fija al rayo y le decimos que no salga del canvas
  CoorBombaX += bx;
  CoorBombaY += by;
  if(CoorBombaX + bx > canvas.width - 90 || CoorBombaX + bx < 0) {
  //Cuando vaya a salir del canvas, le cambiamos de signo para que rebote
    bx = -bx;
  }
  if(CoorBombaY + by > canvas.height -100 || CoorBombaY + by < 0) {
    by = -by;
  }
}

  function moverCopo() {
    //Le damos una velocidad fija al copo y le decimos que no salga del canvas
    CoorZapaX += zx;
    CoorZapaY += zy;
    if(CoorZapaX + zx > canvas.width -90 || CoorZapaX + zx < 0) {
    //Cuando vaya a salir del canvas, le cambiamos de signo para que rebote
      zx = -zx;
    }
    if(CoorZapaY + zy > canvas.height -100 || CoorZapaY + zy < 0) {
      zy = -zy;
    }
  }
  
  //Método en el cual detectaremos las colisiones según las coordenadas y dimensiones de las imágenes
  function colision(){
  //Colisión para la imagen de la zapatilla
  if (CoorX < CoorZapaX + ZapaWidth &&
      CoorX + WIDTH > CoorZapaX  &&
      CoorY < CoorZapaY + ZapaHeight &&
      HEIGHT + CoorY > CoorZapaY) {

      var sonidoPerder = new Audio();
      sonidoPerder.src='music/romper.mp3';
      sonidoPerder.play();
      
      if ((CoorZapaX <= CoorX+WIDTH && CoorZapaX >= CoorX) || (CoorZapaX+ZapaWidth >= CoorX && CoorZapaX+ZapaWidth <= CoorX+WIDTH ))
        zx = -zx;
      if ((CoorZapaY <= CoorY+HEIGHT && CoorZapaY >= CoorY) || (CoorZapaY+ZapaHeight >= CoorY && CoorZapaY+ZapaHeight <= CoorY+HEIGHT ))
        zy = -zy;

        
      contadorVidas--;

      console.log("Colision");
 }
 //Colisión para la imagen de la bomba
 if(CoorX < CoorBombaX  + BombaWidth &&
  CoorX + WIDTH  > CoorBombaX  &&
  CoorY < CoorBombaY + BombaHeight &&
  HEIGHT + CoorY > CoorBombaY){

    var sonidoPerder = new Audio();
    sonidoPerder.src='music/romper.mp3';
    sonidoPerder.play();
    
    if ((CoorBombaX <= CoorX+WIDTH && CoorBombaX >= CoorX) || (CoorBombaX+BombaWidth >= CoorX && CoorBombaX+BombaWidth <= CoorX+WIDTH ))
    bx = -bx;
  if ((CoorBombaY <= CoorY+HEIGHT && CoorBombaY >= CoorY) || (CoorBombaY+BombaHeight >= CoorY && CoorBombaY+BombaHeight <= CoorY+HEIGHT ))
    by = -by;
    
  contadorVidas--;
  console.log("Colision");
 }
}


//Método el cual pintaremos el game over al finalizar el juego
function gameOver () {
    
  if(contadorVidas == 0){
    setTimeout(function(){ 
      bx = 0;
      by = 0;
      zy = 0;
      zx = 0; 
    }, 500);
    ctx.drawImage(imgGameOver,0,0);
    //location.reload();
    //window.requestAnimationFrame(gameLoop);
  }
  
}


snowCount = 0;
function snowFlakes(){
    if(snowCount > 800){
        return false
    }else{
    var randomTime = Math.floor(Math.random() * (500) * 2);
    setTimeout(function(){
        snowCount++;
        jquerysnow();
       snowFlakes();
    },randomTime);
    }
}
function jquerysnow() {

       var snow = $('<div class="snow"></div>');
        $('#snowflakes').prepend(snow);
        snowX = Math.floor(Math.random() * $('#snowflakes').width());
        snowSpd = Math.floor(Math.random() * (500) * 20);

        snow.css({'left':snowX+'px'});
    snow.html('<img src="images/gota.png" style="width: 50px;"/>');
        snow.animate({
            top: "500px",
            opacity : "0",
            

        }, 2000, function(){
            $(this).remove();
            //jquerysnow();
        });

}

snowFlakes()
