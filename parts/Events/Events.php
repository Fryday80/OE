<?php

$allEvents = array();
////    Vorlage für Einträge:
//    $entry = new Entry(Jahr);
//    $entry->date = 'Datum im format d.m.yyyy also z.B. 13.11.2018';
//    $entry->time = 'Uhrzeit im Format hh:mm also z.B. 19:00';
//    $entry->title = 'Titel';
//    $entry->information = 'Info-Text';
//
//    $allEvents[$entry->getTimestamp()] = $entry; // fügt die Daten zur Sammlung

// ================================================================= 2017
$entry = new Entry(2017);
$entry->date = '31.12.2017';
$entry->time = '17:00';
$entry->title = 'Silvesterkonzert';
$entry->information = 'Das traditionelle Silvesterkonzert in der Bürgersaalkirche in der Münchner Fußgängerzone wird eröffnet mit der zündenden Ouvertüre „Der Einzug der Königin von Saba“ von G. F. Händel, welche die ganz Pracht entfaltet, zu der das Barockzeitalter fähig war.<br/>
Ihr folgt die Suite aus der „Feuerwerksmusik“ desselben Komponisten.<br/>
Mit weihnachtlichen Choralvorspielen von J.S. Bach kommt eine besinnliche Komponente in die festliche Stunde zum Jahresausklang.<br/>
Bei dem berühmten Doppelkonzert für 2 Trompeten von Antonio Vivaldi können die Bläser ihre Virtuosität ausspielen.<br/>
Als Hommage an den dritten großen deutschen Komponisten der Barockzeit, Georg Philipp Telemann, der zu Unrecht im Schatten von Bach und Händel steht,  erklingen aus  den Marches héroiques die Sätze: Die Anmut/Die Liebe/Die Ausgelassenheit/Die Freude.<br/>
Die große Farb-Palette der Bürgersaalorgel entfaltet sich schließlich in den berühmten Toccaten der Pariser Orgelmeister Théodore Dubois und Charles Marie Widor.<br/>
Die Leitung des Konzertes sowie der Orgelpart liegen bei Michael Hartmann, dem Musikdirektor der Bürgersaalkirche und Münchner Orgelprofessor. Mit ihm musizieren die Münchner Bläsersolisten.';
$entry->setPicture("/images/Silvester_2017.jpg");
$allEvents[$entry->getTimestamp()] = $entry;

$entry = new Entry(2017);
$entry->date = '9.12.2017';
$entry->time = '19:00';
$entry->title = 'Weihnachtsoratorium';
$entry->information = 'In der warmen, lichterfüllten, von den Engeln des Rokokomeisters Ignaz Günther geprägten Bürgersaalkirche erklingen die Kantaten I, IV und VI des Weihnachtsoratoriums von J.S. Bach. Unter der Leitung von Michael Hartmann musizieren Chor und Orchester des Odeon Ensemble München sowie die Solisten Elena Harsanyi (Sopran), Cornelia Lanz (Alt), Kammersänger Kevin Conners (Tenor) und Manuel Adt (Bass).';
$entry->setPicture("/images/Weihnachten_2017.jpg");
$allEvents[$entry->getTimestamp()] = $entry;

$entry = new Entry(2017);
$entry->date = '28.10.2017';
$entry->time = '19:00';
$entry->title = 'Orchesterkonzert';
$entry->information = 'Das Orchesterkonzert am 28. Oktober bietet 3 herausragende Werke der Sololiteratur von Bach (Suite h-moll; Solokantate „Jauchzet Gott“)
                und Richard Strauss (Oboenkonzert).<br/>
                Einleitend erklingt J.S. Bach`s  Suite h-moll, BWV 1067 mit der berühmten Badinerie, dem Bravour-Stück  für Soloflöte.<br/>
                Nicht weniger spektakulär ist Bach`s  Solokantate „Jauchzet Gott in allen Landen“, BWV 51, die in einmaliger Weise den virtuosen Part des Solo-Soprans, den die junge Münchner Sopranistin Anna Karmasin übernimmt, mit konzertierender Trompete kombiniert.<br/>
                Abschließend erklingt das als Hommage an Mozart geschriebene „Oboenkonzert“ von Richard Strauss.<br/>
                Der Münchner Meister, Sohn eines Hornisten der Staatsoper und einer
                Tochter des Brauereiunternehmers Georg Pschorr, besuchte zwar vier Jahre als Bub die Münchner Domschule, wurde aber als Erwachsener immer kirchenkritischer und –ferner.<br/>
                Dennoch vermag gerade seine Musik die Schönheit der Welt und der Schöpfung zu preisen wie kaum eine andere seiner Zeitgenossen.<br/>
                Den Solopart übernimmt Heike Steinbrecher, Professorin an der Universität Augsburg und Solo-Bläserin des Bayerischen Staatsorchesters.';
