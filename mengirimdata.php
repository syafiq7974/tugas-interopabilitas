<?php

// URL API tujuan
$url = 'https://jsonplaceholder.typicode.com/posts';

// Data yang akan dikirim (format array PHP)
$data = array(
    'title' => 'Latihan POST Request',
    'body' => 'Ini adalah contoh post baru menggunakan POST request',
    'userId' => 2
);

// Inisialisasi cURL
$ch = curl_init();

// Set opsi untuk metode POST dan kirim data
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

// Set agar hasil dikembalikan sebagai string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Eksekusi cURL
$response = curl_exec($ch);

// Tutup cURL
curl_close($ch);

// Tampilkan respon dari server
echo $response;
?>
