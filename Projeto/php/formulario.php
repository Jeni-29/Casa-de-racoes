<?php
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
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Formulário</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="formulario.css">
  <link rel="stylesheet" href="style.css">
</head>

<body class="p-3">

    <!-- Cabeçalho -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light px-4 py-3">
            <a class="navbar-brand" href="index.html">
                <img src="img/logo.png" alt="Logo da Casa de Rações" style="height: 60px;">
            </a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.html" title="Home">Home <i class="fa-solid fa-house"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="Produto.html" title="Produtos">Produtos <i class="fa-solid fa-cart-shopping"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="ofertas.html" title="Ofertas">Ofertas <i class="fa-solid fa-bomb"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="formulario.php" title="Contato">Contato <i class="fa-solid fa-phone"></i></a></li>
            </ul>
        </nav>
    </header>

  <!-- Formulário -->
  <div class="container">
    <form class="row g-3" method="post" action="processa_formulario.php">
      <div class="col-md-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex: Marta...">
      </div>

      <div class="col-md-3">
        <label for="sobrenome" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Ex: Silva...">
      </div>

      <div class="col-md-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
      </div>

      <div class="col-md-3">
        <label for="numero" class="form-label">Número</label>
        <input type="text" class="form-control" id="numero" name="numero" placeholder="(99) 99999-9999">
      </div>

      <div class="col-3">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua, número, bairro">
      </div>

      <div class="col-md-3">
        <label for="cidade" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Sua cidade">
      </div>

      <div class="col-md-2">
        <label for="estado" class="form-label">Estado</label>
        <input list="estados" id="estado" name="estado" class="form-control" placeholder="Selecione...">
        <datalist id="estados">
          <?php foreach ($estados as $estado): ?>
            <option value="<?= htmlspecialchars($estado['nome']) ?>">
          <?php endforeach; ?>
        </datalist>
      </div>

      <div class="col-md-2">
        <label for="cep" class="form-label">CEP</label>
        <input type="text" class="form-control" id="cep" name="cep" placeholder="00000-000">
      </div>

      <div class="col-12 mt-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </form>
  </div>

</body>

</html>
