<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTG - Cerro Largo/RS - Seja Sócio</title>
    <link rel="icon" href="../imagens-gerais-site/Logo-ctg-sem-fundo.png" type="image/x-icon">
    <script src="script-socio.js"></script>

<style>
        /* Estilos globais */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            overflow-x: hidden;
            background-color: #f3f3f3;
        }

        /* Cabeçalho */
        #topo-site {
            padding: 10px;
            text-align: center;
            color: black;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            background-color: #355E3B;
        }

        #titulo-site {
            font-size: 33px;
            margin: 0;
            color: white;
        }

        #subtitulo-site {
            font-size: 18px;
            margin: -10px 0 0;
            margin-top: 20px;
            color: white;
        }

        #logo-esquerda-site {
            float: left;
            width: 100px;
            height: 100px;
            margin-top: -45px;
        }

        #logo-mtg-site {
            float: right;
            width: 100px;
            height: 100px;
            margin-top: -45px;
        }

        /* Formulário */
        .container_formulario-site {
            width: 400px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            background-color: #fff;
            margin: 30px auto;
        }

        .titulo_formulario-site {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .grupo_formulario-site {
            margin-bottom: 15px;
        }

        .rotulo_input-site {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .campo_texto-site {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .botao_envio-site {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .botao_envio-site:hover {
            background-color: #0056b3;
        }

        /* Rodapé */
        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            font-family: Arial, sans-serif;
            width: 100%;
            margin-top: auto; /* Empurra o footer para o final da página */
        }

        .footer-content {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            max-width: 1000px;
            margin: auto;
            flex-wrap: wrap;
        }

        .footer-section {
            flex: 1;
            min-width: 200px;
            padding: 10px;
        }

        .footer-section h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .footer-section p, .footer-section ul, .footer-section a {
            font-size: 14px;
            line-height: 1.6;
            color: #ccc;
        }

        .footer-section a {
            color: #ccc;
            text-decoration: none;
        }

        .footer-section a:hover {
            color: #fff;
        }

        .footer-section ul {
            list-style-type: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 8px;
        }

        .footer-section .socials {
            display: flex;
            gap: 10px;
        }

        .footer-section .socials a img {
            width: 24px;
            height: 24px;
        }

        .footer-bottom {
            text-align: center;
            padding: 10px;
            font-size: 12px;
            background-color: #222;
        }

        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column;
                align-items: center;
            }

            .footer-section {
                text-align: center;
            }
        }
</style>
</head>

<body>
    <!-- Cabeçalho -->
    <div id="topo-site">
        <h1 id="titulo-site">CTG Porteira da Missões</h1>
        <img src="../imagens-gerais-site/Logo-ctg-sem-fundo.png" id="logo-esquerda-site">
        <img src="../imagens-gerais-site/mtg-logo.png" id="logo-mtg-site">
        <p id="subtitulo-site">Cerro Largo/RS - 3°RT</p>
    </div>

    <!-- Form de coleta de dados do user para enviar por email (logica está no envia.php) -->
    <div class="container_formulario-site">
        <h2 class="titulo_formulario-site">Seja Sócio</h2>
        <form action="enviar.php" method="post">
            <div class="grupo_formulario-site">
                <label for="nome" class="rotulo_input-site">Nome Completo:</label>
                <input type="text" id="nome" name="nome" class="campo_texto-site" required>
            </div>
            <div class="grupo_formulario-site">
                <label for="telefone1" class="rotulo_input-site">Telefone para Contato 1:</label>
                <input type="text" id="telefone1" name="telefone1" class="campo_texto-site" required>
            </div>
            <div class="grupo_formulario-site">
                <label for="telefone2" class="rotulo_input-site">Telefone para Contato 2:</label>
                <input type="text" id="telefone2" name="telefone2" class="campo_texto-site">
            </div>
            <div class="grupo_formulario-site">
                <label for="email" class="rotulo_input-site">Email:</label>
                <input type="email" id="email" name="email" class="campo_texto-site" required>
            </div>
            <div class="grupo_formulario-site">
                <label for="cpf" class="rotulo_input-site">CPF:</label>
                <input type="text" id="cpf" name="cpf" class="campo_texto-site" required>
            </div>
            <div class="grupo_formulario-site">
                <label class="rotulo_input-site">
                <input type="checkbox" id="aceito-termos" name="termos">
                Li e aceito os <a href="../termo-informações-pessoais/termo.php" target="_blank">termos</a>.
            </label>
            </div>

            <div class="grupo_formulario-site">
                <input type="submit" value="Enviar" class="botao_envio-site" id="botao-envio" disabled>
            </div>
        </form>
    </div>


    <footer style="background-color: #424242; color: #fff; padding: 10px 0; text-align: center; position: relative; bottom: 0; width: 100%; font-size: 12px;">
    <div style="max-width: 1200px; margin: auto;">
        <p>&copy; 2024 CTG Porteira da Missões - Cerro Largo/RS - 3°RT. Todos os direitos reservados.</p>
        <br>
        <nav style="margin-top: 5px;">
            <a href="/sobre" style="color: #fff; text-decoration: none; margin: 0 10px;">Notícias</a>
            <a href="/contato" style="color: #fff; text-decoration: none; margin: 0 10px;">Associação</a>
            <a href="/patronagem" style="color: #fff; text-decoration: none; margin: 0 10px;">Patronagem</a>
            <a href="/historia" style="color: #fff; text-decoration: none; margin: 0 10px;">História</a>
            <a href="/br" style="color: #fff; text-decoration: none; margin: 0 10px;"><br></br></a>
            <a href="/instagram" style="color: #fff; text-decoration: none; margin: 0 10px;">Instagram</a>
            <a href="/facebook" style="color: #fff; text-decoration: none; margin: 0 10px;">Facebook</a>
        </nav>
    </div>
</footer>

<!--
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h2>Sobre Nós</h2>
                <p>O Centro de Tradições Gaúchas Porteira das Missões de Cerro Largo/RS, foi fundado em... leia mais em <a href="www.youtube.com"><b>História</b></a></p>
            </div>
            
            <div class="footer-section links">
                <h2>Links Rápidos</h2>
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Notícias</a></li>
                    <li><a href="#">Seja Sócio</a></li>
                    <li><a href="#">Patronagem</a></li>
                    <li><a href="#">História</a></li>
                </ul>
            </div>
            
            <div class="footer-section contact">
                <h2>Contato</h2>
                <p>Email: ctgporteiradasmissoes@gmail.com</p>
                <p>Telefone: (55) 99134-4757</p>
                <div class="socials">
                    <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
                    <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; CTG Porteira das Missões
        </div>
    </footer>
    -->
</body>
</html>
