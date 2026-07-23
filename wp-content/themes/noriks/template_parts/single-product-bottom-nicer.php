
<?php
/* Bunion / ortopas / fisiorest: vlastné why-sekcie (bez return — potom beží
   spoločný systém recenzií). Ostatné produkty sa nedotknú. */
if ( function_exists( 'noriks_is_type' ) ) {
    if ( noriks_is_type( 'bunion' ) ) {
        get_template_part( 'template_parts/product-bottom/why-bunion' );
    } elseif ( noriks_is_type( 'ortopas' ) ) {
        get_template_part( 'template_parts/product-bottom/why-ortopas' );
    } elseif ( noriks_is_type( 'fisiorest' ) ) {
        get_template_part( 'template_parts/product-bottom/why-fisiorest' );
    } elseif ( noriks_is_type( 'norikshers' ) ) {
        get_template_part( 'template_parts/product-bottom/why-norikshers' );
    } elseif ( noriks_is_type( 'kompresijske-nogavice' ) ) {
        get_template_part( 'template_parts/product-bottom/why-kompresijske' );
    }
}
?>
<?php
if (  has_term( array( 'startovaci-balicek','orto-starter' ), 'product_cat', get_the_id() )  )   :
?>



<section  class="why-section">
  <div style="max-width: 1440px;" class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
      <div class="video-wrapper">
          <img style="" src="https://noriks.com/sk/wp-content/uploads/2026/02/starter-1_sk.png">
      </div>
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
PREČO SI ĽUDIA VYBERAJÚ ŠTARTOVACÍ BALÍČEK?
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p  style="    font-style: italic;
    line-height: 1.2;"  ><strong>"Vzal som si ho, lebo som si nebol istý, či mi bude sedieť." Marko - Záhreb



</strong><span style="font-weight:normal;">Marko - Zagreb</span></p>
        <p class="description">Mnohí zákazníci začínajú so štartovacím balíčkom, aby to najprv vyskúšali.



</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p  style="    font-style: italic;
    line-height: 1.2;" ><strong>"Po prvom nosení som hneď objednal ďalšie."



</strong><span style="font-weight:normal;">Pavle - Split</span></p>
        <p class="description">Viac ako 95 % zákazníkov si po zakúpení štartovacieho balíčka objedná znova. Nie preto, že by to plánovali, ale preto, že rozdiel v strihu, pohodlí a kvalite pocítia už prvý deň.


</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p  style="    font-style: italic;
    line-height: 1.2;"  ><strong>"Materiál a strih ma presvedčili." 



</strong><span style="font-weight:normal;">Ante - Pula</span></p>
        <p class="description">Tričko a boxerky sú mäkké, ľahké a príjemné na pokožku. Štartovací balíček je najčastejším dôvodom, prečo sa NORIKS rýchlo stane súčasťou vášho každodenného šatníka.



</p>
      </div>
    </div>

  </div>
</section>



<section style="background: white;" class="why-section">
   <div style="max-width: 1440px;" class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
      <div class="video-wrapper">
           <img style="" src="https://noriks.com/sk/wp-content/uploads/2026/02/starter-2_sk.png">
      </div>
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
KOMBINÁCIA, KTORÁ SA NOSÍ KAŽDÝ DEŇ

      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Navrhnuté pre celodenné pohodlie


</strong></p>
        <p class="description">Tričko a boxerky sú navrhnuté tak, aby sa dali nosiť od rána do večera, bez nastavovania alebo nepohodlia. Všetko drží na svojom mieste, netlačí a umožňuje voľný pohyb počas celého dňa.


</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Strih, ktorý sa prispôsobí postave


</strong></p>
        <p class="description">Strih trička zdôrazňuje hornú časť tela, zatiaľ čo boxerky poskytujú dostatok priestoru a stability bez dvíhania. Výsledkom je pocit bezpečia, uvoľnenia a elegantný vzhľad v každej situácii.


</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Kvalita, ktorú pocítite okamžite

</strong></p>
        <p class="description">Materiály sú mäkké, priedušné a príjemné na pokožku, pričom po vypraní nestrácajú svoj tvar. Už od prvého nosenia je jasné, prečo sa táto kombinácia rýchlo stane súčasťou vášho každodenného šatníka.

</p>
      </div>
    </div>

  </div>
</section>






<section class="why-section">
   <div style="max-width: 1440px;" class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
      <div class="video-wrapper">
          <img style="" src="https://noriks.com/sk/wp-content/uploads/2026/02/starter-3_sk.png">
      </div>
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
NAJJEDNODUCHŠÍ A NAJBEZPEČNEJŠÍ ŠTART
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Najnižšie možné riziko


</strong></p>
        <p class="description">Pretože vám to umožňuje zažiť kvalitu bez veľkej investície.
Namiesto toho, aby ste si kupovali viac kusov naraz, dostanete jedno tričko a jedny boxerky – len toľko, aby ste zistili, ako sedia, ako sa nosia a ako sa materiál cíti.

</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Navrhnuté pre prvý krok


</strong></p>
        <p class="description">Štartovací balíček je určený ako prvá skúsenosť, nie ako zásoba.
Je k dispozícii iba raz na zákazníka a za špeciálnu cenu, takže rozhodnutie je jednoduché a bez premýšľania.


</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Opakujúca sa skúsenosť


</strong></p>
        <p class="description">Väčšina mužov potom pokračuje s NORIKS, pretože chápu rozdiel v strihu, pohodlí a kvalite.
Ale prvým krokom je toto – najmenšie riziko, najčistejší dojem.

</p>
      </div>
    </div>

  </div>
</section>



<?php endif; ?>







<?php 
if (  has_term( array( 'tricka',  'orto-tricka', 'orto-majica-darila' ), 'product_cat', get_the_id() )  ||  has_term( 'sady', 'product_cat', get_the_id() )) : 
?>





<section class="why-section">
  <div class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
      <div class="video-wrapper">
        <video 
          autoplay muted loop playsinline 
          class="why-video">
          <source src="https://noriks.com/hr/wp-content/uploads/2025/09/noriks_gif_hr_2-1.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
        <?php echo get_field( 'singlepp_content_part_h1', 'options' ); ?>
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong><?php echo get_field( 'singlepp_content_part_t_1', 'options' ); ?></strong></p>
        <p class="description"><?php echo get_field( 'singlepp_content_part_t_2', 'options' ); ?></p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong><?php echo get_field( 'singlepp_content_part_t_3', 'options' ); ?></strong></p>
        <p class="description"><?php echo get_field( 'singlepp_content_part_t_4', 'options' ); ?></p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong><?php echo get_field( 'singlepp_content_part_t_5', 'options' ); ?></strong></p>
        <p class="description"><?php echo get_field( 'singlepp_content_part_t_6', 'options' ); ?></p>
      </div>
    </div>

  </div>
</section>


  
  
  
  
  
  
<!-- table section -->

  
  
<section class="comparison-section" style="padding-top: 30px;" >
    <div class="comparison-intro">
     <!-- <h4 class="highlight"><?php echo get_field("_comp_table_t1", "options"); ?></h4>-->
      <h1 style="color:white;"><?php echo get_field("_comp_table_t2", "options"); ?></h1>
      <p style="    opacity: 0.6;" class="note"><?php echo get_field("_comp_table_t3", "options"); ?></p>
    </div>
  </section>
  
  
<section class="comparison-table-section">
 
 <div class="comparison-container">
   <table class="comparison-table">
      <thead>
        <tr>
          <th></th>
          <th class="brand-column">
                <?php echo get_field("_comp_table_inside_1", "options"); ?><br>
            <div class="price"><?php echo get_field("_comp_table_inside_3", "options"); ?></div>
          </th>
          <th class="other-brand"><?php echo get_field("_comp_table_inside_2", "options"); ?><br><span><?php echo get_field("_comp_table_inside_4", "options"); ?></span></th>
        </tr>
      </thead>
      <tbody>
          
          <?php
          $_comp_table_fieldlines = get_field("_comp_table_fieldlines","options");
          ?>
          
            <?php if ($_comp_table_fieldlines): ?>
             <?php foreach ($_comp_table_fieldlines as $item): ?>
          
                    <tr>
                      <td><?php echo $item['text']; ?></td>
                      <td class="bg-best"><span  style="background: #496d8f;" class="checkmark">✔</span></td>
                      <td class="bg-bad"><span class="crossmark">✖</span></td>
                    </tr>
                    
            <?php endforeach; ?>
        <?php endif; ?>
       
       
      </tbody>
    </table>

    <p style="    opacity: 0.6;" class="small-note">
      <?php echo get_field("_comp_table_bottom_text", "options"); ?>
    </p>
  </div>
