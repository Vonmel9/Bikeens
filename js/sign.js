$("#connexion, #inscription, #sign, #close, #inscription2, #reserver").on("click", function(event)
{
  var ele = event.target.id;


  if (ele == "sign" || ele == "connexion" || ele == "inscription" || ele == "close" || ele == "inscription2" || ele == "reserver")
  {
    if(ele == "connexion" || ele == "reserver")
    {
      modalSignIn();
    }

    if(ele == "inscription" || ele == "inscription2")
    {
      modalSignUp();
    }

    toogleSign();
  }
});

// Affiche ou cache le modal de connexion
function toogleSign()
{
  if($("#sign").css("display") == "none")
  {
    $("#sign").removeClass("hide-ele");
    $("#sign").addClass("show-ele");
  }
  else {
          $("#sign").removeClass("show-ele");
          $("#sign").addClass("hide-ele");
       }
}


$("#sign").on("click", "#subcribe", function(event)
{
  modalSignUp();
});

$("#sign").on("click", "#logon", function(event)
{
  modalSignIn();
});

function modalSignIn()
{
  $("#sign .window").html(
    '<div class="close-sign">'+
      '<button id="close"><span class="fa fa-times fa-2x"></span></button>'+
    '</div>'+
    '<div id="sign-in">'+
    '<form id="signin-form" action="php/signin.php" method="post">'+
      '<div class="login">'+
        '<input type="text" name="pseudo" value="" placeholder=" Votre pseudo">'+
        '<input type="password" name="password" value="" placeholder=" Votre mot de passe">'+
      '</div>'+
      '<div class="option-sign">'+
        '<div class="text-left">'+
          '<label><input type="checkbox" name="remember" value="remember">Se souvenir de moi</label>'+
        '</div>'+
        '<div class="text-right">'+
          '<a href="#">Mot de pass oublié ?</a>'+
        '</div>'+
      '</div>'+
      '<button id="submit" type="submit" autocomplete="off">Se connecter</button>'+
    '</form>'+
  '</div>'+
  '<div class="form-error">'+
    'Problème d\'authentification'+
  '</div>'+
  '<hr>'+
  '<div id="sign-up-info">'+
    '<div class="text-left">'+
      '<p>Vous n`\'avez pas de compte?</p>'+
    '</div>'+
    '<div class="text-right">'+
      '<button id="subcribe" type="button" name="button">Inscription</button>'+
    '</div>'+
  '</div>'
  );
}

function modalSignUp()
{
  $("#sign .window").html(
    '<div class="close-sign">'+
      '<button id="close"><span class="fa fa-times fa-2x"></span></button>'+
    '</div>'+
    '<div id="sign-up">'+
      '<form id="signup-form" action="php/signup.php" method="post">'+
          '<input type="text" id="pseudo" name="pseudo" value="" placeholder=" Votre pseudo">'+
          '<p class="pseudo-error">'+
            'Le pseudo ne correspond pas aux critères.'+
            '<br> Entre 2 et 16 lettres.'+
          '</p>'+
          '<input type="text" id="name" name="name" value="" placeholder=" Votre nom">'+
          '<p class="name-error">'+
            'Le nom ne correspond pas aux critères.'+
            '<br> Entre 2 et 40 lettres.'+
          '</p>'+
          '<input type="text" id="firstname" name="firstname" value="" placeholder=" Votre prénom">'+
          '<p class="firstname-error">'+
            'Le prénom ne correspond pas aux critères.'+
            '<br> Entre 2 et 40 lettres.'+
          '</p>'+
          '<input type="text" id="email" name="email" value="" placeholder=" Votre adresse email">'+
          '<p class="email-error">'+
            'L\'adresse email n\'est pas au bon format.'+
          '</p>'+
          '<input type="password" id="password" name="password" value="" placeholder=" Votre mot de passe">'+
          '<p class="password-error">'+
          'Le mot de passe ne correspond pas aux critères.'+
          '<br>8 caractères avec au minimum 1 lettre et 1 chiffre.'+
          '</p>'+
          '<input type="password" id="password2" name="password2" value="" placeholder=" Confirmer votre mot de passe">'+
          '<p class="password2-error">'+
          'Les 2 mot de passes ne sont pas identiques.'+
          '</p>'+
          '<button id="submit" type="submit" autocomplete="off">S\'inscrire</button>'+
      '</form>'+
    '</div>'+
    '<div class="form-error">'+
      'Formulaire incomplet'+
    '</div>'+
    '<div class="sign-error">'+
      'Problème lors de la création du compte'+
    '</div>'+
    '<hr>'+
    '<div id="sign-in-info">'+
      '<div class="text-left">'+
        '<p>Déjà un compte?</p>'+
      '</div>'+
      '<div class="text-right">'+
        '<button id="logon" type="button" name="button">Connexion</button>'+
      '</div>'+
    '</div>'
  );

  addListenerForm();
}


