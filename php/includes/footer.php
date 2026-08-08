<?php
/* Rodapé compartilhado. Usa $base e $assets definidos pela página. */
if (!isset($base))   { $base = ''; }
if (!isset($assets)) { $assets = '../'; }
?>
<!-- ── FOOTER ── -->
<footer>
  <div class="footer-grid">
    <div class="footer-brand">
      <img src="<?= $assets ?>imagens/limao-cravo-logo-2.png" alt="Limão Cravo">
      <p data-pt="Agência integrada de Design, Marketing e Tecnologia."
         data-en="Integrated agency of Design, Marketing and Technology.">
        Agência integrada de Design, Marketing e Tecnologia.
      </p>
      <div class="social-row">
        <a class="social-btn" href="https://www.facebook.com/estudiolimaocravo/?locale=pt_BR" target="_blank" rel="noopener" aria-label="Facebook">
          <img class="social-icon-default" src="<?= $assets ?>imagens/icones/facebook-1.png" alt="">
          <img class="social-icon-hover" src="<?= $assets ?>imagens/icones/facebook-2.png" alt="">
        </a>
        <a class="social-btn" href="https://www.instagram.com/limaocravo/" target="_blank" rel="noopener" aria-label="Instagram">
          <img class="social-icon-default" src="<?= $assets ?>imagens/icones/instagram-1.png" alt="">
          <img class="social-icon-hover" src="<?= $assets ?>imagens/icones/instagram-2.png" alt="">
        </a>
        <a class="social-btn" href="https://br.linkedin.com/company/lim%C3%A3o-cravo-est%C3%BAdio-criativo?trk=affiliated-pages" target="_blank" rel="noopener" aria-label="LinkedIn">
          <img class="social-icon-default" src="<?= $assets ?>imagens/icones/linkedin-1.png" alt="">
          <img class="social-icon-hover" src="<?= $assets ?>imagens/icones/linkedin-2.png" alt="">
        </a>
        <a class="social-btn" href="https://api.whatsapp.com/send/?phone=5511978160202&amp;text=Ol%C3%A1+Lim%C3%A3o+Cravo%21+Estou+entrando+em+contato+sobre+Saiba+Mais+%28https%3A%2F%2Flimaocravo.net%2Fsaiba-mais%2F%29.+Gostaria+de+agendar+uma+reuniao%2C+por+favor.&amp;type=phone_number&amp;app_absent=0" target="_blank" rel="noopener" aria-label="WhatsApp">
          <img class="social-icon-default" src="<?= $assets ?>imagens/icones/whatsapp-1.png" alt="">
          <img class="social-icon-hover" src="<?= $assets ?>imagens/icones/whatsapp-2.png" alt="">
        </a>
      </div>
    </div>

    <div class="footer-col footer-contact">
      <h4 data-pt="Contato" data-en="Contact">Contato</h4>
      <p>
        <strong>E-mail</strong>
        contato@limaocravo.net
      </p>
      <p>
        <strong>WhatsApp</strong>
        (16) 99999-9999
      </p>
    </div>

    <div class="footer-col footer-badge">
      <a href="https://www.designrush.com/agency/profile/limao-cravo-estudio-criativo" target="_blank" rel="noopener">
        <img class="cert-badge-img" src="<?= $assets ?>imagens/Verified-Agency-v1-300x78.png" alt="Verified Agency — DesignRush">
      </a>
    </div>
  </div>

  <div class="footer-bottom">
    <ul class="footer-legal-links">
      <li><a href="<?= $base ?>perguntas-frequentes.php" data-pt="Perguntas frequentes" data-en="FAQ">Perguntas frequentes</a></li>
      <li><a href="#" data-pt="Política de privacidade" data-en="Privacy policy">Política de privacidade</a></li>
    </ul>
    <div class="footer-credit">
      <span data-pt="Desenvolvido por" data-en="Developed by">Desenvolvido por</span>
      <a href="https://github.com/miazevedo7" target="_blank" rel="noopener">Milene Azevedo</a>
    </div>
    <div class="footer-copy">© 2026 Limão Cravo — Design, Marketing e Tecnologia</div>
  </div>
</footer>

<button id="toTop" class="to-top" aria-label="Voltar ao topo">
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 15l-6-6-6 6"/></svg>
</button>

<script src="<?= $assets ?>script.js"></script>

</body>
</html>
