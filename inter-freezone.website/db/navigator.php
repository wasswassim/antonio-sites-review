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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Navigator</title>
<style type="text/css">
<!--
.Stile1 {
	color: #660000;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
a {
	text-decoration: none;
}
.Stile144 {COLOR: #000066; FONT-FAMILY: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; }
-->
</style>
<script language="javascript">

function cart() { //v2.0
  window.open('http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/cart.asp');
}

//-->
</script>
</head>

<body topmargin="2" leftmargin="2" bgcolor="#000066">
<table width="100%" border="0" cellpadding="1" cellspacing="1" background="./img/tex2.jpg">
  <tr>
    <td><table width="100%" cellspacing="1">
      <tr>
        <td class="Stile1"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/ordering.asp" target="_parent"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="11" height="11" border="0" /></a></td>
        <td class="Stile1">ORDERING</td>
        <td><a href='<%=(Recordset1.GetColumnValue("carrello"))%>' target="_parent"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="11" height="11" border="0" /></a></td>
        <td><span class="Stile144"> Factory Store</span></td>
        <td><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/cornerstore.asp" target="_parent"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="11" height="11" border="0" /></a></td>
        <td><span class="Stile144"> Corner  Stores</span></td>
        <td><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/franchising.asp" target="_parent"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="11" height="11" border="0" /></a></td>
        <td><span class="Stile144">  Franchising</span></td>
        <td><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/contracts.asp" target="_parent"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="11" height="11" border="0" /></a></td>
        <td><span class="Stile144">Contracts</span></td>
        <td class="Stile144"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/promotional.asp" target="_parent"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="11" height="11" border="0" /></a></td>
        <td class="Stile144">Promo Merchandise </td>
        <td class="Stile144"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/auction.asp" target="_parent"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="11" height="11" border="0" /></a> Auction  </td>
        <td class="Stile144"><a href="http://www.interfreezone.org/<%=(Recordset1.GetColumnValue("Cod_clie"))%>/distributorship.asp" target="_parent"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="11" height="11" border="0" /></a></td>
        <td class="Stile144">Distributorship</td>
        <td><a href="http://www.interfreezone.org/lepi-export/intro.asp" target="_parent"></a></td>
        <td><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/pool.htm" target="_blank"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="11" height="11" border="0" /></a></td>
        <td><span class="Stile144"> Supporting Services </span></td>
        <td><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/TELEPORTO/TELEPORT.htm" target="_parent"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="11" height="11" border="0" /></a></td>
        <td><span class="Stile144">Web-Cam-Teleporto</span></td>
        <td><a href="http://www.interfreezone.org/db/SITOEXPORTER/pages/info-form.htm" target="_parent"><img src="http://www.interfreezone.org/db/SITOEXPORTER/img/ball.gif" width="11" height="11" border="0" /></a></td>
        <td class="Stile144">Contacts</td>
      </tr>
    </table></td>
  </tr>
</table>

</body>
</html>