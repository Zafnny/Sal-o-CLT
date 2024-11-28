<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cartão</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8dada;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background: white;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #e4e4e4;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: lightcoral;
            color: rgb(255, 255, 255);
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }
        button:hover {
            background-color: #e2008b;
        }
    </style>
</head>
<body>
    <form action="file:///C:/Users/heloi/OneDrive/Documentos/agendamento%20feito.html";
}" method="post">
        <style>
            h2 {
                text-align: center;
                height: 50px;
            }
        </style>
    </head>
    <body>
        <h2>Dados do Cartão</h2>

        <label for="nome">Nome no cartão</label>
        <input type="text" id="nome" name="nome" required>

        <label for="numero">Número do cartão</label>
        <input type="text" id="numero" name="numero"  oninput="formatCardNumber(this)"
        <label for="validade">Data de validade</label>
        <input type="month" id="validade" name="validade" required>

        <label for="cvv">Código de Segurança</label>
        <input type="text" id="cvv" name="cvv" required pattern="\d{3}" title="O Código de Segurança deve ter 3 dígitos.">

        <button type="submit"><onclick="redirecionar()">Confirmar agendamento</button>
        </form>
    </div>

    <script>
        function Confirmar agendamento() {
            window.location.href = "file:///C:/Users/heloi/OneDrive/Documentos/agendamento%20feito.html";
        }
    </script>
    <script>
        function formatCardNumber(input) {
            let value = input.value.replace(/\D/g, ''); 
            value = value.replace(/(\d{4})(?=\d)/g, '$1 ');
            input.value = value;
        }
    </script>

</body>
</html>
