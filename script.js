/* ── Toggle PT/EN ── */
  function setLang(lang) {
    document.querySelectorAll('[data-pt]').forEach(el => {
      el.innerHTML = el.getAttribute('data-' + lang);
    });
    document.getElementById('btn-pt').classList.toggle('active', lang === 'pt');
    document.getElementById('btn-en').classList.toggle('active', lang === 'en');
    document.documentElement.lang = lang === 'pt' ? 'pt-BR' : 'en';
  }

  /* ── Filtro de cases ── */
  function filterCases(cat) {
    document.querySelectorAll('.case-card').forEach(c => {
      c.classList.toggle('show', cat === 'all' || c.dataset.cat === cat);
    });
    document.querySelectorAll('.case-tab').forEach(t => {
      t.className = 'case-tab';
    });
    const map = { all:'active-all', design:'active-design', mkt:'active-mkt', tech:'active-tech' };
    event.target.classList.add(map[cat]);
  }

  /* ── Header scroll shadow ── */
  window.addEventListener('scroll', () => {
    document.getElementById('header').classList.toggle('scrolled', window.scrollY > 40);
  });

  /* ── Reveal on scroll ── */
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => { if(e.isIntersecting) { e.target.classList.add('visible'); } });
  }, { threshold: 0.12 });
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

async function carregarBlog() {

    try {

        const resposta = await fetch(
            "https://public-api.wordpress.com/wp/v2/sites/limaocravo.blog/posts"
        );

        const posts = await resposta.json();

        const grid = document.getElementById("blog-grid");

        grid.innerHTML = "";

        posts.slice(0,3).forEach(post => {

            const imagem =
                post.jetpack_featured_media_url ||
                "https://via.placeholder.com/800x500";

            grid.innerHTML += `
                <article class="blog-card">

                    <img src="${imagem}" alt="">

                    <div class="blog-info">

                        <h3>${post.title.rendered}</h3>

                        <a href="${post.link}" target="_blank">
                            Ler artigo →
                        </a>

                    </div>

                </article>
            `;

        });

    } catch (erro) {

        console.error("Erro ao carregar posts:", erro);

    }

}

document.addEventListener("DOMContentLoaded", carregarBlog);