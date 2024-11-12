<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CTG - Cerro Largo/RS</title>
  <link rel="icon" href="imagens-gerais-site/Logo-ctg-sem-fundo.png" type="image/x-icon">
  <style>

body, html {
  background-color: #f3f3f3;
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
  font-size: 10px;
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

.footer {
  background-color: #333;
  color: #fff;
  padding: 20px 0;
  font-family: Arial, sans-serif;
  width: 100%;
  margin-top: auto;
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

/* Estilo para o carrossel */
.carousel-container {
  position: relative;
  max-width: 600px; /* Ajuste a largura conforme necessário */
  margin: 20px auto;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);}

.carousel-slide {
  display: flex;
  transition: transform 1.0s ease;
  width: 100%;
}

.carousel-slide img {
  width: 560px; /* Cada imagem ocupa toda a largura do contêiner */
  height: auto;
}

.carousel-buttons {
  position: absolute;
  top: 50%;
  width: 100%;
  display: flex;
  justify-content: space-between;
  transform: translateY(-50%);
}

.carousel-buttons button {
  background-color: rgba(0, 0, 0, 0.5);
  color: white;
  border: none;
  padding: 10px;
  cursor: pointer;
}

.carousel-buttons button:hover {
  background-color: rgba(0, 0, 0, 0.7);
}
  </style>
</head>
<body>

  <!-- SUPERIOR -->
  <div id="topo-site">
    <h1 id="titulo-site">CTG Porteira da Missões</h1>
    <img src="imagens-gerais-site/Logo-ctg-sem-fundo.png" id="logo-esquerda-site">
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
            <li><strong><a href="##" onclick="usersite()"><img src="imagens-gerais-site/user.png" id="user-site" ></a></li> 
          </ul>
        </div>
        </nav>
      </header>
    </div>

  <!-- CARROSSEL -->
  <div class="carousel-container"> <!-- COLOCAR A MESMA RRESOLUÇÃO SEMPRE PARA CADA SLIDE -->
    <div class="carousel-slide" id="carouselSlide">
      <img src="imagens-gerais-site/sejasocio.jpg" alt="Imagem1">
      <img src="imagens-gerais-site/contatosocio.jpg" alt="Imagem2">
    </div>
    <div class="carousel-buttons">
      <button onclick="prevSlide()">&#10094;</button>
      <button onclick="nextSlide()">&#10095;</button>
    </div>
  </div>

  <footer style="background-color: #424242; color: #fff; padding: 10px 0; text-align: center; position: relative; bottom: 0; width: 100%; font-size: 12px; margin-top: 400px">
    <div style="max-width: 1200px; margin: auto;">
        <p>&copy; 2024 CTG Porteira da Missões - Cerro Largo/RS - 3°RT. Todos os direitos reservados.</p>
        <nav style="margin-top: 5px;">
            <a href="/noticias" style="color: #fff; text-decoration: none; margin: 0 10px;">Notícias</a>
            <a href="/associacao" style="color: #fff; text-decoration: none; margin: 0 10px;">Associação</a>
            <a href="/patronagem" style="color: #fff; text-decoration: none; margin: 0 10px;">Patronagem</a>
            <a href="/historia" style="color: #fff; text-decoration: none; margin: 0 10px;">História</a>
            <a href="/br" style="color: #fff; text-decoration: none; margin: 0 10px;"><br></br></a>
            <a href="/instagram" style="color: #fff; text-decoration: none; margin: 0 10px;">Instagram</a>
            <a href="/facebook" style="color: #fff; text-decoration: none; margin: 0 10px;">Facebook</a>
        </nav>
    </div>
</footer>

<script>
  let currentSlide = 0;
  const slides = document.querySelectorAll(".carousel-slide img");

  function showSlide(index) {
    const slideWidth = slides[0].clientWidth;
    document.getElementById("carouselSlide").style.transform = `translateX(${-slideWidth * index}px)`;
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
  }

  function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
  }

  // Optional: Auto-slide every 5 seconds
  setInterval(nextSlide, 5000);


  function usersite(){
    window.alert("Função ainda indisponível");
  }
</script>
</body>
</html>
