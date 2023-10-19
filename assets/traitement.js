$(document).ready(function () {
  $("#registrationForm").submit(function (e) {
    e.preventDefault(); // Empêche la soumission du formulaire

    // Sérialise les données du formulaire
    var formData = $(this).serialize();

    // Envoie une requête AJAX
    $.ajax({
      url: "register.php",
      type: "POST",
      data: formData,
      dataType: "json", // Définit le type de données attendu en réponse
      success: function (response) {
        if (response.success) {
          // Affiche une alerte pour indiquer que l'inscription a réussi
          alert(response.message);
          // Redirige vers la page home.php
          window.location.href = "home.php";
        } else {
          // Affiche une alerte avec le message d'erreur
          alert(response.message);
        }
      },
      error: function (xhr, status, error) {
        // Affiche une alerte avec le message d'erreur en cas d'erreur AJAX
        alert("Erreur lors de la requête AJAX : " + error);
      },
    });
  });
});