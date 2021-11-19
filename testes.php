
		<table border="1" style="width:100%">
		<?php 
				include_once 'include/ini.php'; 
				$sqlQuiz  = $conn->query("SELECT * FROM projeto_msg ORDER BY id DESC");
				while($QuizMsg = $sqlQuiz->fetch_object()){				
					echo "<tr style='font-size: 80%' align='left'>
							<th style='color:orange'>".$QuizMsg->nome."&nbsp;&nbsp;</th>
							<th style='color:green'>".$QuizMsg->mensagem."</th>
						 </tr>";					
				}		
		?>
		</table>	
