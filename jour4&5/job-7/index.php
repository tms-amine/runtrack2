<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Maison de mehdi </title>
 
</head>

<body>

  <h2> une maison mehdi</h2>
  <form id="maisonForm">
    Largeur: <input type="text" name="largeur" id="largeur" required>
    Hauteur: <input type="text" name="hauteur" id="hauteur" required>
    <button type="submit">Crée la petit maison de mehdi </button>
  </form>

  <div id="output"></div>

  <script>
    function genererMaison(largeur, hauteur) {
      let maison = "";
      const toitHauteur = Math.floor(largeur / 2);
      
      // Toit
      for (let i = 0; i < toitHauteur; i++) {
        let espacesAvant = " ".repeat(toitHauteur - i);
        let espaceMilieu = " ".repeat(i * 2);
        maison += espacesAvant + "/" + espaceMilieu + "\\" + "\n";
      }

      // Plafond
      maison += "-".repeat(largeur) + "\n";

      // Murs
      for (let i = 0; i < hauteur; i++) {
        maison += "|" + " ".repeat(largeur - 2) + "|" + "\n";
      }

      return maison;
    }

    document.getElementById("maisonForm").addEventListener("submit", function(e) {
      e.preventDefault();
      const largeur = parseInt(document.getElementById("largeur").value);
      const hauteur = parseInt(document.getElementById("hauteur").value);

      if (isNaN(largeur) || isNaN(hauteur) || largeur < 4 || hauteur < 1 || largeur % 2 !== 0) {
        alert("Veuillez entrer une largeur paire ≥ 4 et une hauteur ≥ 1.");
        return;
      }

      const maison = genererMaison(largeur, hauteur);
      document.getElementById("output").innerHTML = "<pre>" + maison + "</pre>";
    });
  </script>

</body>
</html>