//<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $camera = $_POST['camera'];
    $duration = $_POST['duration'];
    $rental_date = $_POST['rental_date'];

    $order = "Nama: $name, Kamera: $camera, Durasi: $duration jam, Tanggal Sewa: $rental_date\n";

    // Menyimpan data pesanan ke file orders.txt
    file_put_contents('order.txt', $order, FILE_APPEND);

    echo "Pesanan berhasil dibuat!";
}
?>
