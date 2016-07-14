
<html>
<head>
	<meta name="author" content = "Luis Fernando Farji - www.6700.com.ar"/>
	<meta name="copyright" content = "Luis Fernando Farji - www.6700.com.ar"/>
	<meta name="description" content = "Formas de contacto"/>
	<meta name="keywords" content = "techos marcelo, goteras, tinglados, moreno, capital federal, teja, pizarra, buenos aires, techo chapa, zona oeste"/>
	
	<title>Techos Marcelo - Una buena casa necesita un buen techo</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/skins/tango/skin.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="LANGUAGE" content="es" />
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
</head>
<body>
	<div id="header">
		<div id="logowrapper">
			<div id="logosubwrapper">
				<a href="#logo" id="logo">Techos Marcelo</a>
				<div id="telefono">llamenos al (011) 5870-0201 || Nextel: 670*2054</div>
			</div>
		</div>
		<ul id="nav">
			<li><a href="index.html">Inicio</a></li>
			<li><a href="servicios.html">Servicios</a></li>
			<li><a href="obras.html">Obras</a></li>
			<li class="selected"><a href="contactenos.html">Contactenos</a></li>
			<li class="facebook"><a target="_blank" href="http://www.facebook.com/pages/techos-marcelo/213220168718355"><img src="imagenes/facebook.png" width="30"/>Facebook</a></li>
		</ul>
	</div>
	<div id="main">
		<div id="contacto">
			<?php
				if(isset($_POST['email'])) {

				// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
				$email_to = "info@techosmarcelo.com.ar";
				$email_from= "info@techosmarcelo.com.ar";
				$email_subject = "Contacto desde el sitio web";

				// Aquí se deberían validar los datos ingresados por el usuario
				if(!isset($_POST['nombre']) ||
				!isset($_POST['email']) ||
				!isset($_POST['telefono']) ||
				!isset($_POST['texto'])) {

				echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
				echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
				die();
				}

				$email_message = "Detalles del formulario de contacto:\n\n";
				$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
				$email_message .= "Responder a este E-mail: " . $_POST['email'] . "\n";
				$email_message .= "Teléfono: " . $_POST['telefono'] . "\n";
				$email_message .= "Comentarios: " . $_POST['texto'] . "\n\n";


				// Ahora se envía el e-mail usando la función mail() de PHP
				$headers = 'From: '.$email_from."\r\n".
				'Reply-To: '.$email_from."\r\n" .
				'X-Mailer: PHP/' . phpversion();
				mail($email_to, $email_subject, $email_message, $headers);

				echo "¡El formulario se ha enviado con éxito!";
				}
				?>
		</div>
		<div id="lema"><img src="imagenes/casa.gif"/>

			Nuestras diferentes formas de comunicación <br/><br/><br/>
			Para un mayor asesoramiento llamenos al (011) 5870-0201 || Nextel: 670*2054



		</div>
		<div id="servicios">
			<div id="flecha"><span>Nuestros servicios</span></div><br/><br/><br/>
			<div id="boxes">
				<div class="boxi">
					<div class="title">Colocación</div>
					<div><p>Realizamos la colocación del techo desde cero, con los mejores materiales, de madera, chapa, teja francesa, pizarras y otros modelos</p>
						<a href="colocacion.html">Ver mas</a>
					</div>
				</div>
				<div class="boxi">
					<div class="title">Reparación</div>
					<div><p>Parte de la carpeta esta rota, torcida o no tiene la calidad que se merece su techo, los cambios deben ser realizados de forma inmediata </p>
						<a href="reparacion.html">Ver mas</a>
					</div>
				</div>
				<div class="boxi">
					<div class="title">Goteras</div>
					<div><p>La aparición de Goteras y filtraciones en las paredes es debido a grietas o acumulación de material en la cubierta, pero todo eso tiene solución </p>
						<a href="goteras.html">Ver mas</a>
					</div>
				</div>
				<div class="boxi">
					<div class="title">Mantenimiento</div>
					<div><p>El mantenimiento preventivo del estado del techo evita que realicemos gastos mucho mas grandes, una vez al año le recomendamos realizarlo </p>
						<a href="mantenimiento.html">Ver mas</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">llamenos al (011) 5870-0201 || Nextel: 670*2054		<br/> © Diseño Gráfico <a href="www.6700.com.ar">www.6700.com.ar</a> 2008-2014 | All right reserved | <a href="index.html">Inicio</a> | <a href="servicios.html">Servicios</a> | <a href="obras.html">Obras</a> | <a href="contactenos.html">Contacto</a> | Design by 6700</div>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36912493-1']);
  _gaq.push(['_setDomainName', 'techosmarcelo.com.ar']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>