<?php 
switch (basename($_SERVER['PHP_SELF'])) {
    case 'index.php':
        $pageTitle = "Der Autor";
        break;
    case 'literatur.php':
        $pageTitle = "Die Bücher";
        break;
    case 'filme.php':
        $pageTitle = "Die Filme";
        break;
    case 'presse.php':
        $pageTitle = "Die Presse";
        break;
    case 'kontakt.php':
        $pageTitle = "Der Kontakt";
        break;
    case 'datenschutz.php':
        $pageTitle = "Der Datenschutz";
        break;
    case 'impressum.php':
        $pageTitle = "Das Impressum";
        break;    
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="out/main.css">
    <script>
window.onload = function() {
    var modal = document.getElementById('privacyModal');
    var acceptBtn = document.getElementById('accept');
    var declineBtn = document.getElementById('decline');

    // Überprüfen, ob der Benutzer schon früher auf der Seite war
    if (!localStorage.getItem('privacyAccepted')) {
        modal.style.display = 'block';
    }

    acceptBtn.onclick = function() {
        modal.style.display = 'none';
        localStorage.setItem('privacyAccepted', 'true');
    }

    declineBtn.onclick = function() {
        // Wenn der Benutzer ablehnt, leiten Sie ihn von der Seite weg oder zeigen Sie eine Nachricht an.
        window.location.href = 'https://www.google.com'; // Oder wohin auch immer Sie ihn leiten möchten
    }
}

    </script>
</head>
<body>
   <!-- Modal -->
<div id="privacyModal" class="modal">
    <div class="modal-content">
        <h2>Hinweis</h2>
        <p>Auf dieser Webseite werden YouTube-Videos zum direkten Abspielen verwendet. Außerdem verweisen wir auf externe Links wie Amazon, Instagram, Facebook und verschiedene andere Seiten. Durch die weitere Nutzung dieser Webseite stimmen Sie diesen Bedingungen zu.</p>
        <button id="accept">Akzeptieren</button>
        <button id="decline">Ablehnen</button>
    </div>
</div>

<!-- Checkbox für die Sidebar -->
<input type="checkbox" class="sidenav__opened" id="sidenav__opened" autocomplete="off" />

<!-- Burger-Icon zum Öffnen der Sidebar -->
<label class="burger-icon" for="sidenav__opened">
    <span></span>
</label>


<!-- Seitliche Navigationsleiste -->
<div class="sidenav">
    <div class="sidenav__background"></div>
    <div class="sidenav__container">
        <!-- Das ist der "Schließen"-Button der Sidebar. Wenn Sie ein X-Icon dafür haben, können Sie es hier einfügen -->
        <label for="sidenav__opened" class="sidenav__close"></label>
        
        <nav>
            <ul class="sidenav__nav">
                <li><a class="sidenav__nav-link" href="index.php">Der Autor</a></li>
                <li><a class="sidenav__nav-link" href="literatur.php">Die Bücher</a></li>
                <li><a class="sidenav__nav-link" href="filme.php">Die Filme</a></li> 
                <li><a class="sidenav__nav-link" href="presse.php">Die Presse</a></li>
                <li><a class="sidenav__nav-link" href="kontakt.php">Der Kontakt</a></li>  
                <li><a class="sidenav__nav-link" href="impressum.php">Das Impressum</a></li>  
                <li><a class="sidenav__nav-link" href="datenschutz.php">Der Datenschutz</a></li>     
            </ul>
        </nav>
    </div>
</div>

   
                   <!--
                    <li class="navigation__list-item navigation__list-item--mobile-hidden">
                        <a class="navigation__list-item-link" href="/about">Über den Autor</a>
                    </li>
                    <li class="navigation__list-item navigation__list-item--mobile-hidden">
                        <a class="navigation__list-item-link" href="/literatur">Literatur</a>
                    </li>
                    <li class="navigation__list-item navigation__list-item--mobile-hidden">
                        <a class="navigation__list-item-link" href="/filme">Filme</a>
                    </li>
                    <li class="navigation__list-item navigation__list-item--mobile-hidden">
                        <a class="navigation__list-item-link" href="/presse">Pressestimmen</a>
                    </li>
                    -->
         
    <header class="header">
        <a href="index.php">
        <div class="logo__container">
            <p class="logo">Patrick Peters</p>
            <p class="logo__subtext">Autor | Drehbuchautor | Ghostwriter</p>
        </div>
        </a>
    </header>

    