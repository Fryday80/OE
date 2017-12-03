<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Odeon-Ensemble Adminbereich</title>
</head>

<body>
<?php
if (isset($_POST['Senden'])){

if (isset($_FILES['file1'])){

		$uploadpath = 'Files/';

		$source = $HTTP_POST_FILES['file1']['tmp_name' ];

		$dest = '' ;

		if ( ( $source != 'none') && ( $source != '' )) {



				$filename="probenplan.pdf";

				$dest = $uploadpath.$filename;
				if ( $dest != '' ) {
				if ( move_uploaded_file ( $source, $dest ) ) {

				echo"Probenplan erfolgreich aktualisiert<br>";
				}
				}

				

			}

			
				}
				
				
				
				if (isset($_FILES['file2'])){

		$uploadpath = 'Files/';

		$source = $HTTP_POST_FILES['file2']['tmp_name' ];

		$dest = '' ;

		if ( ( $source != 'none') && ( $source != '' )) {



				$filename="satzung.pdf";

				$dest = $uploadpath.$filename;
				if ( $dest != '' ) {
				if ( move_uploaded_file ( $source, $dest ) ) {

				echo"Vereinssatzung erfolgreich aktualisiert<br>";
				}
				}

				

			}

			
				}
				
				
				
				if (isset($_POST['pw']) && $_POST['pw']!=""){
$datei=fopen("pw.php","w");
fputs($datei, $_POST['pw']);
fclose($datei);
echo"Passwort erfolgreich aktualisiert<br>";
		

			
				}
				echo "<br><br><a  href=\"admin.php\" >Zurück zum Adminbereich</a>";
				
				
}
else{

	echo "<form action=\"admin.php\" method=\"post\" enctype=\"multipart/form-data\" name=\"form1\">
	<fieldset><legend>Probenplan und Vereinssatzung</legend>
Probenplan hochladen:<br>
    <input type=\"file\" name=\"file1\"><br><br>
	Vereinssatzung hochladen:<br>

	<input type=\"file\" name=\"file2\">
	</fieldset>
	<fieldset><legend>Passwort ändern</legend>";
	$datei=fopen("pw.php","r");
$pw=fgets($datei, 1024);
fclose($datei);
echo"Aktulles Passwort: $pw <br><br>";
	
	echo"
Neues Passwort:<br>
    <input type=\"text\" name=\"pw\">
	</fieldset>

<input type=\"submit\" name=\"Senden\" value=\"Änderungen übernehmen\">  

      </p>

</form>"; 
}
?>
</body>
</html>
