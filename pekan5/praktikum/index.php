<?php

class Manusia {
    public $nama;
    public $umur;
    
    public function setNama($name) {
        $this->nama = $name;
    }

    public function setUmur($umur){
        $this->umur = $umur;
    }

    public function getInfo(){
        return "Nama : " . $this->nama . ", Umur:" . $this->umur;
    }

}


// Membuat objek
$ahmad = new Manusia();
$ahmad->setNama("Ahmad Fadjar");
$ahmad->setUmur(25);

$astrid = new Manusia();
$astrid->setNama("Astrid Annasya");
$astrid->setUmur(20);

echo $ahmad->getInfo();
echo "<br>";
echo $astrid->getInfo();

?>