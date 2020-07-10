<?php
 
function connect_to_database () {
$servername = 'localhost' ; 
$username = 'root' ;
$password = '' ;
$databasename = 'BaseTest01' ; 
 
try {
$pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
echo "Connected Successfully" ;
 
return $pdo ;
}
catch (PDOException $e) {
echo "connextion failed: ". $e-> getMessage() ;
}
}
$pdo=connect_to_database();
 
$users = $pdo->query("UPDATE `BaseTest01` . `produit`
SET quantité = 1
WHERE id = 4");
 
?>