
document.addEventListener("DOMContentLoaded", function () {
    const botoesFiltro = document.querySelectorAll(".filtro-btn");
    const produtos = document.querySelectorAll(".produto-card");

    // Verifica se veio um filtro da URL (ex: ?categoria=Rações)
    const urlParams = new URLSearchParams(window.location.search);
    const filtroInicial = urlParams.get('categoria');

    if (filtroInicial) {
        filtrarProdutos(filtroInicial);
    }

    botoesFiltro.forEach(botao => {
        botao.addEventListener("click", () => {
            const filtro = botao.getAttribute("data-filtro");
            filtrarProdutos(filtro);
        });
    });

    function filtrarProdutos(filtro) {
        produtos.forEach(produto => {
            const categoria = produto.getAttribute("data-categoria");

            if (filtro === "Todos" || categoria === filtro) {
                produto.style.display = "block";
            } else {
                produto.style.display = "none";
            }
        });
    }
});


