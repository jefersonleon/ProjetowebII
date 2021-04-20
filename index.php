<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Aula dia 14/04</title>
</head>
<body>
    <header class="container">
        <div class="logo">
            <img src="img/logo.png" alt="Logotipo">
        </div>
        <div class="titulo">
            <h2>AULA WEB</h2>
        </div>
        <nav class="menu">
            <h2>MENU</h2>
        </nav>
        <div class="logo">
            <img src="img/logo.png" alt="Logotipo">
        </div>
    </header>
    
    <div class="form">
        <h1>Formulario de entrada:</h1><br><br>
        <form action="" method="post">
        <label for="quant">Quantidade Itens:</label>    
        <input type="number" name="num" id="num" >
        <input type="submit" value="Gerar">
        </form>
    </div>
    <div class="corpo">
        <?php
            if(!empty($_POST['num'])){
                $num = $_POST['num'];
                for($i=0; $i < $num; $i++){
                    echo"<div class='item'>
                        <h2>TITULO</h2>
                        <img src='img/mario.jpg' alt='Mario'>
                        <p>Jogo de plataforma, onde o personagem anda em um mundo e mata vilões pelo caminho.</p>
                        <h3>[Plataforma] - Nintendo</h3>
                    </div>";
                }
            }
       ?>
    </div>
<footer>
    
</footer>
</body>
</html>