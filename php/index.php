<?php $pageTitle = "Limão Cravo — Design, Marketing e Tecnologia"; $base = ''; $assets = '../'; include __DIR__ . '/includes/header.php'; ?>
<!-- ── HERO ── -->
<div class="hero-wrap">
<section class="hero">
  <div class="hero-text reveal">
    <h1 class="hero-h1">
      <span class="rotor-line">
        <span class="rotor-inline" id="heroRotor">
          <span class="rotor-track" id="rotorTrack"><span class="rotor-word">tecnologia</span></span>
          <span class="rotor-measure" aria-hidden="true"></span>
        </span>
      </span><br>
      <span class="h1-line" data-pt="para sua empresa crescer" data-en="to grow your business">para sua empresa crescer</span>
    </h1>
    <p class="hero-sub"
       data-pt="Transformamos negócios em marcas fortes, experiências digitais memoráveis e resultados mensuráveis."
       data-en="We transform businesses into strong brands, memorable digital experiences and measurable results.">
      Transformamos negócios em marcas fortes, experiências digitais memoráveis e resultados mensuráveis.
    </p>
    <div class="hero-btns">
      <a class="btn-primary" href="#cases"
         data-pt="Ver nossos cases" data-en="See our cases">Ver nossos cases</a>
      <a class="btn-ghost" href="#" data-whatsapp
         data-pt="Falar com um especialista →" data-en="Talk to a specialist →">Falar com um especialista →</a>
    </div>
    <div class="hero-stats reveal">
      <div class="hero-stat">
        <div class="hero-stat-icon"><img src="../imagens/icones/trophy.png" alt=""></div>
        <div class="hero-stat-text">
          <div class="hero-stat-num">16+</div>
          <div class="hero-stat-lbl" data-pt="anos de mercado" data-en="years in business">anos de mercado</div>
        </div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-icon"><img src="../imagens/icones/building-office-2.png" alt=""></div>
        <div class="hero-stat-text">
          <div class="hero-stat-num">200+</div>
          <div class="hero-stat-lbl" data-pt="empresas atendidas" data-en="businesses served">empresas atendidas</div>
        </div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-icon"><img src="../imagens/icones/document-check.png" alt=""></div>
        <div class="hero-stat-text">
          <div class="hero-stat-num">6000+</div>
          <div class="hero-stat-lbl" data-pt="projetos entregues" data-en="projects delivered">projetos entregues</div>
        </div>
      </div>
      <div class="hero-stat">
        <div class="hero-stat-icon"><img src="../imagens/icones/star.png" alt=""></div>
        <div class="hero-stat-text">
          <div class="hero-stat-num">5.0</div>
          <div class="hero-stat-lbl" data-pt="avaliação média" data-en="average rating">avaliação média</div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<!-- ── CASES ── -->
