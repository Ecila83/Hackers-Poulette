<?php

require_once('../php/db.inc.php');

$pdo = connect_db();
$sth = $pdo->prepare("SELECT * FROM contacts");
$sth->execute();
$result = $sth->fetchAll();

header('Content-Type: application/json; charset=utf-8');
echo json_encode($result);
