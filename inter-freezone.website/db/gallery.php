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



<HTML><HEAD><TITLE>Inter-Market Gallery</TITLE>
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">


</style>
<script language="javascript">

function cart() { //v2.0
  window.open('http://www.interfreezone.org/<?php echo $testata["Cod_clie"];?>/cart.asp');
}

//-->
</script>

</HEAD>

<frameset cols="*,1020,*" bordercolor="#031977" border="1">
<frame src="./SITOEXPORTER/pages/margin1.htm" frameborder="no" scrolling="no">

<FRAMESET border=2 
frameSpacing=0 rows=28,62,155,*,70 frameBorder=NO cols=*>
<FRAME marginWidth=0 marginHeight=0 src="./navigator.php" frameBorder=NO noresize scrolling=no>
<FRAME marginWidth=0 marginHeight=0 src="./gallery/gallery.html" frameBorder=NO noresize scrolling=no>
<FRAME marginWidth=0 marginHeight=0 src="./up.php?codicino=<?php echo $_GET['codicino'];?>" frameBorder=NO noresize scrolling=no>
<FRAME  marginWidth=0 marginHeight=0 src="http://www.interfreezone.org/<?php echo $testata["Cod_clie"];?>/frames/foto.html" >
<FRAME src="http://www.interfreezone.org/<?php echo $testata["Cod_clie"];?>/frames/fr3.html">
</FRAMESET>

<frame src="./SITOEXPORTER/pages/margin1.htm" frameborder="no" scrolling="no">
</frameset><noframes></noframes>
</HTML>
