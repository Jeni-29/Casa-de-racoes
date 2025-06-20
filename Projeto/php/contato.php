<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telefone = htmlspecialchars($_POST['telefone']);
    $assunto = htmlspecialchars($_POST['assunto']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // (e-mail da loja)
    $para = "contato@sualoja.com.br"; // 

    // Assunto do e-mail
    $titulo = "Formulário de Contato - $assunto";

    // Monta o corpo da mensagem
    $corpo = "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "Telefone: $telefone\n";
    $corpo .= "Assunto: $assunto\n";
    $corpo .= "Mensagem:\n$mensagem";

    // Cabeçalhos do e-mail
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Envia o e-mail
    if (mail($para, $titulo, $corpo, $headers)) {
        echo "<h2>Mensagem enviada com sucesso!</h2>";
    } else {
        echo "<h2>Erro ao enviar. Tente novamente mais tarde.</h2>";
    }
} else {
    echo "Método inválido.";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contato - Casa de Rações</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="formulario.css">
</head>
<body>

  <div class="container">
    <div class="form-container">
      <h2 class="text-center form-title mb-4"><i class="bi bi-chat-dots"></i> Fale Conosco</h2>
      <p class="text-center  mb-4 ">Entre em contato com a Casa de Rações. Responderemos o mais breve possível!</p>
      
      <form action="#" method="post">
        <div class="mb-3">
          <label for="nome" class="form-label">Nome completo</label>
          <input type="text" class="form-control" id="nome" name="nome" required>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
          <label for="telefone" class="form-label">Telefone</label>
          <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(00) 00000-0000">
        </div>

        <div class="mb-3">
          <label for="assunto" class="form-label">Assunto</label>
          <select class="form-select" id="assunto" name="assunto" required>
            <option value="">Selecione</option>
            <option value="duvida">Dúvida</option>
            <option value="reclamacao">Reclamação</option>
            <option value="sugestao">Sugestão</option>
            <option value="elogio">Elogio</option>
            <option value="outro">Outro</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="mensagem" class="form-label">Mensagem</label>
          <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
        </div>

        <div class="d-grid">
          <a href="#" target="_blank" rel="noopener noreferrer">
          <button type="submit" class="btn"><i class="bi bi-send"></i> Enviar Mensagem</button>
          </a>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
