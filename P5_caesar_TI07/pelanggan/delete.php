<?php
require_once '../dbkoneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM pelanggan WHERE id= ?";
$r = $dbh->prepare($sql);
$r->execute(array($id));
header('location:list_pelanggan.php');

?>