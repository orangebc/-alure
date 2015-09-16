<!DOCTYPE html>
<html lang="es">
	<head>
 		<?php include("html/head.php"); ?>
	</head>
	<body>
	
	<!-- Header -->

	<header class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-12">
					<div class="header__logo">
						<img src="images/alurelogoland.png" alt="Alure Nueva York">
					</div>
				</div>
				<div class="col-lg-10 col-md-10 col-sm-12">
					<div class="header__block col-lg-4 col-md-4 col-sm-4 no-space">
						<span class="header__content">01 (55) 55 59 27 00</span>
					</div>
					<div class="header__block col-lg-4 col-md-4 col-sm-4 no-space">
						<span class="header__content">roxana@ideasinmobiliarias.com</span>
					</div>
					<div class="header__block col-lg-4 col-md-4 col-sm-4 no-space">
						<button class="header__button" id="formToggle">Recibir más información</button>
					</div>
				</div>				
			</div>
		</div>
	</header>


	<!-- Main -->
	
	<main class="main">
		<form id="mainForm" class="main__form text-center" action="php/send.php" method="post">
			<div class="form-group">
   				<label for="nombre">Nombre</label>
    			<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Su nombre" autofocus required>
    		</div>
    		<div class="form-group">
   				<label for="apellidos">Apellidos</label>
    			<input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" required>
  			</div>
  			<div class="form-group">
  				<label for="email">Mail</label>
    			<input type="email" class="form-control" id="email" name="email" placeholder="correo@dominio.com" required>
  			</div>
  			<div class="form-group">
  				<label for="celular">Celular</label>
    			<input type="tel" class="form-control" id="celular" name="celular" minlength="10" maxlength="10" placeholder="Teléfono a 10 digitos" required>
  			</div>		
    		<input type="submit" name="submit" class="btn btn-default main__btn" value="Recibir información">

    		<h6 class="main__close" id="mainClose">X Cerrar</h6>
		</form>
	</main> 

	<!-- Smart living -->

	<section class="smartLiving">
		<div class="container-fluid no-space">
			<div class="col-lg-4 col-md-12 no-space">
				<div class="smartLiving__content text-center">
					<h2 class="generic__title">Smart Living</h2>
					<h5 class="generic__subtitle">Un estilo de vida para ti</h5>
					<hr class="generic__separator">

					<p class="generic__content text-justify">Alure Nueva York ofrece mejorar la calidad de vida a quien lo habita, pues tiene servicios excepcionales, una ubicación estratégica y una plusvalía asegurada.Alure Nueva York es el único desarrollo en la zona con el sistema de estacionamiento Robot Parking, que permite gozar de más tiempo a quien habita en Alure, ya sea para nadar, realizar ejercicio en el gym, relajarse en el sauna o simplemente disfrutar un rato en el roof garden.</p>
				</div>
			</div>
			<div class="col-lg-8 col-md-12 no-space">
				<div class="smartLiving__image">
					<img src="images/bgalureinicio.jpg" alt="Alure Smart Living" class="generic__image">
				</div>
			</div>
		</div>
	</section>

	<!-- Exceptionals -->

	<section class="exceptionals">
		<div class="container-fluid no-space">

			<h2 class="generic__title">Espacios Excepcionales</h2>
			<hr class="generic__separator">

			<div class="col-lg-4 col-md-4 col-sm-6 no-space">
				<a href="images/e1.jpg"><img src="images/espacioad1.jpg" alt="Espacio 1" class="generic__image"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 no-space">
				<a href="images/e2.jpg"><img src="images/espacioad2.jpg" alt="Espacio 2" class="generic__image"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 no-space">
				<a href="images/e3.jpg"><img src="images/espacioad3.jpg" alt="Espacio 3" class="generic__image"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 no-space">
				<a href="images/e4.jpg"><img src="images/espacioad4.jpg" alt="Espacio 4" class="generic__image"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 no-space">
				<a href="images/e5.jpg"><img src="images/espacioad5.jpg" alt="Espacio 5" class="generic__image"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 no-space">
				<a href="images/e6.jpg"><img src="images/espacioad6.jpg" alt="Espacio 6" class="generic__image"></a>
			</div>
		</div>
	</section>

	<!-- Amenities -->
	
	<h2 class="generic__title">Amenities</h2>
	<hr class="generic__separator" style="margin-bottom: 5em; margin-top: 2em;">

	<section class="amenities">
		<div class="container-fluid no-space">
			<div class="col-lg-3 col-md-3 col-sm-6 no-space">
				<figure class="amenities__image">
					<img src="images/amenidad1.jpg" class="generic__image" alt="Alberca">
					<figcaption>Alberca</figcaption>
				</figure>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 no-space">
				<figure class="amenities__image">
					<img src="images/amenidad2.jpg" class="generic__image" alt="Snack bar">
					<figcaption>Snack Bar</figcaption>
				</figure>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 no-space">
				<figure class="amenities__image">
					<img src="images/amenidad3.jpg" class="generic__image" alt="Asoleadero">
					<figcaption>Asoleadero</figcaption>
				</figure>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 no-space">
				<figure class="amenities__image">
					<img src="images/amenidad4.jpg" class="generic__image" alt="Robot Parking">
					<figcaption>Robot Parking</figcaption>
				</figure>
			</div>
			
			<div class="col-lg-4 col-md-4 no-space">
				<div class="amenities__ny">
					<div class="amenities__ny--logo">
						<img src="images/alureapartments.png" alt="Alure Nueva York">
					</div>
					<hr class="generic__separator--white">
					<p class="generic__content--white">Es un desarrollo residencial con excelentes acabados, amenidades y arquitectura vanguardista,ubicado en la Colonia Nápoles, zona privilegiada en la Ciudad de México, con vías rápidas que permiten el acceso hacia Polanco, Reforma, Condesa, Aeropuerto de la Cd. de México y Zona Sur.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 no-space">
				<img src="images/alurefachada.jpg" alt="Fachada" class="generic__image">
			</div>
			<div class="col-lg-4 col-md-4 no-space">
				<div class="amenities__apartments">
					<h2 class="generic__title--white">Apartments</h2>
					<h6 class="generic__subtitle--white">Características</h6>
					<hr class="generic__separator--white">
					<p class="generic__content--white">Consta de 8 niveles habitacionales y 4 de estacionamiento. 4 departamentos por nivel cada uno con balcón y/o terraza. Departamentos desde 62 m2 hasta 87 m2 habitables, con 1 o 2 recámaras.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Apartments -->

	<section class="apartments text-center">
		<div class="container-fluid">
			<div class="col-lg-4 col-md-4">
				<h3 class="apartments__title">Departamento <br> Tipo 1</h3>
				<a href="images/t1.jpg"><img src="images/tipo1.jpg" class="generic__image" alt="Departamento tipo 1"></a>
			</div>
			<div class="col-lg-4 col-md-4">
				<h3 class="apartments__title">Departamento <br> Tipo 2</h3>
				<a href="images/t2.jpg"><img src="images/tipo2.jpg" class="generic__image" alt="Departamento tipo 2"></a>
			</div>
			<div class="col-lg-4 col-md-4">
				<h3 class="apartments__title">Departamento <br> Tipo 3</h3>
				<a href="images/t3.jpg"><img src="images/tipo3.jpg" class="generic__image" alt="Departamento tipo 3"></a>
			</div>
		</div>
		<div class="text-center">
			<hr class="generic__separator">
			<p class="generic__content">Nueva York #290 Col. Nápoles México. <br>
			Distrito Federal. <br>
			<strong>TEL: 01 (55) 55 59 27 00</strong></p>
		</div>
	</section>

	<!-- Location -->
	<div class="container-fluid">
		<div class="map" id="map"></div>	
	</div>

	<!-- Logos -->
	<div class="logos">
		<div class="container">
			<ul class="col-xs-12 list-inline text-center">
				<li><img src="images/zkclogo.png" alt="ZKC"></li>
				<li><img src="images/alurelogo.png" alt="Alure"></li>
				<li><img src="images/ideaslogo.png" alt="Ideas Inmobiliarias"></li>
			</ul>
		</div>
	</div>

	<!-- Footer -->
	<footer class="footer">
		<div class="container text-center">
			<p class="footer__info">Los precios pueden variar sin previo aviso.</p>
			<span class="footer__privacy" id="privacy">Aviso de Privacidad</span>
			<p class="generic__info text-justify" id="privacyToggled">INMOIDEAS, S.A. DE C.V., con domicilio en MORAS 409, COL. DEL VALLE, DELEGACION BENITO JUAREZ, MÉXICO D.F. C.P.03100. EN PUEBLA (222) 169-17-18 VIA AXTLIXCAYOTL #5208, COL. TLAXCALCINGO (RESERVA TERRITORIAL ANGELOPOLIS), SAN ANDRES CHOLULA, PUEBLA, es responsable de recabar sus datos personales, del uso que se le dé a los mismos y de su protección. Su información personal será utilizada para proveer los servicios y productos que ha solicitado, informarle sobre cambios en los mismos y evaluar la calidad del servicio que le brindamos. Para las finalidades antes mencionadas, requerimos obtener los siguientes datos personales: Nombre completo, dirección, email y teléfonos, considerado como sensible según la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, su dirección y teléfonos. Usted tiene derecho de acceder, rectificar y cancelar sus datos personales, así como de oponerse al tratamiento de los mismos o revocar el consentimiento que para tal fin nos haya otorgado, a través de los procedimientos que hemos implementado. Para conocer dichos procedimientos, los requisitos y plazos, se puede poner en contacto con nuestro departamento de datos personales en MEXICO D.F. (55) 5559-27-00 MORAS 409, COL. DEL VALLE, DELEGACION BENITO JUAREZ, MÉXICO D.F. C.P.03100 PUEBLA (222) 169-17-18 VIA AXTLIXCAYOTL #5208, COL. TLAXCALCINGO (RESERVA TERRITORIAL ANGELOPOLIS), SAN ANDRES CHOLULA, PUEBLA. CONTACTO VIA E-MAIL: protecciondedatos@ideasinmobiliarias.com o visitar nuestra página de Internet www.ideasinmobiliarias.mx Asimismo, le informamos que sus datos personales pueden ser transferidos y tratados dentro y fuera del país, por personas distintas a esta empresa. En ese sentido, su información puede ser compartida con otras agencias inmobiliarias pertenecientes a la Asociación Mexicana de Profesionales Inmobiliarios, A.C., para la oferta de bienes inmuebles. Si usted no manifiesta su oposición para que sus datos personales sean transferidos, se entenderá que ha otorgado su consentimiento para ello. No consiento que mis datos personales sean transferidos en los términos que señala el presente aviso de privacidad. Si usted desea dejar de recibir mensajes promocionales de nuestra parte puede solicitarlo a través de los teléfonos en MEXICO D.F. (55) 5559-27-00, en PUEBLA (222) 169-17-18, o bien al correo electrónico protecciondedatos@ideasinmobiliarias.com . Cualquier modificación a este aviso de privacidad podrá consultarla en www.ideasinmobiliarias.mx Actualización al 01/01/2015</p>
		</div>
	</footer>
	<?php include("php/tracking.php");?>
	<!-- -->
 	<?php include("html/bottom.php"); ?>

	</body>
</html>