<?php

$path = str_replace('\\', '/', str_replace('model', '', dirname(__DIR__)));
require_once "{$path}/estacionamento/Autoload.class.php";

new Autoload;

// require_once "./model/veiculos/Veiculo.class.php";
// require_once "./model/veiculos/Moto.class.php";
// require_once "./model/veiculos/Carro.class.php";
// require_once "./model/veiculos/Caminhao.class.php";


$veiculo = new Veiculo;

$moto = new Moto;
$carro = new Carro;
$caminhao = new Caminhao;


$cliente = new Cliente;
$pessoaFisica = new PessoaFisica;
$pessoaJuridica = new PessoaJuridica;




$vaga = new Vaga;
$vaga1 = new Vaga;
$vaga2 = new Vaga;

$listaVagas = [$vaga,$vaga1,$vaga2];

$registro = new RegistroDeVagas($vaga, $cliente);
$estabelecimento = new Estabelecimento($listaVagas);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Modelagem</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  <header>
    <nav class="navbar text-light bg-dark">
      <h1>
        Modelagem Estacionamento
      </h1>
    </nav>
  </header>
  <article class="container-fluid mt-4">
    <div class="row mb-4">
      <div class="col-sm-4 mx-auto">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Veículo</h5>
            <p class="card-text">
              <pre>
                <?php
                print_r($veiculo);
                ?>
                </pre>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Carro</h5>
            <p class="card-text">
              <pre>
                <?php
                print_r($carro);
                ?>
                </pre>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Moto</h5>
            <p class="card-text">
              <pre>
                <?php
                print_r($moto);
                ?>
                </pre>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Caminhão</h5>
            <p class="card-text">
              <pre>
                <?php
                print_r($caminhao);
                ?>
                </pre>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-sm-4 mx-auto">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Cliente</h5>
            <p class="card-text">
              <pre>
                <?php
                print_r($cliente);
                ?>
                </pre>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-sm-4 mx-auto">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Pessoa Física</h5>
            <p class="card-text">
              <pre>
                <?php
                print_r($pessoaFisica);
                ?>
                </pre>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mx-auto">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Pessoa Jurídica</h5>
            <p class="card-text">
              <pre>
                <?php
                print_r($pessoaJuridica);
                ?>
                </pre>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
    <div class="col-sm-4 mx-auto">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Estabelecimento</h5>
            <p class="card-text">
              <pre>
                <?php
                print_r($estabelecimento);
                ?>
                </pre>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mx-auto">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Registro de Vagas</h5>
            <p class="card-text">
              <pre>
                <?php
                print_r($registro);
                ?>
                </pre>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mx-auto">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Vagas</h5>
            <p class="card-text">
              <pre>
                <?php
                print_r($vaga);
                ?>
                </pre>
            </p>
          </div>
        </div>
      </div>
    </div>

  </article>
  <footer>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
</body>

</html>