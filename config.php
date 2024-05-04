<?php
$host = '127.0.0.1';
$dbname = 'financement_platform';
$user = 'root';
$password = '';
$dns = 'mysql:host='.$host.';dbname='.$dbname;
$db = new PDO($dns,$user,$password);
$db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
if (!$db) {
   die('Impossible de se connecter à la base de donné');
}
?>