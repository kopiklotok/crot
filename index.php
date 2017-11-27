<?php
header('Content-Type: text/html; charset=utf-8');


require_once ('vendor/autoload.php');
use \Statickidz\GoogleTranslate;

$source = 'en';
$target = 'es';
$text = $_GET['q'];

$trans = new GoogleTranslate();
$result = $trans->translate($source, $target, $text);
echo $result.'<br/>';

$result = $trans->translate($source, 'de', $text);
echo $result.'<br/>';

$result = $trans->translate($source, 'it', $text);
echo $result.'<br/>';

$result = $trans->translate($source, 'id', $text);
echo $result.'<br/>';

$result = $trans->translate($source, 'ru', $text);
echo $result.'<br/>';

$result = $trans->translate($source, 'ja', $text);
echo $result.'<br/>';

?>
