<?php
include_once 'ini.php';

if ($_POST['quiz']) {
	if ($_POST['quiz'] == "inicio") {		
		$sqlInicio  = "INSERT INTO projeto (p1, p2, p3, p4) VALUES ('', '', '', '')";
		if ($conn->query($sqlInicio)) {
			$sqlId = $conn->query("SELECT id FROM projeto ORDER BY id DESC LIMIT 1");	
			if ($UltimoId = $sqlId->fetch_object()) {
				echo "<script language='javascript'>window.location='http://emissistemas.com.br/Quiz/Pergunta1.php?id=".$UltimoId->id."';</script>";				
			} else {
				echo "<script language='javascript'>window.location='http://emissistemas.com.br/Quiz/</script>";
			}
		}		
	}elseif($_POST['quiz'] == "P1"){		
		$postP1 = (object)$_POST;
		$sqlP1 = "UPDATE projeto SET P1='$postP1->P1' WHERE id='$postP1->id'";
		if ($conn->query($sqlP1)) {
			echo "<script language='javascript'>window.location='http://emissistemas.com.br/Quiz/Pergunta2.php?id=".$postP1->id."';</script>";
		}
	}elseif($_POST['quiz'] == "P2"){		
		$postP2 = (object)$_POST;
		$sqlP2 = "UPDATE projeto SET P2='$postP2->P2' WHERE id='$postP2->id'";
		if ($conn->query($sqlP2)) {
			echo "<script language='javascript'>window.location='http://emissistemas.com.br/Quiz/Pergunta3.php?id=".$postP2->id."';</script>";
		}
	}elseif($_POST['quiz'] == "P3"){		
		$postP3 = (object)$_POST;
		$sqlP3 = "UPDATE projeto SET P3='$postP3->P3' WHERE id='$postP3->id'";
		if ($conn->query($sqlP3)) {
			echo "<script language='javascript'>window.location='http://emissistemas.com.br/Quiz/Pergunta4.php?id=".$postP3->id."';</script>";
		}
	}elseif($_POST['quiz'] == "P4"){		
		$postP4 = (object)$_POST;
		$sqlP4 = "UPDATE projeto SET P4='$postP4->P4' WHERE id='$postP4->id'";
		if ($conn->query($sqlP4)) {
			echo "<script language='javascript'>window.location='http://emissistemas.com.br/Quiz/Resultados.php';</script>";
		}
	}
}


if ($_POST['form_msg']) {
	$postMsg = (object)$_POST;
	if ($postMsg->nome == "") {
		$nome = "Anônimo";
	} else {
		$nome = $postMsg->nome;
	}
	$sqlMsg  = "INSERT INTO projeto_msg (nome, mensagem) VALUES ('$nome', '$postMsg->mensagem')";
	if ($conn->query($sqlMsg)) {
		echo "<script language='javascript'>window.location='http://emissistemas.com.br/Quiz/';</script>";
	} else {
		echo "<script language='javascript'>window.location='http://emissistemas.com.br/Quiz/Opiniao.html?msg=erro1';</script>";
	}	
}

?>