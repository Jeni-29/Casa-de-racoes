<?php
// Corrigido: tag PHP correta
// Simulação dos estados (você pode substituir por include de um arquivo ou dados do banco)
$estados = [
    ["nome" => "Acre", "sigla" => "AC"],
    ["nome" => "Alagoas", "sigla" => "AL"],
    ["nome" => "Amapá", "sigla" => "AP"],
    ["nome" => "Amazonas", "sigla" => "AM"],
    ["nome" => "Bahia", "sigla" => "BA"],
    ["nome" => "Ceará", "sigla" => "CE"],
    ["nome" => "Distrito Federal", "sigla" => "DF"],
    ["nome" => "Espírito Santo", "sigla" => "ES"],
    ["nome" => "Goiás", "sigla" => "GO"],
    ["nome" => "Maranhão", "sigla" => "MA"],
    ["nome" => "Mato Grosso", "sigla" => "MT"],
    ["nome" => "Mato Grosso do Sul", "sigla" => "MS"],
    ["nome" => "Minas Gerais", "sigla" => "MG"],
    ["nome" => "Pará", "sigla" => "PA"],
    ["nome" => "Paraíba", "sigla" => "PB"],
    ["nome" => "Paraná", "sigla" => "PR"], 
    ["nome" => "Pernambuco", "sigla" => "PE"],
    ["nome" => "Piauí", "sigla" => "PI"],
    ["nome" => "Rio de Janeiro", "sigla" => "RJ"],
    ["nome" => "Rio Grande do Norte", "sigla" => "RN"],
    ["nome" => "Rio Grande do Sul", "sigla" => "RS"],
    ["nome" => "Rondônia", "sigla" => "RO"],
    ["nome" => "Roraima", "sigla" => "RR"],
    ["nome" => "Santa Catarina", "sigla" => "SC"],
    ["nome" => "São Paulo", "sigla" => "SP"],
    ["nome" => "Sergipe", "sigla" => "SE"],
    ["nome" => "Tocantins", "sigla" => "TO"]
];

$BASE = $_SERVER['SERVER_NAME'] . $_SERVER['SCRIPT_NAME'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
  <title>Formulário</title>
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="formulario.css">
  <link rel="stylesheet" href="style.css">
</head>

<body class="p-3 m-0 border-0 bd-example">

<!-- <header>
    <div class="navbar">
      <img src="img/logo.png" alt="Logo">
      <ul>
        <li><a href="index.html" title="home">Home</a></li>
        <li><a href="sobre.html" title="sobre">Sobre</a></li>
        <li><a href="Produto.html" title="produtos">Produtos</a></li>
      </ul>
    </div>
  </header>! -->

   <form class="row g-3">
    <div class="col-md-3">
      <label class="form-label">Nome</label>
      <input type="text" class="form-control" placeholder="Ex: Marta..." aria-label="nome" />
    </div>
    <div class="col-md-3">
      <label class="form-label">Sobrenome</label>
      <input type="text" class="form-control" placeholder="Ex: Silva..." aria-label="sobrenome" />
    </div>

    <div class="col-md-3">
      <label class="form-label">Email</label>
      <input type="email" class="form-control" placeholder ="Email:" />
    </div>
    <div class="col-md-3">
      <label class="form-label">Número</label>
      <input type="text" class="form-control" placeholder ="Numero:" />
    </div>
    <div class="col-3">
      <label class="form-label">Endereço</label>
      <input type="text" class="form-control"placeholder ="Endereço:" />
    </div>

    <div class="col-md-3">
      <label class="form-label">Cidade</label>
      <input type="text" class="form-control"placeholder ="Cidade:" />
    </div>


    <div class="col-md-2">
  <label class="form-label">Estado</label>
  <input list="estados" name="estado" class="form-control" placeholder="Selecione...">

  <datalist id="estados">
    <?php foreach ($estados as $estado): ?>
      <option value="<?= htmlspecialchars($estado['nome']) ?>">
    <?php endforeach; ?>
  </datalist>
</div>

    <div class="col-md-2">
      <label class="form-label">CEP</label>
      <input type="text" class="form-control" placeholder="____ - ___" />
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </form>
</body>
</html>
