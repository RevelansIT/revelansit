<?php get_header(); ?>

<section class="hero gradient-animated">
  <h1><?php bloginfo('name'); ?> — Websites die indruk maken en presteren</h1>
  <p>Revelans IT creëert visueel sterke, toegankelijke en SEO-klare websites die bezoekers omzetten in klanten.</p>
  <p class="actions">
    <a class="button" href="<?php echo esc_url( home_url('/contact') ); ?>">Start een project</a>
    <a class="link" href="<?php echo esc_url( home_url('/portfolio') ); ?>">Bekijk ons werk</a>
  </p>
</section>

<section class="features grid-3">
  <article class="glass card">
    <h2>Webdesign</h2>
    <p>Heldere, moderne ontwerpen afgestemd op jouw merk en doelgroep.</p>
  </article>
  <article class="glass card">
    <h2>Development</h2>
    <p>Responsief, gebaseerd op standaarden en geoptimaliseerd voor snelheid en toegankelijkheid.</p>
  </article>
  <article class="glass card">
    <h2>Onderhoud & SEO</h2>
    <p>Doorlopende updates, analytics en technische SEO inbegrepen.</p>
  </article>
</section>

<?php get_footer(); ?>

