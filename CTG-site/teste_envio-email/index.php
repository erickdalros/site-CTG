<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Blog</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Bem-vindo ao Meu Blog</h1>
    </header>
    <main>
        <section id="posts">
            <!-- Os posts serão inseridos aqui pelo JavaScript -->
        </section>
        <aside>
            <h3>Sobre mim</h3>
            <p>Texto sobre o autor do blog.</p>
        </aside>
    </main>
    <footer>
        <p>&copy; 2024 Meu Blog</p>
    </footer>

    <script src="script.js"></script>
</body>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f4f9;
    color: #333;
}

header {
    background-color: #333;
    color: #fff;
    padding: 1rem;
    text-align: center;
}

main {
    display: flex;
    padding: 1rem;
}

#posts {
    flex: 3;
}

aside {
    flex: 1;
    margin-left: 1rem;
    background: #f8f8f8;
    padding: 1rem;
    border-radius: 5px;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 1rem;
    margin-top: 1rem;
}

.post {
    background: #fff;
    margin-bottom: 1rem;
    padding: 1rem;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

.post h2 {
    color: #333;
}

.post p {
    color: #666;
}

</style>
<script>
  const posts = [
    {
        title: "Meu Primeiro Post",
        content: "Este é o conteúdo do meu primeiro post no blog!"
    },
    {
        title: "Aventura no JavaScript",
        content: "Compartilhando minha experiência aprendendo JavaScript e desenvolvendo funcionalidades."
    },
    {
        title: "Estilo com CSS",
        content: "Como deixar seu site mais bonito e organizado com CSS."
    }
];

function displayPosts() {
    const postsContainer = document.getElementById('posts');
    posts.forEach(post => {
        const postElement = document.createElement('div');
        postElement.classList.add('post');
        
        const postTitle = document.createElement('h2');
        postTitle.innerText = post.title;
        postElement.appendChild(postTitle);
        
        const postContent = document.createElement('p');
        postContent.innerText = post.content;
        postElement.appendChild(postContent);
        
        postsContainer.appendChild(postElement);
    });
}

document.addEventListener('DOMContentLoaded', displayPosts);

</script>
</html>
