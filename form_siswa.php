<?php

require_once("session_check.php");
if ($sessionStatus == false) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link href="style.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand" JongKoding>
                <img src="gambar/logo.png">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Daftar Siswa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="form" class="pt-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col col-8 p-4 bg-light">

                    <form action="action.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group mb-2">
                            <label for="kode_barang">Kode Barang</label>
                            <input name="kode_barang" id="kode_barang" class="form-control" type="text" placeholder="kode barang" required>
                        </div>

                        <div class="form-group mb-2">
                            <label for="foto">Foto</label>
                            <input name="foto" id="foto" class="form-control" type="file" />
                        </div>

                        <div class="form-group mb-2">
                            <label for="nama_barang">Nama Barang</label>
                            <input name="nama_barang" id="nama_barang" class="form-control" type="text" placeholder="Nama Barang" required>
                        </div>

                        <div class="form-group mb-2">
                            <label for="harga">Harga Barang</label>
                            <input name="harga" id="harga" class="form-control" type="number" placeholder="Harga per-Unit" required>
                        </div>

                        <!-- <div class="form-group mb-2">
                            <label>Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="L" required>
                                <label class="form-check-label" for="male">Laki-laki</label>
                            </div>
                            <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="P" required>
                                <label class="form-check-label" for="female">Perempuan</label>
                            </div>
                        </div> -->

                        <!-- <div class="form-group mb-2">
                            <label for="address">Alamat</label>
                            <textarea name="address" class="form-control" id="address" rows="3" required></textarea>
                        </div>

                        <div class="form-group mb-2">
                            <label for="tmp_lahir">Tempat Lahir</label>
                            <input name="placeOfBirth" class="form-control" id="tmp_lahir" type="text" placeholder="Kota Tempat Lahir" required></input>
                        </div> -->

                       

                        <div class="form-group mb-2">
                            <label for="qty">Jumlah Barang</label>
                            <input name="qty" class="form-control" id="qty" type="number" placeholder="Jumlah Barang" required></input>
                        </div>

                        <div class="form-group mb-2">
                            <label for="tanggal">Tanggal Distribusi</label>
                            <input name="tanggal" class="form-control" id="tanggal" type="date" placeholder="Tanggal Distribusi Barang" required></input>
                        </div>

                        <input name="submit" type="submit" value="kirim" class="btn btn-primary">
                    </form>

                </div>


            </div>
        </div>
    </div>


</body>

</html>