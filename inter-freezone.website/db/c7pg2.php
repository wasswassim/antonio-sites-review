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


<TITLE>LETTER OF INVITATION - AFFILIAZIONE INTERNAZIONALE</TITLE>

<style type="text/css">
<!--
.Stile4 {	FONT-WEIGHT: bold; FONT-SIZE: 10px; COLOR: #ff0000
}
.Stile8 {font-size: 16px}
.Stile9 {font-size: 10px}
.Stile10 {font-size: 10pt}
.Stile11 {color: #000066}
.Stile13 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9pt;
}
.Stile98 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14pt;
}
.Stile99 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000066;
	font-size: 8pt;
}
.Stile101 {	font-family: Arial, Helvetica, sans-serif;
	color: #000066;
	font-weight: bold;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style10 {font-family: Arial, Helvetica, sans-serif; color: #000066; font-weight: bold; font-size: 12px; }
.style15 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 14px; }
.style16 {
	color: #000033;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.style26 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #FFFF00;
	font-weight: bold;
}
.style30 {color: #000033; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
.style31 {font-size: 12px}
.style32 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #000033; font-weight: bold; font-size: 18px; }
.Stile131 {font-family: Arial, Helvetica, sans-serif;
	font-size: 11pt;
}
.style18 {font-family: Arial, Helvetica, sans-serif; color: #000066; font-weight: bold; font-size: 18px; }
.style23 {	font-size: 8pt;
	text-decoration: none;
	color: #000066;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.Stile1 {	color: #FF0000;
	font-family: Arial, Helvetica, sans-serif;
}
.style37 {font-family: Arial, Helvetica, sans-serif}
.style38 {
	font-size: 14px;
	font-weight: bold;
}
.style41 {font-size: 12px; font-weight: bold; }
.fx7 {	font-size: 8pt;
	text-decoration: none;
	color: #000066;
}
.style43 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000066;
}
.titolo {	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-style: normal;
	font-weight: bold;
	color: #000066;
}
.style47 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 12px;
	font-style: italic;
}
.style49 {font-family: Arial, Helvetica, sans-serif; color: #000066; font-weight: bold; font-size: 12px; font-style: italic; }
.style50 {color: #FFFF00}
.style54 {font-size: 13px}
.style55 {font-size: 16}
.style58 {font-size: 20px}
-->
</style>
</head>
<body onLoad="text('  W e l c o m e   t o   INTERFREEZONE ');" bgcolor="#000033" link="#000066" vlink="#000066" alink="#FFFF00" text="#ECE4BD" topmargin="0" rightmargin="0">

<div align="center">
  <table width="840" border="8">
    <tr> 
      <td bgcolor="#FFFF99" valign="top">               
			  <table width="100%" border="2" cellpadding="5" cellspacing="5">
                <tr bgcolor="#72060B">
                  <td colspan="5" bgcolor="#000066"><div align="center" class="Stile53">
                    <table width="100%"  border="8">
                      <tr>
                        <td><div align="center">
                            <table width="100%" border="0">
                              <tr>
                                <td bgcolor="#000066"><div align="center">
                                    <DIV align="center" class="Stile98">I N D E X &nbsp; O F F E R T A&nbsp;&nbsp; E X P O R T   "DECERTOFFEX"</DIV>
                                </div></td>
                              </tr>
                              <tr>
                                <td><div align="center" class="style15 style31"> Foreign Country's Delegation Network-Europa-America-Asia-Australia-Africa </div></td>
                              </tr>
                            </table>
                        </div></td>
                      </tr>
                    </table>
                  </div></td>
                </tr>
                
                
				
				               
                <tr bgcolor="#99FFFF">
                  <td colspan="5" align="center" bgcolor="#666666" class="Stile27">
                      <table width="100%"  border="0" cellspacing="10">
                        <tr>
                          <td><table width="100%" border="5">
                            <tr>
                              <td><table width="100%" border="0">
                                  <tr>
                                    <td><div align="center"><img src="./SITOEXPORTER/img/CASAFORTE.jpg" width="120" height="90"></div></td>
                                    <td bgcolor="#FFFF00"><table width="100%" border="0" cellspacing="6">
                                        <tr>
                                          <td><div align="center"><span class="style32">IEMAS Inter-Markets-Associates</span></div></td>
                                        </tr>
                                        <tr>
                                          <td bgcolor="#FFFF99"><div align="center">
                                              <table width="100%" border="4">
                                                <tr>
                                                  <td bgcolor="#000066"><div align="center"><span class="style26">Inter-Markets-Export-Import-Consortiums-Associates-Network</span></div></td>
                                                </tr>
                                              </table>
                                          </div></td>
                                        </tr>
                                        <tr>
                                          <td><div align="center"><span class="style30"><strong>Inter-Markets-Ex-Import-Group Procurement Services </strong><BR>
                                            by 
                                            Inter-Brokers-Outsorcing-Export Import Managers Associates</span></div></td>
                                        </tr>
                                    </table></td>
                                    <td><div align="center"><img src="./img/CASAF/LOGO-MANNO-BUILDING.jpg"></div></td>
                                  </tr>
                              </table></td>
                            </tr>
                          </table></td>
                        </tr>
                        <tr>
                          <td bgcolor="#F8E8B0"><div align="center">
                            
                            <table width="100%" border="4">
                              <tr>
                                <td bgcolor="#000066"><div align="center"><span class="style49"><span class="style50">INTER-MARKETS-ASSOCIATES IS PROUD TO INTRODUCE THE CERTIFIED EXPORTER INDICATED BELOW: </span><br>
                                </span></div></td>
                              </tr>
                              <tr>
                                <td><div align="center">
                                  <table width="100%" border="0" cellpadding="8">
                                    <tr>
                                      <td><img src="../webmarketing/IMG/DISCOUNT-CARD-network-globo-bandiere.jpg" /></td>
                                      <td align="center"><table width="425" height="63" border="0" background="./SITOEXPORTER/img/freccia-company.gif">
                                        <tr>
                                          <td height="10" class="style47">aa&nbsp;</td>
                                        </tr>
                                        <tr>
                                          <td height="36"><div align="center" class="style18"><?php echo $testata["Cli_C7"];?></div></td>
                                        </tr>
                                      </table></td>
                                      <td width="20%"><img src="../webmarketing/IMG/DOLLARO.jpg" /></td>
                                    </tr>
                                  </table>
                                  </div></td>
                              </tr>
                            </table>
                            
                          </div></td>
                        </tr>
                        <tr>
                          <td>
						  <table width="100%" border="1" cellpadding="5" cellspacing="1" bordercolor="#333333" bgcolor="#333333">
                            <tr bgcolor="#FFFFCC">
                              <td colspan="3" bgcolor="#FFFF66" class="titolo"><span class="style3">
							  <a href="../webmarketing/PDF/Lettera-IMOS.pdf" >
							  <img src="../webmarketing/IMG/ball.gif" width="14" height="14" border="0">
							   </a>
							  CLICK &nbsp;&nbsp;for&nbsp;&nbsp; L E T T E R &nbsp;&nbsp;of &nbsp;<span class="style54">&nbsp;<span class="style58">I N V I T A T I O N</span></span> &nbsp;&nbsp;- &nbsp;
							  <a href="../webmarketing/PDF/LETTERA-BONUS.pdf">
							  <strong>
							  <img src="../webmarketing/IMG/ball.gif" width="14" height="14" border="0" >
							  </strong></a>
							  <span class="style55">&nbsp;F R E E</span> &nbsp;&nbsp;USD $ 1000 (&euro; 500) B O N U S INTER-SERVICES DISCOUNTS </span>
							  </td>
                            </tr>
                            <tr>
                              <td height="100" align="center" valign="middle" bgcolor="#FFFFFF"><table width="100%" border="10" cellpadding="8" bgcolor="#CCFFCC">
                                <tr>
                                  <td align="center"><table border="0">
                                      <tr>
                                        <td bgcolor="#FFFFFF"><div align="center"><img src="../webmarketing/IMG/pdf.jpg" width="100" height="130" /></div></td>
                                      </tr>
                                      <tr>
                                        <td bgcolor="#FFFFFF" class="titolo"><div align="center"><a href="../webmarketing/PDF/LETTERA-BONUS.pdf" class="titolo"></a><a href="../webmarketing/PDF/LETTERA-BONUS.pdf" class="titolo"><strong><img src="../webmarketing/IMG/ball.gif" width="14" height="14" border="0" /></strong></a><a href="../webmarketing/PDF/LETTERA-BONUS.pdf" class="fx7">CLICK FOR PDF</a></div></td>
                                      </tr>
                                  </table></td>
                                </tr>
                              </table>
                                <table width="100%" border="0" cellspacing="5">
                                  
                                  <tr>
                                    <td><div align="center"><img src="../webmarketing/IMG/DOLLARO.jpg" /></div></td>
                                  </tr>
                                  <tr>
                                    <td><img src="../webmarketing/IMG/tour+euro.jpg" width="150" height="153" /></td>
                                  </tr>
                                </table>
                                </td>
                              <td width="100%" valign="top" bgcolor="#FFFFCC" ><div align="left" class="style43">
                                <p class="style28">Dear Sirs,<br />
                                Following the Information received from our country delegation and from your chamber of Commerce we are pleased to remit you the enclosed Special Invitation to partecipate to meet the Italian Delegation and partecipate to Products Distribution and agency rappresentation program for the product of the Certified Exporter Company indicated below, beneficiary of the supporting of Export Grant that include a Special Bonus Discount of usd 1000 to facilitate the aquisition of samples orders as well as to partecipate to the Import Facilitation Program that also include the partecipation to the Italian Trade Fair and Exporter Factory Tours in view to esplore mutual areas of cooperation for common benefits. Enclose please find the invitation and special introductory Bouns for your sample order to aquire the optional agency-distributorship opportunities for the product line of the Certified Exporter indicated below. </p>
                                <div align="left" class="style43">
                                  <table>
                                    <tr>
                                      <td width="499"><table border="2" cellpadding="5">
                                        <tr>
                                          <td width="430" bgcolor="#FFFF33"><strong><span class="style18">I N V I T A T I O N <strong><span class="style58">to&nbsp;&nbsp; PARTECIPATE &nbsp;to &nbsp;the</span>:</strong></span></strong></td>
                                        </tr>
                                      </table></td>
                                    </tr>
                                  </table>
                                  <strong> 1-&ldquo;Euro-Italian Trade Fairs <br />
                                  2-&ldquo;Accredited Inter-Markets-Italian Exporter&rsquo;s Factory Tour that also includes  the ItalianDelegation Facilitiers as well as to the visit  of the Pre-Qualified-Accredited Italian Exporter&rsquo;s Factory-Offices:</strong><br />
  <em>a. Visa-Airport-Reciving-Departur-Supporting  Services with <br />
    b. Special Discount up to 35%, Travel, Private-Pool</em><br />
  <em>c. Car with Free Driver, <br />
    d. Trade  Fairs-Guide and Free Office and Secretarial-Translation Services</em></div>
                                <br />
                                <div align="left"><u>Invitation</u> &nbsp;&nbsp; to participate in the &ldquo;<strong>Italian Factory Tours Program&rdquo; </strong>in Italy  with<strong> US$ 1000 </strong>Travel &amp; Hotel <strong>discount</strong> during 2005-6-7 with special tour: Milan, Venice-Padua, Florence and Rome, with  up to 70 % discount and Foreign Government Incentive. </div>
                                <BR><table width="100%" border="4" cellpadding="8" bgcolor="#FFFFCC">
                                  <tr>
                                    <td bgcolor="#CCFFCC" class="style43"><div align="center"><u><span class="style54">Offer</span></u><span class="style54"> Free Introductory Product Preview <strong>Videoconferencing </strong>Transcontinental  Services, <br>
                                    bi-weekly buyer/ seller direct contact at the<strong>&nbsp; Kuwait Liaison Office and  European Product &amp; <br>
                                    Commodity Exchange of Milan</strong>&rdquo; through any ISDN  Telecom line on reverse supplier charge ccbasis.</span></div></td>
                                  </tr>
                                </table>
								<br>
                                
                                
                              </div>                              </td>
                            </tr>
                          </table></td>
                        </tr>
                      </table>
					  <div align="center">
                      <BR>
                      <BR></td>
                </tr>
				
                <tr>
                  <td bgcolor="#FFFF99" colspan="5"><div align="center"><font face="Arial, Helvetica, sans-serif" size="2" color="#000066"><b><font color="#FFFFFF" size="5"> </font></b></font>
                    <table width="100%" border="4">
                      <tr>
                        <td align="center"><table width="100%"  border="5">
                          <tr>
                            <td><table width="100%"  border="1">
                                <tr>
                                  <td bgcolor="#000066" class="Stile98"><div align="center">F O R &nbsp;&nbsp;F U L L &nbsp;&nbsp;I N F O R M A T I O N&nbsp;&nbsp; and &nbsp;&nbsp;E N Q U I R I E S &nbsp;&nbsp;C L I C K &nbsp;&nbsp;B E L O W </div></td>
                                </tr>
                                <tr>
                                  <td bgcolor="#FFFFCC"><table width="100%" border="0" cellspacing="5" bordercolor="#ECE9D8" bgcolor="#FFFFCC">
                                      <tr>
                                        <td width="50%" valign="middle"><table border="0" cellspacing="0">
                                            <tr>
                                              <td><a href="info-form.htm"><img src="./SITOEXPORTER/img/ball.gif" border="0"><img src="./SITOEXPORTER/img/british_flag.gif" border="0"></a></td>
                                              <td><span class="Stile101">Click for more details </span></td>
                                            </tr>
                                        </table></td>
                                        <td width="54%"><table border="0" cellspacing="5">
                                            <tr>
                                              <td><a href="info-form.htm"><img src="./SITOEXPORTER/img/ball.gif" border="0"><img src="./SITOEXPORTER/img/italian_flag.gif" border="0"></a></td>
                                              <td><span class="Stile101">Per maggiori informazioni clicca qui</span></td>
                                            </tr>
                                        </table></td>
                                      </tr>
                                  </table></td>
                                </tr>
                            </table></td>
                          </tr>
                        </table>
                          <BR>
                          <table border="3" cellspacing="0">
                            <tr>
                              <td><div align="center"><img src="./SITOEXPORTER/europark_file/piedone.jpg"></div></td>
                            </tr>
                          </table>
                          <BR>
                        <table width="100%"  border="3">
                          <tr>
                            <td bgcolor="#FFFFCC" class="Stile11"><table width="100%" border="0">
                                <tr>
                                  <td><div align="center"></div>
                                      <div align="center"><span class="Stile10 Stile1"><b><span class="txxgree Stile8 Stile9"><span class="style18">ITALIAN DELEGATION &quot;IEMAS-Inter-Markets-Associates&quot;</span><font size="2"><span class="Stile131"><br />
                                        </span></font></span></b></span><span class="style16"><b>Via Alassio, 10-20156-Milan Tel.Import's Desk 00393482626905 <br />
                                          Tel 003902 36503719 Fax 003902 99982404 <br />
                                          operating the &quot;INTER-MERCHANDISE-MARKETS &amp; TECHNOLOGY EXCHANGE&quot;</b></span></div></td>
                                  <td><img src="../webmarketing/IMG/CALL.jpg" width="100" height="67" /></td>
                                </tr>
                              </table>
                                <table width="100%" border="0" cellspacing="10">
                                  <tr>
                                    <td><img src="../webmarketing/IMG/MERCHANDISE.jpg" width="227" height="179" /></td>
                                    <td valign="middle"><div align="left"><span class="style16">Divisione Operativa Autonoma dell'Inter-Markets-Export-Import-Consortiums-Associates-Network con Gestione delle Sale di Contrattazioni-Campionarie e Telematiche con Deposito Certificato di Autenticit&agrave; dei prodotti offerti in Export-Import &quot;Decertoffex&quot; collegate allea sostegno degli Incontri Bi-Settimanali tra Operatori nazionali-Esteri video-colle gati alle corrispondenti delegazioni in 27 paesi esteri della operanti presso i Magazzini Generali &quot;Self-Storage&quot; Inter-Porti-Zone-Franche-Centri Direzionali-Borse Mercantili Intrenazional</span><span class="Stile10 Stile1"><span class="Stile131">i</span></span></div>
                                        <div align="left"><a href="../webmarketing/PG/INTERN-AFILIATION2.html"><img src="../webmarketing/IMG/ball.gif" width="14" height="14" border="0" /><span class="style23">CLICK  TO VISIT THE IEMAS-INTER-MERCHANDISE MARKETS</span></a></div>
                                      <div align="center"><span class="Stile10"><font face="Arial, Helvetica, sans-serif" size="2"><b><font face="Arial, Helvetica, sans-serif" size="2"><b><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#00CC33" size="5"><font face="Arial, Helvetica, sans-serif" size="2"><b><font face="Arial, Helvetica, sans-serif" size="2"><b><font face="Arial, Helvetica, sans-serif" size="2"><b><font color="#00CC33" size="5"><br>
                                        • </font></b></font></b></font></b></font>FREE GREEN </font></b></font></b><font color="#00CC33"><b><font size="5">LINES NUMBER</font></b></font></font></b></font><font color="#00CC33" size="2" face="Arial, Helvetica, sans-serif"><b><b><font size="5"> • <br>
                                          +39 3482626905 </font></b></b></font></span></div></td>
                                  </tr>
                              </table></td>
                          </tr>
                        </table>
                          <br><table width="90%" border="1">
                            <tr>
                              <td bgcolor="#FFCCCC" class="Stile11"><div align="center" class="Stile52"> <font face="Arial, Helvetica, sans-serif"></font><font face="Arial, Helvetica, sans-serif">Televideoconference Nr.: 0039 3482626905</font></div></td>
                            </tr>
                            <tr>
                              <td height="20" bgcolor="#FFFFCC" class="Stile11"><span class="Stile9"> <span class="style31">
                                <marquee>
                                <font face="Arial, Helvetica, sans-serif"><b>UK - Germany - ,Belgium - France - AMERICA: USA - Brazil - AFRICA: South Africa - ASIA: Japan - Hong Kong - Singapore - China - AUSTRALIA: North American Free Zone Central Distribution Center.</b></font>
                                </marquee>
                              </span> </span></td>
                            </tr>
                          </table>
                          <p align="center" class="style37"><span class="Stile11"><span class="style38">INTER-FREE-ZONE-EXPORT &amp; IMPORT MARKETS ASSOCIATES</font></span> &nbsp;</span></span></span><b><br />
                          </b><span class="style23">P.O.BOX 127&nbsp; - Pt. Via Besso, 5 -CH690 LUGANO 3 SWITZERLAND &nbsp;Tel.0041786283699 Fx.. 0041-0916046287</span><span class="style41"><br>
                            </span><span class="style23"><a href="http://www.interfreezone.org/">www.interfreezone.org</a> - e.mail <a href="mailto:info@interfreezone.org"> info@interfreezone.org</a></span></span></p>
                          <table width="100%" border="5">
                            <tr>
                              <td><table width="100%" border="0" cellspacing="5">
                                  <tr>
                                    <td><img src="./SITOEXPORTER/img/siluette-paesi.jpg" width="200" height="110"></td>
                                    <td><table width="100%" border="0" cellspacing="15">
                                        <tr>
                                          <td class="style10"><div align="center"><img src="./SITOEXPORTER/img/SILOUETTE.jpg" width="550" height="22"></div></td>
                                        </tr>
                                        <tr>
                                          <td class="style10"><div align="center"><img src="./SITOEXPORTER/img/BANDIERE-WEB-ORIZZ.jpg" ></div></td>
                                        </tr>
                                        <tr>
                                          <td class="style10"><div align="center"><img src="./SITOEXPORTER/img/OROLOGI-FUSO-ORARIO.jpg"></div></td>
                                        </tr>
                                    </table></td>
                                  </tr>
                              </table></td>
                            </tr>
                          </table>                          <p>&nbsp;</p></td>
                      </tr>
                    </table>
                    
                          </div>
                      <div align="center">
                        <p class="Stile81 Stile99">Copyright&copy; Inter-Markets-Associates-Network-Swiss-Geneve-Lugano &amp; Milan-Italy</p>
                    </div></td>
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