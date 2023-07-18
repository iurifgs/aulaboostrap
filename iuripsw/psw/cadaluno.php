<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadaluno</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <form method="GET" action="crudaluno.php">

        <label for="">nome aluno</label>
        <input type="text" name="nomealuno">

        <label for="">idade</label>
        <input type="text" name="idade">

        <label for="">id</label>
        <input type="number" name=" id">

        <label for="">datanascimento</label>
        <input type="date" name=" nascimento">

        <label for="">endereco</label>
        <input type="text" name=" ende">

        <label for="">matricula</label>
        <input type="number" name=" matri">



        <input type="submit" name="cadastrar" value="cadastrar">
    </form>

    <button class="button"><a href="index.php">voltar</a></button>

</body>

</html>