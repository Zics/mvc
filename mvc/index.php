<!-- Ce fichier ce lie à tous les autres fichiers = 
index.php va se lié à controleur et controleur à modeles et à vues-->

<?php

session_start();

// Connection à la BdD avec méthode PDO

$bdd = new PDO('mysql:host=localhost;dbname=test', 'xxxxxx', 'xxxxxxx');

//condition pour l'url. ex : index.php?page=forum

// si, il ne manque pas dans l'url =page et que le fichier est bien dans controleur, alors

if(!empty($_GET['page']) AND is_file('controleurs/'.$_GET['page'].'.php'))
{
    include('controleurs/'.$_GET['page'].'.php');
}
else
{
    include('controleurs/index.php');
}


?>