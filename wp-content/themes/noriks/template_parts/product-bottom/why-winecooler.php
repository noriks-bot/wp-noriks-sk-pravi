<?php
/**
 * product-bottom: NORIKS WineCooler — stapic za hlajenje vina z izlivom (orto-winecooler).
 *
 * 10.11.2026 predelano: opisni bloki originala (4 kartice prednosti, "za ljubitelje vina"
 * in "higiena in vrhunska kakovost") zamenjani z novimi sekcijami iz
 * ~/Desktop/winecoler/sekcije-SK.html (razredi fis-*, isti sistem kot why-fisiorest.php).
 * Videi kupcev, ocene in FAQ ostanejo nespremenjeni.
 *
 * Vrstni red: videi kupcev -> 4 razlogi -> video hero -> nerjaveco jeklo + 3 videi
 * -> 3 koraki -> 4 detajli (ikone) -> darilo -> 3 kosi -> ocene -> NORIKS pogoji.
 *
 * FAQ je v reviews.php / single-product-bottom-nicer.php ($winecooler_faq),
 * mnenja v auto_reviews/SK_winecooler.php. Slike in videi: img/winecooler/.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$nwc      = get_template_directory_uri() . '/img/winecooler/';
$nwc_path = get_template_directory() . '/img/winecooler/';

/* video kupca (3 navpicni videi z lastnim gumbom za predvajanje) */
$nwc_video = function( $n, $label ) use ( $nwc, $nwc_path ) {
  $file = 'wc-video-' . $n . '.mp4'; $poster = 'wc-video-' . $n . '-poster.webp';
  if ( ! file_exists( $nwc_path . $file ) ) { return ''; }
  return '<div class="nwc-vid"><video src="' . esc_url( $nwc . $file ) . '"'
    . ( file_exists( $nwc_path . $poster ) ? ' poster="' . esc_url( $nwc . $poster ) . '"' : '' )
    . ' playsinline preload="metadata" aria-label="' . esc_attr( $label ) . '"></video>'
    . '<button type="button" class="nwc-play" aria-label="' . esc_attr( 'Prehrať video: ' . $label ) . '"></button></div>';
};

/* mnenja — 1:1 z originalom */
$nwc_testimonials = array(
  array( 'Skvelá vec', 'Skvelá vec, rovnomerne chladí a nalieva bez rozliatia.', 'Emma Molenaar' ),
  array( 'Praktické', 'Praktické je, že zátka zároveň uzatvára; žiadne kvapky na obruse.', 'Lars van Dam' ),
  array( 'Používam ho', 'Používam ho hlavne na rosé — zostane svieže až do posledného pohára.', 'Julian Rietveld' ),
  array( 'Chladí lepšie', 'Chladí lepšie ako samostatné chladiace vložky, ktoré som mala. ✨', 'Nina Mulder' ),
  array( 'Funguje rýchlo', 'Funguje rýchlo; za desať minút citeľne chladnejšie.', 'Sara Smits' ),
  array( 'Praktický', 'Praktický a pevný, presne to, čo som hľadal.', 'Jesse de Bruin' ),
);
?>

<!-- 1) VIDEI KUPACA -->
<section class="nwc-sec nwc-tint">
  <div class="nwc-wrap">
    <p class="nwc-kicker nwc-kicker--c">Videá zákazníkov</p>
    <h2 class="nwc-h2 nwc-h2--c">Vypočujte si <em>našich zákazníkov</em> <span class="nwc-stars">★★★★★</span></h2>
    <div class="nwc-vids">
      <?php echo $nwc_video( 1, 'Video zákazníka 1 — NORIKS WineCooler' ); ?>
      <?php echo $nwc_video( 2, 'Video zákazníka 2 — NORIKS WineCooler' ); ?>
      <?php echo $nwc_video( 3, 'Video zákazníka 3 — NORIKS WineCooler' ); ?>
    </div>
  </div>
</section>

