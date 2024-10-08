<?php
// Tentukan URL API
$url = 'https://jsonplaceholder.typicode.com/posts';

// Inisialisasi sesi cURL
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Eksekusi permintaan cURL
$response = curl_exec($curl);
curl_close($curl);

// Ubah data JSON menjadi array PHP
$dataPosts = json_decode($response, true);

// Ambil lima post pertama
$postTeratas = array_slice($dataPosts, 0, 5);

// Tampilkan hasilnya
print_r($postTeratas);
?>