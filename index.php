<?php
require_once 'yml.php';
$yml_c = new yml('UTF-8');
$yml_c->get_xml_header();

echo $yml_c->get_xml_header();
echo 'test works';