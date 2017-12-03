<div class="teaser"><img alt= "Teaser" src="images/pieceaktuell.jpg"> <strong><u>Aktuelles</u></strong><br>
Neuigkeiten<br>
Veranstaltungen<br>

  <br>

Hier erfahren Sie alle wichtigen Neuigkeiten rund um das
Odeon - Ensemble M&uuml;nchen</div>

<div class="contentp">
     <h1>Konzerte Odeon-Ensemble M&uuml;nchen</h1>

      <h2>Programm <?php echo $actualYear = date('Y') ?> </h2>

<p><span class="concert"><strong>Konzerte <br></strong>
<small>Soweit nicht anders angek&uuml;ndigt, </small><br>
in der <strong>B&uuml;rgersaalkirche M&uuml;nchen, Neuhauser Str. 14</span> </strong><br>
</p>

<!-- Einträge -->
    <?php
        $entrycount = 0;
        $now = time();
    foreach ($allEvents as $event){
        if($now < $event->timestamp)
            echo $event->getHTML();
        $entrycount++;
    }
    if ($entrycount == 0){
        echo 'Zur Zeit keine neuen Vorankündigungen verfügbar.<br> Bitte sehen Sie bei gelegenheit wieder vorbei.';
    }
    ?>
</p>
</div>