<section class="cases" id="cases">
  <div class="cases-deco" aria-hidden="true">
    <span class="deco-ring dr-cases-1"></span>
    <span class="deco-ring dr-cases-2"></span>
    <span class="deco-ring dr-cases-3"></span>
  </div>
  <div class="sec-header reveal">
    <div>
      <div class="sec-label" data-pt="Resultados reais" data-en="Real results">Resultados reais</div>
      <h2 class="sec-title" data-pt="Nossos Cases" data-en="Our Cases">Nossos Cases</h2>
    </div>
    <a class="sec-link" href="#" data-pt="Ver todos os cases →" data-en="See all cases →">Ver todos os cases →</a>
  </div>

  <div class="case-tabs reveal">
    <button class="case-tab active-all"    onclick="filterCases('all')"    data-pt="Todos"     data-en="All">Todos</button>
    <button class="case-tab"               onclick="filterCases('design')" data-pt="Design"    data-en="Design">Design</button>
    <button class="case-tab"               onclick="filterCases('mkt')"    data-pt="Marketing" data-en="Marketing">Marketing</button>
    <button class="case-tab"               onclick="filterCases('tech')"   data-pt="Tecnologia" data-en="Technology">Tecnologia</button>
  </div>

  <div class="cases-grid">
    <div class="case-card show" data-cat="design">
      <div class="case-img">
        <img src="../imagens/cases/hemo-cracha.jpg" alt="Crachá do congresso HEMO 2024">
        <span class="case-badge badge-design" data-pt="Design · Peças para Eventos" data-en="Design · Event Materials">Design · Peças para Eventos</span>
      </div>
      <div class="case-info">
        <h3>HEMO 2024 — Crachá do Congresso</h3>
        <p data-pt="Design de crachá para um dos maiores congressos de hematologia da América Latina, pela ABHH." data-en="Badge design for one of the largest hematology congresses in Latin America, for ABHH.">Design de crachá para um dos maiores congressos de hematologia da América Latina, pela ABHH.</p>
      </div>
    </div>
    <div class="case-card show" data-cat="tech">
      <div class="case-img">
        <img src="../imagens/cases/hemo-educa.jpg" alt="Making of do Hemo Educa">
        <span class="case-badge badge-tech" data-pt="Tecnologia · Sistema EAD" data-en="Technology · E-learning System">Tecnologia · Sistema EAD</span>
      </div>
      <div class="case-info">
        <h3>Hemo Educa</h3>
        <p data-pt="Sistema de EAD, produção audiovisual e secretariado para o programa de educação científica da ABHH." data-en="E-learning system, audiovisual production and event coordination for ABHH's scientific education program.">Sistema de EAD, produção audiovisual e secretariado para o programa de educação científica da ABHH.</p>
      </div>
    </div>
    <div class="case-card show" data-cat="design">
      <div class="case-img">
        <img src="../imagens/cases/hemo-podcast.jpg" alt="HEMO Play Podcast">
        <span class="case-badge badge-design" data-pt="Design · Podcast &amp; Videocast" data-en="Design · Podcast &amp; Videocast">Design · Podcast &amp; Videocast</span>
      </div>
      <div class="case-info">
        <h3>HEMO Play Podcast</h3>
        <p data-pt="Podcast e videocast com identidade visual própria, produzidos ao vivo durante o congresso HEMO 2024." data-en="Podcast and videocast with its own visual identity, produced live during the HEMO 2024 congress.">Podcast e videocast com identidade visual própria, produzidos ao vivo durante o congresso HEMO 2024.</p>
      </div>
    </div>
    <div class="case-card show" data-cat="design">
      <div class="case-img">
        <img src="../imagens/cases/blc-2025.jpg" alt="15º Brazilian Lymphoma Conference">
        <span class="case-badge badge-design" data-pt="Design · Key Visual &amp; Audiovisual" data-en="Design · Key Visual &amp; Audiovisual">Design · Key Visual &amp; Audiovisual</span>
      </div>
      <div class="case-info">
        <h3>15º Brazilian Lymphoma Conference</h3>
        <p data-pt="Produção de vídeo-aulas e Key Visual para o principal evento nacional sobre doenças linfoproliferativas." data-en="Video lecture production and Key Visual for the leading national event on lymphoproliferative diseases.">Produção de vídeo-aulas e Key Visual para o principal evento nacional sobre doenças linfoproliferativas.</p>
      </div>
    </div>
    <div class="case-card show" data-cat="design">
      <div class="case-img">
        <img src="../imagens/cases/ash-2023.jpg" alt="Congresso ASH 2023">
        <span class="case-badge badge-design" data-pt="Design · Coordenação de Eventos" data-en="Design · Event Coordination">Design · Coordenação de Eventos</span>
      </div>
      <div class="case-info">
        <h3>ASH 2023</h3>
        <p data-pt="Coordenação técnica e experiência visual do Congresso da Sociedade Americana de Hematologia, com mais de 30 mil profissionais." data-en="Technical coordination and visual experience for the American Society of Hematology Congress, with over 30,000 professionals.">Coordenação técnica e experiência visual do Congresso da Sociedade Americana de Hematologia, com mais de 30 mil profissionais.</p>
      </div>
    </div>
    <div class="case-card show" data-cat="design">
      <div class="case-img">
        <img src="../imagens/cases/xi-encontro.jpg" alt="XI Encontro do Comitê de Glóbulos Vermelhos e do Ferro da ABHH">
        <span class="case-badge badge-design" data-pt="Design · Identidade de Evento" data-en="Design · Event Identity">Design · Identidade de Evento</span>
      </div>
      <div class="case-info">
        <h3>XI Encontro ABHH</h3>
        <p data-pt="Identidade visual completa. Layout, artes, folders e banners. Para o encontro do Comitê de Glóbulos Vermelhos e do Ferro." data-en="Complete visual identity. Layout, artwork, folders and banners. For the Red Blood Cells and Iron Committee meeting.">Identidade visual completa. Layout, artes, folders e banners. Para o encontro do Comitê de Glóbulos Vermelhos e do Ferro.</p>
      </div>
    </div>
    <div class="case-card show" data-cat="design">
      <div class="case-img">
        <img src="../imagens/cases/consensos-abhh.jpg" alt="Capa do Consenso da ABHH sobre Talassemia">
        <span class="case-badge badge-design" data-pt="Design · Editorial" data-en="Design · Editorial">Design · Editorial</span>
      </div>
      <div class="case-info">
        <h3>Consensos ABHH</h3>
        <p data-pt="Design editorial das capas de consensos clínicos da ABHH, usados por médicos como referência de prática." data-en="Editorial cover design for ABHH's clinical consensus documents, used by doctors as practice references.">Design editorial das capas de consensos clínicos da ABHH, usados por médicos como referência de prática.</p>
      </div>
    </div>
  </div>
