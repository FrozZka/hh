<?php

/*
 * Plugin Name: Плагин для hh.ru
 */

?>

<?php 

use NamePlugin\NameApi;

$res = new NameApi();

$res->list_vacansies(3);

?>