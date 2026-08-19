<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     9.7.0
 */

use Automattic\WooCommerce\Enums\ProductType;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>

<style>

      .features2 {
    margin-top: 12px;
    margin-bottom: 12px;
      }

      .features__row {
        display: flex;
        justify-content: space-between;
        gap: 28px;
      }

      .feature {
        flex: 1 1 0;
        text-align: center;
      }

      .feature__icon {
 
        margin: 0 auto 0px;
        display: block;
        margin-bottom: 0 !important;
      }

      .feature__text {
        margin: 0;
        line-height: 1.1;
    font-size: 14px;
    margin: 0;
        font-family: 'Barlow', sans-serif;
      }

      /* Responsive: stack nicely on small screens */
      @media (max-width: 640px) {
        .features__row {
     
        }
      }
    </style>


 <section class=" features2" aria-label="Prednosti">
      <div class="features__row">
        <!-- 1) Truck -->
        
        
          <div class="feature">
          
  <img src="<?php echo get_template_directory_uri(); ?>/img/cod_icon_.png" alt="Customer Support Icon" class="feature__icon info-icon">
          <p class="feature__text">Platba na dobierku</p>
        </div>
        
        
        <div class="feature">
      <img src="https://noriks.com/hr/wp-content/uploads/2025/07/footer_icon1-1.png" alt="Shirt Icon" class="feature__icon info-icon">
          <p class="feature__text">Vyskúšajte 30 dní, bez rizika</p>
        </div>
        
        

        <!-- 2) Smiley -->
        <div class="feature">
     
       
        <img src="https://noriks.com/hr/wp-content/uploads/2025/07/footer_icon3-1.png" alt="Shipping Icon" class="feature__icon info-icon">
          <p class="feature__text">Doprava zadarmo pre objednávky nad 70 €</p>
        </div>

    
    
      </div>
    </section>




<?php if ( noriks_is_type( 'ortopas' ) ) : ?>
<!-- Ortopas: kartica "preverjeno s strani zdravnika" (slika) -->
<div class="ortopas-doctor-card" style="margin:14px 0;">
  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/ortopas/ortopas-zdravnik.png' ); ?>"
       alt="Overené lekárom — ortopedický pás NORIKS"
       style="width:100%; height:auto; display:block; border-radius:10px;"
       loading="lazy" decoding="async">
</div>
<?php endif; ?>

<!-- date and countdown section -->

<div class="shipping-box">
  <h2 id="shipping-window" class="shipping-title"></h2>
  <p class="shipping-sub">
    Objednajte v nasledujúcich <span id="midnight-countdown" class="countdown"></span>
  </p>
</div>

