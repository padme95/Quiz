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
	
	
	<form action="include/action.php" method="post">
		<input type="hidden" name="quiz" value="P1" />
		<input type="hidden" name="id" value="<?=$_GET['id']?>" />
		<div class="botao-container">
			<div>&nbsp;</div>
			<p>Você sabe o que é lixo eletrônico?</p>
			<button class="botao" name="P1" value="S">Sim</button>
			<button class="botao" name="P1" value="N">Não</button>
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
