<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="./componentes/css-componentes/aside.css"> -->
  <link rel="stylesheet" href="./componentes/css-componentes/navbar.css">
  <title>Administrador |criar vagas</title>
</head>

<body>
  <!-- NAVBAR -->
  <?php include('./componentes/navbar.php'); ?>

<div class="container">

    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Adicionar vagas</h4>
                    <a href="./usuario.php" class="btn btn-danger float-end">Voltar</a>
                </div>
                <div class="card-body">
                    <form action="./acoes.php" method="post">
                        <div class="mb-3">
                            <label for="Nome">Nome</label>
                            <input type="text" name="nomeVaga" id="" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="Nome">Data da publicação</label>
                            <input type="email" name="dataPublicacaoVaga" id="" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="Nome">Prazo de inscrição</label>
                            <input type="email" name="prazoVaga" id="" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="Nome">Modalidade da vaga</label>
                            <input type="email" name="modalidadeVaga" id="" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="Nome">Salário da vaga</label>
                            <input type="email" name="salarioVaga" id="" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="Nome">Cidade</label>
                            <input type="email" name="cidadeVaga" id="" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="Nome">Estado</label>
                            <input type="email" name="estadoVaga" id="" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="Nome">Área</label>
                            <input type="email" name="areaVaga" id="" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="Nome">Beneficios</label>
                            <input type="email" name="beneficiosVaga" id="" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="Nome">Diferencial</label>
                            <input type="email" name="diferencialVaga" id="" class="form-control" required>
                        </div>


                        <div class="mb-3">
                           <button type="submit" name="create_vaga" class="btn btn-primary">Salvar</button>
                        </div>
                    </form>
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