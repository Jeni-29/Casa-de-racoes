const filtroItems = document.querySelectorAll(".sidebar ul li dropdown-menu");
const produtos = document.querySelectorAll(".produto-card");

filtroItems.forEach(item => {
    item.addEventListener("click", () => {
        const filtro = item.getAttribute("data-filtro");

        produtos.forEach(produto => {
            const categoria = produto.getAttribute("data-categoria");

            if (filtro === "all" || categoria === filtro) {
                produto.style.display = "block";
            } else {
                produto.style.display = "none";
            }
        });
    });
});