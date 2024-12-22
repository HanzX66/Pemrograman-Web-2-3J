<?php
$negaraASEAN = array(
    "Indonesia", 
    "Singapura", 
    "Malaysia", 
    "Brunei",
    "Thailand"
);

// Menampilkan negara ASEAN dalam bentuk list HTML
echo "<h1> Daftar Negara ASEAN Awal </h1>";
echo "<ul>";
foreach ($negaraASEAN as $negara) {
  echo "<li>$negara</li>";
}
echo "</ul>";

// Menambahkan elemen baru ke array
$negaraASEAN[] = "Laos";
$negaraASEAN[] = "Filipina";
$negaraASEAN[] = "Myanmar";

// Menampilkan negara ASEAN dalam bentuk list HTML
echo "<h1> Daftar Negara ASEAN Baru </h1>";
echo "<ul>";
foreach ($negaraASEAN as $negara) {
  echo "<li>$negara</li>";
}
echo "</ul>";
?>