$allEvents[$entry->getTimestamp()] = $entry;

$entry = new Entry(2017);
$entry->date = '05.08.2017';
$entry->time = '19:00';
$entry->title = 'Orgelkonzert';
$entry->information = 'Das Orgelkonzert am 5. August stellt Komponisten in den Mittelpunkt, die in diesem Jahr Gedenktage haben:<br/>
                <ul>
                    <li>Johann Jakob Froberger (350. Todestag)</li>
                    <li>Louis Lefébure-Wély (200. Geburtstag)</li>
                    <li>Simon Sechter (150. Todestag)</li>
                    <li>Henri Mulet (50. Todestag)</li>
                </ul>
                Ergänzt wird das Programm durch 2 international bedeutende, mit zahlreichen Kompositionspreisen ausgezeichnete Münchner Meister:<br/>
                 Robert M. Helmschrott und Peter Wittrich';
$allEvents[$entry->getTimestamp()] = $entry;

// ================================================================= 2014

$entry = new Entry(2014);
$entry->date = '31.12.2014';
$entry->time = '19:00';
$entry->title = 'Silvesterkonzert';
$entry->information = 'Den musikalischen Jahresreigen beschlie&szlig;t wieder das <strong>Silvesterkonzert</strong>, das dieses Mal ganz im Zeichen der Wiener Musik steht.';
$allEvents[$entry->getTimestamp()] = $entry;

$entry = new Entry(2014);
$entry->date = '6.12.2014';
$entry->time = '19:00';
$entry->title = 'Weihnachtsoratorium';
$entry->information = 'Zur sch&ouml;nen Tradition ist die Auff&uuml;hrung des <strong>Weihnachtsoratoriums von Johann Sebastian Bach</strong> geworden.<br>Es kommen die Kantaten I-III zur Auff&uuml;hrung.';
$allEvents[$entry->getTimestamp()] = $entry;

$entry = new Entry(2014);
$entry->date = '25.10.2014';
$entry->time = '17:00';
$entry->title = 'Choralkonzert';
$entry->information = 'Aus Anlass der <strong>Internationalen Choraltagung in M&uuml;nchen</strong>, gestalten deren Teilnehmer ein <strong>Choralkonzert</strong> am 25. Oktober um 17.00 Uhr (!)';
$allEvents[$entry->getTimestamp()] = $entry;

$entry = new Entry(2014);
$entry->date = '11.10.2014';
$entry->time = '19:00';
$entry->title = 'Franz Schubert';
$entry->information = '<strong>Franz Schuberts</strong> &uuml;beraus beliebte <strong>Deutsche Messe</strong> wird in der selten aufgef&uuml;hrten <strong>Originalfassung f&uuml;r Chor, Bl&auml;ser, Kontrabass und Orgel</strong> zu h&ouml;ren sein. <br>
                    Als Premiere f&uuml;r die B&uuml;rgersaalkirche wird dann die ber&uuml;hmte <strong>Symphonie Nr. VII, h-Moll, die Unvollendete</strong>, erklingen.';
$allEvents[$entry->getTimestamp()] = $entry;

// ================================================================= 2013
$entry = new Entry(2013);
$entry->date = '7.12.2013';
$entry->time = '19:00';
$entry->title = 'Weihnachtsoratorium';
$entry->information ='Musikalische Glanzpunkte des Weihnachtsfestkreises sind die mittlerweile zur Tradition gewordene Aufführung des <strong>Weihnachtsoratoriums (Kantaten I,II und VI) von Johann Sebastian Bach </strong>';
$allEvents[$entry->getTimestamp()] = $entry;

