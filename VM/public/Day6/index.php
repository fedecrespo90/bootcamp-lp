<?php
  require_once 'vendor/autoload.php';

  use Symfony\Component\Yaml\Parser;
  $loader = new Twig_Loader_Filesystem('views');

  $twig = new Twig_Environment($loader, array(
      'cache' => 'views/',
  ));

  $yaml = new Parser();

  # ENTRADA
  try {
      $value = $yaml->parse(file_get_contents('books.yml'));
  } catch (ParseException $e) {
      printf("Unable to parse the YAML string: %s", $e->getMessage());
  }

  # PROCESO (Leer books.yml)
  $title = [];
  $author =  [];
  $main_characters =  [];
  $j = 0; //Indice
  foreach ($value as $key => $val)
  {
      foreach ($val as $t)
      {
        $title[$j] = $t["title"];
        $author[$j] = $t["author"];
        for ($i=0; $i < count($t["main_characters"]); $i++)
        {
          $main_characters[$j][$i] = $t["main_characters"][$i];
        }
        $j++;
    }
  }

  # SALIDA
  $k = 0; //Otro indice
  foreach ($value as $key => $val)
  {
      foreach ($val as $t)
      {
      echo $twig->render('index.html',array('title' => $title[$k], 'author' => $author[$k],'main_characters' => $main_characters[$k]));
      $k++;
      }

  }
