<div class="teaser"><img src="images/piecekontakt.jpg" alt= "Teaser" width="83" height="90"> <strong><u>Kontakt</u></strong><br>
Kontaktformular
<br>

<br><br>
Nutzen Sie einfach unser Kontaktformular und hinterlassen Sie uns eine Nachricht. Sie werden umgehend von uns hören!<br></div>
<div class="contentp">
<h1>Kontakt</h1>
<? if (isset($Submit)){
$admin = "info@odeon-ensemble-muenchen.de";
$subject = "Formularmail";
$message = "Nachricht fuer $admin von $email:\n\n";

while(list($name,$value)=each($HTTP_POST_VARS)) {
$message.="$name: $value\n\n";
}

mail($admin,$subject,$message,"From: $email");
?>
<br>
Ihre Anfrage wird umgehend bearbeitet
<? }
else
{
?>
</p>
      <form name="form1" id="form1" method="post" action="">

            <p>Name:<br>
<input type="text" name="name" /> <br>
E-mail:<br>
<input type="text" name="email" />    <br>
Betreff:<br>
<input type="text" name="betreff" />  <br><br>
Anfrage:</span><br>
<textarea name="anfrage" cols="50" rows="6"></textarea> <br>
<input type="submit" name="Submit" value="Senden" />
<?
}
?>
</div>