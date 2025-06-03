<?php
    $paginas = ['home'=>'Minha página aqui', 'sobre'=>'estou na pagina sobre', 'contatos'=>'' ];

    $paginas['contatos'] ='<form><input type="text" placeholder="Seu nome"/></form> ';


    

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>
    <style type="text/css">
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        header{
            background-color:#069;
            padding: 8px 10px;
            text-align: center;
        }
        a{
            display: inline-block;
            margin: 0 10px;
            color: white;
            font-size: 17px;
        }
    </style>
</head>
<body>
   <header>
        <?php
            foreach ($paginas as $key => $value){
                echo '<a href="?page='.$key.'">'.ucfirst($key).'</a>';
            }
        ?>
   </header>
   <section>
            <section>
    <?php
        $pagina = isset($_GET['page']) ? $_GET['page'] : 'home';

        if(array_key_exists($pagina, $paginas)) {
            echo '<h2>' . $paginas[$pagina] . '</h2>';
        } else {
            echo '<h2>Página não encontrada.</h2>';
        }
    ?>
</section>

   </section>

</body>
</html>