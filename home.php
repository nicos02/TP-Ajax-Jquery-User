<?php
require_once('connexion.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['logout'])) {
   // Terminer la session
   session_unset(); // Détruire toutes les variables de session
   session_destroy(); // Détruire la session actuelle
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/styles.css">
   <title>Home</title>
</head>

<body>
<header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <a class="navbar-brand" href="#">TP Ajax-Jquery</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
               <li class="nav-item active">
                  <a class="nav-link" href="index.php">Accueil</a>
               </li>
               <li class="nav-item active">
                  <a class="nav-link" href="home.php">Mon compte</a>
               </li>
            </ul>
         </div>
      </nav>
   </header>
   <main>
      <?php if (isset($_SESSION['email'])) { ?>
         <h1>Bienvenue <?php echo $_SESSION['email']; ?>!</h1>
         <form method="get">
            <button type="submit" name="logout" class="btn btn-danger">Déconnexion</button>
         </form>
      <?php } else { ?>
         <h1>Vous êtes déconnecté.</h1>
         <a href="index.php">Retour a l'accueil</a>
      <?php } ?>
   </main>
</body>

</html>