<?php session_start(); ?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aulas</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../css/video.css?=<?php echo time(); ?>">
</head>

<body>
  <?php
  include("../navbar.php");
  include("../conexao.php");
  ob_start();

  $sim = 'nao';

  $sql = "SELECT nome,id, descricao FROM materia";
  $result = mysqli_query($conexao, $sql);
  $materias = [];

  while ($row = $result->fetch_assoc()) {
    $materias[] = [
      'id' => $row['id'],
      'nome' => $row['nome'],
      'descricao' => $row['descricao']
    ];
  }

  $sql = "SELECT id, nome_video, link, id_materia, descricao from videos";
  $result = mysqli_query($conexao, $sql);
  $videos = [];

  while ($row = $result->fetch_assoc()) {
    $videos[] = [
      'titulo' => $row['nome_video'],
      'link' => $row['link'],
      'id_materia' => $row['id_materia'],
      'descricao' => $row['descricao']
    ];
  }


  ?>

  <div class="opcao">
    <div class="features">
      <?php if (!empty($materias)) { ?>
        <?php foreach ($materias as $materias) { ?>
          <div class="cards">
            <div class="card">
              <h4><?php echo $materias['nome']; ?> </h4>
              <p>
                <?php echo $materias['descricao']; ?>
              </p>
              <button class="btn-video"></button>
            </div>
          </div>
      <?php }
      } ?>
    </div>
  </div>

</body>