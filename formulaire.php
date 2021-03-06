<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="title" content="Dance'In"/>
        <meta name="description" content="Site vitrine Dance'In"/>
        <meta name="keywords" content="HTML,CSS,XML,JavaScript"/>
        <meta name="author" content="Alice DEVESA, Guilhem SABATHIER"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <?php include('include/nav.php'); ?>

        <section>

            <div class="contenu">
                <h1> N'hésitez pas a nous contacter en remplissant le formulaire ci-dessous, nous vous répondrons dans les plus brefs delais ! </h1>

                <form id="contact" method="post" action="traitement_formulaire.php">
                    <fieldset>
                        <legend>Vos coordonnées :</legend>
                        <p><label for="nom">Nom : </label><input type="text" id="nom" name="nom" tabindex="1" /></p>
                        <p><label for="email">Email : </label><input type="text" id="email" name="email" tabindex="2" /></p>
                    </fieldset>

                    <fieldset>
                        <legend>Votre message :</legend>
                        <p><label for="objet">Objet : </label><input type="text" id="objet" name="objet" tabindex="3" /></p>
                        <p><label for="message">Message : </label><textarea id="message" name="message" tabindex="4" cols="30" rows="8"></textarea></p>
                    </fieldset>

                    <div style="text-align: center"><input id="boutonFrom" type="submit" name="envoi" value="Envoyer" style="font-size: 20px;"/></div>
                </form>
            </div>

        </section>

        <?php include('include/footer.php'); ?>
    </body>
</html>
