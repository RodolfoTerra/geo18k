<?php

$data = date('d/m/Y');


$nome = $_POST[nome]; 
$sobrenome = $_POST[sobrenome]; 
$assunto = $_POST[assunto];
$cemail = $_POST[email];

if($idioma === "pt"){
	$descricao="Obrigado pelo contato, embreve um de nossos <br>consultores responderá a sua solicitação.";
}

if($idioma === "en"){
	$descricao="Thank you for contacting us, Embrace one of our <br>consultants will respond to your request.";
}

if($idioma === "es"){
	$descricao="Gracias por el contacto, embre uno de nuestros <br>consultores responder a su solicitud.";
}


if ($cemail <> ""){
	$seuemail = "atendimento@geo18k.com.br";

	$mensagem = nl2br($_POST[textarea]);

	$mensagem = "
	Data: $data<p>

	(http://www.geo18k.com.br)<p>

	$assunto<p>

	Nome: <b>$nome $sobrenome</b><br>
	Email: $cemail<br><br>
	Mensagem: $mensagem<p>
	";

	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=utf-8\r\n"; 
	$headers .= "From: $cemail \r\n"; 

	$enviar = mail($seuemail, $assunto, $mensagem, $headers); 

	//Segundo email 

	$seuemail2 = $cemail;

	$mensagem2 = nl2br($_POST[textarea]);
	$link = "http://www.geo18k.com.br";
	$mensagem2 = "
	<br>
	Olá <b>$nome $sobrenome</b>,<br><br>

	$descricao
	<br><br>
	Atenciosamente,<br>
	GEO 18k<br>
	<a href='$link'>www.geo18k.com.br</a>
	";

	$headers2 = "MIME-Version: 1.0\r\n"; 
	$headers2 .= "Content-type: text/html; charset=utf-8\r\n"; 
	$headers2 .= "From: $seuemail \r\n"; 

	$enviar2 = mail($seuemail2, $assunto, $mensagem2, $headers2); 

	//Verifica se o e-mail foi entregue com sucesso 
	if($enviar) {
		echo "<script>slert('ENVADO COM SUCESSO');</script>";
	}else{
		echo "<script>slert('NÃO FOI POSSÍVEL ENVIAR, TENTE NOVAMENTE');</script>";
	}

}

?>