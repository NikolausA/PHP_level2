<?php
const PHOTO_PATH = 'small/';
const PHOTO_BIG_PATH = 'big/';

require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

$template = $twig->loadTemplate('photo.tmpl');
    
$photo = $_GET['photo'];
if (!file_exists(PHOTO_BIG_PATH . $photo)) throw new Exception ('There is not photo');
    
echo $template->render([
    'title' => 'Фотография ',
    'big_photo_path' => PHOTO_BIG_PATH,
    'photo' => $photo
]);
}
catch (Exseption $e) {
die('ERROR ' . $e->getMessage());
}
    
?>