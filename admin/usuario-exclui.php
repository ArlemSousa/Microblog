<?php
require "../inc/logica-usuarios.php"; 

$id = $_GET['id'];


 excluirUsuario ($conexao, $id);

        require "../inc/desconecta.php";
        header ("location:usuarios.php");