var game = (function () {

    // Variables globales relacionadas con los elementos html e imágenes a cargar
    var canvas,
        ctx,
        imgFondo, // Imagen del background del juego
        imgCargadas = 0, // Control de la cantidad de imágenes cargadas
        imgAvion, // Imagen del avion
        imgNube, // Imagen de nube
        imgGameOver, //Imagen game over
        terminar = new Boolean(false),
        puntos = 0,
        WIDTH = 150,
        HEIGHT = 100,
        AVIONWIDTH = 150,
        AVIONHEIGHT = 100;

    //Declaramos array de obstaculos
    var obst = [];
    var lastRandomValue, exampleArray = [-84, -56, -28, 0, 28, 56, 84, 112, 140, 168, 196, 224, 252, 280, 308, 336, 364, 392, 420, 448, 476, 504, 532, 560];

    //Coordenadas iniciales
    var CoorX = 350;
    var CoorY = 0;

    var dificultad = -1;
    var contador = 0;
    var total;

    window.onload = init;



    /**
     * Función de inicialización del juego. Esta es la función principal, la que se llama desde el código html.
     * Se encarga de inicializar las variables globales necesarias para el juego
     */
    function init() {
        // Lo primero es comenzar a cargar las imágenes
        preloadImages();



        // Obtención del elemento html con id = "canvas". Puedes mirar el código html para entender mejor esto
        canvas = document.getElementById('canvas');
        // Necesitamos el contexto del canvas, para poderlo utilizar como "brocha", gracias a este elemento podremos
        // asignar colores y pintar primitivas, imágenes, textos, etc.
        ctx = canvas.getContext("2d");

        // Empezamos el primer frame
        gameLoop();

        
    }


    function drawScore() {
        ctx.font = "20px Arial";
        ctx.fillStyle = "#000000";
        ctx.fillText("Puntos: "+puntos, 8, 20);
    }

    function finish() {
        console.log("Finish");
    }

    function gameLoop(timeStamp) {
        paintEscena();
        getTransitoryItems();
        drawScore();



        window.requestAnimationFrame(gameLoop);
    }
    
    //Creamos una clase para los obstaculos
    class Obstaculo {
        constructor() {
            this.x = canvas.width;
            this.y = this.getRandomY();
            this.vx = this.getVelocidad();
            this.imgSprite = imgNube;
        }

        getVelocidad(){
           
            total = dificultad + contador;

            return total;
            
        }

        getRandomY() {
            for (var i = 0, len = 1; i < len; i++) {
                return getRandomFromArrayNotRepeated(exampleArray);
            }
        }
        mover() {
            if (terminar == false) {
                this.x += this.vx;
            }
        }
        paint() {
            
            ctx.drawImage(this.imgSprite, this.x, this.y, AVIONWIDTH, AVIONHEIGHT);
            

        }
        eliminar() {
            if (this.x < 0) {
                obst.shift();
                puntos += 1;   
                contador += -0.03;
                console.log(total);
            }
        }

        getCollisions() {
            for (let i = 0; i < obst.length; i++) {

                if (CoorX > this.x + 50) {

                } else {
                    if (CoorX + WIDTH < this.x) {

                    } else {
                        if (CoorY > this.y + 50) {

                        } else {
                            if (CoorY + 50 < this.y) {

                            } else {
                                terminar = true;
                                window.onload = finish;
                                ctx.clearRect(0, 0, 900, 900);
                                ctx.drawImage(imgFondo, 0, 0, 899, 560);
                                ctx.drawImage(imgGameOver, 0, 0, 899, 560);


                            }
                        }
                    }
                }
            }
        }

    }

    function getTransitoryItems() {

        if (Math.random() < 0.01) {
            obst.push(new Obstaculo())

        }

        if(obst.length == null){
            obst.push(new Obstaculo())
        }
    }

    function bucleobs() {
        for (let i = 0; i < obst.length; i++) {
            obst[i].mover();
            obst[i].paint();
            obst[i].getCollisions();
            obst[i].eliminar();
        }
    }


    function getRandomFromArrayNotRepeated(array) {
        var item = array[Math.floor(Math.random() * array.length)];
        if (lastRandomValue === item && array.length > 1) {
            return getRandomFromArrayNotRepeated(array, item);
        }
        return lastRandomValue = item;
    }




    /**
     * A través de este método conseguiremos precargar las imágenes. Este proceso en JS no es síncrono, por tanto necesitamos implementar
     * una especie de disparador. Cada vez que una imagen se carge (lo controlaremos por la ejecución de la función "addEventListener")
     * se aumentará en 1 la cantidad de imágenes cargadas y se llamará a la función que pinta la escena.
     */
    function preloadImages() {
        // Carga de la imagen del fondo del juego
        imgFondo = new Image();
        imgFondo.src = 'images/fondo.jpg';
        imgFondo.addEventListener('load', function () {
            // Este trozo de código se ejecutará de manera asíncrona cuando la imagen se haya realmente cargado.
            imgCargadas++;
            paintEscena();
        }, false);

        // Carga de la imagen del fin de juego
        imgGameOver = new Image();
        imgGameOver.src = 'images/gameOver.png';
        imgGameOver.addEventListener('load', function () {
            imgCargadas++;
            paintEscena();
        }, false);

        // Carga de la imagen del avion
        imgAvion = new Image();
        imgAvion.src = 'images/avion.png';
        imgAvion.addEventListener('load', function () {
            imgCargadas++;
            paintEscena();
        }, false);



        document.addEventListener("keydown", function (event) {

            if (event.keyCode == 39) {
                console.log("Has pulsado la derecha");
                moverDerecha();
                paintEscena();
            }
            if (event.keyCode == 37) {
                console.log("Has pulsado la izquierda");
                moverIzquierda();
                paintEscena();
            }
            if (event.keyCode == 38) {
                console.log("Has pulsado la arriba");
                moverArriba();
                paintEscena();
            }
            if (event.keyCode == 40) {
                console.log("Has pulsado la abajo");
                moverAbajo();
                paintEscena();
            }
        });

        // Carga de la imagen del fondo de nube
        imgNube = new Image();
        imgNube.src = 'images/nube.png';
        imgNube.addEventListener('load', function () {
            imgCargadas++;
            paintEscena();
        }, false);
    }




    /**
     * Función principal para pintar la escena, esta función puede tardar un poco en realizar el pintado, por lo que hemos
     * retrasado la llamada al siguiente método "interactua()" unos 100 milisegundos. Ten en cuenta que esa forma de hacer
     * "delay" es asíncrona. Todo el juego es un bucle entre las funciones "paintEscena" e "interactua". Las dos funciones 
     * continuamente se llaman entre sí, creando un "bucle".
     */
    function paintEscena() {
        // Sólo pasamos a pintar la escena si nos aseguramos de que las dos imágenes han sido cargadas correctamente.
        if (imgCargadas == 4) {
            // Pintamos el fondo, el personaje, los caracteres adivinados y los fallos comentidos por el usuario. Cada cosa en su función
            paintFondo();
            //Para ir aumentando la dificultad
        }
    }


    /**
     * Pintamos las imagenes que componen al juego
    **/
    function paintFondo() {
        // Pinto el fondo de la escena
        ctx.drawImage(imgFondo, 0, 0, 899, 560);
        ctx.drawImage(imgAvion, CoorX, CoorY, WIDTH, HEIGHT);
        bucleobs();


    }



    function moverDerecha() {
        if (terminar == false) {
            
            CoorX = CoorX + 28;

            ctx.clearRect(CoorX - 28, CoorY, CoorX + WIDTH, CoorY + HEIGHT);


            if (CoorX > (canvas.width - this.WIDTH)) {
                CoorX = canvas.width - this.WIDTH
            }

            if(CoorX >= 770){
                CoorX = 770;
            }


        }

    }

    function moverIzquierda() {
        if (terminar == false) {
            
            CoorX = CoorX - 28;
            ctx.clearRect(CoorX + 28, CoorY, CoorX + WIDTH, CoorY + HEIGHT);
        }

        if(CoorX <= 0){
            CoorX = 0;
        }
        

    }

    function moverArriba() {
        if (terminar == false) {
            
            CoorY = CoorY - 28;
            ctx.clearRect(CoorX, CoorY + 28, CoorX + WIDTH, CoorY + HEIGHT);
            if (CoorY < 0) {
                CoorY = canvas.height;
            }
        }
    }

    function moverAbajo() {
        if (terminar == false) {
        
            CoorY = CoorY + 28;
            ctx.clearRect(CoorX, CoorY - 28, CoorX + WIDTH, CoorY + HEIGHT);

            if (CoorY > (canvas.height)) {
                CoorY = 0;
            }
        }
    }


    /**
     * Método devuelto por el objeto
     */
    return {
        init: init

    }
})();