<?php require('app/config/constants.php'); ?>
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

		<link rel="stylesheet" type="text/css" href="<?php echo $local; ?>web/font-awesome/font-awesome.min.css" />
		<link rel="stylesheet" href="<?php echo $local; ?>web/css/skel-noscript.css" />
		<link rel="stylesheet" href="<?php echo $local; ?>web/css/style.css" />
		<link rel="stylesheet" href="<?php echo $local; ?>web/css/style-desktop.css" />

		<link rel="stylesheet" type="text/css" href="<?php echo $local; ?>web/imgstyle/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $local; ?>web/imgstyle/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $local; ?>web/imgstyle/css/set1.css" />

		<link rel="stylesheet" href="<?php echo $local; ?>web/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo $local; ?>web/datatable/datatables.min.css" />

		<link rel="shortcut icon" href="<?php echo $local; ?>web/images/favicon.png">

		<script
		  src="https://code.jquery.com/jquery-3.3.1.min.js"
		  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		  crossorigin="anonymous"></script>

		<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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