<!-- NOVE SEKCIJE (10.11.2026) -->
<section class="fis-science"><div class="fis-wrap"><div class="fis-box"><h2 class="fis-title">4 dôvody, prečo si ho zamilujete</h2><div class="fis-grid">
<div class="fis-card"><h3 class="fis-card-title">Chladí zvnútra</h3><p class="fis-card-text">Tyčinka chladí víno <strong>priamo vo fľaši</strong>, bez vedierka s ľadom.</p></div>
<div class="fis-card"><h3 class="fis-card-title">Víno sa neriedi</h3><p class="fis-card-text">Žiadne kocky ľadu v pohári, <strong>chuť zostane čistá</strong> do posledného dúška.</p></div>
<div class="fis-card"><h3 class="fis-card-title">Nalieva bez kvapkania</h3><p class="fis-card-text">Zabudovaný nalievač <strong>nalieva rovnomerne</strong> a obrus zostane čistý.</p></div>
<div class="fis-card"><h3 class="fis-card-title">Ľahko sa čistí</h3><p class="fis-card-text">Nalievač sa dá odňať, tyčinku <strong>umyjete v umývačke riadu</strong>.</p></div>
</div></div></div></section>

<section class="fis-hero"><video class="fis-hero-vid" src="<?php echo esc_url( $nwc ); ?>winecooler-hero.mp4" muted autoplay loop playsinline preload="metadata"></video><div class="fis-hero-overlay"></div><div class="fis-hero-inner"><h2 class="fis-hero-title">Studené víno od prvého pohára až po posledný dúšok.</h2></div></section>

<section class="fis-experts"><div class="fis-wrap fis-exp-grid"><div class="fis-exp-quote"><h2 class="fis-h2">Nehrdzavejúca oceľ, ktorá chladí zvnútra</h2>
<p>Tyčinku vychladíte v mrazničke a vsuniete do fľaše. Za <strong>10–15 minút</strong> má víno ideálnu teplotu podávania a zostane studené <strong>až 3 hodiny</strong>.</p>
<p>✔ Nehrdzavejúca oceľ vhodná na styk s potravinami<br>✔ Nalievač s prevzdušnením rozvinie arómu<br>✔ Hodí sa do väčšiny štandardných fliaš</p>
<p class="fis-exp-author"><strong>Pozrite sa zblízka</strong><br>Ako WineCooler funguje v praxi.</p></div>
<div class="fis-exp-cards">
<div class="fis-exp-card nk-media"><video src="<?php echo esc_url( $nwc ); ?>winecooler-rod.mp4" muted autoplay loop playsinline preload="metadata"></video><div class="fis-exp-cap"><div class="fis-exp-name">Nehrdzavejúca oceľ</div><div class="fis-exp-role">Pevná a odolná</div></div></div>
<div class="fis-exp-card nk-media"><video src="<?php echo esc_url( $nwc ); ?>winecooler-bottle.mp4" muted autoplay loop playsinline preload="metadata"></video><div class="fis-exp-cap"><div class="fis-exp-name">Chladí zvnútra</div><div class="fis-exp-role">Fľaša zostane suchá</div></div></div>
<div class="fis-exp-card nk-media"><video src="<?php echo esc_url( $nwc ); ?>winecooler-pour.mp4" muted autoplay loop playsinline preload="metadata"></video><div class="fis-exp-cap"><div class="fis-exp-name">Nalievanie</div><div class="fis-exp-role">Bez kvapkania</div></div></div>
</div></div></section>

<section class="fis-thermo"><div class="fis-wrap"><p class="fis-eyebrow">Ako to funguje</p><h2 class="fis-h2 fis-center">3 kroky k studenému vínu</h2><div class="fis-thermo-grid">
<div class="fis-thermo-card nk-media"><video src="<?php echo esc_url( $nwc ); ?>winecooler-freezer.mp4" muted autoplay loop playsinline preload="metadata"></video><div class="fis-thermo-label">1. Do mrazničky</div></div>
<div class="fis-thermo-card nk-media"><video src="<?php echo esc_url( $nwc ); ?>winecooler-insert.mp4" muted autoplay loop playsinline preload="metadata"></video><div class="fis-thermo-label">2. Do fľaše</div></div>
<div class="fis-thermo-card nk-media"><video src="<?php echo esc_url( $nwc ); ?>winecooler-table.mp4" muted autoplay loop playsinline preload="metadata"></video><div class="fis-thermo-label">3. Vychutnajte si</div></div>
</div></div></section>

