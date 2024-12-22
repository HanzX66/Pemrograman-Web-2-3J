<?php
// Data produk
$produk = [
    [
        "nama" => "Buavita",
        "stok" => 30,
        "harga" => 7890
    ],
    [
        "nama" => "Bango",
        "stok" => 21,
        "harga" => 21890
    ],
    [
        "nama" => "Sariwangi",
        "stok" => 10,
        "harga" => 9990
    ],
    [
        "nama" => "Shampo",
        "stok" => 23,
        "harga" => 32450
    ],
    [
        "nama" => "Bedak",
        "stok" => 11,
        "harga" => 15760
    ],
    [
        "nama" => "Baju",
        "stok" => 13,
        "harga" => 55550
    ],
    [
        "nama" => "Jumper",
        "stok" => 2,
        "harga" => 52430
    ]
];

// Fungsi untuk menghitung total pembelian
function hitungTotalPembelian($produk, $jumlah) {
    $total = 0;
    foreach ($produk as $key => $value) {
        $total += $value["harga"] * $jumlah[$key];
    }
    return $total;
}

// Fungsi untuk menghitung diskon
function hitungDiskon($totalPembelian) {
    if ($totalPembelian >= 400000) {
        return 0.3 * $totalPembelian;
    } elseif ($totalPembelian >= 200000) {
        return 0.15 * $totalPembelian;
    } else {
        return 0;
    }
}

// Contoh penggunaan:
$jumlah = [
    5, // Buavita
    2, // Bango
    1, // Sariwangi
    3, // Shampo
    0, // Bedak
    1, // Baju
    0