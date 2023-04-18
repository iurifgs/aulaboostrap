<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
        <div class="formu">
            <form action="mostrar.php" class="was-validated">
              <div class="mb-3 mt-3">
                <label for="uname" class="form-label">Nome do usuário:</label>
                <input type="text" class="form-control" id="uname" placeholder="Seu nome" name="uname" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Por favor preencha este campo..</div>
              </div>
              <div class="mb-3 mt-3">
                <label for="uname" class="form-label">Seu Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Seu email" name="email" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Por favor preencha este campo..</div>
              </div>
              <div class="mb-3">
                <label for="pwd" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Sua senha" name="pswd" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Por favor preencha este campo.</div>
              </div>
              <div class="mb-3 mt-3">
                <label for="uname" class="form-label">CPF:</label>
                <input type="number" class="form-control" id="cpf" placeholder="Seu nome" name="cpf" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Por favor preencha este campo..</div>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
                <label class="form-check-label" for="myCheck">Você confirma seus dados?.</label>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Por favor preencha este campo.</div>
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        
</body>
</html>