</section>

<!-- ── SERVIÇOS ── -->
<section class="services" id="services">
  <div class="sec-label reveal" data-pt="O que entregamos" data-en="What we deliver">O que entregamos</div>
  <h2 class="sec-title reveal" data-pt="Três pilares,<br>uma solução integrada" data-en="Three pillars,<br>one integrated solution">Três pilares,<br>uma solução integrada</h2>

  <div class="services-grid">
    <div class="serv-pillar sp-design reveal">
      <div class="sp-icon"><img src="../imagens/icones/paint-brush.png" alt="Design"></div>
      <div class="sp-name" data-pt="Design" data-en="Design">Design</div>
      <p class="sp-desc" data-pt="Criamos marcas com personalidade própria. Do conceito ao manual de aplicação, prontas para funcionar em qualquer ponto de contato." data-en="We create brands with their own personality. From concept to brand guidelines, ready for any touchpoint.">Criamos marcas com personalidade própria. Do conceito ao manual de aplicação, prontas para funcionar em qualquer ponto de contato.</p>
      <ul class="sp-list">
        <li><a href="servicos/branding.php" data-pt="Branding e Identidade Visual" data-en="Branding and Visual Identity">Branding e Identidade Visual</a></li>
        <li><a href="servicos/design-grafico.php" data-pt="Design Gráfico e Editorial" data-en="Graphic and Editorial Design">Design Gráfico e Editorial</a></li>
        <li data-pt="Audiovisual e Motion" data-en="Audiovisual and Motion">Audiovisual e Motion</li>
        <li><a href="servicos/ilustracao.php" data-pt="Ilustração" data-en="Illustration">Ilustração</a></li>
        <li><a href="servicos/embalagens.php" data-pt="Embalagens" data-en="Packaging">Embalagens</a></li>
      </ul>
    </div>

    <div class="serv-pillar sp-mkt reveal">
      <div class="sp-icon"><img src="../imagens/icones/megaphone.png" alt="Marketing"></div>
      <div class="sp-name" data-pt="Marketing" data-en="Marketing">Marketing</div>
      <p class="sp-desc" data-pt="Planejamos e executamos estratégias para atrair, engajar e converter. Levando sua marca a mais pessoas, com resultado mensurável." data-en="We plan and execute strategies to attract, engage and convert. Taking your brand to more people, with measurable results.">Planejamos e executamos estratégias para atrair, engajar e converter. Levando sua marca a mais pessoas, com resultado mensurável.</p>
      <ul class="sp-list">
        <li><a href="servicos/social-media.php" data-pt="Social Media e Conteúdo" data-en="Social Media and Content">Social Media e Conteúdo</a></li>
        <li><a href="servicos/trafego-pago.php" data-pt="Tráfego Pago (Google e Meta Ads)" data-en="Paid Traffic (Google and Meta Ads)">Tráfego Pago (Google e Meta Ads)</a></li>
        <li data-pt="Inbound Marketing" data-en="Inbound Marketing">Inbound Marketing</li>
        <li><a href="servicos/seo-performance.php" data-pt="SEO e Performance" data-en="SEO and Performance">SEO e Performance</a></li>
      </ul>
    </div>

    <div class="serv-pillar sp-tech reveal">
      <div class="sp-icon"><img src="../imagens/icones/computer-desktop.png" alt="Tecnologia"></div>
      <div class="sp-name" data-pt="Tecnologia" data-en="Technology">Tecnologia</div>
      <p class="sp-desc" data-pt="Desenvolvemos presença digital com experiência de usuário estratégica. Sites, plataformas e e-commerces que convertem e escalam." data-en="We develop digital presence with strategic user experience. Websites, platforms and e-commerces that convert and scale.">Desenvolvemos presença digital com experiência de usuário estratégica. Sites, plataformas e e-commerces que convertem e escalam.</p>
      <ul class="sp-list">
        <li data-pt="UX/UI Design" data-en="UX/UI Design">UX/UI Design</li>
        <li><a href="servicos/sites.php#institucional" data-pt="Sites Institucionais e Landing Pages" data-en="Institutional Websites and Landing Pages">Sites Institucionais e Landing Pages</a></li>
        <li><a href="servicos/sites.php#ecommerce" data-pt="E-commerce" data-en="E-commerce">E-commerce</a></li>
        <li data-pt="Sistemas de baixa e média complexidade" data-en="Low and medium complexity systems">Sistemas de baixa e média complexidade</li>
      </ul>
    </div>
  </div>
