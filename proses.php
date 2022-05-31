<?php
    // jika interaksi dengam nama aksi maka akan melakukan proses inisialisasi
    if(isset($_POST['aksi'])){
        //jika interaksi tambah data
        if($_POST['aksi'] == "tambah"){
            echo "Tambah Data";
        
        //Jika interaksi edit data
        }else if ($_POST['aksi'] == "edit"){
            echo "Edit Data";
        }
    }

    // jika interaksi metode GET maka akan menghapus
    if(isset($_GET['hapus'])){
        echo "hapus data";
    }
?>