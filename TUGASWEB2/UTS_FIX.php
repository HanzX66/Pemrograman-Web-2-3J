<?php
// Data produk
$products = [
    ["id" => 1, "name" => "Pepsodent", "stock" => 30, "price" => 11980],
    ["id" => 2, "name" => "Sunlight", "stock" => 15, "price" => 12880],
    ["id" => 3, "name" => "Baygon", "stock" => 10, "price" => 16779],
    ["id" => 4, "name" => "Dove", "stock" => 20, "price" => 22688],
    ["id" => 5, "name" => "Rinso", "stock" => 20, "price" => 20789],
    ["id" => 6, "name" => "Downy", "stock" => 12, "price" => 18360],
    ["id" => 7, "name" => "Le Mineral", "stock" => 25, "price" => 5650]
];

// Menambahkan kolom "Jumlah" (Stok x Harga) untuk setiap produk
foreach ($products as &$product) {
    $product['amount'] = $product['stock'] * $product['price'];
}

// Menampilkan tabel produk
echo "<h3>Tabel Harga Barang</h3>";
echo "<table border='1'>
        <tr><th>ID</th><th>Produk</th><th>Stok</th><th>Harga</th><th>Jumlah</th></tr>";
foreach ($products as $product) {
    echo "<tr>
            <td>{$product['id']}</td>
            <td>{$product['name']}</td>
            <td>{$product['stock']}</td>
            <td>{$product['price']}</td>
            <td>{$product['amount']}</td>
          </tr>";
}
echo "</table>";

// Menghitung total
$total = array_sum(array_column($products, 'amount'));

// Menentukan diskon berdasarkan total pembelian
$discount = 0;
if ($total >= 300000) {
    $discount = 0.25 * $total;
} elseif ($total >= 200000) {
    $discount = 0.20 * $total;
}
$final_total = $total - $discount;

// Menampilkan detail transaksi
echo "<h3>Detail Transaksi</h3>";
echo "<p>Tanggal Transaksi: " . date("d F Y") . "</p>";
echo "<table border='0'>
        <tr><td>Produk</td><td>:</td><td></td></tr>";
foreach ($products as $product) {
    echo "<tr><td>{$product['name']} (x {$product['stock']})</td><td>:</td><td>Rp {$product['amount']}</td></tr>";
}
echo "<tr><td>Total</td><td>:</td><td>Rp {$total}</td></tr>";
echo "<tr><td>Diskon</td><td>:</td><td>Rp {$discount}</td></tr>";
echo "<tr><td>Total Pembayaran</td><td>:</td><td>Rp {$final_total}</td></tr>";
echo "</table>";
?>
