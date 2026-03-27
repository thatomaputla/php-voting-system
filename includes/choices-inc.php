<?php
session_start();
require_once 'dbh-inc.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['choice'])) {
    $choice = $_POST['choice'];

    //prepare and execute the SQL statement
    $stmt = $pdo->prepare("INSERT INTO choices (choice) VALUES (:choice)");
    $stmt->bindParam(':choice', $choice);
    $stmt->execute();

    header("Location: ../results.php");
    exit();
} else {
    header("Location: ../home.php");
    die();
}