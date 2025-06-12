<!DOCTYPE html>
<html lang="hr">
<head>
  <meta charset="UTF-8">
  <title>Slatki Zalogaj - Ponuda</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrapper">
    <header>
      <h1>Slatki Zalogaj</h1>
      <nav>
        <ul>
          <li><a href="index.html">Početna</a></li>
          <li class="active"><a href="ponuda.php">Ponuda</a></li>
          <li><a href="kontakt.html">Kontakt</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <h2>Naša ponuda</h2>
      <ul>
        <?php
            $json = file_get_contents('kolaci.json');
            $kolaci = json_decode($json, true);

            foreach ($kolaci as $kolac) {
              echo "<div class='kolac'>";
              echo "<h3>{$kolac['naziv']}</h3>";
              echo "<img src='{$kolac['slika']}' alt='{$kolac['naziv']}' width='200'>";
              echo "<p>Cijena: {$kolac['cijena']}</p>";
              echo "</div>";
            }
        ?>
      </ul>
    </main>
    <footer>
      <p>&copy; 2025 Slatki Zalogaj</p>
    </footer>
  </div>
</body>
</html>
