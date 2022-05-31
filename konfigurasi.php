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

    <!-- Form-Control -->
    <div class="container">
        <!-- Form untukk menginisialisasi proses tambah atau edit data -->
        <form method="POST" action="proses.php">
            <div class="mb-3 mt-4">
                <label for="nama" class="form-label">Nama Tamu</label>
                <input type="text" name="nama_tamu" class="form-control" id="nama" placeholder="Example: Wawan Setiawan">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Example: wawan@gmail.com">
            </div>
            <div class="mb-3">
                <label for="waktu" class="form-label">Waktu Hadir</label>
                <input type="text" name="waktu_hadir" class="form-control" id="waktu" placeholder="Example: 18.00">
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea class="form-control" name="keterangan" id="keterangan" rows="3" placeholder="Example: Selamat atas pernikahan anda"></textarea>
            </div>
            <div class="mb-3 row mt-4">
                <div class="col">
                    <!-- Jika mendapat metode url GET dan mendapat variable ubah: Akan Menyimpan perubahan -->
                    <?php
                        if(isset($_GET['ubah'])){
                    ?>
                    <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                        <i class="fa fa-floppy-o" aria-hidden="true"></i>
                        Simpan Perubahan Data
                    </button>
                    <!-- Jika tidak mendapat variable ubah: Akan Menambah Data -->
                    <?php
                        } else {
                    ?>
                    <button type="submit" name="aksi" value="tambah" class="btn btn-primary">
                        <i class="fa fa-floppy-o" aria-hidden="true"></i>
                        Tambahkan Data
                    </button>
                    <?php
                        }
                    ?>

                    <a href="index.php" type="button" class="btn btn-danger">
                        <i class="fa fa-reply" aria-hidden="true"></i>
                        Batal Menambahkan
                    </a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>