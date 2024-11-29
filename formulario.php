<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root"; // Altere conforme necessário
$password = ""; // Altere conforme necessário
$dbname = "salao_beauty";

// Criação da conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificação de conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitização e validação dos dados do formulário
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $servico = mysqli_real_escape_string($conn, $_POST['servico']);

    // Preparando a consulta para evitar SQL Injection
    $stmt = $conn->prepare("INSERT INTO clientes (nome, telefone, email, servico) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nome, $telefone, $email, $servico);

    // Executando a consulta
    if ($stmt->execute()) {
        $message = "Novo registro criado com sucesso!";
    } else {
        $message = "Erro: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Salão de Beleza</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center; /* Centraliza a página */
            align-items: center; /* Alinha verticalmente */
            height: 100vh; /* Altura total da tela */
            background-color: #f9f9f9;
        }
        .form-container {
            width: 100%;
            max-width: 400px; /* Define a largura máxima */
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: rgb(189, 224, 254); /* Cor de fundo personalizada */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Adiciona uma sombra leve */
        }
        .form-container h2 {
            text-align: center;
        }
        .form-container input, .form-container select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box; /* Garante que o padding não ultrapasse a largura total */
        }
        .form-container button {
            width: 100%;
            padding: 12px;
            background-color: #ffafcc; /* Cor do botão conforme solicitado */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #ff99b3;
        }
        .message {
            text-align: center;
            margin: 20px 0;
            font-size: 1.2rem;
            color: green;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Formulário de Agendamento</h2>
    <?php if (isset($message)) { ?>
        <div class="message">
            <?php echo $message; ?>
        </div>
    <?php } ?>
    <form method="POST" action="formulario.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="servico">Serviço Desejado:</label>
        <select id="servico" name="servico" required>
            <option value="Corte de Cabelo">Corte de Cabelo</option>
            <option value="Manicure">Manicure</option>
            <option value="Pedicure">Pedicure</option>
            <option value="Massagem">Massagem</option>
            <option value="Escova">Escova</option>
        </select>

        <button type="submit">Enviar</button>
    </form>
</div>

</body>
</html>
