/* ── Toggle PT/EN ── */
  function setLang(lang) {
    document.querySelectorAll('[data-pt]').forEach(el => {
      el.innerHTML = el.getAttribute('data-' + lang);
    });
    document.getElementById('btn-pt').classList.toggle('active', lang === 'pt');
    document.getElementById('btn-en').classList.toggle('active', lang === 'en');
    document.documentElement.lang = lang === 'pt' ? 'pt-BR' : 'en';
    if (window.setHeroRotorLang) window.setHeroRotorLang(lang);
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

/* ── Blog dinâmico (WordPress.com REST API) ── */

function formatarDataBlog(iso, lang) {
    const data = new Date(iso);
    return data.toLocaleDateString(lang === 'en' ? 'en-US' : 'pt-BR', {
        day: '2-digit', month: 'short', year: 'numeric'
    });
}

function extrairResumoBlog(html, limite = 110) {
    const div = document.createElement('div');
    div.innerHTML = html || '';
    let texto = (div.textContent || div.innerText || '').replace(/\s+/g, ' ').trim();
    if (texto.length > limite) {
        texto = texto.slice(0, limite).trim() + '…';
    }
    return texto;
}

async function carregarBlog() {

    const grid = document.getElementById("blog-grid");
    if (!grid) return;

    try {

        const resposta = await fetch(
            "https://public-api.wordpress.com/wp/v2/sites/limaocravo.blog/posts?per_page=3&_fields=title,excerpt,date,link,jetpack_featured_media_url"
        );

        if (!resposta.ok) throw new Error("Falha na resposta da API: " + resposta.status);

        const posts = await resposta.json();
        const langAtual = document.getElementById('btn-en').classList.contains('active') ? 'en' : 'pt';

        grid.innerHTML = posts.slice(0, 3).map(post => {

            const imagem =
                post.jetpack_featured_media_url ||
                "https://via.placeholder.com/800x500";
            const resumo = extrairResumoBlog(post.excerpt && post.excerpt.rendered);
            const dataPt = formatarDataBlog(post.date, 'pt');
            const dataEn = formatarDataBlog(post.date, 'en');

            return `
                <article class="blog-card">

                    <img src="${imagem}" alt="${post.title.rendered}" loading="lazy">

                    <div class="blog-info">

                        <span class="blog-date" data-pt="${dataPt}" data-en="${dataEn}">${langAtual === 'en' ? dataEn : dataPt}</span>

                        <h3>${post.title.rendered}</h3>

                        <p class="blog-excerpt">${resumo}</p>

                        <a href="${post.link}" target="_blank" rel="noopener"
                           data-pt="Ler artigo →" data-en="Read article →">
                            ${langAtual === 'en' ? 'Read article →' : 'Ler artigo →'}
                        </a>

                    </div>

                </article>
            `;

        }).join('');

    } catch (erro) {

        console.error("Erro ao carregar posts:", erro);

        grid.innerHTML = `
            <p class="blog-error"
               data-pt="Não foi possível carregar os posts do blog no momento. Tente novamente mais tarde."
               data-en="We couldn't load the blog posts right now. Please try again later.">
                Não foi possível carregar os posts do blog no momento. Tente novamente mais tarde.
            </p>
        `;

    }

}

document.addEventListener("DOMContentLoaded", carregarBlog);

/* ── Caixa rotativa do H1 (Design / Marketing / Tecnologia) ── */
(function heroRotor() {

    const box = document.getElementById('heroRotor');
    if (!box) return;

    const words = {
        pt: [
            { text: 'tecnologia', color: '#7dd3fc' },
            { text: 'design',     color: '#F4B03A' },
            { text: 'marketing',  color: '#4ade80' }
        ],
        en: [
            { text: 'technology', color: '#7dd3fc' },
            { text: 'design',     color: '#F4B03A' },
            { text: 'marketing',  color: '#4ade80' }
        ]
    };

    const period = 2400;
    const transitionMs = 560;

    let current = document.getElementById('heroWordA');
    let incoming = document.getElementById('heroWordB');
    const measure = box.querySelector('.rotor-measure');

    let list = words.pt;
    let idx = 0;
    let timer = null;

    function measureWidth(text) {
        measure.textContent = text;
        return measure.getBoundingClientRect().width;
    }

    function setBoxWidth(text) {
        box.style.width = (measureWidth(text) + 2) + 'px';
    }

    function applyColor(color) {
        box.style.color = color;
    }

    function paint(index) {
        current.textContent = list[index].text;
        incoming.textContent = list[(index + 1) % list.length].text;
        setBoxWidth(list[index].text);
        applyColor(list[index].color);
    }

    function tick() {
        idx = (idx + 1) % list.length;
        const nextNext = list[(idx + 1) % list.length];

        current.classList.add('rotor-exit');
        incoming.classList.remove('rotor-incoming');
        setBoxWidth(list[idx].text);
        applyColor(list[idx].color);

        setTimeout(() => {
            current.classList.remove('rotor-exit');
            current.classList.add('rotor-instant');
            current.textContent = nextNext.text;
            current.style.transform = 'translateY(100%)';
            void current.offsetHeight;
            current.classList.remove('rotor-instant');
            current.classList.add('rotor-incoming');
            current.style.transform = ''; // solta o inline style: sem isso, ele grudava e travava a próxima troca

            const tmp = current;
            current = incoming;
            incoming = tmp;
        }, transitionMs);
    }

    function start() {
        if (timer) clearInterval(timer);
        const reduceMotion = window.matchMedia &&
            window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        if (reduceMotion) return;
        timer = setInterval(tick, period);
    }

    window.setHeroRotorLang = function (lang) {
        list = words[lang] || words.pt;
        idx = 0;
        current.classList.remove('rotor-exit', 'rotor-incoming', 'rotor-instant');
        current.style.transform = '';
        incoming.classList.remove('rotor-exit', 'rotor-instant');
        incoming.classList.add('rotor-incoming');
        incoming.style.transform = '';
        paint(0);
    };

    paint(0);
    start();

})();