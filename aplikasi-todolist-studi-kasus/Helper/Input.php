<?php

function input(string $info):string{
    echo "$info : ";
    $result = fgets(STDIN); // untuk mendapatkan input
    return trim($result); // trim untuk menghapus spasi di awal dan akhir
}