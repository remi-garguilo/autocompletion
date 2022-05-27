<?php
require_once('computer.php');

$id = $_GET['id'];

$root = new Computer();


$tab = $root->resultelement($id);

?>