    // Função que se o usuário não clicar no "concordo com os termos" ele não consegue enviar
    document.addEventListener('DOMContentLoaded', function () {
        const checkbox = document.getElementById('aceito-termos');
        const botaoEnvio = document.getElementById('botao-envio');

        checkbox.addEventListener('change', function () {
            if (checkbox.checked) {
                botaoEnvio.disabled = false;
            } else {
                botaoEnvio.disabled = true;
            }
        });
    });
