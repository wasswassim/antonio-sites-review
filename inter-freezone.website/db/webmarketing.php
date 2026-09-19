<?php
include("../include/interfree_dbinc.php");
include("../include/dbfix-php.php");


$db=mysql_connect($dbhost,$dbuser,$dbpasswd) or die ("Errore durante la connessione al database");

$sql="SELECT * FROM `ragionesociale` WHERE`Cod_clie`='". $_GET['codicino'] . "'";
mysql_select_db($dbname);
$result=mysql_query($sql);

//$result=mysql_db_query($__sartorm_dbname,$sql,$db);
$testata=mysql_fetch_array($result);

?>
<style type="text/css">
<!--
.style11 {font-size: 10pt; color: #000066; font-weight: bold; }
-->
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>WEB MARKETING</title>
<!-- TemplateEndEditable -->
<style type="text/css">
<!--
div.MsoNormal {mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:EN-US;
	mso-fareast-language:IT;}
div.Section1 {page:Section1;}
li.MsoNormal {mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:EN-US;
	mso-fareast-language:IT;}
p.MsoNormal {mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	mso-ansi-language:EN-US;
	mso-fareast-language:IT;}
.style1 {
	color: #000066;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000066;
}
.titolo {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-style: normal;
	font-weight: bold;
	color: #000066;
}
.style6 {color: #000066}
.style7 {
	color: #0000CC;
	font-weight: bold;
}
.style8 {color: #FFFFFF}
.Stile10 {font-size: 10pt}
.Stile11 {color: #000066}
.Stile8 {font-size: 16px}
.Stile13 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11pt;
}
.Stile9 {font-size: 10px}
.style12 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000066;
}
.style14 {
	font-size: 18px;
	font-weight: bold;
	color: #FFFF00;
}
.style16 {
	font-size: 14px;
	font-family: Arial, Helvetica, sans-serif;
}
.style18 {font-family: Arial, Helvetica, sans-serif; color: #000066; font-weight: bold; font-size: 18px; }
.style19 {
	font-size: 14px;
	color: #000066;
}
.style20 {
	font-size: 18px;
	color: #FF0000;
}
.fx7 {
	font-size: 8pt;
	text-decoration: none;
	color: #000066;
}
.NU {  text-decoration: none}
.style23 {
	font-size: 8pt;
	text-decoration: none;
	color: #000066;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style25 {font-size: 16px; font-weight: bold; }
.style26 {font-size: 12px}
.style27 {font-size: 12}
.style28 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style29 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style30 {
	color: #000066;
	font-weight: bold;
}
.style32 {font-size: 16}
.style35 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11pt;
	color: #000066;
	font-weight: bold;
}
.Stile14 {font-size: 10}
.Stile18 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 28px;
	color: #990000;
}
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
<!-- TemplateBeginEditable name="head" --><!-- TemplateEndEditable -->
</head>

<body>
<div align="center">
<table width="710" border="8" cellspacing="15" bgcolor="#000066">
  <tr>
    <td>
	<table width="100%" border="0" bordercolor="#333333" bgcolor="#333333">
  <tr>
    <td><table width="100%" border="0" cellspacing="4" bgcolor="#FFFFFF">
      <tr>
        <td colspan="2"><div align="center" class="style18">
          <table width="100%" cellspacing="3" bgcolor="#FFCC00">
            <tr>
              <td><table width="100%" border="0" cellspacing="5">
                <tr>
                  <td align="center" class="style35">WELCOME TO THE INTER-MERCHANDISE MARKETS <BR>
Now presenting the Certified Manufacturer Indicated Below </td>
                </tr>
                <tr>
                  <td><table width="100%" border="0">
                    </table>
                      <div align="center">
                        <table width="400" height="50" border="8">
                          <tr>
                            <td bgcolor="#FF0000"><div align="center" class="style20"><strong><span class="style14"><strong><a href="./bacheca.php?Codice=<?php echo $testata["Cli_C7"];?>"><?php echo $testata["Cli_C7"];?></strong></span></strong></div></td>
                          </tr>
                        </table>
                      </div></td>
                </tr>
                <tr>
                  <td><table width="100%" border="0" cellspacing="5">
                      <tr>
                        <td><table width="100%" border="3">

                            <tr>
                              <td bgcolor="#FFFFFF"><div align="center"><a href="./gallery.php?Cod_clie=<?php echo $testata["Cod_clie"];?>" target="_blank"><img src="http://www.interfreezone.org/<?php echo $testata["Cod_clie"];?>/flashing/thumbn/1a.jpg" border="0"/></a></div></td>
                            </tr>
                        </table></td>
                        <td><table width="100%" border="3">
                            <tr>
                              <td bgcolor="#FFFFFF"><div align="center"><a href="http://www.interfreezone.org/<?php echo $testata["Cod_clie"];?>/gallery.asp" target="_blank"><img src="http://www.interfreezone.org/<?php echo $testata["Cod_clie"];?>/flashing/thumbn/1b.jpg" border="0"/></a></div></td>
                            </tr>
                        </table></td>
                        <td><table width="100%" border="3">
                            <tr>
                              <td bgcolor="#FFFFFF"><div align="center"><a href="http://www.interfreezone.org/<?php echo $testata["Cod_clie"];?>/gallery.asp" target="_blank"><img src="http://www.interfreezone.org/<?php echo $testata["Cod_clie"];?>/flashing/thumbn/2a.jpg" border="0"/></a></div></td>
                            </tr>
                        </table></td>
                        <td><table width="100%" border="3">
                            <tr>
                              <td bgcolor="#FFFFFF"><div align="center"><a href="http://www.interfreezone.org/<?php echo $testata["Cod_clie"];?>/gallery.asp" target="_blank"><img src="http://www.interfreezone.org/<?php echo $testata["Cod_clie"];?>/flashing/thumbn/2b.jpg" border="0"/></a></div></td>
                            </tr>
                        </table></td>
                      </tr>
                  </table></td>
                </tr>
              </table></td>
            </tr>
          </table>
          </div></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"><div align="center"><img src="http://www.interfreezone.org/webmarketing/IMG/TESTATA E-MAIL FORM.jpg" width="700" height="116" /></div></td>
      </tr>
      <tr>
        <td width="85"><div align="left"><strong>Cartella</strong></div></td>
        <td width="615">
          <select name="select">
            <option selected="selected" value="inbox">Posta in uscita (96 messaggi) </option>
          </select>
          <input type="submit" value=" Vai " name="Go_x2" />        </td>
      </tr>
      <tr>
        <td><div align="left" class="MsoNormal"><b><span style='font-size:8.5pt;font-family:Verdana;
  mso-ansi-language:IT' lang="it" xml:lang="it">Da :</span></b><span style='font-size:8.5pt;
  font-family:Verdana;mso-ansi-language:IT' lang="it" xml:lang="it">
        </span></div>          <span class="MsoNormal"><span style='font-size:8.5pt;
  font-family:Verdana;mso-ansi-language:IT' lang="it" xml:lang="it"><o:p></o:p>
        </span></span></td>
        <td><div align="left"><a
    href="http://mailhost.ticino-online.ch:88/mail/writemail.html?id=0592ff3f3921ae41fb386a6a1c5b36e6&amp;writeto=info%40interfreezone.org" class="style3"><span style="color:black;mso-ansi-language:IT">info@interfreezone.org</span></a></div></td>
      </tr>
      <tr>
        <td><div align="left" class="MsoNormal"><b><span style='font-size:8.5pt;font-family:Verdana;
  color:black;mso-ansi-language:IT' lang="it" xml:lang="it">A :</span></b><span
  style='font-size:8.5pt;font-family:Verdana;color:black;mso-ansi-language:
  IT' lang="it" xml:lang="it">
        </span></div>          <span class="MsoNormal"><span
  style='font-size:8.5pt;font-family:Verdana;color:black;mso-ansi-language:
  IT' lang="it" xml:lang="it"><o:p></o:p>
        </span></span></td>
        <td><div align="left" class="style28">IMPORTATORI DEI PAESI ESTERI DELLA LISTA
          ALLEGATA N&deg;18 </div>          
          <span style="font-size:12px;font-family:Arial, Helvetica, sans-serif; color:black;mso-ansi-language:IT">
          <o:p></o:p>
          </span></td>
      </tr>
      <tr>
        <td><div align="left"><b><span style="font-size:8.5pt;font-family:Verdana;
  color:black;mso-ansi-language:IT">Oggetto :</span></b></div></td>
        <td><div align="left" class="style28"><strong>Trasmission of Special Bonus of USD 1000 - to partecipate to Italian Trade Fair and Factory Tours </strong><br />Encolsed please find Special Invitation to aquire Import Agency Rappresentation for the Italian Product of the Certified Manufacturer indicated Below.</div>          
                   
          <span style="font-size:12px;font-family:Arial, Helvetica, sans-serif; color:black;mso-ansi-language:IT">
          <o:p></o:p>
          </span>          <div align="left" class="style26"></div></td>
      </tr>
      <tr>
        <td colspan="2"><table width="100%" border="1">
            <tr>
              <td><table width="100%" border="0" cellpadding="4">
                <tr>
              <td bgcolor="#FFFFCC"><div align="center"><img src="http://www.interfreezone.org/webmarketing/IMG/nmb1.gif" width="30" height="30" /></div></td>
            <td colspan="2" bgcolor="#FFFFCC" class="style29">I N V I T A T I O N &nbsp;&nbsp;- &nbsp;&nbsp;F R E E &nbsp;&nbsp;&nbsp;B O N U S </td>
			</tr>
				<tr>
                  <td bgcolor="#FF0000"><div align="center"><img src="http://www.interfreezone.org/webmarketing/IMG/BONUS.gif" width="69" height="69" /></div></td>
                  <td bgcolor="#FFFF99"><p align="left" class="style28">Dear Sirs,<br />
                    Following the Information received from our country delegation and from your chamber of Commerce we are pleased to remit you the enclosed Special Invitation to partecipate to meet the Italian Delegation and partecipate to Products Distribution and agency rappresentation program for the product of the Certified Exporter Company indicated below, beneficiary of the supporting of Export Grant that include a Special Bonus Discount of usd 1000 to facilitate the aquisition of samples orders as well as to partecipate to the Import Facilitation Program that also include the partecipation to the Italian Trade Fair and Exporter Factory Tours in view to esplore mutual areas of cooperation for common benefits. Enclose please find the invitation and special introductory Bouns for your sample order to aquire the optional agency-distributorship opportunities for the product line of the Certified Exporter indicated below. </p></td>
                  <td bgcolor="#FF0000"><div align="center"><img src="http://www.interfreezone.org/webmarketing/IMG/showroom.gif" width="69" height="69" /></div></td>
                </tr>
              </table></td>
            </tr>
            
          </table></td>
      </tr>
      
    </table></td>
  </tr>
</table>    </td>
  <TR>
  <TD><table width="100%" border="8">
      <tr>
        <td bgcolor="#FFFF99" class="style1"><div align="center">
          <table width="100%" border="0" cellspacing="5">
             <tr>
              <td><table width="100%" border="0">
                <tr>
                  <td><img src="http://www.interfreezone.org/webmarketing/IMG/nmb2.gif" width="30" height="30" /></td>
                  <td class="style30"><div align="center"><strong>PRESENTATION OF THE CERTIFIED EXPORTER MANUFACTURER</strong></div></td>
                </tr>
              </table>
              
                <div align="center">
                  <table width="400" height="50" border="8">
                    <tr>
                      <td bgcolor="#FF0000"><div align="center" class="style20"><strong><span class="style14"><span class="style20"><strong><span class="style14"><?php echo $testata["Cli_C7"];?></span></strong></span></span></strong></div></td>
                    </tr>
                  </table>
                </div>
				<BR />                </td>
            </tr>
			
			<tr>
              <td class="style16"><div align="center" class="style30">
                INTER-MARKETS-EXPORT-IMPORT-CONSORTIUMS-MANAGEMENT-   ASSOCIATES-NETWORK </div></td>
            </tr>
            <tr>
              <td class="style19"><div align="center">is now presenting the Complete Products Range of the CertIfied Export Manufacturer indicated below, <br />
                at   the
                Inter-Markets-Free-Zone-Exibit-Show-Rooms and in the <BR />
                <span class="style32">Milan Merchandise   Market &amp; Tecnology Exchange </span><br />
                to appoint Import-Distributorship-Agency   Representation as well as Joint-Venture Opportunities.</div></td>
            </tr>
          </table>
          <p align="left"><img src="http://www.interfreezone.org/webmarketing/IMG/cemint.jpg" width="700" height="138" /></p>
          <table width="100%" border="7" bgcolor="#CCCCCC">
            <tr>
              <td><table width="100%" border="0" cellspacing="5">
                <tr>
                  <td><table width="100%" border="3">
                      <tr>
                        <td><div align="center"><a href="http://www.interfreezone.org/<?php echo $testata["Cod_clie"];?>/gallery.asp" target="_blank"><img src="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/flashing/thumbn/1a.jpg" border="0"/></a></div></td>
                      </tr>
                    </table></td>
                  <td><table width="100%" border="3">
                    <tr>
                      <td><div align="center"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/gallery.asp" target="_blank"><img src="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/flashing/thumbn/1b.jpg" border="0"/></a></div></td>
                    </tr>
                  </table></td>
                  <td><table width="100%" border="3">
                    <tr>
                      <td><div align="center"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/gallery.asp" target="_blank"><img src="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/flashing/thumbn/2a.jpg" border="0"/></a></div></td>
                    </tr>
                  </table></td>
                  <td><table width="100%" border="3">
                    <tr>
                      <td><div align="center"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/gallery.asp" target="_blank"><img src="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/flashing/thumbn/1a.jpg" border="0"/></a></div></td>
                    </tr>
                  </table></td>
                </tr>
              </table>                </td>
            </tr>
          </table>
          <p align="left"><strong><a href="http://www.interfreezone.org/webmarketing/PG/INTERN AFILIATION2.html" target="_blank"><img src="http://www.interfreezone.org/webmarketing/IMG/ball.gif" width="14" height="14" border="0" /><span class="fx7">CLICK  TO VISIT THE IEMAS-INTER-MERCHANDISE MARKETS</span></a></strong> </p>
        </div></td>
      </tr>
    </table></TD>
  </TR>
  <tr>
    <td><table width="100%" border="1" cellpadding="5" cellspacing="1" bordercolor="#333333" bgcolor="#333333">
      <tr bgcolor="#FFFFCC">
        <td colspan="3" class="titolo"><div align="left">
            <table width="100%" border="0">
              <tr>
                <td width="40%"><img src="http://www.interfreezone.org/webmarketing/IMG/nmb3.gif" width="30" height="30" />  <strong>F R E E&nbsp;-   COURTESY DISCOUNT</strong></td>
                <td width="60%"><strong> </strong>
                    <table width="100%" border="2">
                      <tr>
                        <td bgcolor="#FFFF66" class="style20"><strong>&rdquo;BONUS&rdquo; of Euro 1000.00</strong></td>
                      </tr>
                  </table></td>
              </tr>
            </table>
        </div></td>
      </tr>
      <tr>
        <td height="100" align="center" valign="middle" bgcolor="#FFFFFF"><table border="0">
            <tr>
              <td bgcolor="#FFFFFF"><div align="center"><img src="http://www.interfreezone.org/webmarketing/IMG/pdf.jpg" width="100" height="130" /></div></td>
            </tr>
            <tr>
              <td bgcolor="#FFFFFF" class="titolo"><div align="center"><a href="http://www.interfreezone.org/webmarketing/PDF/LETTERA BONUS.pdf" target="_blank" class="titolo"><strong><img src="http://www.interfreezone.org/webmarketing/IMG/ball.gif" width="14" height="14" border="0" /></strong></a><a href="http://www.interfreezone.org/webmarketing/PDF/LETTERA BONUS.pdf" class="fx7">CLICK FOR PDF</a></div></td>
            </tr>
        </table></td>
        <td width="100%" bgcolor="#FFFFFF" ><div align="left" class="style3"><strong>INVITATION TO PARTECIPATE TO THE<br />
          1-&ldquo;Euro-Italian Trade Fairs <br />
          2-&ldquo;Accredited Inter-Markets-Italian Exporter&rsquo;s Factory Tour that also includes  the ItalianDelegation Facilitiers as well as to the visit  of the Pre-Qualified-Accredited Italian Exporter&rsquo;s Factory-Offices:</strong><br />
          <em>a. Visa-Airport-Reciving-Departur-Supporting  Services with <br />
            b. Special Discount up to 35%, Travel, Private-Pool</em><br />
          <em>c. Car with Free Driver, <br />
            d. Trade  Fairs-Guide and Free Office and Secretarial-Translation Services</em></div><br />
          <div align="left"><span class="style3"><u>Invitation</u> &nbsp;&nbsp; to participate in the &ldquo;<strong>Italian Factory Tours Program&rdquo; </strong>in Italy  with<strong> US$ 1000 </strong>Travel &amp; Hotel <strong>discount</strong> during 2005-6-7 with special tour: Milan, Venice-Padua, Florence and Rome, with  up to 70 % discount and Foreign Government Incentive.</span> </div>          <p class="style3"><u>Offer</u> Free Introductory Product Preview <strong>Videoconferencing </strong>Transcontinental  Services, bi-weekly buyer/ seller direct contact at the<strong>&nbsp; Kuwait Liaison Office and  European Product &amp; Commodity Exchange of Milan</strong>&rdquo; through any ISDN  Telecom line on reverse supplier charge ccbasis.</p></td>
        <td bgcolor="#FFFFFF" ><table width="100%" border="0" cellspacing="5">
            <tr>
              <td><div align="center"><img src="http://www.interfreezone.org/webmarketing/IMG/DISCOUNT CARD network-globo-bandiere.jpg" /></div></td>
            </tr>
            <tr>
              <td><div align="center"><img src="http://www.interfreezone.org/webmarketing/IMG/DOLLARO.jpg" /></div></td>
            </tr>
            <tr>
              <td><img src="http://www.interfreezone.org/webmarketing/IMG/tour + euro.jpg" width="150" height="153" /></td>
            </tr>
        </table>          </td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td><table width="100%" border="1" cellpadding="5" cellspacing="1" bordercolor="#333333" bgcolor="#333333">
      <tr>
        <td colspan="3" bgcolor="#FFFFCC" class="titolo"><div align="center" class="titolo">
            <div align="center">
              <table width="100%" border="0">
                <tr>
                  <td><div align="center"><img src="http://www.interfreezone.org/webmarketing/IMG/nmb4.gif" width="30" height="30" /></div></td>
                  <td>LETTER of INVITATION for IMPORT DISTRIBUTORSHIP and AGENCY RAPPRESENTATION </td>
                </tr>
              </table>
              </div>
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table border="0">
            <tr>
              <td bgcolor="#FFFFFF"><div align="center"><img src="http://www.interfreezone.org/webmarketing/IMG/pdf.jpg" width="100" height="130" /></div></td>
            </tr>
            <tr>
              <td bgcolor="#FFFFFF" class="titolo"><div align="center"><strong><a href="http://www.interfreezone.org/webmarketing/PDF/LETTERA IMOS.pdf" target="_blank"><img src="http://www.interfreezone.org/webmarketing/IMG/ball.gif" width="14" height="14" border="0" /></a></strong><span class="fx7">CLICK FOR PDF</span></div></td>
            </tr>
        </table></td>
        <td width="100%" bgcolor="#FFFFFF" ><ul class="style3">
            <li>
              <div align="left"><u>Presentation of the Certified Export Offer</u> &quot;Decertoffex&quot;   of<strong> &ldquo;Import Gua ranteed Pre-packed Assorted Samples Shipment&rdquo; </strong>of the above Italian Certified Company for Pre-packed Assorted <u>Trial  Order</u> Lot Shipment of US$ 5,000,&nbsp;  US$ 10,000,&nbsp; US$ 15,000 and&nbsp; US$ 25,000.&nbsp; </div>
            </li>
          <li>
              <div align="left"><u>Optional</u> concession of <strong>&ldquo;Special Offer for Import Agency &amp; Distri bution&rdquo; </strong>opportunity with support of  &ldquo;Government Import Facilitation&quot;.</div>
          </li>
          <li>
              <div align="left"><u>Invitation</u> &nbsp;&nbsp; to visit closest Import Agent in your  Country to inspect samples of offered products line (see List 01)</div>
          </li>
        </ul></td>
        <td bgcolor="#FFFFFF" ><img src="http://www.interfreezone.org/webmarketing/IMG/UOMO POLTRONA INTRO.jpg" width="97" height="150" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="1" cellpadding="5" cellspacing="1" bordercolor="#333333" bgcolor="#333333">
      <tr>
        <td colspan="2" bgcolor="#FFFFCC" class="titolo"><div align="left">
            <table width="100%" border="0">
              <tr>
                <td><img src="http://www.interfreezone.org/webmarketing/IMG/nmb5NUMERO.gif" width="30" height="30" />A</td>
                <td><a href='<%=(Recordset1.GetColumnValue("carrello"))%>'><img src="http://www.interfreezone.org/webmarketing/IMG/bback_dw.gif" width="32" height="32" border="0" /></a></td>
                <td><div align="center" class="style19">EXPORT FACTORY SHOP ON-LINE <BR>
                  Testing-Sampling Trial Order Services by utilising the Exporter Factory Shop with Group Shipment Consolidation operating under International Product Authenticity-Conformity Certification <br>
                  <span class="style35">&quot;I n t e r - M a r k e t s - Q u a l i t y C o n t r o l&quot; </span><br> 
                  <span class="style11">Exporter Factory Shop con il supporto del Certificato di Garanzia di Autenticit&agrave;-Conformit&agrave; Inter-Markets Guarantee </span><span class="style35">&quot;I n t e r - M a r k e t s - Q u a l i t y C o n t r o l&quot;</span></div></td>
              </tr>
            </table>
        </div></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="10">
          <tr>
            <td><div align="center">
              <table width="100%">
                <tr>
                  <td><table width="100%" bgcolor="#FFFFCC" class="style18">
                    <tr>
                      <td colspan="2" bgcolor="#FFCC00"><p align="center" class="style35"><strong>APPLY NOW for</strong> mufacture Exporter<br>
                            <strong>Multiple Iemas BENEFICTS</strong><br>
                            <strong>FULL Services DISCOUNT</strong><br>
                            <strong>Up-To 75%</strong></p></td>
                      </tr>
                    <tr>
                      
                      <td align="left"><table width="100%">
                        <tr>
                          <td class="style3"><span class="Stile14">1</span></td>
                          <td class="style3"><span class="Stile14">Products  Authenticity Certificate Certificato di Autenticit&agrave;</span></td>
                        </tr>
                        <tr>
                          <td class="style3"><span class="Stile14">2</span></td>
                          <td class="style3"><span class="Stile14">Company&rsquo;s Reliability Certificate Certificato di Affidabilit&agrave;</span></td>
                        </tr>
                        <tr>
                          <td class="style3"><span class="Stile14">3</span></td>
                          <td class="style3"><span class="Stile14">Distributors-Resellers Programs Accordi di Concessione</span></td>
                        </tr>
                        <tr>
                          <td class="style3"><span class="Stile14">4</span></td>
                          <td class="style3"><span class="Stile14">Volume Discount</span></td>
                        </tr>
                        <tr>
                          <td class="style3"><span class="Stile14">5</span></td>
                          <td class="style3"><span class="Stile14">Procurement Financing &amp; Insurance Discount</span></td>
                        </tr>
                        <tr>
                          <td class="style3"><span class="Stile14">6</span></td>
                          <td class="style3"><span class="Stile14">Group Shipments Discount</span></td>
                        </tr>
                        <tr>
                          <td class="style3"><span class="Stile14">7</span></td>
                          <td class="style3"><span class="Stile14">Order Tracing-Expediting</span></td>
                        </tr>
                        <tr>
                          <td class="style3"><span class="Stile14">8</span></td>
                          <td class="style3"><span class="Stile14">Video-Call Center Assistance&nbsp;</span></td>
                        </tr>
                        <tr>
                          <td class="style3"><span class="Stile14">9</span></td>
                          <td class="style3"><span class="Stile14">Inter-Markets Third Party Validation</span></td>
                        </tr>
                        <tr>
                          <td class="style3"><span class="Stile14">10</span></td>
                          <td class="style3"><span class="Stile14">Inter-Markets Arbitration Certificate <br>
in conformity of Int. Chamber of Commerce </span></td>
                        </tr>
                        <tr>
                          <td class="style3"><span class="Stile14">11</span></td>
                          <td class="style3"><span class="Stile14">Company Profile </span></td>
                        </tr>
                        <tr>
                          <td class="style3"><span class="Stile14">12</span></td>
                          <td class="style3"><span class="Stile14">Procurement&nbsp; Manager Suppport</span></td>
                        </tr>
                      </table>
                        </td>
                    </tr>
                  </table></td>
                  <td><table width="100%">
                    <tr>
                      <td align="center"><a href='<%=(Recordset1.GetColumnValue("carrello"))%>'><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/img/carrello/shot.jpg" width="300" height="200" border="0" /></a></td>
                    </tr>
                    <tr>
                      <td><table width="100%">
                        <tr>
                          <td><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/img/carrello/autentic.gif" width="92" height="76"></td>
                          <td><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/unicef.jpg" width="123" height="85"></td>
                          <td><img src="http://www.inter-markets-secure-procurement.biz/interfreezone/db/img/carrello/CERTIFICATO%20MICRO%20PAGE.gif" height="90"></td>
                          </tr>
                      </table></td>
                    </tr>
                  </table>                    </td>
                </tr>
              </table>
              </div></td>
          </tr>
          
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table  border="1" cellpadding="5" cellspacing="1" bordercolor="#333333" bgcolor="#333333">
      <tr>
        <td colspan="2" bgcolor="#FFFFCC" class="titolo"><div align="left">
            <table width="100%" border="0">
              <tr>
                <TD><img src="http://www.interfreezone.org/webmarketing/IMG/nmb5NUMERO.gif" width="30" height="30" />B</TD>
				<td><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>"><img src="http://www.interfreezone.org/webmarketing/IMG/bback_dw.gif" width="32" height="32" border="0" /></a></td>
                <td><div align="center" class="style19">LINK to the Certified Export Manufacturer indicted below for the Certified Export Proposal </div></td>
              </tr>
            </table>
        </div></td>
      </tr>
      <tr>
        <td width="588" bgcolor="#FFFFFF"><table width="588" height="441" background="http://www.interfreezone.org/webmarketing/Img/shotsito.jpg">
          <tr>
            <td height="34" colspan="3" align="center"><span class="Stile18"><strong><strong><span class="style14"></span></strong><%=(Recordset1.GetColumnValue("Cli_C7"))%></strong> </span></td>
            </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          
        </table>
          </td>
        <td width="107" bgcolor="#FFFFFF" ><table border="0" cellspacing="5">
            <tr>
              <td bgcolor="#FFFFFF"><div align="center"><img src="http://www.interfreezone.org/webmarketing/IMG/secure-import.jpg" /> </div></td>
            </tr>
            <tr>
              <td bgcolor="#FFFFFF"><div align="center"><img src="http://www.interfreezone.org/webmarketing/IMG/coccarda.jpg" width="100" height="128" /></div></td>
            </tr>
            <tr>
              <td bgcolor="#FFFFFF" class="titolo"><div align="center"><img src="http://www.interfreezone.org/webmarketing/IMG/toronto.jpg" /><br />
                      <table width="100%" border="0">
                        <tr>
                          <td bgcolor="#FFFF00"><div align="center"><span class="Stile9"><span class="style8"><a href="http://www.interfreezone.org/webmarketing/PG/INTERN AFILIATION2.html"><img src="http://www.interfreezone.org/webmarketing/IMG/bback_dw.gif" width="32" height="32" border="0" /></a></span><br />
                            CLICK FOR ACCREDITATION</span> </div></td>
                        </tr>
                      </table>
              </div></td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table  border="1" cellpadding="5" cellspacing="1" bordercolor="#333333" bgcolor="#333333" bordercolorlight="#999999">
      <tr>
        <td bgcolor="#FFFFCC"><table width="100%" border="0">
          <tr>
            <td><div align="center"><img src="http://www.interfreezone.org/webmarketing/IMG/nmb6.gif" width="30" height="30" /></div></td>
            <td><div align="center" class="style1"><strong><font face="Arial, Helvetica, sans-serif" 
                  size="5">APPLY NOW</font></strong><font 
                  face="Arial, Helvetica, sans-serif" size="2"><br />
              to start to buy - sale trought the world over right from 
              your closest Inter-Free-Zone-Market <br />
              ECONOMICALLY - EFFICIENTLY 
              AND WOTHMORE RISK FREE</font></div></td>
          </tr>
        </table>        <BR />         </td>
      </tr>
      <tr>
        <td width="100%" align="center" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="10" bgcolor="#99CCFF">
          <tr>
            <td width="28%"><table width="100%" height="270" border="5">
              <tr>
                <td align="center" bgcolor="#CCCCCC">
                  <a href="../00italiano/restricted.htm">
                  <div align="center" class="style6"><p><img src="http://www.interfreezone.org/webmarketing/IMG/bback_dw.gif" border="0" /></p>
                  <p><font face="Arial, Helvetica, sans-serif" 
                  size="3"><b>r e g i s t r a t i o n </b></font></p>
                  <p><font face="Arial, Helvetica, sans-serif" 
                  size="3"><b>to 
                    recive Your Free Cortesy Certified Export Sample Order 
                    QUOTATIONS under Secur-Import 
                    GUARANTEE</b></font></p>
                </div></a></td>
              </tr>
            </table>              </td>
            <td width="25%" align="center" valign="top"><table width="100%" height="270" border="5">
              <tr>
                <td valign="top" bgcolor="#FFFF66"><a href="SITOEXPORTER/pages/info-form.htm">
                <div align="center">
                  <p align="center" class="style29">CLICK 
                    FOR YOUR</p>
                  <p align="center"><img src="http://www.interfreezone.org/webmarketing/IMG/bback_dw.gif" height="32" border="0" 
/></p>
                  <p align="center"><font face="Arial, Helvetica, sans-serif" color="#003366" 
                  size="3"><b>Import-Buyer <br />
                    Free Green Line <br />
                    Sale Contacts <br />
                    video-meeting enquire E-Mail-fax 
                    Inter-Markets QUESTIONNAIRE</b></font></p>
                </div>
                </a><!-- TemplateEndEditable --></td>
              </tr>
            </table></td>
            <td width="26%" valign="top"><table width="100%" height="270" border="5">
              <tr>
                <td valign="top" bgcolor="#CCCCCC">
				<a href="http://www.interfreezone.org/interprocurement" target="_blank">
				<p align="center"><font face="Arial, Helvetica, sans-serif" size="3"><b>CLICK 
                  FOR YOUR</b></font></p>
                    <p align="center"><img src="http://www.interfreezone.org/webmarketing/IMG/bback_dw.gif" height="32" border="0" 
                  /></p>
                  <p align="center"><font face="Arial, Helvetica, sans-serif" size="3"><b>ENTER 
                    IN THE Inter-Markets others Difersified Export Offers<br /> 
                    by Group 
                    Procurement Services</b></font></p></a></td>
              </tr>
            </table></td>
            <td width="21%" valign="top"><table width="100%" height="270" border="5">
              <tr valign="top">
                <td bgcolor="#FFFF66"><a href="http://<%=(Recordset1.GetColumnValue("Indirizzo"))%>">
                  <p align="center"><font face="Arial, Helvetica, sans-serif" size="3"><b>Link 
                    to the</b></font></p>
                  <p align="center"><img src="http://www.interfreezone.org/webmarketing/IMG/bback_dw.gif" 
                  width="32" height="32" border="0" /></p>
                  <p align="center"><font face="Arial, Helvetica, sans-serif" size="3"><b>EXPORTER'S 
                    HOMEPAGE</b></font></p>
                  </a>
                  <p align="center" class="style7"><font size="3" face="Arial, Helvetica, sans-serif">to meet <br>
                    directly the Certified Exporter Company </font></p></td></tr>
            </table></td>
          </tr>
          <tr>
            <td colspan="4"><table width="100%"  border="5">
              <tr>
                <td bgcolor="#FFFF99"><li><u><span class="style16">Attached</span></u> <span class="style16">&nbsp;&nbsp; is a questionnaire which we kindly ask to be filled in and returned.&nbsp; Upon prompt receipt we will activate for you the above &ldquo;6 months Free Courtesy Service&rdquo; comprising free overseas sample inspection shipments for new products related to your specific manufacturing, distribution and agency requirements.</span></li></td>
              </tr>
            </table></td>
          </tr>
        </table>
        
        <table width="100%" border="5" 
            align="center" cellpadding="2" cellspacing="2">
            <tbody>
              <tr bordercolor="#666666">
                <td height="163" colspan="4" align="center" bgcolor="#CCCCCC"><table cellspacing="2" cellpadding="2" width="100%" border="5">
                    <tbody>
                      
					  <tr>
                        <td width="50%" bordercolor="#333366" bgcolor="#ffffff" height="218"><div align="center">
                            <BR />
                            <table width="100%" border="0">
                              <tr>
                                <td width="45%"><div align="left"><img src="http://www.interfreezone.org/webmarketing/IMG/nmb7.gif" width="30" height="30" /></div></td>
                                <td width="55%"><div align="left"><a 
                  href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/exdesk.asp" target="_blank"                   ><img src="http://www.interfreezone.org/webmarketing/IMG/bback_dw.gif" border="0" /></a></div></td>
                              </tr>
                            </table>
                            <p><font color="#333366"><b><font 
                  face="Arial, Helvetica, sans-serif" size="2">SERVIZI INTRANET 
                            RISERVATI AGLI ESPORTATORI </font></b><font 
                  face="Arial, Helvetica, sans-serif" size="2"><br />
                              Identity pac - 
                              Legislazione contrattistica nazionale e internazionale - 
                              Formulistica offerte - lista compratori esteri per settore, 
                              per nazione e per citt&agrave; - Fiere - Web call center e teleporto 
                              - Numeri verdi - Inviti agli incontri nelle Borse merci e 
                              nelle fabbriche - Partecipazione a delegazioni all'estero e in 
                              Italia - Opzioni per acquisti hardware e web cam - Buoni 
                              sconto per boutique export</font></font></p>
                        </div></td>
						<td bordercolor="#ffffff" bgcolor="#333366"><div align="center"><img src="http://www.interfreezone.org/webmarketing/IMG/BILANCIA.jpg" width="100" height="96" /><BR /><BR />
						      <img src="http://www.interfreezone.org/webmarketing/IMG/tastogiallo.jpg" align="baseline" /></div></td>
                        <td bordercolor="#ffffff" bgcolor="#333366" height="218"><div align="center">
                            <table width="100%" border="0">
                              <tr>
                                <td width="45%"><div align="left"><img src="http://www.interfreezone.org/webmarketing/IMG/nmb8.gif" width="30" height="30" /></div></td>
                                <td width="55%"><div align="left"><a 
                  onclick="MM_goToURL('parent','http://www.interfreezone.org/restricted2.htm');return document.MM_returnValue" 
                  href="http://www.interfreezone.org/webmarketing/pg/REST.htm"></a><a 
                 
                  href="http://www.interfreezone.org/webmarketing/imp_service.html"><img height="32" 
                  src="http://www.interfreezone.org/webmarketing/IMG/bback_dw.gif" width="32" border="0" /></a></div></td>
                              </tr>
                            </table>
                            
                          <p><font color="#ffffff"><font 
                  face="Arial, Helvetica, sans-serif" size="2"><span class="style25"> IMPORTER'S 
                            SUPPORTING 
                            SERVICES</span><br />
                          </font><span class="Stile9"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><span class="style26"><span class="style27">International telephone numbers with direct connection via Telephone, Fax and Televideo conferencing <font face="Arial, Helvetica, sans-serif">form the countries delegation partecipating to the Inter-Market's Survey</font><font face="Arial, Helvetica, sans-serif"></font></span></span></font></font></font></font></font></font></font></span></font></p>
                        </div></td>
                      </tr>
                    </tbody>
				    </table>
				  <BR />                  
                  <table width="100%"  border="3">
                    <tr>
                      <td bgcolor="#FFFFCC" class="Stile11"><table width="100%" border="0">
                        <tr>
                          <td><div align="center"><img src="http://www.interfreezone.org/webmarketing/IMG/nmb9.gif" width="30" height="30" /></div></td>
                          <td class="Stile10 Stile1"><b><span class="txxgree Stile8 Stile9"><span class="style18">ITALIAN DELEGATION &quot;IEMAS-Inter-Markets-Associates&quot;</span><font size="2"><span class="Stile13"><br />
                          </span></font></span></b><span class="style35">Via Alassio, 10-20156-Milan Tel.Import's Desk 00393482626905 <br />
Tel 003902 36503719 Fax 003902 99982404 <br />
operating the &quot;INTER-MERCHANDISE-MARKETS &amp; TECHNOLOGY EXCHANGE&quot;</span></td>
                          <td><img src="http://www.interfreezone.org/webmarketing/IMG/CALL.jpg" width="100" height="67" /></td>
                        </tr>
                      </table>
                        <table width="100%" border="0" cellspacing="10">
                          <tr>
                            <td><img src="http://www.interfreezone.org/webmarketing/IMG/MERCHANDISE.jpg" width="227" height="179" /></td>
                            <td valign="middle" class="style3"><div align="left" class="Stile13">Divisione Operativa Autonoma dell'Inter-Markets-Export-Import-Consortiums-Associates-Network con Gestione delle Sale di Contrattazioni-Campionarie e Telematiche con Deposito Certificato di Autenticit&agrave; dei prodotti offerti in Export-Import &quot;Decertoffex&quot; collegate allea sostegno degli Incontri Bi-Settimanali tra Operatori nazionali-Esteri video-colle gati alle corrispondenti delegazioni in 27 paesi esteri della operanti presso i Magazzini Generali &quot;Self-Storage&quot; Inter-Porti-Zone-Franche-Centri Direzionali-Borse Mercantili Intrenazionali</div>
                              <div align="left"><a href="http://www.interfreezone.org/db/sitoexporter/pages/sez4org.html"><img src="http://www.interfreezone.org/webmarketing/IMG/ball.gif" width="14" height="14" border="0" /><span class="style23">CLICK  TO VISIT THE IEMAS-INTER-MERCHANDISE MARKETS</span></a></div></td>
                          </tr>
                        </table>
                        <p align="center" class="Stile9"><font size="4"><font size="1"><b><font face="Arial, Helvetica, sans-serif"><a href="http://www.interfreezone.org/webmarketing/http://www.interfreezone.org">www.interfreezone.org</a> - e.mail <a href="http://www.interfreezone.org/webmarketing/mailto:info@interfreezone.org"> info@interfreezone.org</a></font></b></font></font></p>
                        <p align="center" class="Stile10 Stile1"><font size="4"><span class="Stile8 Stile20"><strong><font face="Arial, Helvetica, sans-serif">INTER-FREE-ZONE-EXPORT &amp; IMPORT MARKETS ASSOCIATES</font> </strong><b><font face="Arial, Helvetica, sans-serif" size="1">&nbsp;<br />
                        </font></b></span></font><span class="style3 "> <font face="Arial, Helvetica, sans-serif">P.O.BOX 127&nbsp; - Pt. Via Besso, 5 -CH690 LUGANO 3 SWITZERLAND</font> &nbsp;<font face="Arial, Helvetica, sans-serif">Tel.0041786283699 Fx.<font face="Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif">. 0041-0916046287</font></font></font></span></p></td>
                    </tr>
                  </table>
                  <div align="center"><BR />
                  </div>
                  <table width="90%" border="1">
                    <tr>
                      <td bgcolor="#FFFFCC" class="Stile11"><div align="center" class="Stile52"> <strong><font face="Arial, Helvetica, sans-serif">Televideoconference Nr.: 0039 3482626905</font></strong></div></td>
                    </tr>
                    <tr>
                      <td height="20" bgcolor="#FFFFFF" class="Stile11"><marquee>
                        <font face="Arial, Helvetica, sans-serif" size="2"><b><span class="Stile8">UK - Germany - ,Belgium</span> - <span class="Stile8">France</span> - <span class="Stile10">AMERICA</span>: <span class="Stile8">USA</span> - <span class="Stile8">Brazil</span> - <span class="Stile10">AFRICA</span>: <span class="Stile8">South Africa</span> - <span class="Stile10">ASIA</span>: <span class="Stile8">Japan</span> - <span class="Stile8">Hong Kong</span> - <span class="Stile8">Singapore</span> - <span class="Stile8">China</span> - <span class="Stile10">AUSTRALIA</span>: <span class="Stile8">North American Free Zone Central Distribution Center.</span></b></font>
                                                                  </marquee></td>
                    </tr>
                  </table>
                  <div align="center"></div>                    </td>
              </tr>
            </tbody>
          </table>
          <div align="center"></div>
          <div align="center"></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" bordercolor="#333333" bgcolor="#333333">
      <tr>
        <td bgcolor="#FFFFCC" class="titolo"><div align="center">TO UNSUBSCRIBE</div></td>
      </tr>
	  <tr>
        <td width="700" bgcolor="#FFFFFF"><p align="center" class="style12">This message conforms to the requirements  of the 'CAN-SPAM Act of 2003' and was sent to you by the inter-Export-Import-Consortium-&ldquo;Secur-Import-Products-Authentication-Guarantee-Decagis&rdquo;  raffilate to Inter-Markets-Ntw<br />
          Federation of International Trade &amp;  Tecnology Transfer Associations-Geneve<br />
  <br />
  <strong>If you do not wish to receive ongoing  communication regarding products and services via e-mail from Inter-Consortium, </strong><br />
  <strong><a href="http://www.interfreezone.org/webmarketing/pg/unsubscribe.htm">please click  here</a></strong>.</p>        </td>
      </tr>
      
    </table></td>
  </tr>
</table>
</DIV>

</body>
</html>
