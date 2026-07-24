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
    const track = document.getElementById('rotorTrack');

    if (!box || !track) {
        console.warn('[heroRotor] não encontrou #heroRotor ou #rotorTrack no HTML — a rotação não vai rodar. Confira se o index.html está atualizado.');
        return;
    }
    console.log('[heroRotor] elementos encontrados, iniciando a rotação.');

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
    const lineHeightEm = 1.15;

    const measure = box.querySelector('.rotor-measure');
    let list = words.pt;
    let idx = 0;
    let timer = null;

    // Monta a fita: as N palavras + uma cópia da primeira no final,
    // pra dar a volta sem "voltar visualmente" (é idêntica à original).
    function buildTrack() {
        track.innerHTML = '';
        list.forEach(w => {
            const s = document.createElement('span');
            s.className = 'rotor-word';
            s.textContent = w.text;
            track.appendChild(s);
        });
        const clone = document.createElement('span');
        clone.className = 'rotor-word';
        clone.textContent = list[0].text;
        clone.setAttribute('aria-hidden', 'true');
        track.appendChild(clone);
    }

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

    function goTo(i, instant) {
        if (instant) track.style.transition = 'none';
        track.style.transform = 'translateY(-' + (i * lineHeightEm) + 'em)';
        if (instant) {
            void track.offsetHeight; // força o navegador a aplicar antes de reativar a transição
            track.style.transition = '';
        }
    }

    function paintCurrent() {
        const w = list[idx % list.length];
        setBoxWidth(w.text);
        applyColor(w.color);
    }

    function tick() {
        idx++;
        goTo(idx, false);
        paintCurrent();

        // Ao chegar na cópia (idêntica à primeira palavra), espera a
        // transição terminar e volta pro início instantaneamente.
        if (idx === list.length) {
            setTimeout(() => {
                idx = 0;
                goTo(0, true);
            }, transitionMs);
        }
    }

    function start() {
        if (timer) clearInterval(timer);
        timer = setInterval(tick, period);
    }

    window.setHeroRotorLang = function (lang) {
        list = words[lang] || words.pt;
        idx = 0;
        buildTrack();
        goTo(0, true);
        paintCurrent();
    };

    buildTrack();
    goTo(0, true);
    paintCurrent();
    start();
    console.log('[heroRotor] fita montada com', track.children.length, 'palavras. Largura da caixa:', box.style.width);

})();

/* ── Header some ao rolar para baixo (só tem efeito visual no mobile) ── */
(function headerAutoHide() {
    const header = document.getElementById('header');
    if (!header) return;
    let lastScrollY = window.scrollY;
    const threshold = 80;

    window.addEventListener('scroll', () => {
        if (header.classList.contains('nav-open')) return;
        const currentScrollY = window.scrollY;
        if (currentScrollY > lastScrollY && currentScrollY > threshold) {
            header.classList.add('header-hidden');
        } else {
            header.classList.remove('header-hidden');
        }
        lastScrollY = currentScrollY;
    }, { passive: true });
})();

/* ── Menu mobile (hambúrguer + acordeão de Serviços) ── */
(function mobileNav() {
    const header = document.getElementById('header');
    const toggle = document.getElementById('navToggle');
    if (!header || !toggle) return;

    toggle.addEventListener('click', () => {
        const isOpen = header.classList.toggle('nav-open');
        toggle.classList.toggle('active', isOpen);
        toggle.setAttribute('aria-expanded', String(isOpen));
    });

    const navDropdown = header.querySelector('.nav-dropdown');
    if (!navDropdown) return;
    const trigger = navDropdown.querySelector(':scope > a');
    trigger.addEventListener('click', (e) => {
        if (window.innerWidth <= 768) {
            e.preventDefault();
            navDropdown.classList.toggle('dropdown-open');
        }
    });
})();

/* ── WhatsApp ("Falar com um Especialista") ──
   Número centralizado aqui: quando o número real da Limão Cravo estiver
   disponível, basta trocar WHATSAPP_NUMBER — todos os links do site
   (marcados com o atributo data-whatsapp) são atualizados automaticamente. */
const WHATSAPP_NUMBER = '5500000000000'; // TODO: substituir pelo número real da Limão Cravo
const WHATSAPP_MESSAGE = 'Olá! Vim pelo site da Limão Cravo e gostaria de falar com um especialista.';

document.querySelectorAll('[data-whatsapp]').forEach(el => {
    el.setAttribute('href', `https://wa.me/${WHATSAPP_NUMBER}?text=${encodeURIComponent(WHATSAPP_MESSAGE)}`);
    el.setAttribute('target', '_blank');
    el.setAttribute('rel', 'noopener');
});

/* ── Formulário de orçamento (orcamento.html) ──
   Ainda sem backend: só valida os campos obrigatórios no navegador e
   não envia para lugar nenhum até um serviço de envio ser conectado. */
const quoteForm = document.getElementById('quoteForm');
if (quoteForm) {
    quoteForm.addEventListener('submit', function (e) {
        e.preventDefault();
    });
}