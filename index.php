<?php
    //koneksi ke MySQL
    require 'connect.php';

    //akses mySQLdengan Query
    $query = "SELECT * FROM tb_butam";
    $sql = mysqLi_query($koneksi, $query);
    $nomer = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap  -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" ></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <title>Buku Tamu</title>
</head>
<body>
    <!-- Navigasi -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
            BUKU TAMU PERIKAHAN - JONO & JENI
        </a>
        </div>
    </nav>

    <!-- Typography -->
    <h2 class="mt-5"><center>Data Tamu Pernikahan Jono & Jeni<center></h2>
    <figure class="text-center">
        <blockquote class="blockquote">
            <p>" Selamat menikah. Di kehidupan baru yang kalian jalani, semoga cinta dan bahagia senantiasa membersamai kalian "</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            SAMAWA <cite title="Source Title">Sakinah Mawadah Warahmah</cite>
        </figcaption>
        <a href="konfigurasi.php" type="button" class="btn btn-dark mt-4">
            <i class="fa fa-plus-circle"></i>
            Tambahkan Buku Tamu
        </a>

        <!-- Table -->
        <div class="container table-responsive mt-5">
            <table class="table align-middle table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Waktu</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Selama hasil data ada dari sql  -->
                    <?php
                        while($hasil = mysqLi_fetch_assoc($sql)){
                    ?>

                    <tr>
                        <td>
                            <?php echo ++$nomer; ?>.
                        </td>
                        <td>
                            <?php echo $hasil['nama']; ?>
                        </td>
                        <td>
                            <?php echo $hasil['email']; ?>
                        </td>
                        <td>
                            <?php echo $hasil['waktu']; ?>
                        </td>
                        <td>
                            <?php echo $hasil['komentar']; ?>
                        </td>
                        <td>
                            <a href="konfigurasi.php?ubah=<?php echo $hasil['nomor']; ?>" type="button" class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                            <a href="proses.php?hapus=<?php echo $hasil['nomor']; ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin akan menghapus data ini ???')">
                                <i class="fa fa-trash-o"></i>
                            </a>
                        </td>
                    </tr>
                    
                    <?php
                        }
                    ?>

                </tbody>
            </table>
        </div>
    </figure>
    
</body>
</html>