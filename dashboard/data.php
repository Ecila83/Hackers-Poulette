<?php

require_once('../php/db.inc.php');
$pdo = connect_db();



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'], $_POST['statut'])) {
    $contactId = $_POST['id'];
    $newStatus = $_POST['statut'];

 
    $allowedStatus = ['Non traité', 'Traité'];
    if (in_array($newStatus, $allowedStatus)) {

        $sth = $pdo->prepare("UPDATE contacts SET statut = ? WHERE id = ?");
        $sth->execute([$newStatus, $contactId]);


        echo json_encode(['success' => true]);
        exit();
    } else {

        echo json_encode(['success' => false, 'error' => 'Invalid status value']);
    }

    exit();
}


$sth = $pdo->prepare("SELECT * FROM contacts");
$sth->execute();
$result = $sth->fetchAll();

header('Content-Type: application/json; charset=utf-8');
echo json_encode($result);