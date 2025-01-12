<?php
//  include "../public/index.php"
include "../src/php/hpp1.php";
include "../src/php/hpp2.php";
include "../src/php/hppBonus.php";
include "../src/php/totalKotor.php";
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
    <nav class="navbar navbar-expand-lg   " style="background-color: #efeff0;">
        <div class="container ">
            <a class="navbar-brand" href="main-page.php">
                <img src="../src/img/LOGO MR YEARBOOK-01.png" alt="MR Yearbook" width="80" style="margin: -10%;">
            </a>
        </div>
    </nav>
    <!-- end navbar -->
        <div class="col-12 col-lg-9 col-sm-12 px-3 pb-5 mb-5 mx-auto bg-white ">
            <div class="py-5 ">
                <h2>Total Harga</h2>
            </div>
            <h4 class="fs-2">HPP 1</h4>
            <div class="mt-4">
                <!-- Ukuran Buku -->
                <div>
                    <label for="disabledTextInput" class="form-label">Ukuran Buku <b><?php  echo $_POST["ukuran"];?> -
                            <?php echo $_POST["jumlah"];?> Halaman </b></label>
                    <input type="text" id="disabledTextInput" class="form-control"
                        placeholder="Rp. <?php echo number_format(ukuran(), 0, '', '.');?>" disabled>
                </div>
                <!-- Cetak Foto ukuran -->
                <div class="mt-2">
                    <label for="disabledTextInput" class="form-label">Cetak Foto Ukuran
                        <b><?php echo $_POST["print"];?></b></label>
                    <input type="text" id="disabledTextInput" class="form-control"
                        placeholder="Rp. <?php echo number_format(printFoto(), 0, '', '.');?>" disabled>
                </div>

                <!-- HardBox -->
                <div class="mt-2">
                    <label for="disabledTextInput" class="form-label">Jenis Box
                        <b><?php echo $_POST["box"]?></b></label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Rp. <?php echo box();?>"
                        disabled>
                </div>

                <!-- total HPP 1 -->
                <div class="mt-2">
                    <label for="disabledTextInput" class="form-label"><b>Total HPP 1</b></label>
                    <input type="text" id="disabledTextInput" class="form-control"
                        placeholder="Rp. <?php echo number_format(totalHpp1(), 0, '', '.');?>" disabled>
                </div>
            </div>

            <!-- Hpp 2 -->
            <h4 class="fs-2 mt-5">HPP 2</h4>
            <div class="mt-4">

                <!-- Ukuran Packaging -->
                <div>
                    <label for="disabledTextInput" class="form-label">Ukuran Packaging</label>
                    <input type="text" id="disabledTextInput" class="form-control"
                        placeholder="<?php echo $_POST["ukuranPackaging"];?> Cm" disabled>
                </div>

                <!-- Jumlah Packaging -->
                <div class="mt-2">
                    <label for="disabledTextInput" class="form-label">Jumlah Packaging</label>
                    <div class="col-12 d-flex">
                        <div class=" border p-0">
                            <input type="text" id="disabledTextInput" class="form-control"
                                placeholder="<?php echo $_POST["packaging"];?> Pcs" disabled>
                        </div>
                        <div class="mt-2 mx-3">=</div>
                        <div class="">
                            <input type="text" id="disabledTextInput" class="form-control"
                                placeholder="Rp. <?php echo number_format(packaging(), 0, '', '.');?>" disabled>
                        </div>
                    </div>
                </div>

                <!-- Greeting Card -->
                <div class="mt-2">
                    <label for="disabledTextInput" class="form-label">Greeting Card</label>
                    <div class="col-12 d-flex">
                        <div class=" border p-0">
                            <input type="text" id="disabledTextInput" class="form-control"
                                placeholder="<?php echo $_POST["greetingCard"];?> Pcs" disabled>
                        </div>
                        <div class="mt-2 mx-3">=</div>
                        <div class="">
                            <input type="text" id="disabledTextInput" class="form-control"
                                placeholder="Rp. <?php echo number_format(greetingCard(), 0, '', '.');?>" disabled>
                        </div>
                    </div>
                </div>

                <!-- Sticker -->
                <div class="mt-2">
                    <label for="disabledTextInput" class="form-label">Sticker</label>
                    <div class="col-12 d-flex">
                        <div class=" border p-0">
                            <input type="text" id="disabledTextInput" class="form-control"
                                placeholder="<?php echo $_POST["sticker"];?> Lembar Cetak " disabled>
                        </div>
                        <div class="mt-2 mx-3">=</div>
                        <div class="">
                            <input type="text" id="disabledTextInput" class="form-control"
                                placeholder="Rp. <?php echo number_format(sticker(), 0, '', '.');?>" disabled>
                        </div>
                    </div>
                </div>

                <!-- Ticket -->
                <div class="mt-2">
                    <label for="disabledTextInput" class="form-label">Ticket</label>
                    <div class="col-12 d-flex">
                        <div class=" border p-0">
                            <input type="text" id="disabledTextInput" class="form-control"
                                placeholder="<?php echo $_POST["ticket"];?> Pcs " disabled>
                        </div>
                        <div class="mt-2 mx-3">=</div>
                        <div class="">
                            <input type="text" id="disabledTextInput" class="form-control"
                                placeholder="Rp. <?php echo number_format(ticket(), 0, '', '.');?>" disabled>
                        </div>
                    </div>
                </div>

                <!-- Flashdisk -->
                <div class="mt-2">
                    <label for="disabledTextInput" class="form-label">Flashdisk
                        <b><?php echo $_POST["flashdisk"];?></b></label>
                    <input type="text" id="disabledTextInput" class="form-control"
                        placeholder="Rp. <?php echo number_format(flashdisk(), 0, '', '.');?>" disabled>
                </div>
                <!-- Total Hpp 2 -->
                <div class="mt-2">
                    <label for="disabledTextInput" class="form-label"><b>Total HPP 2</b></label>
                    <input type="text" id="disabledTextInput" class="form-control"
                        placeholder="Rp. <?php echo number_format(totalHpp2(), 0, '', '.');?>" disabled>
                </div>

                <!-- Hpp Bonus -->
                <h4 class="fs-2 mt-5">HPP Bonus</h4>
                <div class="mt-4">
                    <label for="disabledTextInput" class="form-label">Bonus Kepala Sekolah</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Rp. <?php echo number_format(bonusKepsek(), 0, '', '.');?>" disabled>

                    <div class="mt-2">
                    <label for="disabledTextInput" class="form-label">Bonus Guru</label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Rp. <?php echo number_format(bonusGuru(), 0, '', '.');?>" disabled>
                </div>

                <div class="mt-2 mb-2">
                    <label for="disabledTextInput" class="form-label"><b>Total HPP Bonus</b></label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Rp. <?php echo number_format(totalHppBonus(), 0, '', '.');?>" disabled>
                </div>
                <!-- <div class = "border border-top"> -->

                <h4 class="fs-2 mt-5">Rumus</h4>
                <div class="mt-4">

                    <p>Rp. <?php echo number_format ($_POST["hargaJual"], 0, '', '.');?> x <?php echo $_POST["buku"] ?> -  Rp. <?php echo number_format(totalHpp1(), 0, '', '.');?> x <?php echo $_POST["buku"] ?> = Rp. <?php echo number_format(rumus1(), 0, '', '.');?></p>
                    <p>Rp. <?php echo number_format(rumus1(), 0, '', '.');?> - Rp. <?php echo number_format(totalHpp2(), 0, '', '.');?> =  Rp. <?php echo number_format(rumus2(), 0, '', '.');?></p> 
                    <p>Rp. <?php echo number_format(rumus2(), 0, '', '.');?> - Rp.<?php echo number_format(totalHppBonus(), 0, '', '.');?> = Rp.<?php echo number_format(pendapatanKotor(), 0, '', '.'); ?></p>
                    <div class="mt-5">
                    <label for="disabledTextInput" class="form-label"><h5><b class="">Total Pendapatan Kotor</b></h5></label>
                    <input type="text" id="disabledTextInput" class="form-control" placeholder="Rp. <?php echo number_format(pendapatanKotor(), 0, '', '.'); ?>" disabled>
                    </div>
                </div>


                </div>
</body>

</html>