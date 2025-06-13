
document.addEventListener("DOMContentLoaded", function () {
    const botoesFiltro = document.querySelectorAll(".filtro-btn");
    const produtos = document.querySelectorAll(".produto-card");

    botoesFiltro.forEach(botao => {
        botao.addEventListener("click", () => {
            const filtro = botao.getAttribute("data-filtro");

            produtos.forEach(produto => {
                const categoria = produto.getAttribute("data-categoria");

                if (filtro === "Todos" || categoria === filtro) {
                    produto.style.display = "block";
                } else {
                    produto.style.display = "none";
                }
            });
        });
    });
});

