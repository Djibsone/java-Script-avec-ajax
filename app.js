$(document).ready(function() {
  $.ajax({
    url: './connexion.php',
    method: 'GET',
    success: function(response) {
      var select = document.getElementById('select_id');

      // Générer les options du champ select
      response.forEach(function(item) {
        var option = document.createElement('option');
        option.value = item.codefil;
        option.text = item.nomfil;
        select.appendChild(option);
      });
    },
    error: function() {
      console.log('Erreur lors de la récupération des données depuis le serveur.');
    }
  });
});