<?php
class model {
    const urunler = array(
        "1" => array("urunAdi" => "Klavye","birimFiyati" => 100,"stok" => 10,"resim" => "klavye.jpg"),
        "2" => array("urunAdi" => "Fare","birimFiyati" => 50,"stok" => 10,"resim" => "fare.jpg"),
        "3" => array("urunAdi" => "Monitör","birimFiyati" => 500,"stok" => 10,"resim" => "monitor.jpg"),
        "4" => array("urunAdi" => "Kasa","birimFiyati" => 300,"stok" => 10,"resim" => "kasa.jpg"),
        "5" => array("urunAdi" => "Anakart","birimFiyati" => 400,"stok" => 10,"resim" => "anakart.jpg"),
    );
    public function data($param){
        $rusult = [];
        foreach(self::urunler as $urun){
            if( str_split($urun["urunAdi"],strlen($param))[0] == ($param,){
                array_push($rusult,$urun);
            }
        }return $rusult;
    }
?>