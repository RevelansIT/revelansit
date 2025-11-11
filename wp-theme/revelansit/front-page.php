<?php get_header(); ?>

<?php
$about_page    = get_page_by_path('over-ons') ?: get_page_by_path('about');
$about_url     = $about_page ? get_permalink($about_page) : home_url('/over-ons');
$services_page = get_page_by_path('diensten') ?: get_page_by_path('services');
$services_url  = $services_page ? get_permalink($services_page) : home_url('/diensten');
?>

<section class="hero gradient-animated">
  <div class="hero-content">
    <span class="hero-kicker">Digitale groei zonder gedoe</span>
    <h1><?php bloginfo('name'); ?> — Websites die indruk maken en presteren</h1>
    <p>Wij koppelen strategie, design en techniek zodat jouw digitale ervaringen sneller lanceren én beter converteren.</p>
    <ul class="hero-highlights">
      <li>
        <span class="hero-icon" aria-hidden="true"></span>
        <span>Strategisch webdesign dat jouw merk versterkt</span>
      </li>
      <li>
        <span class="hero-icon" aria-hidden="true"></span>
        <span>Doorlopend onderhoud en optimalisatie op maat</span>
      </li>
      <li>
        <span class="hero-icon" aria-hidden="true"></span>
        <span>Veilige hosting met monitoring en support</span>
      </li>
    </ul>
    <div class="actions">
      <a class="button" href="<?php echo esc_url($about_url); ?>">Lees meer over Revelans</a>
      <a class="button button-secondary" href="<?php echo esc_url($services_url); ?>">Bekijk onze diensten</a>
    </div>
  </div>
  <figure class="hero-visual">
    <span class="hero-frame" aria-hidden="true"></span>
    <img src="<?php echo esc_url(get_theme_file_uri('assets/img/hero-placeholder.svg')); ?>" alt="Team dat lacht tijdens een overleg over webdesign" />
  </figure>
</section>

<section class="section inquiry-block">
  <div class="inquiry-surface">
    <header class="inquiry-header">
      <p class="section-label">Waarmee kunnen we je helpen?</p>
      <h2 class="section-title">Kies de focus voor jouw volgende digitale stap</h2>
      <p class="section-subtitle">Selecteer een dienst en ontvang een voorstel hoe we jouw organisatie versterken.</p>
    </header>
    <form class="inquiry-form" action="<?php echo esc_url(home_url('/contact')); ?>">
      <label class="field">
        <span class="field-label">Ik zoek ondersteuning voor</span>
        <select name="service-intent">
          <option value="webdesign">Een nieuw webdesign of rebranding</option>
          <option value="onderhoud">Technisch onderhoud &amp; optimalisatie</option>
          <option value="hosting">Hosting en performance monitoring</option>
          <option value="strategie">Digitale strategie &amp; consultancy</option>
        </select>
      </label>
      <button type="submit" class="button">Plan een gesprek</button>
    </form>
  </div>
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

