<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="index.css">
  <title>mon zoo</title>
  <h1>Zozotigrou</h1>
</head>
<body>
    <?php
    $heure=date("16");
     if ($heure >= 8 && $heure < 12)
     {echo '<img src="zebre.jpg" alt="un zebre"/>';}
      
     if ($heure >= 12 && $heure < 16)
     {echo '<img src="panda.jpg" alt="un panda"/>';}
     
     if ($heure >= 16 && $heure < 20)
     {echo '<img src="girafe.jpg" alt="une girafe"/>';}
        
    
    ?>
 <div class="Group">
  <img src="zoo.jpg" alt="un zoo joyeux" class="Group">
   <ul>
   <li>Accueil</li>
   <li>Biozone Madagascar</li>
   <li>Biozone Amazonie-Guyane</li>
   <li>Biozone Europe</li>
   <li>Biozone Afrique</li>
   <li>Biozone Patagonie</li>
   </ul>
  </div>  
</body>
</html>