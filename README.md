<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        section {
            margin-bottom: 40px;
        }

        .product {
            margin-bottom: 30px;
        }

        .product img {
            max-width: 100%;
            height: auto;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            margin: 0;
        }

        .buy-button {
            background-color: #4CAF50; 
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .buy-button:hover {
            background-color: #45a049;
        }

        #formulario {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            z-index: 9999;
            display: none;
        }

        #formulario input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        #formulario button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: block;
            width: 100%;
            font-size: 16px;
            margin-top: 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        #formulario button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <h1>Loja de Roupas</h1>
        <nav>
            <ul>
                <li><a href="#masculinas">Roupas Masculinas</a></li>
                <li><a href="#femininas">Roupas Femininas</a></li>
                <li><a href="#infantis">Roupas Infantis</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section id="masculinas">
        <h2>Roupas Masculinas</h2>
        <div class="product">
            <img src="imagem-produto-masculino.jpg" alt="Nome do Produto Masculino">
            <h3>Nome do Produto Masculino</h3>
            <p>Descrição do produto e suas características.</p>
            <p>Preço: R$ XX,XX</p>
            <button class="buy-button" onclick="exibirFormulario()">Comprar</button>
        </div>
        
        <!-- Adicione mais produtos masculinos aqui -->
    </section>

    <section id="femininas">
        <h2>Roupas Femininas</h2>
        <div class="product">
            <img src="imagem-produto-feminino.jpg" alt="Nome do Produto Feminino">
            <h3>Nome do Produto Feminino</h3>
            <p>Descrição do produto e suas características.</p>
            <p>Preço: R$ XX,XX</p>
            <button class="buy-button" onclick="exibirFormulario()">Comprar</button>
        </div>
        
        <!-- Adicione mais produtos femininos aqui -->
    </section>

    <section id="infantis">
        <h2>Roupas Infantis</h2>
        <div class="product">
            <img src="imagem-produto-infantil.jpg" alt="Nome do Produto Infantil">
            <h3>Nome do Produto Infantil</h3>
            <p>Descrição do produto e suas características.</p>
            <p>Preço: R$ XX,XX</p>
            <button class="buy-button" onclick="exibirFormulario()">Comprar</button>
        </div>
    <section id="acessorios">
        <h2>Acessórios</h2>
        <div class="product">
            <img src="imagem-produto-acessorios.jpg" alt="Nome do Produto Acessório">
            <h3>Nome do Produto Acessório</h3>
            <p>Descrição do produto e suas características.</p>
            <p>Preço: R$ XX,XX</p>
            <a href="#comprar" class="buy-button">Comprar</a>
        </div>
        
            <!-- Adicione mais produtos acessorios aqui -->
        </section>    
        
        <!-- Adicione mais produtos infantis aqui -->
    </section>

    <footer>
        <p>&copy; 2024 Loja de Roupas</p>
    </footer>

    <div id="formulario">
        <form>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" required>
            <h3>Informações do cartão</h3>
            <label for="numero_cartao">Número do cartão:</label>
            <input type="text" id="numero_cartao" name="numero_cartao" required>
            <label for="validade_cartao">Validade:</label>
            <input type="text" id="validade_cartao" name="validade_cartao" required>
            <label for="cvv">CVV:</label>
            <input type="text" id="cvv" name="cvv" required>

            <button type="button" onclick="confirmarCompra()">Confirmar Compra</button>
        </form>
    </div>

    <script>
        function exibirFormulario() {
            document.getElementById('formulario').style.display = 'block';
        }

        function confirmarCompra() {
            var nome = document.getElementById('nome').value;
            var email = document.getElementById('email').value;
            var telefone = document.getElementById('telefone').value;

            

            alert("Compra realizada com sucesso!\nNome: " + nome + "\nEmail: " + email + "\nTelefone: " + telefone);
            document.getElementById('formulario').style.display = 'none';
        }
    </script>
</body>
</html>
