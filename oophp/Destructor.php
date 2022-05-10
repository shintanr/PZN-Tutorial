<?php


require_once "Data/Person.php";
// Jika constructor adalah function yang akan dipanggil ketika objek dibuat
// Destructor adalah function yang akan dipanggil ketika object ketika object dihapus dari memory
// Biasanya ketika object tersebut sudah tidak lagi digunakan atau ketika aplikasi akan mati
// Untuk membuat sebuh destructor, kita bisa menggunakan nama funnction __destrucct()
// Khusus untuk destructor, kita tidak boleh menambahkan function argument
// dalam penggunaan sehari-hari, ini misal cocok untuk menutup koneksi ke database atau menurup proses ke file, sehingga tidak terjadi memory leak

$shinta = new Person("Shinta", "Banyumas");
$nur = new Person("Nur", "Purwokerto");

echo "Program selseai". PHP_EOL;