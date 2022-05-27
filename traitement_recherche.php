<?php
require_once('Computer.php');

$computer = htmlspecialchars($_GET['search']);

$root = new Computer();

@$tab = $root->searchstart($computer);

echo json_encode($tab);