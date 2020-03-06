<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Cristian Benites">
	<title>Zerbino & Ostenbach Advocacia</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="icons/favicon.ico">
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/scrollMenu.js"></script>
</head>
<body>
	<?php 
		if(isset($_GET['id'])){
			$id = $_GET['id'];

			if($id == 1){
				echo "<script> alert('Email enviado com sucesso'); location='index.php' </script>";
			}elseif ($id == 3) {
				echo "<script> alert('O email não pode ser enviado por falta de conexão com a internet. Tente mais tarde.'); location='index.php' </script>";
			}else{
				echo "<script> alert('Ocorreu algum erro, por favor tente enviar novamente'); location='index.php' </script>";
			}
		}
	?>

	<header class='top-menu'>
		<nav id='menu-superior' class='menu'>
			<div class='content'>
				<input type="checkbox" id="btn-menu">
				<a href='#topo-site'><img src='icons/logo-menu4.png' alt='logo'></a>
				<label class='lbl-menu' for="btn-menu"></label>	
				<ul id='menuUl'>
					<li><a href="#servicos">SERVIÇOS</a></li>
					<li><a href="#quem-somos">QUEM SOMOS</a></li>
					<li><a href="#empresa">A EMPRESA</a></li>
					<li><a href="#fale-conosco">FALE CONOSCO</a></li>
					<li><a href="#encontre-nos">ENCONTRE-NOS</a></li>
				</ul>
				
			</div>
		</nav>
		<div id='topo-site'class='slider-intro'></div>
	</header>
	<section id='servicos' class='secao-servicos content'>
		<header class='span_10_of_12'>
			<h2>SERVIÇOS</h2>
		</header>
		<div>
			<article class='col tipos-servicos span_3_of_12'>
				<header><h4>Direito Administrativo</h4></header>
				<p>
					O escritório atua na proteção dos interesses de pessoas físicas e jurídicas ante as três esferas da Administração Pública: União, Estados e Municípios, assim como suas autarquias, fundações, empresas públicas e sociedades de economia mista; assessora ainda Empresas Públicas, Sociedades de Economia Mista e demais entidades vinculadas à Administração, bem como presta assistência a servidores e empregados públicos.
				</p>
			</article>

			<article class='tipos-servicos span_3_of_12 col'>
				<header><h4>Direito Contratual</h4></header>
				<p>
					A Zerbino & Ostenbach Advocacia presta ampla assessoria em negociações, nacionais e internacionais, e na elaboração e análise de contratos civis e comerciais, como compra e venda de bens móveis ou imóveis, representação, distribuição, agência, franquia, locação, entre outros. Para tanto, mantém-se atualizado com a legislação pátria e estrangeira, assim como com o entendimento jurisprudencial de nossas Cortes.
				</p>
			</article>

			<article class='tipos-servicos span_3_of_12 col'>
				<header><h4>Direito Previdenciário e Securitário</h4></header>
				<p>
					A Zerbino & Ostenbach Advocacia presta assessoria e consultoria preventiva perante a Previdência Social, atuando na resolução dos impasses ocorridos, bem como preventivamente, no intuito de reduzir custos para seus clientes, além de atuar nas demandas judiciais existentes.
				</p>
			</article>

			<article class='tipos-servicos span_3_of_12 col'>
				<header><h4>Direito do Trabalho</h4></header>
				<p>
					A atuação expressiva e a satisfação de inúmeros clientes tornaram a Zerbino & Ostenbach Advocacia uma referência nesta especialidade. O escritório atende a todo tipo de questão referente às relações de trabalho, atuando como consultor jurídico de empregados e empresas.
				</p>
			</article>
		</div>
	</section>
	<section id='quem-somos' class='secao-quem-somos content'>
		<header class='span_10_of_12'><h2>QUEM SOMOS</h2></header>
		<article class='clearfix'>
			<div class='col 10_span_3_of_10 foto1'>
				<img src='img/adv-1.png' alt='Honório Zerbino'>
			</div>
			<h4>Honório Zerbino</h4>
			<p>
				Vindo de uma importante família de advogados, Honório Zerbino formou-se em 2007, na Brigham Young University, nos Estados Unidos. Possui um mestrado em Ciências Jurídico-Econômicas e já atuou em diversas áreas do Direito, tendo trabalhado de 2008 a 2014 no corpo de Advogados da grande empresa de bicicletas Law. Em setembro de 2014, durante um congresso em Lisboa, conheceu Afonso Ostenbach, com quem mais tarde, abriu o escritório de Direito Empresarial Z&O Advocacia.
			</p>
		</article>
		<article class='clearfix'>
			<div class='r-col 10_span_3_of_10 foto2'>
				<img src='img/adv-2.png' alt='Afonso Ostenbach'>
			</div>
			<h4>Afonso Ostenbach</h4>
			<p>
				Natural de Varginha, Minas Gerais, e filho de portugueses, Afonso Ostenbach formou-se em direito na Universidade de São Paulo em 2010. Desde 2006, tem atuado na administração da empresa grãos Ostengal. Formado em Direito e Administração, o jovem profissional possui grande experiência no setor de Direito Empresarial. Em 2014, durante um congresso que participava, Afonso conheceu Honório Zerbino, e juntos, abriram o escritório de Direito Empresarial Z&O Advocacia.
			</p>
		</article>
	</section>
	<section class="secao-promo container clearfix">
		<div class='promo-faixa'>
			<article class='span_7_of_12'>
				<h1>Construindo um futuro melhor!</h1>
				<p>Trabalhando com força e determinação em busca da justiça.</p>
				<a href="#encontre-nos">ENDEREÇO DO ESCRITÓRIO</a>
			</article>
		</div>
	</section>
	<section id="empresa" class="secao-empresa content">
		<header class='span_10_of_12'>
			<h2>A EMPRESA</h2>
		</header>
		<article>
			<p>
				Fundada em fevereiro de 2015, a Z&O Advocacia tem atuado com grande excelência e qualidade no setor empresarial. Situado em Sinop, o escritório trabalha no auxílio do Setor Administrativo de diversas empresas, tendo como meta, levar um trabalho eficaz, que satisfaça as necessidades dos clientes. O escritório presta serviço efetivo para três empresas da cidade, e presta consulta para diversas outras. Os advogados procuram sempre o melhor para seus clientes, tendo trabalhado com excelentes resultados em ações jurídicas.
			</p>
			<p>
				O Escritório Z&O Advocacia possui uma nova abordagem, proporcionando um atendimento personalizado, e utilizando da estratégia processual adequada, objetivando o alcance dos anseios pessoais de cada um dos seus clientes e colaboradores. Seu corpo de advogados experientes proporcionam um trabalho de qualidade e confiança, com quem os clientes podem sempre contar. Atualmente, o escritório possui dois advogados especializados da área de Direito Empresarial e Administrativo.
			</p>
		</article>
	</section>
	<section class="secao-mvv container">
		<main class="content">
			<article class='col span_4_of_12'>
				<div><span class='ico-1'>f</span></div>
				<h3>Missão</h3>
				<p>Com atenção e respeito, oferecer o melhor atendimento na solução dos Negócios Empresariais.</p>
			</article>
			<article class='col span_4_of_12'>
				<div><span class='ico-2'>o</span></div>
				<h3>Visão</h3>
				<p>Ser reconhecido como referência em serviços de apoio aos Direitos Empresariais no setor administrativo e burocrático.</p>
			</article>
			<article class='col span_4_of_12'>
				<div><span class='ico-3'>c</span></div>
				<h3>Valores</h3>
				<p>Nossos valores são: ética, respeito, qualidade e compromisso.</p>
			</article>
		</main>
	</section>
	<section id="fale-conosco" class="secao-fale-conosco content">
		<header class='span_10_of_12'><h2>FALE CONOSCO</h2></header>
		<form action="envia_email.php" method="post">
			<label for="ipt-nome" class='lbl-fale-conosco'>Nome:</label>
			<input type="text" id='ipt-nome' name='nome' required>
			<label for="ipt-nome" class='lbl-fale-c'>Nome:</label>

			<label for="ipt-email" class='lbl-fale-conosco'>E-mail:</label>
			<input type="email" id='ipt-email' name='email' required>
			<label for="ipt-email" class='lbl-fale-c'>E-mail:</label>	
			
			<label for="ipt-telefone" class='lbl-fale-conosco'>Telefone:</label>
			<input type="text" id='ipt-telefone' name='telefone' required>
			<label for="ipt-telefone" class='lbl-fale-c'>Telefone:</label>			
			
			<label for="ipt-assunto" class='lbl-fale-conosco'>Assunto:</label>
			<input type="text" id='ipt-assunto' name='assunto' required>
			<label for="ipt-assunto" class='lbl-fale-c'>Assunto:</label>
			
			<label for="txt-msg" class='lbl-msg2'>Mensagem:</label>
			<textarea id='txt-msg' rows="15" name='mensagem' required></textarea>
			<label for="txt-msg" class='lbl-msg'>Mensagem:</label>

			<button type="submit">Enviar</button>
		</form>
	</section>
	<section id="encontre-nos" class="secao-encontre-nos content">
		<header class="span_10_of_12">
			<h2>ENCONTRE-NOS</h2>
		</header>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d488.08691118401526!2d-55.51126730066972!3d-11.856589644905792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93a77ff4f1922ecf%3A0x23dd862a2941d3d!2sAv.+das+Emba%C3%BAbas%2C+1551+-+St.+Industrial+Sul%2C+Sinop+-+MT!5e0!3m2!1spt-BR!2sbr!4v1443212099769" allowfullscreen></iframe>
	</section>
	<footer class="rodape container">
		<div class='content'>
			<div class="col span_3_of_12 logo-footer">
				<img src="icons/logo-footer.png" alt="Advocacia">
			</div>
			<div class="col span_3_of_12">
				<h5>INSTITUCIONAL</h5>
				<ul>
					<li><a href="#empresa">A empresa</a></li>
					<li><a href="#quem-somos">Os advogados</a></li>
					<li><a href="#servicos">Serviços</a></li>
				</ul>
			</div>
			<div class="col span_3_of_12">
				<h5>ADVOGADOS</h5>
				<ul>
					<li><a href="#quem-somos">Atuação</a></li>
					<li><a href="#servicos">Formação</a></li>
					<li><a href="#fale-conosco">Contatos</a></li>
				</ul>
			</div>
			<div class="col span_3_of_12 social-net">
				<h5>REDES SOCIAIS</h5>
				<a href="https://pt-br.facebook.com" target="_blank">1</a>
				<a href="https://plus.google.com/" target="_blank">2</a>
				<a href="https://instagram.com/" target="_blank">3</a>
			</div>
			<p>Todos os direitos reservados | <a href="#">Termos de Uso</a></p>
		</div>
	</footer>
</body>
</html>