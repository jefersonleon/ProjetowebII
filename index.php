
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
    <?php require_once 'includes/banco.php'?>
    
    <div class="corpo">
        <?php
         
         $busca = $banco->query("select nome, descricao, nota, capa from tbgames order by nome");
         
         if(!$busca){
             echo"<p> Falha na busca! $banco->error</p>";
         }else{
       
             while($reg = $busca->fetch_object())
             {
              


                    echo"<div class='item'>
                        <h2>$reg->nome</h2>
                        <img src='$reg->capa' alt='Imagem'>
                        <p>$reg->descricao</p>
                        <h3>[Tipo] - Fabricante</h3>
                    </div>";
                }
            }
       ?>
    </div>
<footer>
    
</footer>
</body>
</html>