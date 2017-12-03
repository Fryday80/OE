<?php
// ++++++++++++++++INFO+++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// ACHTUNG zur sch�neren Darstellung interne URL Umleitung in .htaccess !!!
// kopie.htaccess beigef�gt... immer aktuell halten, da .htaccess nicht immer gesehen werden kann (z.B. WebFTP!)
//
// Definition der Variablen f�r die navbar.php und site.php(Anzeigeseite)
//
// Navigation �ber Variable $n = $_GET['site']
// �bergabe durch Verlinkung <code> site.php?site=xy <>   in .htacess !!
// $n wird in site.php mit <code> include ('./parts/content/'.$n.'.php'); <> eingebaut und l�d daurch den Content
//
// Submen�s:
// �ber $s1 wird die Darstellung des ersten Ausklappmen�s "aktuelles" verwirklicht
// Einf�gen der submen�s �ber switch ($s1) bzw ($s2)in navbar.php
// 3 F�lle notwendig wegen dem genutzen Design (default = Zugeklappt + 2 Sonderf�lle Unterpunkt 1 oder 2 gew�hlt)
// Design untescheidet in mainnavi & mainnaviaktive und subnavi & subnaviaktiv
// �ber $s2 entsprechend f�r das 2. Klappmen�, hier mit 4 F�llen... (default + 3 Sonderf�lle; s.o.)

	if(isset($_GET['site'])) {
                 $n = $_GET['site'];   // übergibt den ?site parameter (steht in .htaccess !!) an $n
         // switch-funktion um $s1 bzw. $s2 zu definieren für die Untermenüs
                 switch($n) {
                     //Untermenü 1 - $s1 - aktuelles
                     case 'aktuelles':
                        $s1 = '1';
                     break;
                     case 'archiv':
                        $s1 = '2';
                     break;
                     //Untermenü 2 - $s2 - media
                     case 'media':
                        $s2 = '1';
                     break;
                     case 'proben':
                        $s2 = '2';
                     break;
                     case 'dvd':
                        $s2 = '3';
                     break;
                     /**
                      * Sollte keiner der GET Werte stimmen, greift default
                      * Hier werden weder $s1 noch $s2 gesetzt
                      * d.h. kein Submenü ist aufgeklappt
                      **/
                     default:
						 $s1 = null;
						 $s2 = null;
                     break;
                  }

	} else {
		$n = 'profil'; // Ziel wenn nichts gesetzt wird bzw. /site.php direkt aufgerufen wird
   		//$n = 'wellcome';
		$s1 = null;
		$s2 = null;
	}