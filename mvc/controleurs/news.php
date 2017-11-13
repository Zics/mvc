<!-- controleurs va afficher modeles et vues dans la page controleurs
et la page controleurs et elles même affiché par index.php(celui de la racine)-->

<?php

// inclure (renvoie au chemin du dossier parent) = ça renvoie à controleur

include(dirname(__FILE__).'/../modeles/news.php');

//appeller la fonction news

$news = afficher_news();

include(dirname(__FILE__).'/../vues/news.php');


?>