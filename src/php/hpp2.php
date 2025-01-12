<?php 


global $packaging;
global $greetingCard;
global $ukuranPackaging;
global $sticker;

global $ticket;
global $flashdisk;

function greetingCard(){
    $greetingCard = $_POST["greetingCard"];
    // global $greetingCard;
    $hasilGreetingCard = 0;
    if ($greetingCard >= 100) {
        $hasilGreetingCard = $greetingCard * 500;
    } elseif ($greetingCard == 0) {
        $hasilGreetingCard = 0;
    } else {
        echo "inputan salah";
    }
    return $hasilGreetingCard;
}

function ticket(){
    $hargaTicket = 0;
    $ticket = $_POST["ticket"];

    
    // global $ticket;
    switch ($ticket) {
        case '32':
            $hargaTicket = 6500;
            break;
        case '64':
            $hargaTicket = 13000;
            break;
        case '96':
            $hargaTicket = 19500;
            break;
        case '128':
            $hargaTicket = 26000;
            break;
        case '160':
            $hargaTicket = 32500;
            break;
        case '192':
            $hargaTicket = 39000;
            break;
        case '224':
            $hargaTicket = 45500;
            break;
        case '256':
            $hargaTicket = 52000;
            break;
        case '288':
            $hargaTicket = 58500;
            break;
        case '320':
            $hargaTicket = 65000;
            break;
        case '352':
            $hargaTicket = 71500;
            break;
        case '384':
            $hargaTicket = 78000;
            break;
        case '416':
            $hargaTicket = 84500;
            break;
        case '448':
            $hargaTicket = 91000;
            break;
        case '480':
            $hargaTicket = 97500;
            break;
        case '512':
            $hargaTicket = 104000;
            break;
        
        default:
            # code...
            break;
        }
        return $hargaTicket ;
}
    function flashdisk(){
        $flashdisk = 0;
$flashdisk = $_POST["flashdisk"];

        // global $flashdisk;
        $hargaFlashdisk = 0;
        switch ($flashdisk) {
            case '64GB':
                $hargaFlashdisk = 122000;
                break;
            case '128GB':
                $hargaFlashdisk = 229000;
                break;
            default:
                echo "";
                break;
        }
        return $hargaFlashdisk;
    }

    function sticker(){
        $sticker = $_POST["sticker"];
        // global $sticker;
        
        $biayaSticker = $sticker * 6500;
        // echo $biayaSticker;
        return $biayaSticker;
    }

    function packaging(){
        $ukuranPackaging = $_POST["ukuranPackaging"];
        $packaging = $_POST["packaging"];

        // $ukuranPackaging = 0;
        // global $ukuranPackaging;
        // global $packaging;
        $hargaPackaging = 0;
        switch ($ukuranPackaging) {
        case '25x35':
            $hargaPackaging = 1600;
            break;
        case '30x40':
            $hargaPackaging = 1700;
            break;
        case '35x45':
            $hargaPackaging = 2000;
            break;
        case '42x56':
            $hargaPackaging = 2500;
            break;
        default:
            echo "";
            break;
        }
        $biayaPackaging = $hargaPackaging * $packaging;
        return $biayaPackaging;
    }

    function totalHpp2(){
        $totalHpp2 = greetingCard() + ticket() + flashdisk() + sticker() + packaging();
        return $totalHpp2;
    }
?>