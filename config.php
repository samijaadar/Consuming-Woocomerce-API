<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost/wordpress',
    'ck_bb04c0e94d64b155e28c417fee0e84ce18c0ee23',
    'cs_8eb3fedec17d45ca31d209dbd84deb5f8b7a77ad',
    [
        'wp_api' => true,
        'version' => 'wc/v3'
    ]
);
?>