<?php
const PHOTO_PATH = 'small/';
const PHOTO_BIG_PATH = 'big/';

require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

$template = $twig->loadTemplate('index.tmpl');
    
$arr_photo = array_slice(scandir(PHOTO_BIG_PATH), 2);
    
echo $template->render([
    'title' => 'Фото альбом',
    'small_photo_path' => PHOTO_PATH,
    'photos' => $arr_photo
]);
}
catch (Exseption $e) {
die('ERROR ' . $e->getMessage());
}
?>