</section>

<!-- ── PROCESSO ── -->
<section class="processo" id="processo">
  <div class="sec-label reveal" data-pt="Como trabalhamos" data-en="How we work">Como trabalhamos</div>
  <h2 class="sec-title reveal" data-pt="Do diagnóstico ao resultado" data-en="From diagnosis to results">Do diagnóstico ao resultado</h2>

  <div class="processo-steps">
    <div class="step reveal">
      <div class="step-num">01</div>
      <h3 data-pt="Diagnóstico" data-en="Diagnosis">Diagnóstico</h3>
      <p data-pt="Entendemos o negócio, os desafios e os objetivos antes de propor qualquer solução." data-en="We understand the business, challenges and goals before proposing any solution.">Entendemos o negócio, os desafios e os objetivos antes de propor qualquer solução.</p>
    </div>
    <div class="step reveal">
      <div class="step-num">02</div>
      <h3 data-pt="Estratégia" data-en="Strategy">Estratégia</h3>
      <p data-pt="Planejamos as ações com foco em resultado. Não apenas em entregas." data-en="We plan actions focused on results. Not just deliverables.">Planejamos as ações com foco em resultado. Não apenas em entregas.</p>
    </div>
    <div class="step reveal">
      <div class="step-num">03</div>
      <h3 data-pt="Criação" data-en="Creation">Criação</h3>
      <p data-pt="Desenvolvemos visual, conteúdo e tecnologia com coerência e qualidade." data-en="We develop visual, content and technology with consistency and quality.">Desenvolvemos visual, conteúdo e tecnologia com coerência e qualidade.</p>
    </div>
    <div class="step reveal">
      <div class="step-num">04</div>
      <h3 data-pt="Implementação" data-en="Implementation">Implementação</h3>
      <p data-pt="Executamos as soluções com agilidade e atenção ao detalhe." data-en="We execute solutions with speed and attention to detail.">Executamos as soluções com agilidade e atenção ao detalhe.</p>
    </div>
    <div class="step reveal">
      <div class="step-num">05</div>
      <h3 data-pt="Resultados" data-en="Results">Resultados</h3>
      <p data-pt="Mensuramos, otimizamos e evoluímos continuamente." data-en="We measure, optimize and continuously evolve.">Mensuramos, otimizamos e evoluímos continuamente.</p>
    </div>
  </div>
</section>

