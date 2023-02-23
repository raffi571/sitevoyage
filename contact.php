<?php
    require_once 'function.php';
    processForm();
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
        

        
        <header class = "flex header-sm">
            <div class = "container">
                <div class = "header-title">
                    <h1>Contact</h1>
                    <p></p>
                </div>
            </div>
        </header>
        

        
        <section id = "contact" class = "py-4">
            <div class = "container">
                

                <div class = "contact-row">
                <div class = "contact-left">
                    <?php
                        // var_dump(getErrors());
                        if(getErrors() !== null && count(getErrors()) > 0){
                            //parcourir les erreurs 
                            foreach(getErrors()as $value){
                                echo "<p>$value</p>";
                            }
                        }
                    ?>
                        <form class = "contact-form" method="POST">
                            <input type = "text" name="name" class = "form-control"  placeholder="Your name"
                              value="<?= getValues()['name'] ?? null; ?>">

                            <input type = "email" name="email" class = "form-control"  placeholder="Your email"
                            value="<?= getValues()['email'] ?? null; ?>">

                            <textarea rows = "4" name="message" class = "form-control"  placeholder="Your message" style = "resize: none;"><?= getValues()['message'] ?? null; ?></textarea>
                            <input type = "submit" name="submit" class = "btn" value = "Send message">
                        </form>
                    </div>
                    <div class = "contact-right my-2">
                        <div class = "contact-item">
                            <span class = "contact-icon flex">
                                <i class = "fa fa-phone-alt"></i>
                            </span>
                            <div>
                                <span>Phone</span>
                                <p class = "text">123</p>
                            </div>
                        </div>
                        <div class = "contact-item">
                            <span class = "contact-icon flex">
                                <i class = "fa fa-map-marked-alt"></i>
                            </span>
                            <div>
                                <span>Adresse</span>
                                <p class = "text">123</p>
                            </div>
                        </div>
                        <div class = "contact-item">
                            <span class = "contact-icon flex">
                                <i class = "fa fa-envelope"></i>
                            </span>
                            <div>
                                <span>Mail</span>
                                <p class = "text">info@abc</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        

        
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


        <script src = "js/script.js"></script>

    </body>
</html>