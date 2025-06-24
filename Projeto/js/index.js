  //===================Mostra cada categoria ======================  
    document.addEventListener("DOMContentLoaded", function () {
    const botoesFiltro = document.querySelectorAll(".filtro-btn");
    const grupos = document.querySelectorAll(".grupo");

    const urlParams = new URLSearchParams(window.location.search);
    const filtroInicial = urlParams.get('categoria');

    if (filtroInicial) {
        filtrarGrupos(filtroInicial);
    }

    botoesFiltro.forEach(botao => {
        botao.addEventListener("click", () => {
            const filtro = botao.getAttribute("data-filtro");
            filtrarGrupos(filtro);
        });
    });

// ================= parte para puxar as seção na pagina home================

    function filtrarGrupos(filtro) {
        grupos.forEach(grupo => {
            // Busca todos os produtos dentro da seção
            const produtos = grupo.querySelectorAll(".produto-card");
            let algumVisivel = false;

            produtos.forEach(produto => {
                const categoria = produto.getAttribute("data-categoria");

                // Verifica se o produto é da categoria clicada
                if (filtro === "Todos" || categoria === filtro) {
                    produto.style.display = "block";
                    algumVisivel = true;
                } else {
                    produto.style.display = "none";
                }
            });

            // Só mostra a seção se algum produto dela estiver visível
            grupo.style.display = algumVisivel ? "block" : "none";
        });
    }
});


  const btn = document.getElementById("btnTopo");

  window.onscroll = function () {
    if (document.documentElement.scrollTop >100) {
      btn.style.display = "block";
    } else {
      btn.style.display = "none";
    }
  };

  btn.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });

// Remove target="_blank" no mobile
document.addEventListener("DOMContentLoaded", function () {
  if (window.innerWidth <= 767) {
    const links = document.querySelectorAll('a[target="_blank"]');

    links.forEach(link => {
      link.removeAttribute("target");
    });
  }
});

 