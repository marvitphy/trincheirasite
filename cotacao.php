<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="2">
    <title>Cotação do Dolar</title>

    <style>
        .corpo{
            width: 90%;
            margin: 0 auto;
            margin-top: 10px;
        }
    </style>

</head>

<body>


    <?php

    //URL DO SITE
    $url = 'https://www.beecambio.com.br/cotacao/dolar-americano';

    // PEGANDO TODO CONTEÚDO

    $dados = file_get_contents($url);
    $var1 = explode('<span class="currencyValue">', $dados);
    $var2 = explode('</span>', $var1[1]);

    $urlEuro = 'https://valorinveste.globo.com/cotacoes/euro/';

    $dadosEuro = file_get_contents($urlEuro);
    $var3 = explode('<span class="tabela-data__ticker__lastQuote">', $dadosEuro);
    $var4 = explode('</span>',$var3[1]);



    ?>

    <div class="corpo">

    <h1 class="display-4">COTAÇÃO Dollar-Euro (PHP - EXPLODE)</h1> <br>

    <div class="jumbotron jumbotron-fluid">
        <div class="container" style="text-align: center;">  
            
            <span class="badge badge-dark" style="width: 220px; height: 30px; padding-top: 8px">Euro</span>
            <h1 class="display-4"><span class="badge badge-primary" style="width: 220px;"><?php echo $var4[0]; ?></span></h1>
            <p class="lead">Euro Comercial</p>

        </div>
    </div>

    <div class="jumbotron jumbotron-fluid" style="text-align: center;">
        <div class="container">  
            
            <span class="badge badge-dark" style="width: 220px; height: 30px; padding-top: 8px">Valor do Dólar Americano</span>
            <h1 class="display-4"><span class="badge badge-primary" style="width: 220px;"><?php echo $var2[0]; ?></span></h1>
            <p class="lead">O valor é calculado com base na cotação de delivery para a região de São Paulo.</p>

        </div>
    </div>

    <div>
        Fontes: <br>
        <a href="https://www.beecambio.com.br/">BeeCâmbio</a> <small>Dóllar</small><br>
        <a href="https://valorinveste.globo.com/">Valor Investe</a> <small>Euro</small>
    </div> <br><br>

    </div>

</body>

</html>