# resesDPR
Webiste Reses DPRD Kabupaten Soppeng Sulse, Sebagai Tugas Akhir Kuliah Jurusan Sistem Informasi

## Cara Download

Downlaod di [sini](https://github.com/azwarbahar07/resesDPR/archive/master.zip)

## Buat Database

Buat database dengan nama
```bash
reses_dprd_soppeng
```

Lalu Import tabel [ini](https://github.com/azwarbahar07/resesDPR/archive/master.zip)

## Koneksi

Perhatikan File koneksi.php . Pastikan Sama
```php
<?php
date_default_timezone_set("Asia/Makassar");
session_start();
$conn = mysqli_connect("localhost", "root", "", "reses_dprd_soppeng");

?>
`
