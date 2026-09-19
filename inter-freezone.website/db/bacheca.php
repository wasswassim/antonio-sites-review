<?php
include("../include/interfree_dbinc.php");
include("../include/dbfix-php.php");


$db=mysql_connect($dbhost,$dbuser,$dbpasswd) or die ("Errore durante la connessione al database");

$sql= "SELECT * FROM `ragionesociale` where `Codice` = '".$_GET["Codice"]."';";
mysql_select_db($dbname);
$result=mysql_query($sql);


$testata=mysql_fetch_array($result);

?>

<style type="text/css">
<!--
.Stile8 {font-size: 16px}
.Stile9 {font-size: 10px}
.Stile10 {font-size: 10pt}
.Stile11 {color: #000066}
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
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	color: #FFFF00;
	font-weight: bold;
	font-size: 12px;
}
.style5 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 14pt; color: #FFFF00; }
.style10 {font-family: Arial, Helvetica, sans-serif; color: #000066; font-weight: bold; font-size: 12px; }
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
.style32 {font-family: Verdana, Arial, Helvetica, sans-serif; color: #000033; font-weight: bold; font-size: 16px; }
.style33 {font-family: Arial, Helvetica, sans-serif; color: #FFFF00; font-weight: bold; }
.Stile131 {font-family: Arial, Helvetica, sans-serif;
	font-size: 11pt;
}
.style18 {font-family: Arial, Helvetica, sans-serif; color: #000066; font-weight: bold; font-size: 18px; }
.style23 {	font-size: 8pt;
	text-decoration: none;
	color: #000066;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: normal;
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
.style42 {font-size: 9px}
.Stile53 {font-family: Arial, Helvetica, sans-serif; font-size: 14pt; font-weight: bold; color: #FFFFCC; }
.titolo {font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-style: normal;
	font-weight: bold;
	color: #000066;
}
.Stile132 {color: #FFFF00}
.Stile133 {font-size: 14px}
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
  window.open('http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/cart.asp');
}

//-->
</script>
</head>
<body onLoad="text('  W e l c o m e   t o   E U R O P A R K ');" bgcolor="#000033" link="#000066" vlink="#000066" alink="#FFFF00" text="#ECE4BD" topmargin="0" rightmargin="0">

<div align="center">
  <table width="700" border="8" height="1131">
    <tr> 
              <td bgcolor="#FFFF99" valign="top">               
			  <table width="100%" border="2" cellpadding="5" cellspacing="5">
                <tr bgcolor="#72060B">
                  <td colspan="5"><div align="center" class="Stile53">
                    <table width="100%" border="8">
                      <tr>
                        <td><div align="center"><span id="sez1" class="Stile53"><strong><span class="Stile19">SPORTELLO EXPORT  - EXPORTER'S DESK </span></strong></span></div></td>
                      </tr>
                    </table>
                  </div></td>
                </tr>
                
                
				
				               
                <tr bgcolor="#99FFFF">
                  <td colspan="5" align="center" bgcolor="#666666" class="Stile27"><BR>
                    <table width="100%" border="7" bgcolor="#FFFF33">
                      <tr>
                        <td><table width="100%" border="0">
                          <tr>
                            <td><div align="center">
                              <table width="100%" border="2" cellspacing="0" cellpadding="2">
                                <tr>
                                  <td><img src="http://www.interfreezone.org/db/sitoexporter/pages/img/LOGO MANNO BUILDING.jpg" width="120" height="90"></td>
                                </tr>
                              </table>
                              </div></td>
                            <td><table width="100%" border="0" cellpadding="2" cellspacing="0" bgcolor="#FFFF33">
                              <tr>
                                <td><table width="100%" border="0" cellspacing="6">
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
                                    <td><div align="center"><span class="style30 Stile9 Stile9 Stile9 style42"><strong>Inter-Markets-Ex-Import-Group Procurement Services </strong><BR>
                                      by 
                                      Inter-Brokers-Outsorcing-Export Import Managers Associates</span></div></td>
                                  </tr>
                                </table></td>
                              </tr>
                            </table>
                            </td>
                            <td><div align="center">
                              <table width="100%" border="2" cellspacing="0" cellpadding="2">
                                <tr>
                                  <td><img src="http://www.interfreezone.org/db/sitoexporter/pages/img//NAVE.jpg"></td>
                                </tr>
                              </table>
                              </div></td>
                          </tr>
                        </table></td>
                      </tr>
                    </table>
                    <BR>
                    <table width="100%"  border="5">
                        <tr>
                          <td><table width="100%"  border="1" cellspacing="8">
                              <tr>
                                
                                <td valign="top" bgcolor="#FFFF99"><table width="100%" border="10">
                                  <tr>
                                    <td valign="top"><table width="100%" border="0" cellspacing="5" bordercolor="#CCFFCC" bgcolor="#CCFFCC">
                                      
                                      
                                      <tr>
                                        <td><table width="100%" border="5" cellspacing="0" cellpadding="5">
                                          <tr>
                                            <td bgcolor="#000099"><div align="center"><span id="sez1" class="Stile53"><span class="Stile94"><span class="style5" id="sez1">BACHECA DOCUMENTALE</span></span></span></div></td>
                                          </tr>
                                        </table></td>
                                      </tr>
                                      <tr>
                                        <td><table width="100%" border="5" cellpadding="2" cellspacing="2" bgcolor="#CCCCCC">
                                          <tr>
                                            <td colspan="4"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#000066">
                                                <tr>
                                                  <td width="10%"><table width="100%" border="2" cellpadding="2" cellspacing="0" bgcolor="#FFFF00">
                                                      <tr>
                                                        <td class="style10"><div align="center">A1</div></td>
                                                      </tr>
                                                  </table></td>
                                                  <td width="90%" class="style5"><div align="left">
                                                      <table width="100%" border="0" cellspacing="0" cellpadding="4">
                                                        <tr>
                                                          <td class="style1"><div align="left"><SPAN id="sez1"><SPAN id="sez1"> <a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/registro.asp" target="_blank"><img src="http://www.interfreezone.org/db/sitoexporter/img/ball.gif" border="0"></a>REGISTRY of EXPORT-IMPORT   - <EM>Market-Match-Bulletin </EM></SPAN></SPAN></div></td>
                                                        </tr>
                                                      </table>
                                                  </div></td>
                                                </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td width="2%"><table width="100%" border="0" cellspacing="4" cellpadding="2">
                                                <tr>
                                                  <td><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/registro.asp"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/registry cover.jpg" border="0"></a></td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                </tr>
                                            </table></td>
                                            <td colspan="2" valign="top" bgcolor="#FFFFCC"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                                                <tr height="100%">
                                                  <td class="style23" ><table cellspacing="0" cellpadding="0">
                                                    <TR>
                                                      <TD class="style23" align="left"><div align="justify">integrated with<STRONG> Market-Match-Bulletin</STRONG> edited by : IEMAS Inter-Markets-Associates an Autonoumus Division of Inter-Markets-Export-Import-Consortiums Associates-Network operating the <strong>Inter-Markets-Ex-Import-Group Procurement Services </strong>and managed   by Inter-Brokers-Outsorcing-Export Import Managers Associates</div></TD>
                                                    </TR>

                                                  </table>                                                  </td>
                                                </tr>
                                            </table></td>
                                            <td width="2%"><table width="100%" border="2" cellspacing="2" cellpadding="2">
                                                <tr>
                                                  <td align="center"><img src="http://www.interfreezone.org/db/sitoexporter/img/pcglobe.gif" height="35"></td>
                                                </tr>
                                                <tr>
                                                  <td><div align="center"><img src="http://www.interfreezone.org/db/sitoexporter/img/CARRELLO.gif"></div></td>
                                                </tr>
                                            </table></td>
                                          </tr>
                                        </table></td>
                                      </tr>
                                      <tr>
                                        <td><table width="100%" border="5" cellpadding="2" cellspacing="2" bgcolor="#CCCCCC">
                                          <tr>
                                            <td colspan="4"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#000066">
                                                <tr>
                                                  <td width="10%"><table width="100%" border="2" cellpadding="2" cellspacing="0" bgcolor="#FFFF00">
                                                      <tr>
                                                        <td class="style10"><div align="center">B1</div></td>
                                                      </tr>
                                                  </table></td>
                                                  <td width="90%" class="style5"><div align="left">
                                                      <table width="100%" border="0" cellspacing="0" cellpadding="4">
                                                        <tr>
                                                          <td class="style1">Programa Delegazioni  Centrali Acquisti Estere partecipanti agli incontri con produttori - esportatori Italiani</td>
                                                        </tr>
                                                      </table>
                                                  </div></td>
                                                </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td width="2%"><table width="100%" border="0" cellspacing="4" cellpadding="2">
                                                <tr>
                                                  <td><img src="http://www.interfreezone.org/db/sitoexporter/pages/img/AGENTI.png"></td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                </tr>
                                            </table></td>
                                            <td colspan="2" valign="top" bgcolor="#FFFFCC"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                                                <tr height="100%">
                                                  <td class="style23" ><span class="Stile11"><span class="style23">Programa delle delegazioni delle Centrali Acquisti Estere partecipanti </span>agli incontri con produttori - esportatori Italiani nelle principali fiere sia di Milano  che di Bologna, Verona, Venezia, Torino, Roma, Bari, Napoli, Cagliari, Palermo,   Catania e Siracusa</span></td>
                                                </tr>
                                                <tr>
                                                  <td><table width="100%" border="1" cellspacing="2" cellpadding="2">
                                                      <tr>
                                                        <td bordercolor="#000033" bgcolor="#E0DFE3"><span class="style10 Stile9 Stile9"><a href="http://www.interfreezone.org//00ITALIANO/2calf.htm" target="_blank"><img src="http://www.interfreezone.org/db/sitoexporter/img/ball.gif" border="0"></a>Link for more details</span></td>
                                                      </tr>
                                                  </table></td>
                                                </tr>
                                            </table></td>
                                            <td width="2%"><table width="100%" border="2" cellspacing="2" cellpadding="2">
                                                <tr>
                                                  <td><img src="http://www.interfreezone.org/db/sitoexporter/img/pcglobe.gif"></td>
                                                </tr>
                                                <tr>
                                                  <td><div align="center"><img src="http://www.interfreezone.org/db/sitoexporter/img/CARRELLO.gif"></div></td>
                                                </tr>
                                            </table></td>
                                          </tr>
                                        </table></td>
                                      </tr>
                                      <tr>
                                        <td><table width="100%" border="5" cellpadding="2" cellspacing="2" bgcolor="#CCCCCC">
                                          <tr>
                                            <td colspan="4"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#000066">
                                                <tr>
                                                  <td width="10%"><table width="100%" border="2" cellpadding="2" cellspacing="0" bgcolor="#FFFF00">
                                                      <tr>
                                                        <td class="style10"><div align="center">B2</div></td>
                                                      </tr>
                                                  </table></td>
                                                  <td width="90%" class="style5"><div align="left">
                                                      <table width="100%" border="0" cellspacing="0" cellpadding="4">
                                                        <tr>
                                                          <td class="style33"><strong>INDICE   delle"Richieste-Offerte" Prioritarie</strong> </td>
                                                        </tr>
                                                      </table>
                                                  </div></td>
                                                </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td width="2%"><table width="100%" border="0" cellspacing="4" cellpadding="2">
                                                <tr>
                                                  <td><img src="http://www.interfreezone.org/db/sitoexporter/pages/img/AGENTI.png"></td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                </tr>
                                            </table></td>
                                            <td colspan="2" valign="top" bgcolor="#FFFFCC"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                                                <tr height="100%">
                                                  <td valign="top" class="style23" >Lista di prodotti, Progetti Impianti e Servizi del Terziario Avanzato  da parte delle Centrali Acquisti Collettivi e Centri di Distribuzione Internazionali in NEGOZIAZIONE alle Sale Contrattazioni e Teleporto presso le EURO-BOURSE EXPORT</td>
                                                </tr>
                                                <tr>
                                                  <td><table width="100%" border="1" cellspacing="2" cellpadding="2">
                                                      <tr>
                                                        <td bordercolor="#000033" bgcolor="#E0DFE3"><span class="style10 Stile9 Stile9"><a href="http://www.interfreezone.org//00ITALIANO/1_ptp.htm" target="_blank"><img src="http://www.interfreezone.org/db/sitoexporter/img/ball.gif" border="0"></a>Link for more details</span></td>
                                                      </tr>
                                                  </table></td>
                                                </tr>
                                            </table></td>
                                            <td width="2%"><table width="100%" border="2" cellspacing="2" cellpadding="2">
                                                <tr>
                                                  <td><img src="http://www.interfreezone.org/db/sitoexporter/img/pcglobe.gif"></td>
                                                </tr>
                                                <tr>
                                                  <td><div align="center"><img src="http://www.interfreezone.org/db/sitoexporter/img/CARRELLO.gif"></div></td>
                                                </tr>
                                            </table></td>
                                          </tr>
                                        </table></td>
                                      </tr>
                                      <tr>
                                        <td><table width="100%" border="5" cellpadding="2" cellspacing="2" bgcolor="#CCCCCC">
                                          <tr>
                                            <td colspan="4"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#000066">
                                              <tr>
                                                <td width="10%"><table width="100%" border="2" cellpadding="2" cellspacing="0" bgcolor="#FFFF00">
                                                    <tr>
                                                      <td class="style10"><div align="center">C1</div></td>
                                                    </tr>
                                                </table></td>
                                                <td width="90%" class="style5"><div align="left">
                                                    <table width="100%" border="0" cellspacing="0" cellpadding="4">
                                                      <tr>
                                                        <td class="style33"><div align="justify"><strong>ESTRATTO dalla lista delle richieste prioritarie di</strong> <strong>prodotti Italiani per export</strong>
                                                        </div></td>
                                                      </tr>
                                                    </table>
                                                </div></td>
                                              </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td width="2%"><table width="100%" border="0" cellspacing="4" cellpadding="2">
                                                <tr>
                                                  <td><img src="http://www.interfreezone.org/db/sitoexporter/pages/img/AGENTI.png"></td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                </tr>
                                              </table></td>
                                            <td colspan="2" valign="top" bgcolor="#FFFFCC"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                                              <tr height="100%">
                                                <td class="style23" >Requests and Offers" of   Products, Plants and Services from International Network, Inter-Free Zone   Export &amp; Import Markets-Associates in,Europe -   America - Middle East - Far East - Australia - South Africa                                                  </td>
                                              </tr>
                                              <tr>
                                                <td><table width="100%" border="1" cellspacing="2" cellpadding="2">
                                                    <tr>
                                                      <td bordercolor="#000033" bgcolor="#E0DFE3"><span class="style10 Stile9 Stile9"><a href="http://www.interfreezone.org/00ITALIANO/list_imps.htm" target="_blank"><img src="http://www.interfreezone.org/db/sitoexporter/img/ball.gif" border="0"></a>Link for more details</span></td>
                                                    </tr>
                                                  </table></td>
                                              </tr>
                                            </table></td>
                                            <td width="2%"><table width="100%" border="2" cellspacing="2" cellpadding="2">
                                              <tr>
                                                <td><img src="http://www.interfreezone.org/db/sitoexporter/img/pcglobe.gif"></td>
                                              </tr>
                                              <tr>
                                                <td><div align="center"><img src="http://www.interfreezone.org/db/sitoexporter/img/CARRELLO.gif"></div></td>
                                              </tr>
                                            </table></td>
                                          </tr>
                                          
                                        </table></td>
                                      </tr>
                                      <tr>
                                        <td><table width="100%" border="5" cellpadding="2" cellspacing="2" bgcolor="#CCCCCC">
                                          <tr>
                                            <td colspan="4"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#000066">
                                                <tr>
                                                  <td width="10%"><table width="100%" border="2" cellpadding="2" cellspacing="0" bgcolor="#FFFF00">
                                                      <tr>
                                                        <td class="style10"><div align="center">D1</div></td>
                                                      </tr>
                                                  </table></td>
                                                  <td width="90%" class="style5"><div align="left">
                                                      <table width="100%" border="0" cellspacing="0" cellpadding="4">
                                                        <tr>
                                                          <td class="style1"><div align="left"><SPAN id="sez1"><SPAN id="sez1">TELEPORTO - Servizio - TELEVIDEO- MEETINGS </SPAN></SPAN></div></td>
                                                        </tr>
                                                      </table>
                                                  </div></td>
                                                </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td width="2%"><table width="100%" border="0" cellspacing="4" cellpadding="2">
                                                <tr>
                                                  <td><img src="http://www.interfreezone.org/db/sitoexporter/pages/img/AGENTI.png"></td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                </tr>
                                            </table></td>
                                            <td colspan="2" valign="top" bgcolor="#FFFFCC"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                                                <tr height="100%">
                                                  <td valign="top" class="style23" >&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td><table width="100%" border="1" cellspacing="2" cellpadding="2">
                                                      <tr>
                                                        <td bordercolor="#000033" bgcolor="#E0DFE3"><span class="style10 Stile9 Stile9"><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/TELEPORTO/TELEPORT.htm" target="_blank"><img src="http://www.interfreezone.org/db/sitoexporter/img/ball.gif" border="0"></a>Link for more details</span></td>
                                                      </tr>
                                                  </table></td>
                                                </tr>
                                            </table></td>
                                            <td width="2%"><table width="100%" border="2" cellspacing="2" cellpadding="2">
                                                <tr>
                                                  <td><img src="http://www.interfreezone.org/db/sitoexporter/img/pcglobe.gif"></td>
                                                </tr>
                                                <tr>
                                                  <td><div align="center"><img src="http://www.interfreezone.org/db/sitoexporter/img/CARRELLO.gif"></div></td>
                                                </tr>
                                            </table></td>
                                          </tr>
                                        </table></td>
                                      </tr>
                                      <tr>
                                        <td><table width="100%" border="5" cellpadding="2" cellspacing="2" bgcolor="#CCCCCC">
                                          <tr>
                                            <td colspan="4"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#000066">
                                                <tr>
                                                  <td width="10%"><table width="100%" border="2" cellpadding="2" cellspacing="0" bgcolor="#FFFF00">
                                                      <tr>
                                                        <td class="style10"><div align="center">E1</div></td>
                                                      </tr>
                                                  </table></td>
                                                  <td width="90%" class="style5"><div align="left">
                                                      <table width="100%" border="0" cellspacing="0" cellpadding="4">
                                                        <tr>
                                                          <td class="style33"><div align="justify">Rete  Transcontinentale per Settori Merceologici</div></td>
                                                        </tr>
                                                      </table>
                                                  </div></td>
                                                </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td width="2%"><table width="100%" border="0" cellspacing="4" cellpadding="2">
                                                <tr>
                                                  <td><img src="http://www.interfreezone.org/db/sitoexporter/pages/img/AGENTI.png"></td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                </tr>
                                            </table></td>
                                            <td colspan="2" valign="top" bgcolor="#FFFFCC"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                                                <tr height="100%">
                                                  <td class="style23" >&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td><table width="100%" border="1" cellspacing="2" cellpadding="2">
                                                      <tr>
                                                        <td bordercolor="#000033" bgcolor="#E0DFE3"><span class="style10 Stile9 Stile9"><a href="http://www.interfreezone.org/db/sitoexporter/pages/sez2org.htm" target="_blank"><img src="http://www.interfreezone.org/db/sitoexporter/img/ball.gif" border="0"></a>Link for more details</span></td>
                                                      </tr>
                                                  </table></td>
                                                </tr>
                                            </table></td>
                                            <td width="2%"><table width="100%" border="2" cellspacing="2" cellpadding="2">
                                                <tr>
                                                  <td><img src="http://www.interfreezone.org/db/sitoexporter/img/pcglobe.gif"></td>
                                                </tr>
                                                <tr>
                                                  <td><div align="center"><img src="http://www.interfreezone.org/db/sitoexporter/img/CARRELLO.gif"></div></td>
                                                </tr>
                                            </table></td>
                                          </tr>
                                        </table></td>
                                      </tr>
                                      <tr>
                                        <td><table width="100%" border="5" cellpadding="2" cellspacing="2" bgcolor="#CCCCCC">
                                          <tr>
                                            <td colspan="4"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#000066">
                                                <tr>
                                                  <td width="10%"><table width="100%" border="2" cellpadding="2" cellspacing="0" bgcolor="#FFFF00">
                                                      <tr>
                                                        <td class="style10"><div align="center">F1</div></td>
                                                      </tr>
                                                  </table></td>
                                                  <td width="90%" class="style5"><div align="left">
                                                      <table width="100%" border="0" cellspacing="0" cellpadding="4">
                                                        <tr>
                                                          <td class="style33">Presentazioni delle Credenziali dell'Export Manager Antonio Candeloro</td>
                                                        </tr>
                                                      </table>
                                                  </div></td>
                                                </tr>
                                            </table></td>
                                          </tr>
                                          <tr>
                                            <td width="2%"><table width="100%" border="0" cellspacing="4" cellpadding="2">
                                                <tr>
                                                  <td><img src="http://www.interfreezone.org/db/sitoexporter/pages/img/AGENTI.png"></td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                </tr>
                                            </table></td>
                                            <td colspan="2" valign="top" bgcolor="#FFFFCC"><table width="100%" border="0" cellspacing="0" cellpadding="2">
                                                <tr height="100%">
                                                  <td class="style23" >&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                  <td><table width="100%" border="1" cellspacing="2" cellpadding="2">
                                                      <tr>
                                                        <td bordercolor="#000033" bgcolor="#E0DFE3"><span class="style10 Stile9 Stile9"><a href="http://www.interfreezone.org/KUWAIT-EXHIBITS/ac-cv-index.html" target="_blank" class="titolo"><strong><img src="http://www.interfreezone.org/webmarketing/IMG/ball.gif" width="14" height="14" border="0" /></strong></a><a href="http://www.interfreezone.org/db/sitoexporter/pages/sez2org.htm" target="_blank"></a>Link for more details</span></td>
                                                      </tr>
                                                  </table></td>
                                                </tr>
                                            </table></td>
                                            <td width="2%"><table width="100%" border="2" cellspacing="2" cellpadding="2">
                                                <tr>
                                                  <td><img src="http://www.interfreezone.org/db/sitoexporter/img/pcglobe.gif"></td>
                                                </tr>
                                                <tr>
                                                  <td><div align="center"><img src="http://www.interfreezone.org/db/sitoexporter/img/CARRELLO.gif"></div></td>
                                                </tr>
                                            </table></td>
                                          </tr>
                                        </table></td>
                                      </tr>
                                      
                                      

                                      

                                    </table></td>
                                  </tr>
                                </table>
                                </td>
                                <td width="20%" valign="top" bgcolor="#FFFF99"><table width="100%" height="100" border="5">
                                  <tr>
                                    <td valign="top"><table width="100%" border="0">
                                      <tr>
                                        <td><table width="100%" height="70" border="3" cellpadding="5">
                                            <tr>
                                              <td bgcolor="#000066"><div align="center"><span class="style1">Multi Country &amp; <br> 
                                                Regional Presentations</span></div></td>
                                            </tr>
                                        </table></td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td>&nbsp;</td>
                                      </tr>
                                    </table></td>
                                  </tr>
                                </table></td>
                              </tr>
                              
                          </table></td>
                        </tr>
                    </table>
					  <BR>
					  <div align="center">
                      <BR>
				      <table width="100%"  border="5">
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
                                            <td><a href="info-form.htm"><img src="http://www.interfreezone.org/db/sitoexporter/img/ball.gif" border="0"><img src="http://www.interfreezone.org/db/sitoexporter/img/british_flag.gif" border="0"></a></td>
                                            <td><span class="Stile101">Click for more details </span></td>
                                          </tr>
                                      </table></td>
                                      <td width="54%"><table border="0" cellspacing="5">
                                          <tr>
                                            <td><a href="info-form.htm"><img src="http://www.interfreezone.org/db/sitoexporter/img/ball.gif" border="0"><img src="http://www.interfreezone.org/db/sitoexporter/img/italian_flag.gif" border="0"></a></td>
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
                          <td><div align="center"><img src="http://www.interfreezone.org/db/SITOEXPORTER/e u r o p a r k_file/piedone.jpg"></div></td>
                        </tr>
                      </table>
			      <BR></td>
                </tr>
				
                <tr>
                  <td bgcolor="#FFFF99" colspan="5"><div align="center"><font face="Arial, Helvetica, sans-serif" size="2" color="#000066"><b><font color="#FFFFFF" size="5"> </font></b></font>
                    <table width="100%" border="4">
                      <tr>
                        <td align="center"><table width="100%"  border="3">
                          <tr>
                            <td bgcolor="#FFFFCC" class="Stile11"><table width="100%" border="0">
                                <tr>
                                  <td><div align="center"></div>
                                      <div align="center"><span class="Stile10 Stile1"><b><span class="txxgree Stile8 Stile9"><span class="style18">ITALIAN DELEGATION &quot;IEMAS-Inter-Markets-Associates&quot;</span><font size="2"><span class="Stile131"><br />
                                        </span></font></span></b></span><span class="style16"><b>Via Alassio, 10-20156-Milan Tel.Import's Desk 00393482626905 <br />
                                          Tel 003902 36503719 Fax 003902 99982404 <br />
                                          operating the &quot;INTER-MERCHANDISE-MARKETS &amp; TECHNOLOGY EXCHANGE&quot;</b></span></div></td>
                                  <td><img src="http://www.interfreezone.org/webmarketing/IMG/CALL.jpg" width="100" height="67" /></td>
                                </tr>
                              </table>
                                <table width="100%" border="0" cellspacing="10">
                                  <tr>
                                    <td><img src="http://www.interfreezone.org/webmarketing/IMG/MERCHANDISE.jpg" width="227" height="179" /></td>
                                    <td valign="middle"><div align="left"><span class="style16">Divisione Operativa Autonoma dell'Inter-Markets-Export-Import-Consortiums-Associates-Network con Gestione delle Sale di Contrattazioni-Campionarie e Telematiche con Deposito Certificato di Autenticit&agrave; dei prodotti offerti in Export-Import &quot;Decertoffex&quot; collegate allea sostegno degli Incontri Bi-Settimanali tra Operatori nazionali-Esteri video-colle gati alle corrispondenti delegazioni in 27 paesi esteri della operanti presso i Magazzini Generali &quot;Self-Storage&quot; Inter-Porti-Zone-Franche-Centri Direzionali-Borse Mercantili Intrenazional</span><span class="Stile10 Stile1"><span class="Stile131">i</span></span></div>
                                        <div align="left"><a href="http://www.interfreezone.org/webmarketing/PG/INTERN AFILIATION2.html"><img src="http://www.interfreezone.org/webmarketing/IMG/ball.gif" width="14" height="14" border="0" /><span class="style23">CLICK  TO VISIT THE IEMAS-INTER-MERCHANDISE MARKETS</span></a></div>
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
                          </b><span class="style23">P.O.BOX 127&nbsp; - Pt. Via Besso, 5 -CH690 LUGANO 3 SWITZERLAND &nbsp;Tel.0041786283699 Fx.. 0041-0916046287</span><span class="style41"><a href="http://www.interfreezone.org/webmarketing/http://www.interfreezone.org"><br>
                            </a></span><span class="style23"><a href="http://www.interfreezone.org/webmarketing/http://www.interfreezone.org">www.interfreezone.org</a> - e.mail <a href="http://www.interfreezone.org/webmarketing/mailto:info@interfreezone.org"> info@interfreezone.org</a></span></span></p>
                          <table width="100%" border="5">
                            <tr>
                              <td><table width="100%" border="0" cellspacing="5">
                                  <tr>
                                    
                                    <td><table width="100%" border="0" cellspacing="5">
                                        <tr>
                                          <td class="style10"><div align="center"><img src="HTTP://www.interfreezone.org/db/sitoexporter/img/SILOUETTE.jpg" width="550" height="22"></div></td>
                                        </tr>
                                        <tr>
                                          <td class="style10"><div align="center"><img src="HTTP://www.interfreezone.org/db/sitoexporter/img/BANDIERE WEB ORIZZ.jpg" ></div></td>
                                        </tr>
                                        <tr>
                                          <td class="style10"><div align="center"><img src="HTTP://www.interfreezone.org/db/sitoexporter/img/OROLOGI FUSO ORARIO.jpg"></div></td>
                                        </tr>
                                    </table></td>
                                  </tr>
                              </table></td>
                            </tr>
                          </table>                          </td>
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