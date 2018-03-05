<nav>
    <!- Menu Hamburger ->
    <div class="hamb" onclick="showMenu()">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
    <!-________________->

    <img src="images/logo.png" alt="Logo Dance'in" id="logo"/>
    <ul class="navbar" id="navbar">
        <li class="testActive">
            <a href="index.php">Dance'in</a>
        </li>
        <li>
            <a href="photo.php">Galerie</a>
        </li>
        <li>
            <a href="planning.php">Planning</a>
        </li>
        <li>
            <a href="evenements.php">Evenements</a>
        </li>
        <li>
            <a href="formulaire.php">Contact</a>
        </li>
        <li>
            <a href="equipe.php">Equipe</a>
        </li>
    </ul>
</nav>

<script>
function showMenu() {
    if(document.getElementById("navbar").style.display == "none"){
    document.getElementById("navbar").style.display = "block";
    }
    else {
        document.getElementById("navbar").style.display = "none";
    }
}

</script>
