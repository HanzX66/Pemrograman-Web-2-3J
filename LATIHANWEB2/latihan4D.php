<?php
$negara = [
  ["Indonesia", "D.K.I. Jakarta", "+62"],
  ["Singapura", "Singapura", "+65"],
  ["Malaysia", "Kuala Lumpur", "+60"],
  ["Brunei", "Bandar Seri Begawan", "+673"],
  ["Thailand", "Bangkok", "+66"],
  ["Laos", "Vientiane", "+856"],
  ["Filipina", "Manila", "+63"],
  ["Myanmar", "Naypyidaw", "+95"],
];
?>
<!DOCTYPE html>
<html>
<head>
<title>Latihan 4d</title>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>Negara</th>
        <th>Ibukota</th>
        <th>Kode Telepon</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($negara as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
          echo "<td>" . $cell . "</td>";
        }
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
</body>
</html>