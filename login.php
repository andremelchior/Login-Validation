<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Sistema de Validação</title>
  <style type="text/css">
    body{
      width: 0px;
      padding: 0px;
      font-family: sans-serif;
      background:#34495e;
    }
    .box{
      width: 300px;
      padding: 40px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform:translate(-50%,-50%);
      background:#191919;
      text-align: center;
      border-radius: 40px;
    }
   .box h1{
      color: white;
      text-transform: uppercase;
      font-weight: 500;
    }
   .box input[type = "text"],.box input[type = "password"]{
      border:0;
      background:none;
      display: block;
      margin: 20px auto;
      text-align: center; 
      border:2px solid #3498db;
      padding: 14px 10px;
      width: 200px;
      outline: none;
      color: white;
      border-radius: 24px;
      transition: 0.25s;
    }
   .box input[type = "text"]:focus,.box input[type = "password"]:focus{
      width: 280px;
      border-color: #2ecc71;
    }
   .box input[type = "submit"]{
      border:0;
      background:none;
      display: block;
      margin: 20px auto;
      text-align: center; 
      border:2px solid #2ecc71;
      padding: 14px 40px;
      outline: none;
      color: white;
      border-radius: 24px;
      transition: 0.25s;
      cursor: pointer;
    }
   .box input[type = "submit"]:hover{
      background:#2ecc71;
    }
  </style>
</head>
<body>
      <!--Criar um form com usuário(text) e senha(password)-->
    <div class="formulario">
        <form class="box" action="validacao.php" method="POST">
          <h1>Login</h1>
          <input type="text" name="usuario" placeholder="Usuário">
          <input type="password" name="senha" placeholder="Senha">
          <input type="submit" name="" value="Login">
        </form>
    </div>
</body>
</html>



 