<?php
header('Content-Type: application/json');

ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

error_log("Début de la sauvegarde");

// Vérifier que la requête est en POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    error_log("Méthode non autorisée: " . $_SERVER['REQUEST_METHOD']);
    http_response_code(405);
    echo json_encode(["status" => "error", "message" => "Méthode non autorisée"]);
    exit;
}

// Lire les données envoyées
$input = file_get_contents('php://input');
error_log("Données reçues : " . $input);

// Décoder les données JSON
$data = json_decode($input, true);
error_log("Données décodées : " . print_r($data, true));

if ($data && isset($data['winner'])) {
    $file = __DIR__ . '/results.json';
    error_log("Chemin du fichier: " . $file);

    // Charger les résultats existants
    $results = [];
    if (file_exists($file)) {
        $current_content = file_get_contents($file);
        error_log("Contenu actuel du fichier : " . $current_content);
        $results = json_decode($current_content, true) ?: [];
    }

    // Ajouter le nouveau résultat
    $results[] = ['winner' => $data['winner']];

    // Ne garder que les 5 derniers résultats
    $results = array_slice($results, -5);

    // Sauvegarder les résultats
    $json_data = json_encode($results);
    error_log("Données à écrire : " . $json_data);

    if (file_put_contents($file, $json_data) === false) {
        error_log("Erreur lors de l'écriture dans le fichier");
        error_log("Erreur PHP : " . error_get_last()['message']);
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => "Erreur d'écriture"]);
    } else {
        error_log("Sauvegarde réussie");
        echo json_encode(["status" => "success"]);
    }
} else {
    error_log("Données invalides : " . $input);
    http_response_code(400);
    echo json_encode(["status" => "error", "message" => "Données invalides"]);
}
?>
