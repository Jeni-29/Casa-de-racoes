<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = htmlspecialchars($_POST['nome']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telefone = htmlspecialchars($_POST['telefone']);
    $assunto = htmlspecialchars($_POST['assunto']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Destinatário (e-mail da loja)
    $para = "contato@sualoja.com.br"; // <-- troque pelo e-mail real da loja

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
