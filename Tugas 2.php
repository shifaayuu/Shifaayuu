<?php

    $nama = "Shifa Ayu Rosdiana";
    $kelas = "X RPL 1";
    $kategori = "Non Beasiswa";
    $status = "menunggak terlalu lama";
    $tunggakan = 6;
    $waktuTunggakan = 6;
    $biayaSPP = 700000;
    $denda = 100000;

    function Bayaran(){
        global $nama, $kelas, $kategori, $status, $tunggakan, $waktuTunggakan, $biayaSPP, $denda;
        
        if($tunggakan >= $waktuTunggakan){
            $total = $biayaSPP * $tunggakan + $denda;
        }else{
            $total = $biayaSPP * $tunggakan;
        }

        if($kategori == "Beasiswa"){
            $totalBayar = $total *50/100;
        }else{
            $totalBayar = $total;
        }

        echo "<h1>===Program SPP Sederhana</h1>";
        echo "Nama Lengkap = $nama <br />";
        echo "Kelas = $kelas <br />";
        echo "Kategori = $kategori <br />";
        echo "Biaya SPP = Rp $biayaSPP <br />";
        echo "Tunggakan SPP = $tunggakan Bulan <br />";
        echo "Total Yang Harus Dibayar = Rp $totalBayar <br />";

        if($status == "sudah lunas"){
            echo "status : <span style = 'color : green'> $status </span>";
        }else if($status == "belum lunas"){
            echo "status : <span style = 'color : yellow'> $status </span>";
        }else if($status == "menunggak terlalu lama"){
            echo "status : <span style = 'color : red'> $status </span>";
        }
    }
    echo Bayaran();
?>


