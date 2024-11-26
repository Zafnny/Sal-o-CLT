<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $servico = $_POST['servico'];
    $outroServicoTexto = isset($_POST['outroServicoTexto']) ? $_POST['outroServicoTexto'] : null;

    if ($servico == "Outro" && !empty($outroServicoTexto)) {
        $servico = $outroServicoTexto;
    }

    $sql = "INSERT INTO agendamentos (nome, email, telefone, data, hora, servico, outro_servico) 
            VALUES ('$nome', '$email', '$telefone', '$data', '$hora', '$servico', '$outroServicoTexto')";

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function mostrarOutro() {
            var servico = document.getElementById('servico');
            var outroServico = document.getElementById('outroServico');
            if (servico.value === "Outro") {
                outroServico.style.display = "block";
            } else {
                outroServico.style.display = "none";
            }
        }
    </script>
</head>
<body>
    <?php include("header.php"); ?>

    <main>
        <section class="agendamento-form">
            <form method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" required>

                <label for="data">Data:</label>
                <input type="date" id="data" name="data" required>

                <label for="hora">Hora:</label>
                <input type="time" id="hora" name="hora" required>

                <label for="servico">Serviço:</label>
                <select id="servico" name="servico" required onchange="mostrarOutro()">
                    <option value="" disabled selected>Selecione um serviço</option>
                    <option value="Escova">Escova</option>
                    <option value="Permanente">Permanente</option>
                    <option value="Progressiva">Progressiva</option>
                    <option value="Hidratação">Hidratação</option>
                    <option value="Babyliss">Babyliss</option>
                    <option value="Maquiagem">Maquiagem</option>
                    <option value="Unha">Unha</option>
                    <option value="Outro">Outro</option>
                </select>

                <div id="outroServico" style="display:none;">
                    <label for="outroServicoTexto">Qual serviço?</label>
                    <input type="text" id="outroServicoTexto" name="outroServicoTexto" placeholder="Digite o serviço" />
                </div>

                <button type="submit" class="btn">Agendar</button>
            </form>
        </section>
    </main>

    <?php include("footer.php"); ?>
</body>
</html>
