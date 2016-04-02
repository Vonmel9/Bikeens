<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Bikeens</title>

  <link rel="stylesheet" href="css/reset.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="css/styles.css" media="screen" title="no title" charset="utf-8">

  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>

  <!-- header -->
  <header>
    <!-- container -->
    <div class="container">
      <!-- menu -->
      <nav id="menu">
        <div>
          <a href="index.php">
            <img id="logo" src="img/logo.png" alt="logo" />
          </a>
        </div>

      <div id="nav">
        <ul id="navigation">
          <li><a href="#">Comment ça marche?</a></li>
          <?php
            if(!isset($_SESSION['login']))
            {
          ?>
            <li><a id="inscription" href="#">Inscription</a></li>
            <li><a id="connexion" href="#">Connexion</a></li>
          <?php
            }
            else
                {
          ?>
                  <li>
                    <a href="#" class="account">
                      <div class="profil">
                        <img src="img/icones/user.png" alt="" />
                      </div>
                      <div class="profil">
                          <?php echo $_SESSION['login']; ?>
                      </div>
                    </a>
                  </li>
                  <li>
                    <form class="" action="index.php?logoff" method="post">
                      <input type="hidden" name="deco" value="now">
                      <button id="deconnecter" type="submit" name="logoff">Se déconnecter</button>
                    </form>
                  </li>
          <?php
                }
          ?>

          <li><button id="louer" type="submit" name="louer">Louer votre vélo</button></li>
        </ul>
      </div>
      </nav>
      <!-- fin menu -->
    </div>
    <!-- fin container -->
  </header>
  <!-- fin header -->

  <!-- main -->
  <div class="main">
    <!-- container -->
    <div class="container">
      <!-- photopdt -->
      <section id="photopdt">
        <article class="nomSurnom">
          <div class="bandeau">
            <p class="nomVelo">
              NOM VELO
            </p>
            <p class="surnomVelo">
              Mais appelez moi SURNOM
            </p>
          </div>
        </article>
      </section>
      <!-- fin photopdt -->
      <aside class="map">
        <!-- carte géolocalisation -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d186294.67893339007!2d2.8931006602162244!3d43.149587529371985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b1ab414900fb89%3A0x4078821166d23a0!2s11100+Narbonne!5e0!3m2!1sfr!2sfr!4v1459515118264"
          width="340" height="395" frameborder="0" style="border:0" allowfullscreen></iframe>
      </aside>
    </div>
    <!-- fin container -->

    <!-- proprio -->
    <section id="proprio">
      <article class="perso">
        <div class="imgProfil">
          <img src="img/photos/profil2.png" alt="" />
        </div>
        <div class="identity">
          <p class="prenomNom">
            Prénom Nom
          </p>
          <p class="timeAnswer">
            S'engage à répondre dans les Xh
          </p>
        </div>
      </article>

      <article class="stats">
        <p>
          50 avis
        </p>
        <div class="note">
          <img src="img/icones/etoiles.png" alt="" />
          <img src="img/icones/etoiles.png" alt="" />
          <img src="img/icones/etoiles.png" alt="" />
          <img src="img/icones/etoiles.png" alt="" />
          <img src="img/icones/etoiles.png" alt="" />
        </div>
      </article>

      <article class="stats">
        <p>
          50 locations
        </p>
      </article>

      <article class="stats">
        <p>
          X% taux de réponses
        </p>
      </article>
    </section>
    <!-- fin proprio -->

    <!-- biopdt -->
    <section id="biopdt">
      <h2>Pourquoi rouler avec moi?</h2>
      <!-- descriptif -->
      <article id="descriptif">
        <h2>Ma bio</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </article>
      <!-- fin descriptif -->

      <div class="titreAcc">
        <h2>Mes accessoires</h2>
      </div>

      <!-- accessoires -->
      <article id="accessoires">
        <ul class="listAcc">
          <li><img src="img/icones/cross_red.png" alt="" /> Casque</li>
          <li><img src="img/icones/check_green.png" alt="" /> Cadenas</li>
          <li><img src="img/icones/cross_red.png" alt="" /> Siège bébé</li>
        </ul>
        <ul class="listAcc">
          <li><img src="img/icones/cross_red.png" alt="" /> Sonnettes</li>
          <li><img src="img/icones/check_green.png" alt="" /> Phares</li>
          <li><img src="img/icones/cross_red.png" alt="" /> Panier</li>
        </ul>
        <ul class="listAcc">
          <li><img src="img/icones/cross_red.png" alt="" /> Porte-bagages</li>
          <li><img src="img/icones/check_green.png" alt="" /> Porte-vélos</li>
          <li><img src="img/icones/cross_red.png" alt="" /> Kit de secours</li>
        </ul>
      </article>
      <!-- fin accessoires -->

      <!-- descriptif -->
      <article id="dispo">
        <h2>Disponibilités</h2>
        <p>
          Je peux emmener le vélo jusqu'à X km de chez moi !
        </p>
      </article>
      <!-- fin descriptif -->
    </section>
    <!-- fin biopdt -->

    <!-- feedback -->
    <section id="feedback">
      <h2>La communauté Bikeens parle de moi</h2>

      <!-- avis -->
      <article class="avis">
        <div class="imgText">
          <div class="imgAvis">
            <img src="img/photos/profil2.png" alt="" />
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            <br> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            <br> dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          </p>
        </div>
        <div class="nomDate">
          <p>
            <strong class="saumon">Prénom N., 14/01/16</strong>
          </p>
          <div class="note">
            <img src="img/icones/etoiles.png" alt="" />
            <img src="img/icones/etoiles.png" alt="" />
            <img src="img/icones/etoiles.png" alt="" />
            <img src="img/icones/etoiles.png" alt="" />
            <img src="img/icones/etoiles.png" alt="" />
          </div>
        </div>
      </article>
      <!-- fin avis -->

      <!-- avis -->
      <article class="avis">
        <div class="imgText">
          <div class="imgAvis">
            <img src="img/photos/profil2.png" alt="" />
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            <br> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            <br> dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          </p>
        </div>
        <div class="nomDate">
          <p>
            <strong class="vert">Prénom N., 14/01/16</strong>
          </p>
          <div class="note">
            <img src="img/icones/etoiles.png" alt="" />
            <img src="img/icones/etoiles.png" alt="" />
            <img src="img/icones/etoiles.png" alt="" />
            <img src="img/icones/etoiles.png" alt="" />
            <img src="img/icones/etoiles.png" alt="" />
          </div>
        </div>
      </article>
      <!-- fin avis -->

      <!-- avis -->
      <article class="avis">
        <div class="imgText">
          <div class="imgAvis">
            <img src="img/photos/profil2.png" alt="" />
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            <br> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            <br> dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          </p>
        </div>
        <div class="nomDate">
          <p>
            <strong class="bleu">Prénom N., 14/01/16</strong>
          </p>
          <div class="note">
            <img src="img/icones/etoiles.png" alt="" />
            <img src="img/icones/etoiles.png" alt="" />
            <img src="img/icones/etoiles.png" alt="" />
            <img src="img/icones/etoiles.png" alt="" />
            <img src="img/icones/etoiles.png" alt="" />
          </div>
        </div>
      </article>
      <!-- fin avis -->
    </section>
    <!-- fin feedback -->

    <!-- resumBikes -->
    <section id="resumBikes">
      <!-- container -->
      <div class="container">
        <h2>Autres vélos à proximité</h2>

        <!-- produit -->
        <article class="produit">
          <img class="bike" src="" alt="" />
          <div class="infos">

          </div>
        </article>
        <!-- fin produit -->

        <!-- produit -->
        <article class="produit">
          <img class="bike" src="" alt="" />
          <div class="infos">

          </div>
        </article>
        <!-- fin produit -->

        <!-- produit -->
        <article class="produit">
          <img class="bike" src="" alt="" />
          <div class="infos">

          </div>
        </article>
        <!-- fin produit -->

        <!-- produit -->
        <article class="produit">
          <img class="bike" src="" alt="" />
          <div class="infos">

          </div>
        </article>
        <!-- fin produit -->
      </div>
      <!-- fin container -->
    </section>
    <!-- fin resumBikes -->
  </div>
  <!-- fin main -->

  <!-- footer -->
  <footer>
    <!-- container -->
    <div class="container">

      <!-- plan -->
      <article class="plan">
        <h6>Votre destination</h6>
        <ul>
          <li><a href="#">Montpellier</a></li>
          <li><a href="#">Toulouse</a></li>
          <li><a href="#">Nimes</a></li>
          <li><a href="#">Perpignan</a></li>
        </ul>
      </article>
      <!-- fin plan -->

      <!-- plan -->
      <article class="plan">
        <h6>Découvrir</h6>
        <ul>
          <li><a href="#">Nos valeurs</a></li>
          <li><a href="#">Fonctionnement</a></li>
          <li><a href="#">Assurance</a></li>
          <li><a href="#">Professionnels</a></li>
        </ul>
      </article>
      <!-- fin plan -->

      <!-- plan -->
      <article class="plan">
        <h6>Aide</h6>
        <ul>
          <li><a href="#">Aide au locataire</a></li>
          <li><a href="#">Aide au propriétaire</a></li>
          <li><a href="#">Contactez-nous</a></li>
        </ul>
      </article>
      <!-- fin plan -->

      <!-- plan -->
      <article class="plan">
        <h6>Nous suivre</h6>
        <ul class="rsxScx">
          <li><a href="https://www.facebook.com/bikeens/?fref=ts" target="_blank"><i class="fa fa-facebook fa-3x"></i></a></li>
          <li><a href="https://twitter.com/Bikeens" target="_blank"><i class="fa fa-twitter fa-3x"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram fa-3x"></i></a></li>
        </ul>
      </article>
      <!-- fin plan -->

    </div>
    <!-- fin container -->
  </footer>
  <!-- fin footer -->

</body>

</html>
