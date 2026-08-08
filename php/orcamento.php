<?php $pageTitle = "Solicitar Orçamento — Limão Cravo"; $base = ''; $assets = '../'; include __DIR__ . '/includes/header.php'; ?>
<!-- ── HERO ── -->
<section class="about-hero">
  <div class="about-hero-inner">
    <div class="sec-label" data-pt="Orçamento" data-en="Quote">Orçamento</div>
    <h1 data-pt="Solicitar Orçamento" data-en="Request a Quote">Solicitar Orçamento</h1>
    <p class="about-hero-sub"
       data-pt="Conte um pouco sobre seu projeto e a gente retorna com uma proposta sob medida."
       data-en="Tell us a bit about your project and we'll get back to you with a tailored proposal.">
      Conte um pouco sobre seu projeto e a gente retorna com uma proposta sob medida.
    </p>
  </div>
</section>

<!-- ── FORMULÁRIO ── -->
<section class="quote-section">
  <div class="quote-card reveal">
    <form class="quote-form" id="quoteForm" novalidate>
      <div class="form-group">
        <label for="quoteName" data-pt="Nome" data-en="Name">Nome<span class="required"> *</span></label>
        <input type="text" id="quoteName" name="nome" required placeholder="Seu nome completo">
      </div>
      <div class="form-group">
        <label for="quoteEmail" data-pt="E-mail" data-en="Email">E-mail<span class="required"> *</span></label>
        <input type="email" id="quoteEmail" name="email" required placeholder="seu@email.com">
      </div>
      <div class="form-group">
        <label for="quoteMessage" data-pt="Mensagem" data-en="Message">Mensagem<span class="required"> *</span></label>
        <textarea id="quoteMessage" name="mensagem" required placeholder="Conte um pouco sobre o seu projeto, prazo e objetivo."></textarea>
      </div>
      <button type="submit" class="btn-primary" data-pt="Enviar" data-en="Send">Enviar</button>
    </form>
    <p class="quote-note"
       data-pt="Prefere falar direto? Fale com a gente no WhatsApp."
       data-en="Prefer to talk directly? Message us on WhatsApp.">
      Prefere falar direto?
      <a href="#" data-whatsapp data-pt="Fale com a gente no WhatsApp." data-en="Message us on WhatsApp.">Fale com a gente no WhatsApp.</a>
    </p>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
