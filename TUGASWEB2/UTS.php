<?php
// Array data produk
$products = [
    ["name" => "Pepsodent", "stock" => 30, "price" => 11980, "jumlah" => 30],
    ["name" => "Sunlight", "stock" => 15, "price" => 12880, "jumlah" => 15],
    ["name" => "Baygon", "stock" => 10, "price" => 16779, "jumlah" => 10],
    ["name" => "Dove", "stock" => 20, "price" => 22688, "jumlah" => 20],
    ["name" => "Rinso", "stock" => 20, "price" => 20789, "jumlah" => 20],
    ["name" => "Downy", "stock" => 12, "price" => 12880, "jumlah" => 12],
    ["name" => "Le Mineral", "stock" => 25, "price" => 5650, "jumlah" => 25],
];

// Fungsi untuk menghitung total harga per produk
function calculateTotal($products) {
    $totalAmount = 0;
    foreach ($products as &$product) {
        $product["total"] = $product["stock"] * $product["price"];
        $totalAmount += $product["total"];
    }
    return $totalAmount;
}

// Hitung total pembelian tanpa diskon
$totalPurchase = calculateTotal($products);

// Tentukan diskon
$discount = 0;
if ($totalPurchase >= 300000) {
    $discount = 0.25 * $totalPurchase;
} elseif ($totalPurchase >= 200000) {
    $discount = 0.20 * $totalPurchase;
}

// Hitung total pembayaran setelah diskon
$totalPayment = $totalPurchase - $discount;

// Tampilkan tabel transaksi
echo "<h2>Tabel Harga Barang</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Produk</th><th>Stok</th><th>Harga</th><th>Jumlah</th></tr>";
foreach ($products as $product) {
    echo "<tr>
        <td>{$product['name']}</td>
        <td>{$product['stock']}</td>
        <td>" . number_format($product['price'], 0, ',', '.') . "</td>
        <td>" . number_format($product['total'], 0, ',', '.') . "</td>
    </tr>";
}
echo "</table>";

// Tampilkan total, diskon, dan total pembayaran
echo "<p><strong>Total:</strong> Rp " . number_format($totalPurchase, 0, ',', '.') . "</p>";
echo "<p><strong>Diskon:</strong> Rp " . number_format($discount, 0, ',', '.') . "</p>";
echo "<p><strong>Total Pembayaran:</strong> Rp " . number_format($totalPayment, 0, ',', '.') . "</p>";
?>
