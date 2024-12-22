<?php
// Contoh data mahasiswa (anda bisa mengganti dengan data NRP dan nama mahasiswa Anda)
$mahasiswa = [
    ['NRP' => '123456789', 'Nama' => 'Ahmad'],
    ['NRP' => '987654321', 'Nama' => 'Budi'],
    ['NRP' => '246802468', 'Nama' => 'Gajah'],
    ['NRP' => '135791357', 'Nama' => 'Dewi'],
    ['NRP' => '579315793', 'Nama' => 'Eka'],
    // Tambahkan data mahasiswa lainnya
];

// Inisialisasi array assosiative
$data = [];

// Looping untuk mengolah data mahasiswa
foreach ($mahasiswa as $m) {
    $nrp = $m['NRP'];
    $nama = $m['Nama'];

    // Menentukan kategori berdasarkan tiga digit terakhir NRP
    $kategori = $nrp % 5;

    // Menambahkan data mahasiswa ke dalam array assosiative berdasarkan kategori
    switch ($kategori) {
        case 1:
            $data['Budaya Daerah di Indonesia'][] = ['NRP' => $nrp, 'Nama' => $nama];
            break;
        case 2:
            $data['Penemu-penemu terkenal di dunia'][] = ['NRP' => $nrp, 'Nama' => $nama];
            break;
        case 3:
            $data['Flora dan Fauna terancam punah'][] = ['NRP' => $nrp, 'Nama' => $nama];
            break;
        case 4:
            $data['Pahlawan Nasional Indonesia'][] = ['NRP' => $nrp, 'Nama' => $nama];
            break;
        case 0:
            $data['Perusahaan Teknologi'][] = ['NRP' => $nrp, 'Nama' => $nama];
            break;
    }
}

// Menampilkan data dalam bentuk tabel
echo '<table>';
echo '<thead>';
echo '<tr>';
echo '<th>Kategori</th>';
echo '<th>NRP</th>';
echo '<th>Nama