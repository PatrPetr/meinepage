<?php include 'header.php'; ?>
<script>
  $(document).ready(function() {
      $('.image-wrapper').hover(
          function() {
            var that = $(this);
            hoverTimeout = setTimeout(function() {
              // Alle anderen Elemente abdunkeln
              $('.image-wrapper').not(that).fadeTo(250, 0.5);
             }, 250);
          },
          function() {
            clearTimeout(hoverTimeout);
              // Alle Elemente wieder auf volle Helligkeit setzen
              $('.image-wrapper').fadeTo(250, 1); 
          }
      );
  });
  </script>


<h1>Die Bücher</h1>


<section class="video-bg">
<div class="video-container">
<div class="video-title">DIE VERLORENE TOCHTER</div>
<div class="video-subtitle">Der Buch-Teaser zum Roman (Thriller)</div>
<p class="synopsis">Als ein Ex-Polizist erfährt, dass seine Tochter eine Serienkillerin ist, muss er sich entscheiden: rettet er sie oder ihre nächsten Opfer. </p>
     <div class="video-wrapper">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/97vykMJc8cw?si=XJzuInBonwWM-CFg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
       </div>
       <div class="text-under-video">Buch: Patrick Peters | Fotos: Tobias Hentze Photography | Schnitt & Bearbeitung: Marc Steinicke</div>
     </div>
     </div>
    
     
<div class="video-container">
  <div class="video-title">KILL THE BLOODY GHOSTS</div>
  <div class="video-subtitle">Das Hörbuch zur Horror-Kurzgeschichte, gelesen von Charles Rettinghaus</div>
    <p class="synopsis">Ein skrupelloser Krimineller wird in einer Geister-Villa ermordet und nicht eher ruhen, bis er den Geist gefunden hat, der ihm das Leben nahm.</p>
     <div class="video-wrapper">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/7vGLv_8Qmmc?si=d2taMj54WI8GUUA2" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>     
    </div>
      <div class="text-under-video">Hörbuch zu KILL THE BLOODY GHOSTS aus der Reihe CHEAP CHOPS OF HORROR von Patrick Peters, gelesen von Charles Rettinghaus.
      </div>
    </div>
  </section>

  
<h2>CHEAP CHOPS OF HORROR <br> Die Bücher</h2>

<section class="ccoh_literatur">
<div class="image-container">
    
<!-- CCOH -->
<div class="image-wrapper">
  <img src="../img/ccoh_cover/CCOH ANTHOLOGY PRINT EBOOK_PREISRED-Seite002.png" alt="CCOH Cover">
  <div class="text-covers">
      <p class="text-on-image">
        Ausgabe #1 - 10# inklusive der Novelle "DER NEUE APOSTEL".
      </p>
      <button class="button" onclick="window.open('https://www.amazon.de/CHEAP-CHOPS-HORROR-Anthologie-unver%C3%B6ffentlichte/dp/1791989217/ref=sr_1_1?__mk_de_DE=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=2R5NGJ5CZGTRT&keywords=cheap+chops+of+horror&qid=1695290630&sprefix=cheap+chops+of+horror%2Caps%2C194&sr=8-1', '_blank', 'noopener,noreferrer')">Buch kaufen</button>
  </div>
</div>

<!-- #1 -->
<div class="image-wrapper">
  <img src="img/ccoh_cover/FRONT_A_LA_CARTE_COVER.png" alt="FRONT A LA CARTE">
  <div class="text-covers">
      <p class="text-on-image">
        Im Ersten Weltkrieg stirbt ein deutscher Soldat infolge eines Gasangriffes und erwacht als hungriger Dämon wieder zum Leben.
      </p>
      <button class="button" onclick="window.open('https://www.amazon.de/CHEAP-CHOPS-HORROR-FRONT-CARTE-ebook/dp/B07M59J1DC/ref=sr_1_2?__mk_de_DE=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=2R5NGJ5CZGTRT&keywords=cheap+chops+of+horror&qid=1695290630&sprefix=cheap+chops+of+horror%2Caps%2C194&sr=8-2', '_blank', 'noopener,noreferrer')">Buch kaufen</button>
  </div>
</div>

