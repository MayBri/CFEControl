@extends('layouts.acfe')

@section('content')


<!--=====================================
=            Homepage Banner            =
======================================-->

<section class="banner bg-1" id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-6 align-self-center about-item active">
				<!-- Contents -->
				<div class="content-block">
					<h1>Control y mantenimiento</h1>
					<h5>Gestion de equipos en necesidad de mantenimiento o correción de daños</h5>
				</div>
			</div>
			<div class="col-md-6">
				<!-- App Image -->
				<div class="image-block">
					<img class="img-fluid phone-thumb" src="acfe/images/phones/iphone-banner.png" alt="iphone-banner">
				</div>
			</div>
		</div>
	</div>
</section>

<!--===========================
=            About            =
============================-->

<section class="about section bg-2" id="about">
	<div class="container">
		<div class="row">
		<div class="col-12">
				<div class="section-title">
					<h2>Filosofía de suministro básico</h2>
				</div>
			</div>
			<div class="col-lg-6 align-self-center text-center">
				<!-- Image Content -->
				<div class="image-block">
					<img class="phone-thumb-md" src="acfe/images/verder-valores.png" alt="verder-valores" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-6 col-md-10 m-md-auto align-self-center ml-auto">
				<div class="about-block">
					<!-- About 01 -->
					<div class="about-item">
						<div class="icon">
							<i class="ti-palette"></i>
						</div>
						<div class="content">
							<h5>MISIÓN</h5>
							<p>Desarrollar actividades empresariales, económicas, industriales y comerciales generando valor económico y rentabilidad para el Estado Mexicano, procurando el mejoramiento de la productividad con sustentabilidad, en beneficio de la población y contribuir con ello al desarrollo nacional.</p>
						</div>
					</div>
					<!-- About 02 -->
					<div class="about-item active">
						<div class="icon">
							<i class="ti-panel"></i>
						</div>
						<div class="content">
							<h5>VISIÓN</h5>
							<p>Ser una de las empresas de energía líder en el sector eléctrico y energético, de las mejores en el sector eléctrico a nivel mundial, con presencia internacional, fortaleza financiera e ingresos adicionales por servicios relacionados con su capital intelectual e infraestructura física y comercial. Una empresa reconocida por su atención al cliente, competitividad, transparencia, calidad en el servicio, capacidad de su personal, vanguardia tecnológica y aplicación de criterios de desarrollo sustentable.</p>
						</div>
					</div>
					<!-- About 03 -->
					<div class="about-item">
						<div class="icon">
							<i class="ti-vector"></i>
						</div>
						<div class="content">
							<h5>AMBICIÓN</h5>
							<p>Ser una empresa de energía comprometida con sus clientes, cumpliendo su mandato de Empresa Productiva del Estado con rentabilidad atractiva y solidez financiera, sustentable y responsable con el medio ambiente.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of About  ====-->

<!--=============================================
=            Llamado a comenzar            =
==============================================-->

<section class="cta-download bg-3 overlay">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 text-center">
				<div class="image-block"><img class="phone-thumb img-fluid" src="acfe/images/inspi-tacion.png" alt="inspi-tacion"></div>
			</div>
			<div class="col-lg-7">
				<div class="content-block">
					<!-- Title -->
					<h2>Nuestra inspiración</h2>
					<!-- Desctcription -->
					<p>-Incrementar la productividad de la CFE para generar valor económico y rentabilidad al Estado Mexicano, privilegiando la seguridad del suministro eléctrico. 
						Mantener la participación mayoritaria de la empresa en la generación de energía eléctrica a nivel nacional.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<br>
<br>
<br>
<br>
<br>

@endsection

