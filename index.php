<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/styles.css">
   <title>Document</title>
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


   <div class="container">
      <h1>Inscription</h1>
      <form id="registrationForm" method="post">
         <div>
            <label for="username">Nom d'utilisateur <img src="assets/images/user.png" alt=" user"></label>
            <input type="text" id="username" name="username" required>
         </div>
         <div>
            <label for="email">Email <img src="assets/images/email.png" alt="email"></label>
            <input type="email" id="email" name="email" required>
         </div>
         <div>
            <label for="password">Mot de passe <img src="assets/images/mdp.png" alt="password"></label>
            <input type="password" id="password" name="password" required>
         </div>
         <div>
            <input type="submit" value="S'inscrire">
         </div>
      </form>
   </div>
   <footer class="bg-dark text-center text-white">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
         © 2020 Copyright:
         <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
      </div>
      <!-- Copyright -->
   </footer>

   <script src="assets/traitement.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>