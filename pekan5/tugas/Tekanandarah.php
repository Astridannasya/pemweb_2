<?php 

class Tekanandarah {
    public $nama;
    public $umur;
    public $tekdarah;

    public function __construct($nama, $umur, $tekdarah){
        $this->nama = $nama;
        $this->umur = $umur;
        $this->tekdarah = $tekdarah;
    }

    public function getNama(){
        return $this->nama;
    }

    public function getUmur(){
        return $this->umur;
    }

    public function getTekdarah(){
        return $this->tekdarah;
    }

    public function hasilket(){
        if($this->tekdarah < 90){
            return 'Hipotensi(Tekanan Darah Rendah)';
        } elseif($this->tekdarah < 120){
            return 'Normal';
        } elseif($this->tekdarah < 140){
            return 'Prahipertensi';
        } elseif($this->tekdarah < 160){
            return 'Hipertensi Derajat 1';
        } elseif($this->tekdarah < 180){
            return 'Hipertensi Derajat 2';
        } else {
            return 'Hipertensi Darurat';
        }
    }

    public function efek(){

        if($this->tekdarah < 90){
            return 'Tekanan darah Anda terlalu rendah, segera konsultasikan dengan dokter';
        } elseif($this->tekdarah < 120){
            return 'Tekanan darah Anda normal, tetap jaga kesehatan';
        } elseif($this->tekdarah < 140){
            return 'Tekanan darah Anda sedikit tinggi, perhatikan gaya hidup sehat';
        } elseif($this->tekdarah < 160){
            return 'Tekanan darah Anda tinggi, segera periksa ke dokter';
        } elseif($this->tekdarah < 180){
            return 'Tekanan darah Anda sangat tinggi, segera periksa ke dokter';
        } else {
            return 'Anda mengalami hipertensi darurat! Periksa ke dokter sekarang juga';
        }

    }

}
?>
