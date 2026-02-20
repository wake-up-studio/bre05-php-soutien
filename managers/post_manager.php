<?php

function getPost(int $postId) : array
{
    require __DIR__ . "/../connexion.php";
    // remplissez cette fonction avec une requete qui permet de récupérer toutes les infos d'un post

    $query = $db -> prepare("
        SELECT * FROM posts
        WHERE posts.id = :id
    ");
    
    $parameters = [
        "id" => $postId
    ];
    
    $query -> execute($parameters);
    
    $post = $query -> fetch(PDO::FETCH_ASSOC);
    
    return $post;
}

?>