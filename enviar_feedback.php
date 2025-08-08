<?php
$feedback = $_POST['feedback'];

// Conexão com o banco
$conn = new mysqli("localhost", "seu_usuario", "sua_senha", "RegistroUsuarios");

// Verifica conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Insere o feedback
$sql = "INSERT INTO InputsUsuario (mensagem) VALUES ('$feedback')";
if ($conn->query($sql) === TRUE) {
    echo "Feedback enviado com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>