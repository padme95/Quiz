<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
	<link rel="icon" href="Imagens/favicon.png" type="image/x-icon">
	<link rel="icon" type="image/png" href="favicon.png" />
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<title>TecoLog</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="libraries/javascript.js"></script>
	<script src="https://kit.fontawesome.com/2ee910012b.js" crossorigin="anonymous"></script>
	<script>
		function inicio(){
		  window.location.href = "index.html"
		}
		function comentarios(){
		  window.location.href = "Opiniao.html"
		}
	</script>
</head>
<body>
	<header>
		<nav>
			<ul>
				
				<li><a class="lk" href="Projeto.html" target="_blank">Sobre o Projeto</a></li>
				<li><a class="lk" href="Opiniao.html" target="_blank">Deixe sua opinião</a></li>
			</ul>
			
		
		</nav>
	</header>
	
	<form action="Resultados.html">
		<div class="botao-container">
			<?php 
				include_once 'include/ini.php'; 
				$sqlQuiz  = $conn->query("SELECT * FROM projeto ");
				while($ProjetoQuiz = $sqlQuiz->fetch_object()){
						if ($ProjetoQuiz->p1 == "N") {
							$P1N = $P1N + 1;
						} elseif ($ProjetoQuiz->p1 == "S") {
							$P1S = $P1S + 1;
						}
						if ($ProjetoQuiz->p2 == "N") {
							$P2N = $P2N + 1;
						} elseif ($ProjetoQuiz->p2 == "S") {
							$P2S = $P2S + 1;
						}
						if ($ProjetoQuiz->p3 == "N") {
							$P3N = $P3N + 1;
						} elseif ($ProjetoQuiz->p3 == "S") {
							$P3S = $P3S + 1;
						}
						if ($ProjetoQuiz->p4 == "N") {
							$P4N = $P4N + 1;
						} elseif ($ProjetoQuiz->p4 == "S") {
							$P4S = $P4S + 1;
						}
				}
			
			?>
			<table border="0" width="100%">
				<tr style="font-size: 95%">
					<th style="color: green;">Resultado Parcial do QUIZ</th>
					<th style="color: green;">&nbsp;Sim&nbsp;</th>
					<th style="color: green;">&nbsp;Não&nbsp;</th>
				</tr>
				<tr>
					<th align="right" style="font-size: 85%">Você sabe o que é lixo eletrônico?&nbsp;</th>
					<th><?=$P1S?></th>
					<th><?=$P1N?></th>
				</tr>
				<tr>
					<th align="right"style="font-size: 85%">Existem pontos de coleta em seu bairro?&nbsp;</th>
					<th><?=$P2S?></th>
					<th><?=$P2N?></th>
				</tr>
				<tr>
					<th align="right" style="font-size: 85%">Você leva pilhas e baterias aos pontos de coleta?&nbsp;</th>
					<th><?=$P3S?></th>
					<th><?=$P3N?></th>
				</tr>
				<tr>
					<th align="right" style="font-size: 85%">Já recebeu orientações de onde relizar o descarte de forma correta?&nbsp;</th>
					<th><?=$P4S?></th>
					<th><?=$P4N?></th>
				</tr>
			</table>
			<div>&nbsp;</div><br />			
			<input type="button" class="botao" value="Voltar ao Início" onclick="inicio()">
			<input type="button" class="botao" value="Comentários" onclick="comentarios()">
			<div>&nbsp;</div>
		</div>
	</form>
    <div class="footer">
      <div class="grid icons">
      	Contato&nbsp;&nbsp;&nbsp;
      	<a target="_blank" href="https://github.com/padme95"><i class="fab fa-github" style="color: green;"></i></a>
        <a target="_blank" href="https://www.linkedin.com/feed/"><i class="fab fa-linkedin" style="color:green"></i></a>
        <a target="_blank" href="https://www.instagram.com/up_mly/"><i class="fab fa-instagram" style="color:green"></i></a>
        <a target="_blank" href="https://api.whatsapp.com/send?phone=5511991398404"><i class="fab fa-whatsapp"style="color:green"></i></a>
      </div>
    </div>
    
    
</body>
</html>
