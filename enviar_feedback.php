<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['feedback'];

// Conexão com o banco
$conn = new mysqli("localhost", "seu_usuario", "sua_senha", "RegistroUsuarios");

// Verifica conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Prepared statement para segurança
$stmt = $conn->prepare("INSERT INTO InputsUsuario (nome, email, mensagem) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nome, $email, $mensagem);

if ($stmt->execute()) {
    echo "Feedback enviado com sucesso!";
} else {
    echo "Erro ao enviar feedback: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>