<?php 
include "../src/php/hpp1.php";
include "../src/php/hpp2.php";
include "../src/php/hppBonus.php";
include "../src/php/totalKotor.php";
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Perhitungan MR</title>
    <link rel="shortcut icon" href="../src/img/LOGO MR YEARBOOK-02.png" type="image/x-icon">
    <link rel="stylesheet" href="../src/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="main" style="background-color: #efeff0;">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #efeff0;">
        <div class="container ">
            <a class="navbar-brand" href="main-page.php">
                <img src="../src/img/LOGO MR YEARBOOK-01.png" alt="MR Yearbook" width="80" style="margin: -10%;">
            </a>
        </div>
    </nav>
    <!-- end navbar -->


        <div class="col-12 col-lg-9 col-sm-12 px-3 pb-5  mx-auto bg-white ">
            <div class=" text-center ">
                <h1 class="border-bottom py-5 fw-bold ">Kalkulator Perhitungan MR Yearbook</h1>
            </div>

            <form action="rincian.php" method="POST" class="mt-5" id="signUpForm">

                <div class="form-header d-flex mb-4 ">
                    <span class="stepIndicator">HPP 1</span>
                    <span class="stepIndicator">HPP 2</span>
                    <span class="stepIndicator">HPP Bonus </span>
                    <span class="stepIndicator">Harga Jual </span>
                </div>

                <div class="px-4">
                <!-- Step HPP 1 -->
                <div class="step">
                    <h4 class="fw-semibold mt-5">HPP 1</h4>
                    <div class="">
                        <label for="sum" class="fw-semibold">Jumlah Buku </label>
                        <input type="number" name="buku" id="sum" class="form-control"
                            placeholder="Masukan Jumlah Buku (50-450)"  required>
                     
                        <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-12 mt-4">
                                <label class="fw-semibold" for="ukuran">Ukuran Buku</label>
                                <select name="ukuran" id="ukuran" class="dropdown-toggle form-select "
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <option value="A4">A4</option>
                                    <option value="A5">A5</option>
                                    <option value="B4">B4</option>
                                    <option value="B5">B5</option>
                                </select>
                            </div>

                            <br>

                            <div class="col-12 col-lg-6 col-md-6 col-sm-12 mt-4">
                                <label class="fw-semibold" for="jumlah">Jumlah Halaman</label>
                                <select name="jumlah" id="jumlah" class="dropdown-toggle form-select ">
                                    <option value="40">40 Halaman</option>
                                    <option value="60">60 Halaman</option>
                                    <option value="80">80 Halaman</option>
                                    <option value="100">100 Halaman</option>
                                    <option value="120">120 Halaman</option>
                                    <option value="150">150 Halaman</option>
                                    <option value="180">180 Halaman</option>
                                    <option value="200">200 Halaman</option>
                                </select>
                            </div>
                        </div>

                        <br>

                        <label class="fw-semibold" for="print-foto">Ukuran Cetak Foto</label>
                        <select name="print" id="print-foto" class="dropdown-toggle form-select">
                            <option value="4R">4R</option>
                            <option value="8R">8R</option>
                            <option value="12R">12R</option>
                            <option value="16R">16R</option>
                            <option value="20R">20R</option>
                            <option value="24R">24R</option>
                        </select>
                        <br>
                        <label class="fw-semibold" for="box">Jenis Box</label>
                        <select name="box" id="box" class="dropdown-toggle form-select">
                            <option value="Tidak Memakai Box">Tidak memakai Box</option>
                            <option value="Hard Box">Hard Box</option>
                            <option value="Soft Box">Soft Box</option>
                        </select>
                    </div>
                </div>
                <!-- End Step HPP1 -->

                <!-- Step HPP2 -->
                <div class="step">
                    <h4 class="mt-5 fw-semibold">HPP 2</h4>
                    <div class="">

                        <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 col-sm-12 mt-4">
                                <label class="fw-semibold" for="">Ukuran Packaging</label>
                                <select name="ukuranPackaging" id="" class="dropdown-toggle form-select">
                                    <option value="25x35">25 x 35 Cm</option>
                                    <option value="30x40">30 x40 Cm</option>
                                    <option value="35x45">35 x45 Cm</option>
                                    <option value="42x56">42 x 56 Cm</option>
                                </select>
                            </div>

                            <div class="col-12 col-lg-6 col-md-6 col-sm-12 mt-4">
                                <label class="fw-semibold" for="packaging">Jumlah Packaging </label>
                                <input type="number" name="packaging" id="packaging" class="form-control"
                                    placeholder="Packaging (Minimal 100)" required>
                            </div>
                        </div>

                        <br>

                        <label class="fw-semibold" for="greetingCard">Greeting Card </label>
                        <input type="number" name="greetingCard" id="greetingCard" class="form-control"
                            placeholder=" Greeting Card (Minimal 100)" required>

                        <br>

                        <label class="fw-semibold" for="sticker">Sticker/lembar </label>
                        <input type="number" name="sticker" id="sticker" class="form-control"
                            placeholder="1 Lembar 30-55 Sticker" required>

                        <br>

                        <label class="fw-semibold" for="ticket">Ticket</label>
                        <select name="ticket" id="ticket" class="dropdown-toggle form-select ">
                            <option value="32">32 Ticket</option>
                            <option value="64">64 Ticket</option>
                            <option value="96">96 Ticket</option>
                            <option value="128">128 Ticket</option>
                            <option value="160">160 Ticket</option>
                            <option value="192">192 Ticket</option>
                            <option value="224">224 Ticket</option>
                            <option value="256">256 Ticket</option>
                            <option value="288">288 Ticket</option>
                            <option value="320">320 Ticket</option>
                            <option value="352">352 Ticket</option>
                            <option value="384">384 Ticket</option>
                            <option value="416">416 Ticket</option>
                            <option value="448">448 Ticket</option>
                            <option value="480">480 Ticket</option>
                            <option value="512">512 Ticket</option>
                        </select>

                        <br>

                        <label class="fw-semibold" for="flashdisk">Flashdisk</label>
                        <select name="flashdisk" id="flashdisk" class="dropdown-toggle form-select">
                            <option value="64GB">SanDisk Cruzer Blade 64GB CZ50</option>
                            <option value="128GB">SanDisk Cruzer Blade 128GB CZ50</option>
                        </select>
                    </div>
                </div>
                <!-- End Step HPP2 -->

                <!-- Step HPP Bonus -->
                <div class="step">
                    <h4 class="mt-5 fw-semibold">HPP Bonus</h4>
                    <small class="mt-3">
                        Paket Gold : Kepala Sekolah & Grup Guru <br>
                        Paket Silver : Grup Guru <br>
                        Paket Bronze : -
                    </small>

                    <div class="row">
                        <div class="col-12 col-lg-6 col-md-6 col-sm-12 mt-4">
                            <label class="fw-semibold" for="freekepsek">Bonus Untuk Kepala Sekolah</label>
                            <select name="freekepsek" id="freekepsek" class="dropdown-toggle form-select "
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <option value="silver">Kepsek Tidak Mendapatkan Bonus</option>
                                <option value="12R+Frame">Foto 12 R + Frame 12 R</option>
                                <option value="16R+Frame">Foto 16 R + Frame 16 R</option>
                                <option value="20R+Frame">Foto 20 R + Frame 20 R</option>
                                <option value="24R+Frame">Foto 24 R + Frame 24 R</option>
                            </select>
                        </div>

                        <br>

                        <div class="col-12 col-lg-6 col-md-6 col-sm-12 mt-4">
                            <label class="fw-semibold" for="freeguru">Bonus Untuk Grup Guru</label>
                            <select name="freeguru" id="freeguru" class="dropdown-toggle form-select ">
                                <option value="bronze">Guru Tidak Mendapatkan Bonus</option>
                                <option value="8R+Frame">Foto 8 R + Frame 8 R</option>
                                <option value="12R+Frame">Foto 12 R + Frame 12 R</option>
                                <option value="16R+Frame">Foto 16 R + Frame 16 R</option>
                                <option value="20R+Frame">Foto 20 R + Frame 20 R</option>
                                <option value="24R+Frame">Foto 24 R + Frame 24 R</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- End Step HPP Bonus -->

                <div class="step">
                    <h4 class="mt-5 fw-semibold">Rumus</h4>
                    <div class="">

                        <div class="row ">
                            <div class="col-12 col-lg-3 col-md-6 col-sm-12 align-self-center ">
                                <label class="fw-semibold" for="hargaJual">Harga Jual </label>
                                <input type="number" name="hargaJual" id="hargaJual" class="form-control"
                                    placeholder="Masukan Harga Jual" required>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-12 col-md-12 col-sm-12 form-footer d-flex mt-4 justify-content-end">
                    <button type="button" class="btn btn-outline-dark  py-2 rounded-0 col-4 col-sm-4 col-md-2 col-lg-2 text-center" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" class="btn btn-dark  py-2 rounded-0 col-4 col-sm-4 col-md-2 col-lg-2 ms-3 text-center" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
        </div>
                
        </div>
        </form>
    </div>
    <?php 
        
        if (isset($_POST["submit"])) {

            
            global $ukuranBuku;
            global $jumlahHalaman;
            global $print;
            global $box;
            global $buku;
            global $ukuranPackaging;
            global $packaging;
            global $greetingCard;
            global $sticker;
            global $ticket;
            global $flashdisk;
            global $bonusKepsek;
        
    }


    ?>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>
<script src="../src/js/script.js"></script>

</html>
