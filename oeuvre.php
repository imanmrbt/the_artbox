<!doctype html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport"
  content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="css/style.css">
<title>The ArtBox</title>
</head>
<body>
<?php include('header.php');?>
<?php include('oeuvres.php');?>
<main>
    <article id="detail-oeuvre">
        <?php 
        switch ($_GET['id']) {

            case 1:
              echo '<div id="img-oeuvre">'.$oeuvres[0]['oeuvre'].'</div>
              <div id="contenu-oeuvre">
                 <h1>'.$oeuvres[0]['titre'].'</h1>
                 <p class="description">'.$oeuvres[0]['auteur'].'</p>
                 <p class="description-complete">'.$oeuvres[0]['texte'].'</p>
                 </div>';
            break;
            case 2:
              echo 
              '<div id="img-oeuvre">'.$oeuvres[1]['oeuvre'].'</div>
              <div id="contenu-oeuvre">
                 <h1>'.$oeuvres[1]['titre'].'</h1>
                 <p class="description">'.$oeuvres[1]['auteur'].'</p>
                 <p class="description-complete">'.$oeuvres[1]['texte'].'</p>
                </div>';
            break;
            case 3:
                echo 
                '<div id="img-oeuvre">'.$oeuvres[2]['oeuvre'].'</div>
                <div id="contenu-oeuvre">
                   <h1>'.$oeuvres[2]['titre'].'</h1>
                   <p class="description">'.$oeuvres[2]['auteur'].'</p>
                   <p class="description-complete">'.$oeuvres[2]['texte'].'</p>
                </div>';
            break;
            case 4:
                echo 
                '<div id="img-oeuvre">'.$oeuvres[3]['oeuvre'].'</div>
                <div id="contenu-oeuvre">
                   <h1>'.$oeuvres[3]['titre'].'</h1>
                   <p class="description">'.$oeuvres[3]['auteur'].'</p>
                   <p class="description-complete">'.$oeuvres[3]['texte'].'</p>
                </div>';
            break;
            case 5:
                echo 
                '<div id="img-oeuvre">'.$oeuvres[4]['oeuvre'].'</div>
                <div id="contenu-oeuvre">
                    <h1>'.$oeuvres[4]['titre'].'</h1>
                    <p class="description">'.$oeuvres[4]['auteur'].'</p>
                    <p class="description-complete">'.$oeuvres[4]['texte'].'</p>
                </div>';
            break;
            case 6:
                echo
                '<div id="img-oeuvre">'.$oeuvres[5]['oeuvre'].'</div>
                <div id="contenu-oeuvre">
                    <h1>'.$oeuvres[5]['titre'].'</h1>
                    <p class="description">'.$oeuvres[5]['auteur'].'</p>
                    <p class="description-complete">'.$oeuvres[5]['texte'].'</p>
            
                    </div>';
            break;
            case 7:
                echo
                '<div id="img-oeuvre">'.$oeuvres[6]['oeuvre'].'</div>
                <div id="contenu-oeuvre">
                    <h1>'.$oeuvres[6]['titre'].'</h1>
                    <p class="description">'.$oeuvres[6]['auteur'].'</p>
                    <p class="description-complete">'.$oeuvres[6]['texte'].'</p>
                </div>';
            break;
            case 8:
                echo '<div id="img-oeuvre">'.$oeuvres[7]['oeuvre'].'</div>
                <div id="contenu-oeuvre">
                    <h1>'.$oeuvres[7]['titre'].'</h1>
                    <p class="description">'.$oeuvres[7]['auteur'].'</p>
                    <p class="description-complete">'.$oeuvres[7]['texte'].'</p>
                </div>';
            break;
            case 9:
                echo 
                '<div id="img-oeuvre">'.$oeuvres[8]['oeuvre'].'</div>
                <div id="contenu-oeuvre">
                    <h1>'.$oeuvres[8]['titre'].'</h1>
                    <p class="description">'.$oeuvres[8]['auteur'].'</p>
                    <p class="description-complete">'.$oeuvres[8]['texte'].'</p>
                </div>';
            break;
            case 10:
                echo 
                '<div id="img-oeuvre">'.$oeuvres[9]['oeuvre'].'</div>
                <div id="contenu-oeuvre">
                    <h1>'.$oeuvres[9]['titre'].'</h1>
                    <p class="description">'.$oeuvres[9]['auteur'].'</p>   
                    <p class="description-complete">'.$oeuvres[9]['texte'].'</p>
                </div>';
            break;    
            case 11:
                echo 
                '<div id="img-oeuvre">'.$oeuvres[10]['oeuvre'].'</div>
                <div id="contenu-oeuvre">
                    <h1>'.$oeuvres[10]['titre'].'</h1>
                    <p class="description">'.$oeuvres[10]['auteur'].'</p>
                    <p class="description-complete">'.$oeuvres[10]['texte'].'</p>
                </div>';
            break;
            case 12:
                echo 
                '<div id="img-oeuvre">'.$oeuvres[11]['oeuvre'].'</div>
                <div id="contenu-oeuvre">
                   <h1>'.$oeuvres[11]['titre'].'</h1>
                   <p class="description">'.$oeuvres[11]['auteur'].'</p>
                   <p class="description-complete">'.$oeuvres[11]['texte'].'</p>
                </div>';
            break;
            case 13:
                echo 
                '<div id="img-oeuvre">'.$oeuvres[12]['oeuvre'].'</div>
                <div id="contenu-oeuvre">
                   <h1>'.$oeuvres[12]['titre'].'</h1>
                   <p class="description">'.$oeuvres[12]['auteur'].'</p>
                   <p class="description-complete">'.$oeuvres[12]['texte'].'</p>
                </div>';
            break;
            case 14:
                echo 
                '<div id="img-oeuvre">'.$oeuvres[13]['oeuvre'].'</div>
                <div id="contenu-oeuvre">
                   <h1>'.$oeuvres[13]['titre'].'</h1>
                   <p class="description">'.$oeuvres[13]['auteur'].'</p>
                   <p class="description-complete">'.$oeuvres[13]['texte'].'</p>
               </div>';
            break;
            case 15:
                echo 
                '<div id="img-oeuvre">'.$oeuvres[14]['oeuvre'].'</div>
                <div id="contenu-oeuvre">
                   <h1>'.$oeuvres[14]['titre'].'</h1>
                   <p class="description">'.$oeuvres[14]['auteur'].'</p>
                   <p class="description-complete">'.$oeuvres[14]['texte'].'</p>
                </div>';
            break;
            case 14:
                echo 
                '<div id="img-oeuvre">'.$oeuvres[15]['oeuvre'].'</div>
                <div id="contenu-oeuvre">
                   <h1>'.$oeuvres[15]['titre'].'</h1>
                   <p class="description">'.$oeuvres[15]['auteur'].'</p>
                   <p class="description-complete">'.$oeuvres[15]['texte'].'</p>
               </div>';
            break;           
            default:
                echo 
                '<div align="center"><h1>Oups... <br>Cette oeuvre est introuvable !<br> Retournez sur&nbsp;<a href = "index.php">la page d\'acceuil</a>&nbsp;pour retrouver toutes nos oeuvres!</h1>'; 
      }
        ?>
    </article>
</main>
<?php include('footer.php'); ?>
</body>
</html>