<!-- #2 -->
<div class="image-wrapper">
  <img src="img/ccoh_cover/MEAN_MILKING_MACHINE_COVER.png" alt="MEAN MILKING MACHINE">
  <div class="text-covers">
      <p class="text-on-image">
        Ein Pornosüchtiger treibt es zu weit, als er ein Web-Cam-Girl Zuhause aufsucht um sie zu einer privaten Show zu zwingen, dessen Ausgang er sich ganz anders vorgestellt hat.
      </p>
      <button class="button" onclick="window.open('https://www.amazon.de/CHEAP-CHOPS-HORROR-MILKING-MACHINE-ebook/dp/B07M8K4SLF/ref=sr_1_5?__mk_de_DE=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=2R5NGJ5CZGTRT&keywords=cheap+chops+of+horror&qid=1695290630&sprefix=cheap+chops+of+horror%2Caps%2C194&sr=8-5', '_blank', 'noopener,noreferrer')">Buch kaufen</button>
  </div>
</div>

<!-- #3 -->
<div class="image-wrapper">
  <img src="img/ccoh_cover/THIRD_ROOMMATE_COVER.png" alt="3RD ROOMATE">
  <div class="text-covers">
      <p class="text-on-image">
        Ein junger Mann trifft sich mit seiner Affäre in einem Hotelzimmer, in dem ein Geist die Untreuen bestraft und den Mann in die Vergangenheit befördert.      
      </p>
      <button class="button" onclick="window.open('https://www.amazon.de/CHEAP-CHOPS-HORROR-THIRD-ROOMMATE-ebook/dp/B07LHKFCQT/ref=sr_1_9?__mk_de_DE=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=2R5NGJ5CZGTRT&keywords=cheap+chops+of+horror&qid=1695290630&sprefix=cheap+chops+of+horror%2Caps%2C194&sr=8-9', '_blank', 'noopener,noreferrer')">Buch kaufen</button>
  </div>
</div>

<!-- #4 -->
<div class="image-wrapper">
  <img src="img/ccoh_cover/NO_LIFE_NO_CHOICE_COVER.png" alt="NO LIFE NO CHOICE">
  <div class="text-covers">
      <p class="text-on-image">
        Ein alternder Kommissar hat genug von einer Welt, die alles und jeden kontrolliert. Als er sich gegen sie stellt, lernt er die wahre Kraft eines Systems kennen, das ihn jahrelang beobachtet hat.  
      </p>
      <button class="button" onclick="window.open('https://www.amazon.de/CHEAP-CHOPS-HORROR-LIFE-CHOICE-ebook/dp/B07M5B6P9P/ref=sr_1_6?__mk_de_DE=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=2R5NGJ5CZGTRT&keywords=cheap+chops+of+horror&qid=1695290630&sprefix=cheap+chops+of+horror%2Caps%2C194&sr=8-6', '_blank', 'noopener,noreferrer')">Buch kaufen</button>
    </div>
</div>

<!-- #5 -->
<div class="image-wrapper">
  <img src="img/ccoh_cover/MAN_VS_DOG_COVER.png" alt="MAN VS DOG">
  <div class="text-covers">
      <p class="text-on-image">
        Ein ausgesetzter Hund will denjenigen töten, der ihn halbtot geprügelt hat und begibt sich auf einen Rachefeldzug, um seinem Herrchen, dem Boss der örtlichen Drogen-Mafia, den Garaus zu machen.
      </p>
      <button class="button" onclick="window.open('https://www.amazon.de/CHEAP-CHOPS-HORROR-MAN-DOG-ebook/dp/B07LHHZP4X/ref=sr_1_8?__mk_de_DE=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=2R5NGJ5CZGTRT&keywords=cheap+chops+of+horror&qid=1695290630&sprefix=cheap+chops+of+horror%2Caps%2C194&sr=8-8', '_blank', 'noopener,noreferrer')">Buch kaufen</button>
    </div>
</div>

<!-- #6 -->
<div class="image-wrapper">
  <img src="img/ccoh_cover/CHARLY_CAN_YOU_HEAR_US_COVER.png" alt="CHARLY, CAN YOU HEAR US?">
  <div class="text-covers">
      <p class="text-on-image">
        Als der Hausmeister die Grundschule und sich selbst in Brand steckte und nicht alle mit in den Tod reißen konnte, versucht er als Geist sein Vorhaben zu vollenden – bis ihm ein mutiger kleiner Junge in die Quere kommt.      
      </p>
      <button class="button" onclick="window.open('https://www.amazon.de/CHEAP-CHOPS-HORROR-CHARLY-HEAR-ebook/dp/B07M5BXBS7/ref=sr_1_4?__mk_de_DE=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=2R5NGJ5CZGTRT&keywords=cheap+chops+of+horror&qid=1695290630&sprefix=cheap+chops+of+horror%2Caps%2C194&sr=8-4', '_blank', 'noopener,noreferrer')">Buch kaufen</button>
    </div>