</section>



<section class="why-section">
  <div class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
      <div class="video-wrapper">
          <img style="width: 100%;       
    aspect-ratio: 1/1; 
    object-fit: cover;  " src="<?php echo get_template_directory_uri(); ?>/img/majice-3 (1).jpeg">
      </div>
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
      PREČO SA TOTO TRIČKO STANE TVOJÍM ŠTANDARDOM?
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Navrhnuté pre skutočný život
</strong></p>
        <p class="description">Táto košeľa je určená na celodenné nosenie, od rána do večera. Nevyžaduje si žiadne úpravy ani premýšľanie – jednoducho vyzerá dobre v každej situácii.
</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Strih, ktorý rozumie telu
</strong></p>
        <p class="description">Strih bol vyvinutý tak, aby kopíroval kontúry tela bez toho, aby ho sťahoval, a aby zvýraznil to, čo je potrebné. Výsledkom je úhľadný a sebavedomý vzhľad bez pocitu nepohodlia.
</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Pocíť rozdiel už pri prvom nosení
</strong></p>
        <p class="description">Materiál je mäkký, ľahký a priedušný na pokožke. Už po prvom nosení je jasné, prečo sa toto tričko rýchlo stane vašou obľúbenou ponukou.
</p>
      </div>
    </div>

  </div>
</section>

  
<!-- table section -->

<?php endif; ?>







<!-- here we include new file BOXERIRICE-->

<?php if ( has_term( array( 'boxerky', 'orto-boxerky' ), 'product_cat', get_the_ID() )  && !has_term( 'black-friday', 'product_cat', get_the_ID() ) ): ?>



<style>
    .why-container  {
    max-width: 1440px !important;
}
    
</style>


<?php 
if(  get_the_ID() == 39181 ): 
?>


<!-- invlude video views here -->


<?php 
endif; 
?>










<!-- 1 boksarica -->


<section class="why-section">
  <div class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
       <img src="https://noriks.com/sk/wp-content/uploads/2026/04/2026-04-24-09.28.40-1.jpg">
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
       Flexibilný strih pre silnejšie nohy
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Celodenné pohodlie
</strong></p>
        <p class="description">Špeciálne navrhnuté pre mužov s hrubšími stehnami. Elastický a strečový materiál poskytuje maximálne pohodlie bez akéhokoľvek stiahnutia alebo nepohodlného pásu. Spodná bielizeň drží na mieste a netlačí sa hore, takže sa môžete voľne pohybovať po celý deň.</p>
      </div>

    
    
    </div>

  </div>
</section>
<style>
/* your styles */
</style>





<!-- 2 boksarica -->

<section  style="background: white;" class="why-section">
  <div class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
       <img src="https://noriks.com/sk/wp-content/uploads/2026/04/sk-1.jpg">
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
      Menej opotrebovania a poškodenia
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Super odolné 💪
</strong></p>
        <p class="description">Zabudnite na neustále kupovanie roztrhanej spodnej bielizne. Šortky NORIKS sú vyrobené z pevnejšieho materiálu – vydržia dlhšie a ušetria vám cestu do obchodu.
</p>
      </div>

      <div style="margin-left: 20px;" class="why-point">
        
        
        <p class="description">
        
        ✅ Menej trhania  <br/>
        ✅ Menej potenia <br/>
        ✅ Pohodlie celý deň<br/>
                
        </p>
      </div>

     
    </div>

  </div>
</section>
<style>
/* your styles */
</style>




<!-- 3 boksarica -->

<section class="why-section">
  <div class="container why-container">

    <!-- Left Video -->
    <div class="why-col">
       <img style="width: 100%;       
    aspect-ratio: 1/1; 
    object-fit: cover;  " src="https://noriks.com/sk/wp-content/uploads/2026/04/2026-04-24-09.28.49-1.jpg">
    </div>

    <!-- Right Content -->
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
      Dostatok priestoru pre všetko
      </h2>

      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Chlapci, dovoľte vášmu rozkroku voľne dýchať!
</strong></p>
        <p class="description">Spodná bielizeň NORIKS poskytuje oporu po celý deň bez straty tvaru. Nebesky mäkký materiál Modal sa naťahuje a perfektne sedí na správnych miestach. Priestor pre vaše „vychytávky“ je priestrannejší a flexibilnejší, takže sa nebudete cítiť stiesnene.</p>
      </div>

   
   
    </div>

  </div>
</section>
<style>
/* your styles */
</style>








<?php endif; ?>

<!-- end BOXERICE -->






<style>
    .most-popular {
    
        padding-top: 20px;
    
    }
</style>










<!--  BOXERICE stylee -->


















  
  
  <style>
      
      .comparison-section-gray  {
         border-radius: 5px;
        }
              
      .comparison-intro-gray  {
           margin-bottom: 0;
        }
      
  </style>
  <div  style="background: #f9f9f9; padding-top: 30px;" >
<section style="background: #f9f9f9; max-width: 1440px;" class="comparison-section comparison-section-gray">
    <div style="background: #f9f9f9;padding: 0;padding-left: 10px;
    padding-right: 10px;" class="comparison-intro comparison-intro-gray ">
      <!--<h4 style="" class="highlight"><?php echo get_field("singlepp_content_standard_reviews_t1","options"); ?></h4>-->
      <h1 style="color:black;     margin-bottom: 4px;">
          
          <?php if ( function_exists('noriks_is_type') && noriks_is_type('norikshers') ): ?>

          Nie ste sami v hľadaní hladkej pleti bez vrások.

          <?php elseif ( !has_term( array( 'bokserice', 'bokserice-sastavi-paket' ), 'product_cat', get_the_ID() ) ): ?>

          <?php echo get_field("singlepp_content_standard_reviews_t2","options"); ?>

          <?php else: ?>

          Nisi sam u potrazi za savršenim boksericama.

          <?php endif; ?>
          
          
          </h1>
    <p class="note" style="color: black; margin-top: 0px; margin-bottom: 5px;"><?php if ( function_exists('noriks_is_type') && noriks_is_type('norikshers') ): ?>Tisíce žien už používajú HERS silikónové kolagénové pásiky pre hladšiu, pevnejšiu a mladšie vyzerajúcu pleť.<?php else: ?><?php echo get_field("singlepp_content_standard_reviews_t3","options"); ?><?php endif; ?></p>
    </div>
  </section>
  </div>
  
  
  <style>
      @media (max-width: 768px) {
          
          .basic-reviews-section  {
               padding-left: 0px;
               padding-right: 0px;
            }
            .review .content {
                font-size: 13px;
            }
            .review .info {
                font-size: 13px;
                line-height: 1.3;
            }
            .review {
  
                padding-bottom: 15px;
                margin-bottom: 16px;

            }
      }
  </style>
  
  
  <style>
