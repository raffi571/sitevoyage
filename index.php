<?php


// connection
    function get_connect(){

        $host = "localhost";
        $db_name = "voyage";
        $username = "root";
        $password = "";

        try{
            $_connexion = new PDO('mysql:host='.$host .';dbname='.$db_name,$username,$password);
            $_connexion->exec('set names utf8');
            return $_connexion;
        }catch (PDOException $exception){
            echo "error" . $exception -> getMessage();
        }
    }


//SQL

    function get_all_villes($nom_pays){
        $connexion = get_connect();
        $sql0 = "SELECT id_pays FROM pays WHERE nom = " . $nom_pays;
        $id_pays = $connexion->prepare($sql0);
        $id_pays->execute();
    }


?>





<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Jetlagvoyage</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel = "stylesheet" href = "css/utility.css">
        <link rel = "stylesheet" href = "css/style.css">
        <link rel = "stylesheet" href = "css/responsive.css">
    </head>
    <body>
        <nav class = "navbar">
            <div class = "container flex">
                <a href = "index.php" class = "site-brand">
                    Jet<span>Lag</span>
                </a>

                <button type = "button" id = "navbar-show-btn" class = "flex">
                    <i class = "fas fa-bars"></i>
                </button>
                <div id = "navbar-collapse">
                    <button type = "button" id = "navbar-close-btn" class = "flex">
                        <i class = "fas fa-times"></i>
                    </button>
                    <ul class = "navbar-nav">
                        <li class = "nav-item">
                            <a href = "index.php" class = "nav-link">Accueil</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "gallery.php" class = "nav-link">Galerie Photo</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "contact.php" class = "nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- header -->
        <header class = "flex">
            <div class = "container">
                <div class = "header-title">
                    <h1>Voyage Pour Vivre</h1>
                    <p>Loin de tout, faire le vide, s'évader, rêver un peu.</p>

                </div>
                <div class = "header-form">
                    <h2>Choisissez votre lieu de voyage:</h2>
                    <form class = "flex">
                        <input type = "text" class = "form-control" placeholder="Nom de la destination">
                        <input type="date" class = "form-control" placeholder="Date">
                        <input type="number" class = "form-control" placeholder="Prix (€)">
                        <input type="submit" class = "btn" value = "Recherche">
                    </form>
                </div>
            </div>
        </header>
        <!-- header -->

        <!-- featured section -->
        <section id = "featured" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">Connaitre certain endroit à découvrir</span>
                    <h2 class = "lg-title">Lieux En Vedettes</h2>
                </div>

                <div class = "featured-row">
                    <div class = "featured-item my-2 shadow">
                        <img src = "./images/gallery-1.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Reo De Janeiro, Brazil
                            </span>
                            <div>
                                <p class = "text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "./images/gallery-2.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                North Bondi, Australia
                            </span>
                            <div>
                                <p class = "text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "./images/gallery-3.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Berlin, Germany
                            </span>
                            <div>
                                <p class = "text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "./images/gallery-4.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Khwaeng wat arun, thailand
                            </span>
                            <div>
                                <p class = "text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "./images/gallery-5.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Rome, Italy
                            </span>
                            <div>
                                <p class = "text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "./images/gallery-6.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                fuvahmulah, maldives
                            </span>
                            <div>
                                <p class = "text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta sed dignissimos libero soluta illum, harum amet excepturi sit?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of featured section -->

        <!-- video section -->
        <section id = "video">
            <div class = "video-wrapper flex">
                <video loop>
                    <source src = "videos/video-section.mp4" type = "video/mp4">
                </video>
                <button type = "button" id = "play-btn">
                    <i class = "fa fa-play"></i>
                </button>
            </div>
        </section>
        <!-- end of video section -->

        <!-- footer -->
        <footer>
            <div style="background-color: gray; display:flex; position: relative; justify-content: center;">
                <div class = "footer-item">
                    <a href = "index.php" class = "site-brand">
                        Cert<span>ifié</span>
                    </a>
                    <p class = "text">Par Zeyu Hou,Raffi Gitikyan,Axel Dalmazir,Cassandra Guyot</p>
                </div>

                <div class = "footer-item" style="padding: 50px; margin-top:50px;position: relative;top: -65px;">
                    <h2>Suivez nous sur: </h2>
                    <ul class = "social-links">
                        <li>
                            <a href = "https://www.facebook.com/">
                                <i class = "fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "https://www.instagram.com/">
                                <i class = "fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "https://www.twitter.com/">
                                <i class = "fab fa-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "footer-item" style="top:50px;position: relative;top: -14px;padding: 0;">
                    <h2>Endroits Populaires:</h2>
                    <ul>
                        <li><a href = "https://www.france.fr/">France</a></li>
                        <li><a href = "https://www.comptoirdesvoyages.fr/">Australie</a></li>
                        <li><a href = "https://www.opodo.fr/">Chine</a></li>
                        <li><a href = "https://www.comptoirdesvoyages.fr/voyage-pays/suede/">Suède</a></li>
                        <li><a href = "https://www.marcovasco.fr/amerique-du-nord/canada/">Canada</a></li>
                    </ul>
                </div>

            </div>
        </footer>

        <!-- js -->
        <script src = "js/script.js"></script>
        <script>
            // play/pause video
            let video = document.querySelector('.video-wrapper video');
            document.getElementById('play-btn').addEventListener('click', () => {
                if(video.paused){
                    video.play();
                } else {
                    video.pause();
                }
            });
        </script>
    </body>
</html>