<?php

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$assunto = $_REQUEST['assunto'];
$mensagem = $_REQUEST['mensagem'];

//Salvar num TXT 

echo "<h2>Agradecemos o contato!</h3>";
echo "<p>Em breve retornaremos.</p>";

$arquivo = fopen(filename: "dados/$nome.txt", mode: "w");
