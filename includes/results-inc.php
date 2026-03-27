<?php

require_once 'dbh-inc.php';

//fetch the count of each choice 
$stmt = $pdo->query("SELECT choice, COUNT(*) as count FROM choices GROUP BY choice");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