<section class="fis-upg"><div class="fis-wrap"><h2 class="fis-h2 fis-center">Detaily, ktoré robia rozdiel</h2><div class="fis-upg-grid">
<div class="fis-upg-card"><img class="fis-upg-ico" alt="" src="<?php echo esc_url( $nwc ); ?>ikona-1.svg"><div class="fis-upg-title">Nehrdzavejúca oceľ</div><p class="fis-upg-text">Vhodná na styk s potravinami, poslúži vám roky.</p></div>
<div class="fis-upg-card"><img class="fis-upg-ico" alt="" src="<?php echo esc_url( $nwc ); ?>ikona-2.svg"><div class="fis-upg-title">Prevzdušnenie</div><p class="fis-upg-text">Nalievač pomáha rozvinúť arómu vína.</p></div>
<div class="fis-upg-card"><img class="fis-upg-ico" alt="" src="<?php echo esc_url( $nwc ); ?>ikona-3.svg"><div class="fis-upg-title">Umývačka riadu</div><p class="fis-upg-text">Nalievač odnímete a tyčinku umyjete za pár sekúnd.</p></div>
<div class="fis-upg-card"><img class="fis-upg-ico" alt="" src="<?php echo esc_url( $nwc ); ?>ikona-4.svg"><div class="fis-upg-title">Univerzálna veľkosť</div><p class="fis-upg-text">Pasuje do väčšiny štandardných fliaš vína.</p></div>
</div></div></section>

<section class="fis-eng"><div class="fis-wrap fis-row2"><div class="fis-row2-copy"><h2 class="fis-h2">Elegantný darček pre milovníkov vína</h2><p>Čierna krabička NORIKS je pripravená na darovanie – na Vianoce, narodeniny alebo ako pozornosť pre hostiteľa. Stačí ju odovzdať.</p></div><div class="fis-row2-media nk-media nk-wide"><video src="<?php echo esc_url( $nwc ); ?>winecooler-gift.mp4" muted autoplay loop playsinline preload="metadata"></video></div></div></section>

<section class="fis-cheaper"><div class="fis-wrap fis-row2"><div class="fis-row2-media nk-media"><img src="<?php echo esc_url( $nwc ); ?>winecooler-3-kusy.jpg" alt="NORIKS WineCooler" loading="lazy"></div><div class="fis-row2-copy"><p class="fis-eyebrow">VÝHODNÝ NÁKUP</p><h2 class="fis-h2">3 kusy: jeden pre vás, dva ako darček</h2><p>Jeden WineCooler stojí <span data-price="1">24,99 €</span>. V balení 3 ks zaplatíte <span data-price="3">54,99 €</span>, teda len <span data-price="3-unit">18,33 €</span> za kus. S 30 dňami na vrátenie peňazí.</p></div></div></section>

<!-- 5) ODLIČNO 4,8 / 5 -->
<section class="nwc-sec nwc-tint">
  <div class="nwc-wrap">
    <h2 class="nwc-h2 nwc-h2--c">Výborné <em>4,8 / 5</em></h2>
    <p class="nwc-rate"><span class="nwc-rate__stars">★★★★★</span> Na základe <strong>1 081</strong> recenzií</p>
    <div class="nwc-rev">
      <?php foreach ( $nwc_testimonials as $t ) : ?>
      <article class="nwc-rev__card">
        <span class="nwc-rate__stars" aria-label="5 z 5 hviezdičiek">★★★★★</span>
        <h3><?php echo esc_html( $t[0] ); ?></h3>
        <p><?php echo esc_html( $t[1] ); ?></p>
        <cite><?php echo esc_html( $t[2] ); ?></cite>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- 6) NORIKS pogoji -->
<section class="nwc-sec">
  <div class="nwc-wrap nwc-c">
    <h2 class="nwc-h2 nwc-h2--c">Vyskúšajte ho <em>bez obáv.</em></h2>
    <p class="nwc-sub">Vychlaďte prvú fľašu a presvedčte sa o rozdiele. Ak nebudete spokojní, máte <strong>30 dní na vrátenie peňazí</strong>.</p>
    <p class="nwc-trust"><span>30 dní na vrátenie</span><span>Doprava zadarmo nad 70 €</span><span>Platba na dobierku</span></p>
  </div>
</section>

