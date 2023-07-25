<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Resto</title>
<body>
<header>
    <a href="#" class="logo"><span>R</span>estoIH</a>
    <div class="menuToggle" onclick="toggleMenu();"></div>
    <ul class="navbar">
        <li><a href="#banniere" onclick="toggleMenu();">Accueil</a></li>
        <li><a href="#apropos" onclick="toggleMenu();">A propos</a></li>
        <li><a href="#menu" onclick="toggleMenu();">Menu</a></li>
        <li><a href="#expert" onclick="toggleMenu();">Expert</a></li>
        <li><a href="#temoignage" onclick="toggleMenu();">Temoignage</a></li>
        <li><a href="#contact" onclick="toggleMenu();">Contact</a></li>
        <a href="/shopping" class="btn-reserve"onclick="toggleMenu();">Reservation</a>
    </ul>
</header>
<section class="banniere" id="banniere">
    <div class="contenu">
        <h2>Que Des Plats Délicieux</h2>
        <p>Nous vous proposons de meilleurs delices pour vos répas ou nourriture faite nous appel et vous etes servi. Satisfait ou rembourssé.</p>
        <a href="#" class="btn1">Notre Menu</a>
        <a href="/shopping" class="btn2">Reservation</a>
    </div>
</section>
<section class="apropos" id="apropos">
    <div class="row">
        <div class="col50">
            <h2 class="titre-texte"><span>A</span> Propos De Nous</h2>
            <p>Nous sommes dans la vente de nourriture depuis près de trois(3) ans. Nous sommes situé à Abidjan Cocody. Nous faisons plusieurs menus
                Pour vous faire livrer à domicile, au bureau. Faite nous savoir et votre restauration est assurée. Notre vocation <span class="titre-texte1">Votre restauration est notre priorité.</span>
            </p>
        </div>
        <div class="col50">
            <div class="img">
                <img src="./images/plat3.jpg" alt="image">
            </div>
        </div>
    </div>
