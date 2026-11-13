<?php
/**
 * Podstranica s PDF uputama za NORIKS proizvode.
 *
 * Stranica se kreira jednom iz teme (slug: navody) i koristi predlozak page-upute.php.
 * PDF-ovi stoje lokalno u temi, u mapi /manuals/.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function noriks_manuals_list() {
    return array(
        array(
            'file'  => 'noriks-majice.pdf',
            'sku'   => 'NORIKS-ALL-BLACK-6-PACK',
            'title' => 'Tričká NORIKS',
            'sub'   => 'Bavlnené tričká — výber veľkosti, nosenie a starostlivosť.',
        ),
        array(
            'file'  => 'noriks-bokserice.pdf',
            'sku'   => 'NORIKS-BOX-BLACK-5-PACK',
            'title' => 'Boxerky NORIKS',
            'sub'   => 'Modalové boxerky — rozmery, nosenie a starostlivosť.',
        ),
        array(
            'file'  => 'noriks-kompresijske-carape.pdf',
            'sku'   => array( 'NORIKS-KOMZIPS', 'NORIKS-BOXERS-ORTO-4' ),
            'title' => 'Kompresné pančuchy NORIKS so zipsom',
            'sub'   => 'Odstupňovaná kompresia 15–20 mmHg s bočným zipsom.',
        ),
        array(
            'file'  => 'noriks-kneefix.pdf',
            'sku'   => 'NORIKS-KNEEFIX',
            'title' => 'NORIKS KneeFix — ortopedická kolenná ortéza',
            'sub'   => 'Nastaviteľná kompresia, bočné stabilizátory a gélová vložka na jabĺčko.',
        ),
        array(
            'file'  => 'noriks-bunion-fix.pdf',
            'sku'   => 'NORIKS-BUNION',
            'title' => 'NORIKS Bunion Fix — korektor vybočeného palca',
            'sub'   => 'Postupné narovnávanie palca pri 30 minútach až 3 hodinách denne.',
        ),
        array(
            'file'  => 'noriks-ortopas.pdf',
            'sku'   => 'NORIKS-ORTOPAS',
            'title' => 'NORIKS ortopedický pás na chrbát',
            'sub'   => 'Cielená kompresia pre driekovú oblasť a stabilizácia pri každodenných pohyboch.',
        ),
        array(
            'file'  => 'noriks-fisiorest.pdf',
            'sku'   => 'NORIKS-FISIOREST',
            'title' => 'NORIKS NeckRelax — prístroj na krk',
            'sub'   => 'Trakcia, teplo a vibračná masáž v sedení od 15 do 30 minút.',
        ),
        array(
            'file'  => 'noriks-fit-kompresijska-majica.pdf',
            'sku'   => 'NORIKS-KOMPSFIT',
            'title' => 'NORIKS FIT — kompresné tričko',
            'sub'   => 'Priliehavá kompresia, ktorá vyhladzuje siluetu a podporuje vzpriamené držanie tela.',
        ),
        array(
            'file'  => 'noriks-leakbox.pdf',
            'sku'   => 'NORIKS-LEAKBOX',
            'title' => 'NORIKS PureDry — prateľné boxerky pri inkontinencii',
            'sub'   => 'Až 300 ml savosti, sedemvrstvové jadro a vodoodolná membrána.',
        ),
        array(
            'file'  => 'noriks-ergosit.pdf',
            'sku'   => 'NORIKS-ERGOSIT',
            'title' => 'NORIKS ErgoSit — ortopedický sedací vankúš',
            'sub'   => 'Výrez pre kostrč a pamäťová pena s vysokou hustotou na dlhé sedenie.',
        ),
        array(
            'file'  => 'noriks-kidsnest.pdf',
            'sku'   => 'NORIKS-KIDSNEST',
            'title' => 'NORIKS KidsNest — detský ortopedický vankúš',
            'sub'   => 'Tri veľkosti, ktoré rastú s dieťaťom a podporujú správnu polohu hlavy.',
        ),
        array(
            'file'  => 'noriks-slim.pdf',
            'sku'   => 'NORIKS-SLIM',
            'title' => 'NORIKS Slim — tvarujúce nohavičky s vysokým pásom',
            'sub'   => 'Prekrížený pás 360°, vysoký pás a bezšvový úplet na každodenné nosenie.',
        ),
        array(
            'file'  => 'noriks-redrelief.pdf',
            'sku'   => 'NORIKS-RED',
            'title' => 'NORIKS RedRelief — terapia červeným svetlom na zápästie',
            'sub'   => 'Dvojitá vlnová dĺžka 660 nm a 850 nm, 48 dvojitých LED diód, sedenie 15 minút.',
        ),
        array(
            'file'  => 'noriks-pal.pdf',
            'sku'   => 'NORIKS-PAL',
            'title' => 'NORIKS Pal — vychádzková palica s druhou rukoväťou',
            'sub'   => 'Druhá rukoväť na vstávanie, štyri nožičky, svetlo a alarm. Skladacia a výškovo nastaviteľná.',
        ),
        array(
            'file'  => 'noriks-polar-cloth.pdf',
            'sku'   => 'NORIKS-CLOATH',
            'title' => 'Polar NORIKS Cloth XXL — handrička na čistenie iba vodou',
            'sub'   => 'Formát 60 × 40 cm, obojstranné vyhotovenie, nasaje až 600 ml vody. Bez sprejov a bez chémie.',
        ),
        array(
            'file'  => 'noriks-slabproof.pdf',
            'sku'   => 'NORIKS-SLABPROOF',
            'title' => 'NORIKS SlabProof — pracovné ponožky s vankúšikom',
            'sub'   => 'Nízky strih pod členok, zónové polstrovanie pod pätou a prednou časťou chodidla.',
        ),
        array(
            'file'  => 'noriks-controlpro.pdf',
            'sku'   => 'NORIKS-CONTROLPRO',
            'title' => 'NORIKS ControlPro — tréner svalov panvového dna',
            'sub'   => 'Cvičenie s odporom medzi kolenami: tri série po desať stlačení denne, bez zavádzania a bez aplikácie.',
        ),
        array(
            'file'  => 'noriks-tradesman.pdf',
            'sku'   => 'NORIKS-SLABPROOF-2',
            'title' => 'NORIKS Tradesman — pracovné ponožky s vankúšikom a oporou klenby',
            'sub'   => 'Bambus, zónové polstrovanie, pásik pod klenbou a dvojitá manžeta na dlhé zmeny v pracovných čižmách.',
        ),
        array(
            'file'  => 'noriks-bowl.pdf',
            'sku'   => 'NORIKS-BOWL',
            'title' => 'NORIKS Bowl — ortopedická miska pre psov so sklonom 15°',
            'sub'   => 'Zvýšená na 11 cm a naklonená o 15° — pes je v prirodzenejšej polohe, bez ohýbania krku až k podlahe.',
        ),
        array(
            'file'  => 'noriks-cloud.pdf',
            'sku'   => 'NORIKS-CLOUD',
            'title' => 'NORIKS Cloud — ortopedický vankúš medzi kolená',
            'sub'   => 'Na spánok na boku: drží kolená a boky v línii, s nastaviteľným pásikom, ktorý ho udrží na mieste celú noc.',
        ),
        array(
            'file'  => 'noriks-kneeheat.pdf',
            'sku'   => 'NORIKS-KNEEHEAT',
            'title' => 'NORIKS KneeHeat — ohrievanie, kompresia a masáž kolena',
            'sub'   => 'Tri terapie v jednom sedení: teplo do 42 °C, vzduchová kompresia a vibrácia 60 Hz. Sedenie trvá 12 minút.',
        ),
        array(
            'file'  => 'noriks-mamafit.pdf',
            'sku'   => 'NORIKS-SLIM-2',
            'title' => 'NORIKS MamaFit — popôrodné kompresné nohavičky 360°',
            'sub'   => 'Vysoký pás a prekrížená kompresia 360° — opora brucha spredu, zboku aj zozadu.',
        ),
        array(
            'file'  => 'noriks-snug.pdf',
            'sku'   => 'NORIKS-SNUG',
            'title' => 'NORIKS Snug — vankúš na celé telo v tvare písmena S',
            'sub'   => 'Podopiera ramená, boky aj kolená naraz. Rozmery 105 × 30 cm, chladivý poťah.',
        ),
        array(
            'file'  => 'noriks-hyd.pdf',
            'sku'   => 'NORIKS-HYD',
            'title' => 'NORIKS HYD — fľaša na vodíkovú vodu s PEM elektrolýzou',
            'sub'   => 'Mení obyčajnú vodu na vodíkovú. Cyklus 3 alebo 10 minút, trvalý filter, sklo a nehrdzavejúca oceľ.',
        ),
        array(
            'file'  => 'noriks-winecooler.pdf',
            'sku'   => 'NORIKS-WINECOOLER',
            'title' => 'NORIKS WineCooler — chladič vína s nalievačom',
            'sub'   => 'Tyčinka z nehrdzavejúcej ocele, ktorá chladí fľašu zvnútra a nalieva bez kvapkania.',
        ),
    );
}

/** Slika i poveznica proizvoda po SKU-u — uvijek aktualne, bez rucnog upisa URL-a. */
function noriks_manual_product( $sku ) {
    $out = array( 'img' => '', 'url' => '' );
    if ( ! function_exists( 'wc_get_product_id_by_sku' ) ) { return $out; }

    $pid = 0;
    foreach ( (array) $sku as $candidate ) {
        $pid = wc_get_product_id_by_sku( $candidate );
        if ( $pid ) { break; }
    }
    if ( ! $pid ) { return $out; }

    $out['url'] = get_permalink( $pid );
    $out['img'] = get_the_post_thumbnail_url( $pid, 'woocommerce_thumbnail' );

    if ( ! $out['img'] && function_exists( 'wc_get_product' ) ) {
        $product = wc_get_product( $pid );
        if ( $product ) {
            $gallery = $product->get_gallery_image_ids();
            if ( ! empty( $gallery[0] ) ) {
                $out['img'] = wp_get_attachment_image_url( $gallery[0], 'woocommerce_thumbnail' );
            }
        }
    }
    return $out;
}

/** Jednokratno kreira pravu WP stranicu i dodijeli joj predlozak page-upute.php. */
function noriks_manuals_ensure_page() {
    $opt = 'noriks_manuals_page_id';
    $id  = (int) get_option( $opt );
    if ( $id && get_post_status( $id ) ) { return; }

    $existing = get_page_by_path( 'navody' );
    if ( $existing ) {
        update_post_meta( $existing->ID, '_wp_page_template', 'page-upute.php' );
        update_option( $opt, $existing->ID );
        return;
    }

    $id = wp_insert_post( array(
        'post_title'   => 'Návod na použitie',
        'post_name'    => 'navody',
        'post_type'    => 'page',
        'post_status'  => 'publish',
        'post_content' => '',
        'meta_input'   => array( '_wp_page_template' => 'page-upute.php' ),
    ) );
    if ( $id && ! is_wp_error( $id ) ) { update_option( $opt, $id ); }
}
add_action( 'init', 'noriks_manuals_ensure_page' );
