<?php require('app/control/Controller.php'); ?>
<html>
	<head>
		<title>GEO - Jóias 18K</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="<?php echo $homeDesc; ?>" />
		<meta name="keywords" content="<?php echo $lnkMenuAneis; ?>, <?php echo $lnkMenuBrincos; ?>, <?php echo $lnkMenuConjuntos; ?>, <?php echo $lnkMenuGargantilhas; ?>, <?php echo $lnkMenuPingentes; ?>, <?php echo $lnkMenuPulseiras; ?>, <?php echo $lnkLancamento; ?>" />
<!-- 	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="web/js/skel.min.js"></script>
		<script src="web/js/init.js"></script>
 -->		

		<link rel="stylesheet" type="text/css" href="web/font-awesome/font-awesome.min.css" />
		<link rel="stylesheet" href="web/css/skel-noscript.css" />
		<link rel="stylesheet" href="web/css/style.css" />
		<link rel="stylesheet" href="web/css/style-desktop.css" />

		<link rel="stylesheet" type="text/css" href="web/imgstyle/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="web/imgstyle/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="web/imgstyle/css/set1.css" />

		<link rel="stylesheet" href="web/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="web/datatable/datatables.min.css" />

		<link rel="shortcut icon" href="web/images/favicon.png">

		<script src="web/bootstrap/jquery/jquery-3.2.0.min.js"></script>
		<script src="web/bootstrap/js/bootstrap.min.js"></script>
		<script src="web/datatable/datatables.min.js"></script>

		<script type="text/javascript">
		jQuery(document).ready(function(){
		  
			jQuery("#ajax_form").submit(function(){
				if(document.getElementById("nome").value.length > 1){
					if(document.getElementById("email").value.length > 1){
						if(document.getElementById("textarea").value.length > 1){
							
						var dados = jQuery( this ).serialize();
						document.ajax_form.reset();
						
						jQuery.ajax({
							type: "POST",
							url: "app/config/post.php",
							data: dados,
							success: function( data )
							{
								alert( data );
							}
						});
						
						}else{
				  		alert("ESCREVA SUA MENSAGEM");
				  		}
					}else{
			  		alert("ESCREVA SEU EMAIL");
			  		}
				}else{
		  		alert("ESCREVA SEU NOME");
		  		}

				return false;
			});
		});
		
		
		</script>

	</head>
	<body class="homepage">

	<!-- Header -->
		<div id="header">
			<?php require('app/view/menu.php'); ?>

		</div>
		<?php require($pagina); ?>
	<!-- Footer -->
		<?php require('app/view/footer.php'); ?>

<!-- 		<script>
			// For Demo purposes only (show hover effect on mobile devices)
			[].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
				el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
			} );
		</script>
 -->
	</body>
</html>