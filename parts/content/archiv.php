<div class="teaser"><img alt= "Teaser" src="images/pieceaktuell.jpg"> <strong>
Hier können Sie die vergangenen Konzerte einsehen. <br>
Odeon - Ensemble München</strong></div>

<p>Auf Grund technischer Probleme in der Vergangenheit sind leider nicht mehr alle Daten erhalten.</p>
<div class="archiv">
	<?php
		$now = time();
		$actualYear = date('Y');
		$pastYear = null;
		foreach ($allEvents as $event){
			if ($now > $event->timestamp) {
			    if ($pastYear === null || $pastYear != $event->year){
                    $pastYear = $event->year;
					echo "<h2>$event->year</h2>";
                }
				echo $event->getHTML();
			}
		}
	?>
<!--         <h1><a  href="Archiv3">2014</a></h1>-->
<!--         --><?php
//         $b = $_GET['a'];
//
//         if($b == 3) {
//                 include ($pathc.'archiv2014.php');
//         }
//         ?>
<!--         <h1><a  href="Archiv2">2013</a></h1>-->
<!--         --><?php
//         if($b == 2) {
//                 include ($pathc.'archiv2013.php');
//         }
//         ?>
<!--         <h1><a  href="Archiv1">Vergangene Jahre</a></h1>-->
<!--         --><?php
//         if($b == 1) {
//                 include ($pathc.'archiv2012.php');
//         }
//         ?>
</div>