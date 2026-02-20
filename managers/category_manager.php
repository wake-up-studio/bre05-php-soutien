<?php

function getCategory(int $categoryId) : array
{
    
    require __DIR__ . "/../connexion.php";
    // remplissez cette fonction pour qu'elle puisse récupérer toutes les infos d'une catégorie
    
    $query = $db -> prepare("
        SELECT * FROM categories
        WHERE categories.id = :id
    ");
    
    $parameters = [
        'id' => $categoryId
    ];
    
    $query -> execute($parameters);
    
    $category = $query -> fetch(PDO::FETCH_ASSOC);
    
    return $category;
}

function getCategories() : array
{
    require __DIR__ . "/../connexion.php";
    // remplissez cette fonction pour qu'elle puisse récupérer toutes les infos de toutes les catégories

    $query = $db -> prepare("
        SELECT * FROM categories
    ");
    
    $query -> execute();
    
    $categories = $query -> fetchAll(PDO::FETCH_ASSOC);
    
    return $categories;
}

function getPostsForCategory(int $categoryId) : array
{
    require __DIR__ . "/../connexion.php";
    // remplissez cette fonction pour qu'elle puisse récupérer tous les articles d'une catégorie ainsi que les infos de leur image
    
    $query = $db -> prepare("
        SELECT posts.* , medias.url, medias.alt
        FROM posts
        Join categories
        ON posts.category = categories.id
        JOIN medias
        ON posts.image = medias.id
        WHERE categories.id = :id
    ");
    
    $parameters = [
        'id' => $categoryId
    ];
    
    $query -> execute($parameters);
    
    $posts = $query -> fetchAll(PDO::FETCH_ASSOC);

    return $posts;
}

?>