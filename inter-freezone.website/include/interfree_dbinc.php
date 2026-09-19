<?php
    /*
  Connessione al DBMS e selezione del databasese.
*/


//# blocco dei parametri di connessione Localhost PC
$dbhost = "localhost";
$dbuser = "root";
$dbpasswd = "";
$dbname = "ifree_local";



# stringa di connessione al DBMS
// istanza dell'oggetto della classe MySQLi
$connessione = new mysqli($dbhost, $dbuser, $dbpasswd, $dbname);

// verifica su eventuali errori di connessione
if ($connessione->connect_errno) {
    echo "Connessione fallita: ". $connessione->connect_error . ".";
    exit();
}
?>