<style>
  .shipping-box { font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif; color:#222; margin-top: 13px;
    margin-bottom: 13px; 
      
    background: #f4f4f4;
    padding: 8px 6px 8px 12px;
    border-radius: 5px;
          text-align: center;
      
      
      
  }
  .shipping-title { font-family: 'Roboto', sans-serif;
    font-size: 14px !important;
    font-weight: 700 !important;
    line-height: 1.4 !important; margin-bottom: 0px;
    color: #222 !important; }
  .shipping-sub { font-size: 14px; margin: 0; }
  .countdown { color: #22a155; font-weight: 700; }
</style>

<script>
  (function () {
    const weekdays = ['nedeľa','pondelok','utorok','streda','štvrtok','piatok','sobota'];


    // Helper to add business days (skip Saturday/Sunday)
    function addBusinessDays(date, days) {
      let result = new Date(date);
      let added = 0;
      while (added < days) {
        result.setDate(result.getDate() + 1);
        const day = result.getDay();
        if (day !== 0 && day !== 6) { // skip Sunday(0) + Saturday(6)
          added++;
        }
      }
      return result;
    }

    // Get shipping days: today +2 business days, today +3 business days
    const today = new Date();
    const first  = addBusinessDays(today, 2);
    const second = addBusinessDays(today, 3);

    function formatDayMonth(d) {
      return `${d.getDate()}.${d.getMonth()+1}.`; // e.g. 21.8.
    }

    const windowEl = document.getElementById('shipping-window');
    windowEl.textContent = `Doručenie od ${weekdays[first.getDay()]}  ${formatDayMonth(first)} do ${weekdays[second.getDay()]}, ${formatDayMonth(second)}`;

    // Countdown to midnight
    const cdEl = document.getElementById('midnight-countdown');

    function nextMidnight(now) {
      const n = new Date(now);
      n.setHours(24, 0, 0, 0);
      return n;
    }

    function updateCountdown() {
      const now = new Date();
      const end = nextMidnight(now);
      let diff = Math.max(0, end - now);

      const h = Math.floor(diff / 3_600_000); diff -= h * 3_600_000;
      const m = Math.floor(diff / 60_000);    diff -= m * 60_000;
      const s = Math.floor(diff / 1000);

      cdEl.textContent = `${h}h ${m}min ${s}s`;
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
  })();
</script>


<!-- date and countdown section -->





<?php 

$is_singles_boxers = has_term( 'singles-boxers', 'product_cat', $current_product_id );

$is_boxers = has_term( array( 'boxerky','1-ks-boxerky','orto-bokserice','balicek-3-ks-boxerky','balicek-5-ks-boxerky' ), 'product_cat', $current_product_id ) && ! has_term( array( 'black-friday' ), 'product_cat', $current_product_id );

$is_carape = has_term( array( 'ponozky' ), 'product_cat', $current_product_id );

$is_mixed_bundle = has_term( array( 'sady','orto-starter','orto-majica-bokserica','startovaci-balicek' ), 'product_cat', $current_product_id );

?>



<?php if( !$is_boxers && !$is_carape ): ?>


<!-- my thre icons content -->


<div class="features">
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img1","option"); ?>" alt="Perfect Fit">
      <p><?php echo get_field("singlepp_icon_t1","option"); ?></p>
    </div>
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img2","option"); ?>" alt="Hides Dad Bod">
      <p><?php echo get_field("singlepp_icon_t2","option"); ?></p>
    </div>
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img3","option"); ?>" alt="Breathes">
       <p><?php echo get_field("singlepp_icon_t3","option"); ?></p>
    </div>
  </div>


<style>


    .features {
      display: flex;
    justify-content: space-between;
    gap: 16px;
    margin-top: 15px;
    margin-bottom: 15px;
    }

    .feature-card {
    display: flex
;
    flex-direction: column;
    align-items: center;
    flex: 1;
    gap: 8px;
    border-radius: 5px;
    background: #F4F4F4;
    padding: 16px;
    font-size: 14px;
    font-weight: 400;
    color: #111213;
    line-height: 1.2;
    text-align: center;
    }

    .feature-card img {
      width: 32px;
      height: 32px;
      margin-bottom: 0px;
    }

    .feature-card p {
      margin: 0;
      font-weight: 500;
      font-size: 14px;
      color: #222;
       letter-spacing: -0.5px !important;
    }
  </style>
  
 <?php endif; ?>


<!--
<div style="margin-bottom: 15px;" class="woocommerce-product-details__short-description">
    
    
	<?php echo apply_filters( 'the_content', $product->get_description() );  ?>
	
	
</div>
-->



 <!-- icons -->
 
 <!--
 <div class="info-section">

    <div class="info-box">
     
     
     
      

     <img src="<?php echo get_field("singlepp_bottomicons_img1","options"); ?>" alt="" width="25" height="25">
     <?php echo get_field("singlepp_bottomicons_t1","options"); ?>

    
     
     
    </div>
    
    
    
     <div class="info-box">
    
         <a href="tel:+38517776471" style="
    color: #7b8a9b;
    font-weight: 500;
    font-size: 14px;
    font-family: 'Roboto', sans-serif; display: flex; align-items: center; text-decoration: none; ">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 6px;    width: 17px;
    height: 17px;" viewBox="0 0 16 16">
    <path d="M3.654 1.328a.678.678 0 0 1 .737-.07l2.547 1.272a.678.678 0 0 1 .291.901L6.29 5.72a.678.678 0 0 0 .145.776l2.457 2.457a.678.678 0 0 0 .776.145l2.29-1.24a.678.678 0 0 1 .901.291l1.272 2.547a.678.678 0 0 1-.07.737l-1.175 1.769c-.46.692-1.232 1.043-2.036.964-2.322-.238-4.96-2.223-6.856-4.12C1.77 7.667-.214 5.03.024 2.707c.079-.804.272-1.577.964-2.036L3.654 1.33z"/>
  </svg>
  01 777 64 71
</a>

<a href="mailto:info@noriks.com" style="
    color: #7b8a9b;
    font-weight: 500;
    font-size: 14px;
    font-family: 'Roboto', sans-serif; display: flex; align-items: center; text-decoration: none;">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 6px;    width: 17px;
    height: 17px;" viewBox="0 0 16 16">
    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v.217L8 8.083 0 4.217V4zm0 1.383v6.234l5.803-3.122L0 5.383zM6.761 8.83 0 12.383V12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-.383l-6.761-3.553L8 9.917l-1.239-.653zM16 5.383l-5.803 3.112L16 11.617V5.383z"/>
  </svg>
  info@noriks.com
</a>
         
   
     </div>
     

    <div class="info-grid">
      
      
      
      
      <div class="info-box">
       <img src="<?php echo get_field("singlepp_bottomicons_img2","options"); ?>" alt=""  width="25" height="25">
        <?php echo get_field("singlepp_bottomicons_t2","options"); ?>
      </div>
      <div class="info-box">
  
<img src="<?php echo get_field("singlepp_bottomicons_img3","options"); ?>" alt=""  width="25" height="25">
<?php echo get_field("singlepp_bottomicons_t3","options"); ?>
      </div>
    </div>

  </div>
  -->
  
  <style>


    .info-section {
      display: flex;
      flex-direction: column;
      gap: 7px;
      max-width: 800px;
      margin: auto;
      margin-bottom: 25px;
    }
    
    .info-section img {
      width: 25px;
    }


    .info-box {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      background-color: #f5f6f8;
      border-radius: 3px;
      padding: 16px;
      color: #7b8a9b;
      font-weight: 500;
      font-size: 14px;
          font-family: 'Roboto', sans-serif; 
      text-align: center;
    }

    .info-grid {
      display: flex;
      gap: 7px;
    }

    .info-grid .info-box {
      flex: 1;
    }

    .info-box svg {
      width: 24px;
      height: 24px;
      fill: #7b8a9b;
    }
  </style>









 <!-- icons -->


 <div class="accordion">


    <!-- KidsNest: prve dve accordion miesta (dlhy obsah zo summary) -->
    <?php if ( function_exists('noriks_is_type') && noriks_is_type( 'kidsnest', $current_product_id ) ) : ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Tvár vášho dieťaťa sa formuje práve teraz — a čas máte do 9. roku</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <p>Výskumníci dýchacích ciest a detskí zubní lekári roky upozorňujú na rovnaký vzorec — a väčšina rodičov o ňom nikdy nepočula. Volá sa <strong>syndróm predĺženej tváre</strong> (adenoidná tvár).</p>
        <p>Každú noc, keď dieťa spí s otvorenými ústami na nesprávnom vankúši, sa dejú štyri veci naraz: jazyk padá dozadu, čeľusť sa sťahuje, podnebie sa zužuje do vysokého oblúka a tvár začína rásť vertikálne namiesto horizontálne. Po tisíckach takýchto nocí medzi 3. a 9. rokom sa zmeny upevnia.</p>
        <p>Preto dnes 9-ročné deti prichádzajú k ortodontovi so stiahnutou bradou, kruhmi pod očami, natlačenými zubami — a drahým účtom za strojček. Spôsob, akým dieťa dýcha medzi 3. a 9. rokom, výrazne ovplyvňuje tvár, ktorú bude nosiť celý život.</p>
        <p>NORIKS <strong>KidsNest</strong> je navrhnutý tak, aby pôsobil na základnú príčinu — nesprávnu polohu hlavy a čeľuste počas 9 hodín spánku — s <strong>3-zónovou ergonomickou štruktúrou</strong>, ktorá drží hlavu, krk a čeľusť v správnom zarovnaní od prvej noci.</p>
        <p><strong>Čo uvidíte u svojho dieťaťa:</strong></p>
        <ul style="margin:6px 0 12px;padding-left:18px;">
          <li style="margin:0 0 7px;"><strong>Menej dýchania ústami:</strong> pery zatvorené počas noci, návrat dýchania nosom, koniec suchých úst ráno.</li>
          <li style="margin:0 0 7px;"><strong>Tichšie noci:</strong> chrápanie sa u väčšiny detí upokojí do 1 – 2 týždňov.</li>
          <li style="margin:0 0 7px;"><strong>Opora pre vyvíjajúcu sa čeľusť:</strong> správna poloha noc čo noc, v rokoch, keď na tom najviac záleží.</li>
          <li style="margin:0 0 7px;"><strong>Múdra prevencia:</strong> jeden vankúš dnes — namiesto drahých korekcií zajtra.</li>
        </ul>
        <p><strong>Jeden vankúš dnes večer. Alebo tisíce neskôr.</strong></p>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Staršie ako 9? Okno sa zužuje. Poškodenie sa nezastaví.</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <p>Rada, ktorú ste počuli, je pravdivá len spolovice. Áno, horné podnebie sa spevní okolo 9. roku. Ale tvár sa vyvíja do 20. roku, dolná čeľusť rastie do 17. a dýchacie cesty sa neustále prispôsobujú.</p>
        <p>Preto každá noc dýchania ústami po 9. roku pridáva nové poškodenie k starému: škrípanie zubami, bolesti hlavy, spánok, ktorý neoddýchne, pokles koncentrácie — a únava, ktorú si všetci mýlia s lenivosťou. Váš tínedžer nie je lenivý. Každú noc šesť hodín sotva dýcha.</p>
        <p>KidsNest vo veľkosti <strong>9 – 18 rokov</strong> je vyrobený pre staršiu hlavu, krk a ramená. Iná kontúra, iná výška, iná opora. Rovnaký základný mechanizmus: správne zarovnanie hlavy, krku a čeľuste, celú noc, na tele, ktoré ešte rastie.</p>
        <p>Čo si rodičia všímajú: chrápanie sa upokojí za 7 až 14 nocí, vracia sa skutočná ranná energia, bolesti hlavy slabnú, sústredenie sa vracia.</p>
        <p>Najlepšie okno je stále od 3. do 9. roku. Silné okno je od 8. do 18. Žiadne nie je úplne zatvorené — ale každá noc čakania pridáva záťaž telu, ktoré sa snaží zotaviť.</p>
        <p><strong>Včera je preč. Dnešný večer je stále váš.</strong></p>
      </div>
    </div>
    <?php endif; ?>


    <!-- ErgoSit ortopedický vankúš: prvé dve accordion miesta (kópia originálu, SK) -->
    <?php if ( function_exists('noriks_is_type') && noriks_is_type( 'ortopedski-jastuk', $current_product_id ) ) : ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Špecifikácie produktu</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <ul style="margin:8px 0 12px; padding-left:18px;">
          <li style="margin:0 0 8px;"><strong>Vonkajší poťah:</strong> Priedušná pletenina, sťahuje sa a perie v práčke, hypoalergénna</li>
          <li style="margin:0 0 8px;"><strong>Jadro:</strong> Adaptívna pena OrthoFlex™ | Netoxická, certifikovaná OEKO-TEX® | Navrhnutá na odľahčenie tlaku + zarovnanie držania tela</li>
        </ul>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Čím je taký výnimočný?</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <ul style="margin:8px 0 12px; padding-left:18px;">
          <li style="margin:0 0 10px;"><strong>Pamäťová pena OrthoFlex™:</strong> Pena s vysokou hustotou, ktorá odľahčuje tlak a prispôsobí sa bez sploštenia — podopiera kostrč, boky a chrbticu pre celodenné pohodlie.</li>
          <li style="margin:0 0 10px;"><strong>Poťah BreatheEase™:</strong> Mäkký, priedušný a jemný k pokožke. Sťahuje sa a perie v práčke, aby vankúš vždy zostal svieži.</li>
          <li style="margin:0 0 10px;"><strong>Vyvážená opora:</strong> Ani primäkká, ani pritvrdá. Navrhnutá tak, aby zarovnala držanie tela a zmiernila boľavé body z dlhých hodín sedenia.</li>
        </ul>
      </div>
    </div>
    <?php endif; ?>


    <!-- 1 - detajli --> <!-- skryté na norikshers (no-attrs) + ortopedický vankúš -->
    <?php if ( ! ( function_exists('noriks_is_type') && ( noriks_is_type('norikshers', $current_product_id) || noriks_is_type('ortopedski-jastuk', $current_product_id) ) ) ) : ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_1","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">

         <?php if( function_exists('noriks_is_type') && noriks_is_type( 'kidsnest', $current_product_id ) ): ?>

                NORIKS KidsNest je vyrobený z hypoalergénnej pamäťovej peny s certifikátom OEKO-TEX® — bez formaldehydu, ťažkých kovov a BPA — s priedušným, prateľným poťahom, ktorý sa jednoducho sťahuje.<br><br>Jeho 3-zónová ergonomická štruktúra jemne prijíma hlavu, podopiera krk a pomáha udržať chrbticu v prirodzenom zarovnaní — aj keď sa dieťa počas noci veľa otáča. Tým podporuje dýchanie nosom a pokojnejší, hlbší spánok.<br><br>Dostupný v troch veľkostiach (1 – 3, 3 – 9 a 9 – 18 rokov), rastie s vaším dieťaťom a poskytuje správnu výšku opory v každej fáze vývoja.

         <?php elseif( function_exists('noriks_is_type') && noriks_is_type('kneefix', $current_product_id) ): ?>

                NORIKS KneeFix je flexibilná ortéza na koleno, ktorá spája štyri funkcie v jednom systéme podpory: nastaviteľnú kompresiu pomocou presného kolieska, dvojité bočné stabilizátory, gélovú vložku, ktorá odľahčuje jabĺčko, a silikónový protišmykový okraj, ktorý ortézu udrží na mieste.<br><br>Na rozdiel od tuhých ortéz KneeFix koleno neznehybní — podopiera ho počas prirodzeného pohybu. Kompresiu nastavíte za sekundu: ráno pevnejšie, popoludní voľnejšie, podľa toho, koľko ste na nohách. Koleno tak získa stabilitu pri vstávaní, na schodoch, pri chôdzi aj pri dlhšom státí.<br><br>Látka je ľahká, priedušná a odvádza vlhkosť, takže ortézu môžete nosiť hodiny bez potenia a bez zarezávania. Je tenká a diskrétna — pod nohavicami ju takmer nevidno.<br><br>K dispozícii je vo veľkostiach od S po 2XL podľa telesnej hmotnosti a vo verzii na ľavé aj pravé koleno, takže padne presne.

         <?php elseif( function_exists('noriks_is_type') && noriks_is_type( 'leakboxers', $current_product_id ) ): ?>

                Inkontinenčné boxerky NORIKS sú vyrobené z mäkkého antibakteriálneho bambusového vlákna s vodoodpudivou vonkajšou vrstvou. V strede je 7-vrstvové jadro PureDry™, ktoré okamžite absorbuje a uzamkne až 300 ml tekutiny, takže pokožka zostáva suchá a únik zostáva vo vnútri.<br><br>Strih je tenký a diskrétny — vyzerá a pôsobí ako bežná bielizeň, bez objemnosti a bez pocitu „plienky“. Ochrana pri nohách zabraňuje bočnému pretečeniu a kontrola pachu udržiava sviežosť počas celého dňa.<br><br>Sú prateľné a opakovane použiteľné — absorpčnú schopnosť si udržia počas stoviek praní, ako ekologická a výhodná alternatíva jednorazových vložiek a plienok.

         <?php elseif( function_exists('noriks_is_type') && noriks_is_type( 'kompresijske-majice', $current_product_id ) ): ?>

                NORIKS FIT je vyrobený z pokročilej iónovej kompresnej tkaniny, ktorá poskytuje priliehavý, podporný strih. Cielená kompresia rovnomerne sťahuje brucho a boky, vyhladzuje siluetu a podporuje vzpriamené držanie tela — bez sťahovania, ktoré obmedzuje dýchanie či pohyb.<br><br>Mikrotkané vlákna podporujú cirkuláciu a pomáhajú vám počas dňa stáť vzpriamenejšie a cítiť sa istejšie. Tkanina je ľahká, priedušná a odvádza vlhkosť, takže zostávate suchý a v pohodlí.<br><br>Tenký a diskrétny strih ho robí neviditeľným pod akoukoľvek košeľou a zároveň môže slúžiť aj ako športové tričko. Výsledok: ostrejší vzhľad, lepšie držanie tela a sebavedomie — len čo si ho oblečiete.

         <?php elseif( !$is_boxers &&  !$is_carape &&   !$is_mixed_bundle && ! ( function_exists('noriks_is_type') && ( noriks_is_type('fisiorest', $current_product_id) || noriks_is_type('bunion', $current_product_id) || noriks_is_type('ortopas', $current_product_id) ) ) ): ?>



        <?php echo get_field("singlepp_acc_t_1","options"); ?>


        <?php elseif(  has_term( array( 'orto-starter', 'orto-majica-bokserica' ), 'product_cat', $current_product_id )  ): ?>



               Naše prémiové tričká sú vyrobené z prémiovej zmesi 60 % bavlny pradenej metódou prstencového pradenia a 40 % polyesteru, čo zaručuje mimoriadne mäkkú a nekrčivú látku. <br>Boxerky NORIKS sú vyrobené z prémiovej zmesi 95 % modalu a 5 % elastanu, čo zaručuje mimoriadne mäkkú a elastickú látku, ktorá sa dokonale prispôsobí telu. Elastický pás je navrhnutý pre optimálne prispôsobenie, pohodlie bez stiahnutia a perfektný vzhľad pod oblečením. <br>

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('fisiorest', $current_product_id) ): ?>

                NORIKS FisioRest je terapeutický vankúš na krk, ktorý spája trakciu, teplo a vibračnú masáž v ergonomickej konštrukcii z pamäťovej peny. Jemne naťahuje krk pod správnym uhlom, odľahčuje krčnú chrbticu a teplom a masážou uvoľňuje svalové napätie. Bezdrôtový, nabíjateľný a obalený v mäkkom chladivom hodvábe – bezpečný aj na spánok.

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('bunion', $current_product_id) ): ?>

                Korektor vbočeného palca NORIKS s pokročilou terapiou zarovnania a patentovaným kĺbovým mechanizmom jemne vracia palec do prirodzenej polohy, zmierňuje nepohodlie a zabraňuje ďalšiemu rastu výrastku. Pružná konštrukcia umožňuje, aby ste v ňom aj chodili. Padne na všetky veľkosti chodidiel, bez ľavej alebo pravej strany. Na použitie v pokoji – počas oddychu, pozerania TV, čítania alebo spánku.

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('ortopas', $current_product_id) ): ?>

                Ortopedický pás NORIKS cielene stabilizuje driekovú časť chrbta pomocou cielenej kompresie, správne zarovná panvu a odľahčí sedací nerv. Tenký a nenápadný pod oblečením, s nastaviteľnou mierou opory. Vhodný pri bolestiach krížov, išiase, svalovom napätí a problémoch so SI kĺbom.

        <?php else: ?>
        
        
        
            <?php echo get_field("__overwrite_sekcije_bellow_1"); ?>
            
            
        <?php endif; ?>
        
        
        
      </div>
    </div>
    <?php endif; /* koniec skrytia detailov na norikshers */ ?>



     <!-- 2 - slika tablica velicina -->
     <?php if ( ! ( function_exists('noriks_is_type') && ( noriks_is_type('bunion', $current_product_id) || noriks_is_type('fisiorest', $current_product_id) || noriks_is_type('norikshers', $current_product_id) || noriks_is_type('ortopedski-jastuk', $current_product_id) ) )  && ! ( function_exists('noriks_is_type') && noriks_is_type('kneefix', $current_product_id) )) : // žiadna tabuľka veľkostí pre bunion + fisiorest + norikshers + ortopedický vankúš ?>
     <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Tabuľky veľkostí</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">

           <?php if( function_exists('noriks_is_type') && noriks_is_type('kidsnest', $current_product_id) ): ?>

          <div class="kn-size">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kidsnest/tablica-velicine-sk.webp" alt="KidsNest veľkosti podľa veku" style="width:100%;height:auto;border-radius:10px;display:block;margin:0 0 12px;" loading="lazy">
            <p style="margin:0;line-height:1.6;"><strong>Dieťa je medzi dvoma veľkosťami?</strong> Vždy vyberte väčšiu. Vankúš je navrhnutý tak, aby podporoval zdravé zarovnanie počas rastu dieťaťa — väčšia veľkosť poskytuje viac priestoru a dlhšie obdobie používania.</p>
          </div>

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('leakboxers', $current_product_id) ): ?>

          <div class="lbx-size">
            <p style="margin:0 0 6px;font-weight:700;">Ako si zmerať boky</p>
            <p style="margin:0 0 14px;line-height:1.6;">Omotajte krajčírsky meter okolo najširšej časti bokov (cez zadok), bez sťahovania. Stojte uvoľnene a vzpriamene a zapíšte si mieru v centimetroch.</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#12233b;color:#fff;">
                  <th style="padding:8px 10px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Veľkosť</th>
                  <th style="padding:8px 10px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Boky (cm)</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $lbx_sizes = array(
                  array('S','do 76 cm','do 30"'),
                  array('M','77 – 85 cm','30 – 33"'),
                  array('L','86 – 94 cm','34 – 37"'),
                  array('XL','95 – 102 cm','37 – 40"'),
                  array('2XL','103 – 114 cm','41 – 45"'),
                  array('3XL','115 – 121 cm','45 – 48"'),
                  array('4XL','122 – 129 cm','48 – 51"'),
                  array('5XL','130 – 137 cm','51 – 54"'),
                  array('6XL','138 – 145 cm','54 – 57"'),
                  array('7XL','146 – 153 cm','57 – 60"'),
                  array('8XL','154 cm a viac','61" a viac'),
                );
                foreach ( $lbx_sizes as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7fafb' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:8px 10px;font-weight:700;"><?php echo esc_html($r[0]); ?></td>
                    <td style="padding:8px 10px;"><?php echo esc_html($r[1]); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Medzi dvoma veľkosťami?</strong> Vždy odporúčame väčšie číslo pre optimálne pohodlie a maximálnu absorpciu.</p>
          </div>

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('kompresijske-majice', $current_product_id) ): ?>

          <div class="kmf-size">
            <table style="width:100%;border-collapse:collapse;font-size:15px;">
              <thead>
                <tr style="background:#111;color:#fff;">
                  <th style="padding:9px 12px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Veľkosť</th>
                  <th style="padding:9px 12px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Zodpovedajúca hmotnosť</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $kmf_sizes = array(
                  array('S','50 – 70 kg'), array('M','70 – 90 kg'), array('L','90 – 110 kg'), array('XL','110 – 130 kg'),
                  array('2XL','130 – 150 kg'), array('3XL','150 – 170 kg'), array('4XL','170 – 190 kg'), array('5XL','190 – 210 kg'),
                );
                foreach ( $kmf_sizes as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f4f4f4' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eaeaea;">
                    <td style="padding:9px 12px;font-weight:800;"><?php echo esc_html($r[0]); ?></td>
                    <td style="padding:9px 12px;font-weight:700;"><?php echo esc_html($r[1]); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:12px 0 0;line-height:1.6;">Vyberte veľkosť podľa svojej hmotnosti. Medzi dvoma veľkosťami? Pre silnejšiu kompresiu vyberte menšie číslo.</p>
          </div>

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('ortopas', $current_product_id) ): ?>

          <div style="line-height:1.9;">
            <strong>S/M</strong> : obvod bokov 75 – 110 cm<br>
            <strong>L/XL</strong> : obvod bokov 110 – 140 cm<br><br>
            Prosím, zmerajte si obvod bokov, aby ste našli svoju veľkosť.
          </div>

        <?php elseif( $is_boxers ): ?>



          <img class="js-open-size-chart" style="cursor:pointer;" src="https://noriks.com/sk/wp-content/uploads/2026/02/boxers_size_sk.png">



        <?php elseif( noriks_is_type( 'kompresijske-nogavice', $current_product_id ) ): ?>

          <div style="line-height:1.9;">
            <strong>S/M</strong> : veľkosť obuvi 36–40 / obvod lýtka : 23–36 cm<br>
            <strong>L/XL</strong> : veľkosť obuvi 40–44 / obvod lýtka : 36–45 cm<br>
            <strong>2XL</strong> : veľkosť obuvi 44–48 / obvod lýtka : 45–56 cm<br><br>
            Zmerajte prosím obvod lýtka na najširšom mieste, aby ste zistili svoju veľkosť.<br><br>
            Odporúčame vybrať veľkosť podľa obvodu lýtka, nie podľa bežnej veľkosti obuvi.
          </div>

        <?php elseif(  $is_carape ): ?>


                  <img class="js-open-size-chart" style="cursor:pointer;" src="https://noriks.com/sk/wp-content/uploads/2026/02/Nogavice_tabela_velikosti_sk.png">

    <?php elseif(  $is_mixed_bundle ): ?>

     <img class="js-open-size-chart" style="cursor:pointer;" src="<?php echo get_template_directory_uri(); ?>/img/tabela-velikosti-majice.jpg">

        <img class="js-open-size-chart" style="cursor:pointer;" src="https://noriks.com/sk/wp-content/uploads/2026/02/boxers_size_sk.png">

          <?php else: ?>


       <img class="js-open-size-chart" style="cursor:pointer;" src="<?php echo get_template_directory_uri(); ?>/img/tabela-velikosti-majice.jpg">


        <?php endif; ?>
      </div>
    </div>
    <?php endif; // /žiadna tabuľka veľkostí pre bunion + fisiorest ?>


    <!-- 3 - savjeti za pranje-->
    <?php if ( ! ( function_exists('noriks_is_type') && ( noriks_is_type('ortopas', $current_product_id) || noriks_is_type('bunion', $current_product_id) || noriks_is_type('fisiorest', $current_product_id) || noriks_is_type('norikshers', $current_product_id) || noriks_is_type('ortopedski-jastuk', $current_product_id) || noriks_is_type('kidsnest', $current_product_id) ) )  && ! ( function_exists('noriks_is_type') && noriks_is_type('kneefix', $current_product_id) )) : // žiadne tipy na pranie pre pás/bunion/fisiorest/norikshers/jastuk/kidsnest ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_2","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
             <?php if( function_exists('noriks_is_type') && noriks_is_type( 'leakboxers', $current_product_id ) ): ?>

                Perte na 30 – 40 °C, na programe pre jemnú bielizeň. Bez aviváže a bielidla. Sušte na vzduchu. Absorpčnú schopnosť si udržia počas stoviek praní.

             <?php elseif( function_exists('noriks_is_type') && noriks_is_type( 'kompresijske-majice', $current_product_id ) ): ?>

                Perte v práčke v studenej vode na jemnom programe. Bez bielidla a aviváže. Nesušiť v sušičke — sušte na vzduchu, aby sa zachovala kompresia a tvar.

             <?php elseif( !$is_boxers &&  !$is_carape &&   !$is_mixed_bundle ): ?>
        <?php echo get_field("singlepp_acc_t_2","options"); ?>


        <?php elseif(  has_term( array( 'orto-starter', 'orto-majica-bokserica' ), 'product_cat', $current_product_id )  ): ?>



                       Perte farby s farbami. Jemný cyklus v studenej vode. Sušte vodorovne alebo v sušičke pri nízkej teplote. Nebieliť.


          <?php else: ?>
            <?php echo get_field("__overwrite_sekcije_bellow_3"); ?>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; // /žiadne tipy na pranie pre pás/bunion/fisiorest ?>



    <!-- 4 povrati in menjave -->
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_3","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
       <p></p>
      Sme si takí istí, že si NORIKS zamilujete, že máte <b data-stringify-type="bold">30 dní</b> na jeho bezplatné vrátenie alebo výmenu.
