<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" type="text/css"  href="estilo.css" />
</head>
<body>
        <div class="header">
        <div class="logo-2"><img style="width: 80px; height: 60px;" src="camera_fotografia_de_rua_white_crop-300x227.webp"/></div>
        <p class="logo"> FotoInfoco</p>
        <ul class="menu">
            <li><a class="Sobre" href="homepage.html">Home</a></li>
            <li><a class="Galeria" href="Galeria.html">Galeria</a></li>
            <li><a class="Contato" href="Contato.html">Acervo</a></li>
            <li><a class="cinema" href="cinema.html">Cinema</a></li> 
            <li><a class="vendas_cuso" href="vendas_curso.html">Cursos</a></li>
            <li><a class="Cadastro" href="cadastro.html">Cadastro</a></li>
            <li><a class="Login" href="Login.html">Login</a></li>
        </ul>
        </div>
        <?php
            
        require_once("banco.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = isset($_POST['Nome']) ? $_POST['Nome'] : "";
            $sobrenome = isset($_POST['Sobrenome']) ? $_POST['Sobrenome'] : "";
            $email = isset($_POST['email']) ? $_POST['email'] : "";
            $tema = isset($_POST['idade']) ? $_POST['idade'] : "";
            $sobre = isset($_POST['fotografo']) ? $_POST['fotografo'] : "";
            

            $sql = "INSERT INTO TABELA (CAMPOTABELA, CAMPOTABELA, CAMPOTABELA) VALUES (?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$nome . ' ' . $sobrenome, $tema, $artigo]);

            echo "<p>Formulário enviado</p>";

            
        } else {
            echo "<p>Formulário não enviado</p>";
        }
        ?>