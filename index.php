<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.'oeuvre'">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <?php include('header.php');?>
    <main>
<?php include('oeuvres.php');?>
    <div id="liste-oeuvres">
        <?php foreach($oeuvres as $oeuvre)
            { echo 
                '<article class="oeuvre">'.$oeuvre['lien'].$oeuvre['oeuvre'].
                '<h2>'.$oeuvre['titre'].'</h2>
                <p class="description">'.$oeuvre['auteur'].'</p></a>
                </article>'; } 
        ?>
    </div>
    </main>
    <?php include('footer.php'); ?>
</body>
</html>