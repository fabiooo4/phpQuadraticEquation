<html>
<link rel="stylesheet" href="style.css">
<div class="main">
  <head> 
    <title>PHP Test</title>
  </head>
    
      <body class="mainBg">
        <h1>Risultato</h1>
        
            <?php
                $a = $_POST["a"];
                $b = $_POST["b"];
                $c = $_POST["c"];

                if ($a != 0 ) {
                  $equation = $a . "x^2 + " . $b . "x + " . $c . " = 0";
                  echo "<h2>Equazione: " . $equation . "</h2>";

                  $delta = $b * $b - 4 * $a * $c;
                  echo "<h2>Delta: " . $delta . "</h2>";
                  
                  if ($delta < 0) {
                      echo "<h2>Non ci sono soluzioni reali</h2>";
                  } else if ($delta == 0) {
                      $x = -$b / (2 * $a);
                      echo "<h2>La soluzione è: " . $x . "</h2>";
                  } else {
                      $x1 = (-$b + sqrt($delta)) / (2 * $a);
                      $x2 = (-$b - sqrt($delta)) / (2 * $a);
                      echo "<h2>Le soluzioni sono: " . $x1 . " e " . $x2 . "</h2>";
                  }
                } else {
                  echo "<h2>L'equazione non è di secondo grado</h2>";
                }
            ?>
            <form action="quadraticEquation.php">
              <button class="button" type="submit">Indietro</button>
            </form>
        </body>
</div>
</html>