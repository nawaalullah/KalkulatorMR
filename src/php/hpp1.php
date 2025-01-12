<?php 

// include "../src/php/hpp2.php";    
    function ukuran(){
        $ukuranBuku = 0;
        $hargaBuku = 0;
        $buku = $_POST["buku"];
        $jumlahHalaman = $_POST["jumlah"];
        $ukuranBuku = $_POST["ukuran"];

        if ($buku >= 50 && $buku <= 79) {
            if ($ukuranBuku === "A4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 94000;
                        break;
                    case '60':
                        $hargaBuku = 112000;
                        break;
                    case '80':
                        $hargaBuku = 129000;
                        break;
                    case '100':
                        $hargaBuku = 146000;
                        break;
                    case '120':
                        $hargaBuku = 163000;
                        break;
                    case '150':
                        $hargaBuku = 189000;
                        break;
                    case '180':
                        $hargaBuku = 215000;
                        break;
                    case '200':
                        $hargaBuku = 232000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "A5" ) {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 75000;
                        break;
                    case '60':
                        $hargaBuku = 83000;
                        break;
                    case '80':
                        $hargaBuku = 92000;
                        break;
                    case '100':
                        $hargaBuku = 100000;
                        break;
                    case '120':
                        $hargaBuku = 110000;
                        break;
                    case '150':
                        $hargaBuku = 122000;
                        break;
                    case '180':
                        $hargaBuku = 135000;
                        break;
                    case '200':
                        $hargaBuku = 144000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 117000;
                        break;
                    case '60':
                        $hargaBuku = 142000;
                        break;
                    case '80':
                        $hargaBuku = 167000;
                        break;
                    case '100':
                        $hargaBuku = 191000;
                        break;
                    case '120':
                        $hargaBuku = 216000;
                        break;
                    case '150':
                        $hargaBuku = 253000;
                        break;
                    case '180':
                        $hargaBuku = 290000;
                        break;
                    case '200':
                        $hargaBuku = 315000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B5") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 81000;
                        break;
                    case '60':
                        $hargaBuku = 93000;
                        break;
                    case '80':
                        $hargaBuku = 105000;
                        break;
                    case '100':
                        $hargaBuku = 116000;
                        break;
                    case '120':
                        $hargaBuku = 128000;
                        break;
                    case '150':
                        $hargaBuku = 146000;
                        break;
                    case '180':
                        $hargaBuku = 163000;
                        break;
                    case '200':
                        $hargaBuku = 175000;
                        break;
                    default:
                        
                        break;
                  } 
            } else {
                echo "";
            }
        } elseif ($buku >= 80 && $buku <= 99) {
            if ($ukuranBuku === "A4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 86000;
                        break;
                    case '60':
                        $hargaBuku = 103000;
                        break;
                    case '80':
                        $hargaBuku = 119000;
                        break;
                    case '100':
                        $hargaBuku = 136000;
                        break;
                    case '120':
                        $hargaBuku = 153000;
                        break;
                    case '150':
                        $hargaBuku = 178000;
                        break;
                    case '180':
                        $hargaBuku = 203000;
                        break;
                    case '200':
                        $hargaBuku = 220000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "A5" ) {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 68000;
                        break;
                    case '60':
                        $hargaBuku = 76000;
                        break;
                    case '80':
                        $hargaBuku = 84000;
                        break;
                    case '100':
                        $hargaBuku = 930000;
                        break;
                    case '120':
                        $hargaBuku = 101000;
                        break;
                    case '150':
                        $hargaBuku = 114000;
                        break;
                    case '180':
                        $hargaBuku = 126000;
                        break;
                    case '200':
                        $hargaBuku = 134000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 108000;
                        break;
                    case '60':
                        $hargaBuku = 132000;
                        break;
                    case '80':
                        $hargaBuku = 156000;
                        break;
                    case '100':
                        $hargaBuku = 180000;
                        break;
                    case '120':
                        $hargaBuku = 204000;
                        break;
                    case '150':
                        $hargaBuku = 240000;
                        break;
                    case '180':
                        $hargaBuku = 276000;
                        break;
                    case '200':
                        $hargaBuku = 300000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B5") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 74000;
                        break;
                    case '60':
                        $hargaBuku = 85000;
                        break;
                    case '80':
                        $hargaBuku = 96000;
                        break;
                    case '100':
                        $hargaBuku = 108000;
                        break;
                    case '120':
                        $hargaBuku = 119000;
                        break;
                    case '150':
                        $hargaBuku = 136000;
                        break;
                    case '180':
                        $hargaBuku = 153000;
                        break;
                    case '200':
                        $hargaBuku = 165000;
                        break;
                    default:
                        
                        break;
                  } 
            } else {
                echo "";
            }
        } elseif ($buku >= 100 && $buku <= 124) {
            if ($ukuranBuku === "A4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 79000;
                        break;
                    case '60':
                        $hargaBuku = 95000;
                        break;
                    case '80':
                        $hargaBuku = 112000;
                        break;
                    case '100':
                        $hargaBuku = 129000;
                        break;
                    case '120':
                        $hargaBuku = 145000;
                        break;
                    case '150':
                        $hargaBuku = 170000;
                        break;
                    case '180':
                        $hargaBuku = 194000;
                        break;
                    case '200':
                        $hargaBuku = 210000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "A5" ) {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 60000;
                        break;
                    case '60':
                        $hargaBuku = 69000;
                        break;
                    case '80':
                        $hargaBuku = 77000;
                        break;
                    case '100':
                        $hargaBuku = 85000;
                        break;
                    case '120':
                        $hargaBuku = 94000;
                        break;
                    case '150':
                        $hargaBuku = 106000;
                        break;
                    case '180':
                        $hargaBuku = 118000;
                        break;
                    case '200':
                        $hargaBuku = 127000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 101000;
                        break;
                    case '60':
                        $hargaBuku = 124000;
                        break;
                    case '80':
                        $hargaBuku = 148000;
                        break;
                    case '100':
                        $hargaBuku = 171000;
                        break;
                    case '120':
                        $hargaBuku = 195000;
                        break;
                    case '150':
                        $hargaBuku = 231000;
                        break;
                    case '180':
                        $hargaBuku = 266000;
                        break;
                    case '200':
                        $hargaBuku = 290000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B5") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 67000;
                        break;
                    case '60':
                        $hargaBuku = 78000;
                        break;
                    case '80':
                        $hargaBuku = 89000;
                        break;
                    case '100':
                        $hargaBuku = 100000;
                        break;
                    case '120':
                        $hargaBuku = 112000;
                        break;
                    case '150':
                        $hargaBuku = 129000;
                        break;
                    case '180':
                        $hargaBuku = 145000;
                        break;
                    case '200':
                        $hargaBuku = 156000;
                        break;
                    default:
                        
                        break;
                  } 
            } else {
                echo "";
            }
        } elseif ($buku >= 125 && $buku <= 149) {
            if ($ukuranBuku === "A4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 77000;
                        break;
                    case '60':
                        $hargaBuku = 94000;
                        break;
                    case '80':
                        $hargaBuku = 110000;
                        break;
                    case '100':
                        $hargaBuku = 126000;
                        break;
                    case '120':
                        $hargaBuku = 142000;
                        break;
                    case '150':
                        $hargaBuku = 167000;
                        break;
                    case '180':
                        $hargaBuku = 191000;
                        break;
                    case '200':
                        $hargaBuku = 208000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "A5" ) {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 59000;
                        break;
                    case '60':
                        $hargaBuku = 67000;
                        break;
                    case '80':
                        $hargaBuku = 76000;
                        break;
                    case '100':
                        $hargaBuku = 83000;
                        break;
                    case '120':
                        $hargaBuku = 92000;
                        break;
                    case '150':
                        $hargaBuku = 104000;
                        break;
                    case '180':
                        $hargaBuku = 116000;
                        break;
                    case '200':
                        $hargaBuku = 124000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 95000;
                        break;
                    case '60':
                        $hargaBuku = 116000;
                        break;
                    case '80':
                        $hargaBuku = 136000;
                        break;
                    case '100':
                        $hargaBuku = 157000;
                        break;
                    case '120':
                        $hargaBuku = 177000;
                        break;
                    case '150':
                        $hargaBuku = 210000;
                        break;
                    case '180':
                        $hargaBuku = 239000;
                        break;
                    case '200':
                        $hargaBuku = 259000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B5") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 65000;
                        break;
                    case '60':
                        $hargaBuku = 76000;
                        break;
                    case '80':
                        $hargaBuku = 86000;
                        break;
                    case '100':
                        $hargaBuku = 97000;
                        break;
                    case '120':
                        $hargaBuku = 106000;
                        break;
                    case '150':
                        $hargaBuku = 121000;
                        break;
                    case '180':
                        $hargaBuku = 136000;
                        break;
                    case '200':
                        $hargaBuku = 145000;
                        break;
                    default:
                        
                        break;
                  } 
            } else {
                echo "";
            }
        } elseif ($buku >= 150 && $buku <= 174) {
            if ($ukuranBuku === "A4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 74000;
                        break;
                    case '60':
                        $hargaBuku = 90000;
                        break;
                    case '80':
                        $hargaBuku = 105000;
                        break;
                    case '100':
                        $hargaBuku = 121000;
                        break;
                    case '120':
                        $hargaBuku = 136000;
                        break;
                    case '150':
                        $hargaBuku = 160000;
                        break;
                    case '180':
                        $hargaBuku = 184000;
                        break;
                    case '200':
                        $hargaBuku = 199000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "A5" ) {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 57000;
                        break;
                    case '60':
                        $hargaBuku = 66000;
                        break;
                    case '80':
                        $hargaBuku = 74000;
                        break;
                    case '100':
                        $hargaBuku = 82000;
                        break;
                    case '120':
                        $hargaBuku = 90000;
                        break;
                    case '150':
                        $hargaBuku = 102000;
                        break;
                    case '180':
                        $hargaBuku = 114000;
                        break;
                    case '200':
                        $hargaBuku = 121000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 87000;
                        break;
                    case '60':
                        $hargaBuku = 105000;
                        break;
                    case '80':
                        $hargaBuku = 122000;
                        break;
                    case '100':
                        $hargaBuku = 140000;
                        break;
                    case '120':
                        $hargaBuku = 157000;
                        break;
                    case '150':
                        $hargaBuku = 185000;
                        break;
                    case '180':
                        $hargaBuku = 210000;
                        break;
                    case '200':
                        $hargaBuku = 227000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B5") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 61000;
                        break;
                    case '60':
                        $hargaBuku = 72000;
                        break;
                    case '80':
                        $hargaBuku = 78000;
                        break;
                    case '100':
                        $hargaBuku = 88000;
                        break;
                    case '120':
                        $hargaBuku = 95000;
                        break;
                    case '150':
                        $hargaBuku = 108000;
                        break;
                    case '180':
                        $hargaBuku = 121000;
                        break;
                    case '200':
                        $hargaBuku = 128000;
                        break;
                    default:
                        
                        break;
                  } 
            } else {
                echo "";
            }
        } elseif ($buku >= 175 && $buku <= 199) {
            if ($ukuranBuku === "A4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 69000;
                        break;
                    case '60':
                        $hargaBuku = 82000;
                        break;
                    case '80':
                        $hargaBuku = 96000;
                        break;
                    case '100':
                        $hargaBuku = 110000;
                        break;
                    case '120':
                        $hargaBuku = 124000;
                        break;
                    case '150':
                        $hargaBuku = 144000;
                        break;
                    case '180':
                        $hargaBuku = 165000;
                        break;
                    case '200':
                        $hargaBuku = 178000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "A5" ) {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 56000;
                        break;
                    case '60':
                        $hargaBuku = 62000;
                        break;
                    case '80':
                        $hargaBuku = 69000;
                        break;
                    case '100':
                        $hargaBuku = 76000;
                        break;
                    case '120':
                        $hargaBuku = 82000;
                        break;
                    case '150':
                        $hargaBuku = 94000;
                        break;
                    case '180':
                        $hargaBuku = 103000;
                        break;
                    case '200':
                        $hargaBuku = 110000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 81000;
                        break;
                    case '60':
                        $hargaBuku = 97000;
                        break;
                    case '80':
                        $hargaBuku = 112000;
                        break;
                    case '100':
                        $hargaBuku = 127000;
                        break;
                    case '120':
                        $hargaBuku = 143000;
                        break;
                    case '150':
                        $hargaBuku = 167000;
                        break;
                    case '180':
                        $hargaBuku = 189000;
                        break;
                    case '200':
                        $hargaBuku = 204000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B5") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 58000;
                        break;
                    case '60':
                        $hargaBuku = 67000;
                        break;
                    case '80':
                        $hargaBuku = 73000;
                        break;
                    case '100':
                        $hargaBuku = 81000;
                        break;
                    case '120':
                        $hargaBuku = 88000;
                        break;
                    case '150':
                        $hargaBuku = 99000;
                        break;
                    case '180':
                        $hargaBuku = 111000;
                        break;
                    case '200':
                        $hargaBuku = 116000;
                        break;
                    default:
                        
                        break;
                  } 
            } else {
                echo "";
            }
        } elseif ($buku >= 200 && $buku <= 224) {
            if ($ukuranBuku === "A4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 63000;
                        break;
                    case '60':
                        $hargaBuku = 75000;
                        break;
                    case '80':
                        $hargaBuku = 87000;
                        break;
                    case '100':
                        $hargaBuku = 99000;
                        break;
                    case '120':
                        $hargaBuku = 112000;
                        break;
                    case '150':
                        $hargaBuku = 130000;
                        break;
                    case '180':
                        $hargaBuku = 148000;
                        break;
                    case '200':
                        $hargaBuku = 160000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "A5" ) {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 51000;
                        break;
                    case '60':
                        $hargaBuku = 57000;
                        break;
                    case '80':
                        $hargaBuku = 63000;
                        break;
                    case '100':
                        $hargaBuku = 69000;
                        break;
                    case '120':
                        $hargaBuku = 75000;
                        break;
                    case '150':
                        $hargaBuku = 84000;
                        break;
                    case '180':
                        $hargaBuku = 94000;
                        break;
                    case '200':
                        $hargaBuku = 99000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 75000;
                        break;
                    case '60':
                        $hargaBuku = 88000;
                        break;
                    case '80':
                        $hargaBuku = 102000;
                        break;
                    case '100':
                        $hargaBuku = 116000;
                        break;
                    case '120':
                        $hargaBuku = 130000;
                        break;
                    case '150':
                        $hargaBuku = 151000;
                        break;
                    case '180':
                        $hargaBuku = 171000;
                        break;
                    case '200':
                        $hargaBuku = 185000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B5") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 54000;
                        break;
                    case '60':
                        $hargaBuku = 61000;
                        break;
                    case '80':
                        $hargaBuku = 66000;
                        break;
                    case '100':
                        $hargaBuku = 74000;
                        break;
                    case '120':
                        $hargaBuku = 79000;
                        break;
                    case '150':
                        $hargaBuku = 90000;
                        break;
                    case '180':
                        $hargaBuku = 100000;
                        break;
                    case '200':
                        $hargaBuku = 106000;
                        break;
                    default:
                        
                        break;
                  } 
            } else {
                echo "";
            }
        } elseif ($buku >= 225 && $buku <= 249) {
            if ($ukuranBuku === "A4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 59000;
                        break;
                    case '60':
                        $hargaBuku = 71000;
                        break;
                    case '80':
                        $hargaBuku = 82000;
                        break;
                    case '100':
                        $hargaBuku = 93000;
                        break;
                    case '120':
                        $hargaBuku = 104000;
                        break;
                    case '150':
                        $hargaBuku = 120000;
                        break;
                    case '180':
                        $hargaBuku = 137000;
                        break;
                    case '200':
                        $hargaBuku = 148000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "A5" ) {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 49000;
                        break;
                    case '60':
                        $hargaBuku = 55000;
                        break;
                    case '80':
                        $hargaBuku = 59000;
                        break;
                    case '100':
                        $hargaBuku = 65000;
                        break;
                    case '120':
                        $hargaBuku = 71000;
                        break;
                    case '150':
                        $hargaBuku = 79000;
                        break;
                    case '180':
                        $hargaBuku = 87000;
                        break;
                    case '200':
                        $hargaBuku = 93000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 71000;
                        break;
                    case '60':
                        $hargaBuku = 84000;
                        break;
                    case '80':
                        $hargaBuku = 96000;
                        break;
                    case '100':
                        $hargaBuku = 109000;
                        break;
                    case '120':
                        $hargaBuku = 121000;
                        break;
                    case '150':
                        $hargaBuku = 141000;
                        break;
                    case '180':
                        $hargaBuku = 159000;
                        break;
                    case '200':
                        $hargaBuku = 171000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B5") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 52000;
                        break;
                    case '60':
                        $hargaBuku = 58000;
                        break;
                    case '80':
                        $hargaBuku = 63000;
                        break;
                    case '100':
                        $hargaBuku = 70000;
                        break;
                    case '120':
                        $hargaBuku = 76000;
                        break;
                    case '150':
                        $hargaBuku = 84000;
                        break;
                    case '180':
                        $hargaBuku = 94000;
                        break;
                    case '200':
                        $hargaBuku = 99000;
                        break;
                    default:
                        
                        break;
                  } 
            } else {
                echo "";
            }
        } elseif ($buku >= 250 && $buku <= 274) {
            if ($ukuranBuku === "A4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 55000;
                        break;
                    case '60':
                        $hargaBuku = 65000;
                        break;
                    case '80':
                        $hargaBuku = 76000;
                        break;
                    case '100':
                        $hargaBuku = 85000;
                        break;
                    case '120':
                        $hargaBuku = 95000;
                        break;
                    case '150':
                        $hargaBuku = 111000;
                        break;
                    case '180':
                        $hargaBuku = 126000;
                        break;
                    case '200':
                        $hargaBuku = 135000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "A5" ) {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 45000;
                        break;
                    case '60':
                        $hargaBuku = 50000;
                        break;
                    case '80':
                        $hargaBuku = 55000;
                        break;
                    case '100':
                        $hargaBuku = 60000;
                        break;
                    case '120':
                        $hargaBuku = 65000;
                        break;
                    case '150':
                        $hargaBuku = 73000;
                        break;
                    case '180':
                        $hargaBuku = 80000;
                        break;
                    case '200':
                        $hargaBuku = 85000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 66000;
                        break;
                    case '60':
                        $hargaBuku = 77000;
                        break;
                    case '80':
                        $hargaBuku = 89000;
                        break;
                    case '100':
                        $hargaBuku = 100000;
                        break;
                    case '120':
                        $hargaBuku = 112000;
                        break;
                    case '150':
                        $hargaBuku = 130000;
                        break;
                    case '180':
                        $hargaBuku = 146000;
                        break;
                    case '200':
                        $hargaBuku = 158000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B5") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 47000;
                        break;
                    case '60':
                        $hargaBuku = 54000;
                        break;
                    case '80':
                        $hargaBuku = 58000;
                        break;
                    case '100':
                        $hargaBuku = 64000;
                        break;
                    case '120':
                        $hargaBuku = 69000;
                        break;
                    case '150':
                        $hargaBuku = 77000;
                        break;
                    case '180':
                        $hargaBuku = 86000;
                        break;
                    case '200':
                        $hargaBuku = 91000;
                        break;
                    default:
                        
                        break;
                  } 
            } else {
                echo "";
            }
        } elseif ($buku >= 275 && $buku <= 299) {
            if ($ukuranBuku === "A4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 53000;
                        break;
                    case '60':
                        $hargaBuku = 62000;
                        break;
                    case '80':
                        $hargaBuku = 72000;
                        break;
                    case '100':
                        $hargaBuku = 81000;
                        break;
                    case '120':
                        $hargaBuku = 91000;
                        break;
                    case '150':
                        $hargaBuku = 104000;
                        break;
                    case '180':
                        $hargaBuku = 118000;
                        break;
                    case '200':
                        $hargaBuku = 128000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "A5" ) {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 43000;
                        break;
                    case '60':
                        $hargaBuku = 48000;
                        break;
                    case '80':
                        $hargaBuku = 53000;
                        break;
                    case '100':
                        $hargaBuku = 57000;
                        break;
                    case '120':
                        $hargaBuku = 62000;
                        break;
                    case '150':
                        $hargaBuku = 70000;
                        break;
                    case '180':
                        $hargaBuku = 76000;
                        break;
                    case '200':
                        $hargaBuku = 81000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 64000;
                        break;
                    case '60':
                        $hargaBuku = 74000;
                        break;
                    case '80':
                        $hargaBuku = 85000;
                        break;
                    case '100':
                        $hargaBuku = 96000;
                        break;
                    case '120':
                        $hargaBuku = 106000;
                        break;
                    case '150':
                        $hargaBuku = 123000;
                        break;
                    case '180':
                        $hargaBuku = 139000;
                        break;
                    case '200':
                        $hargaBuku = 149000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B5") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 46000;
                        break;
                    case '60':
                        $hargaBuku = 52000;
                        break;
                    case '80':
                        $hargaBuku = 57000;
                        break;
                    case '100':
                        $hargaBuku = 62000;
                        break;
                    case '120':
                        $hargaBuku = 66000;
                        break;
                    case '150':
                        $hargaBuku = 75000;
                        break;
                    case '180':
                        $hargaBuku = 82000;
                        break;
                    case '200':
                        $hargaBuku = 87000;
                        break;
                    default:
                        
                        break;
                  } 
            } else {
                echo "";
            }
        } elseif ($buku >= 300 && $buku <= 324) {
            if ($ukuranBuku === "A4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 49000;
                        break;
                    case '60':
                        $hargaBuku = 57000;
                        break;
                    case '80':
                        $hargaBuku = 66000;
                        break;
                    case '100':
                        $hargaBuku = 75000;
                        break;
                    case '120':
                        $hargaBuku = 83000;
                        break;
                    case '150':
                        $hargaBuku = 96000;
                        break;
                    case '180':
                        $hargaBuku = 110000;
                        break;
                    case '200':
                        $hargaBuku = 118000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "A5" ) {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 39000;
                        break;
                    case '60':
                        $hargaBuku = 44000;
                        break;
                    case '80':
                        $hargaBuku = 49000;
                        break;
                    case '100':
                        $hargaBuku = 53000;
                        break;
                    case '120':
                        $hargaBuku = 57000;
                        break;
                    case '150':
                        $hargaBuku = 64000;
                        break;
                    case '180':
                        $hargaBuku = 71000;
                        break;
                    case '200':
                        $hargaBuku = 75000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 59000;
                        break;
                    case '60':
                        $hargaBuku = 69000;
                        break;
                    case '80':
                        $hargaBuku = 79000;
                        break;
                    case '100':
                        $hargaBuku = 89000;
                        break;
                    case '120':
                        $hargaBuku = 99000;
                        break;
                    case '150':
                        $hargaBuku = 115000;
                        break;
                    case '180':
                        $hargaBuku = 129000;
                        break;
                    case '200':
                        $hargaBuku = 139000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B5") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 42000;
                        break;
                    case '60':
                        $hargaBuku = 47000;
                        break;
                    case '80':
                        $hargaBuku = 52000;
                        break;
                    case '100':
                        $hargaBuku = 57000;
                        break;
                    case '120':
                        $hargaBuku = 61000;
                        break;
                    case '150':
                        $hargaBuku = 69000;
                        break;
                    case '180':
                        $hargaBuku = 76000;
                        break;
                    case '200':
                        $hargaBuku = 80000;
                        break;
                    default:
                        
                        break;
                  } 
            } else {
                echo "";
            }
        } elseif ($buku >= 325 && $buku <= 349) {
            if ($ukuranBuku === "A4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 47000;
                        break;
                    case '60':
                        $hargaBuku = 56000;
                        break;
                    case '80':
                        $hargaBuku = 63000;
                        break;
                    case '100':
                        $hargaBuku = 72000;
                        break;
                    case '120':
                        $hargaBuku = 80000;
                        break;
                    case '150':
                        $hargaBuku = 92000;
                        break;
                    case '180':
                        $hargaBuku = 104000;
                        break;
                    case '200':
                        $hargaBuku = 113000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "A5" ) {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 39000;
                        break;
                    case '60':
                        $hargaBuku = 43000;
                        break;
                    case '80':
                        $hargaBuku = 47000;
                        break;
                    case '100':
                        $hargaBuku = 51000;
                        break;
                    case '120':
                        $hargaBuku = 56000;
                        break;
                    case '150':
                        $hargaBuku = 62000;
                        break;
                    case '180':
                        $hargaBuku = 68000;
                        break;
                    case '200':
                        $hargaBuku = 72000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 57000;
                        break;
                    case '60':
                        $hargaBuku = 67000;
                        break;
                    case '80':
                        $hargaBuku = 76000;
                        break;
                    case '100':
                        $hargaBuku = 86000;
                        break;
                    case '120':
                        $hargaBuku = 95000;
                        break;
                    case '150':
                        $hargaBuku = 110000;
                        break;
                    case '180':
                        $hargaBuku = 123000;
                        break;
                    case '200':
                        $hargaBuku = 133000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B5") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 41000;
                        break;
                    case '60':
                        $hargaBuku = 46000;
                        break;
                    case '80':
                        $hargaBuku = 50000;
                        break;
                    case '100':
                        $hargaBuku = 56000;
                        break;
                    case '120':
                        $hargaBuku = 59000;
                        break;
                    case '150':
                        $hargaBuku = 66000;
                        break;
                    case '180':
                        $hargaBuku = 73000;
                        break;
                    case '200':
                        $hargaBuku = 77000;
                        break;
                    default:
                        
                        break;
                  } 
            } else {
                echo "";
            }
        } elseif ($buku >= 350 && $buku <= 374) {
            if ($ukuranBuku === "A4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 46000;
                        break;
                    case '60':
                        $hargaBuku = 54000;
                        break;
                    case '80':
                        $hargaBuku = 61000;
                        break;
                    case '100':
                        $hargaBuku = 69000;
                        break;
                    case '120':
                        $hargaBuku = 76000;
                        break;
                    case '150':
                        $hargaBuku = 89000;
                        break;
                    case '180':
                        $hargaBuku = 100000;
                        break;
                    case '200':
                        $hargaBuku = 108000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "A5" ) {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 38000;
                        break;
                    case '60':
                        $hargaBuku = 42000;
                        break;
                    case '80':
                        $hargaBuku = 46000;
                        break;
                    case '100':
                        $hargaBuku = 50000;
                        break;
                    case '120':
                        $hargaBuku = 54000;
                        break;
                    case '150':
                        $hargaBuku = 59000;
                        break;
                    case '180':
                        $hargaBuku = 65000;
                        break;
                    case '200':
                        $hargaBuku = 69000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 56000;
                        break;
                    case '60':
                        $hargaBuku = 65000;
                        break;
                    case '80':
                        $hargaBuku = 74000;
                        break;
                    case '100':
                        $hargaBuku = 83000;
                        break;
                    case '120':
                        $hargaBuku = 92000;
                        break;
                    case '150':
                        $hargaBuku = 106000;
                        break;
                    case '180':
                        $hargaBuku = 118000;
                        break;
                    case '200':
                        $hargaBuku = 127000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B5") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 40000;
                        break;
                    case '60':
                        $hargaBuku = 45000;
                        break;
                    case '80':
                        $hargaBuku = 49000;
                        break;
                    case '100':
                        $hargaBuku = 54000;
                        break;
                    case '120':
                        $hargaBuku = 57000;
                        break;
                    case '150':
                        $hargaBuku = 64000;
                        break;
                    case '180':
                        $hargaBuku = 71000;
                        break;
                    case '200':
                        $hargaBuku = 75000;
                        break;
                    default:
                        
                        break;
                  } 
            } else {
                echo "";
            }
        } elseif ($buku >= 375 && $buku <= 399) {
            if ($ukuranBuku === "A4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 45000;
                        break;
                    case '60':
                        $hargaBuku = 53000;
                        break;
                    case '80':
                        $hargaBuku = 59000;
                        break;
                    case '100':
                        $hargaBuku = 67000;
                        break;
                    case '120':
                        $hargaBuku = 75000;
                        break;
                    case '150':
                        $hargaBuku = 85000;
                        break;
                    case '180':
                        $hargaBuku = 96000;
                        break;
                    case '200':
                        $hargaBuku = 104000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "A5" ) {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 38000;
                        break;
                    case '60':
                        $hargaBuku = 41000;
                        break;
                    case '80':
                        $hargaBuku = 45000;
                        break;
                    case '100':
                        $hargaBuku = 49000;
                        break;
                    case '120':
                        $hargaBuku = 53000;
                        break;
                    case '150':
                        $hargaBuku = 58000;
                        break;
                    case '180':
                        $hargaBuku = 63000;
                        break;
                    case '200':
                        $hargaBuku = 67000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 55000;
                        break;
                    case '60':
                        $hargaBuku = 63000;
                        break;
                    case '80':
                        $hargaBuku = 72000;
                        break;
                    case '100':
                        $hargaBuku = 80000;
                        break;
                    case '120':
                        $hargaBuku = 89000;
                        break;
                    case '150':
                        $hargaBuku = 102000;
                        break;
                    case '180':
                        $hargaBuku = 114000;
                        break;
                    case '200':
                        $hargaBuku = 123000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B5") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 39000;
                        break;
                    case '60':
                        $hargaBuku = 44000;
                        break;
                    case '80':
                        $hargaBuku = 48000;
                        break;
                    case '100':
                        $hargaBuku = 53000;
                        break;
                    case '120':
                        $hargaBuku = 56000;
                        break;
                    case '150':
                        $hargaBuku = 62000;
                        break;
                    case '180':
                        $hargaBuku = 69000;
                        break;
                    case '200':
                        $hargaBuku = 72000;
                        break;
                    default:
                        
                        break;
                  } 
            } else {
                echo "";
            }
        } elseif ($buku >= 400 && $buku <= 450) {
            if ($ukuranBuku === "A4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 44000;
                        break;
                    case '60':
                        $hargaBuku = 51000;
                        break;
                    case '80':
                        $hargaBuku = 58000;
                        break;
                    case '100':
                        $hargaBuku = 65000;
                        break;
                    case '120':
                        $hargaBuku = 72000;
                        break;
                    case '150':
                        $hargaBuku = 82000;
                        break;
                    case '180':
                        $hargaBuku = 93000;
                        break;
                    case '200':
                        $hargaBuku = 100000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "A5" ) {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 38000;
                        break;
                    case '60':
                        $hargaBuku = 40000;
                        break;
                    case '80':
                        $hargaBuku = 44000;
                        break;
                    case '100':
                        $hargaBuku = 48000;
                        break;
                    case '120':
                        $hargaBuku = 51000;
                        break;
                    case '150':
                        $hargaBuku = 57000;
                        break;
                    case '180':
                        $hargaBuku = 61000;
                        break;
                    case '200':
                        $hargaBuku = 65000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B4") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 54000;
                        break;
                    case '60':
                        $hargaBuku = 62000;
                        break;
                    case '80':
                        $hargaBuku = 70000;
                        break;
                    case '100':
                        $hargaBuku = 78000;
                        break;
                    case '120':
                        $hargaBuku = 86000;
                        break;
                    case '150':
                        $hargaBuku = 99000;
                        break;
                    case '180':
                        $hargaBuku = 111000;
                        break;
                    case '200':
                        $hargaBuku = 119000;
                        break;
                    default:
                        
                        break;
                  } 
            } elseif ($ukuranBuku === "B5") {
                switch ($jumlahHalaman) {
                    case '40':
                        $hargaBuku = 39000;
                        break;
                    case '60':
                        $hargaBuku = 43000;
                        break;
                    case '80':
                        $hargaBuku = 47000;
                        break;
                    case '100':
                        $hargaBuku = 51000;
                        break;
                    case '120':
                        $hargaBuku = 55000;
                        break;
                    case '150':
                        $hargaBuku = 60000;
                        break;
                    case '180':
                        $hargaBuku = 67000;
                        break;
                    case '200':
                        $hargaBuku = 70000;
                        break;
                    default:
                        
                        break;
                  } 
            } else {
                echo "";
            }
        } else {
            echo "";
        }
        // printFoto($hargaBuku);
        
        return $hargaBuku;
        
    }

    function printFoto(){
        $hargaPrint = 0;
        $print = $_POST["print"];
        global $hargaBuku;
        switch ($print) {
            case '4R':
                $hargaPrint = 2400;
                break;
            case '8R':
                $hargaPrint = 6500;
                break;
            case '12R':
                $hargaPrint = 16500;
                break;
            case '16R':
                $hargaPrint = 45000;
                break;
            case '20R':
                $hargaPrint = 57000;
                break;
            case '24R':
                $hargaPrint = 120000;
                break;
            default:
                echo "";
                break;
        }
        return $hargaPrint;
        
    }

    function jumlahAkhir(){
        $totalukuranFoto = ukuran() + printFoto();
        return $totalukuranFoto;
    }

    function box(){
        $hargaBox = 0;
        $box = $_POST["box"];  
        switch ($box) {
            case 'Hard Box':
                $hargaBox = 25000;
                break;
            case 'Soft Box':
                $hargaBox = 15000;
                break;
            default:
                # code...
                break;
        }
        return $hargaBox;

    }

    function totalHpp1(){
        $totalHpp1 = ukuran() + printFoto() + box();
        return $totalHpp1;
    }
  
    
?>

