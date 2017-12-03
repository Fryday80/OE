<div class="teaser"><img src="images/piecelogin.jpg" alt= "Teaser" width="83" height="90"> <h1><u>Mitgliederbereich</u></h1><br>
Problenplan
<br>
Vereinssatzung
<br><br>
Dies ist der interne Bereich für Mitglieder des Odeon Ensembles München<br></div>
<div class="contentp">

<?php
if(isset($_POST['Submit'])){

$pw="beethoven";
if($_POST['pw']==$pw){
echo"<h1>Mitgliederbereich</h1>";
echo"Hier können Sie den aktuellen Probenplan runterladen:<br><strong><a  href=\"probenplan\" >Download \"probenplan2014.pdf\"</a></strong><br><br>";


}
else{
echo"<h1>Fehler</h1>";
echo"Sie haben ein falsches Passwort eingegeben.<br>Bitte versuchen Sie es erneut:<br><br>
<a  href=\"Mitglieder\" >Login</a>";
}



}
else{
?>
<h1>Anmeldung</h1>
<form action="Mitglieder" method="post">
Passwort:<br>
<input name="pw" type="password"><br><br>
<input name="Submit" type="submit" value="Anmelden">
</form>
<? } ?>
</div>