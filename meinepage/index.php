<?php include 'header.php'; ?>

    <h1>Der Autor</h1>
<section class="about-bg"> 
<div class="foto_text">
    <p class="fließtext_bio">  
        Patrick Peters lebt mit seiner Familie in Bielefeld. Der Regieassistent, der bei internationalen Hollywood-Produktionen mitgearbeitet hat und Frontmann einer Punk-Band war, schreibt Romane, Kurzgeschichten und Drehbücher. 2018 hat er seine Anthologie „Cheap Chops of Horror“ erfolgreich im Selbstverlag veröffentlicht und schreibt seit 2022 Thriller als Ghostwriter für einen etablierten Namen. 
        <br>
        <br>
        Als junger Mann hat er neben den ersten Kurzfilmen und -geschichten eine Gesangs- und Gitarrenausbildung genossen, mit seiner Band Konzerte gegeben, ein Album aufgenommen und ehrenamtlich als Jugendleiter gearbeitet.
    </p>
</div>
<div class="autorenfotos_container">
    <img class="autorenfotos autorenfotos--first" src="img/ccoh_cover/autor/Patrick_Peters_1.jpg" alt="Patrick Peters">
    <img class="autorenfotos autorenfotos--second" src="img/ccoh_cover/autor/Patrick_Peters_2.jpg" alt="Patrick Peters">
    <img class="autorenfotos autorenfotos--third" src="img/ccoh_cover/autor/Patrick_Peters_3.jpg" alt="Patrick Peters">
    <img class="autorenfotos autorenfotos--fourth" src="img/ccoh_cover/autor/Patrick_Peters_4.jpg" alt="Patrick Peters">
</div>
</section>
<script>
    // Funktion, die die Höhe des Containers anpasst
function adjustContainerHeight() {
        let maxHeight = 0;
        $('.autorenfotos').each(function() {
            let bottom = $(this).position().top + $(this).outerHeight();
            if (bottom > maxHeight) {
                maxHeight = bottom;
            }
        });
        $('.autorenfotos_container').height(maxHeight);
    }

    // Funktion beim Laden der Seite wird ausgeführt
    adjustContainerHeight();

    // Event-Listener, wenn Fenstergöße geändert wird
    $(window).resize(adjustContainerHeight);
</script>

<?php include 'footer.php'; ?>

