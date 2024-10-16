<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/cadastro.css?=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Registro</title>
</head>

<body>

  <div class="main-login">
    <div class="left-login">
      <h1 class="poppins-bold"> FAÇA SEU CADASTRO<h1 class="poppins-boldd">ENTRE PARA O TIME</h1>
        <h2 class="mrmath">MR-MATH</h2>
      </h1>
      <img src="../img/calcanimation.svg" class="left-login-image" alt="calculadora animação">
    </div>

    <div class="center-login">
      <img src="../img/marcelo apontando com uma mao so sem fundo.png" alt="marcelo" class="center-login-image">
    </div>

    <div class="right-login">
      <div class="card-login">
        <h1 id="h1">CADASTRO</h1>
        <form onsubmit="return false;" id="formulario">
          <div class="textfield">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" maxlength="120" placeholder="Seu nome " required>
            <label for="sobrenome">Sobrenome:</label>
            <input type="text" id="sobrenome" name="sobrenome" maxlength="120" placeholder="Seu sobrenome " required>
            <label for="email">Email:</label>
            <div class="div-email">
              <input type="email" id="email" name="email" maxlength="120" placeholder="Sua e-mail" required>
              <img id="result">
            </div>
          </div>
          <div class="textfield">
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" minlength="8" maxlength="32" placeholder="Sua senha" required>
          </div>
          <button type="submit" id="cadastrar" class="btn-login">CADASTRE-SE</button>
          <a class="jatenho" href="../login/inicio.php" style="color: white;">Já tenho conta</a>
        </form>
        <div id='carregando' align="center"></div>
        <div id='processa_form'></div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script src="../js/cadastro.js">

  </script>
</body>

</html>