<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Bikeens</title>

  <link rel="stylesheet" href="css/reset.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="css/styles.css" media="screen" title="no title" charset="utf-8">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>

  <header>
    <div class="container">
      <nav id="menu">
        <img id="logo" src="" alt="logo" />
        <ul>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li><button id="connexion" class="btn btn-primary">Connexion</button></li>
        </ul>
      </nav>
    </div>

    <section id="slide">
      <div class="container">
        <h1></h1>
        <p>

        </p>
      </div>
    </section>

    <section id="search">
      <div class="container">

        <form class="" action="index.html" method="post">
          <input type="text" name="name" value="" placeholder="Où voulez-vous louer?">
          <select class="debut" name="">
            <option value="Début" selected>Début</option>
          </select>
          <select class="fin" name="">
            <option value="Fin" selected>Fin</option>
          </select>
          <button type="submit" name="button">Rechercher</button>
        </form>

      </div>
    </section>

    </div>
  </header>

  <section id="resumBikes">
    <div class="container">
      <p>

      </p>
      <h2></h2>

      <article>
        <img class="bike" src="" alt="" />
        <div class="infos">

        </div>
      </article>

      <article>
        <img class="bike" src="" alt="" />
        <div class="infos">

        </div>
      </article>

      <article>
        <img class="bike" src="" alt="" />
        <div class="infos">

        </div>
      </article>

      <article>
        <img class="bike" src="" alt="" />
        <div class="infos">

        </div>
      </article>

      <article>
        <img class="bike" src="" alt="" />
        <div class="infos">

        </div>
      </article>

      <article>
        <img class="bike" src="" alt="" />
        <div class="infos">

        </div>
      </article>
      <button type="button" name="button">Voir d'autres vélos à proximité</button>

    </div>
  </section>

  <section id="principe">
    <div class="container">
      <h2></h2>
      <p>

      </p>

      <article class="icones">
        <img src="" alt="" />
        <p>

        </p>
      </article>

      <article class="icones">
        <img src="" alt="" />
        <p>

        </p>
      </article>

      <article class="icones">
        <img src="" alt="" />
        <p>

        </p>
      </article>

      <article class="icones">
        <img src="" alt="" />
        <p>

        </p>
      </article>

      <button type="button" name="button">S'inscrire</button>
    </div>
  </section>

  <section id="blog">
    <div class="container">

      <article>
        <div class="left">
          <img src="" alt="" />
        </div>

        <div class="right">

        </div>
      </article>

      <article>
        <div class="left">
          <img src="" alt="" />
        </div>

        <div class="right">

        </div>
      </article>

      <article>
        <div class="left">
          <img src="" alt="" />
        </div>

        <div class="right">

        </div>
      </article>

      <article>
        <div class="left">
          <img src="" alt="" />
        </div>

        <div class="right">

        </div>
      </article>

      <button type="button" name="button">Accéder aux articles précédents</button>

    </div>
  </section>

  <section id="feedback">
    <div class="container">

      <article class="avis">
        <img src="" alt="" />
        <p>

        </p>
      </article>

      <article class="avis">
        <img src="" alt="" />
        <p>

        </p>
      </article>

      <article class="avis">
        <img src="" alt="" />
        <p>

        </p>
      </article>

      <article class="avis">
        <img src="" alt="" />
        <p>

        </p>
      </article>

      <article class="avis">
        <img src="" alt="" />
        <p>

        </p>
      </article>

      <article class="avis">
        <img src="" alt="" />
        <p>

        </p>
      </article>

      <button type="button" name="button">Rejoindre la communauté</button>

    </div>
  </section>

  <footer>
    <div class="container">

      <article class="plan">
        <h6></h6>
        <ul>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </article>

      <article class="plan">
        <h6></h6>
        <ul>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </article>

      <article class="plan">
        <h6></h6>
        <ul>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </article>

      <article class="plan">
        <h6></h6>
        <ul>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </article>

    </div>
  </footer>

  <div id="sign" class="hide-ele">
    <div class="window">
      <div class="close-sign">
        <button id="close"><span class="fa fa-times fa-2x"></span></button>
      </div>
      <div id="sign-in">
        <form id="signin-form" action="php/signin.php" method="post">
          <div class="login">
            <input type="text" name="pseudo" value="" placeholder=" Votre pseudo">
            <input type="password" name="password" value="" placeholder=" Votre mot de passe">
          </div>
          <div class="option-sign">
            <div class="text-left">
              <label><input type="checkbox" name="remember" value="remember">Se souvenir de moi</label>
            </div>
            <div class="text-right">
              <a href="#">Mot de passe oublié ?</a>
            </div>
          </div>
          <button id="submit" type="submit" autocomplete="off">Se connecter</button>
        </form>
      </div>
      <div class="sign-error">
        Problème d'authentification côté serveur
      </div>
      <hr>
      <div id="sign-up-info">
        <div class="text-left">
          <p>Vous n'avez pas de compte?</p>
        </div>
        <div class="text-right">
          <button id="subcribe" type="button" name="button">Inscription</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script src="js/function.js"></script>
  <script src="js/sign.js"></script>
  <script type="text/javascript">

  </script>
</body>
</html>
