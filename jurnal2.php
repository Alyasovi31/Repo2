<?php
$daftarbuah=
    [
        "Apel" => 10000,
        "pisang" => 15000,
        "mangga" => 15000,
    ];
    echo("masukan nama buah(Apel, pisang, mangga):");
    $inputbuah=readline();

    function cekbuah($inputbuah, $daftarbuah){
        foreach($daftarbuah as $buah => $harga){
            if($inputbuah == $buah){
                return(true);
            }
        }
        return(false);

    };
$stokbuah = cekbuah($inputbuah, $daftarbuah);
if($stokbuah == true){
    $harga =$daftarbuah[$input];
    $jumlah = readline("masukan jumlah buah: ");
    $total =$jumlah * $harga;
    echo "total harga buah untuk stok $stokbuah adalah $total";
}else{
    echo "maaf tidak tersedia";
}

 


