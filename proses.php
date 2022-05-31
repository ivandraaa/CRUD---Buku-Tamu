<?php
    require 'connect.php';

    // jika interaksi dengam nama aksi maka akan melakukan proses inisialisasi
    if(isset($_POST['aksi'])){
        //jika interaksi tambah data
        if($_POST['aksi'] == "tambah"){

            //inisalisasi form konfigurasi
            $nama_tamu = $_POST['nama_tamu'];
            $email = $_POST['email'];
            // $waktu_hadir = $_POST['waktu_hadir'];
            date_default_timezone_set("Asia/Jakarta");
            $waktu = date('Y-m-d H:i:s');
            $keterangan = $_POST['keterangan'];

            // proses query
            $query = "INSERT INTO tb_butam VALUES(null, '$nama_tamu', '$email', '$waktu', '$keterangan')";
            // connect query to sql
            $sql = mysqLi_query($koneksi, $query);

            if($sql){
                header("location:index.php");
            } else {
                echo $query;
            }
        
        //Jika interaksi edit data
        }else if ($_POST['aksi'] == "edit"){

            $nomor = $_POST['nomor'];
            $nama = $_POST['nama_tamu'];
            $email = $_POST['email'];
            // $waktu = $_POST['waktu_hadir'];
            date_default_timezone_set("Asia/Jakarta");
            $waktu = date('Y-m-d H:i:s');
            $komentar = $_POST['keterangan'];

            $query = "UPDATE tb_butam SET nama='$nama', email='$email', komentar='$komentar' WHERE nomor='$nomor';";
            $sql = mysqLi_query($koneksi, $query);
            header("location:index.php");
        }
    }

    // jika interaksi metode GET maka akan menghapus
    if(isset($_GET['hapus'])){
        $nomor = $_GET['hapus'];
        $query = "DELETE FROM tb_butam WHERE nomor = '$nomor';";
        $sql = mysqLi_query($koneksi, $query);

        if($sql){
            header("location:index.php");
        } else {
            echo $query;
        }
    }
?>