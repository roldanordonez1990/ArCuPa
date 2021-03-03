<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include("includes/MetaTags.php");?>
</head>

<body class="fondoPrincipal">
    <div class="container-fluid p-0">

        <?php include("includes/header.php");?>
        <?php include("includes/navbar.php");?>


        <main class="container">
        <div class="titulosPrincipal text-center p-3">
                    <h1>Videos</h1>
            
			
			<div class="d-flex justify-content-center">
				<div id="video-container" class="embed-responsive embed-responsive-16by9 w-75">
					<video id="video" class="embed-resposive-item">
					<source src="../media/videos/1.mp4" type="video/mp4">
					<p>
						Your browser doesn't support HTML5 video.
						<a href="videos/mikethefrog.mp4">Download</a> the video instead.
					</p>
					</video>
					<div id="video-controls" class="embed-resposive-item container">
						<label hidden for="play-pause" class="visuallyhidden">Play</label>
						<button type="button" id="play-pause" onclick="myFunction(this)" class="fas fa-play" class="play"><span hidden class=”sr-only”>Play</span></button>
						<label hidden for="seek-bar" class="visuallyhidden">Play</label>
						<input type="range" id="seek-bar" value="0" for="seek-bar">
						<button type="button"onclick="sound(this)" for="mute" class="fas fa-volume-up" id="mute" alt="volumen"><span hidden class=”sr-only”>Volumen</span></button>
						<label hidden for="volume-bar" class="visuallyhidden">Volumen-bar</label>
						<input type="range" id="volume-bar" min="0" max="1" step="0.1" value="1">
						<button type="button" id="full-screen" class="fas fa-expand"><span hidden class=”sr-only”>Pantalla completa</span></button>
					</div>
				</div>
		
			</div>
	    </div>
        </main>

        

    </div>




	<script>
		window.onload = function() {
			// Video
			var video = document.getElementById("video");

			// Buttons
			var playButton = document.getElementById("play-pause");
			var muteButton = document.getElementById("mute");
			var fullScreenButton = document.getElementById("full-screen");

			// Sliders
			var seekBar = document.getElementById("seek-bar");
			var volumeBar = document.getElementById("volume-bar");


			// Event listener for the play/pause button
			playButton.addEventListener("click", function() {
				if (video.paused == true) {
					// Play the video
					video.play();


				
					
				} else {
					// Pause the video
					video.pause();


			
				}
			});


			// Event listener for the mute button
			muteButton.addEventListener("click", function() {
				if (video.muted == false) {
					// Mute the video
					video.muted = true;

					
				} else {
					// Unmute the video
					video.muted = false;

					
				}
			});


			// Event listener for the full-screen button
			fullScreenButton.addEventListener("click", function() {
				if (video.requestFullscreen) {
					video.requestFullscreen();
				} else if (video.mozRequestFullScreen) {
					video.mozRequestFullScreen(); // Firefox
				} else if (video.webkitRequestFullscreen) {
					video.webkitRequestFullscreen(); // Chrome and Safari
				}
			});


			// Event listener for the seek bar
			seekBar.addEventListener("change", function() {
				// Calculate the new time
				var time = video.duration * (seekBar.value / 100);

				// Update the video time
				video.currentTime = time;
			});


			// Update the seek bar as the video plays
			video.addEventListener("timeupdate", function() {
				// Calculate the slider value
				var value = (100 / video.duration) * video.currentTime;

				// Update the slider value
				seekBar.value = value;
			});

			// Pause the video when the seek handle is being dragged
			seekBar.addEventListener("mousedown", function() {
				video.pause();
			});

			// Play the video when the seek handle is dropped
			seekBar.addEventListener("mouseup", function() {
				video.play();
			});

			// Event listener for the volume bar
			volumeBar.addEventListener("change", function() {
				// Update the video volume
				video.volume = volumeBar.value;
			});
			}


			function myFunction(x) {
				
				if (video.paused == true) {
				 x.classList.replace("fa-pause","fa-play");
				}else{
					x.classList.replace("fa-play","fa-pause");
				}
				
			}


			function sound(x) {
				
				if(video.muted == false){
					x.classList.replace("fa-volume-off","fa-volume-up");
				}else{
					x.classList.replace("fa-volume-up","fa-volume-off");
				}
				
			}
	</script>

	
<?php include("includes/footer.php");?>
</body>

</html>