<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="./CSS/styles3.css" />	
	<script src="./JS/scripts.js"></script>
	<title>Goblin Explorer's Page</title>
</head>

<body>

	<?php include "header.php" ?>

	<section id="heroImage">

		<img src="./Media/Parche_goblin (10).jpg" alt="">

	</section>
	
	<section id="quienesSomos">

		<div class="contenedor">

			<div class="columnaContenido">

				<br>
				<br>
				<br>
				<br>

				<h2>Who we are</h2>
				<br>
				<h3>Just regular guys</h3>
				
				<p>Just regular people. In july 2023, we discovered the world of S.T.A.L.K.E.R. Shadow of Chernobyl. Since then, we've been obsessed with searching for different "zones". I guess that you can imagine what kind of environments we look for. The past is full of memories, dreams, nightmares, and what could be considered anomalies and cryptids.
					We're passionate about History, and ethnography, so we look for interesting places and landscapes to record, take pictures of, and bring them to you in order to offer our perspective towards the environment.</p>

				<h3>Our equipment</h3>
				
				<p>In terms of clothing, we do not have anything special, just some clothes form surplus of different armies.</p>
				<p>About our photographic equipment, we use our phones and the drone Potensic ATOM Combo 4K, from which we can take the best footage possible.</p>
				
			</div>

		</div>


	</section>

		<section id="galeria">

			<div class="contenedor">

				<div class="columnaContenido">
					
					<br>
					<br>
					<br>
					<br>

					<h2>Gallery</h2>
			
					<div class="fotoGaleria foto1"><img src="" alt=""></div>
					<div class="fotoGaleria foto2"><img src="" alt=""></div>
					<div class="fotoGaleria foto3"><img src="" alt=""></div>
					<div class="fotoGaleria foto4"><img src="" alt=""></div>
					<div class="fotoGaleria foto5"><img src="" alt=""></div>
					<div class="fotoGaleria foto6"><img src="" alt=""></div>
					<div class="fotoGaleria foto7"><img src="" alt=""></div>
					<div class="fotoGaleria foto8"><img src="" alt=""></div>
					<div class="fotoGaleria foto9"><img src="" alt=""></div>
				
				</div>

			</div>

			

		</section>

		<section id="contacto">

			<div class="contenedor">

				<div class="columnaContenido">

					<br>
					<br>
					<br>
					<br>

					<h2>Contact</h2>

					<div class="interaccionContacto"><h3>Send your message</h3></div>
					<br>
					<form action="" method="POST" class="formularioContacto">

						<div class="elementoFormularioContacto"><label for="nombreContacto">Name</label></div>
						<div class="elementoFormularioContacto"><input id="formNombre" type="text" placeholder="Name" required></div>
						<div class="elementoFormularioContacto"><label for="mailContacto">E-mail</label></div>
						<div class="elementoFormularioContacto"><input id="mailForm" type="email" placeholder="E-mail" required></div>
						<div class="elementoFormularioContacto"><label for="mensajeContacto">Message</label></div>
						<div class="elementoFormularioContacto"><textarea id="mensaje2" placeholder="Write your message" required></textarea></div>
						<div class="elementoFormularioContacto"><input type="button" class="botonContacto" onclick="modalContacto()" value="Send" required></div>
					</form>
				</div>

			</div>
			
			<div id="modalContacto">
				<div id="modalBoxContacto">
					<h1>Contact confirmation</h1>
					<p id="mensajeContacto"></p>
					<button onclick="cerrarModalBoxContacto()">Thank you</button>
				</div>

			</div>

			<div id="modalLogin">
				<div id="modalBoxLogin">
					<h1>Enter the Zone, stalker!</h1>
					<br>
					<form action="" method="POST" class="formularioContacto">

						<div class="elementoFormularioLogin"><label for="nombreLogin">Name</label></div>
						<div class="elementoFormularioLogin"><input id="formNombreLogin" type="text" placeholder="Name" required></div>
						<div class="elementoFormularioLogin"><label for="mailLogin">E-mail</label></div>
						<div class="elementoFormularioLogin"><input id="mailFormLogin" type="email" placeholder="E-mail" required></div>
						<div class="elementoFormularioLogin"><label for="passLogin">Password</label></div>
						<div class="elementoFormularioLogin"><input id="passFormLogin" type="password" placeholder="Password" required></div>
						<!-- Añadir un ¿Olvidaste tu contraseña? -->
						<div class="elementoFormularioLogin"><input type="button" class="botonLoginModal" onclick="cerrarModalLogin()" value="Login" required></div>
					</form>
					
				</div>

			</div>
			
			<div id="modalSignup">
				<div id="modalBoxSignup">
					<h1>New to the Zone, stalker?</h1>
					<br>
					<form action="" method="POST" class="formularioContacto">

						<div class="elementoFormularioLogin"><label for="nombreSignup">Name</label></div>
						<div class="elementoFormularioLogin"><input id="formNombreSignUp" type="text" placeholder="Name" required></div>
						<div class="elementoFormularioLogin"><label for="mailSignup">E-mail</label></div>
						<div class="elementoFormularioLogin"><input id="mailFormSignUp" type="email" placeholder="E-mail" required></div>
						<div class="elementoFormularioLogin"><label for="passSignup">Password</label></div>
						<div class="elementoFormularioLogin"><input id="passFormSignUp" type="password" placeholder="Password" required></div>
						<div class="elementoFormularioLogin"><label for="passSignupConfirm">Confirm your password</label></div>
						<div class="elementoFormularioLogin"><input id="passFormSignUpConfirm" type="password" placeholder="Password" required></div>
						<!-- Añadir una comprobación de contraseña en el JS -->
						<div class="elementoFormularioLogin"><input type="button" class="botonSignupModal" onclick="cerrarModalSignup()" value="Sign up" required></div>
					</form>
					
				</div>

			</div>

		</section>

	<footer id="pie">

		<div class="redes">

			<a href="https://www.twitter.com" ><img class="elementoRedes" src="./Media/tw_logo_def.png" alt="Twitter"></a>
			<a href="https://www.instagram.com" ><img class="elementoRedes" src="./Media/ig_logo_def.png" alt="Instagram"></a>
			<a href="https://www.youtube.com" ><img class="elementoRedes" src="./Media/youtube_logo_def.png" alt="YouTube"></a>

		</div>	

	</footer>

	
                
                

</body>

</html>