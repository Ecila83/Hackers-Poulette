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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'], $_POST['deleted'])) {
    $contactId = $_POST['id'];
    $deleted = $_POST['deleted'];

    $sth = $pdo->prepare("UPDATE contacts SET deleted = ? WHERE id = ?");
    $sth->execute([$deleted, $contactId]);
    echo json_encode(['success' => true]);

    exit();
}

$sth = $pdo->prepare("SELECT * FROM contacts where deleted = 0");
$sth->execute();
$result = $sth->fetchAll();

header('Content-Type: application/json; charset=utf-8');
echo json_encode($result);