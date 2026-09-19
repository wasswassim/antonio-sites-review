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

<head>



<META NAME="GENERATOR" CONTENT="Notepad++">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">

<TITLE><?php echo $testata["RagioneSociale"];?></TITLE>


<style type="text/css">
<!--
.Stile98 {font-size: 12px}
.Stile116 {font-size: 16px}
.Stile119 {font-size: 9px}
.Stile144 {COLOR: #000066; FONT-FAMILY: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold; }
.style3 {COLOR: #F2FFFF; FONT-FAMILY: Arial, Helvetica, sans-serif; font-size: 18px; font-weight: bold; }
.style6 {COLOR: #F2FFFF; FONT-FAMILY: Arial, Helvetica, sans-serif; font-size: 15px; font-weight: bold; }
a {
	text-decoration: none;
	color: #990000;
}
-->
</style>


<STYLE type=text/css>
.Stile7 {
	FONT-SIZE: 8pt
}
.Stile8 {
	COLOR: #000066
}
.Stile9 {
	FONT-FAMILY: Arial, Helvetica, sans-serif
}
.Stile13 {
	FONT-SIZE: 8pt; COLOR: #000066; FONT-FAMILY: Arial, Helvetica, sans-serif
}
.Stile20 {
	FONT-SIZE: 9pt
}
.Stile24 {
	FONT-SIZE: 10pt
}
.Stile52 {
	FONT-WEIGHT: bold; FONT-SIZE: 14px; COLOR: #990000; FONT-FAMILY: Arial, Helvetica, sans-serif
}
.Stile69 {font-weight: bold; color: #AB0101;}
.Stile73 {	color: #AD0101;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10pt;
}
.Stile84 {font-size: 14}
.Stile86 {	font-size: 12px;
	color: #80D6FF;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
.Stile89 {font-size: 14px}
.Stile100 {font-size: 24px}
.Stile101 {COLOR: #000066; FONT-FAMILY: Arial, Helvetica, sans-serif; font-size: 14px; }
.Stile104 {font-size: 18px}
.Stile107 {font-size: 22px}
.Stile108 {
	font-size: 26px;
	color: #FFFF00;
	font-weight: bold;
}
.Stile109 {
	color: #FFFF00;
	font-weight: bold;
}
.Stile110 {font-size: 10px}
.Stile115 {font-size: 14px; font-weight: bold; }
.Stile117 {color: #000033}
.Stile118 {font-size: 18px; color: #000033; }
.Stile120 {COLOR: #000066; FONT-FAMILY: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.Stile121 {font-size: 20px}
.Stile122 {font-size: 12}
.Stile123 {
	FONT-SIZE: 18pt;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	color: #FFFF00;
}
.Stile126 {FONT-SIZE: 9pt; COLOR: #000066; FONT-FAMILY: Arial, Helvetica, sans-serif; }
.Stile127 {font-size: 11px}
.Stile129 {FONT-FAMILY: Arial, Helvetica, sans-serif; font-weight: bold; color: #F7D953; }
.style2 {FONT-FAMILY: Arial, Helvetica, sans-serif; font-weight: bold; color: #F7D953; font-size: 14px; }
.style5 {color: #AD0101; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style10 {font-size: 13px}
.style11 {
	FONT-FAMILY: Arial, Helvetica, sans-serif;
	color: #000066;
	font-weight: bold;
	font-size: 18px;
}
.style12 {FONT-FAMILY: Arial, Helvetica, sans-serif; font-style: italic; font-weight: bold; color: #000066;}
.style13 {color: #990000}
.style15 {color: #006600; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style16 {color: #006600}
.style17 {FONT-SIZE: 16pt; font-weight: bold; font-family: Arial, Helvetica, sans-serif; color: #FFFF00; }
.style18 {FONT-SIZE: 12pt; font-weight: bold; font-family: Arial, Helvetica, sans-serif; color: #FFFF00; }
.style19 {COLOR: #006699; FONT-FAMILY: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; }
</STYLE>

<script language="javascript">

function cart() { //v2.0
  window.open('http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/cart.asp');
}

//-->
</script>
<script language="JavaScript1.2">
function flashit(){
if (!document.all)
return
if (myexample.style.borderColor=="red")
myexample.style.borderColor="#FCDC0C"
else
myexample.style.borderColor="red"
}
setInterval("flashit()", 500)
</script>

<script language="JavaScript1.2">
function flashit2(){
if (!document.all)
return
if (nome1.style.borderColor=="red")
nome1.style.borderColor="#FCDC0C"
else
nome1.style.borderColor="red"
}
setInterval("flashit2()", 500)
</script>

<SCRIPT language=javascript>
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
</SCRIPT>

<SCRIPT language=javascript>
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
</SCRIPT>

<SCRIPT language=javascript>
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
</SCRIPT>

<BODY text=#ece4bd bgColor=#72060b  topMargin=0 onLoad="text('  W e l c o m e   t o   INTERFREEZONE ');" 
rightMargin=0 ?>
<DIV align=center>
<br><TABLE height=95% border=7 cellpadding="15">
  <TBODY>
  <TR>
    <TD height=605 colSpan=2 align="center" valign="middle" bgColor=#FFFFE8>
      <DIV align=center>
       
            
            <span class="Stile119"></span>
            <table width="950" cellspacing="5">
              <tr>
                <td align="center" bgcolor="#F7D953"><table width="100%" cellspacing="1" bgcolor="#990000">
                  <tr>
                    <td width="50%" bgcolor="#000066"><DIV align="center" class="style2">INTER-MARKETS COUNTRY   DELEGATION</DIV></td>
                    <td align="center" bgcolor="#F7D953" class="Stile120"><?php echo $testata["Nazione"];?></td>
                    <td align="center" bgcolor="#000066" class="Stile120"><span class="style2">MARKET SECTOR </span></td>
                    <td align="center" bgcolor="#F7D953" class="Stile120"><?php echo $testata["Settore"];?></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td align="center"><table width="100%" cellspacing="1" bgcolor="#80D6FF">
                  <tr>
                    <td><table width="100%" border="0" cellpadding="2" cellspacing="2" bgcolor="#000066">
                        <tr>
                          <td align="center" valign="top"><table border="0" cellspacing="0" cellpadding="2">
                              <tr>
                                <td align="center" valign="bottom"><img src="./img/certified.jpg" width="82" height="110"></td>
                              </tr>
                                <td align="center"><img src="./img/NAVE-EXPORT.jpg" width="80"></td>
                              </tr>
                          </table></td>
                          <td align="center" valign="top" bgcolor="#000066"><img src="./img/testatamerchandise.jpg" height="150"></td>
                          <td align="center" valign="top" bgcolor="#000066"><table border="0" cellspacing="0" cellpadding="2">
                              <tr>
                                <td><img src="./img/mondoschiacciato.jpg" width="100" height="56"></td>
                              </tr>
                              <tr>
                                <td align="center" valign="middle"><img src="./img/carrello/EUROPA.jpg"></td>
                              </tr>
                          </table></td>
                        </tr>
                    </table></td>
                  </tr>
                </table></td>
              </tr>
              
              <tr>
                <td align="center"><p class="Stile101 Stile104 Stile117 style10"><span class="style11"><b><strong class="Stile86"><a href="http://www.interfreezone.org/db/sitoexporter/pages/SEZ4ORG.html" target="_blank"><img src="./SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></strong></b> INTER-MARKETS-ASSOCIATES </span><span class="style12">is pleased to introduce</span><br>
                  <span class="Stile8"><strong>the Italian Certified Export  Manufacturer indicated below that is now offering in  designated open areas :</strong><br>
                          <strong>Agency Representation, Dealership,  Distributorship &amp; Licensing-Co-Manufacturing &amp; Sub-Contracts 
                Opportunities</strong> <br>
                    with supporting External Financing Opportunities and 
                Supporting Transactional Coordination that cover the entire cycle of&nbsp; 
                Export, Import, Distribution, retailing</span> <span class="Stile8">as well as Co-Manufacturing Joint-Venture 
                Opportunities .The Certified Export Offers are subject&nbsp; to  multiple Exporter&rsquo;s Country Government Grants&nbsp; 
                that will assure <b><strong class="Stile86"><a href="./sitoexporter/pages/contributi_coop.html"><img src="./SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></strong></b> full  Cooperative Promotional Program covering 
                the major channels of distribution &nbsp;</span></p>
                </td>
              </tr>
            </table>
          
            <a href='./SITOEXPORTER/pages/info-form.htm' target="_blank"></a>
            <table width="900" cellpadding="1">
              <tr>
                <td><table cellspacing="0">

                    <tr>
                      <td align="center" valign="middle"><TABLE cellSpacing=1 cellPadding=2>
                          <TBODY>
                            <TR>
                              <TD width="257" colspan="3"></TD>
                            </TR>

                            <TR>
                              <TD align="center"><table width="850" cellpadding="1" bgcolor="#B3CECD">
                                <tr>
                                  <td><table width="100%" cellspacing="0" bgcolor="#DDFFFF">
                                      <tr>
                                        <td rowspan="5" align="center" valign="top"><table cellspacing="5">
                                            <tr>
                                              <td align="center"><img src="./img/NAVE-IMPORT.jpg" width="80"></td>
                                            </tr>
                                            <tr>
                                              <td align="center"><img src="./img/carrello/secure-import.jpg" width="80" height="80"></td>
                                            </tr>
                                            <tr>
                                              <td align="center"><a href="http://www.interfreezone.org/<?php echo $testata["Cod_clie"];?>/gallery.asp" target="_blank"><img src="./img/carrello/coccarda.jpg" width="80" height="80"></a></td>
                                            </tr>
                                            <tr>
                                              <td align="center" class="Stile73"><span class="style5"><font 
            face="Arial, Helvetica, sans-serif"><a href="./SITOEXPORTER/pages/decertoffex.html"><img src="./SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a> </font></span><span class="Stile144"><font 
            face="Arial, Helvetica, sans-serif">Exhibits <br>
                                                Samples<br>
                                                Certification </font></span></td>
                                            </tr>
                                          </table>
                                            <span class="Stile101"><strong><span class="Stile110"><br>
                                          </span></strong></span></td>
                                        <td align="center" bgcolor="#97CBFF" class="style19">Name of Accredited-Appointed Country 
                                          Importer-Distributor-Dealer :</td>
                                        <td rowspan="5" align="center" valign="top"><table width="100%" border="0" cellspacing="6" cellpadding="0">
                                            <tr>
                                              <td align="center"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/gallery.asp" target="_blank"><img src="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/flashing/thumbn/1a.jpg" width="70" height="70" border="0"/></a></td>
                                            </tr>
                                            <tr>
                                              <td align="center"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/gallery.asp" target="_blank"><img src="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/flashing/thumbn/1b.jpg" width="70" height="70" border="0"/></a></td>
                                            </tr>
                                            <tr>
                                              <td align="center"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/gallery.asp" target="_blank"><img src="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/flashing/thumbn/2a.jpg" width="70" height="70" border="0"/></a></td>
                                            </tr>
                                        </table></td>
                                      </tr>
                                      <tr>
                                        <td align="center" class="Stile144"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &ldquo;The oval frame below will be  personalized to the comany name of the Accredited Importer- <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Distributor-Dealers that also has the  benefits to Promote in the local markets the Test and<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sampling-Trial Order Operations with  the support of the Cooperative Promotional Program <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Based on Multi-Brands &amp;  Pluri-Channels of Distribution &ndash; amd wothmore with the benefits <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; of the Exporter Country&rsquo;s Government After-Sale-Promo-Contributions&ldquo;Rebate&rdquo; </p></td>
                                      </tr>
                                      <tr>
                                        <td align="center"><table width="600" height="154" cellspacing="0"  background="../images/banner1.gif">
                                            <tr>
                                              <td valign="middle"><table width="100%" cellspacing="0">
                                                  <tr>
                                                    <td align="center" valign="middle" class="Stile9 Stile108"> Pilot Factory Corner-Store</td>
                                                  </tr>
                                                  <tr>
                                                    <td height="26" align="center" valign="middle" class="style18">Test and Sampling Services </td>
                                                  </tr>
                                              </table></td>
                                            </tr>
                                        </table></td>
                                      </tr>
                                      <tr>
                                        <td align="center" class="Stile126"><strong><span class="Stile122"> The Above  Importer-Distributors-Dealer-Buyer has been accredited by the<br> 
                                          Certified Export  Manufacturer indicated Below
                                        </span></strong></td>
                                      </tr>
                                      <tr>
                                        <td align="center"><table width="451" height="39" border="0" cellpadding="0" cellspacing="0" background="../images/banner2b.gif">
                                          <tr>
                                            <td width="517" align="center" class="style17"><?php echo $testata["RagioneSociale"];?></td>
                                          </tr>
                                        </table></td>
                                      </tr>
                                      <tr>
                                        <td colspan="3" align="center" valign="middle"><TABLE width="100%" cellPadding=2 cellSpacing=1>
                                            <TBODY>
                                              <TR>
                                                <TD width="257" colspan="3"></TD>
                                              </TR>
                                              <TR>
                                                <TD colspan="3" align="center"><table width="100%" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                      <td colspan="3" align="center"><table border="0" cellpadding="2">
                                                          <tr>
														  
                                                            <td class="Stile86"><a href="./c7pg2.php?codicino=<?php echo $_GET['codicino'];?>"><img src="./SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></td>
                                                            <td class="Stile120"> 1 - IEMAS Special BONUS USD 1000 $ for partecipating to Trade Fairs &amp; Accredited Exporters Factory Tours </td>
                                                          </tr>
                                                      </table></td>
                                                    </tr>
                                                    <tr>
                                                      <td width="35%" align="right"><table border="0" cellpadding="2">
                                                          <tr>
                                                            <td width="14"><p align="right"><a href="./webmarketing.php?codicino=<?php echo $_GET['codicino'];?>"><img src="./SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></td>
                                                            <td class="style5"><p align="right" class="Stile144">2 - Introduction &amp; Web-Marketing </td>
                                                          </tr>
                                                      </table></td>
                                                      <td width="24%" align="center"><table border="0" cellpadding="2">
                                                          <tr>
                                                            <td width="14"><a href="./gallery.php?codicino=<?php echo $_GET['codicino'];?>"><img src="./SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a><a href="http://indirizzo"))%>"></a></td>
                                                            <td><span class="Stile144">3 - GALLERY PREVIEW</span></td>
                                                          </tr>
                                                      </table></td>
                                                      <td width="41%"><table width="100%" border="0" cellpadding="2">
                                                          <tr>
                                                            <td align="right" class="Stile86"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/webmark.asp"></a><a href="http://<%=(Recordset1.GetColumnValue("indirizzo"))%>"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></td>
                                                            <td class="Stile144">4 -  Exporter Company Site </td>
                                                          </tr>
                                                      </table></td>
                                                    </tr>
                                                </table></TD>
                                              </TR>
                                              <TR>
                                                <TD align="center"><table width="100%" border="0" cellpadding="0" cellspacing="8" bgcolor="#DDFFFF">
                                                    <tr>
                                                      <td><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#B3CECD">
                                                          <tr>
                                                            <td align="center" class="style3"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                                                                <tr>
                                                                  <td width="40" align="center" bgcolor="#F2FFFF" class="style6"><span class="Stile144">A1</span></td>
                                                                  <td align="left" class="Stile120"><strong> &nbsp;Retailing</strong> &ndash; SPACCIO AZIENDALE - Certified Sampling and Trial Orders Operations -</td>
                                                                </tr>
                                                            </table></td>
                                                          </tr>
                                                          <tr>
                                                            <td align="center"><table width="100%" border="0" cellspacing="5" bgcolor="#F2FFFF">
                                                                <tr>
                                                                  <td><table width="100%" border="0" cellspacing="1">
                                                                      <tr>
                                                                        <td align="center" valign="middle" bgcolor="#F2FFFF" class="Stile144"><a href='<%=(Recordset1.GetColumnValue("carrello"))%>'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></td>
                                                                        <td align="center" valign="middle" bgcolor="#F2FFFF" class="Stile144">1</td>
                                                                        <td align="left" bgcolor="#F2FFFF" class="Stile144"><a href='<%=(Recordset1.GetColumnValue("carrello"))%>'></a>Exporter Factory Store </td>
                                                                      </tr>
                                                                  </table></td>
                                                                  <td><table width="100%" border="0" cellspacing="1">
                                                                      <tr>
                                                                        <td align="center" bgcolor="#F2FFFF" class="Stile144"><a href='http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/cornerstore.asp'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></td>
                                                                        <td align="center" bgcolor="#F2FFFF" class="Stile144">2</td>
                                                                        <td align="left" bgcolor="#F2FFFF" class="Stile144">Corner  Stores </td>
                                                                      </tr>
                                                                  </table></td>
                                                                  <td><table width="100%" border="0" cellspacing="1">
                                                                      <tr>
                                                                        <td align="center" bgcolor="#F2FFFF" class="Stile144"><a href='http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/franchising.asp'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></td>
                                                                        <td align="center" bgcolor="#F2FFFF" class="Stile144">3</td>
                                                                        <td bgcolor="#F2FFFF" class="Stile144">Franchising</td>
                                                                      </tr>
                                                                  </table></td>
                                                                  <td><table width="100%" border="0" cellspacing="1">
                                                                      <tr>
                                                                        <td align="center" bgcolor="#F2FFFF" class="Stile144"><a href='http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/premium.asp'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></td>
                                                                        <td align="center" bgcolor="#F2FFFF" class="Stile144">4</td>
                                                                        <td bgcolor="#F2FFFF" class="Stile144">Premium&nbsp; Job Lots &nbsp;&nbsp;</td>
                                                                      </tr>
                                                                  </table></td>
                                                                  <td align="center" bgcolor="#F2FFFF" class="Stile144"><table width="100%" border="0" cellspacing="1" cellpadding="2">
                                                                      <tr>
                                                                        <td class="Stile144"><a href='http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/auction.asp'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></td>
                                                                        <td class="Stile144">5</td>
                                                                        <td class="Stile144"> Auction  Mart- Tendering</td>
                                                                      </tr>
                                                                  </table></td>
                                                                </tr>
                                                            </table></td>
                                                          </tr>
                                                      </table></td>
                                                    </tr>
                                                    <tr>
                                                      <td><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#B3CECD">
                                                          <tr>
                                                            <td align="center" class="style3"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                                                                <tr>
                                                                  <td width="40" align="center" bgcolor="#F2FFFF" class="style6"><span class="Stile144">A2</span></td>
                                                                  <td align="left" class="Stile98"><p class="Stile120"><strong class="Stile144">&nbsp;Importing &amp; Distributing Activities</strong> &ndash; Certified Products Authentication and  Validation with Support Import Financing Facilitations </p></td>
                                                                </tr>
                                                            </table></td>
                                                          </tr>
                                                          <tr>
                                                            <td align="center"><table width="100%" border="0" cellspacing="5" bgcolor="#F2FFFF">
                                                                <tr>
                                                                  <td><table width="100%" border="0" cellpadding="2" cellspacing="1">
                                                                      <tr>
                                                                        <td align="center" valign="middle" bgcolor="#F2FFFF" class="Stile144"><a href='http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/intro.asp'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></td>
                                                                        <td align="center" valign="middle" bgcolor="#F2FFFF" class="Stile144">1</td>
                                                                        <td bgcolor="#F2FFFF" class="Stile144"><a href='<%=(Recordset1.GetColumnValue("carrello"))%>'></a>Importing</td>
                                                                      </tr>
                                                                  </table></td>
                                                                  <td><table width="100%" border="0" cellpadding="2" cellspacing="1">
                                                                      <tr>
                                                                        <td align="center" bgcolor="#F2FFFF" class="Stile144"><a href='http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/distributorship.asp'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></td>
                                                                        <td align="center" bgcolor="#F2FFFF" class="Stile144">2</td>
                                                                        <td align="left" bgcolor="#F2FFFF" class="Stile144">Distributorship</td>
                                                                      </tr>
                                                                  </table></td>
                                                                  <td><table width="100%" border="0" cellpadding="2" cellspacing="1">
                                                                      <tr>
                                                                        <td align="center" bgcolor="#F2FFFF" class="Stile144"><a href='http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/contracts.asp'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></td>
                                                                        <td align="center" bgcolor="#F2FFFF" class="Stile144">3</td>
                                                                        <td align="left" bgcolor="#F2FFFF" class="Stile144">Contracts</td>
                                                                      </tr>
                                                                  </table></td>
                                                                  <td><table width="100%" border="0" cellpadding="2" cellspacing="1">
                                                                      <tr>
                                                                        <td align="center" bgcolor="#F2FFFF" class="Stile144"><a href='http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/promotional.asp'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a><a href='<%=(Recordset1.GetColumnValue("carrello"))%>'></a></td>
                                                                        <td align="center" bgcolor="#F2FFFF" class="Stile144">4</td>
                                                                        <td align="left" bgcolor="#F2FFFF" class="Stile144">Promotional  Merchandise</td>
                                                                      </tr>
                                                                  </table></td>
                                                                  <td align="center" bgcolor="#F2FFFF" class="Stile144"><table width="100%" border="0" cellspacing="1" cellpadding="2">
                                                                      <tr>
                                                                        <td class="Stile144"><a href='http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/special.asp'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a><a href='<%=(Recordset1.GetColumnValue("carrello"))%>'></a></td>
                                                                        <td class="Stile144">5</td>
                                                                        <td align="left" class="Stile144">Special  Job Lot Surplus</td>
                                                                      </tr>
                                                                  </table></td>
                                                                </tr>
                                                            </table></td>
                                                          </tr>
                                                      </table></td>
                                                    </tr>
                                                    <tr>
                                                      <td align="center"><table width="100%" border="0" cellspacing="1" cellpadding="0">
                                                          <tr>
                                                            <td align="center"><table border="0" cellpadding="2">
                                                                <tr>
                                                                  <td width="14" valign="middle"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/pgcat1.asp"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></td>
                                                                  <td align="center" class="Stile86"><div align="left" class="Stile144"><font 
            face="Arial, Helvetica, sans-serif">A3 Exporter Bulletin-Newsletters</font></div></td>
                                                                </tr>
                                                            </table></td>
                                                            <td align="center"><table border="0" cellpadding="2">
                                                                <tr>
                                                                  <td width="14" valign="middle"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/registro.asp"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></td>
                                                                  <td align="center" class="Stile86"><div align="left" class="Stile144"><font 
            face="Arial, Helvetica, sans-serif">A4 Exporter
                                                                    Register-Directory</font></div></td>
                                                                </tr>
                                                            </table></td>
                                                            <td align="center"><table border="0" cellpadding="2">
                                                                <tr>
                                                                  <td width="14" align="right"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/copromo.asp"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></td>
                                                                  <td align="center" class="Stile86"><div align="left" class="Stile144">A5 Cooperative Promotion - Multi-Channels of Distribution </div></td>
                                                                </tr>
                                                            </table></td>
                                                          </tr>
                                                      </table></td>
                                                    </tr>
                                                </table></TD>
                                              </TR>
                                            </TBODY>
                                        </TABLE></td>
                                      </tr>
                                  </table></td>
                                </tr>
                              </table>
                              <a href='http://www.interfreezone.org/db/SITOEXPORTER/pages/info-form.htm' target="_blank"><strong><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/img/freccia500grey.png" width="500" height="37" border="0"></strong></a></TD>
                            </TR>
                            <TR>
                              <TD align="center"><span class="style15"> the above Certified Export Offers are 
                                    provided&nbsp; with Combined IMPORTERS  SUPPORTING SERVICES <br>
                                by the&nbsp;<strong>POOL of</strong> 
                              Inter-Markets-Consultants-Associates</span></TD>
                            </TR>
                            <TR>
                              <TD align="center"><table cellpadding="2" cellspacing="2">
                                  <tr>
                                    <td align="center">
                                    <table width="100%" border="0" cellspacing="1" cellpadding="0" height="24">
                                      <tr>
                                        <td align="center" height="23"><table border="0" cellpadding="2">
                                          <tr>
                                            <td width="14"><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/imp_service.html"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></td>
                                            <td align="center" class="Stile86"><div align="left" class="style5"><span class="Stile98 style16"><strong>B1 Importing Supporting Services - Multi Diversified Group Procurement  &nbsp;&nbsp;&nbsp; </strong></span></div></td>
                                          </tr>
                                        </table></td>
                                        <td align="center" height="23"><table border="0" cellpadding="2">
                                          <tr>
                                            <td width="14"><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/sez4org.html"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></td>
                                            <td align="center" class="Stile86"><div align="left" class="style5"><span class="Stile98 style16"><strong>B2 Multi-Sectors Buying Group Agency Services &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></span></div></td>
                                          </tr>
                                        </table>                                          </td>
                                      </tr>
                                    </table>                                    </td>
                                  </tr>
                                  <tr bgcolor="#006600">
                                    <td bgcolor="#C4FF88"><table width="100%" border="0" cellpadding="0" cellspacing="8" bgcolor="#E4FFCA">

                                        <tr>
                                          <td><table width="100%" border="0" cellpadding="0" cellspacing="1" bordercolor="#C4FF88" bgcolor="#C4FF88">
                                            <tr bgcolor="#C4FF88">
                                              <td align="center" class="style3"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                                                  <tr>
                                                    <td width="40" align="center" bgcolor="#EFFFDF" class="style6"><span class="Stile144"><a href='http://www.interfreezone.org/KUWAIT%2Dexhibits/special-project.html'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a> B3</span></td>
                                                    <td align="left" class="Stile98"><p class="style16"><strong>Joint-ventures &ndash; Financing Facilitations </strong>with <strong>Government  Grants </strong>for <strong>Cooperative Promotional  Support </strong></p></td>
                                                  </tr>
                                              </table></td>
                                            </tr>
                                            <tr>
                                              <td align="center"><table width="100%" border="0" cellspacing="5" bgcolor="#EFFFDF">
                                                  <tr>
                                                    <td><table width="100%" border="0" cellpadding="2" cellspacing="1">
                                                        <tr>
                                                          <td align="center" valign="middle" bgcolor="#EFFFDF" class="Stile144"><a href='http://www.interfreezone.org/db/SITOEXPORTER/pages/info-form.htm'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></td>
                                                          <td align="center" valign="middle" bgcolor="#EFFFDF" class="Stile144">1</td>
                                                          <td bgcolor="#EFFFDF" class="Stile144"><a href='<%=(Recordset1.GetColumnValue("carrello"))%>'></a><strong>Joint-V. Retailing&nbsp; </strong></td>
                                                        </tr>
                                                    </table></td>
                                                    <td><table width="100%" border="0" cellpadding="2" cellspacing="1">
                                                        <tr>
                                                          <td align="center" bgcolor="#EFFFDF" class="Stile144"><a href='http://www.interfreezone.org/db/SITOEXPORTER/pages/info-form.htm'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a><a href='http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/intro.asp'></a></td>
                                                          <td align="center" bgcolor="#EFFFDF" class="Stile144">2</td>
                                                          <td align="left" bgcolor="#EFFFDF" class="Stile144"><strong> Co-Joint V. Distribution&nbsp; </strong></td>
                                                        </tr>
                                                    </table></td>
                                                    <td><table width="100%" border="0" cellpadding="2" cellspacing="1">
                                                        <tr>
                                                          <td align="center" bgcolor="#EFFFDF" class="Stile144"><a href='http://www.interfreezone.org/db/SITOEXPORTER/pages/info-form.htm'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a><a href='http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/intro.asp'></a></td>
                                                          <td align="center" bgcolor="#EFFFDF" class="Stile144">3</td>
                                                          <td align="left" bgcolor="#EFFFDF" class="Stile144"><strong> Co-Joint V.<br>
                                                            Manufacturing&nbsp; </strong></td>
                                                        </tr>
                                                    </table></td>
                                                    <td><table width="100%" border="0" cellpadding="2" cellspacing="1">
                                                        <tr>
                                                          <td align="center" bgcolor="#EFFFDF" class="Stile144"><a href='http://www.interfreezone.org/db/SITOEXPORTER/pages/info-form.htm'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a><a href='http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/intro.asp'></a><a href='<%=(Recordset1.GetColumnValue("carrello"))%>'></a></td>
                                                          <td align="center" bgcolor="#EFFFDF" class="Stile144">4</td>
                                                          <td align="left" bgcolor="#EFFFDF" class="Stile144"><strong>&nbsp;Sub-Contracts&nbsp; </strong></td>
                                                        </tr>
                                                    </table></td>
                                                    <td align="center" bgcolor="#EFFFDF" class="Stile144"><table width="100%" border="0" cellspacing="1" cellpadding="2">
                                                        <tr>
                                                          <td class="Stile144"><a href='http://www.interfreezone.org/db/SITOEXPORTER/pages/info-form.htm'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a><a href='http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/intro.asp'></a><a href='<%=(Recordset1.GetColumnValue("carrello"))%>'></a></td>
                                                          <td class="Stile144">5</td>
                                                          <td align="left" class="Stile144"><strong> Industrial Plants&nbsp; </strong></td>
                                                        </tr>
                                                    </table></td>
                                                    <td align="center" bgcolor="#EFFFDF" class="Stile144"><table width="100%" border="0" cellspacing="1" cellpadding="2">
                                                        <tr>
                                                          <td class="Stile144"><a href='http://www.interfreezone.org/db/SITOEXPORTER/pages/info-form.htm'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a><a href='http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/intro.asp'></a><a href='<%=(Recordset1.GetColumnValue("carrello"))%>'></a></td>
                                                          <td class="Stile144">6</td>
                                                          <td align="left" class="Stile144"><strong>Licensing Training&nbsp; </strong></td>
                                                        </tr>
                                                    </table></td>
                                                    <td align="center" bgcolor="#EFFFDF" class="Stile144"><table width="100%" border="0" cellspacing="1" cellpadding="2">
                                                        <tr>
                                                          <td class="Stile144"><a href='http://www.interfreezone.org/db/SITOEXPORTER/pages/info-form.htm'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a><a href='http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/intro.asp'></a><a href='<%=(Recordset1.GetColumnValue("carrello"))%>'></a></td>
                                                          <td class="Stile144">7</td>
                                                          <td align="left" class="Stile144"><strong>&nbsp; Raw Materials&nbsp;&nbsp;</strong></td>
                                                        </tr>
                                                    </table></td>
                                                    <td align="center" bgcolor="#EFFFDF" class="Stile144"><table width="100%" border="0" cellspacing="1" cellpadding="2">
                                                        <tr>
                                                          <td class="Stile144"><a href='http://www.interfreezone.org/db/SITOEXPORTER/pages/info-form.htm'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a><a href='http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/intro.asp'></a><a href='<%=(Recordset1.GetColumnValue("carrello"))%>'></a></td>
                                                          <td class="Stile144">8</td>
                                                          <td align="left" class="Stile144"><strong> Projects Financing&nbsp;</strong></td>
                                                        </tr>
                                                    </table></td>
                                                  </tr>
                                              </table></td>
                                            </tr>
                                          </table></td>
                                        </tr>
                                        <tr>
                                          <td><table width="100%" border="0" cellpadding="0" cellspacing="1" bordercolor="#C4FF88" bgcolor="#C4FF88">
                                            <tr bgcolor="#006600">
                                              <td align="center" bgcolor="#C4FF88" class="style3"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                                                  <tr>
                                                    <td width="40" align="center" bgcolor="#EFFFDF" class="style6"><span class="Stile144">C</span></td>
                                                    <td align="left" class="Stile98"><p align="center" class="style16"> <strong>Inter-Markets-Export-Import Brokers 
                                                      - Outsorcing 
                                                      Professional Associates Consultants -  Coordinating 
                                                      the Ex-Import Cycle Origin-Destination </strong></p></td>
                                                  </tr>
                                              </table></td>
                                            </tr>
                                            <tr>
                                              <td align="center"><table width="100%" border="0" cellspacing="5" bgcolor="#EFFFDF">
                                                  <tr>
                                                    <td><table width="100%" border="0" cellspacing="1">
                                                        <tr>
                                                          <td align="center" valign="middle" bgcolor="#EFFFDF" class="Stile144"><a href='http://www.inter-markets-secure-procurement.biz/interfreezone/ac/ac-cv-index.html'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></td>
                                                          <td align="center" valign="middle" bgcolor="#EFFFDF" class="Stile144">1</td>
                                                          <td align="left" bgcolor="#EFFFDF" class="Stile144"><strong><strong>Sales </strong>Promotion <br>
                                                            Contacts&nbsp;Manager </strong></td>
                                                        </tr>
                                                    </table></td>
                                                    <td><table width="100%" border="0" cellspacing="1">
                                                        <tr>
                                                          <td align="center" bgcolor="#EFFFDF" class="Stile144"><a href='http://www.interfreezone.org/db/SITOEXPORTER/pages/teleporto/teleport.htm'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></td>
                                                          <td align="center" bgcolor="#EFFFDF" class="Stile144">2</td>
                                                          <td align="left" bgcolor="#EFFFDF" class="Stile144"><strong>Web-Video-Meeting <br>
                                                            Multi-Point Webcam</strong></td>
                                                        </tr>
                                                    </table></td>
                                                    <td><table width="100%" border="0" cellspacing="1">
                                                        <tr>
                                                          <td align="center" bgcolor="#EFFFDF" class="Stile144"><a href="HTTP://WWW.INTERFREEZONE.ORG/db/sitoexporter/pages/pool.htm"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></strong></a></td>
                                                          <td align="center" bgcolor="#EFFFDF" class="Stile144">3</td>
                                                          <td align="left" bgcolor="#EFFFDF" class="Stile144"><strong>Quotations &amp; <br>
                                                            Administration</strong></td>
                                                        </tr>
                                                    </table></td>
                                                    <td><table width="100%" border="0" cellspacing="1">
                                                        <tr>
                                                          <td align="center" bgcolor="#EFFFDF" class="Stile144"><a href="HTTP://WWW.INTERFREEZONE.ORG/db/sitoexporter/pages/pool.htm"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></strong></a></td>
                                                          <td align="center" bgcolor="#EFFFDF" class="Stile144">4</td>
                                                          <td align="left" bgcolor="#EFFFDF" class="Stile144"><strong>Quality Control-Expediting&nbsp; </strong></td>
                                                        </tr>
                                                    </table></td>
                                                    <td align="center" bgcolor="#EFFFDF" class="Stile144"><table width="100%" border="0" cellspacing="1" cellpadding="2">
                                                        <tr>
                                                          <td class="Stile144"><a href="HTTP://WWW.INTERFREEZONE.ORG/db/sitoexporter/pages/pool.htm"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></strong></a></td>
                                                          <td class="Stile144">5</td>
                                                          <td class="Stile144"><strong>Warehousing<br>
                                                            Self-Storage</strong></td>
                                                        </tr>
                                                    </table></td>
                                                  </tr>
                                                  <tr>
                                                    <td><table width="100%" border="0" cellspacing="1">
                                                        <tr>
                                                          <td align="center" valign="middle" bgcolor="#EFFFDF" class="Stile144"><a href='http://www.interfreezone.org/db/SITOEXPORTER/pages/decertoffex.html'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></td>
                                                          <td align="center" valign="middle" bgcolor="#EFFFDF" class="Stile144">6</td>
                                                          <td align="left" bgcolor="#EFFFDF" class="Stile144"><strong>Products &amp; Documents</strong><strong> <br>
                                                            Authentication-Certification</strong></td>
                                                        </tr>
                                                    </table></td>
                                                    <td><table width="100%" border="0" cellspacing="1">
                                                        <tr>
                                                          <td align="center" bgcolor="#EFFFDF" class="Stile144"><a href="HTTP://WWW.INTERFREEZONE.ORG/db/sitoexporter/pages/pool.htm"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></strong></a></td>
                                                          <td align="center" bgcolor="#EFFFDF" class="Stile144">7</td>
                                                          <td align="left" bgcolor="#EFFFDF" class="Stile144"><p><strong>Pool Shipping<br>
                                                            Consolidation</strong></p></td>
                                                        </tr>
                                                    </table></td>
                                                    <td><table width="100%" border="0" cellspacing="1">
                                                        <tr>
                                                          <td align="center" bgcolor="#EFFFDF" class="Stile144"><a href="http://www.inter-markets-secure-procurement.biz/interfreezone/db/sitoexporter/pages/pool.htm"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></strong></a></td>
                                                          <td align="center" bgcolor="#EFFFDF" class="Stile144">8</td>
                                                          <td align="left" bgcolor="#EFFFDF" class="Stile144"><p><strong>Customs Clearance<br>
                                                            Services</strong><strong>&nbsp; </strong></p></td>
                                                        </tr>
                                                    </table></td>
                                                    <td><table width="100%" border="0" cellspacing="1">
                                                        <tr>
                                                          <td align="center" bgcolor="#EFFFDF" class="Stile144"><a href="HTTP://WWW.INTERFREEZONE.ORG/db/sitoexporter/pages/pool.htm"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></strong></a></td>
                                                          <td align="center" bgcolor="#EFFFDF" class="Stile144">9</td>
                                                          <td align="left" bgcolor="#EFFFDF" class="Stile144"><strong>Logistics &amp; Distribution&nbsp; </strong></td>
                                                        </tr>
                                                    </table></td>
                                                    <td align="center" class="Stile144"><table width="100%" border="0" cellspacing="1" cellpadding="2">
                                                        <tr>
                                                          <td class="Stile144"><a href='http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/copromo.asp'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></td>
                                                          <td class="Stile144">10</td>
                                                          <td class="Stile144"><strong>After-Sales <br>
                                                            Coopromotion </strong></td>
                                                        </tr>
                                                    </table></td>
                                                  </tr>
                                              </table></td>
                                            </tr>
                                          </table></td>
                                        </tr>

                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td align="center"><table width="100%" border="0" cellspacing="11" cellpadding="2">
                                      <tr>
                                        <td bgcolor="#B3CECD"><table width="100%" border="0" cellpadding="0" cellspacing="1" bordercolor="#C4FF88">
                                          <tr>
                                            <td align="center" class="style3"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                                                <tr>
                                                  <td width="40" align="center" bgcolor="#EFFFDF" class="style6"><span class="Stile144">D</span></td>
                                                  <td align="left" class="Stile98"><p align="center" class="Stile117 Stile8"> <strong>Inter-Markets-Export-Import Brokers 
                                                    - Outsorcing 
                                                    Professional Associates Consultants -  Coordinating 
                                                    the Ex-Import Cycle Origin-Destination </strong></p></td>
                                                </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td align="center"><table width="100%" border="0" cellpadding="0" cellspacing="10" bgcolor="#DDFFFF">
                                              <tr>
                                                <td><table width="100%" border=0>
                                                    <tbody>
                                                      <tr>
                                                        <td  bgcolor=#B3CECD><div align=center class=Stile144 stile96><font 
            face="Arial, Helvetica, sans-serif"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/exdesk.asp"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a>D1. RESTRICTED &nbsp;Info-Desk - E X P O R T E R  &nbsp; Order Processing</font></div></td>
                                                      </tr>
                                                    </tbody>
                                                </table></td>
                                                <td><table width="100%" border=0>
                                                    <tbody>
                                                      <tr>
                                                        <td  bgcolor=#B3CECD class="Stile144"><div align=center class=Stile144 stile96><font 
            face="Arial, Helvetica, sans-serif"><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/imp_service.html"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a>D2. RESTRICTED <font 
            face="Arial, Helvetica, sans-serif"> Info-Desk </font>- I M P O R T E R  &nbsp; Order Tracing </font></div></td>
                                                      </tr>
                                                    </tbody>
                                                </table></td>
                                              </tr>
                                            </table></td>
                                          </tr>
                                        </table>                                        </td>
                                      </tr>
                                    </table>                                    </td>
                                  </tr>

                                  <tr>
                                    <td align="center" class="Stile52"><font 
            face="Arial, Helvetica, sans-serif"><a href="http://www.inter-markets.org" target="_blank"> <a href='http://www.inter-markets-secure-procurement.biz/interfreezone/ac/ac-cv-index.html' target="_blank"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a> <a href="http://www.inter-markets.org" target="_blank"> Management Team </a>- <a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/pool.htm"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a></font> Pool Supporting Services -<a href="http://www.inter-markets.org" target="_blank"><font 
            face="Arial, Helvetica, sans-serif"><a href="HTTP://www.inter-markets.org"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a><a href="HTTP://www.inter-markets.org">www.inter-markets.org</a></td>
                                  </tr>
                                  <tr>
                                    <td align="center"><table width="450" border="0" cellspacing="3">
                                      <tr>
                                        <td width="6" align="center"><div align="center"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/IMMAGINI BANDIERE/image008.gif" width="20" height="20" border="0" /></a></div></td>
                                        <td width="6" align="center">&nbsp;</td>
                                        <td width="6" align="center"><div align="center"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/IMMAGINI BANDIERE/image004.gif" width="20" height="20" border="0" /></a></div></td>
                                        <td width="20">&nbsp;</td>
                                        <td width="600"><div align="right">
                                            <table width="10" border="0" cellspacing="5">
                                              <tr>
                                                <td><div align="center"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/IMMAGINI BANDIERE/image010.gif" width="20" height="20" border="0"></a></div></td>
                                                <td><div align="center"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/IMMAGINI BANDIERE/image006.gif" width="20" height="20" border="0"></a></div></td>
                                                <td><div align="center"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/IMMAGINI BANDIERE/image002.gif" width="20" height="20" border="0"></a></div></td>
                                                <td><div align="center"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/IMMAGINI BANDIERE/image005.gif" width="20" height="20" border="0"></a></div></td>
                                                <td><div align="center"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/IMMAGINI BANDIERE/image014.gif" width="20" height="20" border="0"></a></div></td>
                                                <td><div align="center"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/IMMAGINI BANDIERE/image012.gif" width="20" height="20" border="0"></a></div></td>
                                                <td><div align="center"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/IMMAGINI BANDIERE/image009.gif" width="20" height="20" border="0"></a></div></td>
                                                <td><div align="center"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/IMMAGINI BANDIERE/image011.gif" width="20" height="20" border="0"></a></div></td>
                                                <td><div align="center"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/IMMAGINI BANDIERE/image013.gif" width="20" height="20" border="0"></a></div></td>
                                                <td><div align="center"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/IMMAGINI BANDIERE/image007.gif" width="20" height="20" border="0"></a></div></td>
                                                <td><div align="center"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/IMMAGINI BANDIERE/image003.gif" width="20" height="20" border="0"></a></div></td>
                                                <td><div align="center"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>"><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/IMMAGINI BANDIERE/image001.gif" width="20" height="20" border="0"></a></div></td>
                                              </tr>
                                            </table>
                                        </div>
                                            <div align="center"></div></td>
                                      </tr>
                                    </table></td>
                                  </tr>
                                  <tr>
                                    <td align="center"><span class="Stile126"><span class="style13"><font face="Arial, Helvetica, sans-serif"><span class="style5">
                                    <i></i><span style="font-weight: 400"><i>Inter-Markets Contacts Tele-video-conferences Network 
                                    : </i>Tel 0039 348262690</span></span> : UK - Germany - Belgium - France - AMERICA: USA - Brazil <br>
AFRICA: South 
                                                  Africa - ASIA: Japan - Hong Kong - Singapore - China - AUSTRALIA: North American Free Zone Central Distribution 
                                    Center</font></span></span></td>
                                  </tr>

                              </table></TD>
                            </TR>
                          </TBODY>
                      </TABLE></td>
                    </tr>
                </table></td>
              </tr>
            </table>
            <br>
      </DIV></TD></TR></TBODY></TABLE>
</DIV></TD></TR></TABLE></TR></TABLE>
<% 
Recordset1.Close();
 %>
</BODY></HTML>