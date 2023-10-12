<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CADASTRO </title>
</head>
<body>
         <!--  O FORM é html e não php  -->      <!--  GET = URL e POST = Memória  -->
    <form action = "exibircliente.php" method = "POST">
                            <!--  CLASS é para o CSS e NAME é para o PHP  -->
        Nome:
        <input type = "text" class = "csnome" name = "cxnome"><br/>
        Idade:
        <input type = "number" maxleght = "3" class = "cxidade" name = "cxidade"><br?> <br/>
        E-mail:
        <input type = "email" class = "cxemail" name = "cxemail"> <br/>
        Data de Nascimento
        <input type = "date" class = "cxdata" name = "cxdata"> <br/>
        Filhos:
        <input type = "radio" class = "ops" name = "ops" value = "S">Sim
        <input type = "radio" class = "ops" name = "ops" value = "N">Não <br/>
        <input type = "number" class = "cxquantf" name = "cxquantf"><br/>
        
        <input type = "submit" class = "btgravar" value = "Gravar">

    </form>

</body>
</html>