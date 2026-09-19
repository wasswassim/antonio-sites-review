<?php
include("../include/interfree_dbinc.php");
include("../include/dbfix-php.php");


$db=mysql_connect($dbhost,$dbuser,$dbpasswd) or die ("Errore durante la connessione al database");

$sql= "SELECT * FROM `ragionesociale` where `Codice` = '".$_GET["Codice"]."';";
mysql_select_db($dbname);
$result=mysql_query($sql);


$testata=mysql_fetch_array($result);

?>
<HTML>
<style type="text/css">
<!--
.Stile144 {COLOR: #000066; FONT-FAMILY: Arial, Helvetica, sans-serif; font-size: 11px; font-weight: bold; }
.style32 {font-size: 11px}
.Stile1061 {color: #000066; font-family: Arial, Helvetica, sans-serif; font-size: 10pt; font-weight: bold; }
.Stile10red {font-size: 11pt;
	color: #990000;
	font-weight: bold;
}
.Stile136 {color: #FFFFCC}
.style37 {color: #990000}
.submit {
	background-image: url(http://www.interfreezone.org/db/img/carrello/GALLERY.jpg);
	height: 72px;
	width: 180px;
}
.Stile111 {font-family: Arial, Helvetica, sans-serif; color: #000066; font-weight: bold; font-size: 14px; }
.Stile214 {color: #FFCC00}
.Stile220 {font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #FFFFCC;
	font-size: 23px;
}
.style68 {font-size: 33px}
.style69 {font-size: 12px; color: #FFFFCC; }
.Stile101 {COLOR: #000066; FONT-FAMILY: Arial, Helvetica, sans-serif; font-size: 14px; }
.Stile108 {	font-size: 26px;
	color: #FFFF00;
	font-weight: bold;
}
.Stile1101 {font-size: 10px}
.Stile120 {COLOR: #000066; FONT-FAMILY: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.Stile122 {font-size: 12}
.Stile1261 {FONT-SIZE: 9pt; COLOR: #000066; FONT-FAMILY: Arial, Helvetica, sans-serif; }
.Stile73 {color: #AD0101;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10pt;
}
.Stile861 {font-size: 12px;
	color: #80D6FF;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
.Stile98 {font-size: 12px}
.style17 {FONT-SIZE: 18pt; font-weight: bold; font-family: Arial, Helvetica, sans-serif; color: #FFFF00; }
.style18 {FONT-SIZE: 12pt; font-weight: bold; font-family: Arial, Helvetica, sans-serif; color: #FFFF00; }
.style5 {color: #AD0101; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style72 {font-size: 38px}
-->
</style>
<HEAD><TITLE>GIOIELLI DI K - ITALIAN JEWELLERY</TITLE>
<META http-equiv=Content-Type content="text/html; charset=windows-1250">
<STYLE type=text/css>
.Stile9 {
	FONT-FAMILY: Arial, Helvetica, sans-serif
}
.Stile69 {font-weight: bold; color: #AB0101;}
.Stile100 {font-size: 14px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; color: #FFFFCC; }
.Stile106 {	font-family: Arial, Helvetica, sans-serif;
	color: #FFFF00;
}
.Stile82 {color: #000066; font-weight: bold; font-family: Arial, Helvetica, sans-serif;}
.Stile90 {font-size: 36px}
.Stile109 {font-size: 12px}
.Stile85 {	font-size: 18px;
	font-style: italic;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #000066;
}
.Stile86 {	font-size: 16px;
	font-style: italic;
}
.Stile87 {font-size: 18}
.Stile89 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #FFCC00; }
.Stile94 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #000099; font-size: 16px; }
.Stile96 {font-size: 28px}
.Stile110 {COLOR: #000066; FONT-FAMILY: Arial, Helvetica, sans-serif; font-size: 12px; }
.Stile113 {font-size: 36px; font-weight: bold; }
.Stile119 {font-size: 16px}
.Stile123 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #000066; font-size: 23px;}
.Stile124 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #000066; font-size: 18px;}
.Stile125 {
	font-size: 14px;
	font-weight: bold;
}
.Stile126 {font-size: 14px; }
.Stile127 {font-size: 18px}
.Stile105 {color: #FFFFFF;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14px;
}
.Stile107 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #FFCC00; font-size: 36px; }
.Stile215 {color: #FFFFCC}
.style31 {font-size: 12px}
.Stile221 {FONT-FAMILY: Arial, Helvetica, sans-serif; font-size: 24px; color: #FFFF00; font-weight: bold; }
.Stile11 {font-size: 12}
.Stile13 {font-size: 12px; color: #000066; }
.Stile28 {color: #000033}
.Stile7 {	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Stile223 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #FFCC00; font-size: 16px; }
.Stile224 {font-size: 16}
.Stile225 {font-size: 24px}
.style36 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #FFFFCC; font-size: 16px; }
.style71 {color: #009900}
</STYLE>

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

<META content="MSHTML 6.00.2900.2802" name=GENERATOR></HEAD>
<BODY text=#ece4bd vLink=#000066 aLink=#990000 link=#000066 bgColor=#72060b 
topMargin=10 onLoad="text('  W e l c o m e   t o   E U R O P A R K ');" 
rightMargin=0 ?>
<form action="carrello2.asp" method="post">
<DIV align=center>
<TABLE width="600" border=7>
  <TBODY>
  <TR>
    <TD height=605 colSpan=2 align="center" bgColor=#ffff99>
      <DIV align=center>
        <table width="100%" border="0">
          <tr>
            <td colspan="3"><table width="100%" border="0" cellspacing="8">
              <tr>
                <td colspan="3" bgcolor="#FFCC00"><table width="100%" cellspacing="2" bgcolor="#0066CC">
                    <tr>
                      <td width="50%" bgcolor="#000066"><DIV align="center" class="Stile100">INTER-MARKETS COUNTRY   DELEGATION</DIV></td>
                      <td align="center" bgcolor="#F7D953" class="Stile111"><%=(Recordset1.GetColumnValue("Nazione"))%></td>
                      <td align="center" bgcolor="#000066" class="Stile100">MARKET SECTOR </td>
                      <td align="center" bgcolor="#F7D953" class="Stile111"><%=(Recordset1.GetColumnValue("Settore"))%></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td width="58%" align="center" class="Stile124">Proudly Introduce the</td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td width="58%" bgcolor="#FFFF99"><div align="center">
              <table width="95%" border="0" bgcolor="#FFCC00">
                <tr>
                  <td width="58%" bgcolor="#FFCC00"><div align="center">
                      <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td align="center" nowrap="nowrap" bgcolor="#000066"><table width="100%" cellspacing="0" cellpadding="0">
                              <tr>
                                <td align="center" valign="middle" class="Stile100"><span class="Stile90 Stile96 style68"><span class="style31 Stile215">proudly introduce the <br>
                                  Certified Exporter Factory Outlet</span></span></td>
                                <td align="center" valign="middle" class="Stile87"><span class="Stile107 style72">FACTORY STORE</span></td>
                                <td align="center" valign="middle" class="Stile100"><span class="style69">for Foreign Buyers <br>
                                  Testing- Sampling Services</span></td>
                              </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td align="center" nowrap="nowrap" bgcolor="#FFCC00"><table width="100%" cellpadding="1" bgcolor="#FFCC00">
                            <tr>
                              <td><table width="100%" cellspacing="0" bgcolor="#FFFFCC">
                                  <tr>
                                    <td rowspan="5" align="center" valign="top"><table cellspacing="5">
                                        <tr>
                                          <td align="center"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/db/img/NAVE-IMPORT.jpg" width="80"></td>
                                        </tr>
                                        <tr>
                                          <td align="center"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/db/img/carrello/secure-import.jpg" width="80" height="80"></td>
                                        </tr>
                                        <tr>
                                          <td align="center"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/gallery.asp" target="_blank"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/db/img/carrello/coccarda.jpg" width="80" height="80"></a></td>
                                        </tr>
                                        <tr>
                                          <td align="center" class="Stile73"><span class="style5"><font 
            face="Arial, Helvetica, sans-serif"><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/decertoffex.html"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball2.gif" width="10" height="10" border="0"></a> </font></span><span class="Stile144"><font 
            face="Arial, Helvetica, sans-serif">Exhibits <br>
                                            Samples<br>
                                            Certification </font></span></td>
                                        </tr>
                                      </table>
                                        <span class="Stile101"><strong><span class="Stile1101"><br>
                                      </span></strong></span></td>
                                    <td align="center" bgcolor="#FFCC00" class="Stile111 style37">Name of Accredited-Appointed Country 
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
                                    <td align="center"><table width="600" height="154" cellspacing="0" background="http://www.interfreezone.org/db/img/banner1.gif">
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
                                    <td align="center" class="Stile1261"><strong><span class="Stile122"> The Above  Importer-Distributors-Dealer-Buyer has been accredited by the<br>
                                      Certified Export  Manufacturer indicated Below </span></strong></td>
                                  </tr>
                                  <tr>
                                    <td align="center"><table width="451" height="39" border="0" cellpadding="0" cellspacing="0" background="http://www.interfreezone.org/db/img/banner2b.gif">
                                        <tr>
                                          <td width="517" align="center" class="style17"><%=(Recordset1.GetColumnValue("Cli_C7"))%></td>
                                        </tr>
                                      </table>
                                        <br></td>
                                  </tr>
                              </table></td>
                            </tr>
                          </table></td>
                        </tr>
                      </table>
                  </div></td>
                </tr>
              </table>
            </div></td>
          </tr>
        </table>
        
        <table width="100%" border="0">

          <tr>
            <td align="center" class="Stile110">
                  <div class="Stile113">
                <div align="center" class="Stile13"><span class="Stile127">
                 Welcome to visit the Italian Certified Factory Store of<br>
                  </span>
                  <table width="80%" border="0" cellspacing="5" bgcolor="#000066">
                    <tr>
                      <td ><div align="center">
                          <table width="100%" border="4" cellspacing="1">
                            <tr>
                              <td bgcolor="#FFCC00"><div align="center" class="Stile100">
                                <p><span class="style37 Stile11 Stile28"> Foreign Buyers Testing &amp; Sampling Exhibit-Showrooms Servicesoperating under Products Authentication and Validation Certification based on Depositary Samplinging inthe National and Overseas Inter-Markets Delegations </span> </p>
                                </div></td>
                            </tr>
                          </table>
                        <span class="Stile134"><a href="../pages/missione.html"></a></span></div></td>
                    </tr>
                  </table>
                  <table width="95%" border="0" cellspacing="5" cellpadding="3">
                    <tr>
                      <td align="center"><p class="Stile144"><span class="Stile126"><strong>AN INVITATION TO VISIT by clicking the</strong></span><br>
                          Specialized on-line  Portals of the above Accredited Exporter Certified Manufacturer<br>
                          now presenting the  Export Products Catalogs in the following on-line Sub-Portal Presentations:</p>                        </td>
                    </tr>
                    <tr>
                      <td align="center"><br></td>
                    </tr>
                    <tr>
                      <td align="center" bgcolor="#999999"><table width="100%" border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFF66">
                        <tr>
                          <td colspan="2" align="center"><p class="Stile120">Click below for your Factory Shop 
                            for                                 Markets Tests-Orientation for</p></td>
                          </tr>
                        <tr>
                          <td align="center" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="10" bgcolor="#FFFFCC">
                            <tr>
                              <td align="center" nowrap bgcolor="#FF0000" class="style36"> <a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/cart2.asp"></a> A </td>
                            </tr>
                            <tr>                            </tr>
                            <tr>
                              <td rowspan="-1" align="center"><table width="100%" cellpadding="5" cellspacing="5" id="myexample" style="border:5px solid red">
                                  <tr>
                                    <td align="center" bgcolor="#FFCC00" class="Stile124"><span class="Stile144"> </span>
                                        <table width="100%" border="0" cellspacing="2" cellpadding="0">
                                          <tr>
                                            <td align="center" class="Stile120"><span class="Stile144 style32"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/cart_channel.asp"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0" /></a> Skip to the <br />
                                                <span class="Stile127">Dealership of <br>
                                                &quot;Exporter 
                                      Factory Shop&quot;</span> <br>
for                                 Markets Tests-Orientation</span></td>
                                          </tr>
                                      </table></td>
                                  </tr>
                              </table></td>
                            
                            </tr>
                          </table></td>
                          <td align="center"><table width="100%" border="0" cellpadding="0" cellspacing="10" bgcolor="#FFFFCC">
                            <tr>
                              <td align="center" nowrap bgcolor="#FF0000" class="style36"> B </td>
                            </tr>
                            <tr>
                              <td rowspan="-1" align="center"><table width="100%" cellpadding="5" cellspacing="5" id="myexample" style="border:5px solid red">
                                <tr>
                                  <td align="center" bgcolor="#FFCC00" class="Stile124"><span class="Stile144"> </span>
                                      <table width="100%" border="0" cellspacing="2" cellpadding="0">
                                        <tr>
                                          <td align="center" class="Stile120"><strong><span class="Stile119"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/cart_bonus.asp"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0" /></a> IMPORTERS &amp; DISTRIBUTOR&rsquo;S</span>-<br>
                                            DEALESHIP&rsquo;S PORTALS -B2B<span class="Stile127"><br>
                                            Special Discount 
                                            BONUS $ 1000 </span><br>
partecipating to Trade 
                                            Fairs &amp; 
                                            Factory   Tours </strong></td>
                                        </tr>
                                    </table></td>
                                </tr>
                              </table></td>
                            
                            </tr>
                            
                          </table></td>
                        </tr>
                      </table>                        </td>
                    </tr>
                  </table>
                 
                  <table width="100%" border="0" cellpadding="3" cellspacing="5" class="Stile144">
                  </table>
                </div>
              </div>
                                   </td>
          </tr>
        </table>
        <p class="Stile69 Stile9 Stile127"><span class="style71"></span><br>
      </p>
        </DIV>
      <span class="Stile13">      Inter-Markets Contact's Network: Europe- America- Middle East-Asia-Australia-Africa 
      Copyright &copy; 2007</span></TD>
  </TR></TBODY></TABLE>
</DIV></TD></TR></TABLE></TR></TABLE>
</form></BODY></HTML>
