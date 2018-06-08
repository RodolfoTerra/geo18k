		<?php ?>
		<div class="container-fluid" style="padding-right: 0px !important;padding-left: 0px !important;"> 

			<div id="myCarousel" style="padding-right: 0px !important;padding-left: 0px !important;" class="carousel slide carousel-fade col-md-12" data-ride="carousel" data-interval="2500">
			  
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner img-banner">
			    <div class="item active">
			      <a href="<?php echo $idioma; ?>-<?php echo $lnkMenuSelva; ?>"><img src="../../../web/images/banner/city-<?php echo $idioma; ?>.jpg" class="img-responsive" alt="city"></a>
			    </div>

			    <div class="item">
			      <a href="<?php echo $idioma; ?>-<?php echo $lnkMenuMosc; ?>"><img src="../../../web/images/banner/del-lima-<?php echo $idioma; ?>.jpg" class="img-responsive" alt="del-lima"></a>
			    </div>

			    <div class="item">
			      <a href="<?php echo $idioma; ?>-<?php echo $lnkMenuDunas; ?>"><img src="../../../web/images/banner/dunas-<?php echo $idioma; ?>.jpg" class="img-responsive" alt="del-lima"></a>
			    </div>

			    <div class="item">
			      	<a href="<?php echo $idioma; ?>-<?php echo $lnkMenuFleur; ?>"><img src="../../../web/images/banner/fleur-<?php echo $idioma; ?>.jpg" class="img-responsive" alt="del-lima"></a>
			    </div>

			    <div class="item">
			      <a href="<?php echo $idioma; ?>-<?php echo $lnkLancamento; ?>"><img src="../../../web/images/banner/destaques-<?php echo $idioma; ?>.jpg" class="img-responsive" alt="destaques"></a>
			    </div>
			  </div>

			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>					
			
			<!-- Logo -->
			<!-- <div id="logo">
				<h1><a href="#">Linear</a></h1>
				<span class="tag">By TEMPLATED</span>
			</div> -->
		</div>

	<!-- Main -->
		<div id="main">
			<div id="content" class="container pull-center">
				<div class="col-md-12">

					<div class="grid col-md-12 pull-center">
						<h2><?php echo $titulo; ?></h2>
						<br><br>
						<div class="col-md-8 text-left">
							<form method="post" name="ajax_form" id="ajax_form">

							  <div class="form-group col-md-6">
							    <label for="nome"><?php echo $forNome; ?></label>
							    <input type="text" class="form-control" id="nome" name="nome" placeholder="<?php echo $forNome; ?>">
							  </div>

							  <div class="form-group col-md-6">
							    <label for="sobrenome"><?php echo $forSobrenome; ?></label>
							    <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="<?php echo $forSobrenome; ?>">
							  </div>

							  <div class="form-group col-md-12">
							    <label for="email"><?php echo $forEmail; ?></label>
							    <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo $forEmail; ?>">
							  </div>

							  <div class="form-group col-md-12">
							    <label for="assunto"><?php echo $forAssunto; ?></label>
							    <input type="text" class="form-control" id="assunto" name="assunto" placeholder="<?php echo $forAssunto; ?>">
							  </div>

							  <div class="form-group col-md-12">
							    <label for="textarea"><?php echo $forMensagem; ?></label>
							    <textarea class="form-control" rows="3" id="textarea" name="textarea"></textarea>
							  </div>

							  <div class="form-group col-md-12">
							  	<button type="buttom" class="button button-style1" onclick=""><?php echo $forEnviar; ?></button>
							  </div>
							</form>							
						</div>

						<div class="col-md-4">
							<!-- <img src="../../../web/images/LOGO-GEO-<?php echo $idioma; ?>.png" class="img-responsive" alt="Responsive image"> -->
							<br>
							<h3><span class="fa fa-phone"> +55 (17) 3233-8944</span></h3>
							<h3><span class="fa fa-whatsapp"> +55 (17) 9 9133-6990</span></h3>
							<h4><span class="fa fa-envelope-o"> <a href="mailto:atendimento@geo18k.com.br" target="_blank">atendimento@geo18k.com.br</a></span></h4>
						</div>
					</div>

					
				</div>
			</div>
		</div>

	<!-- Tweet -->
<!-- 		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;Palavras chave.&rdquo;</blockquote>
				</section>
			</div>
		</div>
 -->