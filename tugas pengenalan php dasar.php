<?php

function luasLingkaran($jariJari)
{
    return round(3.14 * $jariJari * $jariJari, 2);
}

function kelilingLingkaran($jariJari)
{
    return round(2 * 3.14 * $jariJari, 2);
}

function luasPersegi($panjang, $lebar)
{
    return round($panjang * $lebar, 2);
}

for ($i = 1; $i <= 100; $i++) {
    echo number_format($i, 2) . "\n";

    if ($i % 3 == 0) {
        $jariJariLingkaran = $i / 3;
        $luas = luasLingkaran($jariJariLingkaran);
        echo number_format($luas, 2) . "\n";
    }

    if ($i % 5 == 0) {
        $jariJariLingkaran = $i / 5;
        $keliling = kelilingLingkaran($jariJariLingkaran);
        echo number_format($keliling, 2) . "\n";
    }

    if ($i % 3 == 0 && $i % 5 == 0) {
        $panjangPersegi = $i / 3;
        $lebarPersegi = $i / 5;
        $luasPersegi = luasPersegi($panjangPersegi, $lebarPersegi);
        echo number_format($luasPersegi, 2) . "\n";
    }
}

?>
