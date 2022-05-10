<?php
require_once "validador_acesso.php";

?>
<html>

<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .card-home {
      padding: 30px 0 0 0;
      width: 100%;
      margin: 0 auto;
    }
  </style>
  <!-- FONT AWESOME -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="./home.php">
      <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      App Help Desk
    </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="logoff.php"><i class="fas fa-sign-out-alt fa-lg"></i></a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-home">
        <div class="card">
          <div class="card-header">
            Menu
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-6 d-flex justify-content-center">
                <a href="./abrir_chamado.php"><i class="fas fa-edit fa-4x"></i></a>
              </div>
              <div class="col-6 d-flex justify-content-center">
                <a href="./consultar_chamado.php"><i class="fas fa-search fa-4x"></i></a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>