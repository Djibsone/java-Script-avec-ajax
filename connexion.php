<?php
// Établir la connexion à la base de données
$conn = new PDO('mysql:host=127.0.0.1;dbname=examen;utf8=charset', 'djibril', 'tamou');

// Exécuter la requête SQL pour récupérer les données
$query = "SELECT * FROM filiere";
$stmt = $conn->query($query);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($data);

// Renvoyer les données au format JSON
header('Content-Type: application/json');
echo json_encode($data);
