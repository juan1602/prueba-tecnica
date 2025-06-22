<?php get_header(); ?>

<main>
  <!-- Sección Slider -->
  <section class="banner">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper" id="banner-slider">
        <!-- Las imágenes del slider se insertarán aquí -->
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <section class="intro">
  <div class="container">
    <p>
      Grupo Nutresa es una organización multilatina líder en el sector de alimentos, comprometida con el desarrollo sostenible y la generación de valor para todos sus grupos de interés.
    </p>
  </div>
  </section>


  <!-- Sección Pilares -->
  <section class="pilares">
    <h2>Pilares</h2>
    <div class="pilares-grid">
      <?php
        $args = array('post_type' => 'pilar', 'posts_per_page' => -1);
        $pilares = new WP_Query($args);

        if ($pilares->have_posts()) :
          while ($pilares->have_posts()) : $pilares->the_post(); ?>
          <article class="pilar-card">
            <?php if (has_post_thumbnail()) : ?>
            <div class="pilar-img">
              <h3> <?php the_title(); ?></h3>
              <?php the_post_thumbnail('medium'); ?>
              <div class="pilar-overlay">
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="leer-mas-btn">Leer más →</a>
              </div>
            </div>
            <?php endif; ?>
          </article>

          <?php endwhile;
          wp_reset_postdata();
        else :
          echo '<p>No hay pilares registrados.</p>';
        endif;
      ?>
    </div>
  </section>
  <section class="aliados">
    <h2>Nuestros Aliados</h2>
  <div class="logos-container">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/logo1.png" alt="Aliado 1">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/logo2.png" alt="Aliado 2">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/logo3.png" alt="Aliado 3">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/logo4.png" alt="Aliado 4">
  </div>
</section>

</main>

<?php get_footer(); ?>

