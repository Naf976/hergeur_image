<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hergeur d'image</title>
    <link rel="stylesheet" href="style.css">
</head>

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
                <form action="index.php">
                    <label id="choixImage" for="choix">Selectionner une image</label>
                    <input id="choix" type="file" hidden><span id="#fichier">Aucune image selectionné </span></br>
                    <input class="envoie" type="submit" value="Envoyer">
                </form>
            </aside>
            <aside></aside>

        </section>
    </main>
<script type="text/javascript" src="index.js"></script>
</body>

</html>