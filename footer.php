</main>
<?php
$footer_txt_block = get_field('footer_txt_block', 'option');
$form_shortcode = get_field('form_shortcode', 'option');
$footer_contact_info = get_field('footer_contact_info', 'option');
$social_repeater = get_field('socials', 'option');
?>
<footer>
  <div class="container">
    <div class="row fade-in-on-scroll">
      <div class="col-12 offset-lg-4 col-lg-8">
        <div class="footer__title-container">
          <h2>Intresse?</h2>
        </div>
      </div>
    </div>
    <div class="row justify-content-center fade-in-on-scroll">
      <div class="col-12 col-lg-4">
        <div class="footer__text-container">
          <?= $footer_txt_block; ?>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="footer__form-container">
          <?= $form_shortcode; ?>
        </div>

      </div>
      <div class="col-12 col-lg-4">
        <div class="footer__contact-container">
          <?= $footer_contact_info; ?>
        </div>
      </div>
    </div>
    <div class="row fade-in-on-scroll">
      <div class="col-12">
        <div class="socials-container">
          <?php if (have_rows('socials', 'option')): ?>
            <ul class="socials-list">
              <?php while (have_rows('socials', 'option')):
                the_row();
                $social_img = get_sub_field('social_img');
                $social_link = get_sub_field('social_link');
                // $social_img is an image field, so it might be an array with url, alt, etc.
                ?>
                <li class="social-item">
                  <a href="<?= $social_link['url']; ?>" target="_blank" rel="noopener noreferrer">
                    <img src="<?= $social_img['url']; ?>" alt="<?= $social_img['alt']; ?>" />
                  </a>
                </li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
        </div>

      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
</main>