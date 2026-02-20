<?php

    if(isset($_GET["route"]) && $_GET["route"]==="category" && isset($_GET["category"])){
        require "controllers/category.php"; //Require first pour récupérer la fonction
        categoryPage(); //Comme on l'a récupéré, on peut l'appeler
    }
    else if(isset($_GET["route"]) && $_GET["route"]==="post" && isset($_GET["post"])){
        require "controllers/post.php";
        postPage();
    }
    else{
        require "controllers/home.php";
        homePage();
    }
?>