<?php
$servidor = "localhost";	
$usuario = "root";			
$senha = "";
$banco = "phpmysql02_microblog";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if( $conexao ) {
    mysqli_set_charset($conexao, "utf8");
} else {
    die("Erro ao conectar: " . mysqli_connect_error($conexao) );
}