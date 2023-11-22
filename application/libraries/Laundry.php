<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laundry {

    public function test ($jenisLaundry, $beratPakaian, $pakaianDalam, $struk) {
        $hargaPerKg = ($jenisLaundry == 'setrika') ? 3500 : 5000;
        $biayaPakaianDalam = ($pakaianDalam) ? 5000 : 0;
        $biayaDenda = ($struk) ? 0 : 10000;

        $totalHarga = ($beratPakaian * $hargaPerKg) + $biayaPakaianDalam + $biayaDenda;

        return $totalHarga;
    }
}