$entry = new Entry(2013);
$entry->date = '26.10.2013';
$entry->time = '19:00';
$entry->title = 'Preziosen der Spätromantik';
$entry->information = 'Den beiden Jubiläumskomponisten des Jahres 2013, Giuseppe Verdi und Richard Wagner, beide 1813 geboren, gewidmet. <br>
Zu Beginn ertönt Wagners "Meistersinger-Ouvertüre" in der Orgelfassung. Verdis "Ave Maria" nach Text von Dante und die "Preghiera" aus der Oper Otello sowie "Wesendonck-Lieder",
die "Szene des Hirten"  und den "Pilgerchor"  aus dem Tannhäuser interpretieren die Sopranistin Katja Stuber " die den Hirten auch bei den Bayreuther Festspielen singt "
sowie der Tenor Kammersänger Kevin Conners von der Bayerischen Staatsoper.
Zum Abschluss erklingen zwei Werke Gustav Mahlers: das "Purgatorio" aus der X. Symphonie und das aus Viscontis Film "Tod in Venedig" bekannte "Adagietto" aus der V. Symphonie.<br>
Es musizieren der Männerchor und das Kammerorchester des Odeon Ensemble München unter der Leitung von Michael Hartmann.';
$allEvents[$entry->getTimestamp()] = $entry;

$entry = new Entry(2013);
$entry->date = '5.10.2013';
$entry->time = '19:00';
$entry->title = 'Orchesterkonzert Odeon-Ensemble München';
$entry->information = 'Barocke Lebensfreude und der Glanz europäischer Metropolen</strong> <br>

Das Odeon Ensemble München spielt das Konzert für 2 Trompeten und Orchester des Venezianers Antonio Vivaldi, sowie den "Herbst" aus dessen Vier-Jahreszeiten,
die den Charme der Lagunenstadt in unsere Gegenwart transportieren. Beim Concerto grosso Nr. V sowie der "Wassermusik", die Georg Friedrich Händel für königliche Wasserfahrten auf der Themse komponierte, manifestiert  sich der Pomp des britischen Empires.
';
$allEvents[$entry->getTimestamp()] = $entry;

$entry = new Entry(2013);
$entry->date = '31.8.2013';
$entry->time = '19:00';
$entry->title = '3. Konzert';
$entry->information = 'Der Kölner Domorganist Prof. Winfried Bönig </strong> spielt Bach, Mozart, Liszt und Escaich';
$allEvents[$entry->getTimestamp()] = $entry;

$entry = new Entry(2013);
$entry->date = '17.8.2013';
$entry->time = '19:00';
$entry->title = '2. Konzert';
$entry->information = 'Benefizkonzert zum 100-Jahrjubiläum </strong>

des Albert-Schweizer-Spitals in Lambarene <br>
 Dabei erklingen Werke von J.S.Bach, die Albert Schweitzer selbst in zahllosen Konzerten und frühen Schallplatteneinspielungen weltweit interpretiert hat,
von Charles Marie Widor, dem Orgellehrer Schweitzers sowie Robert M. Helmschrotts "Hommage", Albert Schweitzer, ein Werk, das eigens zu diesem Jubiläum komponiert wurde. <br>
Gespielt von <strong>Michael Hartmann</strong>';

$allEvents[$entry->getTimestamp()] = $entry;

$entry = new Entry(2013);
$entry->date = '3.8.2013';
$entry->time = '19:00';
$entry->title = '1. Konzert';
$entry->information = 'Der Freiburger Domorganist em. Prof. Klemens Schnorr</strong>
spielt neben den Großmeistern des Barock: Bach und Händel, auch Werke des Haydn-Schülers  Ritter von Neukomm';
$allEvents[$entry->getTimestamp()] = $entry;

$entry = new Entry(2013);
$entry->date = '13.7.2013';
$entry->time = '19:00';
$entry->title ='Robert M. Helmschrott Retrospektive';
$entry->information = 'Werke für Oboe, Violine, Gesang und Orgel <br>
                        Heike Steinbrecher, Oboe <br>
                        Markus Wolf, Violine <br>
                        Michael Hartmann, Orgel <br>
                        Simon Schnorr, Bariton';
$allEvents[$entry->getTimestamp()] = $entry;

$entry = new Entry(2013);
$entry->date = '22.6.2013';
$entry->time = '19:00';
$entry->title = 'KKISS-Quintett - Konzert für Bläserquintett  (Mitglieder des Bayer. Staatsorchesters)';
$entry->information = ' Werke von Mendelssohn, Fauré, Piazolla <br>
                        Michael Hartmann, Orgel <br>
                        Werke von Lefebure-Wely';
$allEvents[$entry->getTimestamp()] = $entry;

// ================================================================= 2011
	$entry = new Entry(2011);
	$entry->date = '17.07.2011';
	$entry->time = '16:00';
	$entry->title = 'Rossini - Petit Messe Solennelle';
	$entry->place = 'Klosterkirche Schäftlarn';
	$allEvents[$entry->getTimestamp()] = $entry;


//ksort($allEvents);
krsort($allEvents);