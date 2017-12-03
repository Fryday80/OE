<div class="navideko"></div>
<div class="mainnavi"><a href="Profil" class="navilink">&Uuml;ber uns</a></div>
<div class="navideko"></div>
<?php
//Einfügen der submenüs über $s1
// 3 Fälle notwendig wegen dem genutzen Design, welches mainnavi/mainnaviaktive und subnavi/subnaviaktiv unterscheidet
// $s1 = '0' oder nicht gesetzt führt zur Einbindung des zugeklappten Menüpunkts ->default
// $s1 = '1' führt zur Einbindung des ausgeklappten Menüs mit Auswahlmarkierung (.."sublinkaktive"..) am obersten Punkt
// $s1 = '2' führt zur Einbindung des ausgeklappten Menüs mit Auswahlmarkierung (.."sublinkaktive"..) am zweiten Punkt
    switch($s1) {
         case '1':
                 echo "<div class=\"mainnaviaktiv\">Aktuelles</div>"; //class mainnaviaktiv l�sst den men�punkt gedr�ckt erscheinen
                 echo "<div class=\"subnaviaktiv\">Ausblick</div>"; //augew�hlter Unterpunkt ohne <a href>, da das nicht sch�n aussieht
                 echo "<div class=\"subnavi\"><a href=\"Archiv\" class=\"subnavilink\">Archiv</a></div>";
         break;
         case '2':
                 echo "<div class=\"mainnaviaktiv\">Aktuelles</div>";
                 echo "<div class=\"subnavi\"><a href=\"Aktuelles\" class=\"subnavilink\">Ausblick</a></div>";
                 echo "<div class=\"subnaviaktiv\">Archiv</div>";
         break;
         default:
                 echo "<div class=\"mainnavi\"><a href=\"Aktuelles\" class=\"navilink\">Aktuelles</a></div>";
         break;
         }
?>
<div class="navideko"></div>
<div class="mainnavi"><a  href="Vorverkauf" class="navilink">Vorverkauf</a></div>
<div class="navideko"></div>
<!-- <div class="mainnavi"><a href="Anzeigen" class="navilink">Suchanzeige</a></div>
<div class="navideko"></div> -->
<div class="mainnavi"><a  href="DDr.Hartmann" class="navilink">Prof. DDr. Michael Hartmann</a></div>
<div class="navideko"></div>
<?php
//Einf�gen der submen�s  �ber $s2
   switch($s2) {
         case '1':
                 echo "<div class=\"mainnaviaktiv\">Media</div>";
                 echo "<div class=\"subnaviaktiv\">CD's</div>";
                 echo "<div class=\"subnavi\"><a href=\"Proben\" class=\"subnavilink\">Hörproben</a></div>";
                 echo "<div class=\"subnavi\"><a href=\"DVD\" class=\"subnavilink\">DVD's</a></div>";
         break;
         case '2':
                 echo "<div class=\"mainnaviaktiv\">Media</div>";
                 echo "<div class=\"subnavi\"><a href=\"CD\" class=\"subnavilink\">CD's</a></div>";
                 echo "<div class=\"subnaviaktiv\">Hörproben</div>";
                 echo "<div class=\"subnavi\"><a href=\"DVD\" class=\"subnavilink\">DVD's</a></div>";
         break;
         case '3':
                 echo "<div class=\"mainnaviaktiv\">Media</div>";
                 echo "<div class=\"subnavi\"><a href=\"CD\" class=\"subnavilink\">CD's</a></div>";
                 echo "<div class=\"subnavi\"><a href=\"Proben\" class=\"subnavilink\">Hörproben</a></div>";
                 echo "<div class=\"subnaviaktiv\">DVD's</div>";
         break;
         default:
                 echo "<div class=\"mainnavi\"><a href=\"Media\" class=\"navilink\">Media</a></div>";
         break;
         }
?>
<div class="navideko"></div>
<!--
<div class="mainnavi"><a  href="Antrag" class="navilink">Mitgliedsantrag</a></div>
<div class="navideko"></div>
-->
<div class="mainnavi"><a  href="Kontakt" class="navilink">Kontakt</a></div>
<div class="navideko"></div>
<!--
<div class="mainnavi"><a  href="Mitglieder" class="navilink">Mitgliederbereich</a></div>
<div class="navideko"></div>-->
