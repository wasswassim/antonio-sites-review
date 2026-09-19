<?PHP
include("../include/interfree_dbinc.php");
include("../include/dbfix-php.php");


$db=mysql_connect($dbhost,$dbuser,$dbpasswd) or die ("Errore durante la connessione al database");

// $sql= "SELECT * FROM `ragionesociale` where `Cod_clie` = '".$_GET["Cod_clie"]."';";

$sql="SELECT * FROM `ragionesociale` WHERE`Cod_clie`='CANDELORO'";
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