<?php 
    function rumus1(){
        $hargaJual = $_POST["hargaJual"];
        $jumlahBuku = $_POST["buku"];

        $rumus1 = ($hargaJual * $jumlahBuku) - (totalHpp1() * $jumlahBuku) ;
        return $rumus1;
    }

    function rumus2(){
        $rumus2 = rumus1() - totalHpp2();
        return $rumus2;
    }

    function pendapatanKotor(){
        $pendapatanKotor = rumus2() - totalHppBonus();
        return $pendapatanKotor;
    }


?>