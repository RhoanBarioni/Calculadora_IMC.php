<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> EXIBIR </title>
</head>
<body>
    <h1> Dados dos Clientes Abaixo: </h1><hr><br>
    <?php
    
        $nome = $_POST ["cxnome"];
        $idade = $_POST ["cxidade"];
        $email = $_POST ["cxemail"];
        $data = $_POST ["cxdata"];
        $filho = $_POST ["ops"];
        $quantf = $_POST ["cxquantf"];

        echo "Nome: ".$nome."</br>";
        echo "Idade: ".$idade."</br>";
        echo "E-mail: ".$email."</br>";
        echo "Data de Nascimento: ".$data."</br>";
        echo "Filhos: ".$filho."</br>";
        echo "Quantidade de Filho(os): ".$quantf."</br>";
    
    ?>
        <h1>Exibir pelo Formulário</h1>

    <form>

        Nome:
        <input type="text" disabled = "true" value = "<?php echo $nome = $_POST["cxnome"];?>"><br/>
        E-mail:
        <input type="text" value = "<?php echo $email = $_POST["cxemail"];?>"><br/>
        Data:
        <input type="date"value = "<?php echo $data = $_POST["cxdata"];?>"><br/>
        Filho:
        <input type="text" value = "<?php echo $filho = $_POST["ops"];?>"><br/>
        Quantidade:
        <input type = "number" value = "<?php echo $quantf = $_POST["cxquantf"];?>"><br/><br/>

        <?php
        
            if ($quantf = "N")
            {
                echo "Osh, tem filho n é?"."<br/>";
            }
        
            else
            {
                echo "Ala kkkkkk tem filhote"."<br/>";
            }

        ?>

    </form>


</body>
</html>