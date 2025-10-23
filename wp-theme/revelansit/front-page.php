<?php get_header(); ?>

<section class="hero gradient-animated">
  <h1><?php bloginfo('name'); ?> — Websites that impress and perform</h1>
  <p>Revelans IT crafts visually stunning, accessible, SEO‑ready websites that turn visitors into customers.</p>
  <p class="actions">
    <a class="button" href="<?php echo esc_url( home_url('/contact') ); ?>">Start a project</a>
    <a class="link" href="<?php echo esc_url( home_url('/portfolio') ); ?>">See our work</a>
  </p>
</section>

<section class="features grid-3">
  <article class="glass card">
    <h2>Web Design</h2>
    <p>Clean, modern designs tailored to your brand and audience.</p>
  </article>
  <article class="glass card">
    <h2>Development</h2>
    <p>Responsive, standards‑based, and optimized for speed and accessibility.</p>
  </article>
  <article class="glass card">
    <h2>Care & SEO</h2>
    <p>Ongoing updates, analytics, and technical SEO baked in.</p>
  </article>
</section>

<?php get_footer(); ?>

