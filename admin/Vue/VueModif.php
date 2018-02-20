<?php
/**
 * Created by PhpStorm.
 * User: guilhem
 * Date: 14/02/18
 * Time: 10:40
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
    <script src="JS/getEditorText.js"></script>
</head>

<body>
<?php include('include/nav.php'); ?>
    <div class="contenu_blanc">
    <?php
    if (isset($_GET['msgErreur'])) {
        echo "<BR/><h2>".$_GET['msgErreur']."</h2>";
    }
    ?>
        Veuillez entrer les informations du nouvel article :
        <br/>
        <form method='post' id="formModif" action='index.php?entite=Articles&action=traiterU' enctype="multipart/form-data" onsubmit="javascript:submit_contenu();">
            <table align="center">
                <tr><td align="right">ID :</td>
                    <?php
                    echo '<td><input type="text" disabled="disabled" name="id" value="'.$vAccueil->id.'"></td></tr>';
                    echo '<td><input type="hidden" name="id" value="'.$vAccueil->id.'"></td></tr>';
                    echo '<tr><td align="right">TITRE :</td>';
                    echo '<td><input type="text" value="'.$vAccueil->titre.'" name="titre"></td></tr>';
                    echo '<tr><td align="right">CONTENU :</td>';
                    ?>
                    <td>
                    <div class="standalone-container">
                        <div id="snow-container">
                            <?php echo $vAccueil->contenu;?>
                        </div>
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
                    <script src="../quill.min.js"></script>
                    <script>
                        var quill = new Quill('#snow-container', {
                            theme: 'snow'
                        });
                    </script>
                    </td>
                </tr>
                <input type="hidden" name="editor" value="">
                <tr><td align="center"><input type="submit" name="Valider" value="Valider"></td></tr>
            </table>
        </form>
    </div>
</body>
</html>
