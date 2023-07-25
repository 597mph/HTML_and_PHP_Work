<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Power Table PHP</title>
</head>

<?php echo ("Rows to generate: " . $_POST["rows"]); ?><br>

<style>
  table,
  th,
  td {
    border: 2px solid black;
  }
</style>

<body>
  <table>
    <?php

    $start = microtime();
    for ($i = 0; $i < $_POST["rows"] + 1; $i++) {
      echo ("<tr>");
      if ($i == 0) {
        echo ("<td>Power 1</td>");
        echo ("<td>Power 2</td>");
        echo ("<td>Power 3</td>");
      }

      if ($i != 0) {
        echo ("<td>" . $i . "</td>");
        echo ("<td>" . $i**2 . "</td>");
        echo ("<td>" . $i**3 . "</td>");
      }

      echo ("</tr>");
    }

    $end = microtime();
    $time = (getmicrotime($end) - getmicrotime($start));

    echo ("Time to generate: " . $time . " seconds.<br><br>");

    function getmicrotime($t)
    {
      list($usec, $sec) = explode(" ", $t);
      return ((float)$usec + (float)$sec);
    }
    ?>
  </table>
</body>
</html>