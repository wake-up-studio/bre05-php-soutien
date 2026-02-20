<?php

function homePage() : void
{
    
    require "managers/category_manager.php";
    $categories = getCategories();
    
    for($i=0; $i < count($categories); $i++){
        $categories[$i]["posts"] = getPostsForCategory($categories[$i]["id"]);
    };
    
    // require "managers/post_manager.php";
    // // remplacez ce code pour appeler la fonction qui permet de récupérer tous les articles de la base de données
    
    // $posts = null;

    $template = "templates/home.phtml";
    require "templates/layout.phtml";
}

?>