<?php
session_start(); 
require 'conexao.php'
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="./componentes/css-componentes/aside.css">
  <link rel="stylesheet" href="./componentes/css-componentes/navbar.css">
  <link rel="stylesheet" href="./styles.css">
  <title>Administrador | Usuários</title>
</head>

<body>
  <!-- NAVBAR -->
  <?php include('./componentes/navbar.php'); ?>

  <div class="container-fluid">


  <div class="row">

    <div class="col-md-3">
      <?php include('./componentes/aside.php') ?>
    </div>

    <div class="col-md-9">

        <div class="container md-4">
        <?php 
    include ('./mensagem.php');
  ?>
          <div class="card bg-dark"  style="--bs-bg-opacity: .8;">
            <div class="card-header">
              <h1>USUÁRIOS <span class="bi bi-people"></span></h1>
                <a href="./criar-usuario.php" class="btn btn-outline-info float-end"><span class="bi bi-plus-circle"></span>&nbsp;Adicionar usuários</a>
              
            </div>
            <div class="card-body">
              <table class="table table-dark table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>E-MAIL</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $sql = 'SELECT * FROM tb_usuario';
                  $usuarios = mysqli_query($conection, $sql); 
                  if (mysqli_num_rows($usuarios) > 0){
                    foreach($usuarios as $user) {
                  ?>
                  <tr>
                    <td><?= $user['id']?></td>
                    <td><?= $user['nome_user']?></td>
                    <td><?= $user['email_user']?></td>
                    <td>
                      <a href="./usuario-view.php?id=<?=$user['id']?>" class="btn btn-outline-secondary btn-sm"><span class="bi-eye-fill"></span>&nbsp;   Visualizar</a>
                      <a href="./usuario-edit.php?id=<?=$user['id']?>" class="btn btn-outline-success btn-sm"><span class="bi-pencil-fill"></span>&nbsp;Editar</a>
                        <form action="./acoes.php" method="post" class="d-inline">
                          <button onclick="return confirm('Realmente deseja excluir esse usuário?')" type="submit" name="delete_usuario" value="<?=$user['id']?>" class="btn btn-outline-danger btn-sm "><span class="bi-trash-fill"></span>&nbsp;Deletar</button>
                        </form>
                    </td>
                  </tr>
                  <?php } 
                  }
                      else {
                        echo'<h5> Nenhum usuário encontrado </h5>';
                      }
                  ?>
                </tbody>
              </table>
            </div>
          </div>

        </div>
    
    </div>


  </div>
  </div>


  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>