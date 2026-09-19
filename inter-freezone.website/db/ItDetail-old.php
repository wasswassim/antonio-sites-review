<?PHP
include("../include/interfree_dbinc.php");
include("../include/dbfix-php.php");


$db=mysql_connect($dbhost,$dbuser,$dbpasswd) or die ("Errore durante la connessione al database");

$sql="SELECT * FROM `ragionesociale` WHERE`Cod_clie`='". $_GET['codicino'] . "'";
//$sql="SELECT * FROM `ragionesociale` WHERE`Cod_clie`='CANDELORO'";
echo $sql;
echo "<br>";
echo $_GET["Cod_clie"];
echo "<br>";

mysql_select_db($dbname);
$result=mysql_query($sql);

//$result=mysql_db_query($__sartorm_dbname,$sql,$db);
$testata=mysql_fetch_array($result);
?>
<?php echo $testata["Cod_clie"]; 
?>
<BODY text=#525b6b vLink=#660000 aLink=#cc00cc link=#00FF00 bgColor=#525B6B>

<TABLE height=3937 width=100% align=center bgColor=#ffffff border=1>
  <TBODY> 
  <TR bgColor=#ff9933>
                            <td><div align="center">&nbsp;</div></td>
    <TD height=58>
      <BLOCKQUOTE>
        
		<center>
		  <table width="99%" height="344" border="8" align="center" cellpadding="2" cellspacing="2">
          <tr bgcolor=#993366>
            <td colspan="2" align="center"><font size="6" color="#FFFF33" face="Arial, Helvetica, sans-serif"><a href="./summary.htm"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/00ITALIANO/ball.gif" border=0></a><b>Borsa Mercantile Internazionale</b></font><br>
              <font size="4" color="#FFFF33" face="Arial, Helvetica, sans-serif">integrata con</font><br>
              <font size="5" color="#FFFF33" face="Arial, Helvetica, sans-serif"><a href="./summary.htm"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/00ITALIANO/ball.gif" border=0></a><b>Sale di Contrattazione Campionarie e Telematiche </b></font></td></tr>
          <tr>
            <td width="443" height="95" bgcolor="#525B6B"><div align="center"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/img1/up-menu.gif" alt="." width="100%" height="102"></div></td>
            <td width="48" height="95" bgcolor="#FFFFFF"><div align="center"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/img1/securimport.gif" alt="." width="100%" height="105" align="absmiddle"></div></td>
          </tr>
          <tr valign="top" bgcolor="#FFFFCC">
            <td height="106" colspan="2"><table width="99%" border="0" align="left" cellpadding="0" cellspacing="0">
                <tr>
                  <td rowspan="2"><img src="FotoCasaforte.jpg" alt="." width="134" height="100"></td>
                  <td><div align="center"><font color="#FFFF33" face="Arial, Helvetica, sans-serif" size="4"><b><font color="#FF0000">OSSERVATORIO 
                    INTERNAZIONALE EXPORT- IMPORT DELLA RETE delle 
                    ZONE e PUNTI FRANCHI</font></b></font></div></td>
                </tr>
                <tr>
                  <td height="57" valign="top"><div align="center"> <font size="5" color=red><a href="./SITOEXPORTER/pages/info-form.htm"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/00ITALIANO/ball.gif" border=0></a> Consorzio-Acquisti-Import "Inter-Covas"</font>
             <font> <br>Palazzo Congressi WTC, Piani 5-6 Strada 1 Centro Direzionale Milanofiori Assago Milano </font><br>
             <font> Tel 0236579993 - 0236579299 - 3482626905 www.inter-markets.org - info@asso-consorzi.org<br> <font size="4px" color="red">(Metro Verde Assago - Forum)</font> map:http://www.milanofiori.net/mappa1.php
              </font></div></td>
                </tr>
            </table></td>
          </tr>
          
        </table>
		</center>
		<table cellspacing=2 cellpadding=2 
                  width="90%" align=center border=10 bgcolor="#993366" height="214">
          <tbody>
            <tr bgcolor=#000000>
              <td height=126 bgcolor="#FFFF00" bordercolor="#ffcc66"><p align=center>&nbsp;</p>
                  <p align="center"><b><font color="#FF0033" size="6"><?php echo $testata["RagioneSociale"];?></font></b></p>
                <div align="center">
                    <table width="95%" border="5" bgcolor="#FFFFFF" height="29">
                      <tr>
                        <td width="388" bgcolor="#FFFF00" height="10"><font face="Arial, Helvetica, sans-serif" size="3" color="#FF0000"><b><font size="4">INTER-FREE-ZONE </font></b></font><font face="Arial, Helvetica, sans-serif" size="4" color="#FF0000"><b>EXHIBITSTAND 
                          Nr :</b></font></td>
                        <td width="303" height="10" bgcolor="#FFFFFF"><div align="center"><b><font color="#FF0033" size="6"><?php echo $testata["CenniStoriciE"]; ?></font></b></div></td>
                      </tr>
                    </table>
                </div>
                <div align="center"></div></td>
            </tr>
          </tbody>
        </table>
        <p align="center"><b><font size="5" color="#000080">Inter-Markets-Associates-Network</font></b></p>
        <p align="center">
        <font face="Arial, Helvetica, sans-serif" size="4"><b>INTER-FREE-ZONE-EXPORT 
        &amp; IMPORT MARKETS-ASSOCIATES</b></font></p>
        <p align="center"><b>
        <font face="Times New Roman" size="3" color="#993300">Inter-Covas-Ex-Import Consortiums-Associates-Network,<br> PoBox 508 – Pt. Via Seregno,1- CH6903 Lugano 3 Tl.+41767502687 </font></b></p>
        <DIV align=center>
          <FONT size=3><B>
          <FONT color=#0000ff face="Arial, Helvetica, sans-serif">INTERNET: 
        http://www.inter-markets.org- 
        E-MAIL:info@asso-consorzi.org</FONT></B></FONT></DIV>
        <DIV align=center>
          <p align="center">
          <font face="Arial, Helvetica, sans-serif"><b>
          <font size="5">OSSERVATORIO 
                                INTERNAZIONALE EXPORT- IMPORT DELLA RETE  </font><br><br>delle 
                                ZONE e PUNTI FRANCHI-MAGAZZINI GENERALI-SELF-STORAGES</b></font></DIV>
        <DIV align=center style="border-style: solid; border-width: 1; padding-left: 4; padding-right: 4; padding-top: 1; padding-bottom: 1">
            <p><font color="#0000FF"><b><font size="4" face="Arial, Helvetica, sans-serif" color="#FFFF00">&nbsp;</font><font size="6" face="Arial, Helvetica, sans-serif" color="#FFFF00">Inter-Market-Asso-Consorzi of Italy<br>Is Pleased to introduce the</font></b></font></p>
            <p><B>
            <FONT face="Arial, Helvetica, sans-serif" 
        color=#000080 size=4>Import AUTOMATED Trial Orders OFFER SYSTEM </FONT></B></p>
            <p><B><FONT color=#ffff00 size=4><FONT 
        face="Arial, Helvetica, sans-serif">based on “SECUR-IMPORT 
        Cert-Offers-Inter-Covas-GUARANTEE” </FONT></FONT></B><FONT size=4><B><FONT 
        face="Arial, Helvetica, sans-serif"><BR></FONT></B></FONT>
            <font color="#000080"><B><FONT 
        face="Arial, Helvetica, sans-serif"><FONT size=2>by the</FONT><FONT size=4> </FONT></FONT>
            <FONT face="Arial, Helvetica, sans-serif" size=2>Exporter indicated 
            below operating and Accredited </FONT></B></font></p>
            <p><font color="#000080"><B>
            <FONT face="Arial, Helvetica, sans-serif" size=2>under 
            Inter-Markets-Associates </FONT></B></font></p>
            <p><font color="#000080"><B>
            <FONT face="Arial, Helvetica, sans-serif" size=2>Authenticity-Conformity 
            and Affidability Products Quality Certifications&nbsp; </FONT></B>
            </font></p>
            <p>&nbsp;</p>
          </DIV>
        <DIV align=center>&nbsp;</DIV></BLOCKQUOTE></TD></TR>
  <TR bgColor=#cc9933>
                            <td height="57" valign="top"><div align="center">&nbsp;</div></td>
    <TD height=5710 bgcolor="#6600CC"><table height=3136 width=100% align=center border=1>
        <tbody> 
        <tr bgcolor=#6600cc> 
          <td height=5428 bgcolor="#525B6B"> 
            <div align="center">
              <table width="95%" border="8" height="681">
                <tr> 
                  <td height="758" bgcolor="#525B6B"> 
                    <div align=center> 
                      <div align=center> 
                        <pre align="center"><font face="Arial, Helvetica, sans-serif" color=#ffffff size=5><b><i><marquee><font color=#ffcc33 size=6>W e l c o m e&nbsp;&nbsp;     t o&nbsp;&nbsp;     t h e</font></marquee></i></b></font></pre></div>
                     <font face="Arial, Helvetica, sans-serif" 
                  color=#ffffff size=6><b><i>INTER-MERCANTILE BOURSE-EXCHANGE 
                        </i></b></font>
                      <p align=center><font face="Arial, Helvetica, sans-serif" 
                  color=#ffffff size=4><i><b>of &nbsp;INTER-FREE ZONE MARKET NETWORK</b></i></font></p>
                      <table width="95%" border="1" height="263">
                        <tr> 
                          <td height="237" width="77%" bgcolor="#525B6B"> 
                            <div align=center></div>
                            <table bordercolor=#ffcc66 cellspacing=2 cellpadding=2 
                  width="80%" align=center border=5>
                              <tbody> 
                              <tr bgcolor=#000000> 
                                <td height=75> 
                                  <p align=center><font color="#FFFFFF"><b><font size="2" face="Arial, Helvetica, sans-serif" color="#FFCC66">Click 
                                    to enter </font></b></font><font color="#FFCC66" face="Arial, Helvetica, sans-serif"><b><font size="2">in 
                                    </font><b><font size="2">Inter-Free-Zone-Market</font></b></b></font></p>
                                  <p align=center><a href="javascript:;" onClick="MM_goToURL('parent','http://www.interfreezone.org');return document.MM_returnValue"><img height=92 
                        src="http://www.inter-markets-secure-procurement.com/interfreezone/img1/mondo.gif" width=90 border="0" alt="CLICK HERE"></a> 
                                    <font color="#FFFFFF" face="Arial, Helvetica, sans-serif"><b></b></font></p>
                                </td>
                              </tr>
                              </tbody> 
                            </table>
                            <p align=center><img src="http://www.inter-markets-secure-procurement.com/interfreezone/img1/eu/up-menu.gif" width="100%" height="102"></p>
                          </td>
                          <td height="237" width="23%"> 
                            <div align="center"> 
                              <table height=279 cellspacing=2 cellpadding=2 width=95% 
                  border=5>
                                <tbody> 
                                <tr bgcolor=#ffffff> 
                                  <td height="87"> 
                                    <div align=center><img height=200 
                        src="http://www.inter-markets-secure-procurement.com/interfreezone/img1/securimport.gif" 
                    width=125></div>
                                  </td>
                                </tr>
                                </tbody> 
                              </table>
                            </div>
                          </td>
                        </tr>
                      </table>
                      <blockquote>
                        <blockquote>
                          <blockquote>
                            <div align="center">
                              <div align="center"><font color="#0000FF"><b><font size="4" face="Arial, Helvetica, sans-serif" color="#FFFF00">Inter-Free-Zone-Export 
                                mport Markets-Associates </font></b></font></div>
                              <div align="center"><font color="#0000FF"><b>
                                <font size="5" face="Arial, Helvetica, sans-serif" color="#FFFF00">&nbsp;Is Pleased to introduce the</font></b></font></div>
                            </div>
                            <div align="center"> 
                              <div align="center"> 
                                <p><font color="#FFFF00"><b>
                                <font size="5" face="Arial, Helvetica, sans-serif"> 
                                  Certified company indicated below</font></b></font></p>
                                <table cellspacing=2 cellpadding=2 
                  width="65%" align=center border=10 bgcolor="#993366" height="214">
                                  <tbody> 
                                  <tr bgcolor=#000000> 
                                    <td height=98 bgcolor="#FFFF00" bordercolor="#ffcc66"> 
                                      <p align=center><b><font color="#FF0033" size="6"><?php echo $testata["RagioneSociale"];?></font></b></p>
                                      <div align="center"> 
                                        <table width="95%" border="5" bgcolor="#FFFFFF" height="29">
                                          <tr> 
                                            <td width="118" bgcolor="#FFFF00" height="10"> 
                                              <font face="Arial, Helvetica, sans-serif" size="3" color="#FF0000"><b><font size="2">INTER-FREE-ZONE 
                                              </font></b></font><font face="Arial, Helvetica, sans-serif" size="2" color="#FF0000"><b>EXIBIT-STAND 
                                              Nr :</b></font></td>
                                            <td width="123" height="10" bgcolor="#FFFFFF">
                                              <div align="center"><b><font color="#FF0033" size="6"><?php echo $testata["CenniStoriciE"]; ?></font></b></div>
                                            </td>
                                          </tr>
                                        </table>
                                      </div>
                                      <div align="center"></div>
                                    </td>
                                  </tr>
                                  </tbody> 
                                </table>
                              </div>
                            </div>
                          </blockquote>
                        </blockquote>
                        <div align="center"> 
                          <p><font face="Arial, Helvetica, sans-serif" color="#000099"><b><font size="3" color="#FFFF00">The 
                            above Certified company is now presenting the Pre-qualified 
                            buyers <br>full range of  products line</font></b></font><font face="Arial, Helvetica, sans-serif" color="#FFFF00"><b><font size="3">, 
                            at the<br> </font><b><font size="5">Inter-Merchandise 
                            Mart & Commodity Exchange Network </font><br>
                            as well as in the 
                            </b><br><font size="5">Milan Inter-Markets-Commodity-Products Exchange </font><br>
                            Supported by: Authenticity Depositary Certification Inter-Covas
                          for foreign transactions 
                            </b></font></p>
                        </div>
                      </blockquote>
                      <p><img src="http://www.inter-markets-secure-procurement.com/interfreezone/img1/bkg_arw.gif" width="100%" height="83"></p>
                    </div>
                  </td>
                </tr>
              </table>
              <blockquote> 
                <blockquote> 
                  <blockquote> 
                    <div align="center"> 
                      <div align="center"></div>
                    </div>
                  </blockquote>
                </blockquote>
              </blockquote>
              <blockquote> 
                <div align="center"></div>
              </blockquote>
              <p>&nbsp;</p>
            </div>
            <table height=2125 width=100% align=center border=8>
              <tbody> 
              <tr bgcolor=#993366> 
                <td width="100%" height=2081> 
                  <div align=center> 
                    <div align=center>
                      <p><font size="6" color="#FFFF33" face="Arial, Helvetica, sans-serif"><a href="./summary.htm"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/00ITALIANO/ball.gif" border=0></a><b>Borsa Mercantile Internazionale</b></font><br>
                        <font size="4" color="#FFFF33" face="Arial, Helvetica, sans-serif">integrata con</font><br> 
                        <font size="5" color="#FFFF33" face="Arial, Helvetica, sans-serif"><a href="./summary.htm"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/00ITALIANO/ball.gif" border=0></a><b>Sale di Contrattazione Campionarie e Telematiche </b><br> </font>
                        <font size="6" color="#FFFF33" face="Arial, Helvetica, sans-serif"><a href="./summary.htm"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/00ITALIANO/ball.gif" border=0></a><font size="4" color="#FFFF33" face="Arial, Helvetica, sans-serif">con</font> Permanet Exhibit <font size="4" color="#FFFF33" face="Arial, Helvetica, sans-serif">per</font> l'Export-Import-Milanofiori</font><br><a href="./summary.htm"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/00ITALIANO/ball.gif" border=0></a>
                        <font size="4" color="#FFFF33" face="Arial, Helvetica, sans-serif">sostenuto dal </font><font size="5" color="#FFFF33" face="Arial, Helvetica, sans-serif">Deposito Certificato di Autenticit&agrave; Arbitrale Internazionali</font></p>
                    </div>
                    <table height=2293 width="100%" align=center border=0>
                      <tbody> 
                      <tr bgcolor=#ff9933> 
                        <td height=2286 bgcolor="#993366"> 
                          <div align=center> 
                            <table width="100%" border="5" cellspacing="2" cellpadding="2" align="center" height="2071">
                              <tr> 
                                <td width="10%" height="2032" valign="top"> 
                                  <table width="100%" border="0" cellspacing="5" cellpadding="0" align="center" height="2535">
                                    <tr bgcolor="#FFFFCC"> 
                                      <td height="140"> 
                                        <div align="center"><font color="#FF0033" face="Arial, Helvetica, sans-serif" size="3"><b><i><img src="http://www.inter-markets-secure-procurement.com/interfreezone/img1/exsuplly.gif" width="122" height="75"><br>
                                         <a href="./summary.htm"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/00ITALIANO/ball.gif" border=0></a> Richiesta Ordini da Importatori Esteri e Procedure della<br>Offerta Export</i></b></font></div>                                      </td>
                                    </tr>
                                    <tr bgcolor="#000066"> 
                                      <td height="1951" valign="top"> 
                                        <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"><b><font color="#FFFF00">1.</font></b><a href="lettere/a.pdf"> 
                                                  </a></font><font size="5" color=red><a href="./summary.htm"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/00ITALIANO/ball.gif" border=0></a></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="3">Export Offer's Summary</font></p>
                                        <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"><b><font color="#FFFF00">2.</font></b> 
                                          Exporter's Presentation.</font></p>
                                        <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"><b><font color="#FFFF00">3.</font></b> 
                                          Exporter Co. Data and Certification 
                                          of Conformity.</font></p>
                                        <p> <font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"><b><font color="#FFFF00">4.</font></b> 
                                          General Catalogue. </font></p>
                                        <p><font color="#FFFF00" face="Arial, Helvetica, sans-serif" size="2"><b>5.</b></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          Price List FOB & CIF.</font></p>
                                        <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          <b><font color="#FFFF00">6.</font></b> 
                                          Certified Sample-Order Pro-forma envoice.</font></p>
                                        <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          <b><font color="#FFFF00">7.</font></b> 
                                          Quality-ConformityCertificate; a-Secur-Import-Guarantee 
                                          b-"Euro-Quality-Export-Control" </font></p>
                                        <p><font color="#FFFF00" face="Arial, Helvetica, sans-serif" size="2"><b>8.</b></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          Cooperative Promotional-support; a- 
                                          Cd-rom catalogue-autoplay b- Local trade 
                                          show & Novelties c-Special web e-commerce 
                                          support. </font></p>
                                        <p><font color="#FFFF00" face="Arial, Helvetica, sans-serif" size="2"><b>9.</b></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          SPECIAL PROJECTS for; a- Sale-Buyng 
                                          Agency b- Sub Contract - Surplus c- 
                                          Licencing -Investments </font></p>
                                        <p><font color="#FFFF00" face="Arial, Helvetica, sans-serif" size="2"><b>10. 
                                          </b></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2">JOINT 
                                          VENTURES for; a- Cooproduction b- Distribution 
                                          c- Retaling d- Franchising e- Factory 
                                          Shop </font></p>
                                        <p><font color="#FFFF00" face="Arial, Helvetica, sans-serif" size="2"><b>11.</b></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          Group Procurement for: -Primary&Secondary 
                                          Materials </font></p>
                                        <p><font color="#FFFF00" face="Arial, Helvetica, sans-serif" size="2"><b>12.</b></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2">Invitation 
                                          to; a- Trade show b- Factory Tour </font></p>
                                        <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"><font color="#FFFF00"><b>13</b></font><b>.</b> 
                                          Exporter manager Cotact's Mr.Anthony 
                                          Candeloro </font></p>
                                        <p><font color="#FFFF00" face="Arial, Helvetica, sans-serif" size="2"><b>14.</b></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          Importer's Questionaire. </font></p>
                                        <p><font color="#FFFF00" face="Arial, Helvetica, sans-serif" size="2"><b>15.</b></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          Acceptance of Int.Arbitration. </font></p>
                                        <p><font color="#FFFF00" face="Arial, Helvetica, sans-serif" size="2"><b>16.</b></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          Others Diversified Exporter's Offers 
                                          </font></p>
                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>
                                        <p>&nbsp;</p>                                      </td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF"> 
                                      <td height="147"> 
                                        <div align="center"><font color="#FFFF99" size="4" face="Arial, Helvetica, sans-serif"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/img1/firm/crtif.gif" width="130" height="85"></font></div>                                      </td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF"> 
                                      <td height="147"> 
                                        <div align="center"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/img1/logo2.jpg" width="143" height="104"></div>                                      </td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF"> 
                                      <td height="113"> 
                                        <div align="center"></div>                                      </td>
                                    </tr>
                                  </table>
                                  <font color="#FFFF99" size="4" face="Arial, Helvetica, sans-serif"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/img1/mini73.gif" width="72" height="50"></font>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                </td>
                                <td width="90%" bgcolor="#FF0000" height="2032"> 
                                  <table width="100%" border="5" cellspacing="0" cellpadding="0" align="center" bgcolor="#FF3333" height="803">
                                    <tr bgcolor="#FF3333"> 
                                      <td height="820"> 
                                        <p align="center"><b><font size="6" color="#FFFF33" face="Arial, Helvetica, sans-serif">Certified 
                                          Products Presentation of the<br> Pre-Qualified Italian Company</font></b></p>
                                        <table width="95%" border="5" cellspacing="2" cellpadding="2" align="center" bgcolor="#FF3333" height="354">
                                          <tr bgcolor="#FFFFFF"> 
                                            <td height="79"> 
                                              <div align="center"><b><img src="<?php echo $testata["Logo"];?>"></b></div>
                                            </td>
                                          </tr>
                                        </table>
                                        <p align="center"><a href="lettere/logo.pdf"><b><font color="#FFFFFF" size="4">Clicca 
                                          qu&igrave; per visualizzare</font></b></a></p>
                                        
                                        <p></p>
                                        <table width="95%" border="5" cellspacing="2" cellpadding="2" align="center" bordercolor="#CCCCCC" bgcolor="#FF3333" height="311">
                                          <tr> 
                                            <td bgcolor="#FFFFFF">
                                              <div align="center"><b><img src="<?php echo $testata["Immagine1"];?>" width="218" ></b></div>
                                            </td>
                                            <td bgcolor="#FFFFFF"> 
                                              <div align="center"><b><img src="<?php echo $testata["Immagine2"];?>" width="218" ></b></div>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </table>
								  <p>&nbsp;</p>
                                  <table width="99%" border="4" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td bgcolor="#F2E7CE"><div align="center">
                                        <strong><em><font color="#FF0000" size="4" face="Arial, Helvetica, sans-serif">EXPORTER'S CATALOGUES &amp; Importer's  BUYER <br>Supporting Portals</font></em></strong><br>
                                        <font color="#FF0000"><strong><em><font size="2" face="Times New Roman, Times, serif"> for more data click below</font></em></strong> </font>
                                      </div>
									  <p>&nbsp;</p>
									  <table width="98%" border="5" cellspacing="2" cellpadding="2" align="center" bgcolor="#FF3333" height="354">
                                          <tr bgcolor="#FFFFFF"> 
                                            <td height="79"> 
                                              <iframe src="<?php echo $testata["Url"];?>" margin frameborder="0" width="99%" height="800" ></iframe>
                                              </td>
                                          </tr>
                                          <tr bgcolor="#FFCC00">
                                            <td bgcolor="#FFCC00"><div align="center">
                                              <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                <tr>
                                                  <td colspan="3" align="center" nowrap="nowrap" bgcolor="#000066"><table width="100%" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                      <td align="center" valign="middle"><span class="Stile89"><span class="Stile87"><span class="Stile90 Stile96 style68"><span class="style31 Stile215">proudly introduce the Certified Exporter Factory Outlet</span></span></span></span></td>
                                                      <td align="center" valign="middle"><span class="Stile89"><span class="Stile87"><span class="Stile90 Stile96 style68">FACTORY STORE</span></span></span></td>
                                                      <td align="center" valign="middle"><span class="Stile89"><span class="Stile87"><span class="style69">for Foreign Buyers Testing- Sampling Services</span></span></span></td>
                                                    </tr>
                                                  </table></td>
                                                </tr>
                                                <tr>
                                                  <td width="30%" valign="middle" nowrap="nowrap" bgcolor="#FEFF99"><div align="center" class="Stile89"><span class="Stile87"><span class="Stile90"><span class="Stile85"></span></span></span>
                                                    <div align="center">
                                                      <table width="100%" cellspacing="8" cellpadding="0">
                                                        <tr>
                                                          <td align="center" valign="middle"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/db/img/carrello/CASAFORTE.jpg" height="70" /></td>
                                                          <td align="center" valign="middle"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/db/img/carrello/dubai.jpg" height="70" /></td>
                                                          <td align="center" valign="middle"><img src="http://www.interfreezone.org/db/img/FIERA-FLAGS-web.jpg" height="70" /></td>
                                                        </tr>
                                                      </table>
                                                      <span class="Stile86"><br />
                                                      </span></div>
                                                  </div></td>
                                                  <td align="center" bgcolor="#FFFF99"><table width="370" height="80" background="http://www.inter-markets-secure-procurement.com/interfreezone/db/img/carrello/nome.gif">
                                                    <tr>
                                                      <td><div align="center"><span class="Stile220 Stile215">
                                                        <font color="#F7DD1D"><?php echo $testata["RagioneSociale"];?></font>
                                                      </span></div></td>
                                                    </tr>
                                                  </table></td>
                                                  <td width="30%" valign="middle" bgcolor="#FEFF99"><div align="center" class="Stile214">
                                                    <table width="100%" cellspacing="8" cellpadding="0">
                                                      <tr>
                                                        <td align="center" valign="middle"><span class="Stile123 Stile90"><img src="<?php echo $testata["Immagine1"];?>" height="70" border="0"/></span></td>
                                                        <td align="center" valign="middle"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/db/img/carrello/secure-import.jpg" height="70"></td>
                                                        <td align="center" valign="middle"><span class="Stile86"><span class="Stile123 Stile90"><img src="<?php echo $testata["Immagine2"];?>" height="70" border="0"/></span></span></td>
                                                      </tr>
                                                    </table>
                                                  </div></td>
                                                </tr>
                                              </table>
                                            </div></td>
                                          </tr>
                                          <tr bgcolor="#FFFFFF"> 
                                            <td> 
                                              <iframe src="<?php echo $testata["carrello"];?>" margin frameborder="0" width="100%" height="600" ></iframe>
                                              </td>
                                          </tr>
                                          <tr>
                                            <td align="center"><table width="100%" cellpadding="0" cellspacing="2" bgcolor="#009191">
                                              <tr>
                                                <td align="center" class="style2">Inter-Markets IMPORT- BUYER ASSISTANCE provided by   Pool Supporting Services  of Inter-Markets Associates-Network with Services Discount up to 75% </td>
                                              </tr>
                                              <tr>
                                                <td><table width="100%" border="0" align="center" cellpadding="" cellspacing="0" class="footer_tb">
                                                  <tr>
                                                    <td align="center" class="footer_td"><table width="100%" cellspacing="1" background="http://www.interfreezone.org/db/img/tex2.jpg">
                                                      <tr >
                                                        <td><table width="100%" cellspacing="1">
                                                          <tr>
                                                            <td><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/info-form.htm" target="_parent"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="11" height="11" border="0" /></a></td>
                                                            <td class="Stile144">Invitation to visit the  Exporter Manufacturer Exhibits-Showrooms - Special Discount BONUS $ 1000  - partecipating to Trade Fairs &amp; Factory   Tours </td>
                                                          </tr>
                                                        </table></td>
                                                      </tr>
                                                    </table></td>
                                                  </tr>
                                                  <tr>
                                                    <td align="center" class="footer_td"><table width="100%" cellpadding="2" cellspacing="1" bgcolor="#E2FAFE">
                                                      <tr>
                                                        <td align="center" bgcolor="#FFFFFF"><table width="100%" cellspacing="4" bgcolor="#009191">
                                                          <tr>
                                                            <td><img src="http://www.inter-markets-secure-procurement.com/interfreezone/db/img/carrello/CASAFORTE.jpg" height="75" /></td>
                                                            <td><div align="center"><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/info-form.htm" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/bonus.gif" height="75" border="0" /></a></div></td>
                                                            <td><div align="center"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/db/SITOEXPORTER/pages/img/DOLLARO.jpg" height="75" /></div></td>
                                                            <td><img src="http://www.inter-markets-secure-procurement.com/interfreezone/db/img/carrello/coccarda.jpg" height="75" /></td>
                                                            <td><img src="http://www.inter-markets-secure-procurement.com/interfreezone/db/img/carrello/secure-import.jpg" height="75" /></td>
                                                            <td><div align="center"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/db/SITOEXPORTER/pages/img/tour.jpg" height="75" /></div></td>
                                                            <td><div align="center"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/db/img/carrello/CERTIFICATO%20MICRO%20PAGE.gif" height="75" /></div></td>
                                                            <td><div align="center"><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/imp_service.html" target="_blank"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/db/SITOEXPORTER/img/iemas.jpg" height="75" border="0" /></a></div></td>
                                                            <td><div align="center"><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/info-form.htm" target="_blank"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/db/SITOEXPORTER/img/showroom.gif" height="75" border="0" /></a></div></td>
                                                            <td><img src="http://www.inter-markets-secure-procurement.com/interfreezone/db/img/carrello/dubai.jpg" height="75" /></td>
                                                          </tr>
                                                        </table></td>
                                                      </tr>
                                                      <tr>
                                                        <td align="center"><table width="100%">
                                                          <tr>
                                                            <td><a href="http://www.interfreezone.org/GROUP-PROCUREMENT-EXPORT/exdesk.asp" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0" /></a></td>
                                                            <td class="Stile144 style3">RESTRICTED &nbsp;Info-Desk - E X P O R T E R  &nbsp; Order Processing</td>
                                                            <td><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/imp_service.html" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="14" height="14" border="0" /></a></td>
                                                            <td class="Stile2 style3">RESTRICTED Info-Deskfor Import-BUYER - BENEFITS operating with Factory Shop </td>
                                                          </tr>
                                                        </table></td>
                                                      </tr>
                                                    </table></td>
                                                  </tr>
                                                  <tr>
                                                    <td align="center" bgcolor="#666666" class="footer_td"><table width="100%" height="25" cellspacing="1" background="http://www.interfreezone.org/db/img/tex2.jpg">
                                                      <tr >
                                                        <td><table width="100%" cellspacing="1">
                                                          <tr>
                                                            <td><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/info-form.htm" target="_parent"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="11" height="11" border="0" /></a></td>
                                                            <td class="Stile144">Web-Cam - Corner  Stores - Franchising</td>
                                                            <td><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/info-form.htm" target="_parent"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="11" height="11" border="0" /></a></td>
                                                            <td class="Stile144"> Factory Store</td>
                                                            <td><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/info-form.htm" target="_parent"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="11" height="11" border="0" /></a></td>
                                                            <td class="Stile144">Import Distributor Mart </td>
                                                            <td><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/info-form.htm" target="_parent"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="11" height="11" border="0" /></a></td>
                                                            <td class="Stile144">Contracts</td>
                                                            <td><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/info-form.htm" target="_parent"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="11" height="11" border="0" /></a></td>
                                                            <td class="Stile144">Premium&nbsp; Job Lots &nbsp;&nbsp;</td>
                                                            <td><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/imp_service.html" target="_parent"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="11" height="11" border="0" /></a></td>
                                                            <td class="Stile144">Import Supporting Services </td>
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
										<p>&nbsp;</p>
                                          <table width="99%" border="4" cellpadding="0" cellspacing="0" bgcolor="#FFFFE1">
                                            <tr>
                                              <td width="8%"><a href="<?php echo $testata["Url"];?>"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/00ITALIANO/ball.gif" width="14" height="14" border="0"></a></td>
                                              <td width="92%"><div align="left"><font color="#000066" size="3" face="Arial, Helvetica, sans-serif"><strong>Company Website</strong></font></div></td>
                                            </tr>
                                            <tr>
                                              <td><a href='<?php echo $testata["carrello"]; ?>'><img src="http://www.inter-markets-secure-procurement.com/interfreezone/00ITALIANO/ball.gif" alt=" " width="14" height="14" border="0"></a></td>
                                              <td bgcolor="#FFFFE1"><div align="left"><font size="3"><strong><font color="#000066" face="Arial, Helvetica, sans-serif">Company Factory Store <br>
                                                for sampling operations</font></strong></font></div></td>
                                            </tr>
                                            <tr>
                                              <td><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/info-form.htm" target="_blank"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/00ITALIANO/ball.gif" alt=" " width="14" height="14" border="0"></a></td>
                                              <td><div align="left"><strong><font color="#000066" size="3" face="Arial, Helvetica, sans-serif">Export-Catalogue<br> 
                                                and Company Info Data</font></strong></div></td>
                                            </tr>
                                            <tr>
                                              <td><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/info-form.htm"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/00ITALIANO/ball.gif" alt=" " width="14" height="14" border="0"></a></td>
                                              <td><div align="left"><font color="#000066" size="3" face="Arial, Helvetica, sans-serif"><strong>Certified Export-Offers</strong>         with</font><font size="3"><br>
                                                  <font color="#000066" face="Arial, Helvetica, sans-serif"><strong> Inter-Markets Import Consortiums Supporting Services         and Authenticity -Conformity </strong></font><br>
                                                  <font color="#000066" face="Arial, Helvetica, sans-serif"><strong>Trackability Certification - </strong></font><br>
                                                </font>
                                              </div>                                                <p align="left"><font color="#000066" size="3" face="Arial, Helvetica, sans-serif"><strong>3TPV &quot;Third Party Validation&quot; </strong></font></p></td>
                                            </tr>
                                        </table></td>
                                    </tr>
                                  </table>
                                  <p>&nbsp;</p>
                                  <table width="99%" border="4" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td bgcolor="#7DD5FF"><div align="center">
                                        <p><strong><em><font color="#000033" size="3" face="Arial, Helvetica, sans-serif">INTER-MARKETS</font></em></strong>
                                            <strong><em><font color="#000033" size="3" face="Arial, Helvetica, sans-serif"> EXPORT-IMPORT </font></em></strong>
                                            <strong><em><font color="#000033" size="3" face="Arial, Helvetica, sans-serif">CONSORTIUMS ASSOCIATES</font></em></strong><br/>
                                            <strong><em><font color="#000033" size="3" face="Arial, Helvetica, sans-serif"> <font size="2">Apply for more Supporting Services</font></font></em></strong>  </p>
                                        </div>
                                          <table width="99%" border="4" cellpadding="0" cellspacing="0" bgcolor="#D2F0FF">
                                            <tr>
                                              <td width="8%"><a href="lettere/A1-PROCEDURE_RICHIESTA_ORDINE_E_REGOLAMENTAZIONE_PER_PREVENTIVI_EXPORT.pdf" target="_blank"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/00ITALIANO/ball.gif" width="14" height="14" border="0"></a></td>
                                              <td width="92%"><div align="left"><font color="#000066" size="3" face="Arial, Helvetica, sans-serif"><strong>Richiesta Ordine Prova<br> 
                                                per Campionamenti </strong></font><font size="3">- <a href="lettere/B2-Proforma_preventivo_prezzi-1.xls"><font color=red><b>MODULO ORDINE PROVA</b></font></A></font></div></td>
                                            </tr>
											<tr>
                                              <td width="8%"><a href="lettere/lettere-richiesta-incontro.pdf" target="_blank"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/00ITALIANO/ball.gif" width="14" height="14" border="0"></a></td>
                                              <td width="92%"><div align="left"><font color="#000066" size="3" face="Arial, Helvetica, sans-serif"><strong>Invito Incontro 
                                                Compratori-Importatori Esteri </strong></font></div></td>
                                            </tr>
											<tr>
                                              <td width="8%"><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/SEZ4ORG.html"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/00ITALIANO/ball.gif" width="14" height="14" border="0"></a></td>
                                              <td width="92%"><div align="left"><font color="#000066" size="3" face="Arial, Helvetica, sans-serif"><strong>Export-Import Priority Request-Offers from Italy</strong></font></div></td>
                                            </tr>
                                            <tr>
                                              <td><a href="http://bizcenter.int-markets.org"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/00ITALIANO/ball.gif" alt=" " width="14" height="14" border="0"></a></td>
                                              <td><div align="left"><font size="3"><strong><font color="#000066" face="Arial, Helvetica, sans-serif">Inter-Markets &amp; Company Free     Coperative promotion Program <br>
                                                to     Accredited Importer-Distributors</font></strong></font></div></td>
                                            </tr>
                                            <tr>
                                              <td><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/pool.htm" target="_blank"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/00ITALIANO/ball.gif" alt=" " width="14" height="14" border="0"></a></td>
                                              <td><div align="left"><font size="3"><strong><font color="#000066" face="Arial, Helvetica, sans-serif">More Information on the  
                                                Inter-Markets IMPORT-
                                                SUPPORTING SERVICES</font></strong></font></div></td>
                                            </tr>
                                        </table></td>
                                    </tr>
                                  </table>
                                  <p align="center"><font color="#FFFF00" size="4"><b>Se 
                                    non si possiede Acrobat cliccare 
                                        <a href="http://www.adobe.it/products/acrobat/readstep.html"><font size="6">qui</font></a> 
                                    per scaricarlo</b></font></p>
                                  <p align="center"><table border=4 align="center"><tr><td><img src="http://www.inter-markets-secure-procurement.com/interfreezone/img1/logotele.gif" alt="richieste-prioritarie" width="250" height="156"></td></tr><tr><td><div align="center"><strong><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/SEZ4ORG.html" target="_blank"><font color="#FFFF00">Priority Requests</font></a></strong></div></td>
                                  </tr></table></p>
                                  <p align="center"><font face="Arial, Helvetica, sans-serif" size="4"><b><font color="#FFFF00">INTERNATIONAL</font></b></font></p>
                                  <p align="center"><font color="#FFFF00" size="4"><b><font face="Arial, Helvetica, sans-serif">S U P P O R T I N G<br>S E R V I C E S</font></b></font><font color="#FFFF00"><br>
                                    </font> </p>
                                 
                                 
                                </td>
                                <td width="10%" height="2032" valign="top"> 
                                  <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center" height="1938">
                                    <tr bgcolor="#FFFFCC"> 
                                      <td height="119"> 
                                        <div align="center"> 
                                          <p><font size="3" face="Arial, Helvetica, sans-serif"><font size="4"><font color="#FF3333" size="3"><i><b><img src="http://www.inter-markets-secure-procurement.com/interfreezone/img1/eu/imdemand.gif" width="129" height="75"><br><br><a href="http://www.interfreezone.org/db/Summary.htm"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/00ITALIANO/ball.gif" border=0></a>
                                            Bollettino delle<br>Richieste Estere</b></i></font></font></font></p>
                                          <p>&nbsp;</p>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr bgcolor="#000066"> 
                                      <td height="1974" valign="top"><p><a href="http://www.interfreezone.org/db/Summary.htm"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/00ITALIANO/ball.gif" border=0></a> 
                                        <font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2">For 
                                          Samples-Trial Order Shipments Based 
                                          On "SECUR-IMPORT-Assurance of Europark 
                                          INTER-FREE ZONE Corporete Satisfaction 
                                          & Buy Back Guarantee </font></p>
                                        <p><font color="#FFFF00" face="Arial, Helvetica, sans-serif" size="2"><b>1.</b></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          COURTESY SERVICES a. Overseas Free tel. 
                                          Green Lines </font></p>
                                        <p><font color="#FFFF00" face="Arial, Helvetica, sans-serif" size="2"><b>a.</b></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          Analysis of Local Requirements </font></p>
                                        <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"><b><font color="#FFFF00">b.</font></b> 
                                          Overseas New Products Research</font></p>
                                        <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          <b><font color="#FFFF00">c.</font></b> 
                                          Free Transaction Assistance</font></p>
                                        <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"><b><font color="#FFFF00">d.</font></b>Televideomeeting 
                                          Negotiations f. Buyers Delegation Trade 
                                          Fair g. Overseas Products Adaption </font></p>
                                        <p><font color="#FFFF00" face="Arial, Helvetica, sans-serif" size="2"><b>2.</b></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          IMPORT GROUP DISCOUNT Volume-Discount 
                                          Buying Group Procurament & Financing 
                                          Services.</font></p>
                                        <p><font color="#FFFF00" face="Arial, Helvetica, sans-serif" size="2"><b>3.</b></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          PRODUCTS CERTIFICATION a. Inter-Export-Quality-Control 
                                          b. Inspection & Expediting </font></p>
                                        <p><font color="#FFFF00" face="Arial, Helvetica, sans-serif" size="2"><b>4.</b></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          "SECUR-IMPORT GUARANTEE" a. Buy-Back 
                                          unsuitable products b. Refurbishing 
                                          Services.</font></p>
                                        <p><font color="#FFFF00" face="Arial, Helvetica, sans-serif" size="2"><b>5.</b></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          DIRECT CONTACT NEGOTIATIONS</font></p>
                                        <p><font color="#FFFF00" face="Arial, Helvetica, sans-serif" size="2"><b>a.</b></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          Bourse-Mercantile-Exchange</font></p>
                                        <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"><b><font color="#FFFF00">b.</font></b>On-Line 
                                          Televideomeetings</font></p>
                                        <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          <b><font color="#FFFF00">c.</font></b> 
                                          Products Selection & Sampling</font></p>
                                        <p><font color="#FFFF00" face="Arial, Helvetica, sans-serif" size="2"><b>d.</b></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          Satisfaction-Guarantee Support. </font></p>
                                        <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"><b><font color="#FFFF00">6.</font></b> 
                                          FINANCING FACILITATIONS. </font></p>
                                        <p><font color="#FFFF00" face="Arial, Helvetica, sans-serif" size="2"><b>7. 
                                          </b></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2">INSURANCE 
                                          GROUP DISCOUNT. 8. GROUP SHIPMENT SAVINGS.</font></p>
                                        <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          <b><font color="#FFFF00">8.</font></b> 
                                          FREE ZONE WAREHOUSING with : a.Shipping 
                                          de-consolidation b.Re-labelling-Repacking 
                                          c.Re-routing shipments. </font></p>
                                        <p><font color="#FFFF00" face="Arial, Helvetica, sans-serif" size="2"><b>9.</b></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          AFTER-SALES-SPARE PARTS. </font></p>
                                        <p><font color="#FFFF00" face="Arial, Helvetica, sans-serif" size="2"><b>10.</b></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          Full PROMOTIONAL SUPPORT. </font></p>
                                        <p><font color="#FFFF00" face="Arial, Helvetica, sans-serif" size="2"><b>11.</b></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          PRODUCTS PUBLICATIONS.</font></p>
                                        <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          <b><font color="#FFFF00">12.</font></b> 
                                          SPECIAL PROJECTS for : <b><font color="#FFFF00">a.</font></b>Joint-Ventures</font></p>
                                        <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"><b><font color="#FFFF00">b.</font></b>Sub-contracts 
                                          </font></p>
                                        <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"><b><font color="#FFFF00">c.</font></b>Importing 
                                          Distribution </font></p>
                                        <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"><b><font color="#FFFF00">d.</font></b>Retailing-Franchising 
                                          </font></p>
                                        <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"><b><font color="#FFFF00">e.</font></b>Factory 
                                          Testing Stores f.Foreign Investments 
                                          </font></p>
                                        <p><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"><b><font color="#FFFF00">f.</font></b>Sponsorship 
                                          Events h.Overseas Expo & Factory Tours 
                                          i.Barter-Counter Trade Off-Set j.International 
                                          Auctions. </font></p>
                                        <p><font color="#FFFF00" face="Arial, Helvetica, sans-serif" size="2"><b>13.</b></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2"> 
                                          JURIDICAL ASSISTANCE a.Off-shore Corporation 
                                          b.Licensing-Trade Mark c.Arbitration. 
                                          </font></p>
                                        <p><font color="#FFFF00" face="Arial, Helvetica, sans-serif" size="2"><b>14. 
                                          </b></font><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="2">Others 
                                          Diversified Importer's Offers.</font></p>
                                      </td>
                                    </tr>
                                  </table>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                </td>
                              </tr>
                            </table>
                          </div>
                        </td>
                      </tr>
                      </tbody> 
                    </table>
                  </div>
                </td>
              </tr>
              </tbody>
            </table>
            <p align="center"><font color="#ffffff" size="5" face="Arial, Helvetica, sans-serif">Vedi 
              lista in Italiano dei servizi agli importatori </font></p>
            <table height=1618 cellspacing=2 cellpadding=2 width=95% 
                  align=center border=5>
              <tbody> 
              <tr bgcolor=#ff3333> 
                <td bgcolor="#525B6B" height="296"> 
                  <div align=center> 
                    <table height=42 width=95% align=center border=0>
                      <tbody> 
                      <tr bgcolor=#cc0000> 
                        <td height=38> 
                          <div align=center><b><font 
                              face="Arial, Helvetica, sans-serif" 
                              color=#ffff66>Act now for a direct export-manufacturers 
                            contacts, economically, efficiently what’s more all 
                            in<br><br>“ONE STOP CONVENIENCE” for your substantial “Economy 
                            of Scale”</font></b></div>
                        </td>
                      </tr>
                      </tbody> 
                    </table>
                    <p>&nbsp;</p>
                    <table bordercolor=#cc3300 height=122 width=90% 
                        align=center border=8>
                      <tbody> 
                      <tr> 
                        <td width="18%" bgcolor=#e4e4e4 height=116> 
                          <div align="center"> 
                            <pre><img height=102 src="http://www.inter-markets-secure-procurement.com/interfreezone/img1/torri.gif" width=107></pre>
                          </div>
                        </td>
                        <td width="15%" bgcolor=#ffffff height=116> 
                          <div align="center"> 
                            <pre><img height=106 src="http://www.inter-markets-secure-procurement.com/interfreezone/img1/certificato.gif" width=85></pre>
                          </div>
                        </td>
                        <td width="13%" bgcolor=#ffffff height=116> 
                          <div align="center"> 
                            <pre><img height=110 src="http://www.inter-markets-secure-procurement.com/interfreezone/img1/video.gif" width=91 align=middle></pre>
                          </div>
                        </td>
                        <td width="19%" bgcolor=#ffffff height=116> 
                          <div align="center"> 
                            <pre><img height=105 src="http://www.inter-markets-secure-procurement.com/interfreezone/img1/cornice.gif" width=189 align=middle></pre>
                          </div>
                        </td>
                      </tr>
                      </tbody> 
                    </table>
                    <p><font face="Arial, Helvetica, sans-serif" 
                        color=#ffffff size=5><b><a href="http://www.interfreezone.org/db/Summary.htm"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/00ITALIANO/ball.gif" border=0></a> Apply NOW for Your 
                      FREE Courtesy Invitation to visit</b></font></p>
                    <p><font face="Arial, Helvetica, sans-serif" 
                        color=#ffffff size=4><b>Your closest Free Zone Inter- 
                      Market</b></font></p>
                    <table cellspacing=2 cellpadding=2 width=70% border=5>
                      <tbody> 
                      <tr> 
                        <td bgcolor=#ffffff> 
                          <div align=center><img height=150 
                              src="http://www.inter-markets-secure-procurement.com/interfreezone/img1/factory.gif" 
                            width=150></div>
                        </td>
                        <td bgcolor=#333366> 
                          <div align=center><img height=156 
                              src="http://www.inter-markets-secure-procurement.com/interfreezone/img1/torri.gif" 
                          width=159></div>
                        </td>
                      </tr>
                      </tbody> 
                    </table>
                  </div>
                </td>
              </tr>
              <tr bgcolor=#ff9933> 
                <td height="971" bgcolor="#525B6B"> 
                  <p align=center><font 
                        face="Arial, Helvetica, sans-serif" color=#ffffff 
                        size=2><b><font size="7" color="#FFFF00">CLICK BELOW</font></b></font></p>
                  <p align=center><font 
                        face="Arial, Helvetica, sans-serif" color=#ffffff 
                        size=2><b> <font size="3">for Your Secur-Import Certified 
                    Export Samples Order on Europark-Inter-Free-Zone</font></b></font></p>
                  <p align=center><b><font face="Arial, Helvetica, sans-serif" color="#33FF00" size="5">&quot;SECURE-IMPORT 
                    GUARANTEE&quot;</font></b></p>
                  <p align=center><b><font 
                        face="Arial, Helvetica, sans-serif" color=#cc3399 
                        size=5><font size="3" color="#FFFFFF">supported by the</font></font></b></p>
                  <p align=center><b><font face="Arial, Helvetica, sans-serif" color="#33FF00" size="5">"Euro-Quality 
                    Export Control Guarantee" </font></b></p>
                  <p align=center><b><font 
                        face="Arial, Helvetica, sans-serif" color=#ffffff 
                        size=2>to obtain Import-Agency-Distributorship &amp; Jont-Venture 
                    OPPORTUNITIES </font></b></p>
                  <p align=center><b><font face="Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">PLEASE 
                    NOTE : </font></b><font face="Arial, Helvetica, sans-serif" size="2" color="#FFFFFF">ENTR 
                    FIRSTLY THE FOREIGN OR DOMESTIC OPERATIONS AND THEN YOUR MARKETS<br>
                    </font><font face="Arial, Helvetica, sans-serif" 
                              color=#003366 size=3><b><font size="2"><tt><font color="#FFFFFF">For</font></tt></font></b></font><font color="#FFFFFF"><tt><font face="Arial, Helvetica, sans-serif" size="2"><b> 
                    Green Line sale Contact E-MAIL -fax - video-meeting</b></font></tt></font></p>
                  <p align=center><tt><font face="Arial, Helvetica, sans-serif" color="#003366" size="2"><font color="#33FF66"><b><font color="#00FF00">apply 
                    beow:</font></b></font></font></tt><font color="#FFFF99" size="4" face="Arial, Helvetica, sans-serif"><br>
                    to start to buy - sale trought the world over right from your 
                    closest Inter-Free-Zone-Market<br><br> ECONOMICALLY - EFFICIENTLY 
                    AND WORTHMORE RISK FREE </font></p>
                  <p align=center>&nbsp;</p>
                  <table width="100%" border="1" height="116">
                    <tr> 
                      <td height="22" bgcolor="#FFCC66" bordercolor="#FF0000"> 
                        <p align="center"><font color="#FFFFFF" face="Arial, Helvetica, sans-serif" size="3"><b><font color="#0000CC">CLICK 
                          FOR </font></b></font></p>
						  
						  <p align="center"><font color="#0000CC"><a href="./ItDetail2.php?Codice=<?php echo $testata["Codice"];?>" target="_parent"><img src="http://www.inter-markets-secure-procurement.com/interfreezone/img1/bback_dw.gif" width="54" height="50" border="0"></a></font></p>
                        <div align="center"> 
                          <pre align="center"><font color="#0000CC" face="Arial, Helvetica, sans-serif" size="5"><b><font color="#FF0000">A P P L Y     N O W</font></b></font></pre>
                        </div>
                        <p align="center"><font color="#0000CC" face="Arial, Helvetica, sans-serif" size="3"><b> 
                          more INFORMATION about NEW PRODUCTS, MARKETS<br><br>
                          AND THE OPPORTUNITIES OFFERED BY THE MARKETS INDICATED 
                          BELOW<br><br>
                          to receive Your Free Cortesy Certified Sample Order QUOTATIONS<br>
                          under Secur-Import-After-Sale-GUARANTEE </b></font></p>
                      </td>
                    </tr>
                  </table>
                  <table width="100%" border="5" cellspacing="2" cellpadding="2" align="center" height="209" bgcolor="#99CCFF" bordercolor="#FF0000">
                    <tr bordercolor="#FF0000"> 
                      <td width="20%" height="134" bordercolor="#FF0000" bgcolor="#FFFF99"> 
                        <div align="center"> 
                          <p align="center"><b><font color="#33FF66" face="Arial, Helvetica, sans-serif" size="2"><font color="#FF0000">1</font></font></b></p>
                          <p align="center"><b><font color="#33FF66" face="Arial, Helvetica, sans-serif" size="2"><font color="#000000">EXPORT 
                            MANUFACTURING MARKET</font></font></b></p>
                        </div>
                      </td>
                      <td width="17%" height="134" bgcolor="#FFFF99"> 
                        <div align="center"> 
                          <p><b><font face="Arial, Helvetica, sans-serif" size="2" color="#FF0000">2</font></b></p>
                          <p><b><font color="#33FF66" face="Arial, Helvetica, sans-serif" size="2"><font color="#000000">COMMODITY 
                            EXCHANGE</font></font><font face="Arial, Helvetica, sans-serif" size="2"><br>
                            </font></b></p>
                        </div>
                      </td>
                      <td width="16%" height="134" bgcolor="#FFFF99"> 
                        <div align="center"> 
                          <p><b><font color="#33FF66" face="Arial, Helvetica, sans-serif" size="2"><font color="#FF0000">3</font></font></b></p>
                          <p><b><font color="#33FF66" face="Arial, Helvetica, sans-serif" size="2"><font color="#000000">INNOVATION 
                            TECHNOLOGY <br>
                            MART </font></font></b></p>
                        </div>
                      </td>
                      <td width="15%" height="134" bgcolor="#FFFF99"> 
                        <div align="center"> 
                          <p><b><font color="#33FF66" face="Arial, Helvetica, sans-serif" size="2"><font color="#FF0000">4</font></font></b></p>
                          <p><b><font color="#33FF66" face="Arial, Helvetica, sans-serif" size="2"><font color="#000000">SUB 
                            CONTRACT MART</font></font></b></p>
                        </div>
                      </td>
                      <td width="18%" height="134" bgcolor="#FFFF99"> 
                        <p align="center"><b><font color="#33FF66" face="Arial, Helvetica, sans-serif" size="2"><font color="#FF0000">5</font></font></b></p>
                        <p align="center"><b><font color="#33FF66" face="Arial, Helvetica, sans-serif" size="2"><font color="#000000">BUYNG 
                          GROUP CONSORTIUM</font></font></b></p>
                      </td>
                      <td width="14%" height="134" bgcolor="#FFFF99"> 
                        <p align="center"><b><font color="#33FF66" face="Arial, Helvetica, sans-serif" size="2"><font color="#FF0000">6</font></font></b></p>
                        <p align="center"><b><font color="#33FF66" size="2" face="Arial, Helvetica, sans-serif"><font color="#000000">IMPORT 
                          MART</font></font></b></p>
                      </td>
                    </tr>
                    <tr bordercolor="#FF0000"> 
                      <td width="20%" height="163" bgcolor="#FFFF99"> 
                        <p align="center"><b><font color="#33FF66" face="Arial, Helvetica, sans-serif" size="2"><font color="#FF0000">7</font></font></b></p>
                        <p align="center"><b><font color="#33FF66" face="Arial, Helvetica, sans-serif" size="2"><font color="#000000"> 
                          DISTRIBUTOR MARKET</font></font></b></p>
                      </td>
                      <td width="17%" height="163" bgcolor="#FFFF99"> 
                        <div align="center"> 
                          <p><b><font color="#33FF66" face="Arial, Helvetica, sans-serif" size="2"><font color="#FF0000">2</font></font></b></p>
                          <p><b><font color="#33FF66" face="Arial, Helvetica, sans-serif" size="2"><font color="#000000">CHAINE-DEPT 
                            STORES MARKET</font></font></b></p>
                        </div>
                      </td>
                      <td width="16%" height="163" bgcolor="#FFFF99"> 
                        <p align="center"><b><font color="#33FF66" face="Arial, Helvetica, sans-serif" size="2"><font color="#FF0000">9</font></font></b></p>
                        <p align="center"><b><font color="#33FF66" face="Arial, Helvetica, sans-serif" size="2"><font color="#000000">RETAIL 
                          FACTORY STORES</font></font></b></p>
                      </td>
                      <td width="15%" height="163" bgcolor="#FFFF99"> 
                        <p align="center"><b><font color="#33FF66" face="Arial, Helvetica, sans-serif" size="2"><font color="#FF0000">10</font></font></b></p>
                        <p align="center"><b><font color="#33FF66" face="Arial, Helvetica, sans-serif" size="2"><font color="#000000">FRANCHISING 
                          MART</font></font></b></p>
                      </td>
                      <td width="18%" height="163" bgcolor="#FFFF99"> 
                        <div align="center"> 
                          <p><b><font color="#33FF66" face="Arial, Helvetica, sans-serif" size="2"><font color="#FF0000">11</font></font></b></p>
                          <p><b><font color="#000000" face="Arial, Helvetica, sans-serif" size="2">CONTRACTS 
                            MARKETS</font></b></p>
                        </div>
                      </td>
                      <td width="14%" height="163" bgcolor="#FFFF99"> 
                        <div align="center"> 
                          <p><b><font color="#33FF66" face="Arial, Helvetica, sans-serif" size="2"><font color="#FF0000">12</font></font></b></p>
                          <p><b><font color="#33FF66" face="Arial, Helvetica, sans-serif" size="2"><font color="#000000">AUCTION 
                            SALES</font></font></b></p>
                        </div>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              </tbody> 
            </table>
            <p>&nbsp;</p>
          </td>
        </tr>
        </tbody>
      </table>
    </TD>
  </TR></TBODY></TABLE>
  </BODY>