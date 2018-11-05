<?php
include 'koneksi.php';
$query = $koneksi->query("select * from item");

$result = array();
 while($data = $query->fetch_assoc()){
    $result[] =$data;

 };
 echo json_encode($result);
?>