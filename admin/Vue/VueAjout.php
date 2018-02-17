<?php
/**
 * Created by PhpStorm.
 * User: guilhem
 * Date: 17/02/18
 * Time: 14:39
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="title" content="Dance'In"/>
    <meta name="description" content="Site vitrine Dance'In"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta property="og:url" content="http://quilljs.com/standalone/snow/">
    <meta property="og:image" content="http://quilljs.com/assets/images/brand-asset.png">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta name="twitter:description" content="Quill is a free, open source rich text editor built for the modern web.">
    <meta name="twitter:image" content="http://quilljs.com/assets/images/brand-asset.png">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://quilljs.com/standalone/snow/">
    <meta property="og:image" content="http://quilljs.com/assets/images/brand-asset.png">
    <meta property="og:title" content="Snow Theme - Quill">
    <meta property="og:site_name" content="Quill">
    <link rel="canonical" href="https://quilljs.com/standalone/snow/">
    <link type="application/atom+xml" rel="alternate" href="https://quilljs.com/feed.xml" title="Quill - Your powerful rich text editor" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/monokai-sublime.min.css" />
    <link rel="stylesheet" href="../quill.snow.css" />
</head>

<body>
<?php include('include/nav.php'); ?>
<div class="contenu_blanc">
    <div class="titre" align="center">
        Veuillez entrer les informations du nouvel article :
    </div>
    <br/>
    <form method='post' action='index.php?entite=Articles&action=traiterA' enctype="multipart/form-data">
        <table align="center">
            <tr><td align="right">Categorie : </td>
                <td><select name="categorie" id="categorie">
                        <option value="accueil">Accueil</option>
                        <option value="planning">Planning</option>
                        <option value="evenement">Evenement</option>
                    </select></td>
            </tr>
            <tr>
                <td align="right">Titre : </td>
                <td><input type="text" name="titre" id="titre" maxlength="20"></td>
            </tr>
            <tr>
                <td align="right">Contenu : </td>
                <td>
                    <div class="standalone-container">
                        <div id="snow-container">
                        </div>
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
                    <script src="../quill.min.js"></script>
                    <script>
                        var quill = new Quill('#snow-container', {
                            placeholder: 'Ecrire contenu de l\'article',
                            theme: 'snow'
                        });
                    </script>
                </td>
            </tr>
            <tr><td align="right"><input type='submit' name='Valider' value="Valider"/></td></tr>
        </table>
    </form>
</div>
</body>
</html>
