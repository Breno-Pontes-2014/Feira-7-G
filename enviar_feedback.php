<?php
$feedback = htmlspecialchars(trim($_POST["feedback"]), ENT_QUOTES, 'UTF-8');
// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura o feedback enviado
    $feedback = trim($_POST["feedback"]);

    // Verifica se o campo não está vazio
    if (!empty($feedback)) {
        // Define o caminho do arquivo onde os feedbacks serão armazenados
        $arquivo = "feedbacks.txt";

        // Prepara o conteúdo com data e hora
        $data = date("d/m/Y H:i:s");
        $conteudo = "[$data] - $feedback" . PHP_EOL;

        // Tenta escrever no arquivo
        if (file_put_contents($arquivo, $conteudo, FILE_APPEND | LOCK_EX)) {
            echo "<h2>Obrigado pelo seu feedback!</h2>";
        } else {
            echo "<h2>Erro ao salvar o feedback. Tente novamente mais tarde.</h2>";
        }
    } else {
        echo "<h2>O campo de feedback está vazio.</h2>";
    }
} else {
    echo "<h2>Requisição inválida.</h2>";
}
?>