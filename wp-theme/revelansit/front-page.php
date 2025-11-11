<?php get_header(); ?>

<?php
$about_page    = get_page_by_path('over-ons') ?: get_page_by_path('about');
$about_url     = $about_page ? get_permalink($about_page) : home_url('/over-ons');
$services_page = get_page_by_path('diensten') ?: get_page_by_path('services');
$services_url  = $services_page ? get_permalink($services_page) : home_url('/diensten');
$contact_url   = home_url('/contact');
?>

<section class="hero gradient-animated">
  <div class="hero-content">
    <span class="hero-kicker">Digitale groei zonder gedoe</span>
    <h1>Websites die indruk maken en presteren</h1>
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
    <form class="inquiry-form" action="<?php echo esc_url($contact_url); ?>">
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

<section class="section services-overview">
  <header class="section-header">
    <p class="section-label">Wat we bieden</p>
    <h2 class="section-title">Onze kernservices in één oogopslag</h2>
    <p class="section-subtitle">Wij vertalen jouw digitale doelen naar schaalbare oplossingen, van eerste ontwerp tot continue ondersteuning.</p>
  </header>
  <div class="grid-3 service-cards">
    <article class="glass card service-card">
      <span class="service-icon" aria-hidden="true">
        <svg viewBox="0 0 32 32" role="img" aria-hidden="true">
          <path d="M4 8a4 4 0 014-4h16a4 4 0 014 4v16a4 4 0 01-4 4H8a4 4 0 01-4-4zm2 0v2h20V8a2 2 0 00-2-2H8a2 2 0 00-2 2zm0 6v10a2 2 0 002 2h16a2 2 0 002-2V14zm3 3h14a1 1 0 010 2H9a1 1 0 010-2zm0 4h8a1 1 0 010 2H9a1 1 0 010-2z" />
        </svg>
      </span>
      <h3>Webdesign</h3>
      <p>Van wireframe tot pixel-perfect ontwerp: we creëren digitale ervaringen die merkidentiteit en gebruiksgemak versterken.</p>
    </article>
    <article class="glass card service-card">
      <span class="service-icon" aria-hidden="true">
        <svg viewBox="0 0 32 32" role="img" aria-hidden="true">
          <path d="M4 7a3 3 0 013-3h18a3 3 0 013 3v7.38a6 6 0 00-2-.38V7a1 1 0 00-1-1H7a1 1 0 00-1 1v18a1 1 0 001 1h9.63a6 6 0 00.38 2H7a3 3 0 01-3-3zm21.5 7a5.5 5.5 0 11-5.5 5.5 5.5 5.5 0 015.5-5.5zm0 2a.75.75 0 00-.75.75V20h-2.25a.75.75 0 000 1.5h3a.75.75 0 00.75-.75v-4.5A.75.75 0 0025.5 16z" />
        </svg>
      </span>
      <h3>Onderhoud</h3>
      <p>We monitoren prestaties, voeren updates uit en houden beveiliging en content scherp zodat je platform zorgeloos blijft draaien.</p>
    </article>
    <article class="glass card service-card">
      <span class="service-icon" aria-hidden="true">
        <svg viewBox="0 0 32 32" role="img" aria-hidden="true">
          <path d="M6 8a4 4 0 014-4h12a4 4 0 014 4v2h-2V8a2 2 0 00-2-2H10a2 2 0 00-2 2v2H6zm-4 6a2 2 0 012-2h24a2 2 0 012 2v10a4 4 0 01-4 4H6a4 4 0 01-4-4zm2 0v10a2 2 0 002 2h20a2 2 0 002-2V14zm6 5a1.5 1.5 0 101.5 1.5A1.5 1.5 0 0010 19zm10 0a1.5 1.5 0 101.5 1.5A1.5 1.5 0 0020 19z" />
        </svg>
      </span>
      <h3>Hosting</h3>
      <p>Schaalbare, snelle hosting met ingebouwde back-ups en monitoring voor constante beschikbaarheid en korte laadtijden.</p>
    </article>
  </div>
</section>

<section class="section">
  <header class="section-header">
    <p class="section-label">Vertrouwd door teams</p>
    <h2 class="section-title">Digitale partners voor ambitieuze merken</h2>
    <p class="section-subtitle">Van scale-ups tot gevestigde bedrijven: we werken samen met teams die vakmanschap, data en tastbare resultaten waarderen.</p>
  </header>
  <ul class="logo-row">
    <li>Northwave Security</li>
    <li>Atlas Fintech</li>
    <li>Bluefox Ventures</li>
    <li>Studio Lumen</li>
    <li>SolarIQ</li>
  </ul>
</section>

<section class="section">
  <header class="section-header">
    <p class="section-label">Hoe we werken</p>
    <h2 class="section-title">Een bewezen proces gebouwd op samenwerking</h2>
    <p class="section-subtitle">Onze frameworks houden projecten in beweging en laten ruimte voor creativiteit en experiment.</p>
  </header>
  <div class="grid-2 process-grid">
    <article class="glass card">
      <h3>1. Discovery &amp; strategie</h3>
      <p>We stemmen af met stakeholders, brengen user journeys in kaart en bepalen succesindicatoren zodat iedereen weet wat we bouwen en waarom.</p>
    </article>
    <article class="glass card">
      <h3>2. Design sprints</h3>
      <p>Snelle designiteraties, prototyping en feedbackloops zorgen dat we tot pixel-perfecte oplossingen komen voordat ontwikkeling start.</p>
    </article>
    <article class="glass card">
      <h3>3. Development &amp; QA</h3>
      <p>Component-gedreven ontwikkeling, grondig testen en toegankelijkheidscontroles zorgen voor een soepele, toekomstbestendige lancering.</p>
    </article>
    <article class="glass card">
      <h3>4. Lanceren &amp; optimaliseren</h3>
      <p>We rollen uit, monitoren en itereren: we volgen analytics, scherpen content aan en ondersteunen je team na de lancering.</p>
    </article>
  </div>
</section>

<section class="section">
  <header class="section-header">
    <p class="section-label">In hun woorden</p>
    <h2 class="section-title">Teams die met Revelans IT lanceren</h2>
    <p class="section-subtitle">We worden een verlengstuk van je product- en marketingteams, klaar om complexiteit te ontwarren en werk met impact op te leveren.</p>
  </header>
  <div class="grid-2 testimonials">
    <blockquote class="glass card testimonial">
      <p>“Revelans IT heeft onze verouderde site omgetoverd tot een leadmachine. Binnen enkele weken na de lancering verdubbelden de conversies.”</p>
      <cite>— Eva Willems, Marketing Lead bij Northwave Security</cite>
    </blockquote>
    <blockquote class="glass card testimonial">
      <p>“Hun aandacht voor toegankelijkheid en snelheid is ongeëvenaard. We hebben eindelijk een site die de kwaliteit van ons product weerspiegelt.”</p>
      <cite>— Jonas de Vries, Founder van Atlas Fintech</cite>
    </blockquote>
  </div>
</section>

<section class="section cta glass card">
  <h2 class="section-title">Klaar om iets bijzonders te bouwen?</h2>
  <p class="section-subtitle">Vertel ons over je doelen en wij maken een roadmap die je er sneller brengt.</p>
  <p class="actions">
    <a class="button" href="<?php echo esc_url($contact_url); ?>">Plan een gesprek</a>
    <a class="link" href="<?php echo esc_url($services_url); ?>">Ontdek diensten</a>
  </p>
</section>

<?php get_footer(); ?>