<!-- ── QUEM SOMOS ── -->
<section class="quem" id="quem">
  <div class="quem-img reveal">
    <img src="../imagens/2020-grid-logo.jpg" alt="">
    <div class="quem-ring"></div>
    <div class="quem-badge">
      <div class="qb-num">2010</div>
      <div class="qb-lbl" data-pt="Ano de fundação" data-en="Founded in">Ano de fundação</div>
    </div>
  </div>

  <div class="quem-text reveal">
    <div class="sec-label" data-pt="Nossa história" data-en="Our story">Nossa história</div>
    <h2 data-pt="Nascemos para ajudar<br>você a crescer"
    data-en="We were born to help<br>you grow">
    Nascemos para ajudar<br>você a crescer
    </h2>

    <p data-pt="Desde 2010, a Limão Cravo une design, marketing e tecnologia para transformar ideias em experiências que aproximam empresas e pessoas."
      data-en="Since 2010, Limão Cravo has combined design, marketing, and technology to transform ideas into experiences that bring businesses and people closer together.">
      Desde 2010, a Limão Cravo une design, marketing e tecnologia para transformar ideias em experiências que aproximam empresas e pessoas.
    </p>

    <p data-pt="Acreditamos que os melhores projetos começam com uma boa escuta. Por isso, mergulhamos em cada negócio para criar soluções estratégicas, criativas e pensadas para gerar valor de verdade."
      data-en="We believe the best projects begin with attentive listening. That is why we dive into each business to create strategic, creative solutions designed to deliver real value.">
      Acreditamos que os melhores projetos começam com uma boa escuta. Por isso, mergulhamos em cada negócio para criar soluções estratégicas, criativas e pensadas para gerar valor de verdade.
    </p>

    <blockquote class="quem-quote">
      <span class="quem-quote-mark" aria-hidden="true">“</span>
      <p data-pt="Assim como o fruto inspirador do nosso nome, a Limão Cravo é um estúdio criativo que não se encontra em qualquer lugar."
         data-en="Just like the fruit that inspired our name, Limão Cravo is a creative studio unlike any other.">
        Assim como o fruto inspirador do nosso nome, a Limão Cravo é um estúdio criativo que não se encontra em qualquer lugar.
      </p>
      <p data-pt="Somos um estúdio que respira criatividade e inovação, ajudando empresas a se destacarem em um mercado cada vez mais dinâmico. Conectamos design, estratégia e emoção para dar vida à sua visão."
         data-en="We are a studio that breathes creativity and innovation, helping businesses stand out in an increasingly dynamic market. We connect design, strategy and emotion to bring your vision to life.">
        Somos um estúdio que respira criatividade e inovação, ajudando empresas a se destacarem em um mercado cada vez mais dinâmico. Conectamos design, estratégia e emoção para dar vida à sua visão.
      </p>
      <cite data-pt="— Alessandro Azevedo, fundador, Limão Cravo" data-en="— Alessandro Azevedo, founder, Limão Cravo">— Alesandro Azevedo, fundador, Limão Cravo</cite>
    </blockquote>

      <div class="quem-stats">
      <div class="qs"><div class="n">200+</div><div class="l" data-pt="Empresas atendidas" data-en="business served">Empresas atendidas</div></div>
      <div class="qs"><div class="n">6000+</div><div class="l" data-pt="projetos entregues" data-en="projects delivered">projetos entregues</div></div>
      <div class="qs"><div class="n">16</div><div class="l" data-pt="anos de mercado" data-en="years in business">anos de mercado</div></div>
    </div>
  </div>
</section>

<!-- ── BLOG ── -->

<section class="blog" id="blog">
  <div class="blog-deco" aria-hidden="true">
    <span class="deco-ring dr-blog-1"></span>
    <span class="deco-ring dr-blog-2"></span>
  </div>
  <div class="sec-label">Conteúdo</div>
  <h2>Ideias, estratégias e tendências</h2>
  <p>
    Insights sobre design, tecnologia e comunicação.
  </p>
  <div class="blog-grid" id="blog-grid">
  </div>
</section>

<!-- ── CTA FINAL ── -->
<section class="cta-final" id="cta">
  <h2 data-pt="Vamos <em>conversar</em>"
      data-en="Let's <em>talk</em>">
    Vamos <em>conversar</em>
  </h2>
  <p data-pt="Conte pra gente seu desafio. A Limão Cravo cuida do diagnóstico à entrega final, unindo design, marketing e tecnologia."
     data-en="Tell us your challenge. Limão Cravo handles everything from diagnosis to final delivery, combining design, marketing and technology.">
    Conte pra gente seu desafio. A Limão Cravo cuida do diagnóstico à entrega final, unindo design, marketing e tecnologia.
  </p>
  <div class="cta-btns">
    <a class="btn-cta-main" href="orcamento.php"
       data-pt="Solicitar Orçamento" data-en="Request a Quote">Solicitar Orçamento</a>
    <a class="btn-cta-sec" href="#" data-whatsapp
       data-pt="Falar com um Especialista" data-en="Talk to a Specialist">Falar com um Especialista</a>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
