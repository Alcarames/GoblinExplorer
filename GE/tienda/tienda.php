<?php ?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <link rel="stylesheet" href="../CSS/styles3.css">
        <title>Goblin Explorer's Shop</title>
		<script src="../JS/scripts.js"></script>
    </head>

    <body>
        
        <?php include "header_tienda.php" ?>

        <section id="buyingPolicy">

            <div class="contenedor">

                <div class="columnaContenido">

                    <br>
                    <br>
                    <br>
                    <br>

                    <h2>Buying policy</h2>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla imperdiet arcu elit, nec pretium felis ornare eget. Phasellus pharetra hendrerit bibendum. Fusce fermentum lacus blandit efficitur fringilla. Vivamus fermentum finibus ligula, elementum imperdiet quam tincidunt non. Donec sit amet felis et lorem viverra mollis. Donec aliquam turpis in sodales tincidunt. Mauris sollicitudin varius mattis. Etiam in fermentum ligula. Nulla congue felis vulputate eros ultrices vestibulum eu vitae velit. Etiam tempor, neque euismod tristique tincidunt, risus lacus vehicula ex, et aliquet ante leo vel risus. Donec tincidunt diam massa, quis rhoncus orci imperdiet quis. Nam aliquet elementum placerat. Nullam eu lectus luctus sapien vestibulum consectetur vel et odio.</p>

					<p>Donec in porttitor lorem, vitae pellentesque orci. Donec at dolor vitae lorem fringilla accumsan. Praesent in laoreet urna. Vestibulum bibendum lacinia lacus, imperdiet dapibus nulla. Curabitur ut felis condimentum, aliquam nibh maximus, pharetra tellus. In vestibulum nulla sed nunc pharetra, at dapibus velit venenatis. Aenean vitae tortor tellus. Aliquam et laoreet mi. Aenean sed ligula laoreet, porttitor eros eget, faucibus urna. Quisque quis leo eget dui aliquet consequat. Etiam quis ligula sodales, molestie tortor in, luctus lorem.</p>

					<p>Nam maximus nibh enim, sed aliquam mauris consectetur sed. Ut sollicitudin nisi nec rhoncus pharetra. Nullam maximus justo nec dignissim ullamcorper. Fusce lorem nisl, bibendum blandit egestas quis, facilisis a arcu. Cras at ultrices tellus, et fermentum lacus. Quisque mattis tellus in magna gravida pretium. Nullam maximus ante ut massa sodales, a fermentum libero faucibus. Praesent ac rutrum eros. Etiam eget sodales nisi. Fusce vitae tellus sed tortor cursus semper eu nec purus.</p>

					<p>Morbi sollicitudin fringilla diam, eu facilisis turpis placerat vitae. Duis aliquet leo sed odio posuere pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Curabitur sit amet est sit amet leo tincidunt condimentum. Praesent maximus justo ac sem pharetra, ut fermentum quam tincidunt. Aenean quis rhoncus tellus, posuere vehicula diam. Aliquam mattis vestibulum dui, ac hendrerit tellus pretium rhoncus. Pellentesque ut mauris mauris.</p>

					<p>Donec condimentum sapien at nulla blandit posuere. Donec viverra enim id dui posuere mollis. Donec eget rutrum neque, faucibus mattis orci. Pellentesque ut posuere diam. Praesent eu neque libero. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent dapibus ligula ultrices sapien dapibus vulputate. Donec imperdiet turpis vel libero iaculis, sit amet sollicitudin nisi iaculis.</p>
                
					<p>In case you have any doubts, you can contact us directly from <a href="#contactoTienda">link</a></p>
				
				</div>

            </div>


        </section>

		<section id="products">

				<div class="contenedor">

					<div class="columnaContenido">
						
						<br>
						<br>
						<br>
						<br>

						<h2>Products</h2>
				
						<div class="fotoTienda"></div>
						<div class="fotoTienda"></div>
						<div class="fotoTienda"></div>
						<div class="fotoTienda"></div>
						<div class="fotoTienda"></div>
						<div class="fotoTienda"></div>
						<div class="fotoTienda"></div>
						<div class="fotoTienda"></div>
						<div class="fotoTienda"></div>
					
					</div>
					

				</div>

			</section>

			<section id="contactoTienda">

				<div class="contenedor">

					<div class="columnaContenido">

						<br>
						<br>
						<br>
						<br>

						<h2>Shop's Contact</h2>

						<div class="interaccionContacto"><h3>Send your message</h3></div>
						<form action="" method="POST" class="formularioContacto">

							<div class="elementoFormularioContacto"><label for="nombreContacto">Name</label></div>
							<div class="elementoFormularioContacto"><input type="text" placeholder="Name" required></div>
							<div class="elementoFormularioContacto"><label for="mailContacto">E-mail</label></div>
							<div class="elementoFormularioContacto"><input type="email" placeholder="E-mail" required></div>
							<div class="elementoFormularioContacto"><label for="mensajeContacto">Message</label></div>
							<div class="elementoFormularioContacto"><textarea placeholder="Write your message" required></textarea></div>
							<div class="elementoFormularioContacto"><input type="button" class="botonContacto" onclick="modalContacto()" value="Send" required></div>
						</form>
					</div>

				</div>
				

			</section>

		</body>

	</html>