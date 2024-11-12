<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTG - Cerro Largo/RS - Notícias</title>
    <link rel="icon" href="../imagens-gerais-site/Logo-ctg-sem-fundo.png" type="image/x-icon">
</head>
<style>
    body, html {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    }

 #menu-site{
   margin-top: 30px;
 }
 
 #logo-esquerda-site {
   float: left;
   margin-top: -45px;
   width: 120px;
   height: 120px;
 }
 
 #topo-site {
   padding: 10px;
   text-align: center;
   color: black;
   box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
   background-color: #355E3B;
 }
 
 #titulo-site {
   font-size: 40px;
   margin: 0;
   color: white;
 }
 
 #subtitulo-site {
   margin-right: 130px;
   font-size: 15px;
   margin-top: 20px;
   color: white;
 }
 
 nav ul {
   display: flex;
   justify-content: center;
   gap: 155px; 
   list-style: none;
   margin: 0;
   padding: 0;
 }
 
 nav ul li a {
   color: rgb(0, 0, 0);
   text-decoration: none;
   font-size: 11px;
   padding: 5px 10px;
   transition: background 1ms;
   color: white;
 }
 
 nav ul li a:hover {
   background: linear-gradient(45deg, #006747 33%, #FFD200 33%, #FFD200 66%, #D50032 66%);
   border-radius: 19px;
 }
 
 #user-site{
   height: 25px;
   width: 30px;
 }
</style>
<body>
      <!-- SUPERIOR -->
  <div id="topo-site">
    <h1 id="titulo-site">CTG Porteira da Missões</h1>
    <img src="../imagens-gerais-site/Logo-ctg-sem-fundo.png" id="logo-esquerda-site">
    <p id="subtitulo-site">Cerro Largo/RS - 3°RT</p>

    <!-- MENU OPC SITE -->
    <div class="menu-site">
      <header>
        <nav>
          <ul id="menu-site">
            <li><strong><a href="#">Início</a></strong></li>
            <li><strong><a href="#">Notícias</a></strong></li>
            <li><strong><a href="#">Associação</a></strong></li>
            <li><strong><a href="#">Patronagem</a></strong></li>
            <li><strong><a href="#">História</a></strong></li>
            <li><strong><a href="##" onclick="usersite()"><img src="../imagens-gerais-site/user.png" id="user-site" ></a></li> 
          </ul>
        </div>
        </nav>
      </header>
    </div>

</body>
</html>