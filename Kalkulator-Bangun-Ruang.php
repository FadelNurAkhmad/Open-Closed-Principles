<?php

interface Kalkulator
{
    public function Kal();
}

class Persegipanjang{
    private $luas;
    protected $lebar=2;
    protected $panjang=3;

    public function Inputpanjang(){
    return $this->panjang;
    }

    public function Inputlebar(){
    return $this->lebar;
    }

    function LuasPersegiPanjang(){
    $this->luas= $this->panjang * $this->lebar;
    echo " Bangun Ruang = Luas Persegi Panjang </br>";
    echo " Panjang = $this->panjang </br>";
    echo " Lebar = $this->lebar </br>";
    echo " Luas Persegi Panjang = $this->luas </br>";
    }

}

class Bolabola {
    public $phi=3.14;
    public $jari=7;
   
    public function Inputphi(){
        $this->phi;
        return $this->phi;
    }
    public function Inputjari(){
        $this->jari;
        return $this->jari;
    }

    public function VolumeBola(){

     $this->volbola = 4/3*($this->phi * $this->jari * $this->jari * $this->jari);
     echo "</br> Bangun Ruang = Volume Bola </br>";
     echo " Phi = $this->phi </br>";
     echo " Jari-jari = $this->jari </br>";
     echo " Volume Bola = $this->volbola </br>";  
    }
   
   }

class Kerucutkerucut extends Bolabola {
    public $tinggi=14;

    public function Inputtinggi(){
     $this->tinggi;
     return $this->tinggi;
    }
   
    public function VolumeKerucut(){

     $this->volkerucut = 1/3*($this->phi * $this->jari * $this->jari * $this->tinggi);
     echo "</br> Bangun Ruang = Volume Kerucut </br>";
     echo " Jari-jari = $this->jari </br>";
     echo " Tinggi = $this->tinggi </br>";
     echo " Volume Kerucut = $this->volkerucut </br>";  
    }
   
   }

class Kubuskubus {
    public $sisi=10;

    public function Inputsisi(){
     $this->sisi;
     return $this->sisi;
    }
   
    public function VolumeKubus(){

     $this->volkubus = ($this->sisi * $this->sisi * $this->sisi);
     echo "</br> Bangun Ruang = Volume Kubus </br>";
     echo " Sisi = $this->sisi </br>";
     echo " Volume Kubus = $this->volkubus </br>";  
    }
   
   }

class Lingkaran extends Bolabola {
   
    public function KelilingLingkran(){

     $this->kellingkaran = 2*($this->phi * $this->jari);
     echo "</br> Bangun Ruang = Keliling Lingkaran </br>";
     echo " Phi = $this->phi </br>";
     echo " Jari-jari = $this->jari </br>";
     echo " Keliling Lingkaran = $this->kellingkaran";  
    }
   
   }

class kalkulatorBangunRuangFactory
{
    public function initializeKalkulatorBangunRuang($type)
    {
        if ($type === 'LuasPersegiPanjang') {
            return new Persegipanjang();
        }
        if ($type == 'volbola') {
            return new Bolabola();
        }
        if ($type === 'volkubus') {
            return new Kubuskubus();
        }
        if ($type === 'volkerucut') {
            return new Kerucutkerucut();
        }
        if ($type === 'kellingkaran') {
            return new Lingkaran();
        }

        throw new Exception("Unsupported payment method");
    }
}

 $ikiluasloh =new Persegipanjang();
 $ikiluasloh->inputpanjang();
 $ikiluasloh->Inputlebar();
 $ikiluasloh->LuasPersegiPanjang();

 $volumeBola =new Bolabola();
 $volumeBola->Inputphi();
 $volumeBola->Inputjari();
 $volumeBola->VolumeBola();

 $volumeKerucut =new Kerucutkerucut();
 $volumeKerucut->Inputtinggi();
 $volumeKerucut->VolumeKerucut();

 $volumeKubus =new Kubuskubus();
 $volumeKubus->Inputsisi();
 $volumeKubus->VolumeKubus();

 $kelLingkaran =new Lingkaran();
 $kelLingkaran->KelilingLingkran();

 $pilihanKalkulatorBangunRuang = 'volkubus';
 $kalkulatorBangunRuangFactory = new KalkulatorBangunRuangFactory();
 $kalkulatorBangunRuang = $kalkulatorBangunRuangFactory ->initializeKalkulatorBangunRuang($pilihanKalkulatorBangunRuang);
 $hasilKalkulatorBangunRuang = $kalkulatorBangunRuang ->hitungBangunRuang();
 print_r($hasilKalkulatorBangunRuang );

?>