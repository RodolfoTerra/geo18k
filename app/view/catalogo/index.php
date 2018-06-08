		<?php ?>

	<!-- Featured -->
		<div id="featured">
			<div class="container">
				<header>
					<h2><a href="<?php echo $idioma; ?>"><img src="web/images/LOGO-GEO-<?php echo $idioma; ?>.png" alt=""></a></h2>
				</header>

				<br><br>

				<div class="row">

					<div class="col-md-3">
						<div class="list-group">
						  <a href="<?php echo $idioma; ?>-<?php echo $lnkLancamento; ?>" class="list-group-item text-left <?php if($image === $lnkLancamento) { echo "ativo"; } ?>"><h4><?php echo $menuLancamento; ?></h4></a>
						  <a href="<?php echo $idioma; ?>-<?php echo $lnkMenuAneis; ?>" class="list-group-item text-left <?php if($image === $lnkMenuAneis) { echo "ativo"; } ?>"><h4><?php echo $subMenuAneis; ?></h4></a>
						  <a href="<?php echo $idioma; ?>-<?php echo $lnkMenuBrincos; ?>" class="list-group-item text-left <?php if($image === $lnkMenuBrincos) { echo "ativo"; } ?>"><h4><?php echo $subMenuBrincos; ?></h4></a>
						  <a href="<?php echo $idioma; ?>-<?php echo $lnkMenuConjuntos; ?>" class="list-group-item text-left <?php if($image === $lnkMenuConjuntos) { echo "ativo"; } ?>"><h4><?php echo $subMenuConjuntos; ?></h4></a>
						  <a href="<?php echo $idioma; ?>-<?php echo $lnkMenuGargantilhas; ?>" class="list-group-item text-left <?php if($image === $lnkMenuGargantilhas) { echo "ativo"; } ?>"><h4><?php echo $subMenuGargantilhas; ?></h4></a>
						  <a href="<?php echo $idioma; ?>-<?php echo $lnkMenuPingentes; ?>" class="list-group-item text-left <?php if($image === $lnkMenuPingentes) { echo "ativo"; } ?>"><h4><?php echo $subMenuPingentes; ?></h4></a>
						  <a href="<?php echo $idioma; ?>-<?php echo $lnkMenuPulseiras; ?>" class="list-group-item text-left <?php if($image === $lnkMenuPulseiras) { echo "ativo"; } ?>"><h4><?php echo $subMenuPulseiras; ?></h4></a>
						</div>
					</div>

					<div class="col-md-1"></div>

					<div class="col-md-8 text-left">
						<table id="example" class="" cellspacing="0" width="100%">
					        <thead>
					            <tr>
					                <th class="col-md-4"></th>
					                <th class="col-md-4"></th>
					                <th class="col-md-4"></th>
					            </tr>
					        </thead>
							
							<tbody class="text-center">
								<?php require($image.".php"); ?>
					        </tbody>

						</table>
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

 <script>
	$(document).ready(function() {
    $('#example').DataTable( {
        "dom": '<"top"iflp<"clear">>rt<"bottom"iflp<"clear">>'
    } );
    });
</script>

