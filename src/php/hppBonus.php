<?php 
    function bonusGuru(){
        $hargaBonusGuru = 0;
        $bonusGuru = $_POST["freeguru"];
        switch ($bonusGuru) {
            case '8R+Frame':
                $hargaBonusGuru = 26000;
                break;
            case '12R+Frame':
                $hargaBonusGuru = 47500;
                break;
            case '16R+Frame':
                $hargaBonusGuru = 88000;
                break;
            case '20R+Frame':
                $hargaBonusGuru = 141300;
                break;
            case '24R+Frame':
                $hargaBonusGuru = 237800;
                break;
            default:

                break;
        }
        return $hargaBonusGuru;
    }

    function bonusKepsek(){
        $hargaBonusKepsek = 0;
        $bonusKepsek = $_POST["freekepsek"];
        switch ($bonusKepsek) {
            case '12R+Frame':
                $hargaBonusKepsek = 47500;
                break;
            case '16R+Frame':
                $hargaBonusKepsek = 88000;
                break;
            case '20R+Frame':
                $hargaBonusKepsek = 141300;
                break;
            case '24R+Frame':
                $hargaBonusKepsek = 237800;
                break;
            default:
                // echo 0;
                break;
        }
        return $hargaBonusKepsek;
    }

    function totalHppBonus(){
        $totalHppBonus = bonusGuru() + bonusKepsek();
        return $totalHppBonus; 
    }
?>