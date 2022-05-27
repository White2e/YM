<?php
require_once 'yml.php';
var $offerdata = [];

$yml_c = new yml('UTF-8');

$yml_c->add_currency('RUR', '1', 0);
$yml_c->add_currency('USD', '77', 0);
$yml_c->add_currency('EUR', '88', 0);

$yml_c->add_category('Игрушки', 1, -1);
$yml_c->add_category('Куклы', 101, 1);

$offerdata[] = 'https://ru.123rf.com/photo_60275032', '50.01', 'RUR', '101', '', '';

echo $yml_c->get_xml_header();
echo 'test works';