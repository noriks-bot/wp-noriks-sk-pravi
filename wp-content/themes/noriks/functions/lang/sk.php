<?php
add_filter( 'gettext', 'translate_labels_sk', 20, 3 );
function translate_labels_sk( $translated_text, $text, $domain ) {
    $translations = array(
        'Choose your size' => 'Vyberte veľkosť',
        'Choose an option' => 'Vyberte možnosť',
        'Add to cart' => 'Pridať do košíka',
        'Select options' => 'Výber',
        'View cart' => 'Zobraziť košík',
        'Checkout' => 'Objednávka',
        'Proceed to checkout' => 'Prejsť k objednávke',
        'Update cart' => 'Aktualizovať košík',
        'Apply coupon' => 'Použiť kupón',
        'Coupon code' => 'Kód kupónu',
        'Cart totals' => 'Celkom košík',
        'Subtotal' => 'Medzisúčet',
        'Total' => 'Celkom',
        'Shipping' => 'Doručenie',
        'Free shipping' => 'Doručenie zadarmo',
    );
    if ( isset( $translations[$text] ) ) return $translations[$text];
    return $translated_text;
}