<style>
/* videi kupcev: sirsi okvir in lastni gumb za predvajanje na sredini */
.nwc-vids { margin: 0; gap: 22px; }
.nwc-vid { position: relative; }
.nwc-vid > video { width: 100%; display: block; }
.nwc-play { position: absolute; left: 50%; top: 50%; transform: translate(-50%,-50%);
  width: 76px; height: 76px; border: 0; border-radius: 50%; background: rgba(255,255,255,.94);
  box-shadow: 0 10px 28px rgba(40,20,10,.28); cursor: pointer; display: grid; place-items: center; padding: 0; }
.nwc-play[hidden] { display: none; }
.nwc-play::before { content: ""; width: 0; height: 0; margin-left: 6px;
  border-top: 13px solid transparent; border-bottom: 13px solid transparent; border-left: 21px solid #8a2a3a; }
@media (max-width: 749px) { .nwc-play { width: 60px; height: 60px; } }

/* NORIKS standard: slika/video zapolni svoj stolpec v razmerju 4/5, besedilo navpicno na sredini */
.nwc-row2 { align-items: center; }
.nwc-media > img, .nwc-media > video,
.nwc-media > a > img, .nwc-media picture > img {
  width: 100%; aspect-ratio: 4 / 5; object-fit: cover; border-radius: 12px;
  box-shadow: 0 2px 4px rgba(25,20,15,.05), 0 14px 40px rgba(25,20,15,.10); }
@media (max-width: 749px) {
  .nwc-media > img, .nwc-media > video { aspect-ratio: 1 / 1; }
}

.nwc-c { text-align: center; }
.nwc-trust { display: flex; flex-wrap: wrap; justify-content: center; gap: 10px 26px; margin: 18px 0 0; font-size: 14px; font-weight: 600; color: #6b625a; }
.nwc-trust span { position: relative; padding-left: 20px; }
.nwc-trust span::before { content: "\2713"; position: absolute; left: 0; color: #a9683f; }

.nwc-stars { color: #00b67a; letter-spacing: 2px; font-size: .8em; vertical-align: middle; }
.nwc-sec { padding: 60px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #24191b; }
.nwc-sec * { box-sizing: border-box; }
.nwc-tint { background: #f8f1ef; }
.nwc-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nwc-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 56px; align-items: center; }
.nwc-media img { display: block; width: 100%; height: auto; border-radius: 0;
  box-shadow: 0 2px 4px rgba(40,20,20,.05), 0 14px 40px rgba(40,20,20,.10); }
.nwc-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #8a2c3b; margin: 0 0 10px; }
.nwc-kicker--c { text-align: center; margin-bottom: 22px; }
.nwc-h2 { font-size: clamp(25px, 3.1vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #24191b; text-transform: none; }
.nwc-h2--c { text-align: center; }
.nwc-h2 em { font-style: italic; font-weight: 800; color: #8a2c3b; }
.nwc-copy p { font-size: 16px; line-height: 1.7; color: #574a4c; margin: 0 0 14px; }
.nwc-copy strong { color: #24191b; }
.nwc-big { font-size: 19px !important; font-weight: 800; color: #24191b !important; }
.nwc-sub { text-align: center; font-size: 16px; line-height: 1.6; color: #6b5a5d; max-width: 760px; margin: 0 auto 28px; }

/* 1) videi kupaca */
.nwc-vids { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; margin: 0; }
.nwc-vid { position: relative; aspect-ratio: 9 / 16; overflow: hidden; background: #f1ecea; }
.nwc-vid video { display: block; width: 100%; height: 100%; object-fit: cover; }

/* 2) prednosti */
.nwc-feat { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; }
.nwc-feat__card { background: #fff; border: 1px solid #eee2df; padding: 22px 20px; }
.nwc-feat__card h3 { font-size: 13px; font-weight: 800; letter-spacing: .1em; text-transform: uppercase; color: #8a2c3b; margin: 0 0 10px; }
.nwc-feat__card p { font-size: 14.8px; line-height: 1.62; color: #574a4c; margin: 0; }

/* 4) mnenja */
.nwc-rate { text-align: center; font-size: 15px; color: #6b5a5d; margin: 0 0 24px; }
.nwc-rate__stars { color: #e0a33c; letter-spacing: 1px; }
.nwc-rev { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
.nwc-rev__card { background: #fff; border: 1px solid #eee2df; padding: 22px 20px; display: flex; flex-direction: column;
  box-shadow: 0 1px 2px rgba(40,20,20,.04), 0 10px 26px rgba(40,20,20,.06); }
.nwc-rev__card h3 { font-size: 17px; font-weight: 800; line-height: 1.3; margin: 8px 0 8px; color: #24191b; text-transform: none; }
.nwc-rev__card p { font-size: 14.6px; line-height: 1.6; color: #574a4c; margin: 0 0 14px; flex: 1 1 auto; }
.nwc-rev__card cite { font-style: normal; font-size: 14px; font-weight: 800; color: #24191b; }

/* kratek opis izdelka: zelene kljukice namesto pik */
.woocommerce div.product .woocommerce-product-details__short-description ul,
.woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 10px 0 14px !important; padding-left: 0 !important; }
.woocommerce div.product .woocommerce-product-details__short-description ul li,
.woocommerce-product-details__short-description ul li {
  list-style: none !important; text-indent: 0 !important; margin: 0 0 7px !important;
  line-height: 1.45 !important; font-size: 15.5px !important;
  display: block !important; position: relative !important; padding-left: 31px !important; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nwc-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }

@media (max-width: 980px) {
  .nwc-row2 { grid-template-columns: 1fr; gap: 28px; }
  .nwc-row2--rev .nwc-media { order: -1; }
  .nwc-feat { grid-template-columns: repeat(2, 1fr); }
  .nwc-rev { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 560px) {
  .nwc-sec { padding: 42px 0; }
  .nwc-wrap { padding: 0 16px; }
  .nwc-vids { gap: 8px; }
  .nwc-feat, .nwc-rev { grid-template-columns: 1fr; }
}

/* ===== NOVE SEKCIJE (fis-*) — sekcije.css ===== */
/* 2) Video hero */
  .fis-hero { position: relative; width: 100vw; left: 50%; margin-left: -50vw; min-height: 520px; display: flex; align-items: center; overflow: hidden; }
  .fis-hero-vid { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; }
  .fis-hero-overlay { position: absolute; inset: 0; background: linear-gradient(90deg, rgba(0,0,0,0.5), rgba(0,0,0,0.05) 55%); }
  .fis-hero-inner { position: relative; z-index: 2; max-width: 1180px; margin: 0 auto; padding: 0 40px; width: 100%; box-sizing: border-box; }
  .fis-hero-title { color: #fff; font-weight: 800; font-size: clamp(27px,4vw,46px); line-height: 1.15; max-width: 640px; margin: 0; text-shadow: 0 2px 14px rgba(0,0,0,0.4); }
  @media (max-width: 768px) { .fis-hero { min-height: 380px; } .fis-hero-inner { padding: 0 22px; } }

  /* zajednički */
  .fis-h2 { font-size: clamp(24px,3vw,34px); font-weight: 800; color: #1c1c1c; line-height: 1.2; margin: 0 0 18px; }
  .fis-center { text-align: center; }
  .fis-eyebrow { font-size: 13px; letter-spacing: 1px; text-transform: uppercase; color: #555; margin: 0 0 8px; }

  /* 3) Stručnjaci */
  .fis-experts { padding: 44px 0; }
  .fis-exp-grid { display: grid; grid-template-columns: 1fr 2fr; gap: 40px; align-items: start; }
  .fis-exp-quote p { font-size: 15.5px; line-height: 1.6; color: #333; margin: 0 0 14px; }
  .fis-exp-author { color: #1c1c1c; }
  .fis-exp-cards { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
  .fis-exp-card { position: relative; border-radius: 14px; overflow: hidden; aspect-ratio: 3/4; background: #222; }
  .fis-exp-card video,
  .fis-exp-card img { width: 100%; height: 100%; object-fit: cover; display: block; }
  .fis-exp-cap { position: absolute; left: 0; right: 0; bottom: 0; padding: 14px; color: #fff; background: linear-gradient(0deg, rgba(0,0,0,.75), rgba(0,0,0,0)); }
  .fis-exp-name { font-weight: 800; font-size: 18px; }
  .fis-exp-role { font-size: 13px; }
  .fis-exp-org { font-size: 12px; font-style: italic; opacity: .9; }

  /* 4) UGC */
  .fis-ugc { background: #223047; padding: 40px 0; }
  .fis-ugc-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; }
  .fis-ugc-media { border-radius: 12px; overflow: hidden; aspect-ratio: 3/4; background: #000; }
  .fis-ugc-media video,
  .fis-ugc-media img { width: 100%; height: 100%; object-fit: cover; display: block; }
  .fis-ugc-cap { color: #eee; font-size: 14px; line-height: 1.5; margin: 10px 0 0; }

  /* 5) ThermoTrac */
  .fis-thermo { background: #f0efe9; padding: 44px 0; }
  .fis-thermo-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
  .fis-thermo-card { position: relative; border-radius: 16px; overflow: hidden; aspect-ratio: 4/3; background: #111; }
  .fis-thermo-card video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .fis-thermo-label { position: absolute; left: 16px; bottom: 14px; color: #fff; font-weight: 800; font-size: 18px; text-shadow: 0 1px 8px rgba(0,0,0,.6); }

  /* 6) Upgrades */
  .fis-upg { padding: 44px 0; }
  .fis-upg-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; text-align: center; }
  .fis-upg-ico { width: 56px; height: 56px; object-fit: contain; display: block; margin: 0 auto 14px; }
  .fis-upg-title { font-weight: 800; color: #1c1c1c; margin: 0 0 8px; font-size: 16px; }
  .fis-upg-text { font-size: 14px; line-height: 1.5; color: #444; margin: 0; }

  /* 7 + 8) row2 */
  .fis-eng, .fis-cheaper { padding: 40px 0; }
  .fis-cheaper { background: #f4f4f4; }
  .fis-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 44px; align-items: center; }
  .fis-row2-copy p { font-size: 15.5px; line-height: 1.65; color: #333; }
  .fis-row2-media { border-radius: 16px; overflow: hidden; }
  .fis-row2-media video,
  .fis-row2-media img { width: 100%; height: auto; display: block; }
  .fis-cheaper .fis-row2-media { aspect-ratio: 1 / 1; }
  .fis-cheaper .fis-row2-media video,
  .fis-cheaper .fis-row2-media img { height: 100%; object-fit: cover; }

  @media (max-width: 900px) {
    .fis-exp-grid { grid-template-columns: 1fr; gap: 24px; }
    .fis-ugc-grid { grid-template-columns: 1fr 1fr; }
    .fis-thermo-grid { grid-template-columns: 1fr; }
    .fis-upg-grid { grid-template-columns: 1fr 1fr; gap: 22px; }
    .fis-row2 { grid-template-columns: 1fr; gap: 22px; }
    .fis-cheaper .fis-row2-media { order: 2; }
  }
  @media (max-width: 560px) {
    .fis-exp-cards { grid-template-columns: 1fr 1fr; }
    .fis-ugc-grid { grid-template-columns: 1fr; }
  }

  /* 1) Znanstveno potkrijepljeno — siva kartica */
  .fis-science { background: #f4f4f4; padding: 44px 0; }
  .fis-wrap { max-width: 1180px; margin: 0 auto; padding: 0 16px; }
  .fis-box { background: transparent; border-radius: 0; padding: 0; }
  .fis-title { font-size: clamp(23px,2.9vw,32px); font-weight: 800; color: #1c1c1c; line-height: 1.2; margin: 0 0 26px; }
  .fis-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 0; }
  .fis-card { padding: 0 22px; border-left: 1px solid #dcdcdc; }
  .fis-card:first-child { border-left: 0; padding-left: 0; }
  .fis-card-title { font-size: 17px; font-weight: 800; color: #1c1c1c; margin: 0 0 10px; }
  .fis-card-text { font-size: 15px; line-height: 1.55; color: #333; margin: 0; }
  @media (max-width: 820px) {
    .fis-grid { grid-template-columns: 1fr 1fr; gap: 22px 0; }
    .fis-card:nth-child(odd) { border-left: 0; padding-left: 0; }
  }
  @media (max-width: 480px) {
    .fis-grid { grid-template-columns: 1fr; }
    .fis-card { border-left: 0; padding-left: 0; }
  }

  /* Nema "Tablica veličina" linka na FisioRest-u (identično kao bunion). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis: sakrij standardne točke (•), razmaci. */
  .woocommerce-product-details__short-description ul { list-style: none; margin: 8px 0 26px; padding-left: 0; }
  .woocommerce-product-details__short-description ul li { list-style: none; padding-left: 0; margin-left: 0; }
  .woocommerce-product-details__short-description p:has(+ ul) { margin-top: 20px; margin-bottom: 4px; }
/* NORIKS majica — dodatki za nove sekcije */
.nk-media{position:relative;overflow:hidden;background:#eee}
.nk-media>video,.nk-media>img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;display:block}
.fis-cheaper .nk-media{aspect-ratio:1/1}
.pv-wide,.nk-wide{aspect-ratio:16/10}
.fis-hero{left:auto!important;margin-left:0!important;width:100%!important}

/* ===== NORIKS – mobilna prilagoditev sekcij (telefon, do 767 px) =====
   Velja za majico in boksarice (isti razredi). Dodaj na KONEC sekcije.css. */
@media (max-width:767px){
  /* 1) 4 razlike: kartice 2 x 2 namesto dolgega seznama */
  .fis-science{padding:30px 0!important}
  .fis-science .fis-title{font-size:22px!important;line-height:1.25!important;margin-bottom:16px!important}
  .fis-science .fis-grid{grid-template-columns:1fr 1fr!important;gap:10px!important}
  .fis-science .fis-card{background:#fff;border:0!important;border-radius:14px;padding:14px 12px!important}
  .fis-science .fis-card-title{font-size:15px!important;line-height:1.25;margin:0 0 6px!important}
  .fis-science .fis-card-text{font-size:13.5px!important;line-height:1.45!important}

  /* 2) hero video: višji, besedilo spodaj */
  .fis-hero{min-height:62vh!important;align-items:flex-end!important;padding-bottom:28px}
  .fis-hero-overlay{background:linear-gradient(0deg,rgba(0,0,0,.6),rgba(0,0,0,0) 60%)!important}
  .fis-hero-title{font-size:clamp(24px,7.4vw,32px)!important}

  /* 3) vrstice, ki se drsajo vstran (videi materiala, mnenja kupcev, 3 stvari) */
  .fis-exp-cards,.fis-ugc-grid,.fis-thermo-grid{display:flex!important;gap:12px!important;overflow-x:auto;scroll-snap-type:x mandatory;-webkit-overflow-scrolling:touch;scrollbar-width:none;margin:0 -16px!important;padding:0 16px 4px!important;scroll-padding-left:16px}
  .fis-exp-cards::-webkit-scrollbar,.fis-ugc-grid::-webkit-scrollbar,.fis-thermo-grid::-webkit-scrollbar{display:none}
  .fis-exp-card{flex:0 0 64%!important;scroll-snap-align:start}
  .fis-ugc-card{flex:0 0 76%!important;scroll-snap-align:start}
  .fis-thermo-card{flex:0 0 80%!important;scroll-snap-align:start;aspect-ratio:4/5!important}
  .fis-ugc-cap{font-size:14px!important;line-height:1.4}
  .fis-exp-grid{gap:18px!important}

  /* 4) barve: polne vrstice, zadnja na sredini */
  .nk-col-grid{display:flex!important;flex-wrap:wrap;justify-content:center;gap:10px!important}
  .nk-col{flex:0 0 calc((100% - 30px)/4);box-sizing:border-box;padding:6px!important}
  .nk-col-grid:has(> .nk-col:nth-child(5):last-child) .nk-col,
  .nk-col-grid:has(> .nk-col:nth-child(6):last-child) .nk-col{flex-basis:calc((100% - 20px)/3)}
  .nk-col{min-width:0}
  .nk-col span{font-size:clamp(10px,3.1vw,12px)!important;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;display:block}
  .nk-col-note{gap:6px 14px!important;font-size:13.5px}

  /* 5) primerjalna tabela: ozki stolpci, brez lomljenja besed */
  .nk-cmp-row{grid-template-columns:minmax(0,1fr) 96px 84px!important}
  .nk-cmp-row>div{padding:12px 8px!important;font-size:13.5px!important;line-height:1.35}
  .nk-cmp-head>div{padding:14px 6px!important}
  .nk-cmp-brand{font-size:12px!important;letter-spacing:0!important;line-height:1.2;word-break:keep-all;overflow-wrap:normal;hyphens:none}
  .nk-cmp-price{font-size:15px!important;line-height:1.2}
  .nk-cmp-note{font-size:11px!important;line-height:1.25}

  /* 6) splošno: manj praznega prostora, berljivi naslovi */
  .fis-h2{font-size:clamp(21px,6.4vw,26px)!important;line-height:1.2!important}
  .fis-thermo,.fis-ugc,.fis-experts,.nk-colors,.fis-upg,.fis-eng,.fis-cheaper,.nk-cmp{padding-top:36px!important;padding-bottom:36px!important}

  /* 7) sekcija ocen */
  .nk-rev .nk-sum{gap:10px!important}
  .nk-rev .nk-sum .nk-box{padding:16px!important}
  .nk-rev .nk-feat{display:flex!important;gap:12px!important;overflow-x:auto;scroll-snap-type:x mandatory;-webkit-overflow-scrolling:touch;scrollbar-width:none;margin:0 -16px!important;padding:0 16px 4px!important;scroll-padding-left:16px}
  .nk-rev .nk-feat::-webkit-scrollbar,.nk-rev .nk-chips::-webkit-scrollbar{display:none}
  .nk-rev .nk-feat>.nk-box{flex:0 0 80%;scroll-snap-align:start}
  .nk-rev .nk-chips{flex-wrap:nowrap!important;overflow-x:auto;scrollbar-width:none;margin-left:-16px!important;margin-right:-16px!important;padding:0 16px!important}
  .nk-rev .nk-chip{flex:none;white-space:nowrap}
  .nk-rev .nk-list .nk-card:nth-child(n+4){display:none}  /* na telefonu prve 3, ostale z gumbom »Več ocen« */
}

/* zelo ozki telefoni (320–374 px, npr. iPhone SE 1. gen., manjši Android) */
@media (max-width:374px){
  .fis-wrap{padding-left:12px!important;padding-right:12px!important}
  .fis-science .fis-grid{gap:8px!important}
  .fis-science .fis-card{padding:12px 10px!important}
  .fis-science .fis-card-title{font-size:14px!important}
  .fis-science .fis-card-text{font-size:12.5px!important}
  .fis-exp-cards,.fis-ugc-grid,.fis-thermo-grid,.nk-rev .nk-feat{margin:0 -12px!important;padding:0 12px 4px!important;scroll-padding-left:12px}
  .fis-exp-card{flex-basis:72%!important}.fis-ugc-card{flex-basis:82%!important}.fis-thermo-card{flex-basis:86%!important}.nk-rev .nk-feat>.nk-box{flex-basis:86%}
  .nk-col-grid{gap:6px!important}.nk-col{flex-basis:calc((100% - 18px)/4);padding:4px!important}
  .nk-col-grid:has(> .nk-col:nth-child(5):last-child) .nk-col,.nk-col-grid:has(> .nk-col:nth-child(6):last-child) .nk-col{flex-basis:calc((100% - 12px)/3)}
  .nk-cmp-row{grid-template-columns:minmax(0,1fr) 86px 72px!important}
  .nk-cmp-row>div{font-size:12.5px!important;padding:10px 6px!important}
  .nk-cmp-price{font-size:13.5px!important}
}
/* veliki telefoni (430–767 px, npr. Pro Max, Galaxy Ultra, zložljivi): več kartic naenkrat */
@media (min-width:430px) and (max-width:767px){
  .fis-exp-card{flex-basis:46%!important}.fis-ugc-card{flex-basis:58%!important}.fis-thermo-card{flex-basis:64%!important}.nk-rev .nk-feat>.nk-box{flex-basis:62%}
}
@media (min-width:560px) and (max-width:767px){
  .fis-exp-card{flex-basis:36%!important}.fis-ugc-card{flex-basis:40%!important}.fis-thermo-card{flex-basis:46%!important;aspect-ratio:3/4!important}.nk-rev .nk-feat>.nk-box{flex-basis:46%}
  .fis-science .fis-grid{grid-template-columns:repeat(4,1fr)!important}
  .nk-col{flex-basis:calc((100% - 60px)/7)!important}
}
</style>

<script>
(function(){
  document.querySelectorAll('.nwc-vid .nwc-play').forEach(function(b){
    b.addEventListener('click', function(){
      var v = b.parentNode.querySelector('video');
      if (!v) return;
      v.setAttribute('controls','');
      v.play(); b.hidden = true;
    });
  });
})();
</script>
