<?php

function konversiDesimalKeBiner($angka) {
    $biner = '';
    while ($angka > 0) {
        $biner = ($angka % 2) . $biner;
        $angka = intdiv($angka, 2);
    }
    return $biner;
}

function hitungNomorBit($angka, $nomorBit) {
    $biner = konversiDesimalKeBiner($angka);
    if ($nomorBit >= strlen($biner)) {
        return null;
    }
    $jumlahBit = 0;
    for ($i = 0; $i <= $nomorBit; $i++) {
        $jumlahBit = ($jumlahBit << 1) + ($biner[$i] == '1' ? 1 : 0);
    }

    return $jumlahBit;
}

// Mengambil input dari pengguna
echo "Masukkan angka desimal: ";
$angka = intval(trim(fgets(STDIN)));

echo "Masukkan nomor bit: ";
$nomorBit = intval(trim(fgets(STDIN)));

$result = hitungNomorBit($angka, $nomorBit);

if ($result === null) {
    echo "Nomor bit melebihi panjang representasi biner dari angka.\n";
} else {
    echo "Hasil dari hitungNomorBit($angka, $nomorBit) adalah: $result\n";
}
