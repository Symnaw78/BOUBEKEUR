<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
  </head>
      <body>
          <div style="text-align: left">
              <h1>Mon espace client</h1>
              <hr width="19.8%" size="5%" align="left" color="black">  
              <?php
                 $user_login = $_GET['login'];
                 $user_pass = $_GET['pass'];
                 $utilisateurs = array('Lina@gmail.com', 'passeLina', 'Edgar@gmail.com', 'passeEdgar');
               if(in_array($user_login,$utilisateurs)){
                  }
                  if(in_array($user_pass ,$utilisateurs)){
               ?>
              <p>Connecté à <strong><?php echo $user_login?></strong></p>
              <p>Bienvenue sur votre espace client,
              <br>
                Pour des raisons de <strong>sécurité</strong>, veillez à modifier votre mot de passe tous les <strong>14 jours.</strong>
              </p>
              <?php 
              } else {
              ?>
              <p><span class="error">Erreur lors de la connexion:</span> <a href="formLogin.html">Cliquez</a> pour vous identifier à nouveau.
              <br>
                Si vous avez perdu vos identifiants, contactez le service clients.
              <br>
              <br>
              <label for="emails">Voici la liste des emails disponibles</label>
              <select name="emails" id="list">
              <option value="Lina@gmail.com">Lina@gmail.com</option>
              <option value="Edgar@gmail.com">Edgar@gmail.com</option>
             </select>
            <?php
                }
            ?>
        </div>
    </body>
</html>