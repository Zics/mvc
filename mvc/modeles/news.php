<!-- ici on créer des fonctions -->
<?php
function afficher_news() //pas de ; dans une fonction
{
    global $bdd; //connection obligatoire en PDO
    $news = array();
    
    $req = $bdd->query('SELECT * FROM news');
    
    //boucle assigne les données dans une variable news, qui sera appellé par le controlleurs
    while($data = $req->fetch()) 
    {
        $news[] = $data;
    }
    return $news; //renvoie la valeurs
    
}
