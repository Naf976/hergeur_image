<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hergeur d'image</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
        if($_FILES['image']['size'] < 2000000){
            $infos = pathinfo($_FILES['image']['name']);
            $extensionImage = $infos['extension'];
            $extensions = ['jpeg', 'jpg', 'png', 'gif'];
            if(in_array($extensionImage, $extensions)){
                move_uploaded_file($_FILES['image']['tmp_name'], 'stock/'.basename($_FILES['image']['name']));
            }
        }
    }
?>

<body>
    <main>
        <header>
            <h1>Hébergeur d'image</h1>
        </header>
        <section id="conteneurImage">
            <p>Aucune photo reçu pour le moment...</p>
        </section>

        <section id="traitement">
            <aside>
                <form method="POST" action="index.php" enctype="multipart/form-data">
                    <label id="choixImage" for="choix">Selectionner une image</label>
                    <input id="choix" type="file" name ="image" hidden><span id="fichier">Aucune image selectionné </span></br>
                    <input class="envoie" type="submit" value="Envoyer">
                </form>
            </aside>
            <aside></aside>

        </section>
    </main>
<script type="text/javascript" src="index.js"></script>
</body>

</html>