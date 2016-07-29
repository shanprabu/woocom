<?php
  global $product;
  $has_row    = false;
  $alt        = 1;
  $attributes = $product->get_attributes(); ?>
  <table class="shop_attributes">

<?php foreach ( $attributes as $attribute ) :
    if ( empty( $attribute['is_visible'] ) || ( $attribute['is_taxonomy'] && ! taxonomy_exists( $attribute['name'] ) ) ) {
      continue;
    } else {
      $has_row = true;
    } ?>

    <tr class="<?php if ( ( $alt = $alt * -1 ) == 1 ) echo 'alt'; ?>">
      <th><?php echo wc_attribute_label( $attribute['name'] ); ?></th>
      <td><?php
        if ( $attribute['is_taxonomy'] ) {

          $values = wc_get_product_terms( $product->id, $attribute['name'], array( 'fields' => 'names' ) );
          echo apply_filters( 'woocommerce_attribute', wpautop( wptexturize( implode( ', ', $values ) ) ), $attribute, $values );

        } else {

          // Convert pipes to commas and display values
          $values = array_map( 'trim', explode( WC_DELIMITER, $attribute['value'] ) );
          echo apply_filters( 'woocommerce_attribute', wpautop( wptexturize( implode( ', ', $values ) ) ), $attribute, $values );

        }
      ?></td>
    </tr>
  <?php endforeach; ?>
</table>
