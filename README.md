# resesDPR
Webiste Reses DPRD Kabupaten Soppeng Sulse, Sebagai Tugas Akhir Kuliah Jurusan Sistem Informasi




## Cara Download

Downlaod di [sini](https://github.com/azwarbahar07/resesDPR/archive/master.zip)




## Extrak Folder

Extrak dan simpan folder di htdocs.
Jika Setelah di extrak dan nama foldernya :
```bash
resesDPR-master
```
rename foldernya jadi :
```bash
reses-dprd
```




## Buat Database

Buat database dengan nama
```bash
reses_dprd_soppeng
```

Lalu Import tabel [reses_dprd_soppeng.sql](https://github.com/azwarbahar07/resesDPR/blob/master/reses_dprd_soppeng.sql)




## Koneksi

Perhatikan File [koneksi.php](https://github.com/azwarbahar07/resesDPR/blob/master/koneksi.php) . Pastikan Sama
```php
<?php
date_default_timezone_set("Asia/Makassar");
session_start();
$conn = mysqli_connect("localhost", "root", "", "reses_dprd_soppeng");
?>
```





## Akun DEMO

Admin

```bash
username : admin
password : admin
```

Anggota DPR

```bash
username : riswan
password : riswan
```





## Progres Project

Ket :
- [ ] Belum
- [x] Selesai


### Admin
```bash
- [ ] Dashboard

#### Master Data
  Jadwal Reses
  - [x] Create
  - [x] Read
  - [x] Update
  - [x] Delete
  
  Partai
  - [x] Create
  - [x] Read
  - [x] Update
  - [x] Delete
  
  Fraksi
  - [x] Create
  - [x] Read
  - [x] Update
  - [x] Delete
  
  Dapil
  - [x] Create
  - [x] Read
  - [x] Update
  - [x] Delete
  
  Komisi
  - [x] Create
  - [x] Read
  - [x] Update
  - [x] Delete
#### Anggota DPR
  Anggota
  - [x] Create
  - [ ] Read/Detail
  - [x] Update
  - [x] Delete

#### Laporan
- [ ] Laporan Masuk
- [ ] Laporan Approve

#### Setting
  Admin
  - [x] Create
  - [x] Read
  - [x] Update
  - [x] Delete
  
  Tema
  - [x] Selesai
  
  Logout
  - [x] Success
```


### Anggota DPR

Soon
