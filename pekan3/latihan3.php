<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
$ar_prodi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informasi", "BD"=>"Bisnis Digital"];
$ar_skill = ["HTML"=>10, "CSS"=>10, "Java Script"=>20, "RWD Bootstrap"=>20, "PHP"=>30, "Python"=>30, "JAVA"=>50];
$ar_domisili = ["Jakarta", "Bogor", "Depok", "Tanggerang", "Bekasi", "Lainnya"];
?>


<h1 style="text-align: center;">Form Fungsi</h1>
<form method="POST">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-laki"> 
        <label for="jk_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="perempuan"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="select" name="prodi" class="custom-select">
        <?php 
        foreach($ar_prodi as $prodi => $p){
        ?>
        <option value="rabbit"><?= $p ?></option>
            <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
            <label class="col-4">Skill Programming</label>
            <div class="col-8">
                <div class="d-flex gap-2 flex-wrap">
                    <?php foreach ($ar_skill as $skill => $s) { ?>
                    <span class="checkbox-group">
                        <input type="checkbox" name="skill" id="skill_0" value="<?= $skill ?>">
                        <label for="skill_0" class="custom-control-label">
                            <?= $skill ?>
                        </label>
                    </span>
                    <?php } ?>
                </div>
            </div>
        </div>
  <div class="form-group row">
    <label for="select1" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <select id="select1" name="domisili" class="custom-select">
      <?php 
        foreach($ar_domisili as $d){
        ?>
        <option value="domisili"><?= $d ?></option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="text1" name="email" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php 
  if(isset($_POST['proses'])){
 
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $jk = $_POST['jk'];
  $prodi = $_POST['prodi'];
  $skill = $_POST['skill'];
  $domisili = $_POST['domisili'];
  $email = $_POST['email'];
  $total = 100;

    ?>
  
  Nama : <?= $nim ?><br/>
  NIM : <?= $nama ?><br/>
  JK : <?= $jk ?><br/>
  Skill Programming : <?= $s ?><br>

<?php 
  function skor_skill($total){
    if($total >= 100 && $total <= 150 ) {
      return "sangat Baik";
    } elseif ($total >= 60 && $total <= 100 ) {
      return "Baik";
    } elseif ($total >= 40 && $total <= 60){
      return "Cukup";
    } elseif ($total >= 0 && $total <= 40){
      return "Kurang";
    } else {
      return "Tidak memadai";  
    } 

  }
  echo 'Kategori Skill :'.skor_skill($total);
}
?>
