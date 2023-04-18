<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mostrar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        
<div class="container mt-3">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Senha</th>
        <th>CPF</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
            <?php
                echo $_GET['nome'];
                echo "<br>";       
            ?>
        </td>
        <td>
            <?php
                echo $_GET['email'];
                echo "<br>";
            ?>
        </td>
        <td>
            <?php
                echo $_GET['senha'];
                echo "<br>";
            ?>
        </td>
        <td>
            <?php
                echo $_GET['cpf'];
                echo "<br>";
            ?>
        </td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>





</body>
</html>