<?php
$to      = 'info@interfreezone.org';
$subject = 'Iscrizione alla newsletter';
$message = 'Richiesta informazioni da ' .$_POST["nome"]. "\r\n Azienda : " .$_POST["compagnia"]."\r\n" . "Altri dati : \r\n" ."Indirizzo : "  .$_POST["indirizzo"]."\r\n" ."Citt&agrave; : " .$_POST["citta"]."\r\n" ."C.A.P. : " .$_POST["cap"]. "\r\n" ."Stato : " .$_POST["stato"]."\r\n" ."Telefono : " .$_POST["tel"]."\r\n" ."Professione : ".$_POST["professione"]."\r\n"."e-mail : ".$_POST["email"]."\r\n" ."Nazione : ". $_POST["country"]."\r\n" ."Contatto Telefonico : ". $_POST["sur_contact_by_phone"]."\r\n"  ."Contatto Email : ". $_POST["SUR_Contact_By_Email"]."\r\n" ."Referrer : ".$_POST["SUR_Where_Heard"]."\r\n"  ."Dimensione Azienda : " .$_POST["SUR_Company_Size"]."\r\n"  ."Commenti : " .$_POST["Commenti"]."\r\n";
$headers = 'From: webmaster@interfreezone.org' . "\r\n" .
    'Reply-To: noreply@interfreezone.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
//header('Location: ' . $_SERVER['HTTP_REFERER']);
header('Location: https://www.inter-markets.org/IRAN-EXHIBITS/info-form-success.html');
exit();
?>