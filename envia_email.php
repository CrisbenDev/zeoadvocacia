<?php
	
	if (!$sock = @fsockopen('www.google.com', 80, $num, $error, 5)) {
		header('location: index.php?id=3');
	}else {
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$fone = $_POST['telefone'];
		$assunto = $_POST['assunto'];
		$msg = $_POST['mensagem'];

		$para = "adm@cristianbenites.esy.es";
		$title_assunto = "Contato pelo Site";


		$corpo = "<strong>Mensagem de Contato</strong><br><br>";
		$corpo .= "<strong>Nome: </strong>".$nome."<br>";
		$corpo .= "<strong>Email: </strong>".$email."<br>";
		$corpo .= "<strong>Telefone: </strong>".$fone."<br>";
		$corpo .= "<strong>Assunto: </strong>".$assunto."<br>";
		$corpo .= "<strong>Mensagem: </strong><br>".$msg."<br>";

		$header = "Content-Type: text/html; charset= utf-8\n";
		$header .= "From: ".$email." Reply-to: ".$email."\n";
		

		$result = mail($para,$title_assunto,$corpo,$header);

		if($result==1){
			header('location: index.php?id=1');
		}else{
			header('location: index.php?id=2');
		}
	}
?>