<?php

	$stringdeconexao = "host=pgsql.projetoscti.com.br
	port=5432
	dbname=projetoscti4
	user=projetoscti4
	password=cti123";

	$conecta = pg_connect($stringdeconexao);
	
	if (!$conecta)
	{
		echo "Não foi possível estabelecer conexão com o banco de dados!<br><br>";
		exit;
	}
?>