.loader {
  border: 4px solid #f3f3f3;
  border-top: 4px solid #f5a623;
  border-radius: 50%;
  width: 30px;
  height: 30px;
  animation: spin 0.8s linear infinite;
  margin: 0 auto;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.extra-review-group {
  opacity: 0;
  transition: opacity 0.5s ease;
}

.extra-review-group.show {
  opacity: 1;
}
</style>







<?php 
  // ===== CONFIG: LANGUAGE & DATA =====
  $reviews_language = get_field("webshop_language", "options");
  if (!$reviews_language) { $reviews_language = "EN"; }
  
  
  $reviews_language = "SK";

  // Detect if current product belongs to bokserice group
  $current_product_id = (function_exists('is_product') && is_product()) ? get_queried_object_id() : get_the_id();
  $is_bokserice_page  = has_term( array( 'boxerky','orto-bokserice', 'bokserice-sastavi-paket' ), 'product_cat', $current_product_id );
  $is_ortopas_page    = ( function_exists('noriks_is_type') && noriks_is_type('ortopas', $current_product_id) );
  $is_bunion_page     = ( function_exists('noriks_is_type') && noriks_is_type('bunion', $current_product_id) );
  $is_fisiorest_page  = ( function_exists('noriks_is_type') && noriks_is_type('fisiorest', $current_product_id) );
  $is_norikshers_review_page = ( function_exists('noriks_is_type') && noriks_is_type('norikshers', $current_product_id) );

  // Fallback product name shown in review cards.
  $rv_fallback_title = $is_norikshers_review_page ? 'NORIKS HERS' : 'Jedna Siva Majica';

  // Include review pools (own pool per product group)
  if ( $is_norikshers_review_page ) {
    include get_stylesheet_directory() . '/auto_reviews/SK_norikshers.php';
  } elseif ( $is_fisiorest_page ) {
    include get_stylesheet_directory() . '/auto_reviews/SK_fisiorest.php';
  } elseif ( $is_bunion_page ) {
    include get_stylesheet_directory() . '/auto_reviews/SK_bunion.php';
  } elseif ( $is_ortopas_page ) {
    include get_stylesheet_directory() . '/auto_reviews/SK_ortopas.php';
  } elseif ( ! $is_bokserice_page )  {
    include get_stylesheet_directory() . '/auto_reviews/'.$reviews_language.'.php';
  } else {
    include get_stylesheet_directory() . '/auto_reviews/SK_bokserice.php';
  }

  include get_stylesheet_directory() . '/auto_reviews/'.$reviews_language.'-2.php';

  // Ensure arrays exist
  $auto_reviews_en   = is_array($auto_reviews_en)   ? $auto_reviews_en   : [];
  $auto_reviews_ship = isset($auto_reviews_ship) && is_array($auto_reviews_ship) ? $auto_reviews_ship : [];

  // ===== HELPERS: STABLE DAILY RANDOMIZATION =====

  /**
   * Get WP/Woo timezone (fallback Europe/Ljubljana).
   */
  function reviews_wp_tz(): DateTimeZone {
    $tz_string = function_exists('wp_timezone_string') ? wp_timezone_string() : (get_option('timezone_string') ?: 'Europe/Ljubljana');
    return new DateTimeZone($tz_string ?: 'Europe/Ljubljana');
  }

  /**
   * Deterministic "random" integer in [0, $mod-1] from a seed string.
   */
  function stable_mod_index(string $seed, int $mod): int {
    if ($mod <= 0) return 0;
    $h = substr(sha1($seed), 0, 8); // 32-bit slice
    $n = hexdec($h);
    return (int) ($n % $mod);
  }

  /**
   * Deterministic shuffle based on a seed string. (Stable for a given seed.)
   */
  function shuffle_with_seed(array $arr, string $seed): array {
    if (empty($arr)) return $arr;
    $keys = array_keys($arr);
    usort($keys, function($a, $b) use ($seed) {
      $ha = sha1($seed . ':' . $a);
      $hb = sha1($seed . ':' . $b);
      return strcmp($ha, $hb);
    });
    $out = [];
    foreach ($keys as $k) { $out[] = $arr[$k]; }
    return $out;
  }

  /**
   * Build/caches a pool of products: [['title'=>..., 'url'=>...], ...]
   */
  function get_wc_product_pool(
      $transient_key = 'reviews_product_pool_cache_v2',
      $ttl = 12 * HOUR_IN_SECONDS
  ) {
      if ( ! function_exists( 'wc_get_products' ) ) {
          return [];
      }

      $product_id = 0;
      if ( function_exists( 'is_product' ) && is_product() ) {
          $product_id = get_queried_object_id();
      }

      $is_bokserice = false;
      $is_norikshers = false;
      if ( $product_id ) {
          $is_bokserice = has_term( array( 'boxerky','orto-bokserice', 'bokserice-sastavi-paket' ), 'product_cat', $product_id );
          $is_norikshers = ( function_exists('noriks_is_type') && noriks_is_type('norikshers', $product_id) );
      }

      $cache_key = $transient_key . ( $is_norikshers ? '_norikshers' : ( $is_bokserice ? '_bokserice' : '_all' ) );

      if ( function_exists( 'get_transient' ) ) {
          $cached = get_transient( $cache_key );
          if ( ! empty( $cached ) && is_array( $cached ) ) {
              return $cached;
          }
      }

      $args = [
          'status'  => 'publish',
          'limit'   => -1,
          'return'  => 'ids',
          'orderby' => 'date',
          'order'   => 'DESC',
      ];

      if ( $is_norikshers ) {
          $args['category'] = [ 'orto-norikshers', 'orto-noriks-hers' ];
      } elseif ( $is_bokserice ) {
          $args['category'] = [ 'boxerky' ];
      } else {
          $args['tax_query'] = [
              [
                  'taxonomy' => 'product_cat',
                  'field'    => 'slug',
                  'terms'    => [ 'boxerky' ],
                  'operator' => 'NOT IN',
              ],
          ];
      }

      $ids = wc_get_products( $args );

      $pool = [];
      if ( ! empty( $ids ) ) {
          foreach ( $ids as $pid ) {
              $title = get_the_title( $pid );
              $url   = get_permalink( $pid );
              if ( $title && $url ) {
                  $pool[] = [
                      'title' => $title,
                      'url'   => $url,
                  ];
              }
          }
      }

      if ( function_exists( 'set_transient' ) ) {
          set_transient( $cache_key, $pool, $ttl );
      }

      return $pool;
  }

  /**
   * Load avatar images from theme folder and return URLs.
   * Expected folders:
   *  - /auto_reviews/bokserice-slike/
   *  - /auto_reviews/majice-slike/
   */
  function get_review_avatar_pool(string $type = 'majice'): array {
    $type = ($type === 'boxerky') ? 'bokserice' : 'majice';

    $dir_path = trailingslashit(get_stylesheet_directory()) . 'auto_reviews/' . $type . '-slike/';
    $dir_url  = trailingslashit(get_stylesheet_directory_uri()) . 'auto_reviews/' . $type . '-slike/';

    if ( ! is_dir($dir_path) ) return [];

    $files = glob($dir_path . '*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}', GLOB_BRACE);
    if (empty($files)) return [];

    $urls = [];
    foreach ($files as $f) {
      $base = basename($f);
      if ($base && $base[0] !== '.') {
        $urls[] = $dir_url . rawurlencode($base);
      }
    }
    return $urls;
  }

  /**
   * Assign avatars (some real, some placeholder) deterministically per day + review index.
   * If real image is chosen, sets $r['avatar_url'].
   */
  function assign_avatars_stable(array $reviews, array $avatar_pool, string $daily_seed, string $context_seed = 'product', int $real_probability_percent = 60): array {
    $count = count($avatar_pool);
    foreach ($reviews as $i => &$r) {
      $r['avatar_url'] = '';

      if ($count <= 0) continue;

      $roll = stable_mod_index($daily_seed . ':avatar-roll:' . $context_seed . ':' . $i, 100);
      if ($roll < max(0, min(100, $real_probability_percent))) {
        $pick_i = stable_mod_index($daily_seed . ':avatar-pick:' . $context_seed . ':' . $i, $count);
        $r['avatar_url'] = $avatar_pool[$pick_i] ?? '';
      }
    }
    return $reviews;
  }
  
  
  
  /**
 * Avatar images rules:
 * - First $first_n reviews ALWAYS get an image (if available)
 * - Remaining images (unique) are placed randomly within reviews [$range_start .. $range_end]
 * - Each image can appear ONLY once
 * - Deterministic per day (stable daily seed)
 */
function assign_unique_avatars_first3_then_random_until30(
  array $reviews,
  array $avatar_pool,
  string $daily_seed,
  string $context_seed = 'product',
  int $first_n = 3,
  int $range_start = 3,   // 0-based index: review #4
  int $range_end = 30     // 1-based count: up to review #30 -> last index 29
): array {
  $total = count($reviews);
  if ($total <= 0) return $reviews;

  // Ensure key exists and default is placeholder
  foreach ($reviews as &$r) { $r['avatar_url'] = ''; }
  unset($r);

  if (empty($avatar_pool)) return $reviews;

  // Deterministic shuffle of images (stable per day)
  $pool = shuffle_with_seed($avatar_pool, 'avatar-pool:' . $daily_seed . ':' . $context_seed);
  $pool_count = count($pool);

  // 1) First N reviews always get images (as many as available)
  $first_n = max(0, min($first_n, $total, $pool_count));
  for ($i = 0; $i < $first_n; $i++) {
    $reviews[$i]['avatar_url'] = $pool[$i] ?? '';
  }

  // If no more images left, finish
  if ($pool_count <= $first_n) return $reviews;

  // 2) Randomly place remaining images from review #4 to #30 (indexes 3..29)
  $last_index = min($total - 1, $range_end - 1);
  if ($last_index < $range_start) return $reviews;

  $eligible = range($range_start, $last_index);

  // Deterministic shuffle of eligible positions (stable per day)
  $eligible = shuffle_with_seed($eligible, 'avatar-positions:' . $daily_seed . ':' . $context_seed);

  $remaining_images = array_slice($pool, $first_n);
  $take = min(count($remaining_images), count($eligible));

  for ($j = 0; $j < $take; $j++) {
    $pos = $eligible[$j];
    $reviews[$pos]['avatar_url'] = $remaining_images[$j] ?? '';
  }

  return $reviews;
}
  
  
  
  /**
 * Assign avatars for first N reviews:
 * - Use each real image at most once (no repeats).
 * - Only apply to first $use_first_n reviews.
 * - After that (or if pool runs out), use placeholder (avatar_url = '').
 * Deterministic per day.
 */
function assign_unique_avatars_first_n(array $reviews, array $avatar_pool, string $daily_seed, string $context_seed = 'product', int $use_first_n = 10): array {
  $total = count($reviews);
  if ($total <= 0) return $reviews;

  // Ensure every review has the key
  foreach ($reviews as &$r) { $r['avatar_url'] = ''; }
  unset($r);

  if (empty($avatar_pool)) return $reviews;

  // Deterministic shuffled image order for the day + context
  $shuffled_pool = shuffle_with_seed($avatar_pool, 'avatar-pool:' . $daily_seed . ':' . $context_seed);

  // We can only place as many images as we have, and only in first N reviews
  $limit = min($use_first_n, $total, count($shuffled_pool));

  for ($i = 0; $i < $limit; $i++) {
    $reviews[$i]['avatar_url'] = $shuffled_pool[$i] ?? '';
  }

  return $reviews;
}

  /**
   * Assign a deterministic product (title+url) to each review for the day.
   * Stable per day AND per review index.
   */
  function assign_products_stable(array $reviews, array $product_pool, string $daily_seed): array {
    $count = count($product_pool);
    foreach ($reviews as $i => &$r) {
      if ($count > 0) {
        $pick = $product_pool[ stable_mod_index($daily_seed . ':prod:' . $i, $count) ];
        $r['product_title'] = $pick['title'];
        $r['product_url']   = $pick['url'];
      } else {
        $r['product_title'] = $r['product_title'] ?? '';
        $r['product_url']   = $r['product_url']   ?? '';
      }
    }
    return $reviews;
  }

  /**
   * Distribute review dates backward from today to a cutoff date (inclusive),
   * with a deterministic per-day count using the daily seed.
   */
  function assign_dates_stable(array $reviews, string $cutoff_date_string = '20.6.2025', int $min_per_day = 2, int $max_per_day = 9, string $display_format = 'j.n.Y'): array {
    if (empty($reviews)) return $reviews;

    $tz      = reviews_wp_tz();
    $today   = new DateTime('today', $tz);
    $today->modify('-7 days'); // newest review date = today - 7 days
    $cutoff  = DateTime::createFromFormat('j.n.Y', $cutoff_date_string, $tz) ?: new DateTime('20.6.2025', $tz);
    if ($cutoff > $today) $cutoff = clone $today;

    $daily_seed = $today->format('Y-m-d');
    $reviews    = shuffle_with_seed($reviews, 'reviews-order:' . $daily_seed);

    $total    = count($reviews);
    $assigned = 0;
    $day_off  = 0;

    while ($assigned < $total) {
      $date = (clone $today)->modify("-{$day_off} days");
      if ($date < $cutoff) $date = clone $cutoff;

      $span   = max(0, $max_per_day - $min_per_day);
      $add    = ($span > 0) ? (stable_mod_index('perday:'.$daily_seed.':'.$day_off, $span + 1)) : 0;
      $perday = $min_per_day + $add;

      $take = min($perday, $total - $assigned);
      for ($i = 0; $i < $take; $i++) {
        $reviews[$assigned]['assigned_date'] = $date->format($display_format);
        $assigned++;
      }

      $day_off++;
      if ($date == $cutoff && $assigned >= $total) break;
    }

    foreach ($reviews as &$r) {
      if (empty($r['assigned_date'])) $r['assigned_date'] = $cutoff->format($display_format);
    }
    return $reviews;
  }

  // ===== BUILD FOR TODAY =====
  $tz         = reviews_wp_tz();
  $today_obj  = new DateTime('today', $tz);
  $daily_seed = $today_obj->format('Y-m-d');

  // Avatar pools based on page category
  $avatar_type = $is_bokserice_page ? 'bokserice' : 'majice';
  // Belt + bunion + fisiorest + norikshers: text-only reviews (no avatar images).
  $avatar_pool = ( $is_ortopas_page || $is_bunion_page || $is_fisiorest_page || $is_norikshers_review_page ) ? array() : get_review_avatar_pool($avatar_type);

  $product_pool = get_wc_product_pool();

  // 1) Stable daily shuffle of review pools
  $auto_reviews_en   = shuffle_with_seed($auto_reviews_en,   'pool-en:'   . $daily_seed);
  $auto_reviews_ship = shuffle_with_seed($auto_reviews_ship, 'pool-ship:' . $daily_seed);

  // 2) Stable product assignment for the day
  $auto_reviews_en   = assign_products_stable($auto_reviews_en,   $product_pool, $daily_seed);
  $auto_reviews_ship = assign_products_stable($auto_reviews_ship, $product_pool, $daily_seed);

  // 3) Deterministic date distribution back to cutoff 20.06.2025
  $auto_reviews_en   = assign_dates_stable($auto_reviews_en,   '20.6.2025', 2, 9, 'j.n.Y');
  $auto_reviews_ship = assign_dates_stable($auto_reviews_ship, '20.6.2025', 2, 9, 'j.n.Y');


  // 4) Deterministic avatars (some real, some placeholder)
$auto_reviews_en   = assign_unique_avatars_first3_then_random_until30($auto_reviews_en,   $avatar_pool, $daily_seed, 'product', 3, 3, 30);

$auto_reviews_ship = assign_unique_avatars_first_n($auto_reviews_ship, $avatar_pool, $daily_seed, 'shipping', 0);

  
  

  // ===== PAGINATION CHUNKS =====
  $initial_count = 18;   // show on load
  $load_count    = 9;    // per "load more"

  $initial_product   = array_slice($auto_reviews_en, 0, $initial_count);
  $remaining_product = array_slice($auto_reviews_en, $initial_count);
  $chunks_product    = array_chunk($remaining_product, $load_count);

  $initial_ship   = array_slice($auto_reviews_ship, 0, $initial_count);
  $remaining_ship = array_slice($auto_reviews_ship, $initial_count);
  $chunks_ship    = array_chunk($remaining_ship, $load_count);

  // Dynamic counts
  $prod_count = count($auto_reviews_en);
  $ship_count = count($auto_reviews_ship);
?>

<?php if ( $is_ortopas_page || $is_bunion_page || $is_fisiorest_page || $is_norikshers_review_page ) : ?>
<style>/* belt + bunion + fisiorest + norikshers: text-only reviews, no avatar */ #reviews-section .avatar { display: none !important; }</style>
<?php endif; ?>

<section id="reviews-section" class="basic-reviews-section" style="margin-bottom:40px!important;padding-bottom:40px!important;">
  <div class="container basic-reviews-section-container" style="width:100%;max-width:1440px;padding-top:20px!important;margin:0 auto;padding-left: 10px; padding-right: 10px;">

    <!-- Tabs -->
    <div class="reviews-tabs" style="display:flex;gap:18px;border-bottom:1px solid #cbc8c8;margin-bottom:18px;">
      <button type="button" class="reviews-tab is-active" data-tab="product"
        style="appearance:none;background:#00000008;border:1px solid #cbc8c8;border-bottom:0;padding:8px 14px;border-radius:0;font-weight:700;">
        <?php echo esc_html__('Recenzie produktu', 'your-textdomain'); ?> (692)
      </button>
      <button type="button" class="reviews-tab" data-tab="shipping"
        style="appearance:none;background:transparent;border:1px solid transparent;border-bottom:0;padding:8px 14px;border-radius:0;font-weight:700;">
        <?php echo esc_html__('Recenzie doručenia', 'your-textdomain'); ?> (389)
      </button>
    </div>

    <!-- PRODUCT GRID (default visible) -->
    <div class="reviews-grid" id="reviews-grid-product">
      <?php if (!empty($initial_product)) : foreach ($initial_product as $review) :
        $name  = $review['name'] ?? 'Anonymní';
        $text  = $review['text'] ?? '';
        $title = !empty($review['product_title']) ? $review['product_title'] : $rv_fallback_title;
        $url   = !empty($review['product_url'])   ? $review['product_url']   : '#';
        $stars = '★★★★★';
        $date_display = $review['assigned_date'] ?? '';
        $avatar_url   = !empty($review['avatar_url']) ? $review['avatar_url'] : '';
      ?>
        <article class="review-card">
          <div class="card-top">
            <h3 class="product-title"><a href="<?php echo esc_url($url); ?>">
              <?php echo esc_html($title); ?>
            </a></h3>
            <div class="date">
              <?php echo esc_html($date_display); ?>
            </div>
          </div>
          <div class="stars"><?php echo $stars; ?></div>
          <div class="identity">
            <?php if ($avatar_url) : ?>
              <div class="avatar"><img src="<?php echo esc_url($avatar_url); ?>" alt="" loading="lazy" /></div>
            <?php else : ?>
              <div class="avatar">👤</div>
            <?php endif; ?>
            <div class="name"><?php echo esc_html($name); ?></div>
            <span class="verified"><?php _e('Potvrdené','your-textdomain'); ?></span>
          </div>
          <div class="content"><?php echo esc_html($text); ?></div>
        </article>
      <?php endforeach; endif; ?>
    </div>

    <!-- SHIPPING GRID (hidden initially) -->
    <div class="reviews-grid" id="reviews-grid-shipping" style="display:none;">
      <?php if (!empty($initial_ship)) : foreach ($initial_ship as $review) :
        $name  = $review['name'] ?? 'Anonymní';
        $text  = $review['text'] ?? '';
        $title = !empty($review['product_title']) ? $review['product_title'] : $rv_fallback_title;
        $url   = !empty($review['product_url'])   ? $review['product_url']   : '#';
        $stars = '★★★★★';
        $date_display = $review['assigned_date'] ?? '';
        $avatar_url   = !empty($review['avatar_url']) ? $review['avatar_url'] : '';
      ?>
        <article class="review-card">
          <div class="card-top">
            <h3 class="product-title">
              <a href="<?php echo esc_url($url); ?>">
                <?php echo esc_html($title); ?>
              </a>
            </h3>
            <div class="date">
              <?php echo esc_html($date_display); ?>
            </div>
          </div>
          <div class="stars"><?php echo $stars; ?></div>
          <div class="identity">
            <?php if ($avatar_url) : ?>
              <div class="avatar"><img src="<?php echo esc_url($avatar_url); ?>" alt="" loading="lazy" /></div>
            <?php else : ?>
              <div class="avatar">👤</div>
            <?php endif; ?>
            <div class="name"><?php echo esc_html($name); ?></div>
            <span class="verified"><?php _e('Potvrdené','your-textdomain'); ?></span>
          </div>
          <?php if (!empty($review['headline'])) : ?>
            <div class="headline"><?php echo esc_html($review['headline']); ?></div>
          <?php endif; ?>
          <div class="content"><?php echo esc_html($text); ?></div>
        </article>
      <?php endforeach; endif; ?>
    </div>

  </div>

  <!-- Controls: one CTA row, reused per tab -->
  <div class="container basic-reviews-section-container" style="width:100%;max-width:1100px;margin-top:30px!important;margin:0 auto;">
    <div class="cta-button" style="background:transparent;padding:0;justify-content:left;">
      <a class="cta-button2 button button--xl"
         style="margin:0 auto;text-align:left;background:black;font-family:'Roboto',sans-serif;color:#fff;text-transform:none;font-size:15px;padding:10px 25px;"
         href="#"><?php echo get_field("singlepp_content_standard_reviews_seemore_button","options"); ?></a>
    </div>
    <div id="reviews-loading" style="display:none;text-align:center;padding:15px;">
      <div class="loader"></div>
    </div>
  </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', function(){
    // Data from PHP (already include product_title/product_url/assigned_date/avatar_url)
    const chunksProduct = <?php echo json_encode($chunks_product); ?>;
    const chunksShip    = <?php echo json_encode($chunks_ship); ?>;

    let nextProduct = 0;
    let nextShip    = 0;

    const tabs    = document.querySelectorAll('.reviews-tab');
    const gridP   = document.getElementById('reviews-grid-product');
    const gridS   = document.getElementById('reviews-grid-shipping');
    const seeMore = document.querySelector('.cta-button2');
    const loader  = document.getElementById('reviews-loading');

    let activeTab = 'product';

    function setTab(tab){
      activeTab = tab;
      tabs.forEach(t=>{
        if(t.dataset.tab === tab){ t.classList.add('is-active'); t.style.background='#00000008'; t.style.borderColor='#e6e6e6'; }
        else{ t.classList.remove('is-active'); t.style.background='transparent'; t.style.borderColor='transparent'; }
      });
      if(tab === 'product'){ gridP.style.display='grid'; gridS.style.display='none'; }
      else{ gridP.style.display='none'; gridS.style.display='grid'; }

      const moreAvail = tab === 'product'
        ? (nextProduct < (chunksProduct?.length || 0))
        : (nextShip < (chunksShip?.length || 0));
      if (seeMore) seeMore.style.display = moreAvail ? 'inline-block' : 'none';
    }

    setTab('product');
    tabs.forEach(btn => btn.addEventListener('click', ()=> setTab(btn.dataset.tab)));

    // Escape helper
    const esc = (str) => String(str ?? '').replace(/[&<>"']/g, s => ({
      '&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#039;'
    }[s]));

    function avatarHtml(avatarUrl){
      if(avatarUrl){
        return `<div class="avatar"><img src="${esc(avatarUrl)}" alt="" loading="lazy" /></div>`;
      }
      return `<div class="avatar">👤</div>`;
    }

    // Append a chunk of cards into a grid
    function appendChunk(grid, chunk){
      chunk.forEach(function(review){
        const article = document.createElement('article');
        article.className = 'review-card is-new';

        const url       = review.product_url   || '#';
        const title     = review.product_title || '<?php echo esc_js($rv_fallback_title); ?>';
        const name      = review.name          || 'Anonymní';
        const text      = review.text          || '';
        const headline  = review.headline      || '';
        const date      = review.assigned_date || '';
        const avatarUrl = review.avatar_url    || '';

        article.innerHTML = `
          <div class="card-top">
            <h3 class="product-title"><a href="${esc(url)}">${esc(title)}</a></h3>
            <div class="date">${esc(date)}</div>
          </div>
          <div class="stars">★★★★★</div>
          <div class="identity">
            ${avatarHtml(avatarUrl)}
            <div class="name">${esc(name)}</div>
            <span class="verified"><?php _e('Potvrdené','your-textdomain'); ?></span>
          </div>
          ${headline ? `<div class="headline">${esc(headline)}</div>` : ''}
          <div class="content">${esc(text)}</div>
        `;
        grid.appendChild(article);
      });
    }

    seeMore && seeMore.addEventListener('click', function(e){
      e.preventDefault();
      seeMore.style.display='none';
      loader.style.display='block';

      setTimeout(function(){
        if(activeTab === 'product' && nextProduct < (chunksProduct?.length || 0)){
          appendChunk(gridP, chunksProduct[nextProduct]);
          nextProduct++;
        }else if(activeTab === 'shipping' && nextShip < (chunksShip?.length || 0)){
          appendChunk(gridS, chunksShip[nextShip]);
          nextShip++;
        }
        loader.style.display='none';
        const moreAvail = activeTab === 'product'
          ? (nextProduct < (chunksProduct?.length || 0))
          : (nextShip < (chunksShip?.length || 0));
        if(moreAvail) seeMore.style.display='inline-block';
      }, 400);
    });
  });