</section>
<section class="menu" id="menu">
    <div class="titre">
        <h2 class="titre-texte"><span>M</span>enu</h2>
        <p>Voici quelques apercu de ce que nous vous proposons comme restauration.</p>
    </div>

    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="./images/c1.jpg" alt="">
                <style>
                    .box{
    -webkit-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
.box:hover{
    -webkit-transform: scale(1.2);
        -ms-transform: scale(1.2);
            transform: scale(1.2);
}
                    </style>
            </div>
            <div class="text">
                <h3>Special salade</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/c2.jpg" alt="">
            </div>
            <div class="text">
                <h3>Special Pasteque</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/c3.jpg" alt="">
            </div>
            <div class="text">
                <h3>Special Riz sauté</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/c4.jpg" alt="">
            </div>
            <div class="text">
                <h3>Special Attiéké</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/c5.jpg" alt="">
            </div>
            <div class="text">
                <h3>Special Cruidité</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/c6.jpg" alt="">
            </div>
            <div class="text">
                <h3>Special salade</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/c7.jpg" alt="">
            </div>
            <div class="text">
                <h3>Special sauce feuille</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/c8.jpg" alt="">
            </div>
            <div class="text">
                <h3>Special Poisson braisé</h3>
            </div>
        </div>
    </div>
 </div>
 <div class="titre">
    <a href="#" class="btn1">Voir Plus</a>
 </div>
</section>
<section class="expert" id="expert">
    <div class="titre">
        <h2 class="titre-texte">Nos <span>E</span>xperts</h2>
        <p>Pour votre restauration, nous avons le meilleur des experts en la matière. </p>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="./images/equipe8.jpg" alt="">
            </div>
            <div class="text">
                <h3>Franck Kevin</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/equipe7.jpg" alt="">
            </div>
            <div class="text">
                <h3>Venceslas</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/equipe3.jpg" alt="">
            </div>
            <div class="text">
                <h3>Junior Elvis</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/equipe4.jpg" alt="">
            </div>
            <div class="text">
                <h3>Michel majordom</h3>
            </div>
        </div>
    </div>
 </div>
</section>
 <section class="temoignage" id="temoignage">
    <div class="titre blanc">
        <h2 class="titre-texte">Que Disent Nos <span>C</span>lients</h2>
        <p>Quelques avis de certaines personnes sur la qualité de nos service. </p>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="./images/t1.jpeg" alt="">
            </div>
            <div class="text">
                <p>Super! Je donne cinq étoiles pour ce restaurant, les repas sont vraiment bien fait.</p>
                <h3>Fabrice Yao</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/t2.jpg" alt="">
            </div>
            <div class="text">
                <p>Le meilleur en matière de nourriture se trouve chez RestoIH; Exceptionnel.</p>
                <h3>Clovis Ange</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/t3.jpg" alt="">
            </div>
            <div class="text">
                <p>Je recommande fortement ce restaurant. Super.</p>
                <h3>Eric Michel</h3>
            </div>
        </div>
    </div>
 </section>
 <section class="contact" id="contact">
     <div class="titre noir">
         <h2 class="titre-text"><span>C</span>ontact</h2>
         <p>Pour toute réservation ou suggetion veillez nous laisser un message.</p>
     </div>
     <div class="contactform">
        <div class="inputboite">
         <h3>Envoyer un message</h3>
        </div>
        <!--form method="post" action="action.php">
            <ul>
                
                    <div class="inputboite">
                    <imput for="name"></label>
                    <input type="text" id="name" name="user_name" autocomplete="off" placeholder="Nom">
                    </div>
                    <div class="inputboite">
                    <label for="name"></label>
                    <input type="text" id="mail" name="user_email" autocomplete="off" placeholder="E-mail">
                    </div>
                    <div class="inputboite">
                    <label for="name"></label>
                    <input type="text" id="msg" name="user_message" autocomplete="off" placeholder="message">
                    </div>
                <button type="submit" name="valider">Envoyer</button>
            </ul>
        </form-->
        <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                    }       </div>
             
                            
                    //<?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email trop long
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> pseudo trop long
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>
            
            <form action="inscription_traitement.php" method="post">
                <h2 class="form-box register">Inscription</h2>       
                <div class="input-box">
                <span class="icon">
                <i class="fa fa-user"></i>
                </span>
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                </div>
                <div class="input-box">
                <span class="icon">
                <i class="fa fa-envelope"></i>
                </span>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="input-box">
                <span class="icon">
                <i class="fa fa-lock"></i>
                </span>
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="input-box">
                <span class="icon">
                <i class="fa fa-lock"></i>
                </span>
                    <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                </div>
                <div class="input-box">
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                </div>   
            </form>
        </div>
        <style>
            .input-box{
    position: relative;
    width: 100%;
    height: 50px;
    border-bottom:2px solid #162938;
    margin: 30px 0;
}
.input-box label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform:translateY(-50%);
    font-size: 1em;
    color: #162938;
    font-weight: 500;
    pointer-events: none;
    transition: .5s;
}
.input-box input:focus~label,
.input-box input:valid~label{
    top: -5px;
}
.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none ;
    font-size: 1em;
    color: #162938;
    font-weight: 600;
    padding: 0 35px 0 5px;
}
.input-box .icon{
    position: absolute;
    right: 8px;
    font-size: 1.2em;
    color: #162938;
    line-height:57px;
}
.remember-forgot{
    font-size: .9em;
    color: #162938;
    font-weight: 500;
    margin: -15px 0 15px;
    display: flex;
    justify-content: space-between;
}
.remember-forgot label input{
    accent-color: #162938;
    margin-right: 3px;
}
.remember-forgot a{
    color: #162938;
    text-decoration: none;
}
.remember-forgot a:hover{
    text-decoration: underline;
}
.btn{
    width: 100%;
    height: 45px;
    background: #162938;
    border: none;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1em;
    color: #fff;
    font-weight: 500;
}
.login-register{
    font-size: .9em;
    color: #162938;
    text-align: center;
    font-weight: 500;
    margin: 25px ;
}
.login-register p a{ 
    color: #162938;
    text-decoration: none;
    font-weight: 600;
}
.login-register p a:hover{ 
    text-decoration: underline;
}

            /*.login-form {
                width: 340px;
                margin: 50px auto;
            }
            .login-form form {
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }*/
            </style>
        <form method="post" action="http://informatiquehacking.great-site.net/">

         <div class="inputboite">
            <label for="name"></label>
             <input type="text" name="user_name" autocomplete="off"  placeholder="Nom">
         </div>
         <div class="inputboite">
            <label for="name"></label>
            <input type="text" name="user_email" autocomplete="off" placeholder="E-mail">
         </div>
         <div class="inputboite">
            <label for="message"></label>
            <textarea placeholder="message"></textarea>
         </div>
         <div class="inputboite">
             
             <input type="submit" value="envoyer http://informatiquehacking.great-site.net/?i=1">
         </div>
     </div>
    </form>*/
 </section>
 <div class="copyright">
     <p>copyright 2023 ©<a href="http://informatiquehacking.great-site.net/?i=1">Yao Venceslas Armel </a> Tous droits reservé.</p>
 </div>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.9687108612666!2d-5.0611369256084195!3d7.686506692330656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc7ff5f14a65ac9%3A0x3abafa9821538358!2sRestaurant-Bar-Glacier%20%3A%20%22LA%20SAVEUR%22!5e0!3m2!1sfr!2sci!4v1689870792013!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>
 <script type="text/javascript">
     window.addEventListener('scroll', function(){
         const header =document.querySelector('header');
         header.classList.toggle("sticky", window.scrollY > 0 );
     });

     function toggleMenu(){
         const tmenuToggle = document.querySelector('.menuToggle');
         const navbar = document.querySelector('.navbar');
         navbar.classList.toggle('active');
         menuToggle.classList.toggle('active');
     }
 </script>
</body>
</html>