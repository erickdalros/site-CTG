<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termo Autorização</title>
    <style>
        /* Estiliza o body e a estrutura da página */
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Centraliza o conteúdo */
        .container {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%; /* Preenche toda a altura da tela */
            padding: 20px;
        }

        /* Estiliza o título */
        h1 {
            text-align: center; /* Centraliza o título */
            margin-bottom: 20px; /* Espaço entre o título e o conteúdo */
            font-size: 50px;
        }

        /* Estiliza a .corpo para adicionar borda e sombra */
        .corpo {
            color: rgb(0, 0, 0); /* Para contraste com o fundo */
            padding: 50px; /* Adiciona espaço interno */
            border: 2px solid #000; /* Borda preta */
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3); /* Adiciona sombra */
            max-width: 1200px; /* Define uma largura máxima */
            width: 100%; /* Garante que não passe da largura máxima */
            margin: 0 20px; /* Adiciona espaço lateral */
            text-align: justify; /* Alinha o texto de forma justificada */
            flex-grow: 1; /* Faz o conteúdo crescer para ocupar o espaço restante */
            font-size: 25px; /* Tamanho da fonte do parágrafo */
        }

        /* Estiliza o botão */
        #botao {
            background-color: #007BFF;
            color: white;
            padding: 12px 25px;
            text-align: center;
            text-decoration: none; /* Remove o sublinhado padrão do link */
            border-radius: 50px; /* Bordas arredondadas */
            font-size: 18px;
            cursor: pointer;
            transition: all 0.4s ease; /* Transição suave para todas as propriedades */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); /* Sombra sutil */
            align-self: center; /* Centraliza o botão horizontalmente */
        }

        #botao:hover {
            background-color: #0056b3; /* Cor de fundo quando o mouse passa por cima */
            transform: scale(1.1); /* Aumenta o tamanho do botão */
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3); /* Aumenta a sombra */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>TERMO DE AUTORIZAÇÃO PARA COLETA DE DADOS</h1>
        <div class="corpo">
            <p>
                Ao concordar com os termos descritos, o interessado está ciente de que as informações fornecidas serão utilizadas exclusivamente para fins de associação. É importante destacar que os dados apresentados não são suficientes, por si só, para concluir o processo de associação. Dentro de até 48 horas úteis, um membro da patronagem entrará em contato com o interessado por meio do número de telefone informado nos campos acima.
                <br>
                Comprometemo-nos a manter seus dados armazenados com o mais alto nível de segurança e em conformidade com as normas vigentes. No entanto, não nos responsabilizamos por possíveis vazamentos ou ataques cibernéticos que possam comprometer essas informações.
            </p>
        </div>

        <!-- Botão no final da página -->
        <button id="botao" onclick="retorn()">Concordar e retornar</button>
    </div>

    <script>
        // Função JavaScript para redirecionar para outro site
        function retorn(){
            window.location.href = "retorna"; // Substitua "retorna" pelo link real
        }
    </script>
</body>
</html>
