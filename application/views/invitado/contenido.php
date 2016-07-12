<section class="main container">
		<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width:800px; height: 400px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
	        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
	            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
	            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
	        </div>
	        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 400px; overflow: hidden;">
	            <div data-p="112.50" class="figura">
	                <img data-u="image" src="<?= base_url()?>bootstrap/img/01.jpg" />
	            </div>
	            <div data-p="112.50" class="figura">
	                <img data-u="image" src="<?= base_url()?>bootstrap/img/02.jpg" />
	            </div>
	            <div data-p="112.50" class="figura">
	                <img data-u="image" src="<?= base_url()?>bootstrap/img/03.jpg" />
	            </div>
	            <div data-p="112.50" class="figura">
	                <img data-u="image" src="<?= base_url()?>bootstrap/img/04.jpg" />
	            </div>
	            <a data-u="ad" href="http://www.jssor.com" style="display:none">jQuery Slider</a>
	        
	        </div>
	        <!-- Bullet Navigator -->
	        <div data-u="navigator" class="jssorb01" style="bottom:16px;right:16px; ">
	            <div data-u="prototype" style="width:12px;height:12px;"></div>
	        </div>
	        <!-- Arrow Navigator -->
	        <span data-u="arrowleft" class="jssora05l" style="top:0px;left:8px;width:40px;height:40px;" data-autocenter="2"></span>
	        <span data-u="arrowright" class="jssora05r" style="top:0px;right:8px;width:40px;height:40px;border-radius: 15px 15px 15px 15px;" data-autocenter="2"></span>
	    </div>
	    <script>
	        jssor_1_slider_init();
	    </script>
		<div class="row">
			<section class="posts col-md-9">
				<div class="miga-de-pan">
					<ol class="breadcrumb">
						<li class="active">Inicio</li>
					</ol>
				</div>
				<article class="post clearfix">
					<a href="#" class="thumb pull-left"> <!-- le enpujamos hacia la izquierda-->
						<img class="img-thumbnail" src="<?= base_url()?>bootstrap/img/img1.jpg">
					</a>
					<h2 class="post-title">
						<a href="#">Misión</a>
					</h2>
					<p class="post-contenido text-justify">
						La Unidad Educativa PCEI Monseñor Leonidas Proaño, forma jóvenes y adultos como personas emprendedoras, bajo la filosofía de su patrono, desarrollando y potenciando destrezas y competencias mediante la aplicación de un modelo educativo andragógico y la utilización de los recursos tecnológicos de la comunicación e información actuales, para contribuir a la transformación social y económica de la provincia.
					</p>
				</article>
				<article class="post clearfix">
					<a href="#" class="thumb pull-left"> <!-- le enpujamos hacia la izquierda-->
						<img class="img-thumbnail" src="<?= base_url()?>bootstrap/img/img2.jpg">
					</a>
					<h2 class="post-title">
						<a href="#">Visión</a>
					</h2>
					<p class="post-contenido text-justify">
						Ser una institución educativa PCEI referente en la provincia de Cotopaxi y el centro del país, en la formación de jóvenes y adultos, acorde al desarrollo de la ciencia y tecnología, así como de las necesidades de desarrollo local y regional. 
					</p>
				</article>
				<article class="post clearfix">
					<a href="#" class="thumb pull-left"> <!-- le enpujamos hacia la izquierda-->
						<img class="img-thumbnail" src="<?= base_url()?>bootstrap/img/img3.jpg">
					</a>
					<h2 class="post-title">
						<a href="#">Dirección</a>
					</h2>
					<p class="post-contenido text-justify">
						Calls.
					</p>
					<p class="post-contenido text-justify">
						Latacunga - Ecuador
					</p>
				</article>		
			</section>
			<aside class="col-md-3 hidden-xs hidden-sm" id="mi-aside">
				<h4>INVESTIGACIÓN</h4>
				<div class="list-group">
					<a href="cachorros.html" class="list-group-item active">PROYECTOS</a>
					<a href="adultos.html" class="list-group-item">PUBLICACIONES</a>
				</div>
				<h4>Articulos recientes</h4>
				<a href="#" class="list-group-item">
				<h4 class="list-group-item-heading">Titulo</h4>
				<p class="list-group-item-text">Descripcion</p>
				</a>
				<a href="#" class="list-group-item">
				<h4 class="list-group-item-heading">Titulo</h4>
				<p class="list-group-item-text">Descripcion</p>
				</a>
				<a href="#" class="list-group-item">
				<h4 class="list-group-item-heading">Titulo</h4>
				<p class="list-group-item-text">Descripcion</p>
				</a>
			</aside>
		</div>
	</section>