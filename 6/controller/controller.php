<?php

require_once ('model/model.php');

$books=getBooks();


require_once ('vendor/twig/twig/lib/Twig/Autoloader.php');
Twig_Autoloader::register();
$templateDir="view/";
$templateDirCompi="view/view-c";
$loader = new Twig_Loader_Filesystem($templateDir);
$twig = new Twig_Environment($loader);

$template = $twig->loadTemplate("view.html");
$template->display(array('books'=>$books));

?>