</div>

<!-- #7 -->
<div class="image-wrapper">
  <img src="img/ccoh_cover/TERROR_SLATE_COVER.jpg" alt="TERROR SLATE">
  <div class="text-covers">
      <p class="text-on-image">
        Als der Hauptdarsteller vor laufender Kamera stirbt, setzt der ambitionierte und talentfreie Regisseur alles daran, den Film doch noch zu Ende zu drehen.
      </p>
      <button class="button" onclick="window.open('https://www.amazon.de/CHEAP-CHOPS-HORROR-TERROR-SLATE-ebook/dp/B07M5BKCF7/ref=sr_1_7?__mk_de_DE=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=2R5NGJ5CZGTRT&keywords=cheap+chops+of+horror&qid=1695290630&sprefix=cheap+chops+of+horror%2Caps%2C194&sr=8-7', '_blank', 'noopener,noreferrer')">Buch kaufen</button>    
    </div>
</div>

<!-- #8 -->
<div class="image-wrapper">
  <img src="img/ccoh_cover/VICIOUS_VERSA_COVER.png" alt="VICIOUS VERSA">
  <div class="text-covers">
      <p class="text-on-image">
        Eine Agentin muss sich aus der Folter befreien, bevor ihr ehemaliger Partner durchdreht und sie für eine Tat zur Rechenschaft zieht, die sie womöglich nie begangen hat.   
      </p>
      <button class="button" onclick="window.open('https://www.amazon.de/CHEAP-CHOPS-HORROR-VICIOUS-VERSA-ebook/dp/B07LHJXWHJ/ref=sr_1_10?__mk_de_DE=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=2R5NGJ5CZGTRT&keywords=cheap+chops+of+horror&qid=1695290630&sprefix=cheap+chops+of+horror%2Caps%2C194&sr=8-10', '_blank', 'noopener,noreferrer')">Buch kaufen</button>
    </div>
</div>

<!-- #9 -->
<div class="image-wrapper">
  <img src="img/ccoh_cover/KILL_THE_BLOODY_GHOST_COVER.png" alt="KILL THE BLOODY GHOSTS">
  <div class="text-covers">
      <p class="text-on-image">
        Ein skrupelloser Krimineller wird in einer Geister-Villa ermordet und nicht eher ruhen, bis er den Geist gefunden hat, der ihm das Leben nahm.     
      </p>
      <button class="button" onclick="window.open('https://www.amazon.de/CHEAP-CHOPS-HORROR-BLOODY-GHOSTS-ebook/dp/B07M59D2ZB/ref=sr_1_11?__mk_de_DE=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=2R5NGJ5CZGTRT&keywords=cheap+chops+of+horror&qid=1695290630&sprefix=cheap+chops+of+horror%2Caps%2C194&sr=8-11', '_blank', 'noopener,noreferrer')">Buch kaufen</button>
      <button class="button" onclick="window.open('https://www.youtube.com/embed/7vGLv_8Qmmc?si=d2taMj54WI8GUUA2', '_blank', 'noopener,noreferrer')">Zum Hörbuch</button>
    </div>
</div>

<!-- #10 -->
<div class="image-wrapper">
  <img src="img/ccoh_cover/WHATSDEATH_COVER.png" alt="WHATSDEATH">
  <div class="text-covers">
      <p class="text-on-image">
        Über einen Gruppenchat organisiert ein ehemaliges Mobbing-Opfer das erste Klassentreffen, bei dem niemand ahnt, dass es auch ihr letztes Treffen sein soll.
      </p>
      <button class="button" onclick="window.open('https://www.amazon.de/CHEAP-CHOPS-HORROR-10-WHATSDEATH-ebook/dp/B07LHGVQH8/ref=sr_1_12?__mk_de_DE=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=2R5NGJ5CZGTRT&keywords=cheap+chops+of+horror&qid=1695290630&sprefix=cheap+chops+of+horror%2Caps%2C194&sr=8-12', '_blank', 'noopener,noreferrer')">Buch kaufen</button>
    </div>
</div>

</div>
</section>

<?php include 'footer.php'; ?>