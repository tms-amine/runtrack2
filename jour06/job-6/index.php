<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Choisir un style</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>

  <div>
    <label for="style">Choisissez un style :</label><br>
    <select id="style">
      <option value="style1.php">Style 1</option>
      <option value="style2.php">Style 2</option>
      <option value="style3.php">Style 3</option>
    </select>
  </div>

  <div class="D1">
    <button onclick="redirect()">Valider</button>
  </div>

  <script>
    function redirect() {
      const selectedPage = document.getElementById("style").value;
      window.location.href = selectedPage;
    }
  </script>

</body>
</html>
