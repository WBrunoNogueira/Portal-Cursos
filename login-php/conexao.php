<?php
	define('HOST','localhost');
	define('USER','root');
	define('PASS','');
	define('BASE','login1');

$conexao = mysqli_connect(HOST, USER, PASS, BASE) or die ('Não foi possível conectar');
