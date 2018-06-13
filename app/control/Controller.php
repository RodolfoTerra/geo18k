<?php

$hostname 	= $_SERVER['SERVER_NAME'];
$url 		= $_SERVER['REQUEST_URI'];
$link 		= "";

/* Inicio Tradução */
require("Translate.php");
/* Fim Tradução */

require("ControlHome.php");


$pagina = 'app/view/home/index.php';

/*Sobre-A-GEO*/
if (preg_match("/Sobre-A-GEO/", $url)){
	$link = "-Sobre-A-GEO";
	require("ControlGeo.php");
	$pagina = 'app/view/geo/index.php';
}

/*Blog*/
if (preg_match("/Blog/", $url)){
	$link = "-Blog";
	require("ControlBlog.php");
	$pagina = 'app/view/blog/index.php';
}

/*Contato*/
if (preg_match("/Contato/", $url)){
	$link = "-Contato";
	require("ControlContato.php");
	$pagina = 'app/view/geo/contato.php';
}

/*Selva-de-Pedra*/
if (preg_match("/City-Lights/", $url)){
	$link = "-City-Lights";
	require("ControlColecao.php");
	$pagina = 'app/view/colecao/index.php';

	$texto = ' <div class="item">
			      <img src="web/images/colecao/City-Lights-1.jpg" class="img-responsive" alt="del-lima">
			    </div>

			    <div class="item">
			      	<img src="web/images/colecao/City-Lights-2.jpg" class="img-responsive" alt="del-lima">
			    </div>

			    <div class="item">
			      <img src="web/images/colecao/City-Lights-3.jpg" class="img-responsive" alt="destaques">
			    </div>';

}

/*Dunas*/
if (preg_match("/Dunas/", $url)){
	$link = "-Dunas";
	require("ControlColecao.php");
	$pagina = 'app/view/colecao/index.php';

	$texto = ' <div class="item">
			      <img src="web/images/colecao/Dunas-1.jpg" class="img-responsive" alt="del-lima">
			    </div>

			    <div class="item">
			      	<img src="web/images/colecao/Dunas-2.jpg" class="img-responsive" alt="del-lima">
			    </div>';

}

/*Rio-de-Janeiro*/
if (preg_match("/Rio-de-Janeiro/", $url)){
	$link = "-Rio-de-Janeiro";
	require("ControlColecao.php");
	$pagina = 'app/view/colecao/index.php';

	$texto = ' <div class="item">
			      <img src="web/images/colecao/Rio-de-Janeiro-1.jpg" class="img-responsive" alt="del-lima">
			    </div>

			    <div class="item">
			      	<img src="web/images/colecao/Rio-de-Janeiro-2.jpg" class="img-responsive" alt="del-lima">
			    </div>

			    <div class="item">
			      <img src="web/images/colecao/Rio-de-Janeiro-3.jpg" class="img-responsive" alt="destaques">
			    </div>';

}

/*Fleur*/
if (preg_match("/Fleur/", $url)){
	$link = "-Fleur";
	require("ControlColecao.php");
	$pagina = 'app/view/colecao/index.php';

	$texto = ' <div class="item">
			      <img src="web/images/colecao/Fleur-1.jpg" class="img-responsive" alt="del-lima">
			    </div>';

}

/*Moscow*/
if (preg_match("/Moscow/", $url)){
	$link = "-Moscow";
	require("ControlColecao.php");
	$pagina = 'app/view/colecao/index.php';

	$texto = ' <div class="item">
			      <img src="web/images/colecao/Moscow-1.jpg" class="img-responsive" alt="del-lima">
			    </div>

			    <div class="item">
			      	<img src="web/images/colecao/Moscow-2.jpg" class="img-responsive" alt="del-lima">
			    </div>

			    <div class="item">
			      <img src="web/images/colecao/Moscow-3.jpg" class="img-responsive" alt="destaques">
			    </div>

			    <div class="item">
			      <img src="web/images/colecao/Moscow-5.jpg" class="img-responsive" alt="destaques">
			    </div>';

}

/*Singapura*/
if (preg_match("/Singapura/", $url)){
	$link = "-Singapura";
	require("ControlColecao.php");
	$pagina = 'app/view/colecao/index.php';

	$texto = ' <div class="item">
			      <img src="web/images/colecao/Singapura-1.jpg" class="img-responsive" alt="del-lima">
			    </div>

			    <div class="item">
			      	<img src="web/images/colecao/Singapura-2.jpg" class="img-responsive" alt="del-lima">
			    </div>

			    <div class="item">
			      <img src="web/images/colecao/Singapura-3.jpg" class="img-responsive" alt="destaques">
			    </div>

			    <div class="item">
			      <img src="web/images/colecao/Singapura-4.jpg" class="img-responsive" alt="destaques">
			    </div>';

}

/*DelLima*/
if (preg_match("/Vicenza/", $url)){
	$link = "-Vicenza";
	require("ControlColecao.php");
	$pagina = 'app/view/colecao/index.php';

	$texto = ' <div class="item">
			      	<img src="web/images/colecao/Vicenza-2.png" class="img-responsive" alt="del-lima">
			    </div>

			    <div class="item">
			      <img src="web/images/colecao/Vicenza-3.png" class="img-responsive" alt="destaques">
			    </div>

			    <div class="item">
			      <img src="web/images/colecao/Vicenza-4.png" class="img-responsive" alt="destaques">
			    </div>';

}

/*Aneis*/
if (preg_match("/Aneis/", $url)){
	$link = "-Aneis";
	$image = "Aneis";
	$pagina = 'app/view/catalogo/index.php';
}

/*Brincos*/
if (preg_match("/Brincos/", $url)){
	$link = "-Brincos";
	$image = "Brincos";
	$pagina = 'app/view/catalogo/index.php';
}

/*Conjuntos*/
if (preg_match("/Conjuntos/", $url)){
	$link = "-Conjuntos";
	$image = "Conjuntos";
	$pagina = 'app/view/catalogo/index.php';
}

/*Gargantilhas*/
if (preg_match("/Gargantilhas/", $url)){
	$link = "-Gargantilhas";
	$image = "Gargantilhas";
	$pagina = 'app/view/catalogo/index.php';
}

/*Pingentes*/
if (preg_match("/Pingentes/", $url)){
	$link = "-Pingentes";
	$image = "Pingentes";
	$pagina = 'app/view/catalogo/index.php';
}

/*Pulseiras*/
if (preg_match("/Pulseiras/", $url)){
	$link = "-Pulseiras";
	$image = "Pulseiras";
	$pagina = 'app/view/catalogo/index.php';
}

/*Lancamentos*/
if (preg_match("/Lancamentos/", $url)){
	$link = "-Lancamentos";
	$image = "Lancamentos";
	$pagina = 'app/view/catalogo/index.php';
}

