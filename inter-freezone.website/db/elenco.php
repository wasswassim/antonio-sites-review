<?PHP
include("../include/interfree_dbinc.php");
include("../include/dbfix-php.php");

$db=mysql_connect($dbhost,$dbuser,$dbpasswd) or die ("Errore durante la connessione al database");

$sql="SELECT * FROM `ragionesociale` WHERE`Cod_clie`='". $_GET['codicino'] . "'";

//echo $sql;
//echo "<br>";
//echo $_GET["Cod_clie"];
//echo "<br>";

mysql_select_db($dbname);
$result=mysql_query($sql);

//$result=mysql_db_query($__sartorm_dbname,$sql,$db);
$testata=mysql_fetch_array($result);
?>
<html>
<head>
<title>INTERFREEZONE - ASSOCONSORZI</title>
<style type="text/css">
<!--
.Stile1 {color: #FF00FF}
.Stile4 {
	font-size: 8pt;
	color: navy;
	font-family: Arial, Helvetica, sans-serif;
}
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
.Stile17 {color: #000066; font-size: 9pt; }
.Stile20 {
	font-size: 8pt;
	font-family: Arial, Helvetica, sans-serif;
}
.Stile24 {font-size: 10pt}
.Stile25 {color: #000066; font-size: 9pt; font-weight: bold; }
.Stile26 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13pt;
	font-weight: bold;
	color: #000066;
}
.Stile27 {font-size: 10pt; color: #000066; }
.Stile30 {font-size: 9pt; font-weight: bold; color: #000066; }
.Stile39 {
	color: #FFFFCC;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	font-weight: bold;
}
.Stile40 {font-size: 8pt; color: #FFFFCC; }
.Stile43 {color: #FFFFCC; font-size: 9pt;}
.Stile52 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; color: #FF0000; }
.Stile53 {font-family: Arial, Helvetica, sans-serif; font-size: 14pt; font-weight: bold; color: #FFFFCC; }
.Stile55 {font-size: 10px}
.Stile58 {font-size: 8pt; color: #FFFFCC; font-family: Arial, Helvetica, sans-serif; }
.Stile60 {font-family: Arial, Helvetica, sans-serif; font-size: 8pt; }
.Stile63 {font-size: 8pt}
.Stile64 {font-size: 8pt; font-weight: bold; color: #FFFFCC; font-family: Arial, Helvetica, sans-serif; }
.Stile66 {font-size: 7pt}
.Stile69 {font-size: 14pt}
.Stile70 {color: #CC0000}
.Stile72 {color: #FFFFFF}
.Stile74 {font-size: 14pt; color: #009933; }
link {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9pt;
	font-style: normal;
	line-height: normal;
	font-weight: normal;
	font-variant: normal;
}
.Stile75 {
	color: #009933;
	font-weight: bold;
}
.Stile79 {font-family: Arial, Helvetica, sans-serif; font-size: 18pt; font-weight: bold; color: #FFFFFF; }
.Stile80 {font-size: 18pt}
.Stile81 {color: #FFFFCC}
.Stile82 {font-family: Arial, Helvetica, sans-serif; font-size: 18pt; font-weight: bold; color: #FFFFCC; }
.Stile631 {color: #72060B}
-->
</style>
<script language="javascript">
var a=1;
function aggiungi1() {
if (a==1) {
document.getElementById("sez1").innerHTML+="<br>L'Offerta Export Intef&igrave;grata &quot;Decertoffex&quot; &egrave; sostenuta dal Deposito Certificato di Autenticit&agrave; Arbiotrale Internazionale dei prodotti offerti in export per la partecipazione al Programma di Pre-qualificazione Multi-PromoMarkets-International&quot; finalizzato a facilitare l'acquisizio ne di NUOVI-CONTINUI FLUSSI di COMMESSE di FORNITURE e di LAVORO per l'estero attraverso le preliminari operazioni &quot;Decertoffex&quot; per offerte di campionamenti ed ordini-prova con il sistema dei &quot;Pre-Packed-Assortments&quot; del Valori Modulari da us$ 5.000- 25.000 e 50.000, come indicato nella prima sezione<strong> I) </strong>pi&ugrave; avanti indiacta.";
a=2;
} else {
document.getElementById("sez1").innerHTML="<a href='javascript: aggiungi1();'><strong>1 - Prima Sezione dell'Offerta Export ''Decertoffex''</strong></a>";
a=1;
 }
}
</script>
<script language="javascript">
var b=1;
function aggiungi2() {
if (b==1) {
document.getElementById("sez2").innerHTML+="<br>In questa sezione si presenta la Documentazione &quot;Decetoffex&quot; realizzata dalla rete INter-Markets-Associates-&quot;IEMAS&quot; a sostegno dell'Offerta Export dell'Esporatore Prequalificato su indicato ,in cui l'Inter-Markets-&quot;IEMAS&quot; provvede oltre alla Certificazione di Garanzia Arbitrale Internazionale di Autenticit&agrave; attraverso il Deposito dei prototipi-campioni-sezioni dei materiali impiegati dei prodotti offerti in Export concede anche la Registrazione nell'Annuario Internazionale dell'Export-Import &quot;IEMAS-Network&quot;, e la pubblicazione nel bollettino del &quot;Group-Procurement&quot; delle Centrali-Consorzi Acquisti internazional,i in cui oltre a riprodurre l' Offerta Certificata di Autenticit&agrave; su indicata fornisce anche il Marchio di Controllo Qualitativo all'Origine nonch&egrave; i Servizi di Supporto Promozionali &quot;Dopo Vendita Multicanale Estera&quot;. Queste Certificazioni e Garanzie Internazionali della Rete Inter-Markets-&quot;IEMAS&quot; consentono all'importatore estero di potersi assicurare sia le transazioni nonch&egrave; il coordinamento integrale dall'orogine alla destinazione finale con drastico abbattimento sia dei rischi d'impresa che dei costi operativi creando un accrescimento competitivo con la conseguente velocizzazione dell'aquisizione di commesse estere. Considerato che le commesse sono sempre regolate con pagamento con Lettere di Credito Revocabili con validit&agrave; tra i 3-6 12 mesi in anticipo alla data di consegna, a favore di Esportatori nazionali non conosciuti dall'importatore che per la qual cosa vincola le comesse estere alle Offerte Export copoerte dalle certificazioni di Autenticit&agrave; Arbitrale Internazionale &quot;Decertoffex&quot; su indicate in alternativa alle abituali garanzie fideiussorie-assicurative di &quot;Performance-Bonds&quot; contribuendo cos&igrave; a facilitare-velocizzare l'aquisizione-rinnovo di nuovi e continui flussi di commesse estere.";
b=2;
} else {
document.getElementById("sez2").innerHTML="<a href='javascript: aggiungi2();'><strong>2 - Seconda Sezione dell'offerta Export &quot;Decertoffex&quot; </strong></a>";
b=1;
 }
}
</script>
<script language="javascript">
var c=1;
function aggiungi3() {
if (c==1) {
document.getElementById("sez3").innerHTML+="<br>realizzati dalla rete Inter-Broker-Associates-IEMAS attraveso il Servizio Integrato di Sostegno Parallelo sia ai compratori esteri che agli esportatori internazioneli &quot;TEIS&quot; (Total Export-Import Supprting Services) come pi&ugrave; avanti indicato nella sezione III). In questa sezione viene riportata la Documentazione e Certificazione di Supporto per le Attivit&agrave; di Diversificazione e di Espoansione a corto-medio-lungo Termine e che include anche la concessione dello &quot;Sportello-Desk dell'Esportatore&quot; che oltre ad essere il link-up con i video-collegamento alla rete Transcontinentale dell'&quot;Inter-MArkets-Associates-IEMAS&quot; in 27 PAesi esteri include anche la concessione della <strong>&quot;CARTA di IDENTITA' e di SCONTI INTERNAZIONALE </strong>(International Identity &amp; Discount Card&quot;)<strong> che consente l'accesso privileggiato sia alle Sale di Campionarie di Contrattazioni negli incontri tra Operatori Diretti Nazionali ed Esteri nonch&egrave; all'Assistenza alle Contrattazioni a Distanza in Video-Meeting attraverso il &quot;Super-Tele-Video-Portale&quot; della rete &quot;Inter-Markets-Associates&quot;. Questa Carta d'Identit&agrave; Internazionale consente l'accesso con sconti fino al 45% dei Servizi di Supporto dl POOL di Imprese di SERVIZI che coprono l'intero ciclo delle transazioni EXPORT-IMPORT&quot; ottenendo cos&igrave; un</strong>'assistenza integrata che include anche i Progetti Speciali del Programma di Diversificazione-Espansione pi&ugrave; avanti indicati nella sezione III);";
c=2;
} else {
document.getElementById("sez3").innerHTML="<a href='javascript: aggiungi3();'><strong>3 - Terza Sezione Servizi Opzionali &quot;Inter-Promo-Mercati-Esteri-Multicanali-Multi-Brands&quot;</strong></a>";
c=1;
 }
}
</script>
<script language="javascript">
function apri(page) {
window.open(page,"help","toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=1,copyhistory=0,width=750,height=700,screenX=400,screenY=500");
}
</script>
<script language="javascript">
function aprisez(page) {
window.open(page,"help","toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=1,copyhistory=0,width=750,height=680,screenX=400,screenY=500");
}
</script>
</head>
<body onLoad="text('  W e l c o m e   t o   ASSO-CONSORZI ');" bgcolor="#031977" link="#000066" vlink="#000066" alink="#990000" text="#ECE4BD" topmargin="0" rightmargin="0">

<div align="center">
  <table width="550" border="7" bgcolor="#000066">
    <tr> 
      <td colspan="2" bgcolor="#FFFFCC"> 
      <div align="center"><a href="javascript: apri('http://www.interfreezone.org/db/elenco.php')"><strong><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0">clicca qui per schermo intero</strong></a></div></td>
    </tr>
    <tr>
	
      <td width="77%" height="807" bgcolor="#000066"> 
        <div align="center"> 
          <table width="100%" border="0" height="98%" cellspacing="2" cellpadding="5">
            <tr> 
              <td height="166" bgcolor="#FFFFCC" align="center">
<table width="100%" border="1" cellpadding="4" cellspacing="2" bgcolor="#000066">
			      <tr bgcolor="#72060B">
                  <td colspan="4" bgcolor="#000066"><div align="center" class="Stile53">I N D E X &nbsp; O F F E R T A&nbsp;&nbsp; E X P O R T &quot;DECERTOFFEX&quot;</div></td>
                </tr>
				  <tr>
						  <TD bgcolor="#FFFFCC"><div align="center" class="Stile17"><strong><font color="#000066"><span style='mso-bidi-font-size:10.0pt;mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:IT' lang=IT>Presentazione di Sintesi-Documentazione di
                          Pre-Quaificazione delle</span>
                            </font></strong></div>
						    <div align="center"><span class="Stile26"><strong><font color="#000066">PREVIEW OFFERTE EXPORT CERTIFICATE &quot;DECERTOFFEX&quot; </font></strong></span><strong><font color="#000066"><BR>
                              </span></font></strong><font color="#000066">                              <span class="Stile13">finallizzate
                              all'acquisizione di ordini di campionamenti e di
                              ordini prova&nbsp;con
                              pagamenti con Lettere di Credito
                              Irrevocabili&nbsp;vedi Lista delle R I C H I E S T&nbsp;E</span><span class="Stile60"> -  </span><span class="Stile13"> I N T E R N A Z I O N A L I
                    nella Sezione 18 (bottone link)</span></font></div></TD>
			      </tr>
						  <tr> 
              <td bgcolor="#FFFFdC" valign="top">               
			  
			  
			    <table width="82%" border="2" cellpadding="5" cellspacing="5" bgcolor="#FFFFFF">
                
                <tr bgcolor="#FFFFCC">
                  <td height="60" colspan="4" valign="top" class="Stile9">
				  <table width="540" bordercolor="" border="0" cellspacing="5" cellpadding="5">
                    						  <TR bgcolor="#000066">
				<TD colspan="4" class="Stile25 Stile9"><div align="center" class="Stile17 Stile39">Preview di alcune delle pagine dell'Offerta Export Dercertoffex e della Documentazione relativa alle Certificazioni di Autenticita Aribitrale Internazionale e Garanzia Internazionale della rete Inter-Markets-Associates a sostegno delle offerte Export Decertoffex</div></TD>
				</TR>
                <tr>
                  <td bgcolor="#FFFFCC"><div align="center"><font color="#000066" size="6"><strong><img src="https://interfreezone.org/db/SITOEXPORTER/img/c7/01-INVITO.jpg" width="100"></strong></font></div>
                  <div align="center"></div>
                  <div align="center"></div></td>
                  <td bgcolor="#FFFFCC"><div align="center"><font color="#000066" size="6"><strong><img src="https://interfreezone.org/db/SITOEXPORTER/img/c7/02-IMOS-TRASM-KIT-C7.jpg" width="100"></strong></font></div></td>
				  <td bgcolor="#FFFFCC"><div align="center"><font color="#000066" size="6"><strong><img src="https://interfreezone.org/db/SITOEXPORTER/img/c7/04-PROFORMA.jpg" width="100"></strong></font></div></td>
				  <td bgcolor="#FFFFCC"><div align="center"><font color="#000066" size="6"><strong><img src="https://interfreezone.org/db/SITOEXPORTER/img/c7/05_CERTIFICATO_2_NOMI.jpg" width="100"></strong></font></div></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFCC"><div align="center"><font color="#000066" size="6"></font></div><div align="center"><img src="https://interfreezone.org/db/SITOEXPORTER/img/c7/07-listino-prezzi-CON-PIEDONE.jpg" width="100"></div>
                  <div align="center"></div></td>
                  <td bgcolor="#FFFFCC"><div align="center"><img src="https://interfreezone.org/db/SITOEXPORTER/img/c7/03_INDEX_33.jpg" width="100"></div></td>
				  <td bgcolor="#FFFFCC"><div align="center"><font color="#000066" size="6"><img src="https://interfreezone.org/db/SITOEXPORTER/img/c7/08-A-COOPROMO+DUBAI.jpg" width="100"></font></div></td>
				  <td bgcolor="#FFFFCC"><div align="center"><font color="#000066" size="6"><img src="https://interfreezone.org/db/SITOEXPORTER/img/c7/cat2.gif" width="100" height="140"></font></div></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFCC"><div align="center"></div><div align="center"><img src="https://interfreezone.org/db/SITOEXPORTER/img/c7/cat3.gif" width="100" height="140"></div></td>
                  <td bgcolor="#FFFFCC"><div align="center"><img src="https://interfreezone.org/db/SITOEXPORTER/img/c7/cat1.gif" width="100" height="140"></div></td>
				  <td bgcolor="#FFFFCC"><div align="center"></div><div align="center"><img src="https://interfreezone.org/db/SITOEXPORTER/img/c7/cat3.gif" width="100" height="140"></div></td>
                  <td bgcolor="#FFFFCC"><div align="center"><img src="https://interfreezone.org/db/SITOEXPORTER/img/c7/cat1.gif" width="100" height="140"></div></td>
                </tr>
				</table>				  </td>
                </tr>
				<tr>
				<td width="16%">
				
                <tr>
                      <td bgcolor="#A1B7C2"><div align="center"><a href="javascript: aprisez('https://interfreezone.org/db/SITOEXPORTER/pages/s1.htm');"><img src="https://interfreezone.org/db/SITOEXPORTER/img/BBACK_DW.GIF" width="32" height="32" border="0"></a></div></td>
                      <td width="84%" bgcolor="#FFFFCC"><span class="Stile13" id="sez1"><strong><span class="Stile70">Clicca a fianco per  conoscere <span id="sez1"><strong>meglio</strong></span> le caratteristiche dell'Offerta &quot;Decertoffex&quot; </span><br>
                        1 - Prima Sezione Presentazione Diretta solo dell'Offerta Export</strong></span> <span class="Stile60" id="sez2"> <br>
                            <span class="Stile8"><strong>2 - Seconda Sezione relativa alle Certificazioni di Prodotto &quot;Decertoffex - IEMAS&quot;</strong></span></a></span> <span class="Stile13" id="sez3"> <strong><br>
3 - Terza Sezione relativa ai Servizi Speciali di Suporto&quot;Inter-Promo-Multi-canali&quot;</strong></span></td>
                    </tr>
                  </table>				  </td>
                </tr>
                
				<tr>
                  <td colspan="4" bgcolor="#FFFFCC" align="center">
				    <div align="justify">
				      <table border="0" cellpadding="1" cellspacing="1" bgcolor="#FFFFCC">
                          <tr bgcolor="#000066">
                            <td bgcolor="#000066"><div align="center" class="Stile82">1</div></td>
							<td bordercolor="#FFCCFF"><div align="center"><span class="Stile39">Kit-Offerta dell'esportatore Pre-Qualificato partecipante ai Servizi <br>
                            Promo-Mercati con Opzioni Multi-Marchi </span></div></td>
                          </tr>
						  <tr bgcolor="#A1B7C2">
						  <td colspan="3" bgcolor="#CCCCCC"><div align="left" class="Stile13">
                            <div align="left" class="Stile13">
                              <div align="left">Le Offerte Export includono sia i Prodotti-finiti che i componenti <span style="mso-bidi-font-size: 10.0pt; mso-bidi-font-family: Times New Roman; color: navy; mso-ansi-language: IT" lang="IT">con l'opzione di Sub-fornitura-Marchio-Terzi </span><span style="mso-bidi-font-size: 10.0pt; mso-bidi-font-family: Times New Roman; color: navy; mso-ansi-language: IT">piani di sviluppo a cordo medio termini con l'assistenza Inter-Markets-Associates per le successive fasi di diversidicazioni ed espansioni indicate nella sezione III dei Progetti Speciali&nbsp;</span>e che oncludono anhe le seguemti&nbsp; opportunit&agrave; in Joint-Venture con la partecipazio ne estera allo svilutpp ANCHE delle attivit&agrave; qui di seguito.</div>
                            </div>
						    </div></td>
						  </tr>
                          <tr bgcolor="#FFFFFF" class="Stile13">
                            <td width="49" valign="middle" class="Stile13"><a href="javascript: apri('http://www.interfreezone.org/db/c7pg1.php?codicino=<?php echo $testata["Cod_clie"];?>')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 1</td>
                            <td width="478" class="Stile27"><div align="left" class="Stile13">Invito a visitare il Teleporto - Link Portal Web per incontri presso Sale Campionarie IEMAS </div></td>
                          </tr>
                          <tr bgcolor="#FFCCCC" class="Stile13">
                            <td width="49" valign="top" bgcolor="#CCCCCC" class="Stile13"><a href="javascript: apri('http://www.interfreezone.org/db/c7pg2.php?codicino=<?php echo $testata["Cod_clie"];?>')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 2</td>
                            <td bgcolor="#CCCCcc" class="Stile27"><p align="left" class="Stile13">Lettera Trasmissione Bonus per la Partecipazione agli incontri nelle Fiere e Sale Campionarie con Rimbalzo alle Visite delle Imprese Convenzionate al Servizio di Deposito di Campionamenti delle Offerte Export con l'Accreditamento dell&rsquo;Exportatore prequalificato con  Offerta Export &quot;Decertoffex&quot; </p></td>
                          </tr>
                          <tr bgcolor="#FFFFFF" class="Stile13">
                            <td width="49" valign="top" class="Stile13"><a href="javascript: apri('http://www.interfreezone.org/db/c7pg3.php?codicino=<?php echo $testata["Cod_clie"];?>')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 3</td>
                            <td class="Stile27"><p align="left" class="Stile13"> Sintesi dell&rsquo;Offerta Export &quot;Decertoffex&quot;basata sempre su pagamenti con Lettere di Credito Irrev.li</p></td>
                          </tr>
                          <tr bgcolor="#CCCCCC" class="Stile13">
                            <td width="49" valign="top" class="Stile13"><a href="javascript: apri('http://www.interfreezone.org/db/c7pgPRESENT.php?codicino=<?php echo $testata["Cod_clie"];?>')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 4</td>
                            <td class="Stile27"><p align="left" class="Stile13"> Presentazione Profilo dell&rsquo;Esportatore Convenzionato beneficiario degli Ordini-Lettere di Crtedito</p></td>
                          </tr>
                          <tr bgcolor="#FFFFFF" class="Stile13">
                            <td width="49" valign="top" class="Stile13"><a href="javascript: apri('http://www.interfreezone.org/db/c7pgCAT.php?codicino=<?php echo $testata["Cod_clie"];?>')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 5</td>
                            <td class="Stile27"><p align="left" class="Stile13">Presentazione Generale del Catalogo dei Prodotti dell'Offerta Export </p></td>
                          </tr>
                          <tr bgcolor="#CCCCCC" class="Stile13">
                            <td width="49" valign="top" class="Stile13"><a href="javascript: apri('http://www.interfreezone.org/db/c7pgcat1.php?codicino=<?php echo $testata["Cod_clie"];?>')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 6</td>
                            <td class="Stile27"><p align="left" class="Stile13">Presentazione Catalogo Specifico  di linee di Produzione Sezione &quot;A&quot; come disponibile </p></td>
                          </tr>
                          <tr bgcolor="#FFFFFF" class="Stile13">
                            <td width="49" valign="top" class="Stile13"><a href="javascript: apri('http://www.interfreezone.org/db/c7pgcat2.php?codicino=<?php echo $testata["Cod_clie"];?>')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg .7</td>
                            <td class="Stile27"><p align="left" class="Stile13">  Presentazione Catalogo di altre Specifiche Sezione &quot;B&quot;-prodotti e schede tecniche-se disponibili</p></td>
                          </tr>
                          <tr bgcolor="#CCCCCC" class="Stile13">
                            <td width="49" valign="top" class="Stile13"><a href="javascript: apri('http://www.interfreezone.org/db/c7pgcat3.html')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 8</td>
                            <td class="Stile27"><p align="left" class="Stile13"> Altre Presentazione come/se diponibili con il corrispondente  Deposito Certificato dei Prototiopi</p></td>
                          </tr>
                          <tr bgcolor="#FFFFFF" class="Stile13">
                            <td width="49" valign="top" class="Stile13" ><a href="javascript: apri('http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/listino.asp')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 9</td>
                            <td class="Stile27"><p align="left" class="Stile13">Listino Prezzi net FOB deposito partenza, Integrato con specifiche del Packing List per costi CIF</p></td>
                          </tr>
                          <tr bgcolor="#CCCCCC" class="Stile13">
                            <td width="49" valign="top" nowrap class="Stile13"><a href="javascript: apri('http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/proforma.asp')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 10</td>
                            <td class="Stile27"><p align="left" class="Stile13">Preventivo  per ordini prova con &rdquo;Pre-Fattura Pro-Forma-Bancabile&rdquo;Esportatore in Lotti assortiti</p></td>
                          </tr>
                          <tr bgcolor="#FFFFFF" class="Stile13">
                            <td width="49" valign="top" class="Stile13"><a href="javascript: apri('http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/pgPAGA.asp')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 11</td>
                            <td class="Stile27"><p align="left" class="Stile13">Presentazione dei Termini-di Pagamenti - con Lettere di Credito Irrevocabili, confermate </p></td>
                          </tr>
                          <tr bgcolor="#CCCCCC" class="Stile13">
                            <td width="49" valign="top" class="Stile13"><a href="javascript: apri('http://www.interfreezone.org/db/c7pgCANDE.php')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 12</td>
                            <td class="Stile27"><p align="left" class="Stile13">Presentazioni delle Credenziali dell&rsquo;Export Manager: &ldquo;Ad Hoc&rdquo;rappresentante Antonio Candeloro</p></td>
                          </tr>
                          <tr bgcolor="#FFFFFF" class="Stile13">
								<td width="49" valign="top" class="Stile13"> <a href="javascript: apri('http://www.interfreezone.org/db/c7pgQUEST.php?codicino=<?php echo $testata["Cod_clie"];?>')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 13</td>
                            <td class="Stile27"><p align="left" class="Stile13"> Questionario dell&rsquo;Esportatore dedicato all&rsquo;Importatore Estero per acquisire Richieste Particolari</p></td>
                          </tr>
						  <tr bgcolor="#CCCCCC" class="Stile13">
                            <td width="49" valign="top" class="Stile13"><a href="javascript: apri('http://www.interfreezone.org/db/c7pg14.php?codicino=<?php echo $testata["Cod_clie"];?>')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 13b</td>
                            <td class="Stile27"><p align="left" class="Stile13">Presentazione del Piano Promozionale dell'Esportatore da integrare con le Attivit&agrave; di Supporto alle Garanzie di Assistenza &quot;Dopo-Vendita&quot; indicate nella sezione 2) e nella sez. 3) che seguono</p></td>
                          </tr>
                      </table>
				      </div>
				    <table border="0" cellpadding="1" cellspacing="1" bgcolor="#FFFFCC">
                        <tr bgcolor="#000066">
						<td bgcolor="#000066"><div align="center" class="Stile79 Stile81">2</div></td>
                        <td bordercolor="#FFCCFF"><div align="center"><span class="Stile39">Il Servizio &quot;TEIS&quot; di Supporto dell'Offerta Export &quot;DECERTOFFEX-Teis-Import&quot;</span></div></td>
                      </tr>
					  <tr bgcolor="#000066">
					  <td colspan="4"><strong class="Stile64">N.B. Nella sezione che segue (2) &egrave; riportato l'indice della Documentazione relativa al Deposito Certificato di Autenticit&agrave;-Conformit&agrave; ed Affidabilit&agrave; Arbitrali Internazionali &quot;Decertoffex&quot; a copertura della presente OFFER TA EXPORT con cui viene concessa la garanzia dai Servizi di Supporto realizzati dal Servizio &quot;TEIS&quot; dell Inter-Markets-Matching-System&rdquo;), necessarisia per facilitare i pagamenti con Lettere di Credito Irrevo cabili a favore di imprese esportatrici non conosciute dallimportatotre estero che per assicurarsi le transa zioni vincola le commesse alle Offerte Export Certificate Decert'offex di cui alla documentazione che segue. Men tre nella Sezione III9 sono riportati i Servizi OPZIONALI di supporto realizzati dalla rete Inter-Markets contro le SOLE Commissioni sulle vendite realizzate.</strong></td>
					  </tr>
						<tr bgcolor="#B6BAAE" class="Stile30">
                          <td colspan="2" bgcolor="#CCCCCC" class="Stile30"><div align="left" class="Stile17 Stile39">
                            <div align="center" class="Stile4">
                              <div align="left">Copertura delle Certificazioni di Autenticit&agrave;-Conformit&agrave; ed Affidabilit&agrave; Arbitrali Internazionali.(&ldquo;Icetoms&rdquo;International Certified-Export-Trial Order-Offers-Market-Matching-System&rdquo;), necessaria per gli accreditamenti alle contrattazioni internazionali.</div>
                            </div>
                          </div></td>
                        </tr>
                        <tr bgcolor="#FFFFFF" class="Stile13">
                          <td width="56" valign="top" nowrap class="Stile4"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/s2pop.htm');" class="Stile631"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 14 </td>
                          <td width="503" class="Stile27"><p align="justify" class="Stile13">Concessione della Licenza InternazioneExport-Import con Accreditamento all'Inter-Markets-<em> Conces sione della Licenza d&rsquo;Uso del Software e della Modulistica documentale Export-Import configurata ai concessionari esteri che riproduce la formalistica delle varie Tipologie di Offerte Export per pro dotti, Impianti e Servizi Speciali di Supporto </em></p></td>
                        </tr>
                        <tr bgcolor="#CCCCCC" class="Stile13">
                          <td width="56" valign="top" class="Stile4"><a href="javascript: apri('http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/pg5.asp')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a>pg. 15</td>
                          <td class="Stile27"><p align="left" class="Stile13">Certificato di Autenticit&agrave;-Conformit&agrave; Arbitrale Internazionale a supporto dell&rsquo;Offerta Exporter </p></td>
                        </tr>
                        <tr bgcolor="#FFFFFF" class="Stile13">
                          <td width="56" valign="top" class="Stile4"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/s2pop.htm');" class="Stile631"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 16</td>
                          <td class="Stile27"><p align="left" class="Stile13">Certificato-Licenza d&rsquo;Uso del Marchio di Controllo Qualit&agrave; &ldquo;Inter-Markets-Export-Quality-Control&rdquo;</p></td>
                        </tr>
                        <tr bgcolor="#CCCCCC" class="Stile13">
                          <td width="56" valign="top" class="Stile4"><a href="javascript: apri('http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/pg17.asp')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 17</td>
                          <td class="Stile27"><p align="left" class="Stile13">Concessione Licenza d&rsquo;Uso del Marchio&ldquo;Web-Products-Tangibile-Autheticity Certification&rdquo;</p></td>
                        </tr>
                        <tr bgcolor="#FFFFFF" class="Stile13">
                          <td width="56" valign="top" class="Stile4"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/s2pop.htm');" class="Stile631"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 18</td>
                          <td class="Stile27"><p align="left" class="Stile13">Certificato di Accreditamento Sale Campionare di Contrattazione Export-Import e Telematiche </p></td>
                        </tr>
                        <tr bgcolor="#CCCCCC" class="Stile13">
                          <td width="56" valign="top" class="Stile4"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/s2pop.htm');" class="Stile631"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 19</td>
                          <td class="Stile27"><p align="left" class="Stile13">Certificato di Registr.-&rsquo;Offerta Export nel Registro-Annuario in rete Internet On Line Data Base </p></td>
                        </tr>
                        <tr bgcolor="#FFFFFF" class="Stile13">
                          <td width="56" valign="top" class="Stile4"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/s2pop.htm');" class="Stile631"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 20</td>
                          <td class="Stile27"><p align="left" class="Stile13">Certificato di Pubbl. dell&rsquo;Offerta Export-Decertoffex nel Bollettino &ldquo;Inter-Market-IMPORT-Bulletin&rdquo;</p></td>
                        </tr>
                        <tr bgcolor="#CCCCCC" class="Stile13">
                          <td width="56" valign="top" class="Stile4"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/s2pop.htm');" class="Stile631"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 21</td>
                          <td class="Stile27"><p align="left" class="Stile13">Trasmiss.&ldquo;Importer&rsquo;s-Bonus-Service's Discount&rdquo; di Usd 1000 Visite Guidate Fiere-Factory Tours</p></td>
                        </tr>
                        <tr bgcolor="#FFFFFF" class="Stile13">
                          <td width="56" valign="top" class="Stile4"><a href="javascript: apri('http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/pg22.asp')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 22</td>
                          <td class="Stile27"><p align="left" class="Stile13">Concessione della &ldquo;Inter-Markets-Discount-Card&rdquo;dei Servizi Tis-Import-Supporting Services</p></td>
                        </tr>
                        <tr bgcolor="#CCCCCC" class="Stile13">
                          <td width="56" valign="top" class="Stile4"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/s2pop.htm');" class="Stile631"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 22b</td>
                          <td class="Stile27"><p align="left" class="Stile13">Concessione dell&rsquo;Accesso Privilegiato allo Sportello Telematico dell&rsquo;Export-Import</p></td>
                        </tr>
                      </table>
                      <table width="100%" border="0" cellpadding="1" cellspacing="1" bgcolor="#FFFFCC">
                        <tr bgcolor="#666666">
						<td bgcolor="#000066"><div align="center" class="Stile53 Stile80">3</div></td>
                        <td bordercolor="#FFCCFF" bgcolor="#000066"><div align="center" class="Stile39">Servizi OPZIONALI realizzati dal Servizio-TEIS-Export-Import <br>dell'Inter-Markets Network </div></td>
                      </tr>
                        <tr bgcolor="#666666">
                          <td colspan="2" bgcolor="#000066" class="Stile58"><div align="left" class="Stile64"><span class="Stile20">a sostegno delle richieste dei compratori esteri conDistribuzione Pluri-Canale-Multi-Marchi sotto indicati</span></div></td>
                        </tr>
                        <tr bgcolor="#CCCCCC">
                          <td width="55" valign="top" class="Stile4"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/jolly.htm')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 23</td>
                          <td width="504" class="Stile27"><p align="left" class="Stile13">PROGRAMMA di Distribuzione nel Mercato Principale&ldquo;AA&rdquo;Importatori-Marchi Principali-Parallelo </p></td>
                        </tr>
                        <tr bgcolor="#FFFFFF">
                          <td width="55" valign="top" class="Stile4"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/jolly.htm')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 24</td>
                          <td class="Stile27"><div align="left" class="Stile13">PROGRAMMA di Promo-Multi-Markets&rdquo; A&rdquo;condel Marchio per importatori mercato parallelo </div></td>
                        </tr>
                        <tr bgcolor="#CCCCCC">
                          <td width="55" valign="top" class="Stile4"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/jolly.htm')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 25</td>
                          <td class="Stile27"><p align="left" class="Stile13">PROGRAMMA di Promo-Multi-Markets&rdquo;B 1&rdquo; con Marchio della Grande Distribuzione JOLLY</p></td>
                        </tr>
                        <tr bgcolor="#FFFFFF">
                          <td width="55" valign="top" class="Stile4"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/jolly.htm')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 26</td>
                          <td class="Stile27"><p align="left" class="Stile13">PROGRAMMA di Promo-Multi-Markets &ldquo;B2&rdquo;con Marchio distribuzione di qualit&agrave; &ldquo;Special-Store&rdquo;</p></td>
                        </tr>
                        <tr bgcolor="#CCCCCC">
                          <td width="55" valign="top" class="Stile4"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/jolly.htm')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 27</td>
                          <td class="Stile27"><p align="left" class="Stile13">PROGRAMMA di Promo-Multi-Markets &ldquo;B3&rdquo; con Marchio per catene di Spacci-Discount JOLLY</p></td>
                        </tr>

                        <tr bgcolor="#FFFFFF">
                          <td width="55" valign="top" class="Stile4"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/jolly.htm')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 28</td>
                          <td class="Stile27"><p align="left" class="Stile13">PROGRAM di Promo-Multi-Markets &ldquo;B4&rdquo; con Marchio per Mercato-Incentivi JOLLY-PRO </p></td>
                        </tr>
                        <tr bgcolor="#CCCCCC">
                          <td width="55" valign="top" class="Stile4"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/jolly.htm')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 29</td>
                          <td class="Stile27"><p align="left" class="Stile13">PROGRAM Promo-Multi-Markets &ldquo;B5&rdquo;con Marchio per vendite dirette Multi-Levels;MLV-NEUTRO </p></td>
                        </tr>
                        <tr bgcolor="#FFFFFF">
                          <td width="55" valign="top" class="Stile4"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/jolly.htm')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 30 </td>
                          <td class="Stile27"><p align="left" class="Stile13">PROGRAMMA di Promo-Multi-Markets &ldquo;B6&rdquo;con Marchio Neutro per Televendite &quot;TV-SL&quot;</p></td>
                        </tr>
                        <tr bgcolor="#CCCCCC">
                          <td width="55" valign="top" class="Stile4"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/jolly.htm')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 31</td>
                          <td class="Stile27"><p align="left" class="Stile13">PROGRAM Promo-Multi-Markets &ldquo;B7&rdquo; per il Commercio Elettronico e Vendita per Corrispondenza</p></td>
                        </tr>
                        <tr bgcolor="#000066" class="Stile64">
                          <td width="55" valign="top" class="Stile4"><span class="Stile40 Stile9 Stile63"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/jolly.htm')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 32</span></td>
                          <td class="Stile27"><p align="left" class="Stile40 Stile9 Stile63">PROGETTI SPECIALI realizzati dalla Multi Promo-Markets per Diversificazione-Espansione</p></td>
                        </tr>
                        <tr bgcolor="#CCCCCC" class="Stile13">
                          <td width="55" valign="top" class="Stile4 Stile9 Stile13"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/jolly.htm')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg.33</td>
                          <td class="Stile27"><p align="left" class="Stile9 Stile13">Servizi Acquisti per Conto dei Compratori-Importatori Esteri per prodotti ed impianti</p></td>
                        </tr>
                        <tr bgcolor="#FFFFFF" class="Stile13">
                          <td width="55" valign="top" class="Stile4 Stile9 Stile13"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/jolly.htm')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg.34</td>
                          <td class="Stile27"><p align="left" class="Stile9 Stile13">Servizio Sub Fornitura Con Marchi Terzi - Realizzazioni Speciali - Brevetti-Nuove Invenzioni</p></td>
                        </tr>
                        <tr bgcolor="#CCCCCC" class="Stile13">
                          <td width="55" valign="top" class="Stile4 Stile9 Stile13"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/jolly.htm')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg.35</td>
                          <td class="Stile27"><p align="left" class="Stile9 Stile13">Co-Distribuzione Estera con la partecipazione estera all&rsquo;impianto di Spacci Aziendali </p></td>
                        </tr>
                        <tr bgcolor="#FFFFFF" class="Stile13">
                          <td width="55" valign="top" class="Stile4 Stile9 Stile13"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/jolly.htm')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg.36</td>
                          <td class="Stile27"><p align="left" class="Stile9 Stile13">Realizzazioni Costruzioni Industriali, Civili, Agricoli, Marittimi-Trasfer.-Tecnologici -Investimenti </p></td>
                        </tr>
                        <tr bgcolor="#CCCCCC" class="Stile13">
                          <td width="55" valign="top" class="Stile4 Stile9 Stile13"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/jolly.htm')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg.37</td>
                          <td class="Stile27"><p align="left" class="Stile9 Stile13">Servizi del Terziario per Architettura, Civile, Commerciale d&rsquo;Interni, Engineering - Impiantistica </p></td>
                        </tr>
                        <tr bgcolor="#FFFFFF" class="Stile13">
                          <td width="55" valign="top" class="Stile4 Stile9 Stile13"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/jolly.htm')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg.38</td>
                          <td class="Stile27"><p align="left" class="Stile9 Stile13">Calendario Biennale degli Eventi di Cooperativa Promozionali e partecipazione a Fiere Estere</p></td>
                        </tr>
                        <tr bgcolor="#CCCCCC" class="Stile13">
                          <td width="55" valign="top" class="Stile4"><span class="Stile9 Stile13"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/jolly.htm')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 39a</span></td>
                          <td class="Stile27"><p align="left" class="Stile9 Stile13">Programma di Supporto per la Liquidazione degli Stocks d&rsquo;Inventario - Barter-Counter-Trade</p></td>
                        </tr>
                        <tr bgcolor="#FFFFFF" class="Stile13">
                          <td width="55" valign="top" class="Stile4 Stile9 Stile13"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/jolly.htm')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg. 39b </td>
                          <td class="Stile27"><div align="left" class="Stile9 Stile13">Accreditamento alla Discount Card che consente sconti fino al 45% del POOL Servizi Supporto</div></td>
                        </tr>
                        <tr bgcolor="#CCCCCC" class="Stile13">
                          <td width="55" valign="top" class="Stile4 Stile9 Stile13"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/jolly.htm')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg.40a</td>
                          <td class="Stile27"><div align="left" class="Stile9 Stile13">Accreditamento allo SPORTELLO Telematico&ldquo;EXPORT-IMPORT&rdquo;dell&rsquo;Inter-Markets-Ass.</div></td>
                        </tr>
                        <tr bgcolor="#000066" class="Stile43">
                          <td width="55" valign="middle" class="Stile64"><a href="javascript: apri('https://interfreezone.org/db/SITOEXPORTER/pages/jolly.htm')"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a> pg.40b</td>
                          <td class="Stile27"><div align="left" class="Stile64">Sezione stampa Offerta Export - Certificazioni-Rapporto Esportatore.</div></td>
                        </tr>
                      </table>
					  <div align="center">
					    <p>                            <img src="https://interfreezone.org/db/SITOEXPORTER/pages/imgc7/piedone.jpg">
<span class="Stile8 Stile20"><span class="Stile8"><font class="blinkTX Stile24" face="Arial, Helvetica, sans-serif"><b><br>
a  division of </b></font><font face="Arial, Helvetica, sans-serif"><b><font class="blinkTX Stile24">Inter-Markets-Export-Import-Consortiums-Associates-Network</font></b></font></span></span></p>
			        </div></td>
                </tr>
                <tr bgcolor="#99FFFF">
                  <td colspan="4" bgcolor="#FFFFCC" class="Stile27">
				    <table width="100%" border="5" cellpadding="4" cellspacing="2" bgcolor="#000099">
						  <tr>
						  <TD bgcolor="#b1c2bb"><div align="center">
						    <div align="center" class="Stile17 Stile9 Stile24"><strong><font color="#000066"><span style='mso-bidi-font-size:10.0pt;mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:IT' lang=IT>Un Invito a Visitare le Sale Campionarie per l'Export-Import con la Preview i Video-Conferenza della Presentazione della Documentazione  delle</span> </font></strong></div>
						    <div align="center"><strong><font color="#000066"><span class="Stile26"><span style='font-size:12.0pt; mso-bidi-font-size:10.0pt;mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:IT' lang=IT>OFFERTE </span> EXPORT CERTIFICATE &quot;DECERTOFFEX&quot; <BR>
                              </span> </font></strong><span class="Stile13"><font color="#000066"><strong>finallizzate all'acquisizione di ordini di campionamenti e di ordini prova&nbsp;con pagamenti con Lettere di Credito Irrevocabili&nbsp;vedi Lista delle R I C H I E S T&nbsp;E</strong></font></span><span class="Stile60"><font color="#000066"><strong> - <span
  lang=IT style='font-size:9.0pt;mso-bidi-font-size:10.0pt; mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:IT'> </span></strong></font></span><span class="Stile13"><font color="#000066"><strong><strong> I N T E R N A Z I O N A L I nella Sezione 18 </strong></strong></font><a href="sez18.htm"><img src="https://interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0"></a></span></div>
						  </div></TD>
						  </tr>
						  <TR>
						    <TD height="121" bgcolor="#dcddde"><div align="left" class="Stile13">
                              <div align="justify"><span class="Stile13"><strong></strong><span style="mso-bidi-font-size: 10.0pt; mso-bidi-font-family: Times New Roman; color: navy; mso-ansi-language: IT" lang="IT"><span style="mso-bidi-font-size: 10.0pt; mso-bidi-font-family: Times New Roman; color: navy; mso-ansi-language: IT">Prodotti-finiti e componenti - <span style="mso-bidi-font-size: 10.0pt; mso-bidi-font-family: Times New Roman; color: navy; mso-ansi-language: IT" lang="IT">con l'opzione di: Sub-fornitura-Marchio-Terzi - </span> <span style="mso-bidi-font-size: 10.0pt; mso-bidi-font-family: Times New Roman; color: navy; mso-ansi-language: IT">nonch&egrave; piani di sviluppo a cordo medio termini con l'assistenza Inter-Markets-Associates per le successive fasi di diversidicazioni ed es&egrave;pansioni indicate nella sezione III dei Progetti Speciali&nbsp;</span>e che oncludono anhe le seguemti&nbsp; opportunit&agrave; in Joint-Venture con la partecipazione estera allo svilutpp ANCHE delle attivit&agrave; qui di seguito indicate:&nbsp;Co-Produzio-Nuovi-Prodotti</span> -     4. Attrezzature &amp; Impianti -  5.Materie Primarie-Secondarie<o:p></o:p></span></span> - <span
  lang=EN-AU style='mso-bidi-font-size:10.0pt; mso-bidi-font-family:&quot;Times New Roman&quot;;color:navy;mso-ansi-language:EN-AU'>6.Sto ck-Lot-surplus<o:p></o:p></span></span> -  7. Impianti<o:p> Industriali -   8. Age nzie-Rappresentanze </span></o:p>-  9. Investimenti-esteri<o:p> -  10.Joint Venture<o:p> - <span
  lang=EN-AU style='mso-bidi-font-size:10.0pt; mso-bidi-font-family:&quot;Times New Roman&quot;;color:navy;mso-ansi-language:EN-AU'>11 Co-</span> Distribuzione</span><span
  lang=EN-AU style='mso-bidi-font-size:10.0pt; mso-bidi-font-family:&quot;Times New Roman&quot;;color:navy;mso-ansi-language:EN-AU'><o:p></o:p></span></o:p> -  12. Franchising<o:p></o:p></span></span> -  13.Licenze-Produz<o:p>ione</o:p></span></o:p> -  14.Ricerca Partner<o:p></o:p></span></span> -  15.Con cessioni di Vendita Spacci-Dettaglio<o:p></o:p></span></span> -  16. Forniture per Vendite Via Cataloghii<o:p></o:p></span></span> -   <o:p></o:p> <o:p> <o:p></o:p></span></o:p></span></span></span></span> <o:p> 17. Barter-Scambio Merci<o:p></o:p></span></o:p> -  18. Nuove -Invenzioni-Marchi -  19 For mazione- personale<o:p></o:p></span> -  <span
  style="mso-spacerun: yes">20. &nbsp;</span>Rivitalizzazione-Aree dismesse</span></span></span><o:p></o:p></span></strong></span></div>
					        </div></TD>
						  </TR>
					  </table>
				  <table bgcolor="#000099" border="8" width="100%" bordercolordark="#999999" bordercolorlight="#CCCCCC" cellpadding="5">
                      <tr>
                        <td bgcolor="#B1C3D9" class="Stile15"><div align="center"><strong>COLLEGAMENTI INTERNAZIONALI PER FACILITARE GLI INCONTRI CON OPERATORI ESTERI PRESSO LE SALE DI CONTRATTAZIONE INTERNAZIONALI <br>
              operanti con il sistema degli Accreditamenti Internazionali attraverso <br>
              le Oferte Export certificate &quot;Decertoffex&quot;</strong></div></td>
                      </tr>
                      <tr>
                        <td bgcolor="#DCDDDE" class="Stile15"><div align="justify"><span class="Stile17">Si rinnova l'invito a contattare la delegazione nazionale pi&ugrave; vicina e a richiedere una demo gratu ita -video-presentazione anche via internet chiamando il numero verde internazionale sotto indi cato per l'assistenza grautita sia per la ricerca di nuovi prodotti che per l&rsquo;acquisizione dei prodot ti incluso l&rsquo;Assistenza al coordinamento delle transazioni nell'intero ciclo dell&rsquo;export-import che consentono di poter drasticamente abbattere sia il rischio di impresa che i costi operativi grazie ai programmi di cooperative promotion ottenibili con i contributidi legge a sostegno dell'export e che includono anche i contributi sugli interessi delle Lettere di Credito con garanzie interna zionali con ripagamenti fino a 36 mesi dopo la consegna dei prodotti-impianti-servizi richiesti. </span></div></td>
                      </tr>
                      <tr>
                        <td height="80" bgcolor="#CCCCCC"><p align="center" class="Stile10"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"><b><font color="#00CC33"><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"><b><font color="#00CC33"><span class="Stile13">International telephone numbers with direct connection via Telephone, Fax and Televideo conferencing form27 countries of the International Free Zone Network,</span><br>
                                                        </font></b></font></b></font></b></font></font><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"><b><span class="Stile74">• </span></b></font></b></font></b></font><span class="Stile74">FREE GREEN</span></b></font></b><span class="Stile74">
                                                        <b>LINES NUMBER</b></span></font></b></font> <span class="Stile69"><span class="Stile75"><font face="Arial, Helvetica, sans-serif">•</font></span></span><font size="2"><b><font face="Arial, Helvetica, sans-serif"><br>
                                                        Tel.0041786283699 - Fx. 0041-0916046287</font></b></font></p>                          </td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFFCC" colspan="4"><div align="center"> 
                          <p align="center" class="Stile10 Stile1"><b><span class="txxgree Stile8 Stile9"><font size="4"><font size="2">ITALIAN DELEGATION &quot;IEMAS-Inter</font>-<font size="2">Markets-Associates-</font></font><font size="2">Network&quot;<span class="Stile13"><br>
                            </span></font></span></b><span class="Stile13">Via Alassio, 10-20156-Milan Tel.Import's Desk 00393482626905 Tel 003902 36503719 Fax 003902 99982404</span><b><span class="Stile13"> </font></span></b><span class="Stile13"><b><br>
                            operating the &quot;INTER-MERCHANDISE-MARKETS &amp; TECHNOLOGY EXCHANGE&quot;</b></span><br>
                            <span class="Stile13">Divisione Operativa Autonoma dell'Inter-Markets-Export-Import-Consortiums-Associates-Network con Gestione delle Sale di Contrattazioni-Campionarie e Telematiche con Deposito Certificato di Autenticit&agrave; dei prodotti offerti in Export-Import &quot;Decertoffex&quot; collegate allea sostegno degli Incontri Bi-Settimanali tra Operatori nazionali-Esteri video-colle gati alle corrispondenti delegazioni in 27 paesi esteri della operanti presso i Magazzini Generali &quot;Self-Storage&quot; 
Inter-Porti-Zone-Franche-Centri Direzionali-Borse Mercantili Intrenazionali</span>                          </p>
                          <p align="center" class="Stile10 Stile1"><font size="4"><span class="Stile13"><font size="1"><b><font face="Arial, Helvetica, sans-serif"><span class="Stile55 Stile8"><font size="4"><font size="1"><b><font face="Arial, Helvetica, sans-serif">www.interfreezone.org</font></b></font></font> </span>- e.mail <a href="mailto:info@interfreezone.org"> info@interfreezone.org</a></font></b></font></span></font></p>
                          <p align="center" class="Stile10 Stile1"><font size="4"><span class="Stile8 Stile20"><strong><font face="Arial, Helvetica, sans-serif">INTER-FREE-ZONE-EXPORT &amp; IMPORT MARKETS ASSOCIATES</font> </strong><b><font face="Arial, Helvetica, sans-serif" size="1">&nbsp;<br>
</font></b></span></font><span class="Stile8 Stile66"><b><font face="Arial, Helvetica, sans-serif">                                    P.O.BOX 127&nbsp; - Pt. Via Besso, 5 -CH690 LUGANO 3 SWITZERLAND</font></b> <span class="Stile9">&nbsp;<b><font face="Arial, Helvetica, sans-serif">Tel.0041786283699</font></b></span><b><font face="Arial, Helvetica, sans-serif"> Fx.<b><font face="Arial, Helvetica, sans-serif"><span class="Stile9"><b><font face="Arial, Helvetica, sans-serif">. 0041-0916046287</font></b></span></font></b></font><font face="Arial, Helvetica, sans-serif"><b><font face="Arial, Helvetica, sans-serif"><span class="Stile9"><b><font face="Arial, Helvetica, sans-serif"></font></b></span></font></b></font></b></span></p>
                          <p align="center" class="Stile10 Stile1"><font size="4"><span class="Stile13"><font size="1"><span class="Stile8"><img src="https://interfreezone.org/db/SITOEXPORTER/img/up-menu.gif" width="516">&nbsp;</span></font></span></font></p>
                  </div>
                      <blockquote class="Stile7">
                        <div align="center" class="Stile8 Stile20"><span class="Stile8"><font class="blinkTX Stile24" face="Arial, Helvetica, sans-serif"></font></span></div>
                        <div align="center"></div>
                        <div align="center"></div>
                      </blockquote>
                      <div align="center">
                        <table width="90%" border="1">
                          <tr>
                            <td bgcolor="#9DACBF" class="Stile7"><div align="center" class="Stile52 Stile72"> <font face="Arial, Helvetica, sans-serif">Tele-video-conference
                            Tel-Nr.: 0039 3482626905</font></div></td>
                          </tr>
                          <tr>
                            <td height="20" bgcolor="#FFFFCC" class="Stile7"><font color="#800000" size="6"><marquee>
                              <font face="Arial, Helvetica, sans-serif" size="2"><b><span class="Stile8">UK - Germany - ,Belgium</span> - <span class="Stile8">France</span> - <span class="Stile10">AMERICA</span>: <span class="Stile8">USA</span> - <span class="Stile8">Brazil</span> - <span class="Stile10">AFRICA</span>: <span class="Stile8">South Africa</span> - <span class="Stile10">ASIA</span>: <span class="Stile8">Japan</span> - <span class="Stile8">Hong Kong</span> - <span class="Stile8">Singapore</span> - <span class="Stile8">China</span> - <span class="Stile10">AUSTRALIA</span>: <span class="Stile8">North American Free Zone Central Distribution Center.</span></b></font>
                            </marquee></font></td>
                          </tr>
                        </table>
                        <p>&nbsp;</p>
                    </div></td>
                </tr>
			    </table>						</td>
            </tr>
          </table>
      </div>      </td>
    </tr>
</table>
</tr>
</table>
</div>
</body>
</html>
