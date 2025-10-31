<?php get_header(); ?>

<?php
$about_page    = get_page_by_path('over-ons') ?: get_page_by_path('about');
$about_url     = $about_page ? get_permalink($about_page) : home_url('/over-ons');
$services_page = get_page_by_path('diensten') ?: get_page_by_path('services');
$services_url  = $services_page ? get_permalink($services_page) : home_url('/diensten');
?>

<section class="hero gradient-animated">
  <h1><?php bloginfo('name'); ?> — Websites die indruk maken en presteren</h1>
  <p>Revelans IT creëert visueel sterke, toegankelijke en SEO-klare websites die bezoekers omzetten in klanten.</p>
  <p class="actions">
    <a class="button" href="<?php echo esc_url($about_url); ?>">Lees meer over Revelans</a>
    <a class="button button-secondary" href="<?php echo esc_url($services_url); ?>">Bekijk onze diensten</a>
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