// Return if a pseudo is valid
function isValidPseudo(pseudo)
{
  if(/^[a-zA-Z- ]{2,16}$/i.test(pseudo) && (pseudo.length >= 2) && (pseudo.length <= 16))
  {
  	return true;
  }

  return false
}

// Return if a name is valid
function isValidName(name)
{
  if(/^[a-zA-Z- ]{2,40}$/i.test(name) && (name.length >= 2) && (name.length <= 40))
  {
  	return true;
  }

  return false
}

// Return if a firstname is valid
function isValidFirstname(name)
{
  if(/^[a-zA-Z- ]{2,40}$/i.test(name) && (name.length >= 2) && (name.length <= 40))
  {
  	return true;
  }

  return false
}

// Return if a mail adress is valid
function isValidEmail(email)
{
  if(/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-zA-Z]{2,4}$/.test(email) && (email.length >= 6) && (email.length <= 60))
  {
    return true;
  }

  return false
}

// Return if a password is valid
function isValidPassword(password)
{
  if(/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/.test(password) && (password.length >= 8) && (password.length <= 30))
  {
    return true;
  }

  return false
}

// Return if a password2 is equal to password
function isValidPassword2(password, password2)
{
  if(password === password2)
  {
    return true;
  }

  return false;
}

// Array to know if possible to subscribe
var valids = {
  pseudo: false,
  name: false,
  firstname: false,
  email: false,
  password: false,
  password2: false
};

function resetValids()
{
  for (var id in valids)
  {
    valids[id] = false;
  }
}

function addListenerForm()
{
  // Add blur on input
  $("#signup-form input").each(function()
  {
    addBlurListener("sign", this.id);
  });
}

var password = "";

function addBlurListener(contact_bloc, field)
{
  $("#"+contact_bloc).on("blur", "#"+field, function()
  {
    var val = $("#"+field).val();
    var func_name = "isValid"+field.charAt(0).toUpperCase()+field.slice(1);

    var func_params = [val];

    if (func_name === "isValidPassword")
    {
      password = val;
    }

    if (func_name === "isValidPassword2")
    {
      func_params = [password, val];
    }

    var func = window[func_name];
    // alert(func_name+" ! "+func);

    if (typeof func === "function")
    {

      if (!func.apply(null, func_params))
      {
        // Add error message
        $("."+field+"-error").addClass("error");

        // Non valid
        valids[field] = false;
      }
      else
          {
            // Remove error message
            $("."+field+"-error").removeClass("error");

            // Valid
            valids[field] = true;
          }

      isValidForm();

    }

  });
}

// Enable submit if the form is valid
$("#sign #sign-up").on("click", '#submit', function()
{
  return isValidForm();
});

// Return true if the form is valid, false else
function isValidForm()
{
  var error = false;

  for (var id in valids)
  {
    if(!valids[id])
    {
      error = true;
      break;
    }
  }

  if(error)
  {
    $(".form-error").addClass("error");
  }
  else $(".form-error").removeClass("error");

  return !error;
}

$('#sign').on('submit', '#sign-up', function(e)
{
  e.preventDefault();
  // To prevent spam button
  resetValids();
  var $form = $('#signup-form');
  $.post($form.attr("action"), $form.serialize())
  .done(function(data)
  {
    alert(data);
    if(data.search('Erreur') == -1)
    {
      $("#sign .sign-error").removeClass("error");
      document.location.reload();
    }
    else {
          $("#sign .sign-error").addClass("error");
         }
  })
  .fail(function()
  {
    $("#sign .sign-error").addClass("error");
  });
});

$('#sign').on('submit', '#sign-in', function(e)
{
  e.preventDefault();
  // To prevent spam button
  resetValids();
  var $form = $('#signin-form');
  $.post($form.attr("action"), $form.serialize())
  .done(function(data)
  {
    if(data.search('Erreur') == -1)
    {
      $("#sign .sign-error").removeClass("error");
      document.location.reload();
    }
    else {
          $("#sign .sign-error").addClass("error");
         }
  })
  .fail(function()
  {
    alert("Fail");
  });
});
