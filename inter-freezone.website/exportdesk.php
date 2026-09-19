<?php
include("../include/interfree_dbinc.php");
include("../include/dbfix-php.php");

$db=mysql_connect($dbhost,$dbuser,$dbpasswd) or die ("Errore durante la connessione al database");

$sql= "SELECT * FROM `ragionesociale` where `Codice` = '".$_GET["codicino"]."';";
echo $sql;
mysql_select_db($dbname);
$result=mysql_query($sql);


$testata=mysql_fetch_array($result);

?>

<html>
<style type="text/css">
<!--
.style5 {font-size: 11px}
.Stile56 {
	color: #FFFF00;
	font-size: 18pt;
}
.Stile138 {color: #FF0000;
	font-family: Arial, Helvetica, sans-serif;
}
.Stile131 {font-family: Arial, Helvetica, sans-serif;
	font-size: 11pt;
}
.Stile133 {color: #006600}
.Stile134 {	color: #FFCC00;
	font-weight: bold;
}
.Stile137 {font-size: 14px; font-weight: bold; color: #000066; }
.Stile138 {font-family: Arial, Helvetica, sans-serif; font-size: 11px; color: #000066;}
.Stile82 {color: #000066; font-weight: bold; font-family: Arial, Helvetica, sans-serif;}
.Stile98 {font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14pt;
}
.style101 {font-family: Arial, Helvetica, sans-serif; color: #000066; font-weight: bold; font-size: 12px; }
.style18 {font-family: Arial, Helvetica, sans-serif; color: #000066; font-weight: bold; font-size: 18px; }
.style23 {font-size: 8pt;
	text-decoration: none;
	color: #000066;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style31 {font-size: 12px}
.style37 {font-family: Arial, Helvetica, sans-serif}
.style38 {font-size: 14px;
	font-weight: bold;
}
.style41 {font-size: 12px; font-weight: bold; }
-->
</style>
<head>
<title>E X P O R T&nbsp; D E S K</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
<style type="text/css">
<!--
.Stile1 {color: #FF00FF}
.Stile2 {font-size: 14pt}
.Stile4 {
	font-size: 8pt;
	color: navy;
	font-family: Arial, Helvetica, sans-serif;
}
.Stile6 {color: navy}
.Stile7 {font-size: 8.0pt}
.Stile8 {color: #000066}
.Stile9 {font-family: Arial, Helvetica, sans-serif}
.Stile10 {color: #000066; font-family: Arial, Helvetica, sans-serif; }
.Stile13 {
	font-size: 8pt;
	font-family: Arial, Helvetica, sans-serif;
	color: #000066;
}
.Stile15 {
	font-size: 11pt;
	font-family: Arial, Helvetica, sans-serif;
	color: #000066;
}
.Stile17 {
	color: #000066;
	font-size: 9pt;
	font-family: Arial, Helvetica, sans-serif;
}
.Stile20 {font-size: 9pt}
.Stile24 {font-size: 10pt}
.Stile25 {color: #000066; font-size: 9pt; font-weight: bold; }
.Stile26 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14pt;
	font-weight: bold;
	color: #000066;
}
.Stile27 {font-size: 10pt; color: #000066; }
.Stile43 {color: #FFFFCC; font-size: 9pt;}
.Stile51 {font-size: 14px}
.Stile52 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: #000066; }
.Stile53 {font-family: Arial, Helvetica, sans-serif; font-size: 14pt; font-weight: bold; color: #FFFFCC; }
.Stile55 {font-size: 10px}
.style1 {font-size: 10pt; color: #000066; font-weight: bold; }
.style4 {font-size: 10}
.style6 {
	font-size: 12px;
	font-weight: bold;
}
.style7 {font-size: 12px}
.style10 {
	font-size: 12px;
	color: #FFFFCC;
	font-weight: bold;
}
.style12 {font-size: 14pt; color: #FFFFFF; }
.Stile59 {font-size: 16pt}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
<script language="javascript">

function cart() { //v2.0
  window.open('./carrello.php?Codice=<?php echo $testata["Codice"]; ?>');
}

//-->
</script>
</head>
<body onLoad="text('  W e l c o m e   t o   INTERFREEZONE ');" bgcolor="#72060b" link="#000066" vlink="#000066" alink="#FFFF00" text="#ECE4BD" topmargin="0" rightmargin="0">

<div align="center">
  <table width="700" border="10" height="1131">
    <tr> 
              <td bgcolor="#FFFF99" valign="top">               
			  <table width="100%" border="2" cellpadding="5" cellspacing="5">
                <tr bgcolor="#72060B">
                  <td colspan="5" bgcolor="#003300"><div align="center" class="Stile53">
                    <table width="100%" border="0">
                      <tr>
                        <td colspan="3"><table width="100%" border="0" cellspacing="0">
                          <tr>
                            <td><div align="center"><img src="http://www.interfreezone.org/db/img/sportello-testata.jpg"></div></td>
                          </tr>
                          <tr>
                            <td align="center" bgcolor="#003300"><span id="sez1" class="Stile53"><strong><span class="Stile19"> EXPORTER'S DEK - <span id="sez1" class="Stile53"><strong>SPORTELLO EXPORT</strong></span> </span></strong></span>of Accredited Company </td>
                          </tr>
                          <tr>
                            <td align="center" bgcolor="#003300" class="Stile53 Stile56"><br>
                              <table border="5" cellpadding="2" cellspacing="0" bgcolor="#FFFFCC">
                              <tr>
                                <td bgcolor="#000066"><div><span class="Stile56 Stile59">&nbsp; 
								<?php
								echo "Ciao";
								echo $testata["RagioneSociale"];?> &nbsp;&nbsp;</span></div></td>
                              </tr>
                            </table>
                            <br></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><div align="center"><span class="Stile27"><a href="http://www.interfreezone.org/db/SITOEXPORTER/img/TELEPORTO-NY+AC.JPG" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/TELENY.JPG"></a></span></div></td>
                        <td><div align="center"><span id="sez1" class="Stile53"><strong><span class="Stile19"> <span class="Stile24 style5">Riservato agli Esportatori Convenzionati </span></span></strong></span> </div>
                          <table width="100%" border="0" cellspacing="8" cellpadding="2">
                            
                            <tr>
                              <td><div align="center"><span class="style5"><span class="Stile24"><span class="style4"><span class="Stile55"><span class="style6">Hyperlink alle macro-sezioni dello  Sportello Telematico dell&rsquo; Export-Import</span><br>
                                          <span class="style7">&ldquo;Iemas-Inter-Markets-Associates-Management  Network&rdquo;</span><br>
                              a sostegno della Guida alla Patente Internazione  dell&rsquo;Export-Import&rdquo;Iemas&rdquo; </span></span></span></span></div></td>
                            </tr>
                            <tr>
                              <td><div align="justify"><span class="Stile55 Stile55 Stile55 style5">Per l&rsquo;ottenimento dell  Deposito Certificato &ldquo;Decertofex&rdquo; dei prototipi-campioni dei prodot ti-impianti  a copertura delle Offerte Export per la pre-qualificazione e partecipa zione ai  programmi di Approvvigionamenti Iinternazionali di forniture e di lavoro delle  Delega zioni Nazionali-Territoriali&nbsp;<strong>&ldquo;Inter-Markets  Export-Import Consortiums-Associa tes-Network&rdquo;</strong> <strong>partecipatato dai&nbsp; Consorzi Acquisti Colletivi della Grande  Distribuzione Organizzata&rdquo;</strong> operante in 27 paesi  esteri:<br>
  &rsquo;Europa, America, Medio-Estremo  Oriente-China-HK-Giappone-Australia-Africa</span></div></td>
                            </tr>
                          </table>                        </td>
                        <td><div align="center"><span class="Stile27"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/INFODESK.jpg"></span></div></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><div align="center"><strong><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/guarantee.html" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a></strong> <span class="Stile43">Link for more details in Pdf</span></div></td>
                        <td>&nbsp;</td>
                      </tr>
                    </table>
                  </div></td>
                </tr>
                
                
				
				<tr>
				<td>
				<table width="100%" border="1" cellpadding="5" cellspacing="5" bgcolor="#003300">
<tr>
<td>
<table width="100%" border="0" cellpadding="5">
   <tr>
  <td class="Stile17">
    <table width="100%" border="5" cellpadding="2" cellspacing="0" bgcolor="#FFFFCC">
      <tr>
        <td bgcolor="#000066"><div><strong><a href="./bacheca.php?Codice=<?php echo $testata["Codice"];?>" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> 0&nbsp; -&nbsp;&nbsp; BACHECA DOCUMENTALE </strong> </div></td>
      </tr>
    </table>
    <BR>
    <table width="100%" border="8" cellpadding="20" cellspacing="0" bgcolor="#CCCCCC">
      <tr>
        <td bgcolor="#999999"><div align="center"><span class="style12">Index delle macro-sezioni operative dello Sportello  Export</span></div></td>
      </tr>
      <tr>
        <td><table width="100%" border="5" cellpadding="2" cellspacing="0" bgcolor="#FFFFCC">
            <tr>
              <td bgcolor="#000066">
                <div><strong><a href="./enter-desk.asp?Codice=<?php echo $testata["Codice"];?>" target="_parent"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" alt="ball" width="14" height="14" border="0"></a>A&nbsp;- <a href="enter-desk.html" >-</a>&nbsp;&nbsp; F.B.O. - SEZIONE GESTIONALE EXPORT-IMPORT</strong> <strong><a href="enter-desk.html"></a></strong></div></td>
            </tr>
            </table>
		  <br>
          <table width="100%" border="5" cellpadding="5" cellspacing="0" bgcolor="#FFFFCC">
            <tr>
              <td bgcolor="#000066"><div>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td colspan="2"><strong>B&nbsp; -&nbsp;&nbsp;BULLETIN BOARD for AGENT-CONCESSIONARIES</strong></td>
                    </tr>
                  <tr>
                    <td width="6%">&nbsp;</td>
                    <td width="94%"><p class="style6">Bacheca delle <span class="Stile51"><em>RICHIESTE-OFFERTE</em></span> di Agenti,  Concessionari, Distributori  Export-Import &nbsp;nei mercati in Europa ,  America, Asia, Oceania , Africa</p>                    </td>
                  </tr>
                  </table>
              </div></td>
            </tr>
            </table>
          <BR>
          <table width="100%" border="5" cellpadding="5" cellspacing="0" bgcolor="#FFFFCC">
            <tr>
              <td bgcolor="#000066"><div>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td colspan="2"><strong>C&nbsp; -&nbsp;&nbsp;BULLETIN BOARD for STAFF</strong></td>
                  </tr>
                  <tr>
                    <td width="6%">&nbsp;</td>
                    <td width="94%"><p><span class="style10">Bacheca delle Richieste-Offerte di Lavoro  nei mercati in Europa , America, Asia, Oceania Africa.&nbsp;  Richieste prioritarie di personale per le  attivit&agrave;  sotto indicate :</span> </p>                    </td>
                  </tr>
                  </table>
                </div></td>
            </tr>
          </table>		
          <BR><table width="100%" border="5" cellpadding="5" cellspacing="0" bgcolor="#FFFFCC">
            <tr>
              <td bgcolor="#000066"><div>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td colspan="2"><strong>D&nbsp; -&nbsp;&nbsp;REGISTRO INTERNAZIONALE DELL'EXPORT-IMPORT &quot;IEMAS&quot; </strong></td>
                    </tr>
                    <tr>
                      <td width="6%">&nbsp;</td>
                      <td width="94%"><p><span class="style10">Registro-ANNUARIO degli Operatori con l'estero nonch&egrave; i link alle  Richieste-Offerte di Lavoro  nei mercati in Europa , America, Asia, Oceania Africa.&nbsp;  Richieste prioritarie di personale per le  attivit&agrave;  sotto indicate :</span> </p></td>
                    </tr>
                  </table>
              </div></td>
            </tr>
          </table>
                  <br>  <table width="100%" border="5" cellpadding="5" cellspacing="0" bgcolor="#FFFFCC">
            <tr>
              <td bgcolor="#000066"><div>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td colspan="2"><strong>E&nbsp; -&nbsp;&nbsp;GUIDA della PATENTE INTERNAZIONALE dell'Export-Import </strong></td>
                    </tr>
                    <tr>
                      <td width="6%">&nbsp;</td>
                      <td width="94%"><p><span class="style10">Integrante anche il Registro-ANNUARIO degli Operatori con l'estero nonch&egrave; i link alle  Richieste-Offerte di Lavoro  nei mercati in Europa , America, Asia, Oceania Africa.&nbsp;  Richieste prioritarie di personale per le  attivit&agrave;  sotto indicate :</span> </p></td>
                    </tr>
                  </table>
              </div></td>
            </tr>
          </table>          
                  <BR><table width="100%" border="5" cellpadding="5" cellspacing="0" bgcolor="#FFFFCC">
                    <tr>
                      <td bgcolor="#000066"><div>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td colspan="2"><strong><a href="http://www.interfreezone.org/db/sitoexporter/pages/pdf/PROCEDURE-OPERAZIONI.pdf" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a>F&nbsp; -&nbsp;&nbsp;SINTESI PROCEDURE-OPERAZIONI PER ESPORTAZIONE</strong></td>
                            </tr>
                            <tr>
                              <td width="6%">&nbsp;</td>
                              <td width="94%"><p><span class="style10">Integrante anche il Registro-ANNUARIO degli Operatori con l'estero nonch&egrave; i link alle  Richieste-Offerte di Lavoro  nei mercati in Europa , America, Asia, Oceania Africa.&nbsp;  Richieste prioritarie di personale per le  attivit&agrave;  sotto indicate :</span> </p></td>
                            </tr>
                          </table>
                      </div></td>
                    </tr>
                  </table>
                  
                  <br>
                  <table width="100%" border="5" cellpadding="5" cellspacing="0" bgcolor="#FFFFCC">
                    <tr>
                      <td bgcolor="#000066"><div>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td colspan="2"><strong><a href="#"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a>G&nbsp; -&nbsp;&nbsp;STRUTTURE ORGANIZZATIVE CONVENZIONATE PARTECIPANTI </strong></td>
                            </tr>
                            <tr>
                              <td width="6%">&nbsp;</td>
                              <td width="94%"><p><span class="style10">I</span> </p></td>
                            </tr>
                          </table>
                      </div></td>
                    </tr>
                  </table>
                  <br>
                  <table width="100%" border="5" cellpadding="5" cellspacing="0" bgcolor="#FFFFCC">
                    <tr>
                      <td bgcolor="#000066"><div>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td colspan="2"><strong><a href="http://www.interfreezone.org/db/sitoexporter/pages/contributi_coop.html"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a>H&nbsp; -&nbsp;&nbsp;PRESTAZIONI di SERVIZI alle IMPRESE e CONVENZIONI </strong></td>
                            </tr>
                            <tr>
                              <td width="6%">&nbsp;</td>
                              <td width="94%"><table width="100%" border="0" cellpadding="0" cellspacing="3" bgcolor="#006699">
                                
                                <tr>
                                  <td width="11%"><strong><a href="#"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a>h1-20&nbsp;</strong></td>
                                  <td width="89%"><p><strong>Special Projects </strong></p></td>
                                </tr>
                              </table>                             </td>
                            </tr>
                          </table>
                      </div></td>
                    </tr>
                  </table>
                  <br>
                  <table width="100%" border="5" cellpadding="5" cellspacing="0" bgcolor="#FFFFCC">
                    <tr>
                      <td bgcolor="#000066"><div>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td><strong><a href="http://www.interfreezone.org/db/sitoexporter/pages/contributi_coop.html" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a>I1&nbsp; -&nbsp;&nbsp;CONTRIBUTI a FONDO PERDUTO </strong></td>
                            </tr>
                            <tr>
                              <td><p><strong><a href="http://www.interfreezone.org/db/sitoexporter/pages/PDF/FINANZIAMENTI_EUROPEI.pdf" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a>I2&nbsp; -&nbsp;&nbsp;FINANZIAMENTI  AGEVOLATI </strong></p></td>
                              </tr>
                          </table>
                      </div></td>
                    </tr>
                  </table>
                  <br>
                  <table width="100%" border="5" cellpadding="5" cellspacing="0" bgcolor="#FFFFCC">
                    <tr>
                      <td bgcolor="#000066"><div>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td colspan="2"><strong><a href="http://www.interfreezone.org/KUWAIT-EXHIBITS/ac-cv-index.html" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a>W1&nbsp; -&nbsp;&nbsp;TEAM of EXPORT-IMPORT MANAGEMENT SUPPORT </strong></td>
                            </tr>
                            <tr>
                              <td width="6%">&nbsp;</td>
                              <td width="94%"><p>Excerpt of Professional Background of Mr. Antonio (Anthony) Candeloro </p></td>
                            </tr>
                          </table>
                      </div></td>
                    </tr>
                  </table>
                  <p><BR>
          </p></td></tr>
    </table>
    <br>
    <table width="100%" border="5" cellpadding="2" cellspacing="2" bgcolor="#CCCCCC">
      <tr bgcolor="#FFFF99">
        <td width="6%" class="style1"><div align="center"><strong><a href="http://<%=(Recordset1.GetColumnValue("Indirizzo"))%>" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a>1</strong></div>          </td>
        <td width="6%" align="center" class="style1"><span class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/MICRO BULL.jpg"></span></td>
        <td width="75%" class="Stile27"><table width="100%" border="0">
          <tr>
            <td class="Stile27"><strong>Link al Sito web dell'Esportatore - link to </strong><strong>Exporter Home Page </strong></td>
          </tr>
        </table>          <strong><a href="jolly.htm" target="_blank"></a></strong></td>
        <td width="11%" class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/pcglobe.gif"></td>
        <td width="8%" class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/carrello.gif"></td>
      </tr>
      <tr bgcolor="#FFFFCC">
        <td class="style1"><strong><a href="http://www.interfreezone.org/db/sitoexporter/pages/2-4-2 INTERN AFILIATION.html" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a></strong>
          <div align="center">2a</div></td><td align="center" class="style1"><span class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/MICRO BULL.jpg"></span></td>
        <td class="Stile27"><strong><a href="http://www.interfreezone.org/db/SITOEXPORTER/PAGES/jolly.htm" target="_blank"></a></strong>
          <table width="100%" border="0">
            <tr>
              <td><strong class="Stile27">Programma di Web Marketing Multi Canali di </strong></td>
            </tr>
            <tr>
              <td><strong class="Stile27">Distribuzione Estera</strong></td>
            </tr>
          </table>          </td>
        <td class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/callcenter.jpg"></td>
        <td class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/carrello.gif"></td>
      </tr>
      <tr bgcolor="#FFFFCC">
        <td class="style1"><strong><a href="http://www.interfreezone.org/db/sitoexporter/pages/2-4-2 INTERN AFILIATION.html" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a></strong>
          <div align="center">2b</div></td><td align="center" class="style1"><span class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/MICRO BULL.jpg"></span></td>
        <td class="Stile27"><table width="100%" border="0">
          <tr>
            <td width="95%"><span class="style1">Statistiche Flussi Scambi con l'Estero  Settore-Paese </span><span class="Stile27">con movimenti Imbarchi e Sbarchi </span></td>
            </tr>

        </table></td>
        <td class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/pcglobe.gif"></td>
        <td class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/carrello.gif"></td>
      </tr>
      <tr bgcolor="#FFFF99">
        <td class="style1"><strong><a href="http://www.interfreezone.org/db/sitoexporter/pages/2-4-2 INTERN AFILIATION.html" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a></strong>
          <div align="center">2c</div></td><td align="center" class="style1"><span class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/MICRO BULL.jpg"></span></td>
        <td class="Stile27"><table width="100%" border="0">
          <tr>
            <td width="95%" class="style1">Export Business Plan Per ottenimento di <span class="style1">Contributi e di Finanziamenti agevolati </span></td>
          </tr>
          
        </table>          
        <strong><a href="http://www.interfreezone.org/db/SITOEXPORTER/PAGES/jolly.htm" target="_blank"></a></strong></td>
        <td class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/callcenter.jpg"></td>
        <td class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/carrello.gif"></td>
      </tr>
      <tr bgcolor="#FFFFCC">
        <td class="style1"><div align="center"><strong><a href="http://www.interfreezone.org/db/sitoexporter/pages/2-4-2 INTERN AFILIATION.html" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a></strong>3a</div></td>
        <td align="center" class="style1"><span class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/MICRO BULL.jpg"></span></td>
        <td class="Stile27"><table width="100%" border="0">
          <tr>
            <td><strong class="Stile27">Deposito Certificato dei Listini Prezzi netti Franco Origine </strong><span class="Stile27">con Certificazione - Validation</span><span class="Stile27"> - Criptografato IEMAS con  Documentazione Fotografica - Cataloghi </span></td>
          </tr>

        </table></td>
        <td class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/pcglobe.gif"></td>
        <td class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/carrello.gif"></td>
      </tr>
      <tr bgcolor="#FFFFCC">
        <td class="style1"><strong><a href="http://www.interfreezone.org/db/sitoexporter/pages/2-4-2 INTERN AFILIATION.html" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a></strong>3b</td>
        <td align="center" class="style1"><span class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/MICRO BULL.jpg"></span></td>
        <td class="Stile27"><table width="100%" border="0">
          <tr>
            <td valign="top"><strong class="Stile27">Deposito  dei Campionamenti - Sezione materiali impiegati </strong><span class="Stile27">con Certificato di Autemticit&agrave; Arbitrale Internazionale  con Deposito Parallelo all'Estero </span></td>
          </tr>

        </table></td>
        <td class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/pcglobe.gif"></td>
        <td class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/carrello.gif"></td>
      </tr>
      <tr bgcolor="#FFFFCC">
        <td bgcolor="#FFFF99" class="style1"><div align="center"><strong><a href="http://www.interfreezone.org/db/sitoexporter/pages/2-4-2 INTERN AFILIATION.html" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a></strong>4</div></td>
        <td align="center" bgcolor="#FFFF99" class="style1"><span class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/MICRO BULL.jpg"></span></td>
        <td bgcolor="#FFFF99" class="Stile27"><strong><a href="../webmarketing/webmark.htm" target="_blank"></a></strong>
          <table width="100%" border="0">
            <tr>
              <td><strong class="Stile27">Offerta Export Certificata - Preventivo - Fattura Pro </strong><strong class="Stile27">Forma &quot;Inter-Markets - DECERTOFFEX&quot; </strong><span class="Stile27">multi-canale di distribuzione estera </span></td>
            </tr>
          </table>          
          <strong> </strong></td>
        <td bgcolor="#FFFF99" class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/callcenter.jpg"></td>
        <td bgcolor="#FFFF99" class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/carrello.gif"></td>
      </tr>
      
      <tr bgcolor="#FFFFCC">
        <td class="style1"><div align="center"><strong><a href="http://www.interfreezone.org/db/sitoexporter/pages/2-2-13-5 LISTA ANNUARI.HTM" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a></strong>5</div></td>
        <td align="center" class="style1"><span class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/MICRO BULL.jpg"></span></td>
        <td class="Stile27"><table width="100%" border="0">
          <tr>
            <td width="95%" class="Stile27"><strong>Lista Annuari di Importatori-Agenti - Broker - Produttori - per Settore-Paese e Pagine Gialle di 72 Mercati Esteri </strong> divisi per canali di Distribuzione Estera </td>
          </tr>

        </table></td>
        <td class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/pcglobe.gif"></td>
        <td class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/carrello.gif"></td>
      </tr>
      
      <tr bgcolor="#FFFF99">
        <td class="style1"><div align="center"><strong><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/webmark.asp" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a></strong>6a1</div></td>
        <td align="center" class="style1"><span class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/MICRO BULL.jpg"></span></td>
        <td class="Stile27"><table width="100%" border="0">
          <tr>
            <td width="95%"><div align="justify">
             
              
              <table width="100%" border="0">
                <tr>
                  <td bgcolor="#FFFF00"><div align="center"><span class="style1 Stile51">Trasmissione del Bonus Discount 1000 $ (500 &euro;) <br>agli importatori - Distributori Esteri</span></div></td>
                </tr>
                <tr>
                  <td><div align="justify"><span class="style1">PROGRAMMA di PROMOZIONE EXPORT per la VENDITA di ASSORTIMENTI COMPLETI PRE-PALLETTIZZATI con il siste ma del TUTTO-INCLUSO attraverso l'OFFERTA SPECIALE CERTIFI CATA &quot;DECERTOFFEX&quot; che prevede anche la Tras missione del Bonus Discount 1000 $ (500 &euro;) agli importa tori - Distributori Esteri con Programma Promozionale Web-Market ing su basi Multi-Canali di Distribuzione Esteri considerati per i prodotti pre-confezionati delll'Esportatore convenzionato. La dirama zione dei Bonus include anche la ricerca di nuovi canali e organizzazione dei concessionari esteri attraverso il &quot;Web-Call Center&quot; e del Servizio Monitoraggio della Forza Vendite Inte-Markets che utilizzano i questionari Inter-Mar kets-Matc hing System </span> <span class="Stile27"> <br>
                    Vedi Questionario  multiplo per acquisire nuove richieste estere</span></div></td>
                </tr>
              </table>
              
            </div></td>
          </tr>

        </table></td>
        <td class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/callcenter.jpg"></td>
        <td class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/carrello.gif"></td>
      </tr>
      <tr bgcolor="#FFFF99">
        <td bgcolor="#FFFFCC" class="style1"><div align="center"><strong>
	
		
		<a href='<%=(Recordset1.GetColumnValue("carrello"))%>'><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a></strong>6a2</div>          </td>
        <td align="center" bgcolor="#FFFFCC" class="style1"><div align="center"><span class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/MICRO-FACTORY.jpg" width="45" height="63"></span></div></td>
        <td bgcolor="#FFFFCC" class="Stile27"><div align="justify"><span class="style1"> </span>
          <table width="100%" border="0">
            <tr>
              <td bgcolor="#FFFF00"><div align="center"><span class="style1">ATTIVAZIONE del NEGOZIO ON-LINE Exporter Factory Shop con il supporto del Certificato di Garanzia di Autenticit&agrave;-Conformit&agrave; Inter-Markets Guarantee </span></div></td>
            </tr>
            <tr>
              <td><div align="justify"><span class="style1">&egrave; stato realizzato dall'Inter-Markets-Associates, nel qua dro del Programma di Webmarketing Retailing  finalizzato allo sviluppo sia dell'Export nonch&egrave; del parallelo utilizzo per il mercato interno dell'impresa convenzionata, attraverso il Servizio Testing-Sampling-Campionamenti. Questo negozio on-line oltre al sostegno delle attivit&agrave; del mercato interno gestito dall'esportatore, facilita in parallelo l'acquisizione di ordini prova-test per singoli o gruppi di articoli  evasi con il siste ma del Group Procurement che prevede il costo franco destino estero realizzato dai raggrup pamenti delle spedizioni dalla stessa origine e stessa destina zione da parte ell'Inter-Markets-Associates-Network. Con l'Expo rter-Factory Shop si abbattono drasticamente sia costi che  rischi (vedi procedure di configurazione in <strong><a href="http://www.interfreezone.org/DB/SITOEXPORTER/pages/pdf/procedurespaccio.pdf" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a></strong>pdf) </span></div></td>
            </tr>
          </table>
          </div></td>
        <td bgcolor="#FFFFCC" class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/pcglobe.gif"></td>
        <td bgcolor="#FFFFCC" class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/carrello.gif"></td>
      </tr>
      <tr bgcolor="#FFFFCC">
        <td bgcolor="#FFFF99" class="style1"><div align="center"><strong><a href="http://www.interfreezone.org/db/sitoexporter/pages/2-4-2 INTERN AFILIATION.html" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a></strong>6b</div></td>
        <td align="center" bgcolor="#FFFF99" class="style1"><span class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/MICRO BULL.jpg"></span></td>
        <td bgcolor="#FFFF99" class="Stile27"><h1 class="Stile27">Linked to 27 Major Countries Search Engines</h1>          </td>
        <td bgcolor="#FFFF99" class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/pcglobe.gif"></td>
        <td bgcolor="#FFFF99" class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/carrello.gif"></td>
      </tr>
      <tr bgcolor="#FFFFCC">
        <td bgcolor="#FFFFCC" class="style1"><div align="center"><strong><a href="http://www.interfreezone.org/db/sitoexporter/pages/2-4-2 INTERN AFILIATION.html" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a></strong>6c</div></td>
        <td align="center" bgcolor="#FFFFCC" class="style1"><span class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/MICRO BULL.jpg"></span></td>
        <td bgcolor="#FFFFCC" class="style1">International Yellow&nbsp; Pages 27 Countries Importer&rsquo;s</td>
        <td bgcolor="#FFFFCC" class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/callcenter.jpg"></td>
        <td bgcolor="#FFFFCC" class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/carrello.gif"></td>
      </tr>
      <tr bgcolor="#FFFFCC">
        <td bgcolor="#FFFF99" class="style1"><div align="center"><strong><a href="http://www.interfreezone.org/db/sitoexporter/pages/2-4-2 INTERN AFILIATION.html" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a></strong>6d</div></td>
        <td align="center" bgcolor="#FFFF99" class="style1"><span class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/MICRO BULL.jpg"></span></td>
        <td bgcolor="#FFFF99" class="style1">D&amp;B Multi.Channel mailing lists</td>
        <td bgcolor="#FFFF99" class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/pcglobe.gif"></td>
        <td bgcolor="#FFFF99" class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/carrello.gif"></td>
      </tr>
      <tr bgcolor="#FFFFCC">
        <td align="center" bgcolor="#FFFFCC" class="style1"><strong><a href="http://www.interfreezone.org/db/sitoexporter/pages/2-4-2 INTERN AFILIATION.html" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a></strong>7</td>
        <td align="center" bgcolor="#FFFFCC" class="style1"><span class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/MICRO BULL.jpg"></span></td>
        <td bgcolor="#FFFFCC" class="Stile27"><table width="100%" border="0">
          <tr>
            <td width="97%" class="Stile27"><strong>Agenda Incontri Compratori Esteri </strong>a Fiere Nazionali - Estere - Road Show - Visite Importatori - Factory Tour </td>
          </tr>

        </table></td>
        <td class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/callcenter.jpg"></td>
        <td bgcolor="#FFFFCC" class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/carrello.gif"></td>
      </tr>
      <tr bgcolor="#FFFFCC">
        <td align="center" bgcolor="#FFFF99" class="style1"><strong><a href="http://www.interfreezone.org/db/sitoexporter/pages/pdf/2-2-13-8 Sintesi Attività Organizzazionei Internazionali.pdf" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a></strong>8</td>
        <td align="center" bgcolor="#FFFF99" class="style1"><span class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/MICRO BULL.jpg"></span></td>
        <td bgcolor="#FFFF99" class="Stile27"><p align="left">Index of <strong>International Procurement Offices of Major  nternational Organizations</strong> including the bulletins of the International  Tenders from: UNO-EU-WTO-ASEEAN-EFTA-MIDDLE EAST  COUNCIL-ECT.</p></td>
        <td bgcolor="#FFFF99" class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/pcglobe.gif"></td>
        <td bgcolor="#FFFF99" class="Stile27"><img src="http://www.interfreezone.org/db/sitoexporter/img/carrello.gif"></td>
      </tr>
    </table>    </td>
  </tr>
  </table></td></tr>
</table>				</td>
				</tr>
				<TR bgcolor="#72060B">
				<TD colspan="5" bgcolor="#003300" class="Stile25 Stile9"><div align="center" class="Stile43"><img src="http://www.interfreezone.org/db/SITOEXPORTER/pages/imgc7/piedone.jpg"></div></TD>
				</TR>
                <tr>
                  <td bgcolor="#003300" colspan="5"><blockquote class="Stile7"><div align="center"><BR>
                        <table width="80%" border="4">
                          <tr>
                            <td align="center" bgcolor="#FFFFCC"><table width="100%"  border="3">
                                <tr>
                                  <td bgcolor="#FFFFCC" class="Stile8"><table width="100%" border="0">
                                    </table>
                                      <table width="100%" border="0" cellspacing="10">
                                        <tr>
                                          <td><div align="center">
                                              <div align="center">
                                              <table width="100%" border="0" cellpadding="10">
                                                <tr>
                                                  <td align="center"><table width="90%" border="0" cellpadding="15">
                                                      <tr>
                                                        <td><div align="center">
                                                            <table width="100%" border="0" cellpadding="10">
                                                              <tr>
                                                                <td><img src="http://www.interfreezone.org/webmarketing/IMG/CALL.jpg" width="100" height="67" /></td>
                                                                <td class="Stile10 Stile1"><b><span class="txxgree Stile8 Stile9"><span class="style18"><span class="style37"><span class="style38"><span class="Stile24"><font face="Arial, Helvetica, sans-serif" size="2"><b><font face="Arial, Helvetica, sans-serif" size="2"><b><font face="Arial, Helvetica, sans-serif" size="2"><b><font size="5"><font face="Arial, Helvetica, sans-serif" size="2"><b><font face="Arial, Helvetica, sans-serif" size="2"><b><font face="Arial, Helvetica, sans-serif" size="2"><b><font size="5"><span class="Stile133">&bull; </span></font></b></font></b></font></b></font><span class="Stile133">FREE GREEN </span></font></b></font></b><span class="Stile133"><b><font size="5">LINES NUMBER</font></b></span></font></b></font><span class="Stile133"><font size="2" face="Arial, Helvetica, sans-serif"><b><b><font size="5"> &bull; <br>
                                                                  +39 3482626905</font></b></b></font></span></span></span></span></span></span></b></td>
                                                              </tr>
                                                            </table>
                                                          <span class="Stile10 Stile1"><b><span class="txxgree Stile8 Stile9"><span class="style18"><span class="style37"><span class="style38"><br>
                                                            INTER-FREE-ZONE-EXPORT &amp; IMPORT MARKETS ASSOCIATES</span> &nbsp;</span><b><br />
                                                              </b><span class="style23">Delegato Sud Europa: A.Candeloro Director Inter-Markets Group Procurement <br>
P.O. Box 508- Pt. Via Seregno,1 - CH6903 Lugano 3 Switzerland<br>
Tel-Fax: 0041767502687 - info@interfreezone.org</span><br>
                                                            <span class="style41"><a href="http://www.interfreezone.org/webmarketing/http://www.interfreezone.org"><br>
                                                              </a></span></span><span class="Stile137">ITALIAN DELEGATION &quot;Inter-Markets-Associates&quot;</span><font size="2"><span class="Stile131"><br />
                                                                </span></font></span></b></span><span class="Stile138"><font size="5" color=red><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/info-form.htm"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/00ITALIANO/ball.gif" border=0></a> Consorzio-Acquisti-Import "Inter-Covas"</font> <font> <br>
                                                                Palazzo Congressi WTC, Piani 5-6 Strada 1 Centro Direzionale Milanofiori Assago Milano </font><br>
                                                                <font> Tel 0236579993 - 0236579299 - 3482626905 www.inter-markets.org - info@asso-consorzi.org<br>
                                                                <font size="4px" color="red">(Metro Verde Assago - Forum)</font> map:http://www.milanofiori.net/mappa1.php </font><br />
                                                                  operating the &quot;INTER-MERCHANDISE-MARKETS &amp; TECHNOLOGY EXCHANGE&quot;</span></div></td>
                                                      </tr>
                                                      <tr>
                                                        <td bgcolor="#FFFF99"><div align="center" class="Stile10 Stile1"><b><span class="txxgree Stile8 Stile9"><span class="style18"><span class="style23"><a href="http://www.inter-markets.org">www.inter-markets.org</a> - e.mail <a href="mailto:info@interfreezone.org"> info@interfreezone.org</a></span></span></span></b></div></td>
                                                      </tr>
                                                  </table></td>
                                                </tr>
                                              </table>
                                            <br>
                                            <table width="100%" border="5" bgcolor="#FFFF99">
                                                <tr>
                                                  <td><table width="100%" border="0" cellspacing="5">
                                                      <tr>
                                                        <td><table width="100%" border="0" cellspacing="5">
                                                            <tr>
                                                              <td class="style101"><div align="center"><img src="HTTP://www.interfreezone.org/db/sitoexporter/img/SILOUETTE.jpg" width="550" height="22"></div></td>
                                                            </tr>
                                                            <tr>
                                                              <td class="style101"><div align="center"><img src="HTTP://www.interfreezone.org/db/sitoexporter/img/BANDIERE WEB ORIZZ.jpg" ></div></td>
                                                            </tr>
                                                            <tr>
                                                              <td class="style101"><div align="center"><img src="HTTP://www.interfreezone.org/db/sitoexporter/img/OROLOGI FUSO ORARIO.jpg"></div></td>
                                                            </tr>
                                                            <tr>
                                                              <td align="center" class="style101"><table width="90%" border="1">
                                                                  <tr>
                                                                    <td bgcolor="#990000" class="Stile8"><div align="center" class="Stile52"> <span class="Stile134"><font face="Arial, Helvetica, sans-serif">Televideoconference Nr.: 0039 3482626905</font></span></div></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td height="20" bgcolor="#FFFFCC" class="Stile138"><span class="style31">
                                                                      <marquee>
                                                                      <font face="Arial, Helvetica, sans-serif"><b>UK - Germany - ,Belgium - France - AMERICA: USA - Brazil - AFRICA: South Africa - ASIA: Japan - Hong Kong - Singapore - China - AUSTRALIA: North American Free Zone Central Distribution Center.</b></font>
                                                                      </marquee>
                                                                    </span> </td>
                                                                  </tr>
                                                              </table></td>
                                                            </tr>
                                                        </table></td>
                                                      </tr>
                                                  </table></td>
                                                </tr>
                                            </table></td>
                                        </tr>
                                    </table></td>
                                </tr>
                            </table></td>
                          </tr>
                        </table>
                        <br>
                        <table width="700"  border="5">
                          <tr>
                            <td><table width="100%"  border="1">
                                <tr>
                                  <td bgcolor="#000066" class="Stile98"><div align="center">F O R &nbsp;&nbsp;F U L L &nbsp;&nbsp;I N F O R M A T I O N&nbsp;&nbsp; and &nbsp;&nbsp;E N Q U I R I E S <br>C L I C K &nbsp;&nbsp;B E L O W </div></td>
                                </tr>
                                <tr>
                                  <td bgcolor="#FFFFCC"><table width="100%" border="0" cellspacing="5" bordercolor="#ECE9D8" bgcolor="#FFFFCC">
                                      <tr>
                                        <td width="50%" valign="middle"><table border="0" cellspacing="0">
                                            <tr>
                                              <td><a href="http://www.interfreezone.org/db/sitoexporter/pages/info-form.htm"><img src="http://www.interfreezone.org/db/sitoexporter/img/ball.gif" border="0"><img src="http://www.interfreezone.org/db/sitoexporter/img/british_flag.gif" border="0"></a></td>
                                              <td><span class="Stile82">Click for more details </span></td>
                                            </tr>
                                        </table></td>
                                        <td width="54%"><table border="0" cellspacing="5">
                                            <tr>
                                              <td><a href="http://www.interfreezone.org/db/sitoexporter/pages/info-form.htm"><img src="http://www.interfreezone.org/db/sitoexporter/img/ball.gif" border="0"><img src="http://www.interfreezone.org/db/sitoexporter/img/italian_flag.gif" border="0"></a></td>
                                              <td><span class="Stile82">Per maggiori informazioni <br>clicca qui</span></td>
                                            </tr>
                                        </table></td>
                                      </tr>
                                  </table></td>
                                </tr>
                            </table></td>
                          </tr>
                    </table>
                  </div>
                  </blockquote>                      </td>
                </tr>
              </table></td>
    </tr>
  </table>
</div>
      </td>
    </tr>
    <tr bgcolor="#FFFF99"> 
      <td></td>
	  
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
</body>
</html>