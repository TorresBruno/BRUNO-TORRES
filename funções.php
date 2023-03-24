<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta htto-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" content="width=devise-width, initial-scale=1.0">
    <title>funçao soma</title>


</head>
<form method="post">
    <input type="submit" name="soma" class="button" value="Somar" />
    <input type="submit" name="subtrai" class="button" value="Subtrair" />
    <input type="submit" name="divide" class="button" value="Dividir" />
    <input type="submit" name="multiplica" class="button" value="Multiplicar" />
    <input type="submit" name="exibeTexto" class="button" value="Exibir texto" />
    <input type="submit" name="mostraTabuada" class="button" value="mostra Tabuada" />
</form>

<body>
    <?php

    function exibiTexto()
    {
        echo "função de mostrar texto";
    }

    function soma()
    {
        echo "15 + 5 =", 15 + 5;
    }
    function subtrai()
    {
        echo "15 - 2 =", 10 - 2;
    }
    function divide()
    {
        echo "10 / 2 =", 10 / 2;
    }
    function multiplica()
    {
        echo "20 * 2 = ", 20 * 2;
    }

    function mostraTabuada()
     {for ($i = 0; $i <= 10; $i++){ 
        $resultado = 10 * $i;
        echo "10x ", "=", $resultado, "<br/>";
     }
    }


    if (array_key_exists('soma', $_POST)) {
        soma();
    } else if (array_key_exists('subtrai', $_POST)) {
        subtrai();
    } else if (array_key_exists('divide', $_POST)) {
        divide();
    } else if (array_key_exists('multiplica', $_POST)) {
        multiplica();
    } else if (array_key_exists('exibeTexto', $_POST)) {
        exibiTexto();
    } else if (array_key_exists('mostraTabuada', $_POST)) {
        mostraTabuada();
}


    ?>
</body>

</html>