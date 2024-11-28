<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Estilos gerais */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2rem;
        }

        header .header-buttons .btn {
            background-color: #ff9900;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
        }

        header .header-buttons .btn:hover {
            background-color: #cc7a00;
        }

        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 1.2rem;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        section {
            padding: 40px 10%;
            text-align: center;
        }

        section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .product {
            display: inline-block;
            width: 30%;
            margin: 20px 1%;
        }

        .product a {
            text-decoration: none;
            color: #333;
        }

        .product img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product h3 {
            margin-top: 10px;
            font-size: 1.5rem;
            font-weight: bold;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        footer .social-icons a {
            color: white;
            font-size: 2rem;
            margin: 0 10px;
            text-decoration: none;
        }

        footer .social-icons a:hover {
            color: #ff9900;
        }
    </style>
</head>

<body>
    
    <header>
        <h1>Moda Front-end</h1>
        <div class="header-buttons">
            <a href="formulario.php" class="btn" aria-label="Agendar Horário">Agendar Horário</a>
        </div>
        <nav aria-label="Main navigation">
            <ul>
                <li><a href="#femininas">Roupas Femininas</a></li>
                <li><a href="#infantis">Roupas Infantis</a></li>
                <li><a href="#acessorios">Acessórios</a></li>
                <li><a href="#contatos">Contatos</a></li>
            </ul>
        </nav>
    </header>

    <!-- Seção de Produtos Femininas -->
    <section id="femininas">
        <h2>Roupas Femininas</h2>
        <div class="product">
            <a href="blusas.html">
                <img src="blusa.jpeg" alt="Blusas Femininas" class="image-category">
                <h3>Blusas</h3>
            </a>
        </div>
        <div class="product">
            <a href="saias.html">
                <img src="saia.jpeg" alt="Saias" class="image-category">
                <h3>Saias</h3>
            </a>
        </div>
        <div class="product">
            <a href="calca.html">
                <img src="calça.jpeg" alt="Calças" class="image-category">
                <h3>Calças</h3>
            </a>
        </div>
    </section>

    <!-- Seção de Redes Sociais no Rodapé -->
    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Moda Front-end. Todos os direitos reservados.</p>
            <nav class="social-icons" aria-label="Redes sociais">
                <a href="https://wa.me/seunumero" target="_blank" class="icon whatsapp" title="WhatsApp" aria-label="WhatsApp">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://twitter.com/seuperfil" target="_blank" class="icon twitter" title="Twitter" aria-label="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://instagram.com/seuperfil" target="_blank" class="icon instagram" title="Instagram" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://facebook.com/seuperfil" target="_blank" class="icon facebook" title="Facebook" aria-label="Facebook">
                    <i class="fab fa-facebook"></i>
                </a>
            </nav>
        </div>
    </footer>

</body>

</html>