Žiadne papierovačky, žiadny stres – vyriešime to niekoľkými kliknutiami.</p>
<p>
    



  <a href="mailto:info@noriks.com" style="display: flex; align-items: center; text-decoration: none; color: #333;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#333" style="margin-right: 6px;" viewBox="0 0 16 16">
      <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v.217L8 8.083 0 4.217V4zm0 1.383v6.234l5.803-3.122L0 5.383zM6.761 8.83 0 12.383V12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-.383l-6.761-3.553L8 9.917l-1.239-.653zM16 5.383l-5.803 3.112L16 11.617V5.383z"/>
    </svg>
    info@noriks.com
  </a>
</p>

<p>Stačí nám poslať e-mail s informáciou, že chcete náhradu a <b data-stringify-type="bold">my sa o to hneď postaráme.</b></p>
       
      </div>
    </div>



    <!-- 5 - infomraicje o dostavi -->
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_4","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <?php echo get_field("singlepp_acc_t_4","options"); ?>
      </div>
    </div>
    
    
    <!-- konec 5 acrodinov -->

  </div>

  <script>
    function toggleAccordion(header) {
      const item = header.parentElement;
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.accordion-item').forEach(el => el.classList.remove('open'));
      if (!isOpen) item.classList.add('open');
    }
  </script>
  
  
  <style>
      
       .accordion {
      border-top: 1px solid #ddd;
    }

    .accordion-item {
      border-bottom: 1px solid #ddd;
    }

    .accordion-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 16px 5px 5px 0px;
      cursor: pointer;
    }

    .accordion-header h3 {
      display: flex;
      align-items: center;
      font-weight: 500;
      font-size: 16px;
      margin: 0;
      gap: 2px;
      font-family: 'Roboto', sans-serif;  
    }

    .accordion-content {
      padding: 0 0 0 0;
      display: none;
      font-size: 14px;
      font-family: 'Roboto', sans-serif;  
      line-height: 1.6;
      color: black;
    }

    .accordion-item.open .accordion-content {
      display: block;
    }

    .icon {
      width: 24px;
      height: 24px;
      display: inline-block;
      background-size: contain;
      background-repeat: no-repeat;

    }
    
    .icon-details {
   
      margin: 0 0px 0 10px !important;
    }
    
    .icon-size {
   
      margin: 0 0px 0 10px !important;
    }

    /* Placeholder icons using emojis 
    
    .icon.details::before { content: "📝"; }
     .icon.size::before { content: "👕"; }
    .icon.laundry::before { content: "🧺"; }
    .icon.returns::before { content: "↩️"; }
    .icon.shipping::before { content: "📦"; }
*/
    .toggle {
      font-size: 24px;
      transition: transform 0.3s ease;
    }

    .accordion-item.open .toggle {
      transform: rotate(45deg);
    }
  </style>








<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( ProductType::VARIABLE ) ) ) : ?>

		<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>

	<?php endif; ?>

	<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
