<html>
	<head>
		<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript">
		    $(document).ready(function(){
		    	$("input").not( $(":button") ).keypress(function (evt) {
		      		if (evt.keyCode == 13) {
		        		iname = $(this).val();
		        		if (iname !== 'Submit'){  
		          			var fields = $(this).parents('form:eq(0),body').find('button,input,textarea,select');
		          			var index = fields.index( this );
		          			if ( index > -1 && ( index + 1 ) < fields.length ) {
		            			fields.eq( index + 1 ).focus();
		          			}
		          			return false;
		        		}
		      		}
		    	});
		    });
		</script>
		<STYLE>
			body, td, input {
				font-family: Verdana, Arial, Helvetica, sans-serif;
				font-size:12px;
			}
		</STYLE>
		<meta name="Microsoft Border" content="none, default">
	</head>
<body background="../img/Agrondwandelaar.jpg">

<?php


//if "email" is filled out, send email
if (isset($_REQUEST['achternaam']) && isset($_REQUEST['voornamen']) && isset($_REQUEST['geboortedatum']) && isset($_REQUEST['plaats']))  {
  //send email
  $from = "info@codestone.nl";
  $to = "jan@pelgrimfamilie.net";
  $subject = "Invulformulier - " . $_REQUEST['achternaam'] . ", " . $_REQUEST['voornamen'];

  $message .= "\nAchternaam: " . $_REQUEST['achternaam'];
  $message .= "\nBeroep: " . $_REQUEST['beroep'];
  $message .= "\nVoornamen: " . $_REQUEST['voornamen'];
  $message .= "\nGodsdienst: " . $_REQUEST['godsdienst'];
  $message .= "\nGeboortedatum: " . $_REQUEST['geboortedatum'];
  $message .= "\nPlaats : " . $_REQUEST['plaats'];
  $message .= "\n";
  $message .= "\nGehuwd met:";
  $message .= "\nAchternaam: " . $_REQUEST['achternaam_p'];
  $message .= "\nBeroep: " . $_REQUEST['beroep_p'];
  $message .= "\nVoornamen: " . $_REQUEST['voornamen_p'];
  $message .= "\nGeboortedatum: " . $_REQUEST['geboortedatum_p'];
  $message .= "\nPlaats: " . $_REQUEST['plaats_p'];
  $message .= "\nHuwelijksdatum: " . $_REQUEST['datumhuwelijk'];
  $message .= "\nPlaats: " . $_REQUEST['plaatshuwelijk'];
  $message .= "\n";
  $message .= "\nGegevens Kinderen:";
  $message .= "\n1) Voornamen: " . $_REQUEST['voornamen_k1'];
  $message .= "\nGeboortedatum: " . $_REQUEST['geboortedatum_k1'];
  $message .= "\nPlaats: " . $_REQUEST['plaats_k1'];
  $message .= "\n2) Voornamen: " . $_REQUEST['voornamen_k2'];
  $message .= "\nGeboortedatum: " . $_REQUEST['geboortedatum_k2'];
  $message .= "\nPlaats: " . $_REQUEST['plaats_k2'];
  $message .= "\n3) Voornamen: " . $_REQUEST['voornamen_k3'];
  $message .= "\nGeboortedatum: " . $_REQUEST['geboortedatum_k3'];
  $message .= "\nPlaats: " . $_REQUEST['plaats_k3'];
  $message .= "\n4) Voornamen: " . $_REQUEST['voornamen_k4'];
  $message .= "\nGeboortedatum: " . $_REQUEST['geboortedatum_k4'];
  $message .= "\nPlaats: " . $_REQUEST['plaats_k4'];
  $message .= "\n";
  $message .= "\nGegevens Ouders:";
  $message .= "\nAchternaam vader: " . $_REQUEST['achternaam_v'];
  $message .= "\nBeroep: " . $_REQUEST['beroep_v'];
  $message .= "\nVoornamen: " . $_REQUEST['voornamen_v'];
  $message .= "\nGeboortedatum: " . $_REQUEST['geboortedatum_v'];
  $message .= "\nPlaats: " . $_REQUEST['plaats_v'];
  $message .= "\nOverlijdensdatum: " . $_REQUEST['datumoverlijden_v'];
  $message .= "\nPlaats: " . $_REQUEST['plaatsoverlijden_v'];
  $message .= "\nAchternaam moeder: " . $_REQUEST['achternaam_m'];
  $message .= "\nBeroep: " . $_REQUEST['beroep_m'];
  $message .= "\nVoornamen: " . $_REQUEST['voornamen_m'];
  $message .= "\nGeboortedatum: " . $_REQUEST['geboortedatum_m'];
  $message .= "\nPlaats: " . $_REQUEST['plaats_m'];
  $message .= "\nOverlijdensdatum: " . $_REQUEST['datumoverlijden_m'];
  $message .= "\nPlaats: " . $_REQUEST['plaatsoverlijden_m'];
  $message .= "\n";
  $message .= "\nGegevens grootouders (ouders van uw vader):";
  $message .= "\nAchternaam grootvader: " . $_REQUEST['achternaam_vv'];
  $message .= "\nBeroep: " . $_REQUEST['beroep_vv'];
  $message .= "\nVoornamen: " . $_REQUEST['voornamen_vv'];
  $message .= "\nGeboortedatum: " . $_REQUEST['geboortedatum_vv'];
  $message .= "\nPlaats: " . $_REQUEST['plaats_vv'];
  $message .= "\nOverlijdensdatum: " . $_REQUEST['datumoverlijden_vv'];
  $message .= "\nPlaats: " . $_REQUEST['plaatsoverlijden_vv'];
  $message .= "\nAchternaam grootmoeder (moeder van uw vader): " . $_REQUEST['achternaam_mv'];
  $message .= "\nBeroep: " . $_REQUEST['beroep_mv'];
  $message .= "\nVoornamen: " . $_REQUEST['voornamen_mv'];
  $message .= "\nGeboortedatum: " . $_REQUEST['geboortedatum_mv'];
  $message .= "\nPlaats: " . $_REQUEST['plaats_mv'];
  $message .= "\nOverlijdensdatum: " . $_REQUEST['datumoverlijden_mv'];
  $message .= "\nPlaats: " . $_REQUEST['plaatsoverlijden_mv'];
  $message .= "\n";
  $message .= "\nGegevens grootouders (ouders van uw moeder):";
  $message .= "\nAchternaam grootvader: " . $_REQUEST['achternaam_vm'];
  $message .= "\nBeroep: " . $_REQUEST['beroep_vm'];
  $message .= "\nVoornamen: " . $_REQUEST['voornamen_vm'];
  $message .= "\nGeboortedatum: " . $_REQUEST['geboortedatum_vm'];
  $message .= "\nPlaats: " . $_REQUEST['plaats_vm'];
  $message .= "\nOverlijdensdatum: " . $_REQUEST['datumoverlijden_vm'];
  $message .= "\nPlaats: " . $_REQUEST['plaatsoverlijden_vm'];
  $message .= "\nAchternaam grootmoeder: " . $_REQUEST['achternaam_mm'];
  $message .= "\nBeroep: " . $_REQUEST['beroep_mm'];
  $message .= "\nVoornamen: " . $_REQUEST['voornamen_mm'];
  $message .= "\nGeboortedatum: " . $_REQUEST['geboortedatum_mm'];
  $message .= "\nPlaats: " . $_REQUEST['plaats_mm'];
  $message .= "\nOverlijdensdatum: " . $_REQUEST['datumoverlijden_mm'];
  $message .= "\nPlaats: " . $_REQUEST['plaatsoverlijden_mm'];
  $message .= "\n";
  $message .= "\nEventuele bijzonderheden, hobby’s of specifieke deskundigheid van Uzelf:";
  $message .= "\n" . $_REQUEST['bijzonderheden'];

  mail( $to, $subject, $message, "From: $from\nReply-To: $from\n" );

  echo "<h1>Hartelijk dank voor de door U verstrekte informatie!</h1><p>Met vriendelijke groet,</p><p>Jan Pelgrim</p>";

} else  {
  //if "email" is not filled out, display the form
  echo "<h1>Vragenlijst behorend bij het onderzoek 'Pelgrim Familie'</h1>
<form method='post' action='invulformulier.php'>
<p>S.v.p. invullen voor zover u bekend (velden met * zijn verplicht):<input type='submit' value='formulier versturen'/></p>
<table>
	<tr>
		<td>Achternaam *</td>
		<td><input name='achternaam' type='text' /></td>
		<td>Beroep</td>
		<td><input name='beroep' type='text' /></td>
	</tr>		
	<tr>
		<td>Voornamen *</td>
		<td><input name='voornamen' type='text' /></td>
		<td>Godsdienst</td>
		<td><input name='godsdienst' type='text' /></td>
	</tr>		
	<tr>
		<td>Geboortedatum *</td>
		<td><input name='geboortedatum' type='text' /></td>
		<td>Plaats *</td>
		<td><input name='plaats' type='text' /></td>
	</tr>
	<tr>
		<td colspan='4'><hr/><b>Gehuwd met:</b></td>
	</tr>
	<tr>
		<td>Achternaam</td>
		<td><input name='achternaam_p' type='text' /></td>
		<td>Beroep</td>
		<td><input name='beroep_p' type='text' /></td>
	</tr>		
	<tr>
		<td>Voornamen</td>
		<td colspan='3'><input name='voornamen_p' type='text' /></td>
	</tr>		
	<tr>
		<td>Geboortedatum</td>
		<td><input name='geboortedatum_p' type='text' /></td>
		<td>Plaats</td>
		<td><input name='plaats_p' type='text' /></td>
	</tr>
	<tr>
		<td>Huwelijksdatum</td>
		<td><input name='datumhuwelijk' type='text' /></td>
		<td>Plaats</td>
		<td><input name='plaatshuwelijk' type='text' /></td>
	</tr>
	<tr>
		<td colspan='4'><hr/><b>Gegevens Kinderen:</b></td>
	</tr>
	<tr>
		<td>1) Voornamen</td>
		<td colspan='3'><input name='voornamen_k1' type='text' /></td>
	</tr>
	<tr>
		<td>Geboortedatum</td>
		<td><input name='geboortedatum_k1' type='text' /></td>
		<td>Plaats</td>
		<td><input name='plaats_k1' type='text' /></td>
	</tr>
	<tr>
		<td>2) Voornamen</td>
		<td colspan='3'><input name='voornamen_k2' type='text' /></td>
	</tr>
	<tr>
		<td>Geboortedatum</td>
		<td><input name='geboortedatum_k2' type='text' /></td>
		<td>Plaats</td>
		<td><input name='plaats_k2' type='text' /></td>
	</tr>
	<tr>
		<td>3) Voornamen</td>
		<td colspan='3'><input name='voornamen_k3' type='text' /></td>
	</tr>
	<tr>
		<td>Geboortedatum</td>
		<td><input name='geboortedatum_k3' type='text' /></td>
		<td>Plaats</td>
		<td><input name='plaats_k3' type='text' /></td>
	</tr>
	<tr>
		<td>4) Voornamen</td>
		<td colspan='3'><input name='voornamen_k4' type='text' /></td>
	</tr>
	<tr>
		<td>Geboortedatum</td>
		<td><input name='geboortedatum_k4' type='text' /></td>
		<td>Plaats</td>
		<td><input name='plaats_k4' type='text' /></td>
	</tr>
	<tr>
		<td colspan='4'><hr/><b>Gegevens Ouders:</b></td>
	</tr>
	<tr>
		<td>Achternaam vader</td>
		<td><input name='achternaam_v' type='text' /></td>
		<td>Beroep</td>
		<td><input name='beroep_v' type='text' /></td>
	</tr>		
	<tr>
		<td>Voornamen</td>
		<td colspan='3'><input name='voornamen_v' type='text' /></td>
	</tr>		
	<tr>
		<td>Geboortedatum</td>
		<td><input name='geboortedatum_v' type='text' /></td>
		<td>Plaats</td>
		<td><input name='plaats_v' type='text' /></td>
	</tr>
	<tr>
		<td>Overlijdensdatum</td>
		<td><input name='datumoverlijden_v' type='text' /></td>
		<td>Plaats</td>
		<td><input name='plaatsoverlijden_v' type='text' /></td>
	</tr>
	<tr>
		<td>Achternaam moeder</td>
		<td><input name='achternaam_m' type='text' /></td>
		<td>Beroep</td>
		<td><input name='beroep_m' type='text' /></td>
	</tr>		
	<tr>
		<td>Voornamen</td>
		<td colspan='3'><input name='voornamen_m' type='text' /></td>
	</tr>		
	<tr>
		<td>Geboortedatum</td>
		<td><input name='geboortedatum_m' type='text' /></td>
		<td>Plaats</td>
		<td><input name='plaats_m' type='text' /></td>
	</tr>
	<tr>
		<td>Overlijdensdatum</td>
		<td><input name='datumoverlijden_m' type='text' /></td>
		<td>Plaats</td>
		<td><input name='plaatsoverlijden_m' type='text' /></td>
	</tr>
	<tr>
		<td colspan='4'><hr/><b>Gegevens grootouders (ouders van uw vader):</b></td>
	</tr>
	<tr>
		<td>Achternaam grootvader</td>
		<td><input name='achternaam_vv' type='text' /></td>
		<td>Beroep</td>
		<td><input name='beroep_vv' type='text' /></td>
	</tr>		
	<tr>
		<td>Voornamen</td>
		<td colspan='3'><input name='voornamen_vv' type='text' /></td>
	</tr>		
	<tr>
		<td>Geboortedatum</td>
		<td><input name='geboortedatum_vv' type='text' /></td>
		<td>Plaats</td>
		<td><input name='plaats_vv' type='text' /></td>
	</tr>
	<tr>
		<td>Overlijdensdatum</td>
		<td><input name='datumoverlijden_vv' type='text' /></td>
		<td>Plaats</td>
		<td><input name='plaatsoverlijden_vv' type='text' /></td>
	</tr>
	<tr>
		<td>Achternaam grootmoeder</td>
		<td><input name='achternaam_mv' type='text' /></td>
		<td>Beroep</td>
		<td><input name='beroep_mv' type='text' /></td>
	</tr>		
	<tr>
		<td>Voornamen</td>
		<td colspan='3'><input name='voornamen_mv' type='text' /></td>
	</tr>		
	<tr>
		<td>Geboortedatum</td>
		<td><input name='geboortedatum_mv' type='text' /></td>
		<td>Plaats</td>
		<td><input name='plaats_mv' type='text' /></td>
	</tr>
	<tr>
		<td>Overlijdensdatum</td>
		<td><input name='datumoverlijden_mv' type='text' /></td>
		<td>Plaats</td>
		<td><input name='plaatsoverlijden_mv' type='text' /></td>
	</tr>
	<tr>
		<td colspan='4'><hr/><b>Gegevens grootouders (ouders van uw moeder):</b></td>
	</tr>
	<tr>
		<td>Achternaam grootvader</td>
		<td><input name='achternaam_vm' type='text' /></td>
		<td>Beroep</td>
		<td><input name='beroep_vm' type='text' /></td>
	</tr>		
	<tr>
		<td>Voornamen</td>
		<td colspan='3'><input name='voornamen_vm' type='text' /></td>
	</tr>		
	<tr>
		<td>Geboortedatum</td>
		<td><input name='geboortedatum_vm' type='text' /></td>
		<td>Plaats</td>
		<td><input name='plaats_vm' type='text' /></td>
	</tr>
	<tr>
		<td>Overlijdensdatum</td>
		<td><input name='datumoverlijden_vm' type='text' /></td>
		<td>Plaats</td>
		<td><input name='plaatsoverlijden_vm' type='text' /></td>
	</tr>
	<tr>
		<td>Achternaam grootmoeder</td>
		<td><input name='achternaam_mm' type='text' /></td>
		<td>Beroep</td>
		<td><input name='beroep_mm' type='text' /></td>
	</tr>		
	<tr>
		<td>Voornamen</td>
		<td colspan='3'><input name='voornamen_mm' type='text' /></td>
	</tr>		
	<tr>
		<td>Geboortedatum</td>
		<td><input name='geboortedatum_mm' type='text' /></td>
		<td>Plaats</td>
		<td><input name='plaats_mm' type='text' /></td>
	</tr>
	<tr>
		<td>Overlijdensdatum</td>
		<td><input name='datumoverlijden_mm' type='text' /></td>
		<td>Plaats</td>
		<td><input name='plaatsoverlijden_mm' type='text' /></td>
	</tr>
	<tr>
		<td colspan='4'><hr/>Eventuele bijzonderheden, hobby of specifieke deskundigheid van Uzelf:</td>
	</tr>
	<tr>
		<td valign='bottom'><input type='submit' value='formulier versturen'/></td>
		<td colspan='3'><textarea name='bijzonderheden' rows='15' cols='50' align='right'></td>
	</tr>
</table>
</form>";
}
?>

</body>
</html>