</script>

<!-- new review styling -->
<style>
/* ===== Reviews: Full corrected CSS ===== */

/* Section + container */
#reviews-section{
  font-family: "Roboto", system-ui, -apple-system, Segoe UI, Arial, sans-serif;
  background:#f9f9f9;
}
.basic-reviews-section-container{
  max-width:1440px;
  margin:0 auto;
  padding:0 0px;
}

/* Tabs */
.reviews-tabs{ display:flex; gap:18px; border-bottom:1px solid #eee; margin-bottom:18px; }
.reviews-tab{
  appearance:none; background:transparent; border:1px solid transparent; border-bottom:0;
  padding:8px 14px; font-weight:700; cursor:pointer;
}
.reviews-tab.is-active{ background:#00000008; border-color:#e6e6e6; }

/* Grid */
.reviews-grid{
  display:grid;
  grid-template-columns:repeat(3, 1fr);
  gap:10px;
  width:100%;
}
@media (max-width:1100px){
  .reviews-grid{ grid-template-columns:repeat(2, 1fr); }
}
@media (max-width:640px){
  .reviews-grid{ grid-template-columns:1fr; }
}

/* Card */
.review-card{
  width:100%;
  height:100%;
  background:#fff;
  border:1px solid #efefef;
  border-radius:4px;
  box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.1);
  padding:18px 20px;
  display:flex;
  flex-direction:column;
}

/* Card top */
.review-card .card-top{
  display:flex; align-items:flex-start; justify-content:space-between; gap:12px;
  margin:-2px 0 6px;
}
.review-card .product-title{
  margin:0; font-weight:800; font-size:16px; line-height:1.25;
}
.review-card .product-title a{
  color:#0e0e0e; text-decoration:underline; text-underline-offset:2px;
}
.review-card .date{
  color:#8c8c8c; font-size:13px; white-space:nowrap; margin-top:2px;
}

/* Stars */
.review-card .stars{
  letter-spacing:3px; font-size:18px; color:#0f0f0f; margin:2px 0 10px;
}

/* Identity */
.review-card .identity{
    
  display:flex;
  align-items:flex-start;   /* ⬅️ top-align items */
  gap:12px;
  margin:2px 0 12px;
  
  
}
.review-card .avatar{
  width:32px; height:32px;
  border:1px solid #dfdfdf;
  border-radius:0px;
  display:flex; align-items:center; justify-content:center;
  font-size:18px; color:#000; background:#fff;
  overflow:hidden;
}
.review-card .avatar img{
  width:100%;
  height:100%;
  object-fit:cover;
  display:block;
}
.review-card .name{ font-weight:700; color:#111; font-size:15px; }
.review-card .verified{
  display:inline-block; background:#0f0f0f; color:#fff;
  font-size:12px; font-weight:700; line-height:1;
  padding:5px 8px 4px; border-radius:3px; margin-left:6px;
}

/* Headline + body */
.review-card .headline{ font-weight:800; font-size:16px; color:#111; margin:6px 0 6px; }
.review-card .content{ color:#2b2b2b; font-size:15px; line-height:1.7; }

/* Reveal for appended cards */
.review-card.is-new{ animation:rv-fade .28s ease-out both; }
@keyframes rv-fade{ from{opacity:0; transform:translateY(6px);} to{opacity:1; transform:none;} }

/* Loader */
#reviews-loading .loader{
  width:28px; height:28px; border:3px solid #e6e6e6; border-top-color:#111; border-radius:50%;
  margin:0 auto; animation:rv-spin .75s linear infinite;
}
@keyframes rv-spin{ to{ transform:rotate(360deg);} }



/* Default avatar (placeholder) stays 32x32 */
.review-card .avatar{
  width:32px;
  height:32px;
  border:1px solid #dfdfdf;
  border-radius:0px;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:18px;
  color:#000;
  background:#fff;
  overflow:hidden;
}

/* If avatar contains a real image -> make it 80x80 */
.review-card .avatar:has(img){
  width:250px;
  height:250px;
  font-size:0; /* hide any accidental text spacing */
  align-items:stretch;
  justify-content:stretch;
}

.review-card .avatar img{
  width:100%;
  height:100%;
  object-fit:cover;
  display:block;
}

/* ONLY reviews with real image */
.review-card .identity:has(.avatar img){
  display:block;              /* ⬅️ image gets own row */
}

/* Real image wrapper */
.review-card .avatar:has(img){
  width:100%;
  height:auto;
  border:none;
  margin-bottom:10px;
}

/* Real image itself */
.review-card .avatar img{
  width:100%;
  max-width:320px;
  height:auto;
  display:block;
  object-fit:cover;
  border:1px solid #dfdfdf;
  border-radius:4px;
}

/* Name + verified BELOW image */
.review-card .identity:has(.avatar img) .name,
.review-card .identity:has(.avatar img) .verified{
  display:inline-block;
  vertical-align:middle;
}


@media (max-width: 991px){

  /* ONLY reviews with real image */
  .review-card .avatar:has(img){
    max-width:100%;
  }

  .review-card .avatar img{
    width:100%;        /* ✅ full width on mobile */
    max-width:100%;
    height:auto;
  }

}


</style>






<?php
$faq_list = get_field('faq_list', 'option');
$faq_list2 = get_field('faq_list_2', 'option');
$faq_list3 = get_field('faq_list_3', 'option');

$is_ortopas_faq   = ( function_exists('noriks_is_type') && noriks_is_type('ortopas') );
$is_bunion_faq    = ( function_exists('noriks_is_type') && noriks_is_type('bunion') );
$is_fisiorest_faq = ( function_exists('noriks_is_type') && noriks_is_type('fisiorest') );
$is_norikshers_faq = ( function_exists('noriks_is_type') && noriks_is_type('norikshers') );

// NORIKS HERS — silikónové kolagénové pásiky na vrásky a jazvy — FAQ o produkte (preklad, NORIKS).
$norikshers_faq = array(
  array( 'questioon' => 'Čím sa líši od klasických náplastí na vrásky alebo krémov na jazvy?', 'answer' => 'Väčšina náplastí na vrásky je z papiera alebo hydrokoloidu a krémy na jazvy často zostanú len na povrchu pokožky. NORIKS HERS používa silikón klinickej kvality, ktorému dermatológovia dôverujú už roky pri viditeľnom zlepšovaní textúry jaziev a pružnosti pokožky — a teraz sa využíva aj na zmiernenie vrások.' ),
  array( 'questioon' => 'Môže jediný pásik naozaj pôsobiť na vrásky aj jazvy?', 'answer' => 'Áno, pretože vrásky aj jazvy sú prejavom rozpadu kolagénu alebo slabej regenerácie pokožky. Silikón podporuje udržanie vlhkosti, obnovu kolagénu a vyhladenie textúry pokožky, čo prospieva obom.' ),
  array( 'questioon' => 'Za aký čas uvidím výsledky?', 'answer' => 'Väčšina používateľov spozoruje viditeľné vyhladenie jemných vrások už po 1 – 3 použitiach a vzhľad jaziev sa zlepší za 2 – 3 týždne pravidelného používania. Hlbšie jazvy a vrásky môžu trvať dlhšie, no výsledky sa časom stupňujú.' ),
  array( 'questioon' => 'Je bezpečný pre citlivú pleť alebo pleť náchylnú na akné?', 'answer' => 'Určite. NORIKS HERS je hypoalergénny, bez latexu a dostatočne jemný na citlivé oblasti, ako je okolie očí či úst, a dokonca aj na hojace sa stopy po akné. Ak máte veľmi reaktívnu pokožku, vždy najprv otestujte na malej ploche.' ),
  array( 'questioon' => 'Ako dlho ho môžem nosiť?', 'answer' => 'Pre najlepšie výsledky odporúčame nosiť NORIKS HERS 6 – 8 hodín, cez noc. Môžete ho použiť aj cez deň — len dbajte na to, aby bola pokožka pod ním čistá a bez olejov či sér.' ),
  array( 'questioon' => 'Ako dlho vydrží jedna rolka?', 'answer' => 'V závislosti od toho, ako často a kde ho používate, jedna rolka vydrží 3 – 6 týždňov. Keďže je opakovane použiteľný, je oveľa hospodárnejší ako jednorazové náplasti alebo krémy.' ),
  array( 'questioon' => 'Zostane na mieste, kým spím?', 'answer' => 'Áno! NORIKS HERS je vyrobený s pokožke priateľským, odolným lepidlom, ktoré kopíruje vaše pohyby. Je priedušný a zostane na mieste aj u ľudí, ktorí spia na boku.' ),
  array( 'questioon' => 'Na ktorých oblastiach ho môžem používať?', 'answer' => 'Kdekoľvek! Väčšina zákazníkov používa NORIKS HERS na: vrásky na čele, vrásky medzi obočím, vrásky od úsmevu, vrásky na krku, stopy po akné, jazvy po cisárskom reze, strie, chirurgické alebo poúrazové jazvy.' ),
  array( 'questioon' => 'Prečo je NORIKS HERS lepší ako lacné online náplasti?', 'answer' => 'Mnohé náplasti predávané online sú nekvalitné, tenké alebo majú zlé lepidlo. NORIKS HERS používa prémiový silikón, testovaný v laboratóriu na bezpečnosť a odolnosť, a drží na mieste celú noc. Navyše ponúkame dedikovanú zákaznícku podporu a rýchlejšiu výmenu, ak potrebujete pomoc.' ),
  array( 'questioon' => 'Je k dispozícii záruka vrátenia peňazí?', 'answer' => 'Áno, ponúkame 30-dňovú záruku bez rizika. Ak nie ste spokojní, stačí nás kontaktovať a vyriešime to.' ),
);

// Korektor vbočeného palca — FAQ o produkte (preklad, NORIKS).
$bunion_faq = array(
  array( 'questioon' => 'Ako rýchlo sa budem cítiť lepšie?', 'answer' => 'Približne 30 minút — toľko času je potrebné na zmiernenie nepohodlia. Pri pravidelnom používaní počas dvoch týždňov pocítite výrazné uľavenie pri každodenných činnostiach, ako sú chôdza, státie alebo spánok.' ),
  array( 'questioon' => 'Ako rýchlo si všimnem rozdiel na vbočenom palci?', 'answer' => 'V závislosti od závažnosti vbočeného palca si väčšina zákazníkov všimne viditeľné zlepšenie po 4 – 8 týždňoch. Mierny vbočený palec: 4 týždne. Stredný vbočený palec: 4 týždne. Ťažší vbočený palec: 8 týždňov.' ),
  array( 'questioon' => 'Dá sa nosiť v topánkach? Môžem v ňom chodiť?', 'answer' => 'Nie, do topánky sa nezmestí. Áno, môžete v ňom chodiť. Je však určený na oddych — keď ležíte na gauči, pozeráte TV, čítate alebo spíte.' ),
  array( 'questioon' => 'Čo ak mi to bude nepríjemné?', 'answer' => 'To je úplne normálne! Korektor NORIKS je navrhnutý dostatočne pevne na to, aby zarovnal kĺb palca, zastavil zápal a zmiernil nepohodlie. Možno budete potrebovať 1 – 2 sedenia, aby ste si zvykli, potom sa však budete cítiť oveľa lepšie!' ),
  array( 'questioon' => 'Ako dlho ho mám používať?', 'answer' => 'Odporúčame začať s 30 minútami denne a postupne predlžovať až na sedenie 1 až 3 hodiny. Keď vám to bude pohodlné, môžete ho začať nosiť aj počas spánku. Noste ho počas oddychu — na gauči, pri TV, čítaní alebo spánku.' ),
  array( 'questioon' => 'Pomôže pri mojom konkrétnom stave?', 'answer' => 'Korektor NORIKS je ideálny na: zmiernenie nepohodlia, ktoré ovplyvňuje každodenné činnosti ako chôdza alebo státie; úľavu od nepohodlia spôsobeného vbočeným palcom počas oddychu alebo spánku; riešenie vbočeného palca v skorej fáze, ktorý môže postupovať; vbočený palec, ktorý sa vrátil po operácii; pomoc pri ťažšom vbočenom palci pripravenom na operáciu; a ako účinnú nechirurgickú možnosť.' ),
  array( 'questioon' => 'Bude vyhovovať môjmu chodidlu? Existuje ľavá a pravá strana?', 'answer' => 'Bez ohľadu na veľkosť chodidla — od najmenšieho detského po veľké chodidlo dospelého — korektor NORIKS pohodlne padne. Nie sú strany! Vďaka prispôsobiteľnej konštrukcii sa rovnako ľahko prispôsobí ľavému aj pravému chodidlu.' ),
);

// Ortopedický pás — FAQ o produkte (preklad, NORIKS).
$ortopas_faq = array(
  array( 'questioon' => 'Ako rýchlo pocítim úľavu od bolesti?', 'answer' => 'Mnohí používatelia pocítia badateľnú úľavu od išiasu a bolestí krížov hneď po nasadení pásu NORIKS. Jeho cielená kompresia poskytuje okamžitú oporu, stabilizuje chrbticu a znižuje tlak na nervy. Pre dlhotrvajúci účinok odporúčame nosiť pás dôsledne podľa návodu aspoň dva týždne. Postupom času môžete pri správnom používaní a zdravých návykoch pocítiť trvalú úľavu a lepšiu pohyblivosť.' ),
  array( 'questioon' => 'Ako pás správne nasadiť?', 'answer' => 'Pás NORIKS noste okolo bokov, tesne pod líniou pása. Mal by sa nachádzať nad krížovou oblasťou (drieková časť chrbta, tesne nad zadkom) a pod hrebeňom panvy (horná časť bočných bokov). Pre viac informácií si pozrite návod na použitie.' ),
  array( 'questioon' => 'Oslabí pás moje svaly?', 'answer' => 'Nie, pás NORIKS neoslabuje svaly ako korzet na chrbát. Len pomáha držať SI kĺby pohromade a obnovuje normálne napätie väzov. Môžete ho nosiť týždne alebo mesiace bez obáv zo svalovej atrofie.' ),
  array( 'questioon' => 'Môžem pás nosiť aj počas spánku?', 'answer' => 'Áno, pás môžete nosiť aj v noci. Dĺžka nosenia nie je obmedzená a dlhšie nosenie nemá negatívne účinky.' ),
  array( 'questioon' => 'Ako tesne ho mám nasadiť?', 'answer' => 'Pás by mal tesne priliehať, ale nie príliš tesne, aby ste sa vyhli nepohodliu. Mali by ste sa bez problémov hýbať bez toho, aby sa pás zarezával alebo šmýkal. Napätie sa jednoducho nastavuje elastickými pásikmi.' ),
  array( 'questioon' => 'Komu ho odporúčate?', 'answer' => 'Všetkým, ktorí zápasia s bolesťami krížov, išiasom, svalovým napätím, prietržou medzistavcovej platničky, bolesťami bokov alebo panvy a problémami so SI kĺbom. Bez ohľadu na vek, pohlavie, výšku a hmotnosť.' ),
  array( 'questioon' => 'Existuje záruka vrátenia peňazí?', 'answer' => 'Ponúkame záruku spokojnosti! Ak nie ste s pásom NORIKS spokojní, kontaktujte nás na info@noriks.com za účelom vrátenia a preplatenia do 90 dní. Lehota sa počíta od prevzatia pásu.' ),
);

// FisioRest — FAQ o produkte (preklad, NORIKS).
$fisiorest_faq = array(
  array( 'questioon' => 'Ako NORIKS FisioRest funguje?', 'answer' => 'FisioRest spája trakciu, teplo a vibračnú masáž s ergonomickou konštrukciou z pamäťovej peny. Táto technológia naťahuje krk pod presne správnym uhlom a odľahčuje krčnú chrbticu. Následne upokojujúca teplá masáž podporí prítok krvi bohatej na kyslík a živiny do svalov a tak pomáha pri regenerácii tkanív.' ),
  array( 'questioon' => 'V čom je FisioRest lepší ako iné zariadenia?', 'answer' => 'NORIKS FisioRest je výnimočný, pretože spája <strong>tri terapie v jednej</strong> — teplo, masáž a jemnú trakciu — ktoré uvoľnia svaly a znovu zarovnajú krk pre dlhotrvajúcu úľavu. Navyše je <strong>bezdrôtový, bezpečný na spánok a obalený v chladivom hodvábe</strong> pre pohodlie, aké inde nenájdete.' ),
  array( 'questioon' => 'Ako sa FisioRest používa?', 'answer' => '1. Nabite ho priloženým USB-C káblom a nabíjačkou približne 4 až 6 hodín. 2. Podržte tlačidlo masáže alebo tepla 5 sekúnd, kým sa nerozsvieti kontrolka. 3. Opätovným stláčaním tlačidiel meníte rýchlosť masáže a nastavenia tepla. 4. Užívajte si uvoľňujúcu masáž!' ),
  array( 'questioon' => 'Ako dlho mám FisioRest používať?', 'answer' => 'Odporúčame začať s 15 minútami, aby si krk zvykol. Postupom času môžete prejsť na plné sedenie. Pre orientáciu: cyklus jemného tepla, masáže a trakcie trvá 30 minút, čo je zvyčajne ideálny čas na to, aby sa krk uvoľnil a obnovil svoju prirodzenú krivku.' ),
  array( 'questioon' => 'Je FisioRest bezdrôtový?', 'answer' => 'Áno! NORIKS FisioRest je úplne bezdrôtový a nabíjateľný na každodenné používanie.' ),
  array( 'questioon' => 'Ako sa FisioRest čistí?', 'answer' => 'Látka je odolná voči olejom a prachu, no odporúčame FisioRest po použití utrieť dezinfekčnou utierkou, keďže poťah vankúša nie je možné prať.' ),
  array( 'questioon' => 'Je bezpečný pre každého?', 'answer' => 'NORIKS FisioRest je navrhnutý tak, aby vyhovoval každému bez ohľadu na vek alebo pohlavie. Každá situácia je však iná. Pre podrobné pokyny prispôsobené vašim potrebám odporúčame konzultáciu s lekárom.' ),
  array( 'questioon' => 'Môžem ho vrátiť, ak nevidím výsledky?', 'answer' => 'Samozrejme! Poskytujeme plnú záruku vrátenia peňazí do 90 dní od doručenia, ak nie ste s produktom spokojní. Napíšte nám na info@noriks.com a odpovieme do 12 hodín od prijatia správy!' ),
);

// Nahrádza LEN kontajner FAQ o produkte pre 3 orto-produkty;
// kontajnery doručenia/vrátenia zostávajú nedotknuté.
$faq_pick = function( $title, $list ) use ( $is_ortopas_faq, $ortopas_faq, $is_bunion_faq, $bunion_faq, $is_fisiorest_faq, $fisiorest_faq, $is_norikshers_faq, $norikshers_faq ) {
  $t = (string) $title;
  $is_info = ( stripos( $t, 'produkt' ) !== false ) || ( stripos( $t, 'výrobk' ) !== false );
  if ( $is_norikshers_faq && $is_info ) { return $norikshers_faq; }
  if ( $is_fisiorest_faq && $is_info ) { return $fisiorest_faq; }
  if ( $is_bunion_faq && $is_info )    { return $bunion_faq; }
  if ( $is_ortopas_faq && $is_info )   { return $ortopas_faq; }
  return $list;
};
?>





<section class="faq-section">
  <h2>Často kladené otázky</h2>
  

   <!-- first faq container --> 
      <div class="faq-container">
         <h4 style="text-align:left; font-size: 1rem;
            font-weight: 700;
            color: #222223;
            margin-bottom: 10px; "><?php echo get_field('faq_title_1', 'option'); ?></h4>
            <?php
              $faq_list = $faq_pick( get_field('faq_title_1', 'option'), $faq_list );
              if( $faq_list && is_array($faq_list) ):
                      foreach( $faq_list as $faq_item ):
              ?>
                    <div class="faq-item">
                      <button class="faq-question">
                         <?php echo $faq_item["questioon"]; ?>
                        <span class="arrow">&#9660;</span>
                      </button>
                      <div class="faq-answer">
                        <p>  <?php echo $faq_item["answer"]; ?></p>
                      </div>
                    </div>
          <?php endforeach;
            endif;
            ?>
      </div>
    <!-- first faq container --> 
  
     <!-- 2 faq container --> 
      <div class="faq-container">
          <br/>
         <h4 style="text-align:left; font-size: 1rem;
            font-weight: 700;
            color: #001e36;
            margin-bottom: 10px; "><?php echo get_field('faq_title_2', 'option'); ?></h4>
            <?php
              $faq_list2 = $faq_pick( get_field('faq_title_2', 'option'), $faq_list2 );
              if( $faq_list2 && is_array($faq_list2) ):
                      foreach( $faq_list2 as $faq_item ):
              ?>
                    <div class="faq-item">
                      <button class="faq-question">
                         <?php echo $faq_item["questioon"]; ?>
                        <span class="arrow">&#9660;</span>
                      </button>
                      <div class="faq-answer">
                        <p>  <?php echo $faq_item["answer"]; ?></p>
                      </div>
                    </div>
          <?php endforeach;
            endif;
            ?>
      </div>
        <!-- 2 faq container --> 
  
     <!-- 3 faq container --> 
      <div class="faq-container">
          <br/>
         <h4 style="text-align:left; font-size: 1rem;
            font-weight: 700;
            color: #001e36;
            margin-bottom: 10px; "><?php echo get_field('faq_title_3', 'option'); ?></h4>
            <?php
              $faq_list3 = $faq_pick( get_field('faq_title_3', 'option'), $faq_list3 );
              if( $faq_list3 && is_array($faq_list3) ):
                      foreach( $faq_list3 as $faq_item ):
              ?>
                    <div class="faq-item">
                      <button class="faq-question">
                         <?php echo $faq_item["questioon"]; ?>
                        <span class="arrow">&#9660;</span>
                      </button>
                      <div class="faq-answer">
                        <p>  <?php echo $faq_item["answer"]; ?></p>
                      </div>
                    </div>
          <?php endforeach;
            endif;
            ?>
      </div>
  <!-- 3 faq container --> 
  
</section>

<script>
  document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
      const faqAnswer = button.nextElementSibling;
      const arrow = button.querySelector('.arrow');

      if (faqAnswer.style.maxHeight) {
        faqAnswer.style.maxHeight = null;
        arrow.style.transform = 'rotate(0deg)';
      } else {
        document.querySelectorAll('.faq-answer').forEach(item => {
          item.style.maxHeight = null;
        });
        document.querySelectorAll('.arrow').forEach(item => {
          item.style.transform = 'rotate(0deg)';
        });
        faqAnswer.style.maxHeight = faqAnswer.scrollHeight + 'px';
        arrow.style.transform = 'rotate(180deg)';
      }
    });
  });
</script>
		


