<h1>News</h1>

<?php

//pour afficher un array = foreach
foreach($news as $n){
    echo $n['titre'].'<br />';
    echo $n['contenu'].'<br />';
}


?>