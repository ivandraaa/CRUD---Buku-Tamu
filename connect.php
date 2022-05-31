<!-- Connect to MySQL -->
<?php
    // inisialisasi
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'butam';
    
    $koneksi = mysqLi_connect($host, $user, $password, $database);
    if($koneksi){
        // echo "Amangg";
    }

    // Tahap 1: Koneksikan ke DB
    mysqLi_select_db($koneksi, $database);
?>
