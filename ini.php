<?php
define('HOST', 'localhost');
define('PASS', '100511fvs');
define('USER', 'root');
define('BANCO', 'emilynda');

// CRIA Conexão
$conn = new mysqli(HOST, USER, PASS, BANCO);
// Testa Conexão
if ($conn->connect_error) {
	die("Conexão Falhou". $conn->connect_error);
}
