<?php

function postPage() : void
{
    // remplacez ce code pour récupérer l'id du post passé en paramètres
    $postId = $_GET["post"];

    require "managers/post_manager.php";
    
    // remplacez ce code pour appeler la fonction qui permet de récupérer les infos d'un post
    $post = getPost($postId);


    $template = "templates/post.phtml";
    require "templates/layout.phtml";
}

?>