<?php
class laundry
{
    function totalBayar($jenis, $berat, $pakaian_dalam, $struk)
    {
        $setrika = 3500;
        $cuci_setrika = 5000;
        $yes_pakaian_dalam = 5000;
        $no_struk = 10000;

        $total_harga = 0;

        if ($jenis == 'Setrika') {
            $total_harga = $setrika * $berat;
        } elseif ($jenis == 'Cuci dan setrika') {
            $total_harga = $cuci_setrika * $berat;
        }

        if (!$struk) {
            $total_harga += $no_struk;
        }

        if ($pakaian_dalam) {
            $total_harga += $yes_pakaian_dalam;
        }

        return $total_harga;
    }
}
