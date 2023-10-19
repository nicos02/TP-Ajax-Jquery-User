<?php
require_once('connexion.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérifier si le nom d'utilisateur existe déjà
    $stmt = $bdd->prepare("SELECT * FROM user WHERE username = :username");
    $stmt->execute([':username' => $username]);
    $user = $stmt->fetch();

    if ($user) {
        $response = array('success' => false, 'message' => 'Le nom d\'utilisateur existe déjà.');
        echo json_encode($response);
        exit;
    }

    // Hasher le mot de passe
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Préparation et exécution de la requête SQL INSERT
    $stmt = $bdd->prepare("INSERT INTO user (username, email, password) VALUES (:username, :email, :password)");
    $stmt->execute([
        ':username' => $username,
        ':email' => $email,
        ':password' => $hashedPassword
    ]);

    if ($stmt->rowCount() > 0) {
        $_SESSION['email'] = $email;
        $response = array('success' => true, 'message' => 'Inscription réussie!');
        echo json_encode($response);
    } else {
        $response = array('success' => false, 'message' => 'Erreur lors de l\'inscription.');
        echo json_encode($response);
    }
}
?>
